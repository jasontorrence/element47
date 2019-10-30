<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fly_Keystone
 */

get_header();
?>
<main>
    <section class="title">
        <div class="container-max">
            <?php the_title('<h1>', '</h1>'); ?>
        </div>
    </section>
    <section class="main-content">
        <div class="container-max">
            <?php if(have_posts()): ?>

                <?php while(have_posts()): ?>

                    <?php the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </section>
</main>
<?php
get_footer();
