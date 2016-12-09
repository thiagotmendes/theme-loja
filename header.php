<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php wp_head() ?>

    <title><?php title_page() ?></title>
  </head>
  <body>
    <header>
      <section class="barra-superior">
        <div class="container">
          <?php
          $args = array(
            'theme_location' => 'menu_topo',
            'menu_class' => 'menu-superior navbar-right',
            'fallback_cb' => 'fallback',
          );
          wp_nav_menu( $args );
          ?>
        </div>
      </section>
      <nav class="navbar navbar-loja" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=" <?php echo esc_url( home_url( '/' ) ); ?> ">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <?php
  		    	$args = array(
  		    		'theme_location' => 'top-bar',
  		    		'menu_class' => 'nav navbar-nav menu-site',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
  		    		'walker'	 => new wp_bootstrap_navwalker()
  		    	);
  		    	wp_nav_menu( $args );
            ?>
            <ul class="nav navbar-nav menu-site navbar-right">
              <li>
                <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <?php
                  echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ),
                  WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
