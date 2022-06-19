<?php
register_nav_menus(array(
  'header_menu' => 'Меню в header',  
  'sidebar_menu' => 'Меню в sidebar'
));
register_sidebar( array(
    'name' =>'Новый сайдбар',
    'id' => 'my-sidebar',
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_filter('style_loader_tag', 'sj_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'sj_remove_type_attr', 10, 2);
add_filter('wp_print_footer_scripts ', 'sj_remove_type_attr', 10, 2);
function sj_remove_type_attr($tag) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 50;' ), 20 );


add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {
 wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
}

?>