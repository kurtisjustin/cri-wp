<?php

get_header();

$post_object = get_field('team');
echo get_field("team");

if( $post_object ): ?>

    <div>
    	<h4><?php echo get_the_title($post_object->ID); ?></h4>
        <span>Post Object Custom Field: <?php the_field('role', $post_object->ID); ?></span>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

<?php endif; ?>

<?php

get_footer();