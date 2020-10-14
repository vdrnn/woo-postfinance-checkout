<?php
if (!defined('ABSPATH')) {
	exit();
}
/**
 * PostFinance Checkout WooCommerce
 *
 * This WooCommerce plugin enables to process payments with PostFinance Checkout (https://www.postfinance.ch/checkout).
 *
 * @author wallee AG (http://www.customweb.com/)
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache Software License (ASL 2.0)
 */
/**
 * Webhook processor to handle token state transitions.
 */
class WC_PostFinanceCheckout_Webhook_Token extends WC_PostFinanceCheckout_Webhook_Abstract {

    public function process(WC_PostFinanceCheckout_Webhook_Request $request){
        $token_service = WC_PostFinanceCheckout_Service_Token::instance();
		$token_service->update_token($request->get_space_id(), $request->get_entity_id());
	}
}