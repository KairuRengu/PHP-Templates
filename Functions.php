<?php
/**
 * Add the field to order emails
 **/
add_filter('woocommerce_email_order_meta_keys', 'my_custom_checkout_field_order_meta_keys');
 
function my_custom_checkout_field_order_meta_keys( $keys ) {
	$keys['Purchase Order Number'] = 'po_number';
	$keys['Shipping Courier'] = 'shipping_courier';
	$keys['Shipping Account'] = 'shipping_account';
	return $keys;
}

/*-----------------------------------------------------------------------------------*/
/* Don't add any code below here or the sky will fall down */
/*-----------------------------------------------------------------------------------*/
?>
