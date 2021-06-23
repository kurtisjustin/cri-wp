<?php get_header(); ?><?php
    while ( have_posts() ) : the_post();  ?>

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
        </div><!-- End .header -->

        <div class="intro">
            <div class="intro__angled-image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 465">
                    <path d="M-.002 0l1133.227 435.953 147.729-56.052v86.052H0"/>
                </svg>
            </div><!-- END .intro__angled-image -->


            <div class="intro__content">
                <div class="spacer"></div>
                <div class="container" ><?php
                if (have_rows("quote")):
                    while( have_rows('quote') ) : the_row(); ?>
                        <div class="testimonial testimonial-single testimonial-service">
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <div class="quote-mark">
                                        <img src="<?php bloginfo('template_url'); ?>/images/quote-marks.svg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-10">
                                    <blockquote>
                                        <q><?php echo get_sub_field("quote_content")  ?></q>
                                        <cite><?php echo get_sub_field("quote_cite")  ?></cite>
                                    </blockquote>
                                </div>
                            </div>
                        </div><!-- End .testimonial -->
                        <hr class="services__spacer"><?php
                    endwhile; 
                endif; ?>
                </div><!-- END .container --><?php

                
                if (have_rows("page_sections")) : 
                    $total_sections_count = count(get_field("page_sections"));
                    $sections_count = 1;?>

                    <div class="container services"><?php
                        while( have_rows('page_sections') ) : the_row(); 
                            if(get_sub_field("heading")) : ?>
                                <div class="row">
                                    <div class="col">
                                        <h3 class="services__title"><?php echo get_sub_field("heading"); ?></h3>
                                    </div>
                                </div><?php
                            endif; ?>
                            <div class="row"><?php 
                                if (get_sub_field("title")): ?>
                                    <div class="row careers__opportunity">
                                        <div class="col-12 col-md-4">
                                            <h3 class="careers__heading"><?php echo get_sub_field("title"); ?></h3>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <div class="careers__content">
                                                <?php echo get_sub_field("content"); ?>
                                            </div>
                                        </div>
                                    </div><?php
                                else: ?>
                                    <div class="col-10 offset-1">
                                        <div class="services__content">
                                            <?php echo get_sub_field("content"); ?>
                                        </div>
                                    </div> <?php
                                endif; ?>
                            </div><!-- END .row --><?php
                            if ($total_sections_count != $sections_count) : ?>
                                <hr class="services__spacer"> <?php
                            endif; 
                            $sections_count ++;
                        endwhile; ?>
                    </div> <!-- End .container --><?php

                endif; ?>
                <div class="spacer"></div><?php 
                if(get_field("prefooter_text")) : ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11">
                                <p class="pre-footer-text"><?php
                                    the_field("prefooter_text"); ?>
                                </p>
                            </div>
                        </div>
                    </div><?php
                endif;?>
            </div><!-- End .intro__content -->

        </div> <!-- END .intro --><?php
    endwhile; ?>
<?php

get_footer();
?>