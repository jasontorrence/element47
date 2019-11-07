<?php require get_template_directory() . '/template-parts/flexible-layouts/layout_template_variables.php'; ?>
<section class="element-section <?php echo $formattedClasses; ?>">
    <div class="container-max">
		<?php the_sub_field('content'); ?>
	</div>
</section>