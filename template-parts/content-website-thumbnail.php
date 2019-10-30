<?php
	$siteTitle = get_the_title();
	$siteTagline = get_field('tagline');
	$siteLink = get_the_permalink();
?>

<div class="website">
	<a href="<?php echo $siteLink; ?>" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
        <span>
            <h4><?php echo $siteTagline; ?></h4>
            <h3><?php echo $siteTitle; ?></h3>
        </span>
	</a>
</div>