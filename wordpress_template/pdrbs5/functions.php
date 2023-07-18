<?php 

// Chama a tag de titulo
function pdrbs5_title_tag(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'pdrbs5_title_tag');


// Corrige erros caso o tema seja aplicado em versões antigas do WordPress
if(!function_exists('_wp_render_title_tag')){
    function pdrbs5_render_title(){
        ?>
        <title><?php wp_title('|', true, 'right') ?></title>
        <?php
    }
    add_action('wp_head', 'pdrbs5_render_title');
}

// cria menu dinâmico usando Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// registra os menus
register_nav_menus( array(
    'principal' => __('Menu Principal', 'pdrbs5')
));

// Define as thumbnails

add_theme_support( 'post-thumbnails' );
    
?>