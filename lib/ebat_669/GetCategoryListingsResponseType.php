<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
//
require_once 'ItemArrayType.php';
require_once 'BuyingGuideDetailsType.php';
require_once 'RelatedSearchKeywordArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'CategoryType.php';
require_once 'CategoryArrayType.php';
require_once 'PaginationResultType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategoryListingsResponseType.html
 *
 */
class GetCategoryListingsResponseType extends AbstractResponseType
{
	/**
	 * @var ItemArrayType
	 */
	protected $ItemArray;
	/**
	 * @var CategoryType
	 */
	protected $Category;
	/**
	 * @var CategoryArrayType
	 */
	protected $SubCategories;
	/**
	 * @var int
	 */
	protected $ItemsPerPage;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var boolean
	 */
	protected $HasMoreItems;
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;
	/**
	 * @var BuyingGuideDetailsType
	 */
	protected $BuyingGuideDetails;
	/**
	 * @var RelatedSearchKeywordArrayType
	 */
	protected $RelatedSearchKeywordArray;
	/**
	 * @var boolean
	 */
	protected $DuplicateItems;

	/**
	 * @return ItemArrayType
	 */
	function getItemArray()
	{
		return $this->ItemArray;
	}
	/**
	 * @return void
	 * @param ItemArrayType $value 
	 */
	function setItemArray($value)
	{
		$this->ItemArray = $value;
	}
	/**
	 * @return CategoryType
	 */
	function getCategory()
	{
		return $this->Category;
	}
	/**
	 * @return void
	 * @param CategoryType $value 
	 */
	function setCategory($value)
	{
		$this->Category = $value;
	}
	/**
	 * @return CategoryArrayType
	 */
	function getSubCategories()
	{
		return $this->SubCategories;
	}
	/**
	 * @return void
	 * @param CategoryArrayType $value 
	 */
	function setSubCategories($value)
	{
		$this->SubCategories = $value;
	}
	/**
	 * @return int
	 */
	function getItemsPerPage()
	{
		return $this->ItemsPerPage;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setItemsPerPage($value)
	{
		$this->ItemsPerPage = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return boolean
	 */
	function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasMoreItems($value)
	{
		$this->HasMoreItems = $value;
	}
	/**
	 * @return PaginationResultType
	 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * @return void
	 * @param PaginationResultType $value 
	 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
	/**
	 * @return BuyingGuideDetailsType
	 */
	function getBuyingGuideDetails()
	{
		return $this->BuyingGuideDetails;
	}
	/**
	 * @return void
	 * @param BuyingGuideDetailsType $value 
	 */
	function setBuyingGuideDetails($value)
	{
		$this->BuyingGuideDetails = $value;
	}
	/**
	 * @return RelatedSearchKeywordArrayType
	 */
	function getRelatedSearchKeywordArray()
	{
		return $this->RelatedSearchKeywordArray;
	}
	/**
	 * @return void
	 * @param RelatedSearchKeywordArrayType $value 
	 */
	function setRelatedSearchKeywordArray($value)
	{
		$this->RelatedSearchKeywordArray = $value;
	}
	/**
	 * @return boolean
	 */
	function getDuplicateItems()
	{
		return $this->DuplicateItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDuplicateItems($value)
	{
		$this->DuplicateItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategoryListingsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemArray' =>
					array(
						'required' => false,
						'type' => 'ItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Category' =>
					array(
						'required' => false,
						'type' => 'CategoryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SubCategories' =>
					array(
						'required' => false,
						'type' => 'CategoryArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemsPerPage' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HasMoreItems' =>
					array(
						'required' => true,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyingGuideDetails' =>
					array(
						'required' => false,
						'type' => 'BuyingGuideDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RelatedSearchKeywordArray' =>
					array(
						'required' => false,
						'type' => 'RelatedSearchKeywordArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DuplicateItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
