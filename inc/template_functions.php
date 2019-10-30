<?php
/**
 * Customize the admin panel
 */

//Get rid of comments.

function remove_menus(){
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menus' );


//Put Yoast in its place.

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function element_47_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'element_47_pingback_header' );

//New Image Size for Blockquotes
add_image_size( 'blockquote-background', 1200, 800 );

//Make GF go to confirmation message after submission
add_filter( 'gform_confirmation_anchor', '__return_true' );

//Clean up shit from user profile pages

if(is_admin()){
	remove_action("admin_color_scheme_picker", "admin_color_scheme_picker");
}

if ( ! function_exists( 'element47_remove_personal_options' ) ) {
	// removes the leftover 'Visual Editor', 'Keyboard Shortcuts' and 'Toolbar' options.
	function element47_remove_personal_options( $subject ) {
		$subject = preg_replace( '#<h2>Personal Options</h2>.+?/table>#s', '', $subject, 1 );
		$subject = preg_replace('#<tr class="user-profile-picture(.*?)</tr>#s', '', $subject, 1); // Remove the "Profile Picture" field
		$subject = preg_replace('#<tr class="user-url-wrap(.*?)</tr>#s', '', $subject, 1); // Remove the "Website" field
		return $subject;
	}
	function element47_profile_subject_start() {
		ob_start( 'element47_remove_personal_options' );
	}
	function element47_profile_subject_end() {
		ob_end_flush();
	}
}
add_action( 'admin_head-profile.php', 'element47_profile_subject_start' );
add_action( 'admin_footer-profile.php', 'element47_profile_subject_end' );


//Custom Admin Menu Order.

function element_47_custom_menu_order( $menu_ord ) {
	if ( !$menu_ord ) return true;

	return array(
		'index.php', // Dashboard
		'upload.php', // Media
		'separator1', // First separator
		'edit.php', // Posts
		'edit.php?post_type=page', // Pages
		'edit.php?post_type=website', // Websites
		'edit.php?post_type=case-study', // Case Studies
		'edit.php?post_type=cta', // CTA
		'gf_edit_forms', //Gravity Forms
		'users.php', // Users
		'separator2', // Second separator
		'themes.php', // Appearance
		'plugins.php', // Plugins
		'tools.php', // Tools
		'options-general.php', // Settings
		'separator-last', // Last separator
	);
}
add_filter( 'custom_menu_order', 'element_47_custom_menu_order', 10, 1 );
add_filter( 'menu_order', 'element_47_custom_menu_order', 10, 1 );

add_action('admin_head', 'element_47_admin_styles');

function element_47_admin_styles() {
	echo '<style>
    .acf-float-right {
    	float: right !important;
    }
    .acf-short-text {
    	min-height: 80px !important;
    }
    .acf-clear-none {
    	clear: none !important;
    }
  </style>';
}