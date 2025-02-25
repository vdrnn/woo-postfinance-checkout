<?php
/**
 *
 * WC_PostFinanceCheckout_Order_Reference Class
 *
 * PostFinanceCheckout
 * This plugin will add support for all PostFinanceCheckout payments methods and connect the PostFinanceCheckout servers to your WooCommerce webshop (https://postfinance.ch/en/business/products/e-commerce/postfinance-checkout-all-in-one.html).
 *
 * @category Class
 * @package  PostFinanceCheckout
 * @author   wallee AG (http://www.wallee.com/)
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Software License (ASL 2.0)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}
/**
 * Class WC_PostFinanceCheckout_Order_Reference.
 *
 * @class WC_PostFinanceCheckout_Order_Reference
 */
/**
 * This class handles the database setup and migration.
 */
class WC_PostFinanceCheckout_Order_Reference {
	const ORDER_ID = 'order_id';
	const ORDER_NUMBER = 'order_number';
}
