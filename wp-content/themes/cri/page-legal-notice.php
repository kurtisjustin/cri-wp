<?php get_header(); ?><?php
    while ( have_posts() ) : the_post();  ?>
        <div class="spacer-large"></div>
        <div class="container"><?php
            the_content(); ?>
        </div>
        <div class="spacer-large"></div><?php
    endwhile; ?>
<?php

get_footer();
?>