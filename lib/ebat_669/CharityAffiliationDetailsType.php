<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
//
require_once 'CharityAffiliationDetailType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Lists the nonprofit charity organization affiliations for a specified user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CharityAffiliationDetailsType.html
 *
 */
class CharityAffiliationDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var CharityAffiliationDetailType
	 */
	protected $CharityAffiliationDetail;

	/**
	 * @return CharityAffiliationDetailType
	 * @param integer $index 
	 */
	function getCharityAffiliationDetail($index = null)
	{
		if ($index !== null) {
			return $this->CharityAffiliationDetail[$index];
		} else {
			return $this->CharityAffiliationDetail;
		}
	}
	/**
	 * @return void
	 * @param CharityAffiliationDetailType $value 
	 * @param  $index 
	 */
	function setCharityAffiliationDetail($value, $index = null)
	{
		if ($index !== null) {
			$this->CharityAffiliationDetail[$index] = $value;
		} else {
			$this->CharityAffiliationDetail = $value;
		}
	}
	/**
	 * @return void
	 * @param CharityAffiliationDetailType $value 
	 */
	function addCharityAffiliationDetail($value)
	{
		$this->CharityAffiliationDetail[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CharityAffiliationDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CharityAffiliationDetail' =>
					array(
						'required' => false,
						'type' => 'CharityAffiliationDetailType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
