<?php
/**
 * Template Name: Contact
 */
get_header(); ?>
<main id="contact">
	<section class="hero" style="background-image: url(<?php the_field('hero_background'); ?>);">
		<div class="vcenter">
			<h1 class="heading"><?php the_field('hero_heading'); ?></h1>
		</div>
	</section>
    <section class="section">
        <div class="container-max clearfix">
            <div class="col50">
		        <?php the_field('content_1'); ?>
            </div>
            <div class="col50 last">
		        <?php the_field('content_2'); ?>
            </div>
        </div>

    </section>
</main>
<?php get_footer();