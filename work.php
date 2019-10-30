<?php
/**
 * Template Name: Our Work
 */
get_header(); ?>

<main id="work">
	<section class="title">
		<h1><?php the_field('heading'); ?></h1>
	</section>
	<section class="portfolio">
		<div class="inner">
            <div class="fifty">
                <div class="block-left">
                    <?php the_field('intro_content'); ?>
                </div>
            </div>

            <?php

                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(

                    'post_type' => 'website',
                    'post_status' => 'publish',
                    'posts_per_page' => 10,
                    'paged'     => $paged,
                );
                $loop = new WP_Query($args);

                if($loop-> have_posts() ): ?>

                    <?php while($loop->have_posts() ): ?>

                        <?php $loop->the_post(); ?>
                        <?php get_template_part('template-parts/content', 'website-thumbnail'); ?>

                    <?php endwhile;?>

		</div>
		<?php endif;
		wp_reset_postdata();
		?>
		<div class="fifty sort">
			<a href="#" class="button loadmore">Load More!</a>
		</div>
		<div class="fifty">
			<div class="work2-block">
				<?php the_field('cta_content'); ?>
			</div>
		</div>
	</section>
</main>

	<script>
        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
        var page = 2;

        jQuery(function($) {


            $('body').on('click', '.loadmore', function(e) {
                e.preventDefault();
                var data = {
                    'action': 'load_work_by_ajax',
                    'page': page,
                    'security': '<?php echo wp_create_nonce("load_more_work"); ?>',
	                'max_page': '<?php echo $loop->max_num_pages + 1; ?>',
                };
                console.log('clicked, at least.');

                $.post(ajaxurl, data, function(response) {
                    if(response != '') {
                        $('.inner').append(response);
                        page++;
                    }

                    if (page == data['max_page']) {
                        $('.loadmore').hide();
                    }

                });
            });
        });
	</script>



<?php
get_footer();