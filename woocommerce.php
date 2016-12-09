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
  <div class="modal fade" id="sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="alert alert-success">
            <h2 class="text-center">Produto adicionado ao carrinho!</h2>
            <div class="row">
              <div class="col-md-6">
                <a href="#" class="btn btn-info btn-block">Ver Carrinho</a>
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-success btn-block">Finalizar Compra</a>
              </div>
              <div class="col-md-12">
                <a href="#" class="btn btn-loja btn-block">Continuar Comprando</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer() ?>
