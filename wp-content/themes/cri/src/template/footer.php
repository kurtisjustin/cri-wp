<?php 
    if (is_front_page()) :
?>
<!-- <div class="blue-angled-divider">
    <img src="<?php // bloginfo('template_url'); ?>/images/blue-angled-divider.svg" alt="">
</div> -->

<?php
    endif;
?>
<footer class="footer"><?php
    if(is_page("18")) : ?>
        <div class="footer__top footer__top--white-bg footer__top--contact">
            <div class="container">
                <div class="row">
                    <div class="col-8 contact-footer">
                        <?php echo do_shortcode("[mc4wp_form id='58']") ?>
                    </div>
                </div>
            </div>
        </div><?php 
    else: ?>

    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h4 class="footer__heading">Get in touch</h4>
                    <ul class="footer__list">
                        <li class="footer__list-item">Email: <span>info@cri.ltd</span></li>
                        <li class="footer__list-item">Tel: <span>+4420 7916 9286</span></li>
                        <li class="footer__list-item"><img class="footer__icon" src="<?php bloginfo('template_url'); ?>/images/linkedin-icon-white.png" /></li>
                    </ul>
                </div>

                <div class="col-12 col-md-6">
                    <?php echo do_shortcode("[mc4wp_form id='58']") ?>
                </div>
            </div>
        </div>
    </div><?php
        endif;
    ?>

    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5 class="footer__title">Site map</h5>
                    <ul class="footer__sitemap">
                        <li><a class="footer__link" href="/about">About</a></li>
                        <li><a class="footer__link" href="/services/overview">Services</a></li>
                        <li><a class="footer__link" href="/contact">Contact</a></li>
                        <li><a class="footer__link" href="/legal-notice">Legal Notice</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <h5 class="footer__title">Office</h5>
                    <ul class="footer__address">
                        <li>167 Turners Hill</li>
                        <li>Cheshunt</li>
                        <li>Herts</li>
                        <li>EN8 9BH</li>
                    </ul>
                </div>
            </div>
        </div><!-- End .container -->
        <div class="container">
            <div class="footer__copywrite">
                <div class="footer__reg-info">
                    <p>UK Information Commissioners Office Registration Number: ZA427383 <br>
                    CR Investigations Ltd Company Number 08003102</p>
                </div>
                <div class="footer__copy">
                    &copy; 2021 CR Investigations
                </div>
            </div>
        </div>
    </div><!-- End .footer__bottom -->
</footer>

<?php wp_footer(); ?>
</body>
</html> 