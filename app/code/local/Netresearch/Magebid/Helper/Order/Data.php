<?php
/**
 * Netresearch_Magebid_Helper_Order_Data
 *
 * @category  Netresearch
 * @package   Netresearch_Magebid
 * @author    André Herrn <andre.herrn@netresearch.de>
 * @copyright 2010 André Herrn
 * @link      http://www.magebid.de/
*/
class Netresearch_Magebid_Helper_Order_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Get the first-name of a full name
     * 
     * f.e. input "Max Ernst Musterman" returns "Max Ernst"
     * 
     * @param string $name 
     *
     * @return string
     */   
	public function getSplitedFirstname($name)
	{
		$splited_name = explode(" ",$name);
		unset($splited_name[count($splited_name)-1]);
		return implode(" ",$splited_name);
	}
	
    /**
     * Get the first-name of a full name
     * 
     * f.e. input "Max Ernst Muster" returns "Musterman"
     * 
     * @param string $name 
     *
     * @return string
     */   
	public function getSplitedLastname($name)
	{
		$splited_name = explode(" ",$name);
		return $splited_name[count($splited_name)-1];
	}	
	
    /**
     * This function looks for a given address, if there is already an adress for this customer is existing
     * 
     * @param object $customer 
     * @param array $shipping_address_data 
     *
     * @return object|boolean If there is an adress existing return it, else return false
     */   
	public function compareCustomerAddress($customer,$shipping_address_data)
	{
    	$addresses = $customer->getAddresses();
    	foreach ($addresses as $address)
		{
    		$address_data = $address->getData();
    		unset($address_data['entity_id']);
    		unset($address_data['entity_type_id']);
    		unset($address_data['attribute_set_id']);
    		unset($address_data['increment_id']);
    		unset($address_data['parent_id']);
    		unset($address_data['store_id']);
    		unset($address_data['created_at']);
    		unset($address_data['updated_at']);    		
    		unset($address_data['is_active']);
						
    		if ( !array_diff($shipping_address_data, $address_data) ) {
    			return $address;
    		}
		}	
		
		return false;	
	}
	

}
?>