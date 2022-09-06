<?php
    add_action('wp_enqueue_scripts','twenty_twenty_child_theme_equeue_styles' );
    function twenty_twenty_child_theme_equeue_styles(){
        wp_enqueue_style( 'twentytwenty-css', get_template_directory_uri().'/style.css' );
        wp_enqueue_style( 'main.css',  get_stylesheet_directory_uri() .'/style.css' );
    }
?>