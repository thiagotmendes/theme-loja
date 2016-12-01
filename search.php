<?php get_header() ?>
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
