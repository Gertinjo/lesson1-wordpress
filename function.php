<?php

function add_theme_script() {

    wp_enqueue_style('style', get_stylesheet_url());
    wp_enqueue_style('style', get_template_directory_url().'style.css', array() , '1,1' , 'all' );
    wp_ebqueue_script('script', get_template_directory_url().'/js/main.js', array() , 1.1 , true );

    if(is_singular() && comments_open() && get_option('thread_comment')) {
        wp_enqueue_script('comment-reply');
    }

}
add_action('wp_enqueue_scripts', 'add_theme_script');


?>