<?php



add_action('init', function () {
    register_post_type(
        'deer_test',
        array(
            'labels' => array(
                'name' => 'Deer Tests',
                'singular_name' => 'Deer Test',
                'menu_name' => 'Deer Tests',
                'all_items' => 'All Deer Tests',
                'edit_item' => 'Edit Deer Test',
                'view_item' => 'View Deer Test',
                'view_items' => 'View Deer Tests',
                'add_new_item' => 'Add New Deer Test',
                'add_new' => 'Add New',
                'new_item' => 'New Deer Test',
                'parent_item_colon' => 'Parent Deer Test:',
                'search_items' => 'Search Deer Tests',
                'not_found' => 'No deer tests found',
                'not_found_in_trash' => 'No deer tests found in trash',
                'archives' => 'Deer Test Archives',
                'attributes' => 'Deer Test Attributes',
                'insert_into_item' => 'Insert into deer test',
                'uploaded_to_this_item' => 'Uploaded to this deer test',
                'filter_items_list' => 'Filter deer tests list',
                'filter_by_date' => 'Filter deer tests by date',
                'items_list_navigation' => 'Deer tests list navigation',
                'items_list' => 'Deer tests list',
                'item_published' => 'Deer Test published.',
                'item_published_privately' => 'Deer Test published privately.',
                'item_reverted_to_draft' => 'Deer Test reverted to draft.',
                'item_scheduled' => 'Deer Test scheduled.',
                'item_updated' => 'Deer Test updated.',
                'item_link' => 'Deer Test Link',
                'item_link_description' => 'A link to a deer test.',
            ),
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-art',
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'custom-fields',
            ),
            'taxonomies' => array(
                'category',
                'post_tag',
            ),
            'delete_with_user' => false,
        )
    );
});

function deer_test_add_support()
{
    add_theme_support('post-formats', array('deer_test'));
}
add_action('after_setup_theme', 'deer_test_add_support');
