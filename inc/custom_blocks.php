<?php
function register_acf_block_types() {

	// register a testimonial block.
	acf_register_block_type(array(
		'name'              => 'testimonial',
		'title'             => __('Testimonial'),
		'description'       => __('A custom testimonial block.'),
		'render_template'   => 'template-parts/blocks/testimonial.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array( 'testimonial', 'quote' ),
	));

	// register a testimonial block.
	acf_register_block_type(array(
		'name'              => 'two-column-text',
		'title'             => __('Two-Column Text'),
		'description'       => __('A custom two-column text block.'),
		'render_template'   => 'template-parts/blocks/two-column-text.php',
		'category'          => 'formatting',
		'icon'              => 'text-page',
		'keywords'          => array( 'two-column', 'text' ),
	));

}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
	add_action('acf/init', 'register_acf_block_types');
}