<section class="bg-white wow liste-trois-colonnes" style="margin-top:<?= $espaceneg ?>">
    <div class="container animate__fadeIn">
        <div class="row justify-content-center">
                <?php
                    if( have_rows('content_blocks') ): 
                        // loop through rows (parent flexible content)
                        while( have_rows('content_blocks') ): the_row();
                            if( get_row_layout() == 'trois_colonnes' ):?> 
                              <!--   // check for rows (sub repeater) -->
                                 <div class="col-lg-4 col-md-12 col-sm-12">
                               <?php if( have_rows('bloctroiscolonnesUN') ): ?>
                                <?php while( have_rows('bloctroiscolonnesUN') ): the_row(); ?>
                                 <div class="col-12 w-95">
                                   <h5><?php the_sub_field('par_bold_un'); ?></h5>
                                   <div class="iconecrochet"><?php the_sub_field('soustitre_troiscolonnes'); ?></div>
                                </div>
                            <?php endwhile; ?>
                      
                            <?php endif; ?>
                          <!--   fin premierrepeater -->
                           </div>
                           <div class="col-lg-4 col-md-12 col-sm-12">
                                 <?php if( have_rows('bloctroiscolonnesDEUX') ): ?>
                                <?php while( have_rows('bloctroiscolonnesDEUX') ): the_row(); ?>
                                <div class="col-12 w-95">
                                   <h5><?php the_sub_field('par_bold_deux'); ?></h5>
                                   <div class="iconecrochet"><?php the_sub_field('soustitre_troiscolonnes_deux'); ?></div>
                                </div>
                            <?php endwhile; ?>
                         
                            <?php endif; ?>
                            </div>
                           <div class="col-lg-4 col-md-12 col-sm-12">
                                 <?php if( have_rows('bloctroiscolonnesTROIS') ): ?>
                                <?php while( have_rows('bloctroiscolonnesTROIS') ): the_row(); ?>
                                 <div class="col-12 w-95">
                                    <h5><?php the_sub_field('par_bold_trois'); ?></h5>
                                    <div class="iconecrochet"><?php the_sub_field('soustitre_troiscolonnes_trois'); ?>   
                                 </div>
                                </div>
                            <?php endwhile; ?>
                            <?php break; ?>
                            <?php endif; ?>
                            </div>
                          <?php endif; ?>
                    <?php endwhile;  ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>