<section class="big-section paddingmobile bg-light-gray position-relative">
    <div class="container">
          <h3 class="alt-font cd-headline slide font-weight-600 text-extra-dark-gray letter-spacing-minus-1px  cd-headline sm-w-100 sm-line-height-30px xs-w-75 ">
           <span class="p-0 d-block moyentitre black"><?= $titreprincipalcarousel ?></span>
   </h3>
        <div class="row ">
            <div class="col-12 col-xl-6 col-lg-6 col-md-8 position-relative md-margin-8-rem-bottom xs-margin-10-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">

                <div class="w-95 margin-35px-bottom lg-w-100"><?= $Bloc_carousel_droit ?></div>

                <h4 class="alt-font cd-headline slide font-weight-600 text-extra-dark-gray letter-spacing-minus-1px line-height-40px margin-40px-bottom cd-headline sm-w-100 sm-line-height-30px xs-w-100 xs-margin-20px-bottom">
                    <span class="w-90 p-0 d-block titre_paragraphe vert"><?= $texteevidence?></span>
                </h4> 

                <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-03 white rounded-circle"><i class="feather icon-feather-arrow-right"></i></div>
                <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-03 white rounded-circle"><i class="feather icon-feather-arrow-left"></i></div>
            </div>
            <div class="col-12 col-lg-6 wow animate__fadeInRight" data-wow-delay="0.4s">
                 <div class="outside-box-right">
                <div class="testimonials-carousel-style-01 swiper-simple-arrow-style-1">
                    <div class="swiper-container white-move" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 40, "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3  }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start interactive banner item -->
                        <?php
                          if( have_rows('content_blocks') ): 
                              // loop through rows (parent flexible content)
                            while( have_rows('content_blocks') ): the_row();
                              if( get_row_layout() == 'carousel_deux' ): 
                                // check for rows (sub repeater)
                              if( have_rows('bloccarouselvdeux') ): ?>
                                <?php while( have_rows('bloccarouselvdeux') ): the_row(); ?>
                            <div class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden">
                                <div class="interactive-banners-box" style=" padding:0px 0px;">
                                    <div class="interactive-banners-box-image style_carousel" style="background-image:url('<?php the_sub_field('image_defilantedeux'); ?>');  ">
                                
                                
                                    </div>
 
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                            <?php endwhile; ?>
                            <?php break; ?>
                         <?php endif; endif; ?>
                         <?php endwhile;  ?>
                        <?php endif; ?>
                        </div>
                            <!-- end interactive banner item -->
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>