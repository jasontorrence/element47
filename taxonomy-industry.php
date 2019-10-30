<?php
get_header(); ?>

	<main id="work" class="website-archive">
		<section class="title">
			<h2 class="hero-subheading">Industry</h2>
			<h1><?php single_term_title(); ?></h1>
		</section>
		<section class="portfolio">
			<div class="fifty">
				<div class="block-left">
                    <h2 class="underlay">Our Work</h2>
					<?php if(term_description()){
						echo term_description();
					}; ?>
				</div>
			</div>

			<?php
				if(have_posts() ): ?>
					<?php while(have_posts() ): ?>
						<?php the_post(); ?>
						<?php get_template_part('template-parts/content', 'website-thumbnail'); ?>
					<?php endwhile;?>
				<?php endif;
				wp_reset_postdata();
			?>

			<div class="fifty">
				<div class="work2-block">
					<?php the_field('cta_content'); ?>
				</div>
			</div>
		</section>
	</main>

<?php get_footer();