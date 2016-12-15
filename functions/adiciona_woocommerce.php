<?php
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

define('WOOCOMMERCE_USE_CSS', false);

function mode_theme_update_mini_cart() {
  echo wc_get_template( 'cart/mini-cart.php' );
}
add_filter( 'wp_ajax_nopriv_mode_theme_update_mini_cart', 'mode_theme_update_mini_cart' );
add_filter( 'wp_ajax_mode_theme_update_mini_cart', 'mode_theme_update_mini_cart' );

// ATUALIZANDO A QUANTIDADE DE ITENS NO CARRINHO
/*add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-contents'] = ob_get_clean();
	return $fragments;
}*/
