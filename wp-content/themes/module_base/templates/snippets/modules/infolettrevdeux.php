<section class="bg-white overflow-visible marginnegform relative" style="margin-top:0px !important">
    <div class="elementbandegris"></div>
    <div class="container">
        <div class="row justify-content-center xs-no-margin-lr" >
            <div class="col-12 col-xl-12 col-lg-12 position-relative bg-green box-shadow-extra-large border-radius-6px overflow-hidden overlap-section-three-fourth wow animate__fadeIn" style="border-radius:20px;" data-wow-delay="0.3s">
                <div class="row">
                    <div class="col-12 col-md-6 cover-background sm-h-350px" style="background-image:url('<?= $image_infolettredeuxvtrois ?>"></div>
                    <div class="col-12 col-md-6 padding-6-rem-all md-padding-4-rem-all xs-padding-3-half-rem-all">
                        <h5 class="text-white alt-font font-weight-700 letter-spacing-minus-1px w-95">S’abonner à notre infolettre</h5>
                        <p class="w-90 lg-w-100 text-white">Suivez l’actualité de la Fondation en vous abonnant à l’infolettre</p>
                        <form action="email-templates/contact-form.php" method="post" class="margin-15px-top d-inline-block w-100">
                            <input class="bg-light-gray border-radius-4px border-0 medium-input margin-20px-bottom required" type="text" name="name" placeholder="Votre nom" />
                            <input class="bg-light-gray border-radius-4px border-0 medium-input margin-20px-bottom required" type="email" name="email" placeholder="Votre courriel" />
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-large btn-neon-orange btn-round-edge w-100 mb-0 submit" type="submit" style="border-color: #ffffff; color: #50D9C2;background-color:#ffffff;">Envoyez la demande</button>
                            <div class="form-results border-radius-4px d-none"></div>
                            <h3 class="reseau text-white">Suivez-nous!</h3>
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