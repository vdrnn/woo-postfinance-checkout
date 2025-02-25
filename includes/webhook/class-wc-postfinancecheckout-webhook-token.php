<?php
/**
 *
 * WC_PostFinanceCheckout_Webhook_Token Class
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
 * Webhook processor to handle token state transitions.
 */
class WC_PostFinanceCheckout_Webhook_Token extends WC_PostFinanceCheckout_Webhook_Abstract {

	/**
	 * Process.
	 *
	 * @param WC_PostFinanceCheckout_Webhook_Request $request request.
	 * @return void
	 * @throws \PostFinanceCheckout\Sdk\ApiException ApiException.
	 * @throws \PostFinanceCheckout\Sdk\Http\ConnectionException ConnectionException.
	 * @throws \PostFinanceCheckout\Sdk\VersioningException VersioningException.
	 */
	public function process( WC_PostFinanceCheckout_Webhook_Request $request ) {
		$token_service = WC_PostFinanceCheckout_Service_Token::instance();
		$token_service->update_token( $request->get_space_id(), $request->get_entity_id() );
	}
}
