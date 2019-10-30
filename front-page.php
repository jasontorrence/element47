<?php
/**
 * Template Name: Front Page
 */
get_header(); ?>
<main id="home">
    <section class="hero" style="background-image: url(<?php the_field('hero_image'); ?>);">
        <div class="vcenter">
            <h1 class="hero-subheading"><?php the_field('hero_subheading'); ?></h1>
            <h2 class="heading"><?php the_field('hero_heading'); ?></h2>
        </div>
    </section>

    <section class="about">
        <div class="fifty">
            <div class="block-left">
                <h2 class="underlay"><?php the_field('what_we_do_heading'); ?></h2>
                <?php the_field('what_we_do_content'); ?>
            </div>
        </div>
        <div id="ceo" class="fifty bleed overlay-red" style="background-image: url(<?php the_field('what_we_do_background_image'); ?>);">
            <div class="overlay-text">
                <?php the_field('what_we_do_image_content'); ?>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="fifty reverse">
            <div class="block-right">
                <h2 class="underlay"><?php the_field('how_we_do_it_heading'); ?></h2>
                <?php the_field('how_we_do_it_content'); ?>
            </div>
        </div>
        <div id="team" class="fifty reverse bleed" style="background-image: url(<?php the_field('how_we_do_it_background_image'); ?>);">
    </section>

    <section class="portfolio">
        <div class="fifty">
            <div class="block-left">
                <h2 class="underlay"><?php the_field('our_work_heading'); ?></h2>
                <?php the_field('our_work_content'); ?>
            </div>
        </div>

        <?php
            $post_objects = get_field('portfolio');

            if( $post_objects ): ?>

                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>

                        <?php setup_postdata($post); ?>

                        <?php get_template_part('template-parts/content', 'website-thumbnail'); ?>

                    <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>

        <div class="fifty">
            <div class="work2-block">
                <?php the_field('our_work_cta'); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer();