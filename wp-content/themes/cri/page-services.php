<?php get_header(); ?><?php
    while ( have_posts() ) : the_post(); ?>

        <div class="header header--covered">
                <div class="header__background" style="background-image: url('<?php the_field('header_background_image'); ?>');"></div>
                
                
                <div class="blue-angled-divider" style="z-index: 1;">
                    <img src="<?php bloginfo('template_url'); ?>/images/blue-angled-divider.svg" alt="">
                </div>
                <div class="header__content-background">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <h1 class="header__heading">Overview</h1>
                                <div class="header__content"><?php echo $post->post_content ?></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div><!-- End .header -->

        <div class="intro">
            <div class="intro__angled-image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 465">
                    <path d="M-.002 0l1133.227 435.953 147.729-56.052v86.052H0"/>
                </svg>
            </div><!-- END .intro__angled-image -->


            <div class="intro__content">

                <div class="container services"><?php
                    while( have_rows('page_sections') ) : the_row(); ?>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="services__title"><?php echo get_sub_field("title"); ?></h3>
                                <h3 class="services__heading"><?php echo get_sub_field("heading"); ?></h3>
                            </div>
                            <div class="col-6">
                                <div class="services__content">
                                    <?php echo get_sub_field("content"); ?>
                                </div>
                            </div>
                        </div><!-- END .row -->
                        <hr class="services__spacer"><?php
                    endwhile; ?>

                </div> <!-- End .container -->

            </div><!-- End .intro__content -->

        </div> <!-- END .intro --><?php
    endwhile; ?>
<?php

get_footer();
?>