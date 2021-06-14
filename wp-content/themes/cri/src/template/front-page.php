<?php

get_header(); 


// get the no. of testimonies so the width can be set for vertical scroll
if( have_rows('testimonials') ):
    $testimonials = get_field('testimonials');
    $testimonialsCount = (count($testimonials));
endif; 

while ( have_posts() ) : the_post(); ?>
<main class="homepage">
    <div class="header">
        <div class="header__background" style="background-image: url('<?php the_field('background_header_image'); ?>');"></div>
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
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h2 class="slide-in-from-left"><?php the_field('intro_heading'); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-lg-3">
                    <p class="slide-in-from-left"><?php the_field("introduction_excerpt"); ?></p> 
                    </div>
                </div>
            </div><!-- END .container -->

            <div class="spacer"></div>

            <div class="container"><?php
                while( have_rows('single_testimonial') ) : the_row(); ?>
                    <div class="testimonial testimonial-single">
                        <div class="row">
                            <div class="col-2">
                                <img class="quote-mark" src="<?php bloginfo('template_url'); ?>/images/quote-marks.svg" alt="">
                            </div>
                            <div class="col-9">
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
                            <div class="col-4 homepage-tag">
                                <div class="content">
                                    <h3><?php echo get_sub_field("site_tag"); ?></h3>
                                    <p><?php echo get_sub_field("tag_description"); ?></p>
                                    <a href="<?php echo get_sub_field("learn_more_link"); ?>">Learn More</a>
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

        <div class="testimonials__container"  style="width: <?php echo $testimonialsCount * 100; ?>vw;"><?php 
            while( have_rows('testimonials') ) : the_row(); ?>
                <div class="testimonials__testimonial testimonial">
                    <div class="container">

                        <div class="row">
                            <div class="col-2">
                                <img src="<?php bloginfo('template_url'); ?>/images/quote-marks.svg" alt="">
                            </div>
                            <div class="col-9">
                                <blockquote>
                                    <q><?php echo get_sub_field("testimonial_content");  ?></q>
                                    <cite><?php echo get_sub_field("testimonial_quotee");  ?></cite>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div><!-- End .testimonial --><?php
            endwhile; ?>
        </div><!-- End .testimonials__container -->
    </div><!-- End .homepage__testimonials.tstimonials -->
</main><!-- End main.homepage --><?php 
endwhile;

get_footer(); ?>