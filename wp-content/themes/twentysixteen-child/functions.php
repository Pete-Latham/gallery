<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'init','create_custom_post_type_event'); // define event custom post type
function create_custom_post_type_event() {
    $labels = array(
        'name' => 'Shots',
        'singular_name' => 'Shot',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Shot',
        'edit_item' => 'Edit Shot',
        'new_item' => 'New Shot',
        'view_item' => 'View Shot',
        'search_items' => 'Search Shots',
        'not_found' => 'No shots found',
        'not_found_in_trash' => 'No shots found in Trash',
        'parent_item_colon' => '',
    );

    $args = array(
        'label' => __('Shots'),
        'labels' => $labels,
        'public' => true,
        'can_export' => true,
        'show_ui' => true,
        '_builtin' => false,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-camera',
        'hierarchical' => false,
        'rewrite' => array( "slug" => "shots" ),
        'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'),
        'show_in_nav_menus' => true,
        'taxonomies' => array( 'event_category', 'post_tag')
    );

    register_post_type('shots', $args);

}

?>