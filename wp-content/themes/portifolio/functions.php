<?php
function portfolio_files(){
    wp_enqueue_script('main_portfolio_js', get_template_directory_uri() . '/dist/js/main.js' ,array('jquery'), filemtime(get_template_directory() . '/dist/js/main.js'), true);
    wp_enqueue_style('main_portfolio_style', get_template_directory_uri() . "/dist/sass/main.css" ,filemtime(get_template_directory() . '/dist/sass/main.css'), false);
}
add_action('wp_enqueue_scripts','portfolio_files');


?>