<?php
/**
 * Template Name: Blog
 */
get_header();
?>
	<main>
        <?php if ( $paged < 2 ): ?>

            <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    'meta_key'     => 'sticky',
                    'meta_value'   => '1',
                );
                $query = new WP_Query($args);

                if($query-> have_posts() ): ?>

                    <?php while($query->have_posts() ): ?>

                        <?php $query->the_post(); ?>

                        <section class="hero" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                            <div class="vcenter">
                                <?php the_title('<h1>', '</h1>'); ?>
                                <a class="button" href="<?php the_permalink(); ?>">Read More</a>
                            </div>
                        </section>

                    <?php endwhile;?>

                <?php endif;
                    wp_reset_postdata();
            ?>

        <?php endif; ?>
		<div id="blog-wrapper">
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => '10',
                'paged' => 1,
                'meta_key'     => 'sticky',
                'meta_value'   => '1',
                'meta_compare' => '!='
            );
            $my_posts = new WP_Query( $args );
            if ( $my_posts->have_posts() ) :
                ?>
                <div class="my-posts">
                    <?php $count = 0; ?>
                    <?php while ( $my_posts->have_posts() ) : $my_posts->the_post(); ?>
                        <?php get_template_part('template-parts/content', 'post-thumbnail'); ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="container-max">
                <a href="#" class="button loadmore">Load More...</a>
            </div>

        </div>

	</main>
    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
        var page = 2;
        jQuery(function($) {
            $('body').on('click', '.loadmore', function(e) {
                e.preventDefault();
                var data = {
                    'action': 'load_posts_by_ajax',
                    'page': page,
                    'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
                };

                $.post(ajaxurl, data, function(response) {
                    if(response != '') {
                        $('.my-posts').append(response);
                        page++;
                    } else {
                        $('.loadmore').hide();
                    }
                });
            });
        });
    </script>
<?php
get_footer();
