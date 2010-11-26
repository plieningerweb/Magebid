<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'MyMessagesMessageType.php';

/**
 * Contains a list of message data. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyMessagesMessageArrayType.html
 *
 */
class MyMessagesMessageArrayType extends EbatNs_ComplexType
{
	/**
	 * @var MyMessagesMessageType
	 */
	protected $Message;

	/**
	 * @return MyMessagesMessageType
	 * @param integer $index 
	 */
	function getMessage($index = null)
	{
		if ($index !== null) {
			return $this->Message[$index];
		} else {
			return $this->Message;
		}
	}
	/**
	 * @return void
	 * @param MyMessagesMessageType $value 
	 * @param  $index 
	 */
	function setMessage($value, $index = null)
	{
		if ($index !== null) {
			$this->Message[$index] = $value;
		} else {
			$this->Message = $value;
		}
	}
	/**
	 * @return void
	 * @param MyMessagesMessageType $value 
	 */
	function addMessage($value)
	{
		$this->Message[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyMessagesMessageArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Message' =>
					array(
						'required' => false,
						'type' => 'MyMessagesMessageType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
