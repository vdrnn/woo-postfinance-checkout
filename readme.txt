=== PostFinance Checkout ===
Contributors: customwebgmbh
Tags: woocommerce PostFinance Checkout, woocommerce, PostFinance Checkout, payment, e-commerce, webshop, psp, invoice, packing slips, pdf, customer invoice, processing
Requires at least: 4.7
Tested up to: 6.2
Stable tag: 2.1.19
License: Apache 2
License URI: http://www.apache.org/licenses/LICENSE-2.0

Accept payments in WooCommerce with PostFinance Checkout.

== Description ==

Website: [https://postfinance.ch/en/business/products/e-commerce/postfinance-checkout-all-in-one.html](https://postfinance.ch/en/business/products/e-commerce/postfinance-checkout-all-in-one.html)

The plugin offers an easy and convenient way to accept credit cards and all
other payment methods listed below fast and securely. The payment forms will be fully integrated in your checkout 
and for credit cards there is no redirection to a payment page needed anymore. The pages are by default mobile optimized but 
the look and feel can be changed according the merchants needs. 

This plugin will add support for all PostFinance Checkout payments methods and connect the PostFinance Checkout servers to your WooCommerce webshop.
To use this extension, a PostFinance Checkout account is required. Sign up on [PostFinance Checkout](https://checkout.postfinance.ch/en-ch/user/signup).

== Documentation ==

Additional documentation for this plugin is available [here](https://plugin-documentation.postfinance-checkout.ch/pfpayments/woocommerce/2.1.19/docs/en/documentation.html).

== Support ==

Support queries can be issued on the [PostFinance Checkout support site](https://www.postfinance.ch/en/business/support.html).

== Installation ==

= Minimum Requirements =

* PHP version 5.6 or greater
* WordPress 4.7 or greater
* WooCommerce 3.0.0 or greater

= Automatic installation =

1. Install the plugin via Plugins -> New plugin. Search for 'PostFinance Checkout'.
2. Activate the 'PostFinance Checkout' plugin through the 'Plugins' menu in WordPress
3. Set your PostFinance Checkout credentials at WooCommerce -> Settings -> PostFinance Checkout (or use the *Settings* link in the Plugins overview)
4. You're done, the active payment methods should be visible in the checkout of your webshop.

= Manual installation =

1. Unpack the downloaded package.
2. Upload the directory to the `/wp-content/plugins/` directory
3. Activate the 'PostFinance Checkout' plugin through the 'Plugins' menu in WordPress
4. Set your credentials at WooCommerce -> Settings -> PostFinance Checkout (or use the *Settings* link in the Plugins overview)
5. You're done, the active payment methods should be visible in the checkout of your webshop.


== Changelog ==

 
= 2.1.19 - June 13, 2023 =

* [Features] Add compatibility with plugin **YITH**
* [BugFix] Fix the duplication of transaction created in the portal when we make a payment
* [BugFix] Correct release notes

* [Tested Against] PHP 8.0.28
* [Tested Against] Wordpress 6.2.0
* [Tested Against] Woocommerce 7.7.1
* [Tested Against] PHP SDK 3.2.0
