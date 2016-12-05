<?php /* template name: Home */ ?>
<?php get_header() ?>
<?php $idHome = get_the_id(); ?>
  <section class="banner">
    <div class="container">
      <div class="banner-home">
        <img src="https://www.internetcreation.net/wp-content/uploads/2015/04/banner-web-development.png" class="img-responsive" alt="">
      </div>
    </div>
  </section>
  <main>
    <div class="container">
      <section class="produtos-slider">
        <!-- slider de produtos -->
        <h2 class="titulo-home">Produtos Destaque</h2>
        <?php
        $argProduto = array(
          'post_type'   => 'product',
          'meta_key'    => 'destacar_produto',
          'meta_value'  => 1
        );
        $sliderProdutos = new wp_query($argProduto);
        if($sliderProdutos->have_posts()):
          echo "<div class='row slider-produtos'>";
            while($sliderProdutos->have_posts()): $sliderProdutos->the_post();
            ?>
              <div class="col-md-3 col-lg-3 col-xs-12 col-sm-6" role="produto">
                <div class="lista-produto">
              		<?php if (has_post_thumbnail()): ?>
              			<div class="img-produto">
              				<a href="<?php the_permalink(); ?>">
              					<?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
              				</a>
              			</div>
              		<?php endif; ?>
              		<h2 class="titulo-produto"> <a href="<?php the_permalink() ?>"> <?php the_title();?> </a> </h2>
              		<div class="row">
              		  <div class="col-md-7 rmpadright">
              		    <p class="price" role="preço"><?php echo $product->get_price_html(); ?></p>
              		  </div>
              			<div class="col-md-5 rmpadleft">
              				<a class="btn btn-loja btn-block" href="<?php the_permalink() ?>"	title="<?php echo get_the_title() ; ?>" alt="<?php echo get_the_title() ; ?>" >
              					Comprar
              				</a>
              			</div>
              		</div>
              	</div>
              </div>
            <?php
            endwhile;
          echo "</div>";
        else:
          echo "Nenhum produto encontrado";
        endif;
        wp_reset_query();
        ?>
        <!-- /slider produtos -->
      </section>
      <section class="banners-categorias" role="categoria">
        <!-- produtos por categoria -->
          <h2 class="titulo-home">Conheça</h2>
          <div class="row bnPublicidade">
            <div class="col-md-4 rmpadright">
              <div class="bannerPosicao1 bnCategoriaHome">
                <?php
                banner_home("posicao1",$idHome);
                ?>
              </div>
              <div class="bannerPosicao1-1 bnCategoriaHome">
                <?php
                banner_home("posicao1a",$idHome);
                ?>
              </div>
            </div>
            <div class="col-md-5 rmpadright rmpadleft">
              <div class="bannerPosicao2 bnCategoriaHome">
                <?php  banner_home("posicao2",$idHome); ?>
              </div>
            </div>
            <div class="col-md-3 rmpadleft">
              <div class="bannerPosicao3 bnCategoriaHome">
                <?php  banner_home("posicao3",$idHome); ?>
              </div>
            </div>
          </div>
        <!-- /produtos por categoria -->
      </section>
      <!-- produtos randomicos -->
      <section class="produtos-randon">
        <h2 class="titulo-home">Conheça</h2>
        <div class="row">
          <?php
          $argProdutoRandon = array(
            'post_type'       => 'product',
            'orderby'         => 'rand',
            'posts_per_page'  => 8
          );
          $produtosRandon = new wp_query($argProdutoRandon);
          if ($produtosRandon->have_posts()) {
            while ($produtosRandon->have_posts()) { $produtosRandon->the_post()
            ?>
            <div class="col-md-3 col-lg-3 col-xs-12 col-sm-6" role="produtos" <?php //post_class(); ?>>
            	<div class="lista-produto hvr-grow-shadow">
            		<?php if (has_post_thumbnail()): ?>
            			<div class="img-produto">
            				<a href="<?php the_permalink(); ?>">
            					<?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
            				</a>
            			</div>
            		<?php endif; ?>
            		<h2 class="titulo-produto"> <a href="<?php the_permalink() ?>"> <?php the_title();?> </a> </h2>
            		<div class="row">
            		  <div class="col-md-7 rmpadright">
            		    <p class="price" role="preco"><?php echo $product->get_price_html(); ?></p>
            		  </div>
            			<div class="col-md-5 rmpadleft">
            				<a class="btn btn-loja btn-block" href="<?php the_permalink() ?>"	title="<?php echo get_the_title() ; ?>" alt="<?php echo get_the_title() ; ?>" >
            					Comprar
            				</a>
            			</div>
            		</div>
            	</div>
            </div>
            <?php
            }
          }
          ?>
        </div>
      </section>
      <!-- /produtos randomicos -->
      <!-- blog -->
    </div>
  </main>
<?php get_footer() ?>
