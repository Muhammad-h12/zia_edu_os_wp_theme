<?php
/*
 * Functions and Definitions
 * Theme Configs
 * This functions.php file is used to register the features that we want to ship with our theme.
 * Concept : The loading process of Wordpress is bit different than the sites developed using other technologies
 * This loading process is followed by certain moments and they are called hooks and several of them can be fodun in wp-settings.php
 * Like we have Setup_theme that gets loaded before the theme is laoded.
 * Don`t forget to check these files.
 * Initialy we use enqueqe scripts that is written in script-loader.php file
 * Wp says it enqueqing the scripts and stylesheets kind of we hook into or enquque/hang it to the hook - wp_enquequ_scripts
 * and there is a order of priority , the files are kind of in queue to get executed
 *
 * */

/*
 * Enqueue Scripts
 * using wordpress way of linking files gives us more flexibility like cache issue, dependencies
 * Also we can`t directly copy the google fonts link in our wp templates.
 * Also may be we provide different options to users we can use wp register and deregister styles functions
 *
 * */

function ziaEdu_load_scripts(){
    wp_enqueue_style( 'ziaEdu-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all');
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,400&display=swap', array(), null );
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/output.css');

    //enqueqe script/s
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
};

add_action( 'wp_enqueue_scripts', 'ziaEdu_load_scripts' );



function ziaEdu_config(){

    // Register Menus

    register_nav_menus(
        array(
            'zia_edu_main_menu' => 'Primary Menu',
            'zia_edu_mobile_menu' => 'Mobile Menu',
            'zia_edu_footer_menu_widget1' => 'Footer Menu Widget 1',
            'zia_edu_footer_menu_widget2' => 'Footer Menu Widget 2'
        )
    );

    // add theme Support - by defualt all the features that wp gives are not registered or activated

    // add custom Header

    $args = array(
        'height' => 355,
        'width'  => 1920,
    );

    add_theme_support( 'custom-header', $args );

    // Post Thumbnails

    add_theme_support( 'post-thumbnails' );

    // logo Support

    add_theme_support( 'custom-logo', array(
        'width' => 200,
        'height' => 100,
        'flex-height' => true,
        'flex-width' =>true
    ) );

    // title-tag
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

}

add_action( 'after_setup_theme', 'ziaEdu_config', 0 );

// THe above hook after_setup_theme - we should`t use it for registering our side bars or the Widget areas because this hooks loads too early

add_action( 'widgets_init', 'ziaEdu_sidebars' );
function ziaEdu_sidebars(){
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'This is the BLog Sidebar.You can add widgets here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    //sidebar on the default Pages

    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'sidebar-page',
            'description' => 'This is the Page Sidebar.You can add widgets here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Services 1',
            'id' => 'services-1',
            'description' => 'Serives 1 widget',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Services 2',
            'id' => 'services-2',
            'description' => 'Services 2 widget',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Services 3',
            'id' => 'services-3',
            'description' => 'Services 3 widget',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}
// wp older than 5.2 ver
if( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
}