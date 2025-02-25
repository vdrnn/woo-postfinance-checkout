<?php
/**
 *
 * WC_PostFinanceCheckout_Email Class
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
 * This entity holds data about a PostFinance Checkout payment method.
 *
 * @method int get_id()
 * @method string get_state()
 * @method void set_state(string $state)
 * @method int get_space_id()
 * @method void set_space_id(int $id)
 * @method int get_configuration_id()
 * @method void set_configuration_id(int $id)
 * @method string get_configuration_name()
 * @method void set_configuration_name(string $name)
 * @method string[] get_title()
 * @method void set_title(string[] $title)
 * @method string[] get_description()
 * @method void set_description(string[] $description)
 * @method string get_image()
 * @method void set_image(string $image)
 * @method string get_image_base()
 * @method void set_image_base(string $image_base)
 */
class WC_PostFinanceCheckout_Entity_Method_Configuration extends WC_PostFinanceCheckout_Entity_Abstract {
	const STATE_ACTIVE = 'active';
	const STATE_INACTIVE = 'inactive';
	const STATE_HIDDEN = 'hidden';

	/**
	 * Get field definition.
	 *
	 * @return array
	 */
	protected static function get_field_definition() {
		return array(
			'state' => WC_PostFinanceCheckout_Entity_Resource_Type::STRING,
			'space_id' => WC_PostFinanceCheckout_Entity_Resource_Type::INTEGER,
			'configuration_id' => WC_PostFinanceCheckout_Entity_Resource_Type::INTEGER,
			'configuration_name' => WC_PostFinanceCheckout_Entity_Resource_Type::STRING,
			'title' => WC_PostFinanceCheckout_Entity_Resource_Type::OBJECT,
			'description' => WC_PostFinanceCheckout_Entity_Resource_Type::OBJECT,
			'image' => WC_PostFinanceCheckout_Entity_Resource_Type::STRING,
			'image_base' => WC_PostFinanceCheckout_Entity_Resource_Type::STRING,

		);
	}

	/**
	 * Get table name.
	 *
	 * @return string
	 */
	protected static function get_table_name() {
		return 'wc_postfinancecheckout_method_config';
	}

	/**
	 * Load by configuration.
	 *
	 * @param mixed $space_id space id.
	 * @param mixed $configuration_id configuration id.
	 * @return WC_PostFinanceCheckout_Entity_Method_Configuration
	 */
	public static function load_by_configuration( $space_id, $configuration_id ) {
		global $wpdb;

		$result = $wpdb->get_row(
			$wpdb->prepare(
				'SELECT * FROM %1$s WHERE space_id = %2$d AND configuration_id = %3$d',
				$wpdb->prefix . self::get_table_name(),
				$space_id,
				$configuration_id
			),
			ARRAY_A
		);

		if ( null !== $result ) {
			return new self( $result );
		}
		return new self();
	}

	/**
	 * Load by states and space id.
	 *
	 * @param mixed $space_id space id.
	 * @param array $states states.
	 * @return array
	 */
	public static function load_by_states_and_space_id( $space_id, array $states ) {
		global $wpdb;
		if ( empty( $states ) ) {
			return array();
		}
		$replace = '';

		$states_count = count( $states );

		for ( $i = 0; $i < $states_count; $i++ ) {
			$replace .= '%s, ';
		}
		$replace = rtrim( $replace, ', ' );

		$values = array_merge( array( $space_id ), $states );

		$query = 'SELECT * FROM ' . $wpdb->prefix . self::get_table_name() . ' WHERE space_id = %d AND state IN (' . $replace . ')';
		$result = array();

	    	// phpcs:ignore
		$db_results = $wpdb->get_results( $wpdb->prepare( $query, $values ), ARRAY_A );
		if ( is_array( $db_results ) ) {
			foreach ( $db_results as $object_values ) {
				$result[] = new static( $object_values );
			}
		}
		return $result;
	}
}
