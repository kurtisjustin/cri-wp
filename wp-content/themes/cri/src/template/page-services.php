<?php get_header(); ?><?php
    while ( have_posts() ) : the_post();  ?>

        <?php include "header-covered-partial.php"; ?>

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
                                <div class="col-6">
                                    <h3 class="services__title"><?php echo get_sub_field("title"); ?></h3>
                                    <h3 class="services__heading"><?php echo get_sub_field("heading"); ?></h3>
                                </div>
                                <div class="col-6">
                                    <div class="services__content">
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

        </div> <!-- END .intro --><?php
    endwhile; ?>
<?php

get_footer();
?>