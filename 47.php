<?php
/**
 * Template Name: 47?
 */
get_header(); ?>
<main id="forty-seven">
    <section class="title bg-dark">
        <?php the_title('<h1>', '</h1>'); ?>
    </section>
    <section class="intro-section bg-dark">
        <div class="fifty bleed" style="background-image: url(<?php the_field('history_photo'); ?>)">

        </div>
        <div class="fifty">
            <div class="block-right">
                <h2 class="lblue"><?php the_field('history_heading'); ?></h2>
                <?php the_field('history_content'); ?>
            </div>
        </div>
    </section>

    <section id="people" class="skew-section skew-section-white top-shift">
        <div class="shard"></div>
        <div class="container-max">
            <h2 class="heading red"><?php the_field('team_heading'); ?></h2>
            <div id="our-people">
                <?php the_field('team_content'); ?>
            </div>
	        <?php

	        $team_members = get_field('e47_team');

	        if( $team_members ): ?>
                <ul class="crew">
			        <?php foreach( $team_members as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post);

				        $userid = $post['ID'];
				        $headshot = get_field('headshot', 'user_'. $userid);
				        $name = $post['display_name'];
				        $title = get_field('title', 'user_'. $userid);
				        ?>
                        <li>
                            <img src="<?php echo $headshot; ?>" />
                            <h3 class="team-name"><?php echo $name; ?></h3>
                            <h4 class="team-title"><?php echo $title; ?></h4>

                        </li>
			        <?php endforeach; ?>
                </ul>
		        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	        <?php endif; ?>
        </div>
    </section>
    <section id="process" class="skew-section skew-section-cream overflow">
        <div class="shard">
        </div>
        <div class="container-max">
            <h2 class="heading dblue"><?php the_field('process_heading'); ?></h2>

            <div class="col50">
		        <?php the_field('process_content'); ?>
            </div>
            <div class="col50 last">

            </div>
            <div class="clearfix"></div>
            <div class="col50">
	            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/discover.svg" />
            </div>
            <div class="col50 last">
	            <?php the_field('step_1'); ?>
            </div>
            <div class="col50 reverse last">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/build.svg" />
            </div>
            <div class="col50 reverse">
	            <?php the_field('step_2'); ?>
            </div>
            <div class="clearfix"></div>
            <div class="col50">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/grow.svg" />
            </div>
            <div class="col50 last">
	            <?php the_field('step_3'); ?>
            </div>
        </div>
    </section>







</main>
<?php get_footer();
