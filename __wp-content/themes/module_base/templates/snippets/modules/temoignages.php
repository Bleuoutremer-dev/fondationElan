<section class="temoignage moyen-section wow animate__fadeIn bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10 col-lg-12 col-md-10">
                    <div class="row">
                <div class="col-xl-5 col-lg-5  col-12" style="">
                </div>
                <div class="col-xl-7 col-lg-7 col-12" style="">
                <h2 class="grostextevert alt-font text-left" style="color:#50D9C2;">Témoignages<span style="position: relative; bottom: -5px; margin-left: 20px;color:#919191; font-size:24px; letter-spacing:3px; font-weight:600px;"><sup><strong>EN BREF</strong></sup></span></h2>
                </div>
                    </div>
                <div class="swiper-simple-arrow-style-1">
                    <div class="swiper-container black-move" data-slider-options='{ "loop": true, "slidesPerView": 1, "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav-02", "prevEl": ".swiper-button-previous-nav-02" }, "autoplay": { "delay": 15000, "onlyInViewport": true, "disableOnInteraction": true }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
  
                            <!-- start testimonial item -->
                        <?php
                          if( have_rows('content_blocks') ): 
                              // loop through rows (parent flexible content)
                            while( have_rows('content_blocks') ): the_row();
                              if( get_row_layout() == 'temoignages' ): 
                                // check for rows (sub repeater)
                              if( have_rows('bloctemoignage') ): ?>
                                <?php while( have_rows('bloctemoignage') ): the_row(); ?>
                                    <div class="swiper-slide text-center">
                                        <div class="feature-box feature-box-left-icon-middle">
            
                                            <div class="row padding50">
                                                <div class="col-xl-5 col-lg-5 col-12" style="position:relative; z-index:-5;">
                                                    <div class="feature-box-icon temoignagebefore">
                                                        <img class="rounded-circle " src="<?php the_sub_field('photo_carousel'); ?>" alt="<?php the_sub_field('altcarousel'); ?>"style="border: solid 20px #ffffff;" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-7 col-12">
                                                    <div class="feature-box-content">
                                          
                                                        <p class="w-85 lg-w-100">
                                                            <strong><?php the_sub_field('carouselbold'); ?></strong></p>
                                                        <p class="w-85 lg-w-100">
                                                            <?php the_sub_field('Bloc_texte_carousel'); ?></p>
                                                        <div class="text-extra-dark-gray alt-font text-uppercase font-weight-600"><span><?php the_sub_field('carouselnom'); ?></span></div>
                                                        <a href="<?php the_sub_field('carouseltitre'); ?>" class="alt-font">Lire la suite...</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <?php endwhile; ?>
                                <?php endif; endif; ?>
                              <?php endwhile;  ?>
                              <?php wp_reset_query(); ?>
                            <?php endif; ?>
       
                    </div>
    
                </div>
                <div class="swiper-button-next-nav-02 swiper-button-next slider-navigation-style-02 white rounded-circle"><i class="feather icon-feather-arrow-right"></i></div>
                <div class="swiper-button-previous-nav-02 swiper-button-prev slider-navigation-style-02 white rounded-circle"><i class="feather icon-feather-arrow-left"></i></div>

            </div>
        </div>
    </div>
</section>