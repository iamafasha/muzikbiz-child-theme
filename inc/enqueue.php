<?php
/**
 * Enqueue Scrpts.
 * 
 * @since      1.0.0
 */

function linearc_load_styles_and_scripts($hook)
{

    wp_enqueue_style( 'style', get_theme_file_uri() .'/assets/css/output.css', false ,'1.1','all');

    //Include Child theme
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

function linearc_load_admin_styles_and_scripts($hook)
{

}

add_action('wp_enqueue_scripts', 'linearc_load_styles_and_scripts');

add_action('admin_enqueue_scripts', 'linearc_load_admin_styles_and_scripts');