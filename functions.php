<?php
/* ----------------------------------------------------- */
/* Definindo uma constante com a url do template */
/* ----------------------------------------------------- */
define( 'TEMPLATEURL', get_template_directory_uri() );

/* ----------------------------------------------------- */
/* Escondendo a versão do Wordpress */
/* ----------------------------------------------------- */
remove_action('wp_head', 'wp_generator');

/* ----------------------------------------------------- */
/* Definindo a largura para auto embeds */
/* ----------------------------------------------------- */
if ( ! isset( $content_width ) ) $content_width = 610;

/* ----------------------------------------------------- */
/* Carregando o arquivo de configuração de Post Types */
/* ----------------------------------------------------- */
require_once('functions/custom-post-types.php');

// CARREGANDO O CUSTOMIZE
require_once('functions/theme-customize.php');

/**********************************************************/
/*------------------------------------------------------*/
require_once('functions/bootstrap-menu.php');
register_nav_menu('top-bar', __('principal'));


/************ Adiciona suporte ao woocommerce *************/

require_once ('functions/adiciona_woocommerce.php');

/**********************************************************/

require_once ('functions/theme_includes.php');

/* ----------------------------------------------------- */
/* Abilitando suporte a backgrounds */
/* ----------------------------------------------------- */
add_theme_support( 'custom-background' );
/*
Modo de uso:
Não é preciso alterações no tema para esta funcionalidade
*/

/* ----------------------------------------------------- */
/* Abilitando suporte ao gerenciador de menus */
/* ----------------------------------------------------- */
register_nav_menus( array(
    'menu_topo' => 'Cabeçalho',
    'menu_rodape' => 'Rodape'
    ) );
/*
Modo de uso:
<?php wp_nav_menu( array('theme_location'=>'menu_topo','menu_class'=>'menu') ); ?>
*/

/* ----------------------------------------------------- */
/* Abilitando suporte a imagens destacadas */
/* ----------------------------------------------------- */
if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
//add_image_size('thumb-custom-1', 640, 326, true);
//add_image_size('thumb-custom-2', 66, 66, true);
/*
Modo de uso:
<?php the_post_thumbnail('thumbnail'); ?>
*/

/* ----------------------------------------------------- */
/* Registrando uma sidebar */
/* ----------------------------------------------------- */
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Lateral',
        'id'  => 'lateral',
        'before_widget' => '<div class="panel panel-bos widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="panel-heading"><h3 class="panel-title">',
        'after_title' => '</h3></div>',
    )
);

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Loja',
        'id'  => 'loja',
        'before_widget' => '<div class="panel panel-bos widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="panel-heading"><h3 class="panel-title">',
        'after_title' => '</h3></div>',
    )
);


if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'rodape 1',
        'id'  => 'rodape-1',
        'before_widget' => '<div class="">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title-rodape">',
        'after_title' => '</h3>',
    )
);

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'rodape 2',
        'id'  => 'rodape-2',
        'before_widget' => '<div class="">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title-rodape">',
        'after_title' => '</h3>',
    )
);

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'rodape 3',
        'id'  => 'rodape-3',
        'before_widget' => '<div class="">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title-rodape">',
        'after_title' => '</h3>',
    )
);

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'rodape 4',
        'id'  => 'rodape-4',
        'before_widget' => '<div class="">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title-rodape">',
        'after_title' => '</h3>',
    )
);

/*
Modo de uso:
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral') ) :?>
    <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
<?php endif; ?>
*/

/* ----------------------------------------------------- */
/* Resumo com limite de palavras customizada */
/* ----------------------------------------------------- */
function the_excerpt_limit($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
        $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
        echo $excerpt;
}
/*
Modo de uso:
<?php the_excerpt_limit(20); ?>
*/

/* ----------------------------------------------------- */
/* Texto com limite de palavras */
/* ----------------------------------------------------- */
function the_content_limit($text,$limit) {
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $text = strip_tags($text);
    $excerpt = explode(' ', $text, $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    echo $excerpt;
}
/*
Modo de uso:
<?php the_excerpt_limit(get_the_content(),20); ?>
*/

/* ----------------------------------------------------- */
/* Paginação numérica de posts */
/* ----------------------------------------------------- */
function the_posts_paginate(){
    global $wp_query;
    global $numpages;
    $big = 999999999; // need an unlikely integer
    $page_links = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    if( $page_links ):
        echo '<div class="posts-paginate">';
        echo $page_links;
        echo '</div>';
    endif;
}
/*
Modo de uso:
<?php the_posts_paginate(); ?>
*/

/* ----------------------------------------------------- */
/* Shortcodes */
/* ----------------------------------------------------- */
function google_maps($atts){
    extract( shortcode_atts( array(
            'endereco' => '',
            'largura' => '',
            'altura' => ''
            ), $atts ) );
    return '<iframe style="margin:15px 0 15px 0" width="'.$largura.'" height="'.$altura.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;q='.$endereco.'&amp;output=embed"></iframe>';
}
add_shortcode("map","google_maps");
/*
Modo de uso:
No editor do post ou página insira o shortcode: [map endereco="Rua Tal" largura="400" altura="300"]
*/

function wp_pagination($pages = '', $range = 9)
{
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'show_all' => true,
        'type' => 'plain'
    );
    if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    echo '<div class="wp_pagination">'.paginate_links( $pagination ).'</div>';
}

function title_page(){
  if ( is_single() ) {
    bloginfo('name'); echo " | "; single_post_title();
  }elseif ( is_home() || is_front_page() ) {
    bloginfo('name'); echo ' | ';
    bloginfo('description');
  }elseif ( is_page() ) {
    single_post_title('');
  }elseif ( is_search() ) {
    bloginfo('name');
    echo ' | Search results for ' . wp_specialchars($s);
  }elseif ( is_404() ) {
    bloginfo('name');
    print ' | Not Found';
  }else {
    bloginfo('name');
    wp_title('|');
  }
}

function banner_home($posicaoBanner,$idHome)
{
  $posicao = get_field('banners_de_categoria', $idHome);
  if ($posicao):
    foreach($posicao as $posicaoImagem1):
      $imagem = $posicaoImagem1['imagem'];
      //var_dump($imagem);
      if($posicaoImagem1['posição'] == $posicaoBanner):
        echo "<a href='".$posicaoImagem1['link']."' >";
        echo "<img src='".$imagem['url']."' alt='".$imagem['alt']."' class='img-responsive'>";
        echo "</a>";
      endif;
    endforeach;
  endif;
}
