<?php
/**
 * Netresearch_Magebid_Block_Adminhtml_Catalog_Product_Grid
 *
 * @category  Netresearch
 * @package   Netresearch_Magebid
 * @author    André Herrn <andre.herrn@netresearch.de>
 * @copyright 2010 André Herrn | Netresearch GmbH & Co.KG (http://www.netresearch.de)
 * @link      http://www.magebid.de/
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
class Netresearch_Magebid_Block_Adminhtml_Catalog_Product_Grid extends Mage_Adminhtml_Block_Catalog_Product_Grid
{
    /**
     * Prepare Massaction
     *
     * @return object
     */	
    protected function _prepareMassaction()
    {
		parent::_prepareMassaction();
		
        $this->getMassactionBlock()->addItem('new_ebay_export', array(
             'label'=> Mage::helper('magebid')->__('Prepare for Ebay'),
             'url'  => $this->getUrl('magebid/adminhtml_export_main/new')
        ));		
		return $this;
    }	
}
?>