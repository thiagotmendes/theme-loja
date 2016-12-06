<?php get_header() ?>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <?php echo get_the_title(); ?>
          <?php get_sidebar('loja') ?>
        </div>
        <div class="col-md-10">
          <?php woocommerce_content(); ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer() ?>
