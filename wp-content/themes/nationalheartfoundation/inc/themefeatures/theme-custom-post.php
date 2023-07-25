<?php


//custom post
function theme_custom_post()
{

    register_post_type(
        'homeSlider',


        $args = array(
            'labels' => array(
                'name' => __('Home Slider'),
                'singular_name' => __('home_slider'),
                'add_new' => 'Add New Item',
                'edit_item' => 'Edit Item',
                'search_items' => 'Search Item',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',

        )


    );


}

add_action('init', 'theme_custom_post');





//custom taxonomy
function theme_category_taxonomy()
{
    $labels = array(
        'name' => _x('Category', 'taxonomy general name', 'textdomain'),
        'singular_name' => _x('Category', 'taxonomy singular name', 'textdomain'),
        'search_items' => __('Search Category', 'textdomain'),
        'all_items' => __('All Category', 'textdomain'),
        'parent_item' => __('Parent Category', 'textdomain'),
        'parent_item_colon' => __('Parent Category:', 'textdomain'),
        'edit_item' => __('Edit Category', 'textdomain'),
        'update_item' => __('Update Category', 'textdomain'),
        'add_new_item' => __('Add New Category', 'textdomain'),
        'new_item_name' => __('New Category', 'textdomain'),
        'menu_name' => __('Category', 'textdomain'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'slidertaxonomy'),
    );

    register_taxonomy('slidertaxonomy', array('homeSlider'), $args);

   // register_taxonomy('homeslidercateogry', array('homeSlider'), $args);
}




// hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'theme_category_taxonomy', 2);


