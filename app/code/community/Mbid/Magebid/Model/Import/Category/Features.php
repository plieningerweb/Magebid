<?php
/**
 * Mbid_Magebid_Model_Import_Category_Features
 *
 * @category  Mbid
 * @package   Mbid_Magebid
 * @author    André Herrn <info@magebid.com>
 * @copyright 2010 André Herrn | Netresearch GmbH & Co.KG (http://www.netresearch.de)
 * @link      http://www.magebid.com/
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
class Mbid_Magebid_Model_Import_Category_Features extends Mage_Core_Model_Abstract
{
	/**
	 * wether we ignore the error or add it to the session
	 * @var bool description
	 */
	protected $_addSessionError = false;

    /**
     * Construct
     *
     * @return void
     */
	protected function _construct()
    {
        $this->_init('magebid/import_category_features');
    }

    /**
     * Main Function to import ebay category features
     *
     * @return boolean
     */
	public function importCategoryFeatures()
	{
		if (!$category_features = Mage::getModel('magebid/ebay_miscellaneous')->getCategoriesFeatures())
		{
			return false;
		}

		//Reset Import Categories Table (set conditions required to 0)
		Mage::getResourceModel('magebid/import_category')->setAllConditionsToNull();

		//Delete all existing conditions
		$this->getResource()->deleteAll();

		//For every category
		foreach ($category_features->Category as $category)
		{
			//save if condition is required/not required
			$this->_saveIfConditionIsUsed($category);
		}

		return true;
	}

    /**
     * Save flag 'condition_enabled' in the table 'import_category' is necessary
     *
     * @param object $category
     *
     * @return void
     */
	protected function _saveIfConditionIsUsed($category)
	{
		$import_category = Mage::getModel('magebid/import_category')->load($category->CategoryID,'category_id');
		if ($import_category->getId())
		{
			if ($category->ConditionEnabled == 'Required' || $category->ConditionEnabled == 'Enabled')
			{
				$import_category->setConditionEnabled(1);
				$import_category->save(); //Save conditions relationships
			}
			else if ($category->ConditionEnabled=='Disabled')
			{
				$import_category->setConditionEnabled(0);
				$import_category->save();
			}
		}

		$this->_saveConditions($category);
	}

    /**
     * Save the detailed conditions in t he table 'import_category_features'
     *
     * @param object $category
     *
     * @return void
     */
	protected function _saveConditions($category)
	{
		//If not conditions existing, return
		if (count($category->ConditionValues->Condition)==0) return;

		foreach ($category->ConditionValues->Condition as $condition)
		{
			try
			{
				$data = array(
					'key_id' => 'Condition',
					'value_id' => $condition->ID,
					'value_display_name' => $condition->DisplayName,
					'category_id' => $category->CategoryID
				);

				Mage::getModel('magebid/import_category_features')->addData($data)->save();
			}
			catch (Exception $e)
			{
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
			}
		}
	}

	/**
	 * wether to add errors to the session or not
	 *
	 * @param bool $bool
	 *
	 * @return $this
	 */
	public function setAddSessionError($bool=false) {
		$this->_addSessionError = (bool) $bool;
		return $this;
	}

    /**
     * get the detailed conditions from the table 'import_category_features'
     *
     * @param int $ebay_category_id eBay Category ID
     *
     * @return array
     */
	public function getAvailableConditions($ebay_category_id = 0)
	{
		$avaiable_conditions = array();

		//Get Conditions
		if (($ebay_category_id!=0) && $condition_enabled = $this->_getConditionEnabled($ebay_category_id))
		{
			$avaiable_conditions = $this->_getConditions($ebay_category_id);
		}

		//array_unshift($avaiable_conditions, array('value'=>'', 'label'=>Mage::helper('magebid')->__('-- Please Select --')));
		return $avaiable_conditions;
	}

    /**
     * Get true/false if confitions for an ebay category are existing
     *
     * @param int $ebay_category_id eBay Category ID
     *
     * @return boolean
     */
	protected function _getConditionEnabled($ebay_category_id)
	{
		$import_category = Mage::getModel('magebid/import_category')->load($ebay_category_id,'category_id');
		//prevent endless loop
		if(!$import_category->getId())
		{
			if($this->_addSessionError)
			{
				Mage::getSingleton('adminhtml/session')->addError(
	                Mage::helper('magebid')->__('You must update the profile. Category %s does not longer exist',$ebay_category_id,$this->getEbayItemId())
	            );
			}
			return false;
		}

		if (!is_null($import_category->getConditionEnabled()))
		{
			if ($import_category->getConditionEnabled()==1) return true;
			if ($import_category->getConditionEnabled()==0) return false;
		}
		else if (($import_category->getCategoryLevel()==1) && is_null($import_category->getConditionEnabled()))
		{
			return false;
		}
		else if (is_null($import_category->getConditionEnabled()))
		{
			return $this->_getConditionEnabled($import_category->getCategoryParentId());
		}
	}

    /**
     * get the detailed conditions for an ebay category
     *
     * @param int $ebay_category_id eBay Category ID
     *
     * @return array
     */
	protected function _getConditions($ebay_category_id)
	{
		//Get Collection
		$collection = parent::getCollection();
		$collection->addFieldToFilter('category_id',$ebay_category_id);
		$collection->addFieldToFilter('key_id','Condition');
		$collection->setOrder('value_id','asc');
		$collection->load();

		//Load Intance of Category
		$import_category = Mage::getModel('magebid/import_category')->load($ebay_category_id,'category_id');

		if (count(($collection->getItems())==0) && ($import_category->getCategoryLevel()!=1))
		{
			return $this->_getConditions($import_category->getCategoryParentId());
		}
		else if ((count($collection->getItems())==0) && ($import_category->getCategoryLevel()==1))
		{
			return array();
		}
		else if (count($collection->getItems())>0)
		{

			return $collection->toOptionArray();
		}
	}

}
?>
