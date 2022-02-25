<section class="equipe big-section" style="background-color:<?= $bg_colorequipe ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-six-bottom">
                <div class="w-70 text-center" style="margin:auto">
                    <?php if ($categorie ): ?>
                    <h3 class="alt-font text-extra-dark-gray font-weight-500"><?= $categorie ?></h3>
                    <?php endif ?>
                    <?php if ($Bloc_texte_categorie ): ?>
                        <div><?= $Bloc_texte_categorie ?></div>
                    <?php endif ?>
                </div>
            </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">
            <!-- start team member -->
            <?php
              if( have_rows('content_blocks') ): 
                  // loop through rows (parent flexible content)
                while( have_rows('content_blocks') ): the_row();
                  if( get_row_layout() == 'team' ): 
                    // check for rows (sub repeater)
                  if( have_rows('blocequipe') ): ?>
                    
                    <?php while( have_rows('blocequipe') ): the_row(); ?>
                        <?php $mail = get_sub_field('adresse_courriel'); ?>
                    <div class="col team-style-01 text-center md-margin-30px-bottom xs-margin-15px-bottom">
                        <figure class="border-radius-5px">
                            <div class="team-member-image">
                                <img alt="<?php the_sub_field('altequipe'); ?>" src="<?php the_sub_field('image_portrait'); ?>">
                                <div class="team-overlay bg-transparent-gradient-shamrock-green-light-orange border-radius-5px"></div>
                            </div>
                            <figcaption class="align-items-center justify-content-center d-flex flex-column padding-20px-lr padding-30px-tb">
                                <span class="team-title d-block alt-font text-white"><?php the_sub_field('euipe_titre'); ?></span>
                                <span class="team-sub-title text-small d-block text-white text-uppercase"><?php the_sub_field('euipe_nom'); ?></span>
                                <div class="social-icon w-100 position-absolute bottom-30px left-0px">

                                    <?php if ($mail ): ?>
                                    <a href="mailto:<?php the_sub_field('adresse_courriel'); ?>"class="text-white"><i aria-hidden="true" class="far fa-envelope"></i></a>
                                    <?php endif ?>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                  <?php endwhile; ?>
                <?php break; ?>
                <?php endif; endif; ?>
              <?php endwhile;  ?>
            <?php endif; ?>
            <!-- end team member -->

        </div>
    </div>
</section>