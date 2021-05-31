<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300,400;0,600;1,400&family=Quattrocento+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div class="navigation">
        <div class="navigation__background"></div>
        <div class="navigation__container">
            <div class="navigation__logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php site_icon_url() ?>" alt="">
                </a>
            </div>
            <nav class="navigation__menu"> <?php 
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container_class' => "main_navigation",
                )); ?>
            </nav>
        </div>
    </div>