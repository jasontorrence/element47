<?php

function load_work_by_ajax_callback() {
	check_ajax_referer('load_more_work', 'security');
	$paged = $_POST['page'];
	$args = array(
		'post_type' => 'website',
		'post_status' => 'publish',
		'posts_per_page' => '10',
		'paged' => $paged,
	);
	$my_posts = new WP_Query( $args );
	if ( $my_posts->have_posts() ) :
		$count = 0;
		?>
		<?php while ( $my_posts->have_posts() ) : $my_posts->the_post(); ?>
	<?php $count++; ?>
		<?php get_template_part('template-parts/content', 'website-thumbnail'); ?>
	<?php endwhile; ?>
	<?php
	//Hide the empty pagination container if we have an odd number of posts so that CTA section shows up on the left
		if($count%2==1) : ?>
		<script>
            ( function( $ ) {
				$('.sort').hide();
            } )( jQuery );
		</script>
	<?php endif; ?>

	<?php
	endif;

	wp_die();
}

add_action('wp_ajax_load_work_by_ajax', 'load_work_by_ajax_callback');
add_action('wp_ajax_nopriv_load_work_by_ajax', 'load_work_by_ajax_callback');