<section class=" deuximagestextes overflow-visible bg-white wow animate__fadeIn margin-bottom50" style="background-color: <?= $couleur_defond ?> !important" >
    <div class=" <?= $espacement_section ?> container margin-bottom50">
        <div class="row align-items-center justify-content-center <?= $row_reverse ?>">
            <div style="padding-left:120px" class="col-12 col-lg-7 col-md-10 position-relative margin-20px-bottom md-margin-8-rem-bottom sm-margin-10-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="imagecarredetail w-70 margin-4-rem-bottom sm-no-margin-bottom">
                    <span class="un"><?= $Grostitreun ?></span>
                    <span class="deux"><?= $Grostitredeux ?></span>
                    <span class="trois"><?= $Grostitretrois ?></span>
                    <img style="position:relative; z-index:1;"src="<?= $image_parallax_un ?>" alt="<?= $image_alt_parallax_grande ?>" class=" "> 
                </div>
                <div class="<?= $preference_svg ?> position-absolute right-25px bottom-minus-50px w-55 md-right-15px md-bottom-minus-30px" data-parallax-layout-ratio="1.1">
                    <img  style="position: relative; z-index:2;"src="<?= $image_parallax_deux ?>" alt="<?= $image_alt_parallax_petite ?>">
                </div>
            <?php if ($image_partenaire  ): ?>
                <img src="<?= $image_partenaire ?>" alt="<?= $altlogopartenaire ?>" class="logopartenaire"> 
            <?php endif ?>
            </div>
            <div class="zonetexte col-12 col-lg-5 col-md-10 wow animate__fadeIn" data-wow-delay="0.5s">
                <?php if ($petit_soustitre  ): ?>
                <div class="alt-font text-medium font-weight-500 margin-30px-bottom d-flex">
                    <span class="w-60px h-3px bg-tussock opacity-7 align-self-center margin-20px-right flex-shrink-0">   
                    </span>
                    <div class="petittitre media-body flex-grow-1">
                        <span class="text-tussock text-uppercase" style="color:#4BDBC6; font-weight:600;"><?= $petit_soustitre ?>
                        </span>
                    </div>
                </div>
                <?php endif ?>
                <h4 class="grostexte alt-font text-extra-dark-gray font-weight-600 w-95 margin-35px-bottom lg-w-100 sm-margin-25px-bottom"><?= $Bloc_texte_gros ?></h4>
                <div class="general w-95 ">
                    <p class="w-100 margin-35px-bottom "><?= $Bloc_texte_general ?></p>
                </div>
                <?php if ($texte_bouton ): ?>
                <a href="<?= $lien_savoir_plus ?>" target="<?= $preference_lien_savoirplus ?>" class="btn-rond"><span><?= $texte_bouton ?></span></a>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>