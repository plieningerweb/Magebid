<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returns the status of save to template operation. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SaveItemToSellingManagerTemplateResponseType.html
 *
 */
class SaveItemToSellingManagerTemplateResponseType extends AbstractResponseType
{
	/**
	 * @var long
	 */
	protected $TemplateID;

	/**
	 * @return long
	 */
	function getTemplateID()
	{
		return $this->TemplateID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setTemplateID($value)
	{
		$this->TemplateID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SaveItemToSellingManagerTemplateResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TemplateID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
