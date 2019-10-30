<?php
	add_action( 'init', 'e47_website_init' );
	/**
	 * Register a website post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function e47_website_init() {
		$labels = array(
			'name'               => _x( 'Websites', 'post type general name', 'element47' ),
			'singular_name'      => _x( 'Website', 'post type singular name', 'element47' ),
			'menu_name'          => _x( 'Websites', 'admin menu', 'element47' ),
			'name_admin_bar'     => _x( 'Website', 'add new on admin bar', 'element47' ),
			'add_new'            => _x( 'Add New', 'website', 'element47' ),
			'add_new_item'       => __( 'Add New Website', 'element47' ),
			'new_item'           => __( 'New Website', 'element47' ),
			'edit_item'          => __( 'Edit Website', 'element47' ),
			'view_item'          => __( 'View Website', 'element47' ),
			'all_items'          => __( 'All Websites', 'element47' ),
			'search_items'       => __( 'Search Websites', 'element47' ),
			'parent_item_colon'  => __( 'Parent Websites:', 'element47' ),
			'not_found'          => __( 'No websites found.', 'element47' ),
			'not_found_in_trash' => __( 'No websites found in Trash.', 'element47' )
		);

		$args = array(
			'labels'             => $labels,
            'description'        => __( 'Description.', 'element47' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'website', 'with_front' => false ),
			'with_front'         => false,
			'menu_icon'          => 'dashicons-admin-site-alt3',
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);

		register_post_type( 'website', $args );
	}

	add_action( 'init', 'e47_case_study_init' );
	/**
	 * Register a website post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function e47_case_study_init() {
		$labels = array(
			'name'               => _x( 'Case Studies', 'post type general name', 'element47' ),
			'singular_name'      => _x( 'Case Study', 'post type singular name', 'element47' ),
			'menu_name'          => _x( 'Case Studies', 'admin menu', 'element47' ),
			'name_admin_bar'     => _x( 'Case Study', 'add new on admin bar', 'element47' ),
			'add_new'            => _x( 'Add New', 'website', 'element47' ),
			'add_new_item'       => __( 'Add New Case Study', 'element47' ),
			'new_item'           => __( 'New Case Study', 'element47' ),
			'edit_item'          => __( 'Edit Case Study', 'element47' ),
			'view_item'          => __( 'View Case Study', 'element47' ),
			'all_items'          => __( 'All Case Studies', 'element47' ),
			'search_items'       => __( 'Search Case Studies', 'element47' ),
			'parent_item_colon'  => __( 'Parent Case Studies:', 'element47' ),
			'not_found'          => __( 'No websites found.', 'element47' ),
			'not_found_in_trash' => __( 'No websites found in Trash.', 'element47' )
		);

		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'element47' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'case-study', 'with_front' => false ),
			'with_front'         => false,
			'menu_icon'          => 'dashicons-analytics',
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);

		register_post_type( 'case-study', $args );
	}



	add_action( 'init', 'create_website_taxonomies', 0 );
	
	function create_website_taxonomies() {
		// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'              => _x( 'Industries', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Industry', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Industries', 'textdomain' ),
			'all_items'         => __( 'All Industries', 'textdomain' ),
			'parent_item'       => __( 'Parent Industry', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Industry:', 'textdomain' ),
			'edit_item'         => __( 'Edit Industry', 'textdomain' ),
			'update_item'       => __( 'Update Industry', 'textdomain' ),
			'add_new_item'      => __( 'Add New Industry', 'textdomain' ),
			'new_item_name'     => __( 'New Industry Name', 'textdomain' ),
			'menu_name'         => __( 'Industries', 'textdomain' ),
		);
	
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'industry' ),
			//'rewrite'           => false,
		);
	
		register_taxonomy( 'industry', array( 'website', 'case-study' ), $args );
		
	}
	
	add_action( 'init', 'e47_cta_init' );
	/**
	 * Register a book post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function e47_cta_init() {
		$labels = array(
			'name'               => _x( 'CTAs', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'CTA', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'CTAs', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'CTA', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'cta', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add a Sweet New CTA', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New CTA', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit CTA', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View CTA', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All CTAs', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search CTAs', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent CTAs:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No CTAs found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No CTAs found in Trash.', 'your-plugin-textdomain' )
		);
	
		$args = array(
			'labels'             => $labels,
            'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'cta', 'with_front' => false ),
			'menu_icon'          => 'dashicons-megaphone',
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title' )
		);
	
		register_post_type( 'cta', $args );
	}