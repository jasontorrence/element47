<?php
/**
 * Template Name: Element 47 Layouts
 */

get_header();
?>
    <div class="element-layouts">
		<?php
		// ID of the current item in the WordPress Loop
		$id = get_the_ID();

		// check if the flexible content field has rows of data
		if ( have_rows( 'flexible_layouts', $id ) ) :

			// loop through the selected ACF layouts and display the matching partial
			while ( have_rows( 'flexible_layouts', $id ) ) : $row = the_row();

				$classes = array_map(function($class){ return get_sub_field($class) ? $class : '';}, [
					'remove_top_padding',
					'remove_bottom_padding',
					//'full_width_container',
					'narrow_container',
					'gray_background'
				]);

				include( locate_template( 'template-parts/flexible-layouts/' . get_row_layout() . '.php', false, false ) );

			endwhile;

		endif;

		?>
    </div>
<?php

get_footer();
