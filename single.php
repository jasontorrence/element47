<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fly_Keystone
 */

get_header();
?>
<style>
    blockquote {
        background-image: url(<?php the_post_thumbnail_url('blockquote-background'); ?>);
    }
</style>
<main>
    <section class="hero" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
        <div class="vcenter">
            <?php the_title('<h1>', '</h1>'); ?>
        </div>
    </section>
    <section class="work-detail">
        <div class="container-narrow">
    <?php if(have_posts()): ?>

        <?php while(have_posts()): ?>

            <?php the_post(); ?>
        <h4 class="author">Written by <?php the_author(); ?>, <?php the_date(); ?></h4>
        <div class="post-content">
            <?php the_content(); ?>
        </div>

        <?php endwhile; ?>

    <?php endif; ?>

    <?php

        $post_object = get_field('e47_cta');

        if( $post_object ):

            // override $post
            $post = $post_object;
            setup_postdata( $post );

            $img = get_field('background_image');
        ?>
        <?php if($post_object): ?>
        <div <?php if($img): ?>class="post-cta"<?php else: ?>class="post-cta default-background"<?php endif; ?><?php if($img): ?>style="background-image: url(<?php echo $img; ?>);"<?php endif; ?>>
            <h3><?php the_field('content'); ?></h3>
            <a class="button cta-button" href="<?php the_field('landing_page_url'); ?>"><?php the_field('button_text'); ?></a>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer();
