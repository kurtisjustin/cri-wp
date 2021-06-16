<?php get_header(); ?><?php
    while ( have_posts() ) : the_post();  ?>


        <div class="intro">
            <div class="intro__content">
                <div class="spacer"></div>
                <div class="container"><?php
                    while( have_rows('contact_options') ) : the_row(); ?>
                        <div class="row careers__opportunity">
                            <div class="col-3">
                                <h3 class="careers__heading"><?php echo get_sub_field("title"); ?></h3>
                            </div>
                            <div class="col-8">
                                <div class="careers__content">
                                    <?php echo get_sub_field("details"); ?>
                                </div>
                            </div>
                        </div><?php
                    endwhile; ?>
                    <hr>
                </div>
            </div><!-- End .intro__content -->

        </div> <!-- END .intro --><?php
    endwhile; ?>
<?php

get_footer();
?>