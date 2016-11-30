<?php get_header() ?>
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
                <p><?php the_excerpt_limit(30) ?></p>
                <a href="<?php the_permalink() ?>" class="btn btn-loja"> Saiba Mais </a>
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
