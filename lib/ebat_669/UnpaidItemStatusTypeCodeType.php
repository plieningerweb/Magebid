<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Unpaid item status. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UnpaidItemStatusTypeCodeType.html
 *
 * @property string FinalValueFeeDenied
 * @property string FinalValueFeeCredited
 * @property string FinalValueFeeEligible
 * @property string AwaitingSellerResponse
 * @property string AwaitingBuyerResponse
 * @property string UnpaidItemFiled
 * @property string UnpaidItemEligible
 * @property string CustomCode
 */
class UnpaidItemStatusTypeCodeType extends EbatNs_FacetType
{
	const CodeType_FinalValueFeeDenied = 'FinalValueFeeDenied';
	const CodeType_FinalValueFeeCredited = 'FinalValueFeeCredited';
	const CodeType_FinalValueFeeEligible = 'FinalValueFeeEligible';
	const CodeType_AwaitingSellerResponse = 'AwaitingSellerResponse';
	const CodeType_AwaitingBuyerResponse = 'AwaitingBuyerResponse';
	const CodeType_UnpaidItemFiled = 'UnpaidItemFiled';
	const CodeType_UnpaidItemEligible = 'UnpaidItemEligible';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UnpaidItemStatusTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_UnpaidItemStatusTypeCodeType = new UnpaidItemStatusTypeCodeType();

?>
