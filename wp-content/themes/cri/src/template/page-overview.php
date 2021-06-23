<?php get_header(); ?><?php
    while ( have_posts() ) : the_post();  ?>

        

        <?php 
            if (get_field("background_image")) :
                include "header-covered-partial.php";
            
            else : 
        ?>

        <div class="header header--covered">
                <!-- <div class="header__background" style="background-image: url('<?php the_field('header_background_image'); ?>');"></div>
                
                
                <div class="blue-angled-divider" style="z-index: 1;">
                    <img src="<?php // bloginfo('template_url'); ?>/images/blue-angled-divider.svg" alt="">
                </div> -->
                <div class="header__content-background">
                    <div class="container service-child-page-container">
                        <div class="row">
                            <div class="col-lg-10">
                                <h1 class="header__heading"><?php the_title(); ?></h1>
                                <div class="header__content"><?php echo $post->post_content ?></div>
                            </div> 
                        </div>
                    </div>
                </div>
        </div><!-- End .header --><?php

            endif; ?>

        <div class="intro">
            <div class="intro__angled-image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 465">
                    <path d="M-.002 0l1133.227 435.953 147.729-56.052v86.052H0"/>
                </svg>
            </div><!-- END .intro__angled-image -->


            <div class="intro__content"><?php
                if (have_rows("page_sections")) : 
                    $total_sections_count = count(get_field("page_sections"));
                    $sections_count = 1;?>

                    <div class="container services"><?php
                        while( have_rows('page_sections') ) : the_row(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="careers__title"><?php echo get_sub_field("heading"); ?></h2>
                                </div>
                            </div>
                            
                            <div class="row careers__opportunity">
                                <div class="col-12 col-md-6">
                                    <h3 class="careers__heading"><?php echo get_sub_field("title"); ?></h3>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="careers__content">
                                        <?php echo get_sub_field("content"); ?>
                                    </div>
                                </div>
                            </div><!-- END .row --><?php
                            if ($total_sections_count != $sections_count) : ?>
                                <hr class="services__spacer"> <?php
                            endif; 
                            $sections_count ++;
                        endwhile; ?>
                    </div> <!-- End .container --><?php

                endif; ?>
            </div><!-- End .intro__content -->

            <div class="spacer"></div>

        </div> <!-- END .intro --><?php
    endwhile; ?>
<?php

get_footer();
?>