<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * ListingEnhancementsCodeType - Type declaration to be used by otherschema. 
 * Indicates optional featuring properties of an item.Featuring properties make a 
 * listing stand out in a search or listingpage, or let the item be featured on the 
 * eBay home page.<br><br>When the Top-Rated Seller program became operational, 
 * some enhanced listing features wereremoved or restricted to certain sellers on 
 * some sites. Use GeteBayDetailsListingFeatureDetails for more information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingEnhancementsCodeType.html
 *
 * @property string Border
 * @property string BoldTitle
 * @property string Featured
 * @property string Highlight
 * @property string HomePageFeatured
 * @property string ProPackBundle
 * @property string BasicUpgradePackBundle
 * @property string ValuePackBundle
 * @property string ProPackPlusBundle
 * @property string CustomCode
 */
class ListingEnhancementsCodeType extends EbatNs_FacetType
{
	const CodeType_Border = 'Border';
	const CodeType_BoldTitle = 'BoldTitle';
	const CodeType_Featured = 'Featured';
	const CodeType_Highlight = 'Highlight';
	const CodeType_HomePageFeatured = 'HomePageFeatured';
	const CodeType_ProPackBundle = 'ProPackBundle';
	const CodeType_BasicUpgradePackBundle = 'BasicUpgradePackBundle';
	const CodeType_ValuePackBundle = 'ValuePackBundle';
	const CodeType_ProPackPlusBundle = 'ProPackPlusBundle';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingEnhancementsCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ListingEnhancementsCodeType = new ListingEnhancementsCodeType();

?>
