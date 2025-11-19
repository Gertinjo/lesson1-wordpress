<?php

function ds_style() {
    wp_enqueue_style('digitalschool-style', get_stylesheet_uri());
     wp_enqueue_style('style' , get_template_directory_uri()."/css/bootstrap.min.css" , false , '1.0' , 'all');
}
add_action('after_setup_theme', 'ds_style');

function digitalschool_setup() {
    register_nav_menus( array(
        'primary' => 'Primary Menu',
    ));
}
add_action( 'after_setup_theme', 'digitalschool_setup');

function ds_js(){
    wp_enqueue_script('ds-js',get_theme_file_uri('js/main.js'), array(), 1.0, true);
}
add_action('wp_enqueue_scripts' , 'ds_js');

add_action('wp_enqueue_scripts' , function() {

    if(is_page_template('aboutus.php')){
        wp_enqueue_script(
            'tainwind-play',
            'https://cdn.tailwindcss.com'
        );
    }
});



add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_image_size('team_avatar', 500, 500);
});

?>