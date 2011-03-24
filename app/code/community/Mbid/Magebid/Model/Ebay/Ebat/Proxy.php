<?php


class Mbid_Magebid_Model_Ebay_Ebat_Proxy extends EbatNs_ServiceProxy {
	/**
     * Old error_reporting()-level
     * @var int
     */
	protected $_old_error_level;
	
	function setNewErrorReporting() {
		//Set lower Error_Reporting
		$this->_old_error_level = error_reporting();
		error_reporting(E_ERROR | E_PARSE);
	}
	
	function setOldErrorReporting() {
		//enable old Error_Reporting
		error_reporting($this->_old_error_level);
	}
	
	function call( $method, $request, $parseMode = EBATNS_PARSEMODE_CALL )
	{
		$this->setNewErrorReporting();
		
		$return = parent::call($method, $request, $parseMode = EBATNS_PARSEMODE_CALL);
		
		$this->setOldErrorReporting();
		
		return $return;
	}
	
}