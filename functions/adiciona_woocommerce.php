<?php
	add_action( 'after_setup_theme', 'woocommerce_support' );
	function woocommerce_support() {
	    add_theme_support( 'woocommerce' );
	}

	define('WOOCOMMERCE_USE_CSS', false);




	add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

	function woocommerce_header_add_to_cart_fragment( $fragments ) {
	  global $woocommerce;

	  ob_start();

	  ?>
	  <span class="cart-count"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
	  <?php

	  $fragments['span.cart-count'] = ob_get_clean();

	  return $fragments;

	}
