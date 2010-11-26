<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
//
require_once 'BestOfferStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'BestOfferTypeCodeType.php';

/**
 * Container for BestOffer properties associated with the item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BestOfferDetailsType.html
 *
 */
class BestOfferDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $BestOfferCount;
	/**
	 * @var boolean
	 */
	protected $BestOfferEnabled;
	/**
	 * @var AmountType
	 */
	protected $BestOffer;
	/**
	 * @var BestOfferStatusCodeType
	 */
	protected $BestOfferStatus;
	/**
	 * @var BestOfferTypeCodeType
	 */
	protected $BestOfferType;

	/**
	 * @return int
	 */
	function getBestOfferCount()
	{
		return $this->BestOfferCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBestOfferCount($value)
	{
		$this->BestOfferCount = $value;
	}
	/**
	 * @return boolean
	 */
	function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBestOfferEnabled($value)
	{
		$this->BestOfferEnabled = $value;
	}
	/**
	 * @return AmountType
	 */
	function getBestOffer()
	{
		return $this->BestOffer;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setBestOffer($value)
	{
		$this->BestOffer = $value;
	}
	/**
	 * @return BestOfferStatusCodeType
	 */
	function getBestOfferStatus()
	{
		return $this->BestOfferStatus;
	}
	/**
	 * @return void
	 * @param BestOfferStatusCodeType $value 
	 */
	function setBestOfferStatus($value)
	{
		$this->BestOfferStatus = $value;
	}
	/**
	 * @return BestOfferTypeCodeType
	 */
	function getBestOfferType()
	{
		return $this->BestOfferType;
	}
	/**
	 * @return void
	 * @param BestOfferTypeCodeType $value 
	 */
	function setBestOfferType($value)
	{
		$this->BestOfferType = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BestOfferDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BestOfferCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BestOfferEnabled' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BestOffer' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BestOfferStatus' =>
					array(
						'required' => false,
						'type' => 'BestOfferStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BestOfferType' =>
					array(
						'required' => false,
						'type' => 'BestOfferTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
