<?php

the_post();
get_header();
?>

       <?php
           $args = array( 'post_type' => 'nos_nouvelles ','category_name' => 'primeur',  'posts_per_page' => 1 );
           $loop = new WP_Query( $args );
       ?>
       <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        	<section class="banniere-section bullerafter pb-0 overflow-visible position-relative bg-light-gray padding-eleven-lr lg-padding-four-lr">

       	    <div class="container">
       	        <div class="row">
       	            <div class="col-12 col-lg-6 order-2 z-index-1 padding-10-rem-left padding-60px-bottom lg-padding-3-rem-left md-padding-15px-left">
       	                <div class="d-flex flex-column justify-content-center h-100">
       	                	<div class="alt-font text-medium font-weight-500 margin-30px-bottom d-flex">
       	                	    <span class="w-60px h-3px bg-tussock opacity-7 align-self-center margin-20px-right flex-shrink-0"style="background-color:#00AAE7" >   
       	                	    </span>
       	                	    <div class="petittitre media-body flex-grow-1" style="color:#00AAE7">
       	                	        <span class="text-tussock text-uppercase" style="color:#00AAE7; font-weight:600;">Actualités
       	                	        </span>
       	                	    </div>
       	                	</div>
       	                	<?php 
       	                	$title = get_the_title();
       	                	$trimmed_title = wp_trim_words( $title, 15 );
       	                	?>
       	                    <h3 class="alt-font font-weight-500 letter-spacing-minus-1px text-extra-dark-gray "><?php echo $trimmed_title; ?></h3>
                            <?php 
                                $content = get_the_content();
                                $trimmed_content = wp_trim_words( $content, 30 ); 
                            ?>
                               <?php echo $trimmed_content; ?>
                            
                               <div class="col-12 col-lg-6 px-0 order-1 align-self-end md-margin-60px-bottom">
                               <a href="<?php echo the_permalink(); ?>" class="btn btn-extra-large btn-transparent-black btn-rounded d-table d-lg-inline-block lg-margin-15px-bottom lg-margin-60px-top md-margin-auto-lr" style="border-color:#707070; color:#707070; background-color:transparent; margin-top:50px;"><span><strong>En savoir plus</strong></span></a>
       	             </div>
       	                </div>
       	            </div>
       	            <div class="col-12 col-lg-6 px-0 order-1 align-self-end md-margin-60px-bottom">
       	            
       	                <div class="overlap-image border-radius-8px md-no-margin-bottom"><?php echo get_the_post_thumbnail(); ?></div>
       	                </div>
       	   
       	  
       	        </div>
       	    </div>
       	</section>
       	<!-- end banner section -->
       	<!-- start section -->
   <?php endwhile; ?>
    <!-- start section --> 
<section class=" actualites actualiteafter bg-light-gray padding-nine-lr pt-100 xl-no-padding-lr">
    <div class="container">
       <h2 class="tresgrostexte relative alt-font text-left" style="color:#50D9C2;">Actualités<span style="position: relative; bottom: -5px; margin-left: 20px;color:#919191; font-size:24px; letter-spacing:3px; font-weight:600px;"><sup><strong>EN BREF</strong></sup></span></h2>
        <div class="row">
            <div class="col-12 blog-content no-padding">
                <ul class="blog-clean blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <?php
                        $args = array( 'post_type' => 'nos_nouvelles ','category_name' => 'en-avant',  'posts_per_page' => 3 );
                        $loop = new WP_Query( $args );
                    ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
  

                    <li class="grid-item fashion wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="blog-post border-radius-6px bg-white box-shadow box-shadow-large-hover">
                           <a href="<?php echo the_permalink(); ?>" class="date alt-font text-uppercase text-extra-small letter-spacing-1px d-block padding-30px-lr padding-15px-tb xl-padding-25px-lr text-black" style="font-size:12px;"></a>
                            <div class="blog-post-image bg-gradient-black-transparent ">

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
                                   $trimmed_content = wp_trim_words( $content, 20 ); 
                               ?>
                                   <a href="<?php echo the_permalink(); ?>" class="alt-font text-extra-dark-gray text-light-gray text-extra-dark-gray-hover  d-block margin-25px-top" style="font-size:14px; line-height:30px">
                                   <?php echo $trimmed_content; ?>
                                   </a>
                                 
                            </div>
                        </div>
                    </li>
                    <?php endwhile;  ?>
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array( 'post_type' => 'nos_nouvelles ','category_name' => 'non-classe',  'posts_per_page' => 15, 'paged' => $paged );
                        $loop = new WP_Query( $args );
                    ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    

                    <li class="grid-item fashion wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="blog-post border-radius-6px bg-white box-shadow box-shadow-large-hover">
                           <a href="<?php echo the_permalink(); ?>" class="date alt-font text-uppercase text-extra-small letter-spacing-1px d-block padding-30px-lr padding-15px-tb xl-padding-25px-lr text-black" style="font-size:12px;"></a>
                            <div class="blog-post-image bg-gradient-black-transparent ">

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
                                   $trimmed_content = wp_trim_words( $content, 20 ); 
                               ?>
                                   <a href="<?php echo the_permalink(); ?>" class="alt-font text-extra-dark-gray text-light-gray text-extra-dark-gray-hover  d-block margin-25px-top" style="font-size:14px; line-height:30px">
                                   <?php echo $trimmed_content; ?>
                                   </a>
                                 
                            </div>
                        </div>
                    </li>

                    <?php endwhile; ?>
        

        <?php the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( '<i class="icon-left-open-big"></i> Précédent', 'textdomain' ),
            'next_text' => __( 'Suivant <i class="icon-right-open-big"></i>', 'textdomain' ),
            'screen_reader_text' => ('&nbsp;'),
        ) ); ?>
          
                </ul>


				

            </div>
            	
        </div>
    </div>
</section>
<?php get_sidebar(); ?>
<div class="mt-l"></div>
<?php get_footer(); ?>


