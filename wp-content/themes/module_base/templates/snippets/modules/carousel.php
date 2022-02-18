<!-- start section -->
<section class="carousel bg-light-gray wow animate__fadeIn" style="background-color:<?= $preference_backgroundcolor ?>;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-6 col-md-9 p-0 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="position-relative">
                    <div class="swiper-container slider-one-slide black-move" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl":  ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start slider item -->
                                <?php
                                  if( have_rows('content_blocks') ): 
                                      // loop through rows (parent flexible content)
                                    while( have_rows('content_blocks') ): the_row();
                                      if( get_row_layout() == 'carousel' ): 
                                        // check for rows (sub repeater)
                                      if( have_rows('bloccarousel') ): ?>
                                        <?php while( have_rows('bloccarousel') ): the_row(); ?>
                                    <div class="swiper-slide padding-15px-all">
                                        <div class="h-100 bg-white box-shadow position-relative">
                                            <img src="<?php the_sub_field('image_defilante'); ?>" alt="<?php the_sub_field('altimagecarousel'); ?>" style="width:100%;">
                                            <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
            
                                                <div class="feature-box-content  lg-padding-35px-left xs-padding-15px-left">
                                                    <span class="texte-moyen alt-font  d-block  margin-5px-bottom"><?php the_sub_field('soustitre_carousel'); ?></span>
                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                <?php break; ?>
                             <?php endif; endif; ?>
                             <?php endwhile;  ?>
                            <?php endif; ?>
                            <!-- end slider item -->
                        </div>
                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-08 dark"><i class="feather icon-feather-arrow-right text-extra-large"></i></div>
                    <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-08 dark"><i class="feather icon-feather-arrow-left text-extra-large"></i></div>
                    <!-- end slider pagination -->
                </div>
            </div>
            <div class="col-12 col-lg-6 wow animate__fadeInRight padding-left30" data-wow-delay="0.2s">
                <h4 class="alt-font cd-headline slide font-weight-600 text-extra-dark-gray letter-spacing-minus-1px line-height-40px margin-40px-bottom cd-headline sm-w-100 sm-line-height-30px xs-w-100 xs-margin-20px-bottom">
                    <span class="p-0 d-block moyentitre vert"><?= $soustitredroit_carousel ?></span>
                </h4>                            
                <p class="w-90 md-w-100 margin-30px-bottom"><?= $Bloc_textedroit_carousel ?></p>

            </div>
        </div>
    </div>
</section>