
         <!-- end page title -->
         <!-- start section --> 
     <section class="big-section actualites bg-light-gray padding-nine-lr pt-100 xl-no-padding-lr">
         <div class="container">
            <h2 class="tresgrostexte alt-font text-left" style="color:#50D9C2;">Actualités<span style="position: relative; bottom: -5px; margin-left: 20px;color:#919191; font-size:24px; letter-spacing:3px; font-weight:600px;"><sup><strong>EN BREF</strong></sup></span></h2>
             <div class="row">
                 <div class="col-12 blog-content no-padding">
                     <ul class="blog-clean blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                         <li class="grid-sizer"></li>
                         <?php
                             $args = array( 'post_type' => 'nos_nouvelles ', 'posts_per_page' => 3 );
                             $loop = new WP_Query( $args );
                         ?>
                         <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                       <!--      <$?php $cat = get_field('categorie_actualites') ; ?> -->

                         <li class="grid-item fashion wow animate__fadeIn" data-wow-delay="0.6s">
                             <div class="blog-post border-radius-6px bg-white box-shadow box-shadow-large-hover">
                                <a href="<?php echo the_permalink(); ?>" class="date alt-font text-uppercase text-extra-small letter-spacing-1px d-block padding-30px-lr padding-15px-tb xl-padding-25px-lr text-black" style="font-size:12px;"><span class="time"><?php the_time('j'); ?> </span><?php the_time('F Y'); ?></span></a>
                                 <div class="blog-post-image bg-gradient-fast-blue-purple">

                                    <a href="<?php echo the_permalink(); ?>">

                                        <div class="blog_Carre"><?php echo get_the_post_thumbnail(); ?></div>
                                        <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                            <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                 </div>
                                 <div class="post-details padding-30px-all xl-padding-25px-lr">
                                    <?php 
                                    $title = get_the_title();
                                    $trimmed_title = wp_trim_words( $title, 8 );
                                    ?>
                                        <a href="<?php echo the_permalink(); ?>" class="blog-category margin-15px-bottom text-medium font-weight-600 letter-spacing-1px text-uppercase text-black"style="font-size:16px; line-height:24px">
                                        <?php echo $trimmed_title; ?>
                                        </a>
                                    <?php 
                                        $content = get_the_content();
                                        $trimmed_content = wp_trim_words( $content, 28 ); 
                                    ?>
                                        <a href="<?php echo the_permalink(); ?>" class="alt-font text-extra-dark-gray text-light-gray text-extra-dark-gray-hover  d-block margin-25px-top" style="font-size:14px; line-height:30px">
                                        <?php echo $trimmed_content; ?>
                                        </a>
                                      
                                 </div>
                             </div>
                         </li>
                         <?php endwhile; wp_reset_query(); ?>
                     </ul>
                 </div>
             </div>
         </div>
     </section>