<?php
$link = get_the_permalink();
$cat = get_the_category();
if(! empty($cat)) {
	$catName = $cat[0]->name;
}
?>

<div class="article">
    <a href="<?php echo $link; ?>" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
        <div class="article-details">
            <h4 class="article-category"><?php echo $catName; ?></h4>
            <h2 class="heading red"><?php the_title(); ?></h2>
        </div>
    </a>
</div>