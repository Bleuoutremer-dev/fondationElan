         <section class="half-section bg-light-gray parallax"> 
         </section>
         <!-- end page title -->
         <!-- start section --> 
         <section class="actualites bg-light-gray padding-nine-lr pt-0 xl-no-padding-lr">
             <div class="container">
                <h2 class="tresgrostexte alt-font text-left" style="color:#50D9C2;">Actualités<span style="position: relative; bottom: -5px; margin-left: 20px;color:#919191; font-size:24px; letter-spacing:3px; font-weight:600px;"><sup><strong>EN BREF</strong></sup></span></h2>
                 <div class="row">
                     <div class="col-12 blog-content no-padding">
                         <ul class="blog-modern blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large">
                             <li class="grid-sizer"></li>
                             <?php
                                 $args = array( 'post_type' => 'nouvelles ', 'posts_per_page' => 3 );
                                 $loop = new WP_Query( $args );
                             ?>
                             <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                           <!--      <$?php $cat = get_field('categorie_actualites') ; ?> -->

                             <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">
                                 <div class="blog-post">
                                     <div class="blog-post-image bg-gradient-fast-blue-purple">
                                         <a href="<?php echo the_permalink(); ?>">
                                            <?php echo get_the_post_thumbnail(); ?>
                                        </a>
                                     </div>
                                     <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <?php 
                                        $title = get_the_title();
                                        $trimmed_title = wp_trim_words( $title, 6 );
                                        ?>
                                            <a href="<?php echo the_permalink(); ?>" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">
                                            <?php echo $trimmed_title; ?>
                                            </a>
                                        <?php 
                                            $content = get_the_content();
                                            $trimmed_content = wp_trim_words( $content, 15 ); 
                                        ?>
                                            <a href="blog-post-layout-03.html" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom">
                                            <?php echo $trimmed_content; ?>
                                            </a>
                                            <a href="<?php echo the_permalink(); ?>" class="date alt-font text-uppercase text-extra-small letter-spacing-1px d-block">22 October 2019</a>
                                     </div>
                                 </div>
                             </li>
                             <?php endwhile; wp_reset_query(); ?>
                         </ul>
                     </div>
                 </div>
             </div>
         </section>