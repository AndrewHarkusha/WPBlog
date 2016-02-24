<?php
/**
 * Functions for template
 */
if (!is_admin()) {
    function blog_styles()
    {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', ['bootstrap']);
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css');
    }
    add_action('wp_enqueue_scripts', 'blog_styles');
}

//Includes support for menus

//add_theme_support('menus');

register_nav_menus([
    'header_menu' => 'Header',
    'footer_menu' => 'Footer',
]);

//Includes support for sidebar
register_sidebar([
    'id' => 'right_sidebar',
    'name' => 'Правая колонка',
    'description' => 'Правая боковая панель',
    'before_widget' =>'<div id="%1s" class="panel panel-default %2s">',
    'after_widget' =>'</div></div>',
    'before_title' =>'<div class="panel-heading">',
    'after_title' =>'</div><div class="panel-body">',
]);

// Includes support for thumbnails
add_theme_support('post-thumbnails');

//Support shortcode
function color_block_shortcode($atts, $content = null){
   if (empty($content)){
       return '';
   }

    extract(shortcode_atts([
        'color' => 'warning'
    ],$atts));

    return "<div class=\"bg-$color text-$color\">$content</div>";
}

add_shortcode('color_block','color_block_shortcode');

// Pagination in bootstrap style
function pagination( $query=null ) {

    global $wp_query;
    $query = $query ? $query : $wp_query;
    $big = 999999999;

    $paginate = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'type' => 'array',
            'total' => $query->max_num_pages,
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'prev_text' => __('&laquo;'),
            'next_text' => __('&raquo;'),
        )
    );

    if ($query->max_num_pages > 1) :
        ?>
        <ul class="pagination">
            <?php
            foreach ( $paginate as $page ) {
                echo '<li>' . $page . '</li>';
            }
            ?>
        </ul>
        <?php
    endif;
}