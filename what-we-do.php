<?php
/**
 * Template Name: What We Do
 */
get_header(); ?>
<main>
	<section class="title bg-light">
		<?php the_title('<h1>', '</h1>'); ?>
	</section>
	<section class="intro-section bg-light">
		<div class="fifty bleed" style="background-image: url(<?php the_field('what_we_do_photo'); ?>);">
		</div>
		<div class="fifty">
			<div class="block-right">
				<?php the_field('what_we_do_content'); ?>
			</div>
		</div>
	</section>
	<section id="web" class="services skew-section skew-section-white top-shift">
		<div class="shard"></div>
		<div class="container-max">
			<h2 class="heading"><?php the_field('services_heading'); ?></h2>

			<?php if( have_rows('service_blocks') ): ?>

			    <ul class="services-list">

			    <?php while( have_rows('service_blocks') ): the_row(); ?>
					<?php
			            $icon = get_sub_field('service_icon');
				        $name = get_sub_field('service_name');
						$desc = get_sub_field('service_description');
				        $link = get_sub_field('landing_page_link');
			        ?>
			        <li class="service">
                        <?php if($link): ?>
                        <a href="<?php echo $link; ?>">
                            <?php endif; ?>
                            <?php echo $icon; ?>
                            <h3><?php echo $name; ?></h3>
		                <?php if($link): ?>
                        </a>
                        <?php endif; ?>
				        <p><?php echo $desc; ?></p>

			        </li>

			    <?php endwhile; ?>

			    </ul>

			<?php endif; ?>
		</div>
	</section>
	<section id="marketing" class="services skew-section skew-section-cream overflow">
		<div class="shard"></div>
		<div class="container-max">
			<h2 class="heading"><?php the_field('digital_marketing_heading'); ?></h2>

			<?php if( have_rows('digital_marketing_service_blocks') ): ?>

				<ul class="services-list">

					<?php while( have_rows('digital_marketing_service_blocks') ): the_row(); ?>
						<?php
						$icon = get_sub_field('icon');
						$name = get_sub_field('service_name');
						$desc = get_sub_field('service_description');
						$link = get_sub_field('landing_page_link');
						?>
						<li class="service">
							<?php if($link): ?>
                            <a href="<?php echo $link; ?>">
								<?php endif; ?>
								<?php echo $icon; ?>
                                <h3><?php echo $name; ?></h3>
								<?php if($link): ?>
                            </a>
						<?php endif; ?>
                            <p><?php echo $desc; ?></p>
						</li>

					<?php endwhile; ?>

				</ul>

			<?php endif; ?>
		</div>
	</section>
	<section class="cta-section">
		<div class="container-narrow">
			<h3><?php the_field('cta_heading'); ?></h3>
			<p><a href="<?php the_field('button_link'); ?>" class="button"><?php the_field('button_text'); ?></a></p>
		</div>
	</section>
</main>
<?php get_footer();