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
      <?php
        if (have_posts()) {
          while (have_posts()) { the_post();
      ?>
            <h1> <?php the_title() ?> </h1>
            <?php the_content() ?>
      <?php
          }
        }
      ?>
    </div>
  </main>
<?php get_footer() ?>
