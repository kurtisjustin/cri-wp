<?php

get_header(); 

while ( have_posts() ) : the_post(); ?>
    <div class="pinned-header" style="background-image: url('<?php the_field('background_header_image'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1><?php the_field('tag_line'); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="white-angled-divider">
        <img src="<?php bloginfo('template_url'); ?>/images/white-angled-divider.svg" alt="">
    </div>

    <div class="homepage-intro">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h2><?php the_field('intro_heading'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-lg-3">
                <p><?php the_field("introduction_excerpt"); ?></p> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="temp-spacer"></div>
            <div class="testimonial"><?php
                while( have_rows('single_testimonial') ) : the_row(); ?>
                    <div class="row">
                        <div class="col-2">
                            <img src="<?php bloginfo('template_url'); ?>/images/quote-marks.svg" alt="">
                        </div>
                        <div class="col-9">
                            <blockquote>
                                <q><?php echo get_sub_field("testimonial_content")  ?></q>
                                <cite><?php echo get_sub_field("testimonial_quotee")  ?></cite>
                            </blockquote>
                        </div>
                    </div><?php
                endwhile; ?>
            </div>
        </div>
        <div class="homepage-tags">
            <div class="temp-spacer"></div>
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
                </div>
            </div>
        </div>
    </div>

    <div class="homepage-testimonials"><?php
        while( have_rows('testimonials') ) : the_row(); ?>
            <p><?php echo get_sub_field("testimonial_content")  ?></p>
            <p><?php echo get_sub_field("testimonial_quotee")  ?></p><?php
        endwhile; ?>
    </div><?php 
endwhile;

get_footer(); ?>