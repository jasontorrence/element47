<?php
get_header();
?>
<main id="single-work">
	<section class="hero" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
		<div class="vcenter">
			<?php the_title('<h1>', '</h1>'); ?>
		</div>
	</section>
	<section class="work-detail">
		<div class="container-narrow">
			<h2><?php the_field('tagline'); ?></h2>
			<p><?php the_field('summary'); ?></p>
			<a class="button" target="_blank" href="<?php the_field('url'); ?>">Visit Site</a>
		</div>
	</section>
    <div>
	    <?php
	    $prev_post = get_previous_post();
	    if($prev_post): ?>

        <?php

			    $pSiteTitle = $prev_post->post_title;
			    $id = $prev_post->ID;
			    $pSiteLink = get_the_permalink($id);
			    $pSiteImg = get_the_post_thumbnail_url($id);

		    ?>
        <div class="website">
            <a href="<?php echo $pSiteLink; ?>" style="background-image: url(<?php echo $pSiteImg; ?>);">
                <span>
                    <h4><?php echo $pSiteTagline; ?></h4>
                    <h3><?php echo $pSiteTitle; ?></h3>
                </span>
            </a>
        </div>

	    <?php else: ?>
            <div class="website nxt">
                <a id="empty" href="/work" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hero-small.jpg);">
                <span>
                    <h4><?php echo $nSiteTagline; ?></h4>
                    <h3>Back to Our Work</h3>
                </span>
                </a>
            </div>

	    <?php endif; ?>

        <?php

	    $next_post = get_next_post();
	    if($next_post) : ?>

        <?php
		    $nSiteTitle = $next_post->post_title;
		    $id = $next_post->ID;
		    $nSiteLink = get_the_permalink($id);
		    $nSiteImg = get_the_post_thumbnail_url($id);

	    ?>

        <div class="website nxt">
            <a href="<?php echo $nSiteLink; ?>" style="background-image: url(<?php echo $nSiteImg; ?>);">
                <span>
                    <h4><?php echo $nSiteTagline; ?></h4>
                    <h3><?php echo $nSiteTitle; ?></h3>
                </span>
            </a>
        </div>
        <?php else: ?>
            <div class="website nxt empty">
                <a id="empty" href="/work" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hero-small.jpg);">
                    <span>
                        <h4><?php echo $nSiteTagline; ?></h4>
                        <h3>Back to Our Work</h3>
                    </span>
                </a>
            </div>

        <?php endif; ?>
    </div>
</main>
<?php
get_footer();