 <?php
 /**
  * The template for displaying Search Results pages.
  *
  * @package Shape
  * @since Shape 1.0
  */

 get_header(); ?>
 <main role="main" itemscope class="pagenews">
 	<section class="bannerother bannerfull ">
 		<div class="container">
 			<div class="row title">
 				<div class="col-md-8 col-xs-12">
 					<h2>Recherche</h2>
 					<h3>Résultats pour "<?php the_search_query(); ?>"</h3>
 				</div>
 			</div>
 		</div>
 	</section>

   <section class="results">
     <div class="container">
 			<div class="row">
             <?php
             $s=get_search_query();
             $args = array(
                             's' =>$s
                         );
                 // The Query
             $the_query = new WP_Query( $args );
             if ( $the_query->have_posts() ) {
                     
                     while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                              ?>
                                 <div class="col-12">
                                     <a href="<?php the_permalink(); ?>">
                                     	<h3><?php the_title(); ?></h3>
                                     	<?php 
                                     	$content = get_the_content();
                                     	$trimmed_content = wp_trim_words( $content, 30 ); ?>
                                     	<p><?php echo $trimmed_content; ?></p>
                                     </a>
                                 </div>
                              <?php
                     }
                 }else{
             ?>
                     <div class="alert alert-info">
                       <p>Aucun résultat ne correspond à vos critères de recherche.</p>
                     </div>
             <?php } ?>
 			</div>
     </div>
   </section>

   </div>

 </main>

 <?php get_sidebar(); ?>
 <?php get_footer(); ?>