
        <footer class="footer-dark bg-slate-blue">
            <div class="footer-top padding-six-tb lg-padding-eight-tb md-padding-50px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 order-sm-1 order-lg-0 last-paragraph-no-margin md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">About company</span>
                            <p>Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore enim ad minim nostrud.</p>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-2 offset-sm-1 col-sm-5 order-sm-2 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Company</span>
                            <ul>
                                <li><a href="about-us.html">About company</a></li>
                                <li><a href="our-services.html">Company services</a></li>
                                <li><a href="our-team.html">Job opportunities</a></li>
                                <li><a href="contact-us-classic.html">Contact us</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-2 col-sm-5 offset-sm-1 offset-lg-0 order-sm-4 order-lg-0 xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Customer</span>
                            <ul>                           
                                <li><a href="faq.html">Client support</a></li>
                                <li><a href="latest-news.html">Latest news</a></li>
                                <li><a href="our-story.html">Company story</a></li>
                                <li><a href="pricing-packages.html">Pricing packages</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->                    
                        <!-- start footer column -->
                        <div class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-sm-6 order-sm-3 order-lg-0">                       
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Subscribe to newsletter</span>
                            <p>Enter your email address for receiving valuable newsletters.</p>
                            <form action="email-templates/subscribe-newsletter.php" method="post">
                                <div class="newsletter-style-03 position-relative">
                                    <input class="small-input border-color-medium-gray rounded m-0 required" name="email" placeholder="Enter your email address" type="email">
                                    <input type="hidden" name="redirect" value="">
                                    <button class="btn no-border btn-gradient-sky-blue-pink rounded-end submit" type="submit"><i class="feather icon-feather-mail icon-extra-small m-0"></i></button>
                                    <div class="form-results rounded position-absolute d-none"></div>
                                </div>
                            </form>
                        </div>
                        <!-- end footer column -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom padding-35px-tb border-top border-width-1px border-color-white-transparent">
                <div class="container"> 
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3 text-center text-md-start sm-margin-20px-bottom">
                            <a href="index.html" class="footer-logo"><img src="images/logo-white.png" data-at2x="images/logo-white@2x.png" alt=""></a>
                        </div>
                        <div class="col-12 col-md-6 text-center last-paragraph-no-margin sm-margin-20px-bottom">
                            <p>&copy; 2021 Litho is Proudly Powered by <a href="https://www.themezaa.com/" target="_blank" class="text-decoration-line-bottom text-white text-white-hover">ThemeZaa</a></p>
                        </div>
                        <div class="col-12 col-md-3 text-center text-md-end">
                            <div class="social-icon-style-12">
                                <ul class="extra-small-icon light">
                                    <li><a class="facebook" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<?php wp_footer(); ?>

        <script type="text/javascript">
var revapi263,
        tpj;
(function () {
    if (tpj === undefined) {
        tpj = jQuery;
        if ("off" == "on")
            tpj.noConflict();
    }
    if (!/loaded|interactive|complete/.test(document.readyState))
        document.addEventListener("DOMContentLoaded", onLoad);
    else
        onLoad();
    function onLoad() {
        if (tpj("#rev_slider_26_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_26_1");
        } else {
            var revOffset = tpj(window).width() <= 991 ? '73px' : '';
            revapi263 = tpj("#rev_slider_26_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 4500,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        touchOnDesktop: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        enable: true,
                        style: 'ares',
                        tmp: '',
                        rtl: false,
                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 767,
                        hide_over: 9999,
                        hide_delay: 0,
                        hide_delay_mobile: 0,

                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 60,
                            v_offset: 0
                        },

                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 60,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        style: 'zeus',
                        direction: 'horizontal',
                        rtl: false,

                        container: 'slider',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 30,
                        space: 7,

                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_under: 0,
                        hide_over: 767,
                        hide_delay: 200,
                        hide_delay_mobile: 1200
                    },
                },
                responsiveLevels: [1240, 1025, 778, 480],
                visibilityLevels: [1920, 1500, 1025, 768],
                gridwidth: [1200, 991, 778, 480],
                gridheight: [1025, 1366, 1025, 868],
                lazyType: "none",
                shadow: 0,
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "on",
                fullScreenAutoWidth: "on",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: revOffset,
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLimit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
        ; /* END OF revapi call */
    }
    ; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
        </script>
</body>
</html>