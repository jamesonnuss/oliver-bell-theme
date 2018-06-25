<?php
/* joints Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/
function cpt_ico() {
	// creating (registering) the custom type
	register_post_type( 'ico-review', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('ICO Reviews', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('ICO Review', 'jointswp'), /* This is the individual type */
			'all_items' => __('All ICO Reviews', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New ICO Review', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit ICO Review', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New ICO Review', 'jointswp'), /* New Display Title */
			'view_item' => __('View ICO Review', 'jointswp'), /* View Display Title */
			'search_items' => __('Search ICO Reviews', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('No employees found.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the ICO Review custom post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 20, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-analytics', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'ico-review', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => false, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	// register_taxonomy_for_object_type('category', 'ico-review');
	/* this adds your post tags to your custom post type */
	// register_taxonomy_for_object_type('post_tag', 'employee');

}
add_action( 'init', 'cpt_ico');

// now let's add custom categories (these act like categories)
register_taxonomy( 'ico_reviews_cat',
	array('ico-review'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Review Categories', 'jointswp' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Review Category', 'jointswp' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Review Categories', 'jointswp' ), /* search title for taxomony */
			'all_items' => __( 'All Review Categories', 'jointswp' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Review Category', 'jointswp' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Review Category:', 'jointswp' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Review Category', 'jointswp' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Review Category', 'jointswp' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Review Category', 'jointswp' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Review Category Name', 'jointswp' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'ico-review-category' ),
	)
);
