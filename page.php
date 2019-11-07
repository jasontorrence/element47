<?php
/**
 * Template Name: Page
 */

get_header();
?>
    <main>
    <?php if(get_the_post_thumbnail()): ?>
        <section class="hero" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
            <div class="vcenter">
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </section>
    <?php else: ?>
        <section class="title">
            <div class="container-max">
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </section>
    <?php endif; ?>

        <section class="section main-content">
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
