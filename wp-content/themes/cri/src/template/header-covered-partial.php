<div class="header header--covered">
    <div class="header__background" style="background-image: url('<?php the_field('background_image'); ?>');"></div>
    
    
    <div class="blue-angled-divider" style="z-index: 1;">
        <img src="<?php bloginfo('template_url'); ?>/images/blue-angle-divider.svg" alt="">
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
    </div>
</div>