<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
//
require_once 'RecommendationsType.php';
require_once 'AbstractResponseType.php';

/**
 * Calls made form seller or buyer find out what the most relevant tags and values 
 * are for a given category 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategorySpecificsResponseType.html
 *
 */
class GetCategorySpecificsResponseType extends AbstractResponseType
{
	/**
	 * @var RecommendationsType
	 */
	protected $Recommendations;
	/**
	 * @var string
	 */
	protected $TaskReferenceID;
	/**
	 * @var string
	 */
	protected $FileReferenceID;

	/**
	 * @return RecommendationsType
	 * @param integer $index 
	 */
	function getRecommendations($index = null)
	{
		if ($index !== null) {
			return $this->Recommendations[$index];
		} else {
			return $this->Recommendations;
		}
	}
	/**
	 * @return void
	 * @param RecommendationsType $value 
	 * @param  $index 
	 */
	function setRecommendations($value, $index = null)
	{
		if ($index !== null) {
			$this->Recommendations[$index] = $value;
		} else {
			$this->Recommendations = $value;
		}
	}
	/**
	 * @return void
	 * @param RecommendationsType $value 
	 */
	function addRecommendations($value)
	{
		$this->Recommendations[] = $value;
	}
	/**
	 * @return string
	 */
	function getTaskReferenceID()
	{
		return $this->TaskReferenceID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTaskReferenceID($value)
	{
		$this->TaskReferenceID = $value;
	}
	/**
	 * @return string
	 */
	function getFileReferenceID()
	{
		return $this->FileReferenceID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFileReferenceID($value)
	{
		$this->FileReferenceID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategorySpecificsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Recommendations' =>
					array(
						'required' => false,
						'type' => 'RecommendationsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'TaskReferenceID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FileReferenceID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
