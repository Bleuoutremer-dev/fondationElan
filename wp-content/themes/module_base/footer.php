
        <footer class="footer-dark bg-slate-blue">
            <div class="footer-top padding-four-tb lg-padding-eight-tb md-padding-50px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start footer column -->

                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-2  col-sm-5 order-sm-2 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-600 d-block text-white margin-10px-bottom xs-margin-10px-bottom">LA fondation</span>
                        </div>
                        <div class="col-12 col-lg-2  col-sm-5 order-sm-2 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white  xs-margin-10px-bottom">Activités et<br/>événements</span>
                        </div>
 
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-2 col-sm-5   order-sm-4 order-lg-0 xs-margin-25px-bottom">
                            <span class="relative aftercoeur alt-font font-weight-600 d-block text-white  xs-margin-10px-bottom">Faire<br/>un don</span>
                        </div>
                        <div class="col-12 col-lg-2 col-sm-6 order-sm-1 order-lg-0 last-paragraph-no-margin md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white  xs-margin-10px-bottom">Coordonnées</span>
                            <p>2975, chemin&nbsp;Saint-Louis, local B-110<br/> Québec Qc G1W 1P9</p>
                        </div>
                        <!-- end footer column -->                    
                        <!-- start footer column -->
                        <div class="col-12  col-lg-4 col-sm-6 order-sm-3 order-lg-0">                       
                            <span style="opacity:0"class="alt-font font-weight-600 d-block text-white xs-margin-10px-bottom">Coordonnées </span>
                            <p>Téléphone : 418 529-9141, poste 4366<br/>Télécopieur : 418 266-5751<br/>fondationelan.irdpq.ciussscn@ssss.gouv.qc.ca</p>
                            <p>Numéro de bienfaisance: 12345678901234567890</p>
  
                        </div>
                        <!-- end footer column -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom padding-35px-tb border-top border-width-1px border-color-white-transparent">
                <div class="container"> 
                    <div class="row align-items-center">
                        <div class="col-12 col-md-2 text-center text-md-start sm-margin-20px-bottom">
                            <a href="/" class="footer-logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group87.svg" data-at2x="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group87.svg" alt=""></a>
                        </div>
                        <div class="col-12 col-md-2  text-center text-md-start sm-margin-20px-bottom">
                            <a href="/" class="footer-logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group149.svg" data-at2x="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group149.svg" alt=""></a>
                        </div>
                        <div class="col-12 col-md-4  text-center text-md-start sm-margin-20px-bottom">

                        </div>

                        <div class="col-12 col-md-4 text-center ">
                            <span class="alt-font font-weight-600 text-left d-block text-white margin-10px-bottom xs-margin-10px-bottom">Infolettre</span>
                            <div class="newsletter-style-03 position-relative w-100 mx-auto mx-md-0 mx-lg-auto xs-w-95">

                                <form action="email-templates/subscribe-newsletter.php" method="post">
                                    <input type="email" name="email" placeholder="Entrer votre adresse" class="small-inputborder-color-dark-white-transparent m-0 bg-transparent required">
                                    <input type="hidden" name="redirect" value="">
                                    <button class="btn submit dark" type="submit"><i class="feather icon-feather-mail text-white icon-extra-small m-0"></i></button>
                                    <div class="form-results position-absolute d-none"></div>
                                </form>
                            </div>
                            <div class="social-icon-style-04 text-left margin-25px-top">
                                <ul class="medium-icon light">
                                    <li><h5 class="text-white font-weight-600">Suivez-nous
                                        <a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></h5></li>
                                    
                     
                                    
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