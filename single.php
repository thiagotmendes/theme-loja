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
        <div class="col-md-9 col-lg-9 col-sm-7 col-xs-12">
          <?php if (have_posts()) : ?>
          	<?php while (have_posts()) : the_post(); ?>
              <article class="noticia">
                <?php if (has_post_thumbnail()): ?>
                  <div class="img-noticia">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                    </a>
                  </div>
                <?php endif; ?>
                <h2><?php the_title() ?></h2>
                <p><?php the_content() ?></p>
              </article>
          	<?php endwhile; ?>
          		<?php wp_pagination() ?>
          	<?php else : ?>
          		Nenhum post encontrado
          <?php endif; ?>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-5 col-xs-12">
          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer() ?>
