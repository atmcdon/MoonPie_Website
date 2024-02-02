<?php
    
    //https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    function MoonCat_styles ()
    {
        wp_enqueue_style(
             'MoonPie&MagPie-main-styles',
             get_template_directory_uri() . '/assets/css/main.css'
        );

    }
    add_action('wp_enqueue_scripts', 'MoonCat_styles');

    
?>