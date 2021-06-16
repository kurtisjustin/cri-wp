<?php get_header(); 

    $consultants = get_posts(array(
        'numberposts' => -1,
        'post_type' => 'team',
        "meta_query" => array(
            array(
                "key" => "role",
                "value" => "consultant",
            )
        )
    ));

    $associates = get_posts(array(
        'numberposts' => -1,
        'post_type' => 'team',
        "meta_query" => array(
            array(
                "key" => "role",
                "value" => "associate",
            )
        )
    ));

    $analysts = get_posts(array(
        'numberposts' => -1,
        'post_type' => 'team',
        "meta_query" => array(
            array(
                "key" => "role",
                "value" => "analyst",
            )
        )
    )); ?>
    <div class="header header--covered"><?php
        while ( have_posts() ) : the_post(); ?>
            <div class="header__background" style="background-image: url('<?php the_field('background_image'); ?>');"></div>
            
            
            <div class="blue-angled-divider" style="z-index: 1;">
                <img src="<?php bloginfo('template_url'); ?>/images/blue-angled-divider.svg" alt="">
            </div>
            <div class="header__content-background">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <h1 class="header__heading"><?php the_title(); ?></h1>
                            <div class="header__content"><?php echo $post->post_content ?></div>
                        </div>
                    </div>
                </div>
            </div><?php
        endwhile; ?>
    </div><!-- End .header -->

    <div class="intro">
        <div class="intro__angled-image">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 465">
                <path d="M-.002 0l1133.227 435.953 147.729-56.052v86.052H0"/>
            </svg>
        </div><!-- END .intro__angled-image -->


        <div class="intro__content">
            <div class="intro__spacer"></div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="sub-heading">Our Team</h3>
                    </div>
                </div>
            </div>
        

            <div class="container">

            

                <!-- Directors --> <?php
                if( $directors ): ?>
                    <div class="team-member">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <h3 class="team-member__role-heading">Directors</h3>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="row"><?php
                                    foreach($directors as $post):  ?>
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="team-member__container">
                                                        <h4 class="team-member__name"><?php echo get_the_title($post->ID); ?></h4>
                                                        <p class="team-member__position"><?php the_field("position", $post->ID); ?></p>
                                                        <p class="team-member__email"><a href="mailto:<?php the_field("email", $post->ID); ?>"></a><?php the_field("email", $post->ID); ?></p>
                                                        <div class="team-member__links">
                                                            <div class="team-member__link">
                                                                <button id="team-modal-button" data-modal="team-id-<?php echo $post->ID; ?>">Bio</button>
                                                            </div>
                                                            <div class="team-member__link">
                                                                <a href="#">e-card</a>
                                                            </div>
                                                            <div class="team-member__link team-member__link--icon">
                                                                <a href="<?php the_field("linkedin", $post->ID); ?>"><img class="team-member__icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAACeVBMVEUAAAAAAAAAAAAAAIAAAFUAAIAAAGYAM2YAAIAAIGAcHHEaGmYaM4AVK2oVK4AUJ3YRImYYJG0YMW0XI3QXLnQUM3ofM3AUJ2wbLnYaLHIaK28YMHAYMHggMHgdM3UcMHUbL3IbL3kaLnYaLXkaM3MYMXMeMXMYKnEYL3cXLnQcLXccLHQcMnQbMXIbMHUeMnMdMXYdMHgYL3YcL3YfMHccMXUbL3YcMXcfMXccMHUfMHcdMXYcL3QfMnYeMHUeMncdMXceMnceMXYeMXceMHYeM3YdMnUdMngdMnYgMnYfMXUcMXYfMXQfMXYdMXYeMHceMnYdMnUfMXgfMHcfMHYeMXYgMXYeMXUeMXceMHYgMHYdMHgfMnYfMXUfMXcfM3YeM3UeM3ceMnYeMnYeMnggMngfM3gfMXcfMHYeMnYeMncfMncfMnYfMXcfM3ceMnYfMncfMncfMnUfMncfMngfMXYeMncfMncfMnceMnYgMncfMnYfMncfMnYgMncfMncfM3cfMXYeMXYgMncgMngfM3YfMnceM3ceMncfMnYfMncfMncfM3cfM3YfMnYfM3YeM3cfMncfMncfMncfMngfMncfM3cfM3cgMXcgM3ceMnYgMnYgMncfMncfM3cfM3cfMncgMnYgM3gfMncgM3ceMnYgM3YgM3gfM3cfMngfMncfM3cfMngfM3cgM3cfM3cgM3cgM3cgM3ggMncgMncgM3cfMncfM3cfM3cfMncgMncfMnYfM3YgMnYgM3cgM3cgM3gfMngfMnYfMncfM3cfM3gfM3cgM3cgM3cfMnYgMncgM3ggMnYgMncgM3cfM3cfM3cfMncgM3eK4g62AAAA03RSTlMAAQICAwQFBQYICQoKDAwNDxUVFhYZGRocHR4gICAjJSYmJygoKiorKywtLi4vMDM0NTY2Oj9BSUlKS05RUlVWWFxdXl9fYGBhYWJjY2Nob3Bxc3R1d3d4eHl5e3t8fH1+fn+AgICCg4SPj5SVlpaZmp6jo6SnrKytsbKztLe5vb7AwcHCxMXJysvLzM3P0dPU1dbX19jY2dnZ2tra29zd3+Dg4eHi4uLj5OXl5ubm5+fo6Onq6uvs7e7u7+/v8PHx8/T09PX29vf4+Pn6+vr7/P3+68rVUAAAAnlJREFUSMe11vtfS2EYAPD3zImkkCS5m0tCLinUyNxv5Z5yV+53Qu6Xcr8nRFJDMrbIbGxHjBitZOec5y+yvc/ZPlnZ3vl8PD89O8/z3dn7ns/7nBHijoj0Al2TDAGipaZQG06UCEsuCtjsjZLUMOyfWAds4dTyHpDM2g/wUcO5f38Rcz9I5bGEpMvsABqzCSkIoR/EYp7olLu9u3r2fPn3IECujiFNSMvyUvqqpx21BRGGBIJLMOV08ezYmJOuwMCYRDC5Pow+E26tlRFc6I5PPesJI7imRpBrYQSmnM50DSd+MgLXreWjovtoDr8HRgDiq4unz9xukJkBY/iAaDfT+CrBLyvNLA6AbzcO7dp3/LGrHWBYOZzG7s9QNZlmE/Y0n5s6oFePnr1HLi4V24Cn03Fbt3yC0oE067bqWP9OeDFi/Knm4CBySrz3DBPV6CuyP5iBpc31cAcB6cj5AOmw1OIPZipAgLuDSNuIvim3Dza1AlFpB46s6KfcZ/+PP8EzBeQLcE8BkUvcPa6DykoWCX8FZQi4IW89hYoMLKSZ/cAsvJ4nwP3BuJcLaaFhGRZS3viB2QqweUFULp7ifFzEuNd+YA6CjTZ4iKDraqxs5YOBCjYwF8GGfwCP2MA8H6hkAs/nI1hnhUp1KMA9l6r+E1jgAzomoM9iBi2hgURSQ5O69UNp7PwALybRbOwOBHtH0I8ZeOT0caQQx4zwkoZdApeJZkY7gi9YMNPBIV1WEW0oc8y5nZDwEvZ+udZz/lKdzMCRSf8JaOsltu93rMGt5DUPGsWgb2vJWZvpHTpcbHZxtcEYMPSXtsW3HlR8TEJSoEiMUymdvwHpqwNoMQVTPwAAAABJRU5ErkJggg=="></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="team-member__bio bio" id="team-id-<?php echo $post->ID; ?>">
                                                <div class="bio__close"><button>Close</button></div>
                                                <div class="bio__content">
                                                    <h4 class="bio__name"><?php echo get_the_title($post->ID); ?></h4>
                                                    <p class="bio__position"><?php the_field("position", $post->ID); ?></p>
                                                    <div class="bio__bio">
                                                        <?php the_field("bio", $post->ID); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><?php 
                                    endforeach;
                                    wp_reset_postdata();  ?>
                                </div>
                            </div>

                        </div>
                    </div><!-- end .team-member --> 
                    <hr style="margin-top: 0;"><?php
                endif; ?>
            
                <!-- Consultants --> <?php
                if( $consultants ): ?>
                    <div class="team-member">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <h3 class="team-member__role-heading">Consultants</h3>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="row"><?php
                                    foreach($consultants as $post):  ?>
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="team-member__container">
                                                        <h4 class="team-member__name"><?php echo get_the_title($post->ID); ?></h4>
                                                        <p class="team-member__position"><?php the_field("position", $post->ID); ?></p>
                                                        <p class="team-member__email"><a href="mailto:<?php the_field("email", $post->ID); ?>"></a><?php the_field("email", $post->ID); ?></p>
                                                        <div class="team-member__links">
                                                            <div class="team-member__link">
                                                                <button id="team-modal-button" data-modal="team-id-<?php echo $post->ID; ?>">Bio</button>
                                                            </div>
                                                            <div class="team-member__link">
                                                                <a href="#">e-card</a>
                                                            </div>
                                                            <div class="team-member__link team-member__link--icon">
                                                                <a href="<?php the_field("linkedin", $post->ID); ?>"><img class="team-member__icon" src="data:image/png;base64,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"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="team-member__bio bio" id="team-id-<?php echo $post->ID; ?>">
                                                <div class="bio__close"><button>Close</button></div>
                                                <div class="bio__content">
                                                    <h4 class="bio__name"><?php echo get_the_title($post->ID); ?></h4>
                                                    <p class="bio__position"><?php the_field("position", $post->ID); ?></p>
                                                    <div class="bio__bio">
                                                        <?php the_field("bio", $post->ID); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div><?php 
                                    endforeach;
                                    wp_reset_postdata();  ?>
                                </div>
                            </div>

                        </div>
                    </div><!-- end .team-member --> 
                    <hr style="margin-top: 0;"><?php
                endif; ?>


                <!-- Associates --> <?php
                if( $associates ): ?>
                    <div class="team-member">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <h3 class="team-member__role-heading">Associates</h3>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="row"><?php
                                    foreach($associates as $post):  ?>
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="team-member__container">
                                                        <h4 class="team-member__name"><?php echo get_the_title($post->ID); ?></h4>
                                                        <p class="team-member__position"><?php the_field("position", $post->ID); ?></p>
                                                        <p class="team-member__email"><a href="mailto:<?php the_field("email", $post->ID); ?>"></a><?php the_field("email", $post->ID); ?></p>
                                                        <div class="team-member__links">
                                                            <div class="team-member__link">
                                                                <button id="team-modal-button" data-modal="team-id-<?php echo $post->ID; ?>">Bio</button>
                                                            </div>
                                                            <div class="team-member__link">
                                                                <a href="#">e-card</a>
                                                            </div>
                                                            <div class="team-member__link team-member__link--icon">
                                                                <a href="<?php the_field("linkedin", $post->ID); ?>"><img class="team-member__icon" src="data:image/png;base64,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"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="team-member__bio bio" id="team-id-<?php echo $post->ID; ?>">
                                                <div class="bio__close"><button>Close</button></div>
                                                <div class="bio__content">
                                                    <h4 class="bio__name"><?php echo get_the_title($post->ID); ?></h4>
                                                    <p class="bio__position"><?php the_field("position", $post->ID); ?></p>
                                                    <div class="bio__bio">
                                                        <?php the_field("bio", $post->ID); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div><?php 
                                    endforeach;
                                    wp_reset_postdata();  ?>
                                </div>
                            </div>

                        </div>
                    </div><!-- end .team-member --> 
                    <hr style="margin-top: 0;"><?php
                endif; ?>
                
                
                <!-- Analysts --> <?php
                if( $analysts ): ?>
                    <div class="team-member">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <h3 class="team-member__role-heading">Analysts</h3>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="row"><?php
                                    foreach($analysts as $post):  ?>
                                        <div class="col-6 col-md-6">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="team-member__container">
                                                        <h4 class="team-member__name"><?php echo get_the_title($post->ID); ?></h4>
                                                        <p class="team-member__position"><?php the_field("position", $post->ID); ?></p>
                                                        <p class="team-member__email"><a href="mailto:<?php the_field("email", $post->ID); ?>"></a><?php the_field("email", $post->ID); ?></p>
                                                        <div class="team-member__links">
                                                            <div class="team-member__link">
                                                                <button id="team-modal-button" data-modal="team-id-<?php echo $post->ID; ?>">Bio</button>
                                                            </div>
                                                            <div class="team-member__link">
                                                                <a href="#">e-card</a>
                                                            </div>
                                                            <div class="team-member__link team-member__link--icon">
                                                                <a href="<?php the_field("linkedin", $post->ID); ?>"><img class="team-member__icon" src="data:image/png;base64,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"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="team-member__bio bio" id="team-id-<?php echo $post->ID; ?>">
                                                <div class="bio__close"><button>Close</button></div>
                                                <div class="bio__content">
                                                    <h4 class="bio__name"><?php echo get_the_title($post->ID); ?></h4>
                                                    <p class="bio__position"><?php the_field("position", $post->ID); ?></p>
                                                    <div class="bio__bio">
                                                        <?php the_field("bio", $post->ID); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div><?php 
                                    endforeach;
                                    wp_reset_postdata();  ?>
                                </div>
                            </div>

                        </div>
                    </div><!-- end .team-member --> 
                    <hr style="margin-top: 0;"><?php
                endif; ?>

                <div id="careers" style="height: 0; padding-bottom: 50px;"></div>

            </div> <!-- End .container -->

            <div class="container careers">
                <h2 class="careers__title">Careers</h2><?php
                while( have_rows('careers') ) : the_row(); ?>
                <div class="row careers__opportunity">
                    <div class="col-4">
                        <h3 class="careers__heading"><?php echo get_sub_field("heading"); ?></h3>
                    </div>
                    <div class="col-8">
                        <div class="careers__content">
                            <?php echo get_sub_field("content"); ?>
                        </div>
                    </div>
                </div><?php
                endwhile; ?>
            </div><!-- END .container -->

        </div><!-- End .intro__content -->

    </div> <!-- END .intro -->
<?php

get_footer();
?>