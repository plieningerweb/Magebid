<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Identifies the StoreSearch codes (e.g., for GetSearchResults requests). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreSearchCodeType.html
 *
 * @property string AllItemsInTheStore
 * @property string AuctionItemsInTheStore
 * @property string BuyItNowItemsInTheStore
 * @property string BuyItNowItemsInAllStores
 * @property string CustomCode
 */
class StoreSearchCodeType extends EbatNs_FacetType
{
	const CodeType_AllItemsInTheStore = 'AllItemsInTheStore';
	const CodeType_AuctionItemsInTheStore = 'AuctionItemsInTheStore';
	const CodeType_BuyItNowItemsInTheStore = 'BuyItNowItemsInTheStore';
	const CodeType_BuyItNowItemsInAllStores = 'BuyItNowItemsInAllStores';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreSearchCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreSearchCodeType = new StoreSearchCodeType();

?>
