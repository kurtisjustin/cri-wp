<?php get_header(); ?>

<h1>About Page</h1>

<div class="container"> <?php

    $posts = get_posts(array(
        'numberposts' => -1,
        'post_type' => 'team'
    ));

    if( $posts ): 
        foreach($posts as $post):  ?>

            <div>
            
                <h4><?php echo get_the_title($post->ID); ?></h4>
                <span>role: <?php the_field('role', $post->ID); ?></span>
            </div>

            <br>
            <hr>
            <?php wp_reset_postdata(); 
        
        endforeach;
        ?>


    <?php endif; ?>
</div>

<?php

get_footer();
?>