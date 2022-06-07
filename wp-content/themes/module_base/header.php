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
<style>
.tp-bgimg.defaultimg{
      -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);
}
</style>

<body data-mobile-nav-style="classic" <?php body_class(); ?>  id="<?php echo sanitize_title_with_dashes(get_the_title(get_the_ID())); ?>">

         <!-- start header -->
         <header>
             <!-- start navigation -->
             <nav class="navbar top-space navbar-expand-lg bg-white fixed-top responsive-sticky ">
                 <div class="container-fluid nav-header-container">
    <div class="col-sm-6 col-lg-2 col-xs-8 me-auto ">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">
            <div >
                <svg class="svg-logo" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 433.2 114.3" style="enable-background:new 0 0 433.2 114.3;" xml:space="preserve">
                <style type="text/css">
                    .st0{fill:#39741F;}
                    .st1{fill:#007FC3;}
                </style>
                <g id="Group_239" transform="translate(1409.469 749.489)">
                    <g id="Group_238" transform="translate(-723)">
                        <g id="Group_237" transform="translate(-561.626 -811)">
                            <g>
                                <g id="Group_84">
                                    <path id="Path_466" class="st0" d="M-124.8,168.8c-0.1,0-0.1-0.1,0.1-0.3c0.6-0.5,2.3-1.3,2.9-1.7c1.2-0.7,2.3-1.4,3.4-2.2
                                        c2.4-1.6,4.8-3.2,7.2-4.8c5.4-3.6,10.6-7.4,15.6-11.4c11.8-9.1,22.3-19.7,31.2-31.6c2.5-3.5,4.9-7,7.1-10.7
                                        c1.1-1.9,2.2-3.8,3.2-5.7c0.9-1.9,1.9-3.7,3.2-5.4c0.4-0.5,2,1,2.3,5.1c0.1,0.9,0.1,1.8-0.1,2.7c-0.4,1.7-0.9,3.3-1.7,4.9
                                        c-2,3.9-4.4,7.6-7.3,10.9c-7.2,8.6-15.9,16.1-24.8,23.2c-8.7,7-17.8,13.4-27.2,19.4C-114.2,163.9-119.3,167.3-124.8,168.8"/>
                                    <path id="Path_467" class="st1" d="M-21.8,116.5c1.1-1.4,0-5.8-0.4-6.8c-1.3-5.3-4.2-10.1-8.3-13.8c-2.3-2.2-5.2-4.5-8.3-5.4
                                        c-4.9-1.4-7.9,0.8-8.2,1.8c-0.3,1.1-0.4,3,2.6,5.2c1.9,1.4,7.1,3.9,8.7,5.6c3.9,4.3,4.5,6.9,8.6,11.8
                                        C-25.6,116.5-23.7,118.8-21.8,116.5"/>
                                    <path id="Path_468" class="st1" d="M-20,62.2c1.4,2.4-1.4,5.6-2.7,7.3c-3.7,4.4-8.3,8-12.8,11.6c-1.9,1.6-4,3-6.2,4.2
                                        c-1.3,0.6-2.7,1-4,1.3c-1.5-1.1,1.2-4.1,2.2-5.2c2.4-2.6,4.5-5.3,6.4-8.2C-31.8,64.9-21.5,59.5-20,62.2"/>
                                    <path id="Path_469" class="st1" d="M-72.2,98.9c7.8,0.7,18.1-1,20.3-9.8c0.9-3.8-8.6-1.1-10.3-0.9c-5,0.8-10,1.9-15,2.7
                                        c-3,0.5-6.5,0.6-9.6,1.8c-0.5,0.2-0.5,0.4-0.6,0.6C-87.4,98.5-76.4,98.5-72.2,98.9"/>
                                    <path id="Path_470" class="st1" d="M-57,64.8c4.2-1.7,7.1-0.1,7.3,4.5c0,2.1-0.2,4.2-0.6,6.2c-0.2,3-0.2,6,0.1,9
                                        c-1.6-0.3-3.4-2.6-4.5-3.7c-1.6-1.8-3-3.8-4.1-5.9C-60.7,71.2-61.4,66.5-57,64.8"/>
                                    <path id="Path_471" class="st0" d="M-60.2,151.9c4-4.2,8.2-6.3,12.4-6.3c1.3-0.1,2.7,0.3,3.8,1.1c1,0.8,1.5,2,1.4,3.2
                                        c0,2.9-1.7,5.4-5.1,7.5c-3.3,2-7,3.3-10.8,3.8l-1.7,0.2c-0.2,0.7-0.4,1.3-0.5,2c-0.1,0.6-0.2,1.2-0.2,1.9
                                        c-0.1,1.6,0.6,3.1,1.7,4.2c1.2,1,2.6,1.5,4.1,1.5c1.7-0.1,3.4-0.6,4.8-1.5c1.5-1,2.9-2,4.2-3.1l0.8,0.7
                                        c-1.1,1.4-2.5,2.5-3.9,3.5c-2.6,2-5.8,3.2-9.1,3.2c-2.1,0-4.1-0.8-5.7-2.3c-1.7-1.7-2.6-4.1-2.4-6.5
                                        C-66.2,160.5-64.2,156.1-60.2,151.9 M-50.3,156c2.4-2.2,3.6-4.3,3.6-6.4c0-0.7-0.2-1.3-0.5-1.8c-0.4-0.5-1-0.7-1.6-0.7
                                        c-1.5,0.1-2.8,0.7-3.9,1.7c-1.3,1.1-2.4,2.4-3.4,3.8c-1,1.5-1.8,3.1-2.6,4.8c-0.3,0.8-0.7,1.7-1.1,2.8
                                        C-56.3,159.7-53,158.3-50.3,156 M-38.8,135.1c-0.2,0.3-0.5,0.5-0.8,0.7l-10.6,6.6h-2.2l10.1-9.9c0.2-0.2,0.5-0.4,0.7-0.5
                                        c0.3-0.1,0.6-0.2,0.9-0.2c0.6,0,1.1,0.2,1.5,0.6c0.4,0.4,0.7,1,0.7,1.6C-38.5,134.5-38.6,134.8-38.8,135.1"/>
                                    <path id="Path_472" class="st0" d="M-28.9,136.2c0.1-0.3,0.1-0.5,0.2-0.8c0-0.3,0-0.5,0-0.6c0.1-0.6-0.3-1.1-0.8-1.3
                                        c-1.1-0.2-2.2-0.3-3.3-0.2v-1l3.2-0.4c1.2-0.2,2-0.3,2.3-0.3c1.1-0.2,2.5-0.5,4.2-0.9c0.1,0,0.3,0.1,0.4,0.3l-10.1,36.5
                                        c-0.2,0.9-0.3,1.4-0.4,1.6c0,0.2-0.1,0.4-0.1,0.5c0,0.3,0.1,0.7,0.2,1c0.2,0.3,0.5,0.4,0.8,0.4c0.7,0,1.7-0.6,2.9-1.9
                                        c1.1-1.2,2.1-2.4,3-3.8l0.8,0.6c-1.2,1.9-2.6,3.7-4.1,5.4c-1.3,1.5-3.1,2.4-5.1,2.5c-0.7,0-1.4-0.2-1.9-0.6
                                        c-0.9-0.6-1.4-1.7-1.3-2.8c0-0.7,0.1-1.4,0.2-2c0.1-0.5,0.3-1.1,0.5-1.8L-28.9,136.2z"/>
                                    <path id="Path_473" class="st0" d="M-0.5,146.7c0.5,0.5,0.9,1.1,1.1,1.8l0.2,0.4l0.7-2.3c0.1-0.2,0.1-0.4,0.2-0.5
                                        s0.3-0.2,0.4-0.2l3.5-0.4c0.2,0,0.3,0,0.3,0.1s0,0.3,0,0.4c-0.1,0.3-0.2,0.5-0.2,0.6c0,0.2-0.1,0.4-0.2,0.7l-3,10.9
                                        c-0.6,2.4-1.2,4.4-1.7,6.1c-0.5,1.8-0.9,3.5-1.1,5.3c0,0.2,0.1,0.5,0.2,0.6c0.2,0.1,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2
                                        c0.3-0.2,0.6-0.3,0.8-0.5l0.5-0.4c0.2-0.1,0.4-0.3,0.6-0.5s0.5-0.4,0.8-0.7l2-1.9l0.7,0.6c-1.5,2-3.3,3.9-5.2,5.5
                                        c-1.1,0.9-2.4,1.4-3.7,1.4c-0.7,0-1.3-0.3-1.8-0.8c-0.4-0.6-0.7-1.3-0.6-2c0-1.1,0.2-2.1,0.4-3.1c0.3-1.4,0.5-2.5,0.8-3.4
                                        c-0.4,0.6-1,1.5-1.8,2.7c-0.9,1.2-2,2.4-3.2,3.4c-1.2,1.2-2.7,2.1-4.2,2.8c-1,0.4-2,0.5-3,0.6c-1.7,0-3.3-0.8-4.5-2
                                        c-1.4-1.6-2.1-3.6-2-5.7c0-4.3,1.9-8.7,5.8-13.3c4-4.8,8.1-7.2,12.3-7.2C-2.9,145.4-1.5,145.8-0.5,146.7 M-1.5,147.9
                                        c-0.6-0.7-1.5-1-2.5-1c-3.3,0-6.4,2.5-9.3,7.6c-2.5,4.5-3.8,8.3-3.8,11.5c-0.1,1.3,0.3,2.5,1,3.5c0.7,0.7,1.6,1.1,2.6,1.1
                                        c3,0,6-2.5,8.8-7.4c2.7-4.5,4.1-8.5,4.1-12.2C-0.4,149.9-0.7,148.8-1.5,147.9"/>
                                    <path id="Path_474" class="st0" d="M8.9,173.1l5.2-18.8c0.4-1.6,0.7-2.6,0.8-2.9c0.1-0.4,0.1-0.7,0.1-1.1c0-0.5-0.2-1-0.5-1.4
                                        c-0.6-0.4-1.3-0.6-2-0.5c-0.2,0-0.5,0-0.7,0s-0.5,0.1-0.8,0.1v-1c1.3-0.2,2.2-0.4,2.8-0.5s1.2-0.2,1.8-0.4l5.4-1.2
                                        c0.1,0.1,0.2,0.2,0.2,0.3l-4,13.1c1.9-3,3.9-5.8,6.2-8.5c2.9-3.3,5.5-4.9,7.9-4.9c0.8,0,1.6,0.2,2.3,0.5c1.3,0.7,2,2.2,1.9,3.6
                                        c0,0.5-0.1,1-0.2,1.5c-0.1,0.5-0.2,1.1-0.4,1.7l-4,14.6c-0.1,0.3-0.2,0.7-0.3,1.1c-0.1,0.3-0.1,0.6-0.2,0.9
                                        c0,0.3,0.1,0.6,0.2,0.8s0.4,0.4,0.7,0.4c0.7-0.1,1.3-0.4,1.7-0.9c1.2-1.2,2.3-2.6,3.2-4l0.9,0.8c-1.2,1.7-2.5,3.3-3.9,4.7
                                        c-1.6,1.6-3.2,2.4-4.7,2.4c-0.7,0-1.4-0.3-1.9-0.7c-0.7-0.6-1.1-1.5-0.9-2.5c0-0.4,0-0.7,0.1-1.1c0-0.3,0.1-0.7,0.2-1l3.9-14.8
                                        c0.2-0.7,0.3-1.3,0.4-2c0.1-0.4,0.1-0.7,0.1-1.1c0-0.4-0.1-0.9-0.4-1.3c-0.3-0.4-0.8-0.6-1.2-0.5c-1.5,0-3.5,1.4-5.8,4.1
                                        c-1.5,1.9-2.9,3.8-4.2,5.9c-1,1.6-1.9,3.4-2.5,5.1c-0.6,1.7-1.6,4.7-2.9,9.1L8.9,173.1z"/>
                                    
                                    <path id="Path_475" class="st0 st022" d="M60.7,125.1h1.5v10.3H66v1.3h-5.3V125.1z"/>
                                    <path id="Path_476" class="st0 st022" d="M72,125.1l3.8,11.6h-1.5l-0.9-3H69l-0.9,3h-1.5l3.9-11.6H72z M72.9,132.4l-1.8-5.8l0,0
                                        l-1.8,5.8H72.9z"/>
                                    <path id="Path_477" class="st0 st022" d="M81.5,125.1h5.2v1.3H83v3.7h3.5v1.3H83v5.4h-1.5V125.1z"/>
                                    <path id="Path_478" class="st0 st022" d="M92.7,125c2.6,0,4.2,2.2,4.2,5.8c0,4-1.6,6-4.4,6c-2.6,0-4.2-2.2-4.2-5.8
                                        C88.3,127,89.9,125,92.7,125 M92.5,135.6c1.5,0,2.8-1.3,2.8-4.8c0-2.3-0.7-4.6-2.7-4.6c-1.5,0-2.8,1.3-2.8,4.8
                                        C89.8,133.3,90.6,135.6,92.5,135.6"/>
                                    <path id="Path_479" class="st0 st022" d="M99.1,125.1h1.8l4.4,9.6l0,0v-9.6h1.4v11.6h-1.8l-4.4-9.5l0,0v9.5h-1.4V125.1z"/>
                                    <path id="Path_480" class="st0 st022" d="M109.3,125.1h2.5c1.1-0.1,2.2,0.2,3.1,0.8c1.5,1.1,2.3,2.9,2.1,4.8c0,3.4-1.6,6-6,6h-1.8
                                        v-11.6H109.3z M110.8,135.4h0.9c2.6,0,3.9-1.7,3.9-4.7c0-2.4-1-4.4-3.9-4.4h-0.9V135.4z"/>
                                    <path id="Path_481" class="st0 st022" d="M123.3,125.1l3.8,11.6h-1.5l-0.9-3h-4.4l-0.9,3h-1.5l3.9-11.6H123.3z M124.2,132.4l-1.8-5.8
                                        l0,0l-1.8,5.8H124.2z"/>
                                    <path id="Path_482" class="st0 st022" d="M129.6,126.3h-2.7V125h6.8v1.3H131v10.4h-1.5v-10.4H129.6z"/>
                                    <rect id="Rectangle_46" x="135.4" y="125.1" class="st0 st022" width="1.5" height="11.6"/>
                                    <path id="Path_483" class="st0 st022" d="M143.5,125c2.6,0,4.2,2.2,4.2,5.8c0,4-1.6,6-4.4,6c-2.6,0-4.2-2.2-4.2-5.8
                                        C139.1,127,140.8,125,143.5,125 M143.4,135.6c1.5,0,2.8-1.3,2.8-4.8c0-2.3-0.7-4.6-2.7-4.6c-1.5,0-2.8,1.3-2.8,4.8
                                        C140.7,133.3,141.4,135.6,143.4,135.6"/>
                                    <path id="Path_484" class="st0 st022" d="M150,125.1h1.8l4.4,9.6l0,0v-9.6h1.4v11.6h-1.8l-4.4-9.5l0,0v9.5H150V125.1z"/>
                                    <path id="Path_485" class="st0 st022" d="M60.5,143.6H63c1.1-0.1,2.2,0.2,3.1,0.8c1.5,1.1,2.3,2.9,2.1,4.8c0,3.4-1.6,6-6,6h-1.8
                                        v-11.6H60.5z M62,153.9h0.9c2.6,0,3.9-1.7,3.9-4.7c0-2.4-1-4.4-3.9-4.4H62V153.9z"/>
                                    <path id="Path_486" class="st0 st022" d="M70.4,143.6h5.4v1.3h-3.9v3.7h3.8v1.3h-3.8v4.1h4.2v1.3h-5.6L70.4,143.6L70.4,143.6z"/>
                                    <path id="Path_487" class="st0 st022" d="M82.5,143.6H84V154h3.8v1.3h-5.3V143.6z"/>
                                    <path id="Path_488" class="st0 st022" d="M87.4,146.6h1.3l1.1-3.9h-1.5L87.4,146.6z"/>
                                    <rect id="Rectangle_47" x="92.1" y="143.6" class="st0 st022" width="1.5" height="11.6"/>
                                    <path id="Path_489" class="st0 st022" d="M96.2,143.6H98l4.4,9.6l0,0v-9.6h1.4v11.6H102l-4.4-9.5l0,0v9.5h-1.4V143.6z"/>
                                    <path id="Path_490" class="st0 st022" d="M111.4,145.2c-0.6-0.4-1.3-0.5-2-0.5c-0.9-0.1-1.7,0.6-1.8,1.6c0,0.1,0,0.1,0,0.2
                                        c0,0.7,0.3,1.2,2,2.2c1.8,1,2.4,2,2.4,3.4c0.1,1.7-1.2,3.2-2.9,3.3c-0.2,0-0.3,0-0.5,0c-0.8,0-1.7-0.2-2.4-0.5v-1.5
                                        c0.7,0.4,1.4,0.7,2.2,0.7c1,0.1,2-0.7,2.1-1.7v-0.1c0-0.9-0.2-1.4-1.8-2.4c-2.1-1.3-2.6-2-2.6-3.5c0-1.9,1.5-2.9,3.2-2.9
                                        c0.7,0,1.4,0.1,2.1,0.4L111.4,145.2z"/>
                                    <path id="Path_491" class="st0 st022" d="M115.8,144.8h-2.7v-1.3h6.8v1.3h-2.7v10.4h-1.5L115.8,144.8L115.8,144.8z"/>
                                    <rect id="Rectangle_48" x="121.7" y="143.6" class="st0 st022" width="1.5" height="11.6"/>
                                    <path id="Path_492" class="st0 st022" d="M127.6,144.8h-2.7v-1.3h6.8v1.3H129v10.4h-1.5L127.6,144.8L127.6,144.8z"/>
                                    <path id="Path_493" class="st0 st022" d="M140.7,150.9c0.1,0.9-0.1,1.8-0.5,2.6c-1.1,1.8-3.3,2.3-5.1,1.3c-0.5-0.3-1-0.7-1.3-1.3
                                        c-0.4-0.8-0.5-1.7-0.5-2.6v-7.3h1.5v7.6c0,1.8,0.8,3,2.2,3s2.2-1.2,2.2-3v-7.6h1.5L140.7,150.9z"/>
                                    <path id="Path_494" class="st0 st022" d="M145.2,144.8h-2.7v-1.3h6.8v1.3h-2.7v10.4h-1.5L145.2,144.8L145.2,144.8z"/>
                                    <path id="Path_495" class="st0 st022" d="M155,143.6h2.5c1.1-0.1,2.2,0.2,3.1,0.8c1.5,1.1,2.3,2.9,2.1,4.8c0,3.4-1.6,6-6,6H155V143.6
                                        z M156.5,153.9h0.9c2.6,0,3.9-1.7,3.9-4.7c0-2.4-1-4.4-3.9-4.4h-0.9V153.9z"/>
                                    <path id="Path_496" class="st0 st022" d="M164.9,143.6h5.4v1.3h-3.9v3.7h3.8v1.3h-3.8v4.1h4.2v1.3H165L164.9,143.6z"/>
                                    <path id="Path_497" class="st0 st022" d="M176.9,143.6h3c0.9-0.1,1.8,0.2,2.4,0.8c0.6,0.6,0.9,1.4,0.9,2.2c0.1,1.4-0.9,2.6-2.3,2.8
                                        l0,0c0.6,0.1,1.1,0.5,1.3,1.1l1.6,4.7h-1.6l-1.3-3.9c-0.2-0.9-1-1.5-1.8-1.3h-0.7v5.3h-1.5L176.9,143.6z M178.4,148.7h1.1
                                        c1.1,0.1,2-0.7,2.2-1.7c0-0.1,0-0.2,0-0.3c0-1.3-0.8-1.9-2.1-1.9h-1.2V148.7z"/>
                                    <path id="Path_498" class="st0 st022" d="M185.7,143.6h5.4v1.3h-3.9v3.7h3.8v1.3h-3.8v4.1h4.2v1.3h-5.6L185.7,143.6z M188.6,140.6
                                        h1.6l-1.7,2.4h-1.1L188.6,140.6z"/>
                                    <path id="Path_499" class="st0 st022" d="M198,143.6l3.8,11.6h-1.5l-0.9-3H195l-0.9,3h-1.5l3.9-11.6H198z M198.9,150.9l-1.8-5.8l0,0
                                        l-1.8,5.8H198.9z"/>
                                    <path id="Path_500" class="st0 st022" d="M203.2,143.6h2.5c1.1-0.1,2.2,0.2,3.1,0.8c1.5,1.1,2.3,2.9,2.1,4.8c0,3.4-1.6,6-6,6h-1.8
                                        L203.2,143.6z M204.6,153.9h0.9c2.6,0,3.9-1.7,3.9-4.7c0-2.4-1-4.4-3.9-4.4h-0.9V153.9z"/>
                                    <path id="Path_501" class="st0 st022" d="M217.1,143.6l3.8,11.6h-1.5l-0.9-3H214l-0.9,3h-1.5l3.9-11.6H217.1z M218,150.9l-1.8-5.8
                                        l0,0l-1.8,5.8H218z"/>
                                    <path id="Path_502" class="st0 st022" d="M222.5,143.6h2.8c0.9-0.1,1.8,0.3,2.5,0.9c0.6,0.6,1,1.5,0.9,2.4c0,2.3-1.3,3.5-3.8,3.5h-1
                                        v4.9h-1.5L222.5,143.6z M223.9,149.1h0.8c1.8,0,2.4-0.8,2.4-2.1c0-1.6-0.9-2.2-2.4-2.2h-0.8V149.1z"/>
                                    <path id="Path_503" class="st0 st022" d="M232.3,144.8h-2.7v-1.3h6.8v1.3h-2.7v10.4h-1.5L232.3,144.8L232.3,144.8z"/>
                                    <path id="Path_504" class="st0 st022" d="M241.8,143.6l3.8,11.6h-1.5l-0.9-3h-4.4l-0.9,3h-1.5l3.9-11.6H241.8z M242.7,150.9l-1.8-5.8
                                        l0,0l-1.8,5.8H242.7z"/>
                                    <path id="Path_505" class="st0 st022" d="M248.1,144.8h-2.7v-1.3h6.8v1.3h-2.7v10.4H248L248.1,144.8L248.1,144.8z"/>
                                    <rect id="Rectangle_49" x="254" y="143.6" class="st0 st022" width="1.5" height="11.6"/>
                                    <path id="Path_506" class="st0 st022" d="M262,143.4c2.6,0,4.2,2.2,4.2,5.8c0,4-1.6,6-4.4,6c-2.6,0-4.2-2.2-4.2-5.8
                                        C257.7,145.5,259.3,143.4,262,143.4 M261.9,154.1c1.5,0,2.8-1.3,2.8-4.8c0-2.3-0.7-4.6-2.7-4.6c-1.5,0-2.8,1.3-2.8,4.8
                                        C259.2,151.8,259.9,154.1,261.9,154.1"/>
                                    <path id="Path_507" class="st0 st022" d="M268.5,143.6h1.8l4.4,9.6l0,0v-9.6h1.4v11.6h-1.8l-4.4-9.5l0,0v9.5h-1.4V143.6z"/>
                                    <path id="Path_508" class="st0 st022" d="M60.7,162.1h5.4v1.3h-3.9v3.7H66v1.3h-3.8v4.1h4.2v1.3h-5.6v-11.7H60.7z"/>
                                    <path id="Path_509" class="st0 st022" d="M68.6,162.1h1.8l4.4,9.6l0,0v-9.6h1.4v11.6h-1.8l-4.4-9.5l0,0v9.5h-1.4V162.1z"/>
                                    <path id="Path_510" class="st0 st022" d="M82.9,162.1h2.5c1.1-0.1,2.2,0.2,3.1,0.8c1.5,1.1,2.3,2.9,2.1,4.8c0,3.4-1.6,6-6,6h-1.8
                                        v-11.6H82.9z M84.4,172.4h0.9c2.6,0,3.9-1.7,3.9-4.7c0-2.4-1-4.4-3.9-4.4h-0.9V172.4z"/>
                                    <path id="Path_511" class="st0 st022" d="M92.8,162.1h5.4v1.3h-3.9v3.7H98v1.3h-3.8v4.1h4.2v1.3h-5.6
                                        C92.8,173.8,92.8,162.1,92.8,162.1z M95.7,159.1h1.6l-1.7,2.4h-1.1L95.7,159.1z"/>
                                    <path id="Path_512" class="st0 st022" d="M100.7,162.1h5.2v1.3h-3.7v3.7h3.5v1.3h-3.5v5.4h-1.5V162.1z"/>
                                    <rect id="Rectangle_50" x="107.9" y="162.1" class="st0 st022" width="1.5" height="11.6"/>
                                    <path id="Path_513" class="st0 st022" d="M119,173.4c-0.7,0.2-1.4,0.3-2.1,0.4c-3.7,0-5.2-2.8-5.2-5.9c0-3.6,2.1-5.9,5.1-5.9
                                        c0.8,0,1.5,0.1,2.2,0.4v1.4c-0.7-0.4-1.4-0.6-2.2-0.6c-1.9,0-3.6,1.5-3.6,4.3c0,3,1.2,5,3.7,5c0.7,0,1.4-0.2,2.1-0.5V173.4z"/>
                                    <rect id="Rectangle_51" x="121.2" y="162.1" class="st0 st022" width="1.5" height="11.6"/>
                                    <path id="Path_514" class="st0 st022" d="M125.4,162.1h5.4v1.3h-3.9v3.7h3.8v1.3h-3.8v4.1h4.2v1.3h-5.6L125.4,162.1z"/>
                                    <path id="Path_515" class="st0 st022" d="M133.3,162.1h1.8l4.4,9.6l0,0v-9.6h1.4v11.6h-1.8l-4.4-9.5l0,0v9.5h-1.4V162.1z"/>
                                    <path id="Path_516" class="st0 st022" d="M150.5,173.4c-0.7,0.2-1.4,0.3-2.1,0.4c-3.7,0-5.2-2.8-5.2-5.9c0-3.6,2.1-5.9,5.1-5.9
                                        c0.8,0,1.5,0.1,2.2,0.4v1.4c-0.7-0.4-1.4-0.6-2.2-0.6c-1.9,0-3.6,1.5-3.6,4.3c0,3,1.2,5,3.7,5c0.7,0,1.4-0.2,2.1-0.5V173.4z"/>
                                    <path id="Path_517" class="st0 st022" d="M152.8,162.1h5.4v1.3h-3.9v3.7h3.8v1.3h-3.8v4.1h4.2v1.3h-5.6L152.8,162.1L152.8,162.1z"/>
                                    <path id="Path_518" class="st0 st022" d="M164.8,162.1h2.8c0.9-0.1,1.8,0.3,2.5,0.9c0.6,0.6,1,1.5,0.9,2.4c0,2.3-1.3,3.5-3.8,3.5h-1
                                        v4.9h-1.5L164.8,162.1z M166.3,167.6h0.8c1.8,0,2.4-0.8,2.4-2.1c0-1.6-0.9-2.2-2.4-2.2h-0.8V167.6z"/>
                                    <path id="Path_519" class="st0 st022" d="M173,162.1h1.5v5h4.1v-5h1.5v11.6h-1.5v-5.4h-4.1v5.4H173V162.1z"/>
                                    <path id="Path_520" class="st0 st022" d="M185,168.8l-3.5-6.7h1.7l2.6,5.1l2.6-5.1h1.6l-3.5,6.7v4.9H185V168.8z"/>
                                    <path id="Path_521" class="st0 st022" d="M195.6,163.7c-0.6-0.4-1.3-0.5-2-0.5c-0.9-0.1-1.7,0.6-1.8,1.6c0,0.1,0,0.1,0,0.2
                                        c0,0.7,0.3,1.2,2,2.2c1.8,1,2.4,2,2.4,3.4c0.1,1.7-1.2,3.2-2.9,3.3c-0.2,0-0.3,0-0.5,0c-0.8,0-1.7-0.2-2.4-0.5v-1.5
                                        c0.7,0.4,1.4,0.7,2.2,0.7c1,0.1,2-0.7,2.1-1.7v-0.1c0-0.9-0.2-1.4-1.8-2.4c-2.1-1.3-2.6-2-2.6-3.5c0-1.9,1.5-2.9,3.2-2.9
                                        c0.7,0,1.4,0.1,2.1,0.4V163.7z"/>
                                    <rect id="Rectangle_52" x="198.4" y="162.1" class="st0 st022" width="1.5" height="11.6"/>
                                    <path id="Path_522" class="st0 st022" d="M208.7,175.8l-1.7-2.1c-0.1,0-0.2,0-0.3,0.1c-0.1,0-0.2,0-0.3,0c-2.6,0-4.2-2.2-4.2-5.8
                                        c0-4,1.6-6,4.4-6c2.6,0,4.2,2.2,4.2,5.8c0,3-0.9,4.8-2.5,5.6l2.2,2.5L208.7,175.8z M206.3,172.6c1.5,0,2.8-1.3,2.8-4.8
                                        c0-2.3-0.7-4.6-2.7-4.6c-1.5,0-2.8,1.3-2.8,4.8C203.6,170.3,204.4,172.6,206.3,172.6"/>
                                    <path id="Path_523" class="st0 st022" d="M220.2,169.4c0.1,0.9-0.1,1.8-0.5,2.6c-1.1,1.8-3.3,2.3-5.1,1.3c-0.5-0.3-1-0.7-1.3-1.3
                                        c-0.4-0.8-0.5-1.7-0.5-2.6v-7.3h1.5v7.6c0,1.8,0.8,3,2.2,3s2.2-1.2,2.2-3v-7.6h1.5L220.2,169.4z"/>
                                    <path id="Path_524" class="st0 st022" d="M223,162.1h5.4v1.3h-3.9v3.7h3.8v1.3h-3.8v4.1h4.2v1.3H223V162.1z"/>
                                    <path id="Path_525" class="st0 st022" d="M234.8,162.1h2.5c1.1-0.1,2.2,0.2,3.1,0.8c1.5,1.1,2.3,2.9,2.1,4.8c0,3.4-1.6,6-6,6h-1.8
                                        L234.8,162.1L234.8,162.1z M236.3,172.4h0.9c2.6,0,3.9-1.7,3.9-4.7c0-2.4-1-4.4-3.9-4.4h-0.9V172.4z"/>
                                    <path id="Path_526" class="st0 st022" d="M244.7,162.1h5.4v1.3h-3.9v3.7h3.8v1.3h-3.8v4.1h4.2v1.3h-5.6L244.7,162.1z"/>
                                    <path id="Path_527" class="st0 st022" d="M262.6,175.8l-1.7-2.1c-0.1,0-0.2,0-0.3,0.1c-0.1,0-0.2,0-0.3,0c-2.6,0-4.2-2.2-4.2-5.8
                                        c0-4,1.6-6,4.4-6c2.6,0,4.2,2.2,4.2,5.8c0,3-0.9,4.8-2.5,5.6l2.2,2.5L262.6,175.8z M260.3,172.6c1.5,0,2.8-1.3,2.8-4.8
                                        c0-2.3-0.7-4.6-2.7-4.6c-1.5,0-2.8,1.3-2.8,4.8C257.6,170.3,258.3,172.6,260.3,172.6"/>
                                    <path id="Path_528" class="st0 st022" d="M274.2,169.4c0.1,0.9-0.1,1.8-0.5,2.6c-1.1,1.8-3.3,2.3-5.1,1.3c-0.5-0.3-1-0.7-1.3-1.3
                                        c-0.4-0.8-0.5-1.7-0.5-2.6v-7.3h1.5v7.6c0,1.8,0.8,3,2.2,3c1.4,0,2.2-1.2,2.2-3v-7.6h1.5L274.2,169.4z"/>
                                    <path id="Path_529" class="st0 st022" d="M276.9,162.1h5.4v1.3h-3.9v3.7h3.8v1.3h-3.8v4.1h4.2v1.3H277v-11.7H276.9z M279.8,159.1h1.6
                                        l-1.7,2.4h-1.1L279.8,159.1z"/>
                                    <path id="Path_530" class="st0 st022" d="M284.8,162.1h2.9c2.2,0,3.2,1.2,3.2,2.9c0,1.2-0.8,2.3-1.9,2.6l0,0c1.4,0.2,2.3,1.5,2.2,2.9
                                        c0,1.6-1.1,3.2-3.6,3.2h-2.8L284.8,162.1z M286.3,167.1h0.9c1.6,0,2.4-0.7,2.4-2c0-1-0.6-1.8-2.1-1.8h-1.1L286.3,167.1z
                                         M286.3,172.5h1.2c1.1,0.1,2.1-0.7,2.2-1.8c0-0.1,0-0.2,0-0.3c0.1-1.1-0.7-2-1.7-2.1c-0.1,0-0.2,0-0.4,0h-1.4L286.3,172.5z"/>
                                    <path id="Path_531" class="st0 st022" d="M293.6,162.1h5.4v1.3h-3.9v3.7h3.8v1.3h-3.8v4.1h4.2v1.3h-5.6L293.6,162.1z"/>
                                    <path id="Path_532" class="st0 st022" d="M308.3,173.4c-0.7,0.2-1.4,0.3-2.1,0.4c-3.7,0-5.2-2.8-5.2-5.9c0-3.6,2.1-5.9,5.1-5.9
                                        c0.8,0,1.5,0.1,2.2,0.4v1.4c-0.7-0.4-1.4-0.6-2.2-0.6c-1.9,0-3.6,1.5-3.6,4.3c0,3,1.2,5,3.7,5c0.7,0,1.4-0.2,2.1-0.5V173.4z"/>

                                </g>
                            </g>
                        </g>
                    </g>
                </g>
                </svg>
</div>
                          <!-- <svg class="alt-logo" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 131.8 91.2" style="enable-background:new 0 0 131.8 91.2;" xml:space="preserve">
                          <style type="text/css">
                            .st0{fill:#3B7530;}
                            .st1{fill:#167FBC;}
                          </style>
                          <g>
                            <path id="Path_466" class="st0" d="M0.1,87.2C0,87.2,0,87.1,0.2,87c0.5-0.4,1.8-1.1,2.4-1.4c1-0.6,1.8-1.2,2.8-1.8
                                c2-1.3,3.9-2.6,5.8-3.9c4.4-2.9,8.6-6,12.7-9.2c9.6-7.4,18.1-16,25.4-25.7c2.1-2.8,4-5.7,5.8-8.7c0.9-1.5,1.8-3,2.6-4.6
                                c0.7-1.6,1.6-3,2.6-4.4c0.3-0.4,1.7,0.8,1.8,4.1c0.1,0.7,0,1.5-0.1,2.2c-0.3,1.4-0.7,2.7-1.3,3.9c-1.6,3.2-3.6,6.1-6,8.8
                                c-5.8,7-12.9,13.1-20.2,18.9C27.4,70.9,20,76.2,12.3,81C8.7,83.2,4.5,86,0.1,87.2"/>
                            <path id="Path_467" class="st1" d="M83.7,44.7c0.9-1.1,0-4.7-0.3-5.5C82.3,34.9,80,31,76.7,28c-1.9-2-4.2-3.5-6.7-4.4
                                c-4-1.2-6.4,0.7-6.6,1.4c-0.2,0.9-0.3,2.4,2.1,4.2c1.5,1.2,5.8,3.1,7.1,4.6c3.1,3.5,3.7,5.6,7,9.6C80.6,44.7,82.2,46.5,83.7,44.7"
                                />
                            <path id="Path_468" class="st1" d="M85.2,0.6c1.1,2-1.1,4.6-2.2,5.9c-3.1,3.5-6.6,6.6-10.4,9.4c-1.5,1.3-3.2,2.5-5,3.4
                                c-1.1,0.5-2.2,0.8-3.3,1.1c-1.2-0.9,1-3.4,1.8-4.2c1.9-2.1,3.7-4.3,5.2-6.7C75.6,2.7,84-1.6,85.2,0.6"/>
                            <path id="Path_469" class="st1" d="M42.8,30.4c6.4,0.6,14.7-0.8,16.5-8c0.8-3.1-7-0.9-8.3-0.7c-4.1,0.7-8.1,1.5-12.2,2.2
                                c-2.4,0.4-5.3,0.5-7.8,1.4c-0.4,0.1-0.4,0.3-0.5,0.5C30.4,30,39.4,30.1,42.8,30.4"/>
                            <path id="Path_470" class="st1" d="M55.1,2.7c3.4-1.4,5.8-0.1,5.9,3.7c0,1.7-0.2,3.4-0.4,5.1c-0.2,2.4-0.1,4.9,0.1,7.3
                                c-1.3-0.2-2.8-2.1-3.6-3c-1.3-1.5-2.5-3.1-3.4-4.8C52.1,7.9,51.5,4.1,55.1,2.7"/>
                            <path id="Path_471" class="st0" d="M52.6,73.5c3.3-3.4,6.6-5.1,10.1-5.1c1.1-0.1,2.2,0.3,3.1,0.9c0.8,0.6,1.2,1.6,1.1,2.6
                                c0,2.4-1.4,4.4-4.2,6.1c-2.7,1.6-5.7,2.6-8.8,3l-1.4,0.2c-0.2,0.5-0.3,1.1-0.4,1.6c-0.1,0.5-0.1,1-0.1,1.5
                                c-0.1,1.3,0.5,2.5,1.4,3.4c0.9,0.8,2.1,1.2,3.4,1.2c1.4,0,2.8-0.5,3.9-1.2c1.2-0.8,2.3-1.6,3.4-2.6l0.6,0.6c-0.9,1.1-2,2.1-3.2,2.9
                                c-2.1,1.6-4.7,2.6-7.4,2.6c-1.7,0-3.4-0.7-4.6-1.9c-1.4-1.4-2.1-3.3-2-5.3C47.6,80.4,49.3,76.9,52.6,73.5 M60.5,76.8
                                c2-1.8,3-3.5,3-5.2c0-0.5-0.1-1.1-0.4-1.5c-0.3-0.4-0.8-0.6-1.3-0.6c-1.2,0-2.3,0.5-3.1,1.4c-1,0.9-2,2-2.8,3.1
                                c-0.8,1.2-1.5,2.5-2.1,3.9c-0.3,0.7-0.6,1.4-0.9,2.2C55.7,79.8,58.4,78.6,60.5,76.8 M69.9,59.8c-0.2,0.2-0.4,0.4-0.6,0.6l-8.6,5.4
                                h-1.8l8.2-8.1c0.2-0.2,0.4-0.3,0.6-0.4c0.2-0.1,0.5-0.1,0.7-0.1c0.5,0,0.9,0.2,1.2,0.5c0.4,0.3,0.6,0.8,0.6,1.3
                                C70.2,59.3,70.1,59.6,69.9,59.8"/>
                            <path id="Path_472" class="st0" d="M78,60.7c0.1-0.2,0.1-0.4,0.1-0.6c0-0.2,0-0.4,0-0.5c0.1-0.5-0.2-0.9-0.7-1
                                c-0.9-0.2-1.8-0.2-2.7-0.2v-0.8l2.6-0.3c1-0.1,1.6-0.2,1.9-0.3c0.9-0.2,2.1-0.4,3.4-0.7c0.1,0,0.2,0.1,0.4,0.2l-8.2,29.7
                                c-0.2,0.7-0.3,1.1-0.3,1.3c0,0.1,0,0.3,0,0.4c0,0.3,0.1,0.6,0.2,0.8c0.1,0.2,0.4,0.4,0.6,0.3c0.6,0,1.4-0.5,2.3-1.6
                                c0.9-1,1.7-2,2.4-3.1l0.7,0.5c-1,1.5-2.1,3-3.3,4.3c-1,1.2-2.5,2-4.1,2.1c-0.6,0-1.1-0.1-1.6-0.4c-0.7-0.5-1.1-1.4-1.1-2.3
                                c0-0.6,0.1-1.1,0.2-1.7c0.1-0.4,0.2-0.9,0.4-1.4L78,60.7z"/>
                            <path id="Path_473" class="st0" d="M101,69.3c0.4,0.4,0.7,0.9,0.9,1.4L102,71l0.6-1.9c0-0.1,0.1-0.3,0.2-0.4s0.2-0.1,0.4-0.1
                                l2.9-0.3c0.2,0,0.2,0,0.3,0.1c0,0.1,0,0.2,0,0.3c-0.1,0.2-0.1,0.4-0.2,0.5s-0.1,0.3-0.2,0.5l-2.4,8.8c-0.5,1.9-1,3.6-1.4,5
                                s-0.7,2.9-0.9,4.3c0,0.2,0.1,0.4,0.2,0.5s0.3,0.2,0.5,0.2s0.3-0.1,0.5-0.1c0.2-0.1,0.5-0.3,0.7-0.4l0.4-0.3
                                c0.1-0.1,0.3-0.2,0.5-0.4s0.4-0.4,0.6-0.6l1.6-1.6l0.6,0.5c-1.2,1.6-2.6,3.1-4.2,4.4c-0.9,0.7-1.9,1.1-3,1.2
                                c-0.6,0-1.1-0.2-1.4-0.6c-0.3-0.5-0.5-1-0.5-1.6c0-0.9,0.1-1.7,0.3-2.5c0.2-1.1,0.4-2,0.7-2.8c-0.3,0.5-0.8,1.2-1.5,2.2
                                c-0.8,1-1.6,1.9-2.6,2.8s-2.2,1.7-3.5,2.3c-0.8,0.3-1.6,0.4-2.5,0.4c-1.4,0-2.7-0.6-3.6-1.6c-1.2-1.3-1.7-2.9-1.6-4.7
                                c0-3.5,1.6-7.1,4.7-10.8c3.2-3.9,6.6-5.9,10-5.9C99.1,68.2,100.2,68.5,101,69.3 M100.2,70.2c-0.5-0.5-1.2-0.9-2-0.8
                                c-2.7,0-5.2,2.1-7.5,6.2c-2,3.6-3.1,6.8-3.1,9.4c-0.1,1,0.2,2.1,0.9,2.9c0.5,0.6,1.3,0.9,2.1,0.9c2.5,0,4.9-2,7.2-6
                                c2.2-3.6,3.3-6.9,3.3-9.9C101.1,71.9,100.9,70.9,100.2,70.2"/>
                            <path id="Path_474" class="st0" d="M108.7,90.6l4.2-15.3c0.4-1.3,0.6-2.1,0.6-2.4c0.1-0.3,0.1-0.6,0.1-0.9c0-0.4-0.1-0.8-0.4-1.1
                                c-0.5-0.3-1-0.5-1.6-0.4c-0.2,0-0.4,0-0.6,0s-0.4,0.1-0.6,0.1v-0.8c1.1-0.2,1.8-0.3,2.3-0.4s0.9-0.2,1.5-0.3l4.4-1
                                c0.1,0.1,0.2,0.1,0.2,0.2l-3.2,10.6c1.5-2.4,3.2-4.7,5.1-6.9c2.4-2.6,4.5-4,6.4-4c0.7,0,1.3,0.1,1.9,0.4c1,0.6,1.6,1.7,1.5,2.9
                                c0,0.4,0,0.8-0.1,1.2c-0.1,0.4-0.2,0.9-0.3,1.4l-3.3,11.8c-0.1,0.2-0.1,0.5-0.2,0.9c-0.1,0.2-0.1,0.5-0.1,0.8
                                c0,0.2,0.1,0.5,0.2,0.7s0.3,0.3,0.5,0.3c0.6-0.1,1.1-0.3,1.4-0.8c1-1,1.8-2.1,2.6-3.2l0.7,0.6c-0.9,1.4-2,2.7-3.1,3.8
                                c-1,1.1-2.3,1.8-3.8,1.9c-0.6,0-1.1-0.2-1.6-0.6c-0.6-0.5-0.9-1.3-0.8-2c0-0.3,0-0.6,0.1-0.9c0-0.3,0.1-0.5,0.2-0.8l3.2-12
                                c0.1-0.5,0.2-1.1,0.3-1.6c0-0.3,0.1-0.6,0.1-0.9c0-0.4-0.1-0.7-0.3-1c-0.2-0.3-0.6-0.5-1-0.4c-1.2,0-2.8,1.1-4.7,3.4
                                c-1.2,1.5-2.4,3.1-3.4,4.8c-0.8,1.3-1.5,2.7-2.1,4.2c-0.5,1.4-1.3,3.8-2.3,7.4L108.7,90.6z"/>
                          </g>
                          </svg> -->
            
        </a>
    </div>
                     <div class=" menu-order px-lg-0">
                         <button class=" navbar-toggler float-end d-none " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                             <span class="navbar-toggler-line"></span>
                             <span class="navbar-toggler-line"></span>
                             <span class="navbar-toggler-line"></span>
                             <span class="navbar-toggler-line"></span>
                         </button>
                         <div class="collapse navbar-collapse" id="navbarNav">
                             <ul class="navbar-nav alt-font">
                                 <li class="nav-item dropdown megamenu">
                                     <a href="<?php echo site_url(); ?>/actualites" class="nav-link">Actualités</a>
                                     
                                 </li>
                                 <li class="nav-item dropdown megamenu">
                                     <a href="<?php echo site_url(); ?>/donner" class="nav-link">Comment donner</a>
                                     
                                 </li>
                                 <li class="nav-item dropdown megamenu">
                                     <a href="<?php echo site_url(); ?>/faire-un-don/" target="_blank" class="nav-link elementdeco relative" style="color:#31B9A2">Faire un don</a>
                                     
                                 </li>


                                 
                             </ul>
                         </div>
                     </div>
                     <div class=" text-end col-xs-4 pe-0 font-size-0">
                         <div class="header-search-icon search-form-wrapper">
                             <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                             <!-- start search input -->
                             <div class="form-wrapper">
                                 <button title="Close" type="button" class="search-close alt-font">×</button>
                                 <form id="search-form" role="search" method="get" class="search-form text-start" action="<?php echo home_url( '/' ); ?>">
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
                         <div class=" header-push-button d-lg-inline-block hidden-xs">
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
                <div class="d-flex flex-column align-items-center justify-content-center h-100 padding-4-rem-all md-padding-2-rem-lr xs-no-padding-lr">
                 
                    <a href="<?php echo site_url(); ?>" class="logo_petale d-lg-inline-block">

                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group84.svg" alt="" class="md-w-160px" /></a>
                       
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
                                             <li><a href="<?php echo site_url(); ?>/fondation">La Fondation</a></li>
                                             <li><a href="<?php echo site_url(); ?>/equipe">Conseil d'administration<br/>et équipe</a></li>
                                             <li><a href="<?php echo site_url(); ?>/temoignages">Témoignages</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-list-item">
                                <a href="<?php echo site_url(); ?>/faire-un-don/">Faire un don</a>
                            </li>
                            <li class="menu-list-item">
                                <a href="<?php echo site_url(); ?>/nos-realisations">Nos réalisations</a>
                            </li>
                            <li class="menu-list-item">
                                <a href="<?php echo site_url(); ?>/actualites">Actualités</a>
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
    <!--                         <li class="menu-list-item">
                                <a href="<$?php echo site_url(); ?>/salle-de-presse">Salle de presse</a>
                            </li> -->
         
                            <li class="menu-list-item">
                                <a href="<?php echo site_url(); ?>/pour-nous-joindre">Nous joindre</a>
                            </li>
    
                            <!-- end menu item -->
                          
                            <!-- end menu item -->
                        </ul>
                        <!-- end menu -->
                    </div>
                    <div class="social-icon-style-04 text-left margin-25px-top">
                        <ul class="medium-icon dark">
                            <li>
                                <a class="facebook" href="https://www.facebook.com/FondationElan/" target="_blank"><i class="fab fa-facebook-f "></i></a><a class="twitter" href="https://twitter.com/FondationElan" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            
                    
                            
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

