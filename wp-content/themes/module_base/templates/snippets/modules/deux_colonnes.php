<!-- start section -->
<div class="<?= $paddingbottom ?> bg-light-gray wow" style="background-color:<?= $preference_backgroundcolor_deux_colonnes ?>;">
    <div class="container animate__fadeIn <?= $marginnegatifdeux ?>">

    <div class="<?= $optionbordure ?>"><span></span></div>
        <?php if ($petittitrefullwidth  ): ?>
            <div class="alt-font text-medium font-weight-500 margin-30px-bottom d-flex">
                <span class="w-60px h-3px bg-tussock opacity-7 align-self-center margin-20px-right flex-shrink-0">   
                </span>
                <div class="petittitre media-body flex-grow-1">
                    <span class="text-tussock text-uppercase" style="color:#4BDBC6; font-weight:600;"><?= $petittitrefullwidth  ?>
                    </span>
                </div>
            </div>
        <?php endif ?> 
        <?php if ($grostitrefullwidth  ): ?>
           <h3 class="alt-font cd-headline slide font-weight-600 text-extra-dark-gray letter-spacing-minus-1px  cd-headline sm-w-100 sm-line-height-30px xs-w-100 ">
                    <span class="p-0 d-block moyentitre black"><?= $grostitrefullwidth ?></span>
            </h3>
        <?php endif ?>  
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 padding-right30 wow animate__fadeIn" data-wow-delay="0.2s">
                 <?php if ($soustitredroit_2col ): ?>
                <h4 class="alt-font cd-headline slide font-weight-600 text-extra-dark-gray letter-spacing-minus-1px line-height-40px margin-40px-bottom cd-headline sm-w-100 sm-line-height-30px xs-w-100 xs-margin-20px-bottom">
                    <span class="p-0 d-block moyentitre black"><?= $soustitredroit_2col ?></span>
                </h4> 
                <?php endif ?>                          
                <p class="w-90 md-w-100 margin-30px-bottom"><?= $Bloc_textedroit_col_2 ?></p>
            </div>
            <div class="col-12 col-lg-6 padding-left30 wow animate__fadeIn" data-wow-delay="0.2s">
            <?php if ($soustitregauche_2col): ?>
                <h4 class="alt-font cd-headline slide font-weight-600 text-extra-dark-gray letter-spacing-minus-1px line-height-40px margin-40px-bottom cd-headline sm-w-100 sm-line-height-30px xs-w-100 xs-margin-20px-bottom">
                    <span class="p-0 d-block moyentitre black"><?= $soustitregauche_2col ?></span>
                </h4> 
                <?php endif ?>                           
                <p class="w-90 md-w-100 margin-30px-bottom"><?= $Bloc_textegauche_col_2 ?></p>
            </div>
        </div>
    </div>
</div>