<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="home-slider" style="background-image: linear-gradient( rgb(0 0 0 / 30%), rgb(0 0 0 / 30%) ), url(<?php the_field('afbeelding-sliderhome'); ?>)">
    <div class="home-slider-inhoud" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('afbeelding_bomen-slider'); ?>)">
        <?php if ( have_rows( 'titels_in_slider-home' ) ) : ?>
            <?php while ( have_rows( 'titels_in_slider-home' ) ) : the_row(); ?>
                <h2 class="titel_slider_1"><?php the_sub_field( 'titels-homeSlider-1' ); ?><span class="blauweTitel"><?php the_sub_field( 'titel_blauw-homeSlider-2' ); ?></span></h2>
                <h2 class="titel_slider_2"><?php the_sub_field( 'titel-homeSlider-3' ); ?></h2>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<div class="informatie1-home">
    <div class="informatie1-home-inhoud">
        <div class="informatie1-home-c1">
            <?php if ( get_field( 'afbeelding-info1-home' ) ) : ?>
                <img class="afbeeldingInfo-1" src="<?php the_field( 'afbeelding-info1-home' ); ?>" />
            <?php endif ?>
        </div>  
        <div class="informatie1-home-c2">
            <?php if ( have_rows( 'titels-info1-home' ) ) : ?>
                <?php while ( have_rows( 'titels-info1-home' ) ) : the_row(); ?>
                    <h2 class="titel-info1-home"><?php the_sub_field( 'titel-info1-home-1' ); ?><span class="titelMonster"><?php the_sub_field( 'titel-info1-home-2' ); ?></span></h2>
                <?php endwhile; ?>
                <?php the_field( 'informatie-info1-home' ); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="tuin-ontwerpen">
    <div class="tuin-ontwerpen-inhoud">
        <div class="pijlNaarBeneden">
            <?php if ( get_field( 'pijl_naar_beneden-home' ) ) : ?>
                <img class="pijlBeneden" src="<?php the_field( 'pijl_naar_beneden-home' ); ?>" />
            <?php endif ?>
        </div>
        <div class="tuin-ontwerpen-kolommen">
            <div class="tuin-ontwerpen-c1">
                <div class="titel-en-streep">
                    <div class="titel-div-tuinontwerpen">
                        <h2 class="titel-tuinontwerpen"><?php the_field( 'titel-tuinontwerpen-home' ); ?></h2>
                    </div>
                    <div class="streep-tuinontwerpen">
                        <hr class="streep">
                    </div>
                </div>
                <span class="informatie-tuinontwerpen"> 
                    <?php the_field( 'informatie-tuinontwerpen-home' ); ?>
                </span>
            </div>
            <div class="tuin-ontwerpen-c2">
                <?php if ( get_field( 'afbeelding_boom-tuinontwerpen-home' ) ) : ?>
                    <img class="boom-2" src="<?php the_field( 'afbeelding_boom-tuinontwerpen-home' ); ?>" />
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
<div class="foto-home">
    <div class="fotos-home-inhoud">
        <div class="fotos-home">
        <?php if ( have_rows( 'ontwerpen-tuinontwerpen-home' ) ) : ?>
            <?php while ( have_rows( 'ontwerpen-tuinontwerpen-home' ) ) : the_row(); ?>
                <?php if ( have_rows( 'afbeelding_en_hover-tuinontwerpen-home' ) ) : ?>
                    <?php while ( have_rows( 'afbeelding_en_hover-tuinontwerpen-home' ) ) : the_row(); ?>
                        <div class="imageInn">
                            <?php if ( get_sub_field( 'afbeelding-tuinontwerpen' ) ) : ?>
                                <img src="<?php the_sub_field( 'afbeelding-tuinontwerpen' ); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="hoverImg">
                            <?php if ( get_sub_field( 'afbeelding_hover-tuinontwerpen' ) ) : ?>
                                <img src="<?php the_sub_field( 'afbeelding_hover-tuinontwerpen' ); ?>" />
                            <?php endif ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

