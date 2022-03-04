<section id="started-now" class="big-section_video parallax overlap-height wow animate__fadeIn" data-parallax-background-ratio="0.7" style="background-image:url('<?= $image_video?>');">
    <div class="formes-anim"></div>
      <div class="formes-anim_deux"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12 col-sm-12 position-relative text-center overlap-gap-section xs-margin-40px-tb wow animate__zoomIn" data-wow-delay="0.3s">
                <a href="<?= $lienurl_video ?>" class="popup-youtube video-icon-box video-icon-large position-relative d-inline-block margin-3-half-rem-bottom">
                    <span>
                        <span class="video-icon" style="border: solid 1px #ffffff">
                            <i class="icon-simple-line-control-play text-white"></i>
                            <span class="video-icon-sonar">
                                <span class="video-icon-sonar-afr " style="background-color: #ffffff50"></span>
                            </span>
                        </span>
                    </span>
                </a>

                <h2 class="alt-font font-weight-600 text-white letter-spacing-minus-2px mb-0">Des témoignages en images qui vont droit au cœur</h2>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-light-gray overflow-visible marginnegform">
    <div class="container">
        <div class="row justify-content-center xs-no-margin-lr" >
            <div class="col-12 col-xl-12 col-lg-12 position-relative bg-white box-shadow-extra-large border-radius-6px overflow-hidden o wow animate__fadeIn" style="border-radius:20px;" data-wow-delay="0.3s">
                <div class="row">
                    <div class="col-12 col-md-6 cover-background sm-h-350px" style="background-image:url('<?= $image_infolettre ?>"></div>
                    <div class="col-12 col-md-6 padding-6-rem-all md-padding-4-rem-all xs-padding-3-half-rem-all">
                        <h5 class="alt-font font-weight-700 text-slate-blue letter-spacing-minus-1px w-95">S’abonner à notre infolettre</h5>
                        <p class="w-90 lg-w-100">Suivez l’actualité de la Fondation en vous abonnant à l’infolettre</p>
                        <form action="email-templates/contact-form.php" method="post" class="margin-15px-top d-inline-block w-100">
                            <input class="bg-light-gray border-radius-4px border-0 medium-input margin-20px-bottom required" type="text" name="name" placeholder="Votre nom" />
                            <input class="bg-light-gray border-radius-4px border-0 medium-input margin-20px-bottom required" type="email" name="email" placeholder="Votre courriel" />
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-large btn-neon-orange btn-round-edge w-100 mb-0 submit" type="submit">Envoyez la demande</button>
                            <div class="form-results border-radius-4px d-none"></div>
                            <h3 class="reseau">Suivez-nous!</h3>
                            <a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group152.svg"  alt="logo facebook"></a>
                            <a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group152-twitter.svg"  alt="logo twitter"></a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>