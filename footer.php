    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rodape-1') ) :?>
                <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
            <?php endif; ?>
          </div>
          <div class="col-md-3">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rodape-2') ) :?>
                <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
            <?php endif; ?>
          </div>
          <div class="col-md-3">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rodape-3') ) :?>
                <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
            <?php endif; ?>
          </div>
          <div class="col-md-3">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rodape-4') ) :?>
                <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </footer>
<?php wp_footer() ?>
</body>
</html>
