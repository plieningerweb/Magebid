<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies a predefined subset of fields to return. The predefined set of 
 * fieldscan vary for different calls. Only applicable to certain calls (see 
 * request typesthat include a GranularityLevel property). For calls that support 
 * this filter, seethe eBay Web Services guide for a list of the output fields that 
 * are returned foreach level. Only one level can be specified at a time. For 
 * GetSellerList, useDetailLevel or GranularityLevel in a given request, but not 
 * both. ForGetSellerList, if GranularityLevel is specified, DetailLevel is 
 * ignored. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GranularityLevelCodeType.html
 *
 * @property string Coarse
 * @property string Fine
 * @property string Medium
 * @property string CustomCode
 */
class GranularityLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Coarse = 'Coarse';
	const CodeType_Fine = 'Fine';
	const CodeType_Medium = 'Medium';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GranularityLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_GranularityLevelCodeType = new GranularityLevelCodeType();

?>
