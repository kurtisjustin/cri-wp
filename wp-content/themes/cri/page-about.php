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
                            <div class="col-3">
                                <h3 class="team-member__role-heading">Directors</h3>
                            </div>
                            <div class="col-9">
                                <div class="row"><?php
                                    foreach($directors as $post):  ?>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5">
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
                                                                <a href="<?php the_field("linkedin", $post->ID); ?>"><img class="team-member__icon" src="<?php bloginfo('template_url'); ?>/images/linkedin-icon.png"></a>
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
                    </div><!-- end .team-member --> <?php
                endif; ?>
            
                <!-- Consultants --> <?php
                if( $consultants ): ?>
                    <div class="team-member">
                        <div class="row">
                            <div class="col-3">
                                <h3 class="team-member__role-heading">Consultants</h3>
                            </div>
                            <div class="col-9">
                                <div class="row"><?php
                                    foreach($consultants as $post):  ?>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5">
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
                                                                <a href="<?php the_field("linkedin", $post->ID); ?>"><img class="team-member__icon" src="<?php bloginfo('template_url'); ?>/images/linkedin-icon.png"></a>
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
                    </div><!-- end .team-member --> <?php
                endif; ?>

                <hr>

                <!-- Associates --> <?php
                if( $associates ): ?>
                    <div class="team-member">
                        <div class="row">
                            <div class="col-3">
                                <h3 class="team-member__role-heading">Associates</h3>
                            </div>
                            <div class="col-9">
                                <div class="row"><?php
                                    foreach($associates as $post):  ?>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5">
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
                                                                <a href="<?php the_field("linkedin", $post->ID); ?>"><img class="team-member__icon" src="<?php bloginfo('template_url'); ?>/images/linkedin-icon.png"></a>
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
                    </div><!-- end .team-member --> <?php
                endif; ?>
                
                <hr>
                
                <!-- Analysts --> <?php
                if( $analysts ): ?>
                    <div class="team-member">
                        <div class="row">
                            <div class="col-3">
                                <h3 class="team-member__role-heading">Analysts</h3>
                            </div>
                            <div class="col-9">
                                <div class="row"><?php
                                    foreach($analysts as $post):  ?>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5">
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
                                                                <a href="<?php the_field("linkedin", $post->ID); ?>"><img class="team-member__icon" src="<?php bloginfo('template_url'); ?>/images/linkedin-icon.png"></a>
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
                    </div><!-- end .team-member --> <?php
                endif; ?>

                <hr>

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