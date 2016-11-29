<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-md-4 col-lg-4 col-xs-12 col-sm-6" <?php //post_class(); ?>>
	<?php if (has_post_thumbnail()): ?>
		<div class="img-produto">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
			</a>
		</div>
	<?php endif; ?>
	<h2> <?php the_title();?> </h2>
	<div class="row">
	  <div class="col-md-7">
	    <p class="price"><?php echo $product->get_price_html(); ?></p>
	  </div>
		<div class="col-md-5">
			<a class="btn btn-loja btn-block" href="<?php the_permalink() ?>"	title="<?php echo get_the_title() ; ?>" alt="<?php echo get_the_title() ; ?>" >
				teste
			</a>
		</div>
	</div>
</div>
