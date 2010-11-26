<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * For the US and Germany sites, an eBay item must meet a number of 
 * eligibilityrequirements in order to also be included on eBay Express. One 
 * requirement is thatthe category needs to support Express. Currently, this type 
 * defines no specialmeta-data. (An empty element is returned.) 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExpressEnabledDefinitionType.html
 *
 */
class ExpressEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExpressEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array();
		}
	}
}
?>
