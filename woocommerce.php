<?php get_header() ?>
<section class="breadcrumb" role="breadcrumbs">
  <div class="container">
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb('
    <p id="breadcrumbs">','</p>
    ');
    }
    ?>
  </div>
</section>

  <main>
    <div class="container">
      <div class="row">
        <?php woocommerce_content(); ?>
      </div>
    </div>
  </main>
<?php get_footer() ?>
