<?php 
function gde_setup() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700,800i,900i|Neuton:400,400i,700,800|Noto+Sans:400,700&display=swap' );
     $located = locate_template( 'style.min.css' );
     if ($located != '' ) {
          echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/style.min.css" />';
     } else {
          echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/style.css" />';
     }
    //version must change every time we change css, change microtime to 
    //version number after finished developement. 
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
    wp_enqueue_script("jquery");
    wp_register_script( 'main', get_theme_file_uri('/js/main.js') );
    wp_enqueue_script( 'main' );
    $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
    //after wp_enqueue_script
    wp_localize_script( 'main', 'object_name', $translation_array );
}

add_action('wp_enqueue_scripts', 'gde_setup');

//add menu for user editablilty 
function theme_prefix_register_menus() {
    register_nav_menus(
        array(
            'primary_menu' => __( 'Primary Menu', 'gde' ),
            'footer_menu' => __('Footer Menu', 'gde'),
        )
    );
}
add_action( 'init', 'theme_prefix_register_menus' );

//add thumbnails and more funtions to the theme such as thumbnails
function gde_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form'));
}

add_action('after_setup_theme', 'gde_init');

// setting up custom post for vendors
function gde_custom_post_type() {
    //custom post type for landing highlight services 
        register_post_type('landing', 
        array(
        'rewrite' => array('slug' => 'landing-items'),
        'labels' => array(
            'name' => 'Landing-Items',
            'singular_name' => 'landing',
            'add_new_item' => 'Add Landing Item',
            'edit_item' => 'Edit landing-item'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments', 'custom-fields'
        ),
        'taxonomies' => array('custom post')
        ));
}
add_action('init', 'gde_custom_post_type');

function wpb_list_child_pages() { 
 
global $post; 
 
if ( is_page() && $post->post_parent )
 
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
 
if ( $childpages ) {
 
    $string = '<ul>' . $childpages . '</ul>';
}
 
return $string;
 
}
?>