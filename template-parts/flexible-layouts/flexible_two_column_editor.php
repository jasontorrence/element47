<?php require get_template_directory() . '/template-parts/flexible-layouts/layout_template_variables.php'; ?>
<section class="element-section <?php echo $formattedClasses; ?>">
    <div class="container-max">

            <div class="col50">
				<?php the_sub_field('content_1'); ?>
            </div>
            <div class="col50 last">
				<?php the_sub_field('content_2'); ?>
            </div>
        </div>

</section>