<?php
/*
Template Name: Tuinontwerpen
*/

get_header(); ?>

<div class="tuinOntwerpen-slider" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field( 'slider_afbeelding-tuinontwerpen' ); ?>)"></div>

<div class="tuinOntwerpen" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field( 'achtergrond_afbeelding-tuinontwerpen' ); ?>)">
    <div class="tuinOntwerpen-info">
        <h2 class="titel-tuinOntwerpen"><?php the_field( 'titel-tuinontwerpen' ); ?></h2>
        <span class="informatie-tuinOntwerpen">
            <?php the_field( 'informatie-tuinontwerpen' ); ?>
        </span>
    </div>
</div>
<div class="onzeOntwerpen">
    <hr class="dikke-lijn-fotos">
    <div class="onzeOntwerpen-inhoud">
        <?php if ( have_rows( 'titels-onzeOntwerpen' ) ) : ?>
            <?php while ( have_rows( 'titels-onzeOntwerpen' ) ) : the_row(); ?>
                <h2 class="titel-onzeOntwerpen"><?php the_sub_field( 'titel-onzeOntwerpen_1' ); ?><span class="schuine-titel-onzeOntwerpen"><?php the_sub_field( 'titel-onzeOntwerpen_2' ); ?></span></h2>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="onzeOntwerpen-fotos">
            <?php if ( have_rows( 'afbeelding-hover-onzeOntwerpen_1' ) ) : ?>
                <?php while ( have_rows( 'afbeelding-hover-onzeOntwerpen_1' ) ) : the_row(); ?>
                    <div class="imageBox">
                        <div class="imageInn">
                            <?php if ( get_sub_field( 'afbeelding-onzeOntwerpen_1' ) ) : ?>
                                <img src="<?php the_sub_field( 'afbeelding-onzeOntwerpen_1' ); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="hoverImg">
                            <?php if ( get_sub_field( 'hover_afbeelding-onzeOntwerpen_1' ) ) : ?>
                                <img src="<?php the_sub_field( 'hover_afbeelding-onzeOntwerpen_1' ); ?>" />
                            <?php endif ?>
                        </div>
                        <h3 class="titel-foto-onzeOntwerpen"><?php the_sub_field( 'titel-onzeOntwerpen_1' ); ?></h3>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'afbeelding-hover-onzeOntwerpen_2' ) ) : ?>
                <?php while ( have_rows( 'afbeelding-hover-onzeOntwerpen_2' ) ) : the_row(); ?>
                    <div class="imageBox">
                        <div class="imageInn">
                            <?php if ( get_sub_field( 'afbeelding-onzeOntwerpen_2' ) ) : ?>
                                <img src="<?php the_sub_field( 'afbeelding-onzeOntwerpen_2' ); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="hoverImg">
                            <?php if ( get_sub_field( 'hover_afbeelding-onzeOntwerpen_2' ) ) : ?>
                                <img src="<?php the_sub_field( 'hover_afbeelding-onzeOntwerpen_2' ); ?>" />
                            <?php endif ?>
                        </div>
                        <h3 class="titel-foto-onzeOntwerpen"><?php the_sub_field( 'titel-onzeOntwerpen_2' ); ?></h3>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'afbeelding-hover-onzeOntwerpen_3' ) ) : ?>
                <?php while ( have_rows( 'afbeelding-hover-onzeOntwerpen_3' ) ) : the_row(); ?>
                    <div class="imageBox">
                        <div class="imageInn">
                            <?php if ( get_sub_field( 'afbeelding-onzeOntwerpen_3' ) ) : ?>
                                <img src="<?php the_sub_field( 'afbeelding-onzeOntwerpen_3' ); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="hoverImg">
                            <?php if ( get_sub_field( 'hover_afbeelding-onzeOntwerpen_3' ) ) : ?>
                                <img src="<?php the_sub_field( 'hover_afbeelding-onzeOntwerpen_3' ); ?>" />
                            <?php endif ?>
                        </div>
                        <h3 class="titel-foto-onzeOntwerpen"><?php the_sub_field( 'titel-onzeOntwerpen_3' ); ?></h3>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="onzeWerkwijze">
    <div class="onzeWerkwijze-inhoud">
        <div class="onzeWerkwijze-c1">
            <?php if ( get_field( 'afbeelding-onzeWerkwijze' ) ) : ?>
                <img class="afbeelding-onzeWerkwijze" src="<?php the_field( 'afbeelding-onzeWerkwijze' ); ?>" />
            <?php endif ?>
        </div>
        <div class="onzeWerkwijze-c2">
            <div class="onzeWerkwijze-c2-c1">
                <?php if ( get_field( 'afbeelding-tijdlijn-onzeWerkwijze' ) ) : ?>
                    <img src="<?php the_field( 'afbeelding-tijdlijn-onzeWerkwijze' ); ?>" />
                <?php endif ?>
            </div>
            <div class="onzeWerkwijze-c2-c2">
                <?php if ( have_rows( 'titels-onzeWerkwijze' ) ) : ?>
                    <?php while ( have_rows( 'titels-onzeWerkwijze' ) ) : the_row(); ?>
                        <h2 class="titel-onzeWerkwijze"><?php the_sub_field( 'titel-onzeWerkwijze_1' ); ?><span class="schuine-titel-onzeWerkwijze"><?php the_sub_field( 'titel-onzeWerkwijze_2' ); ?></span></h2>
                    <?php endwhile; ?>
                    <span class="informatie-onzeWerkwijze">
                        <?php the_field( 'informatie-onzeWerkwijze' ); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="contact-tuinOntwerpen">
    <div class="contact-tuinOntwerpen-inhoud">
        <div class="contact-tuinOntwerpen-c1">
            <?php if ( have_rows( 'titels-contactForm' ) ) : ?>
                <?php while ( have_rows( 'titels-contactForm' ) ) : the_row(); ?>
                    <h2 class="titel-contactTuin"><?php the_sub_field( 'titel-contactForm_1' ); ?><span class="titel-dik-contactTuin"><?php the_sub_field( 'titel-contactForm_2' ); ?></span><?php the_sub_field( 'titel-contactForm_3' ); ?></h2>
                <?php endwhile; ?>
            <?php endif; ?>
            <span class="contactForm-tuin">
                <?php the_field( 'contact_formulier-contactForm' ); ?>
            </span>
        </div>
        <div class="contact-tuinOntwerpen-c2">
            <?php if ( get_field( 'afbeelding-contactForm' ) ) : ?>
                <img class="afbeelding-contact-tuin" src="<?php the_field( 'afbeelding-contactForm' ); ?>" />
            <?php endif ?>
            <div class="paarsVlak"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

