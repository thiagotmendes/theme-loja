<?php
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

define('WOOCOMMERCE_USE_CSS', false);


add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class=”cart-contents” href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
		<?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ),
							WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?>
						</a>
	<?php
	$fragments[‘a.cart-contents’] = ob_get_clean();

	return $fragments;
}

function mode_theme_update_mini_cart() {
  echo wc_get_template( 'cart/mini-cart.php' );
}
add_filter( 'wp_ajax_nopriv_mode_theme_update_mini_cart', 'mode_theme_update_mini_cart' );
add_filter( 'wp_ajax_mode_theme_update_mini_cart', 'mode_theme_update_mini_cart' );
