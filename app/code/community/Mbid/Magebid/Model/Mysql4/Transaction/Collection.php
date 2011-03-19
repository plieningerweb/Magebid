<?php
/**
 * Mbid_Magebid_Model_Mysql4_Transaction_Collection
 *
 * @category  Mbid
 * @package   Mbid_Magebid
 * @author    André Herrn <info@magebid.com>
 * @copyright 2010 André Herrn | Netresearch GmbH & Co.KG (http://www.netresearch.de)
 * @link      http://www.magebid.com/
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
class Mbid_Magebid_Model_Mysql4_Transaction_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    /**
     * Construct
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('magebid/transaction');
	}

    /**
     * Manipulation SQL: for every Transaction Collection, Load the Transaction-User-Data as well
     *
     * @return void
     */
    public function joinFields()
    {
		$this->getSelect()
            ->join(
                array('mtu' => $this->getTable('magebid/transaction_user')),
                'mtu.magebid_transaction_id = main_table.magebid_transaction_id');
    }
}
?>