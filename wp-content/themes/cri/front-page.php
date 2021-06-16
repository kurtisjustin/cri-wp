<?php

get_header(); 


// get the no. of testimonies so the width can be set for vertical scroll
if( have_rows('testimonials') ):
    $testimonials = get_field('testimonials');
    $testimonialsCount = (count($testimonials));
endif; 

while ( have_posts() ) : the_post(); ?>

<div class="loading">
    <div class="loading__container">
        <img class="loading__image" src="<?php bloginfo('template_url'); ?>/images/landing-sprite-anim-2.0.png" alt="">
    </div>
</div>

<main class="homepage">
    <div class="header"> 
        <div class="header__background" style="background-image: url('<?php the_field('background_header_image'); ?>');"></div>
        <div class="header__background-color"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="header__heading header__heading--home"><?php the_field('tag_line'); ?></h1>
                </div>
            </div>
        </div>
        
    </div>

    <div class="intro">
        <div class="intro__angled-image">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 465">
                <path d="M-.002 0l1133.227 435.953 147.729-56.052v86.052H0"/>
            </svg>
        </div><!-- END .intro__angled-image -->
    
        <div class="intro__content">
            <div class="intro__spacer"></div>
            <div class="container slide-in-from-left">
                <div class="row">
                    <div class="col-lg-8 col-md-10">
                        <h2 class="intro__heading"><?php the_field('intro_heading'); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-9 offset-sm-3">
                        <p><?php the_field("introduction_excerpt"); ?></p> 
                    </div>
                </div>
            </div><!-- END .container -->

            <div class="spacer"></div>

            <div class="container"><?php
                while( have_rows('single_testimonial') ) : the_row(); ?>
                    <div class="testimonial testimonial-single slide-in-from-right">
                        <div class="row">
                            <div class="col-12 col-md-2">
                                <div class="quote-mark">
                                    <img src="<?php bloginfo('template_url'); ?>/images/quote-marks.svg" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-10">
                                <blockquote>
                                    <q><?php echo get_sub_field("testimonial_content")  ?></q>
                                    <cite><?php echo get_sub_field("testimonial_quotee")  ?></cite>
                                </blockquote>
                            </div>
                        </div>
                    </div><!-- End .testimonial --><?php
                endwhile; ?>
            </div><!-- END .container -->

            <div class="spacer"></div>

            <div class="homepage-tags">
                <div class="container">
                    <div class="row"><?php
                        while( have_rows('site_tags') ) : the_row(); ?>
                            <div class="col-sm-12 col-md-4 homepage-tag homepage-tag-<?php echo get_row_index(); ?>">
                                <div class="content">
                                    <h3><?php echo get_sub_field("site_tag"); ?></h3>
                                    <p><?php echo get_sub_field("tag_description"); ?></p>
                                    <div class="underlined-link">
                                        <a class="learn-more-links" href="<?php echo get_sub_field("learn_more_link"); ?>">Learn More</a>
                                    </div>
                                    
                                </div>
                            </div><?php
                        endwhile; ?>
                    </div><!-- END .row -->
                </div><!-- END .container -->
            </div><!-- END .homepage-tags -->
        </div> <!-- END .intro-content -->
    </div><!-- END .intro -->

    <div class="spacer-large"></div>

    <div class="homepage__testimonials testimonials">
        <div class="testimonials__background" style="background-image: url('<?php the_field("testimonials_image"); ?>');"></div><!-- End .pinned-testimonials -->

        <div class="testimonials__container">
            <div class="testimonials__container-inner"><?php 
                while( have_rows('testimonials') ) : the_row(); ?>
                    <div class="testimonials__item">

                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <div class="testimonials__quote">
                                        <img src="<?php bloginfo('template_url'); ?>/images/quote-marks.svg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-10">
                                    <div class="row">
                                        <div class="col-xl-8 col-md-12">
                                            <p class="testimonials__item-content"><?php echo get_sub_field("testimonial_content"); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-md-12 offset-xl-8">
                                            <p class="testimonials__item-cite"><?php echo get_sub_field("testimonial_quotee"); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div><!-- End .testimonial --><?php
                endwhile; ?>
            </div>
            <div class="blue-angled-divider">
                <img src="<?php bloginfo('template_url'); ?>/images/blue-angled-divider.svg" alt="">
            </div>
        </div><!-- End .testimonials__container -->
    </div><!-- End .homepage__testimonials.tstimonials -->
    
</main><!-- End main.homepage --><?php 
endwhile;

get_footer(); ?>