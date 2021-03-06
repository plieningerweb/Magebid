<?php
/**
 * Mbid_Magebid_Block_Adminhtml_Templates_Main
 *
 * @category  Mbid
 * @package   Mbid_Magebid
 * @author    André Herrn <info@magebid.com>
 * @copyright 2010 André Herrn | Netresearch GmbH & Co.KG (http://www.netresearch.de)
 * @link      http://www.magebid.com/
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
class Mbid_Magebid_Block_Adminhtml_Templates_Main extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Construct
     *
     * @return void
     */	
    public function __construct()
    {
        $this->_addButtonLabel = Mage::helper('magebid')->__('Add New');
        parent::__construct();

        $this->_blockGroup = 'magebid';
        $this->_controller = 'adminhtml_templates_main';
      	$this->_headerText = Mage::helper('magebid')->__('Magebid Templates');
    }
}
?>