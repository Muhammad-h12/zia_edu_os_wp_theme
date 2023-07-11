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
};

add_action( 'wp_enqueue_scripts', 'ziaEdu_load_scripts' );

