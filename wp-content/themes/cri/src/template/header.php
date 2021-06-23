<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title><?php wp_title(" | ", "echo", "right"); ?><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div class="navigation" id="navigation">
        <div class="navigation__background"></div><?php
        if(is_page("contact") || is_404() || is_page("legal-notice")) : ?>
            <div class="active-background"></div><?php 
        endif; ?>
        <div class="navigation__container">
            <div class="navigation__logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/images/cri-logo-white.svg" alt="">
                </a>
            </div>
            <nav class="navigation__menu">
                <div class="navigation__menu-background"></div>
                <div class="navigation__mobile">
                    <div class="navigation__container">

                        <!-- <div class="navigation__mobile-logo">
                            <a href="<?php echo get_home_url(); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/images/cri-logo-white.svg" alt="">
                            </a>
                        </div> -->
                        <!-- <div class="menu-close">
                            <div class="span">x</div>
                        </div> -->
                    </div>
                </div>
                <div class="navigation__mobile-container">
                    <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container_class' => "main_navigation",
                    )); ?>
                </div>
            </nav>

            <div class="nav-burger">
                <div class="nav-burger__first"></div>
                <div class="nav-burger__second"></div>
                <div class="nav-burger__last"></div>
            </div>
        </div>
    </div>


<!--
    <nav class="navbar navbar-expand-md" role="navigation">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" href="<?php // echo get_home_url(); ?>">
                            <img src="<?php // bloginfo('template_url'); ?>/images/cri-logo-white.svg" alt="">
                        </a><?php /*
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) ); */?>
                    </div>
                </nav>

                        -->