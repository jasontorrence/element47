<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fly_Keystone
 */

get_header();
?>
    <main>
        <?php

            if( have_posts() ): ?>
                <ul>
                <?php while(have_posts() ): ?>

                    <?php the_post(); ?>
                <li>
                        <?php the_title(); ?>
                <?php the_terms($post->ID, 'industry', 'categories: ', ' / ' ); ?>
                </li>
                <?php endwhile;?>
                </ul>
            <?php endif;
                wp_reset_postdata();
        ?>
    </main>

<?php
get_footer();