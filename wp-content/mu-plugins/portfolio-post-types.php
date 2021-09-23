<?php
function portfolio_post_types(){
    register_post_type('projects' , array(
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-portfolio',  
        'labels' => array(
            'name' => "projects",
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
            'singular_name' => 'Project'
        ),
        'supports' => array('title', 'editor', 'excerpt'),
        'taxonomies'  => array( 'category' )
    ));
}

add_action('init' , 'portfolio_post_types');
?>