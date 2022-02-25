<?php
/**
 * The header for our theme.
 *
 * @package theme-blank
 * @since theme-blank 0.1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes() ?> style="margin-top:0 !important;" >
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="<?php if( get_field('meta_description_page') ): echo get_field('meta_description_page'); else : bloginfo('description'); endif; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="designer" content="Bleuoutremer">
  <meta property="og:url" content="<?php echo site_url()?>/<?php the_title();?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php echo bloginfo('description'); ?>" />
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri()?>/assets/<?php echo get_stylesheet_directory_uri() ?>/assets/images/Logo.svg" />
  <!-- Librairie jQuery peux aussi être appelée sous config/scripts.php -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <?php wp_head() ?>

</head>


<body data-mobile-nav-style="classic" class=" <?php body_class() ?>"  id="<?php echo sanitize_title_with_dashes(get_the_title(get_the_ID())); ?>">

         <!-- start header -->
         <header>
             <!-- start navigation -->
             <nav class="navbar top-space navbar-expand-lg bg-white fixed-top responsive-sticky ">
                 <div class="container-fluid nav-header-container">
    <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group239.svg" data-at2x="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group239.svg" class="default-logo" class="default-logo" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/petitlogo.svg" data-at2x="<?php echo get_stylesheet_directory_uri() ?>/assets/images/petitlogo.svg" class="alt-logo" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/petitlogo.svg" data-at2x="<?php echo get_stylesheet_directory_uri() ?>/assets/images/petitlogo.svg" class="mobile-logo" alt="">
        </a>
    </div>
                     <div class="col-auto menu-order px-lg-0">
                         <button class=" navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                             <span class="navbar-toggler-line"></span>
                             <span class="navbar-toggler-line"></span>
                             <span class="navbar-toggler-line"></span>
                             <span class="navbar-toggler-line"></span>
                         </button>
                         <div class="collapse navbar-collapse" id="navbarNav">
                             <ul class="navbar-nav alt-font">
                                 <li class="nav-item dropdown megamenu">
                                     <a href="<?php echo site_url(); ?>" class="nav-link">Actualités</a>
                                     
                                 </li>
                                 <li class="nav-item dropdown megamenu">
                                     <a href="<?php echo site_url(); ?>/simpliquer" class="nav-link">S'impliquer</a>
                                     
                                 </li>
                                 <li class="nav-item dropdown megamenu">
                                     <a href="#" class="nav-link elementdeco relative" style="color:#31B9A2">Faire un don</a>
                                     
                                 </li>


                                 
                             </ul>
                         </div>
                     </div>
                     <div class="col-auto text-end hidden-xs pe-0 font-size-0">
                         <div class="header-search-icon search-form-wrapper">
                             <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                             <!-- start search input -->
                             <div class="form-wrapper">
                                 <button title="Close" type="button" class="search-close alt-font">×</button>
                                 <form id="search-form" role="search" method="get" class="search-form text-start" action="search-result.html">
                                     <div class="search-form-box">
                                         <span class="search-label alt-font text-small text-uppercase text-medium-gray">Que recherchez-vous?</span>
                                         <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Entrer votre recherche..." name="s" value="" type="text" autocomplete="off">
                                         <button type="submit" class="search-button">
                                             <i class="feather icon-feather-search" aria-hidden="true"></i>
                                         </button>
                                     </div>
                                 </form>
                             </div>
                             <!-- end search input -->
                         </div>
                         <div class=" header-push-button d-none d-lg-inline-block hidden-xs">
                             <a href="javascript:void(0);" class="push-button aftermenu">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </a>
                         </div>
                     </div>
                 </div>
             </nav>
             <!-- end navigation -->
          <div class="hamburger-menu hamburger-menu-half bg-white lg-w-60 md-w-60 sm-w-100">
                <a href="javascript:void(0);" class="close-menu text-extra-dark-gray"><i class="fas fa-times"></i></a>
                <div class="d-flex flex-column align-items-center justify-content-center h-100 padding-6-rem-all md-padding-2-rem-lr xs-no-padding-lr">
                    <a href="index.html" class="d-none d-lg-inline-block"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group84.svg" alt="" class="md-w-160px" /></a>
                    <div class="menu-list-wrapper w-75 lg-w-80 md-w-75 sm-w-60 xs-w-100 position-relative padding-15px-lr margin-3-rem-tb" data-scroll-options='{ "theme": "dark" }'>
                        <!-- start menu -->
                        <ul class="menu-list dark alt-font w-70 xl-w-100 margin-auto-lr">
                            <!-- start menu item -->
                            <li class="menu-list-item">
                                <a href="<?php echo site_url(); ?>">Accueil</a>
                            </li>
                            <li class="menu-list-item">
                                <a href="javascript:void(0);">À propos</a><span class="menu-toggle"></span>
                                <ul class="sub-menu-item">
                                    <li class="menu-list-item">
        
                                         <ul class="sub-menu-item">
                                             <li><a href="<?php echo site_url(); ?>/fondation">La fondation</a></li>
                                             <li><a href="<?php echo site_url(); ?>/equipe">C.A et équipe</a></li>
                                             <li><a href="<?php echo site_url(); ?>/temoignages">Témoignages</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-list-item">
                                <a href="">Faire un don</a>
                            </li>
                            <li class="menu-list-item">
                                <a href="<?php echo site_url(); ?>/nos-realisations">Nos réalisations</a>
                            </li>
                            <li class="menu-list-item">
                                <a href="">Actualités</a>
                            </li>
                            <li class="menu-list-item">
                                <a href="javascript:void(0);">S'impliquer</a><span class="menu-toggle"></span>
                                <ul class="sub-menu-item">
                                    <li class="menu-list-item">
                            
                                         <ul class="sub-menu-item">
                                             <li><a href="<?php echo site_url(); ?>/donner">Donner</a></li>
                                             <li><a href="<?php echo site_url(); ?>/devenir-benevole">Devenir bénévole</a></li>
                                             <li><a href="<?php echo site_url(); ?>/organiser-une-collecte-de-fonds">Organiser une collecte de fonds</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-list-item">
                                <a href="<?php echo site_url(); ?>/salle-de-presse">Salle de presse</a>
                            </li>
                            <li class="menu-list-item">
                                <a href="">Infolettre</a>
                            </li>
                            <li class="menu-list-item">
                                <a href="<?php echo site_url(); ?>/pour-nous-joindre">Nous joindre</a>
                            </li>
    
                            <!-- end menu item -->
                          
                            <!-- end menu item -->
                        </ul>
                        <!-- end menu -->
                    </div>
                    <div class="text-center elements-social social-icon-style-07 d-none d-md-inline-block">
                        <ul class="small-icon dark">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            
                            <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end hamburger popup -->
         </header>
         <!-- end header -->
         <!-- start section -->
         <!-- start revolution slider -->
       
<?php
  /**
   * underscore_before_header hook
   *
   * @hooked theme_add_svg_spritesheet - 10
   */
    do_action('underscore_before_header');
?>


  <?php do_action('underscore_before_content') ?>

