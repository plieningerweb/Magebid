<?php

//include ebay lib
require_once('lib/ebat_669/setincludepath.php');
require_once 'EbatNs_Environment.php';		
require_once 'CompleteSaleRequestType.php';

/**
 * Mbid_Magebid_Model_Ebay_Ebat_Sale
 *
 * @category  Mbid
 * @package   Mbid_Magebid
 * @author    André Herrn <info@magebid.com>
 * @copyright 2010 André Herrn | Netresearch GmbH & Co.KG (http://www.netresearch.de)
 * @link      http://www.magebid.com/
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
class Mbid_Magebid_Model_Ebay_Ebat_Sale extends Mage_Core_Model_Abstract
{
    /**
     * Session-Proxy to send Calls to eBay
     * @var object EbatNs_ServiceProxy
     */	
	protected $_sessionproxy;
	
    /**
     * Old error_reporting()-level
     * @var int
     */	
	protected $_old_error_level;
	
    /**
     * Construct
     * 
     * Save current error_reporting()-level
     * Set error-reporting to 0
     * Define session-Proxy
     *
     * @return void
     */	
	protected function _construct()
    {
        $this->_init('magebid/ebay_ebat_sale');	
		
		//Set lower Error_Reporting
		$this->_old_error_level = error_reporting();
		//error_reporting(E_ERROR | E_PARSE);		
		
		//get Sessionproxy
		$this->_sessionproxy = Mage::getModel('magebid/ebay_ebat_session')->getMagebidConnection();	
    }	
    
    /**
     * Destruct
     * 
     * Reset old error_reporting()-level
     *
     * @return void
     */	
	protected function _destruct() 
	{
		//enable old Error_Reporting
		error_reporting($this->_old_error_level);
	}
	
    /**
     * CompleteSale-Call to five a Feedback about the order-status to eBay
     * 
     * @param object $transaction Transaction Object
     * @param array $tasks Which Feedback to eBay should be given
     *
     * @return boolean
     */		
	public function setCompleteSale($transaction,$tasks)
	{
		$req = new CompleteSaleRequestType();   

		//set ebay_item_id
        $req->setItemID($transaction->getEbayItemId());
        
        //if there is a transaction_id, set it
        if ($transaction->getEbayTransactionId()!="") $req->setTransactionID($transaction->getEbayTransactionId());	
		
        //if there is an order_id, set it
        if ($transaction->getEbayOrderId()!="") $req->setOrderID($transaction->getEbayOrderId());	
        
		//Feedback
		if (isset($tasks['feedback']))
		{
			$feedback = new FeedbackInfoType();
			$feedback->setCommentText($tasks['feedback']['text']);
			$feedback->setCommentType('Positive');		
		    $feedback->setTargetUser($tasks['feedback']['user']);
			$req->setFeedbackInfo($feedback);			
		}
		
		//Paid
		if (isset($tasks['paid'])) $req->setPaid(1);	
		
		//Shipped
		if (isset($tasks['shipped'])) $req->setShipped(1);
			
		if(Mage::getStoreConfig('magebid/magebid_connection/activeactions'))
        	$res = $this->_sessionproxy->CompleteSale($req);
        else {
        	Mage::getModel('magebid/log')->logWarning("transaction-status-change (disabled active actions)","itemid ".$transaction->getEbayItemId()." / transaction ".$transaction->getEbayTransactionId(),var_export($req,true),var_export($res,true),var_export($tasks,true));
        	Mage::getSingleton('adminhtml/session')->addWarning("transaction-status-change (disabled active actions)");
        	return true;
        }
        	
        	
		if ($res->Ack == 'Success')
		{			
			Mage::getModel('magebid/log')->logSuccess("transaction-status-change","itemid ".$transaction->getEbayItemId()." / transaction ".$transaction->getEbayTransactionId(),var_export($req,true),var_export($res,true),var_export($tasks,true));
			return true;
		}
		else
		{
			Mage::getModel('magebid/log')->logError("transaction-status-change","itemid ".$transaction->getEbayItemId()." / transaction ".$transaction->getEbayTransactionId(),var_export($req,true),var_export($res,true),var_export($tasks,true));
			$message = Mage::getSingleton('magebid/ebay_ebat_session')->exceptionHandling($res);
			Mage::getSingleton('adminhtml/session')->addError($message);	
			return false;
		}		
	}			
}
?>
