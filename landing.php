<?php
/**
 * Template Name: Landing Page
 * Created by PhpStorm.
 * User: jason
 * Date: 9/26/19
 * Time: 9:42 AM
 */
get_header(); ?>
<main>
	<section class="title">
		<h1><?php the_field('heading'); ?></h1>
	</section>


<?php if( have_rows('e47_lp_layout_sections') ):

	while ( have_rows('e47_lp_layout_sections') ) : the_row(); ?>

		<?php if(get_row_layout()== 'four_squares_of_content'): ?>

			<?php
                $marginTop = get_sub_field('remove_top_margin');
                $marginBottom = get_sub_field('remove_bottom_margin');
                $ctaText = get_sub_field('cta_text');
                $ctaURL = get_sub_field('cta_url');
                if($ctaURL) {
                    $url = $ctaURL;
                }
                else {
                    $url = untrailingslashit(get_the_permalink()) . '#form';
                }
			?>

                <section class="lp-section no-top-margin">
                    <div class="lp-section-inner">
                        <div class="fifty">
                            <div class="block-left">
                                <?php the_sub_field('content_1'); ?>
                                <?php if($ctaText): ?>
                                    <a class="button button-lp-cta" href="<?php echo $url; ?>"><?php echo $ctaText; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="fifty bleed" style="background-image: url(<?php the_sub_field('image_1'); ?>);">
                        </div>
                    </div>
                </section>

                <section class="lp-section no-top-margin">
                    <div class="lp-section-inner">
                        <div class="fifty reverse">
                            <div class="block-right">

                                <?php the_sub_field('content_2'); ?>
                            </div>
                        </div>
                        <div class="fifty reverse bleed" style="background-image: url(<?php the_sub_field('image_2'); ?>);">
                        </div>
                    </div>
                </section>

        <?php endif; ?>

		<?php if(get_row_layout()== 'form_section'): ?>

			<?php
				$svg = get_sub_field('icon');
			?>
		<section id="form" class="lp-form-section">
			<?php if($svg): ?>
				<?php echo $svg; ?>
			<?php endif; ?>
			<div class="form-container">
				<h2 class="heading"><?php the_sub_field('heading'); ?></h2>
				<?php the_sub_field('content'); ?>
				<div class="lp-form">
					<?php the_sub_field('choose_form'); ?>
				</div>
			</div>
		</section>

		<?php endif; ?>

		<?php if(get_row_layout()== 'icon_section'): ?>
			<?php
				$row_count = count(get_sub_field('icons'));
				$paddingTop = get_sub_field('add_top_padding');
				$paddingBottom = get_sub_field('add_bottom_padding');
			?>

		<section class="lp-icon-section<?php if($paddingTop): ?> add-top-padding<?php endif; ?><?php if($paddingBottom): ?> add-bottom-padding<?php endif; ?>">

			<?php if( have_rows('icons') ): ?>

			    <ul class="lp-icons items-<?php echo $row_count; ?>">

			    <?php while( have_rows('icons') ): ?>


				    <?php the_row(); ?>
			        <?php
				        $iconURL = get_sub_field('image');
			        ?>

			        <li>
						<img src="<?php echo $iconURL; ?>" />

			        </li>

			    <?php endwhile; ?>

			    </ul>

			<?php endif; ?>

		</section>
		<?php endif; ?>

		<?php if(get_row_layout()== 'list_section'): ?>



		<section id="<?php the_sub_field('section_id'); ?>" class="lp-list-section skew-section skew-section-cream overflow">
				<div class="shard">
				</div>
			<div class="container-max">
                <h2 class="heading"><?php the_sub_field('heading'); ?></h2>
				<div class="col50">
                    <h3><?php the_sub_field('list_1_heading'); ?></h3>
					<?php the_sub_field('list_1'); ?>
				</div>
				<div class="col50 last">
                    <h3><?php the_sub_field('list_2_heading'); ?></h3>
					<?php the_sub_field('list_2'); ?>
				</div>
			</div>

		</section>

		<?php endif; ?>

	<?php endwhile; ?>

<?php endif; ?>
</main>
<?php get_footer();