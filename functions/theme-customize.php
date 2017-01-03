<?php
  function site_customize_register($wp_customize){
    $wp_customize->add_section('logo_site_cityhelp', array(
      'title' => __('logo','cityhelp'),
      'description' => 'Insira a logo do site aqui'
    ));
    $wp_customize->add_setting('logo_site', array(
      'default' => get_template_directory_uri() . '/images/logo.png',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize,'logo_site', array(
        	'label'        => __( 'Logo', 'cityhelp' ),
        	'section'    => 'logo_site_cityhelp',
        	'settings'   => 'logo_site',
        )
      )
    );
  }
  add_action('customize_register','site_customize_register');
  function logo_site(){
  ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <?php if(get_theme_mod( 'logo_site')): ?>
        <img src="<?php echo get_theme_mod( 'logo_site')  ?>" alt="<?php echo bloginfo('name') ?>" />
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri()  ?>/images/logo.png" alt="<?php echo bloginfo('name') ?> teste" />
      <?php endif; ?>
    </a>
  <?php
  }
