<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Teko|Work+Sans:400,700" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144634329-1"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T6FRTKH');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6FRTKH"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php wp_head(); ?>
</head>
<div id="outer-wrapper">
    <body <?php body_class(); ?>>
        <header<?php if(get_the_post_thumbnail()): ?> class="transparent-header"<?php endif; ?>>

	            <?php
                    function fly_keystone_the_custom_logo() {
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    }
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	            ?>
                <a id="sitelink" href="/">
                    <img alt="element 47" class="site-logo" src="<?php echo $image[0]; ?>" />
                </a>
                <nav id="site-navigation">
		            <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'container'      => '',
                            )
                        );
		            ?>
                </nav>
                <a id="nav-toggle"></a>
        </header>