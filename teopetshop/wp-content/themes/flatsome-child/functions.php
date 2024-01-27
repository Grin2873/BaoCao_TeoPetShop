<?php
// Add custom Theme Functions here
function my_custom_translations( $strings ) {
	$text = array('Quick View' => 'Xem nhanh');
	$strings = str_ireplace( array_keys( $text ), $text, $strings );
	return $strings;
}
//anvung
function storefront_child_remove_checkout_fields($fields) {

    unset( $fields ['billing'] ['billing_company'] );
    unset( $fields ['billing'] ['billing_city'] );
	unset( $fields ['billing'] ['billing_address_2'] );
    return $fields;
}


add_filter( 'woocommerce_checkout_fields', 'storefront_child_remove_checkout_fields' );

add_filter( 'gettext', 'my_custom_translations', 20 );
//  codepaypal
add_filter( 'woocommerce_should_load_paypal_standard', '__return_true' );