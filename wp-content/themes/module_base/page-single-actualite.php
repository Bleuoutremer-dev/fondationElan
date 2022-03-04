<?php
/*


Template Name: Actualité
* Template Post Type: nos_nouvelles
* 
* Template Description...
**/


the_post();
get_header();
?>

	<main role="main" itemscope class="pagenews singlepagenews">

		<!-- start banner section -->
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
		                    <h3 class="alt-font font-weight-500 letter-spacing-minus-1px text-extra-dark-gray "><?php the_title(); ?></h3>
		                    <span class="alt-font text-black d-block padding-60px-top"><span class="time"><?php the_time('j'); ?> </span><?php the_time('F Y'); ?></span>
		                </div>
		            </div>
		            <div class="col-12 col-lg-6 px-0 order-1 align-self-end md-margin-60px-bottom">
		                <img class="overlap-image border-radius-8px md-no-margin-bottom" src="<?php echo get_the_post_thumbnail(); ?>" alt="" />
		   
		  
		        </div>
		    </div>
		</section>
		<!-- end banner section -->
		<!-- start section -->
	
		<section class="padding-70px-top sm-padding-50px-top position-relative sectionfulllargeur">
		    <div class="container">
		        <div class="row justify-content-end">
		            <div class="col-12 col-xl-5 col-lg-6 last-paragraph-no-margin padding-3-half-rem-left md-padding-15px-left">
		            	<?php the_content(); ?>
		            </div>
		        </div>
		    </div>
		</section>
	
		<!-- end section -->
		<!-- start section -->
		<section class="pt-0  lg-no-margin-top">
		    <div class="container">
		    	
		        <div class="row justify-content-center">
		        	<?php if(get_field('contenu_pleine_largeur')): ?>
		        	    <div class="col-12 lg-5 offset-lg-1"> 
		        	        <div class="row">
		        	            <div class="col-12 last-paragraph-no-margin wow animate__fadeIn">
		        	                <h6 class="alt-font text-extra-dark-gray font-weight-500 margin-20px-bottom"><?php echo the_field('titre_pleine_largeur'); ?></h6>
		        	                <p><?php echo the_field('contenu_pleine_largeur'); ?></p>
		        	            </div>
		        	        </div>
		        	    </div>
		        	<?php endif; ?>
		        		<?php if(get_field('image_entete_boite')): ?>
		        	    <div class="row margin-75px-top">
		        	        <div class=" citation col-12 col-md-6 bg-light-gray background-no-repeat background-position-right-bottom padding-90px-lr padding-8-rem-tb lg-padding-5-half-rem-lr wow animate__fadeIn" data-wow-delay="0.2s">
		        	        	<?php if(get_field('texte_citation')): ?>

		        	            <h5 class="alt-font text-extra-dark-gray font-weight-500"><i class="fas fa-angle-double-left text-green icon-extra-large margin-10px-bottom" style="display:block"></i><?php echo the_field('texte_citation'); ?> <i class="fas fa-angle-double-right text-green icon-extra-medium " style="display:inline-block; padding-left:10px;"></i></h5>
		        	               <?php endif; ?>
		        	            <div class="alt-font"><?php echo the_field('titre_boite'); ?></div>
		        	        </div>
		        	        <div class="col-12 col-md-6 cover-background sm-h-450px xs-h-300px wow animate__fadeIn" data-wow-delay="0.4s" style="background-image: url('<?php echo the_field('image_entete_boite'); ?>');">     
		        	        </div>
		        	    </div>
		        	   <?php endif; ?>
		        <?php if(get_field('contenu_droite')): ?>
		        	<div class="col-12 col-lg-6 no-padding margin-10-rem-top sm-margin-50px-top last-paragraph-no-margin wow animate__fadeIn">
		        		<div class="blogueelement"> <img  src=" <?php echo the_field('image_colonne_gauche'); ?>"></div>

		        	</div>
		            <div class="col-12 col-lg-5 offset-lg-1 no-padding"> 
		                <div class="row">
		                    <div class="col-12 margin-9-rem-top sm-margin-50px-top last-paragraph-no-margin wow animate__fadeIn no-padding">
		                       <?php echo the_field('contenu_droite'); ?>
		                    </div>
		                </div>
		            </div>
		        <?php endif; ?>

		        </div>
		    </div>

		</section>
		<?php if(get_field('contenu_carousel')): ?>

		<!-- start section -->
		<section class="carousel bg-light-gray wow animate__fadeIn">
		    <div class="container">
		        <div class="row  justify-content-center">
		            <div class="col-12 col-lg-6 col-md-9 p-0 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
		                <div class="position-relative">
		                    <div class="swiper-container slider-one-slide black-move" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl":  ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
		                        <div class="swiper-wrapper">
		                            <!-- start slider item -->
		                             <?php

		                            if( have_rows('carousel') ):
		                               // loop through rows (parent flexible content)
		                             while( have_rows('carousel') ) : the_row(); ?>
		                                    <div class="swiper-slide padding-15px-all">
		                                        <div class="h-100 carousel-border bg-white box-shadow position-relative">
		                                            <img class="img_caroussel" src="<?php  the_sub_field('image'); ?>" alt="" style="width:100%;">
		                                            <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
		            
		                                                <div class="feature-box-content  lg-padding-35px-left xs-padding-15px-left">
		                                                    <span class="texte-moyen alt-font  d-block  margin-5px-bottom"><?php  the_sub_field('texte'); ?></span>
		                                
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		<?php

		         endwhile;

		     // No value.
		     else :
		         // Do something...
		     endif; ?>
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
		            	<?php if(get_field('titre_carousel')): ?>
		                <h4 class="alt-font cd-headline slide font-weight-600 text-extra-dark-gray letter-spacing-minus-1px line-height-40px margin-40px-bottom cd-headline sm-w-100 sm-line-height-30px xs-w-100 xs-margin-20px-bottom">
		                    <span class="p-0 d-block moyentitre vert"><?php echo the_field('titre_carousel'); ?></span>
		                </h4>   
		                 <?php endif; ?>                         
		                <?php echo the_field('contenu_carousel'); ?>

		            </div>
		        </div>
		    </div>
		</section>


		<div class="bg-light-gray row justify-content-center ">
		    <div class="col-12 col-xl-8 col-lg-10 col-md-11  margin-10-rem-bottom text-center wow animate__zoomIn" data-wow-delay="0.4s">
		           <a href="<?php echo site_url(); ?>/actualites" class="btn-rond" style="background-color: #50d9c2 !important; color:#ffffff!important;"><span><strong>Faire un don</strong></span></a>
		       </div>
		    </div>
		    <?php endif; ?>
	

		<!-- end page title -->
		<!-- start section --> 
		<section class="big-section actualiteafter actualites bg-light-gray padding-nine-lr pt-100 xl-no-padding-lr">
		    <div class="container">
		       <h2 class="tresgrostexte relative alt-font text-left" style="color:#50D9C2;">Actualités<span style="position: relative; bottom: -5px; margin-left: 20px;color:#919191; font-size:24px; letter-spacing:3px; font-weight:600px;"><sup><strong>EN BREF</strong></sup></span></h2>
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
		    <div class="text-center">
		    <a class="text-enter btn btn-extra-large btn-transparent-black btn-rounded d-table d-lg-inline-block md-margin-auto-lr" style="border-color: #707070; color: #707070; background-color: transparent; margin-top: 50px;" href="" target="_blank" rel="noopener"><strong>Voir toutes les actualités</strong></a>
		    </div>
		</section>

		<!-- end section -->

		<?php get_sidebar(); ?>
	</main>
<?php get_footer(); ?>
