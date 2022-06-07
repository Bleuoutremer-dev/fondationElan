        <!-- start section -->
        <section class="big-section paddingmobile bg-green wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-11 <?= $preference_alignement ?> ">
                        <?php if ($faq_bouton_option ): ?>
                              <div class="margin-10-rem-bottom ">
                                  <a href="<?= $lien_bouton_faq_option ?>" target="<?= $preference_lien_faq_option ?>" class="btn-rond-petit  "><?= $faq_bouton_option ?></a>
                            
                          </div>
                         <?php endif ?>
                        <h2 class="grostitre alt-font text-white"><?= $accordeon_titre_principal ?></h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-11">
                        <div class="panel-group accordion-event accordion-style-02" id="accordion2" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                            <!-- start accordion item -->
                            <?php
                              if( have_rows('content_blocks') ): 
                                  // loop through rows (parent flexible content)
                                while( have_rows('content_blocks') ): the_row();
                                  if( get_row_layout() == 'accordeon' ): 
                                    // check for rows (sub repeater)
                                  if( have_rows('repeat_accordeon') ): ?>
                                    <?php while( have_rows('repeat_accordeon') ): the_row(); ?>
                                        <?php $button = get_sub_field('faq_bouton'); ?>
                            <div class="panel bg-transparent border-color-black-transparent" >
                                <div class="panel-heading  <?php the_sub_field('ouvrir_activer'); ?>" style="border-bottom: solid 1px #707070;">
                                    <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#<?php the_sub_field('accordeon_id'); ?>">
                                        <div class="panel-title" style="margin: 25px 0;">
                                            <span class="alt-font text-black texte-moyen d-inline-block"><?php the_sub_field('accordeon_titre'); ?></span>
                                            <i class="text-black feather <?php the_sub_field('ouvrir_plus'); ?>"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="<?php the_sub_field('accordeon_id'); ?>" class="panel-collapse collapse <?php the_sub_field('ouvrir'); ?>" data-bs-parent="#accordion2">
                                    <div class="panel-body"><?php the_sub_field('texte_deroulant'); ?>
                                      <?php if ($button ): ?>
                                            <div style="margin-top:40px;">
                                                <a href="<?php the_sub_field('lien_bouton_faq'); ?>" target="<?php the_sub_field('preference_lien_faq'); ?>" class="btn-rond-petit"><?php the_sub_field('faq_bouton'); ?></a>
                                          
                                        </div>
                                       <?php endif ?>
                                    </div>

                            </div>
                            <!-- end accordion item -->
                                <?php endwhile; ?>
                                <?php break; ?>
                             <?php endif; endif; ?>
                             <?php endwhile;  ?>
                            <?php endif; ?>
                            <div class="espacementbouton">
                                  <?php if ($faq_bouton_section ): ?>
                            <a href="<?= $lien_bouton_faq_section ?>" target="<?= $preference_lien_faq_section ?>"class="btn-rond-inverse "><span><strong><?= $faq_bouton_section ?></strong></span></a>
                               <?php endif ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>