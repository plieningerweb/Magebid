<?php
/**
 * Netresearch MySql-Update from Version 0.8.0 to 0.8.1
 *
 * @category  Mbid
 * @package   Mbid_Magebid
 * @author    Andreas Plieninger <info@plieninger.org>
 * @copyright 2010 Andreas Plieninger
 * @link      http://www.magebid.com/
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

$installer = $this;

$installer->startSetup();
$installer->run("
ALTER TABLE `magebid_transaction` ADD `reservation_quantity` INT NULL ;
ALTER TABLE `magebid_auction_detail` ADD `ebay_sku` VARCHAR( 50 ) NULL ;
ALTER TABLE `magebid_transaction` ADD `order_shipping_cost` DECIMAL( 11, 2 ) NULL ;
ALTER TABLE `magebid_transaction` ADD `order_total` DECIMAL( 11, 2 ) NULL ;

INSERT INTO `magebid_auction_type` (`magebid_auction_type_id`, `name`) VALUES
(3, 'StoresFixedPrice');
");

$installer->endSetup();
