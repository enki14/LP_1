<?php

function theme_enqueue_styles(){
    wp_enqueue_style('my_styles', get_template_directory_uri().'/css/mystyle.css', '', '5.9.3', 'all');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

