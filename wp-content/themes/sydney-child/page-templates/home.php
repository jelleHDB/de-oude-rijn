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
        <?php if ( have_rows( 'afbeeldingen_met_hover-tuinontwerpen' ) ) : ?>
            <?php while ( have_rows( 'afbeeldingen_met_hover-tuinontwerpen' ) ) : the_row(); ?>
                <?php if ( have_rows( 'afbeelding_met_hover-tuinontwerpen_1' ) ) : ?>
			        <?php while ( have_rows( 'afbeelding_met_hover-tuinontwerpen_1' ) ) : the_row(); ?>
                        <div class="imageBox">
                            <div class="imageInn">
                                <?php if ( get_sub_field( 'afbeelding-tuinontwerpen_1' ) ) : ?>
                                    <img src="<?php the_sub_field( 'afbeelding-tuinontwerpen_1' ); ?>" />
                                <?php endif ?>
                            </div>
                            <div class="hoverImg">
                                <?php if ( get_sub_field( 'hover_afbeelding-tuinontwerpen_1' ) ) : ?>
                                    <img src="<?php the_sub_field( 'hover_afbeelding-tuinontwerpen_1' ); ?>" />
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
		        <?php endif; ?>
                <?php if ( have_rows( 'afbeelding_met_hover-tuinontwerpen_2' ) ) : ?>
			        <?php while ( have_rows( 'afbeelding_met_hover-tuinontwerpen_2' ) ) : the_row(); ?>
                        <div class="imageBox">
                            <div class="imageInn">
                                <?php if ( get_sub_field( 'afbeelding-tuinontwerpen_2' ) ) : ?>
                                    <img src="<?php the_sub_field( 'afbeelding-tuinontwerpen_2' ); ?>" />
                                <?php endif ?>
                            </div>
                            <div class="hoverImg">
                                <?php if ( get_sub_field( 'hover_afbeelding-tuinontwerpen_2' ) ) : ?>
                                    <img src="<?php the_sub_field( 'hover_afbeelding-tuinontwerpen_2' ); ?>" />
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
		        <?php endif; ?>
                <?php if ( have_rows( 'afbeelding_met_hover-tuinontwerpen_3' ) ) : ?>
			        <?php while ( have_rows( 'afbeelding_met_hover-tuinontwerpen_3' ) ) : the_row(); ?>
                        <div class="imageBox">
                            <div class="imageInn">
                                <?php if ( get_sub_field( 'afbeelding-tuinontwerpen_3' ) ) : ?>
                                    <img src="<?php the_sub_field( 'afbeelding-tuinontwerpen_3' ); ?>" />
                                <?php endif ?>
                            </div>
                            <div class="hoverImg">
                                <?php if ( get_sub_field( 'hover_afbeelding-tuinontwerpen_3' ) ) : ?>
                                    <img src="<?php the_sub_field( 'hover_afbeelding-tuinontwerpen_3' ); ?>" />
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
		        <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="button-foto">
        <?php $button_tuinontwerpen_home = get_field( 'button-tuinontwerpen-home' ); ?>
        <?php if ( $button_tuinontwerpen_home ) : ?>
            <a class="button-ontwerpen" href="<?php echo esc_url( $button_tuinontwerpen_home['url'] ); ?>" target="<?php echo esc_attr( $button_tuinontwerpen_home['target'] ); ?>"><?php echo esc_html( $button_tuinontwerpen_home['title'] ); ?></a>
        <?php endif; ?>                             
    </div>
</div>
<div class="home-kunst">
    <div class="home-kunst-inhoud">
        <div class="home-kunst-c1">
            <?php if ( get_field( 'afbeelding-homeKunst' ) ) : ?>
                <img class="afbeelding-homeKunst" src="<?php the_field( 'afbeelding-homeKunst' ); ?>" />
            <?php endif ?>
        </div>
        <div class="home-kunst-c2">
            <?php if ( have_rows( 'titels-kunstOntwerpen' ) ) : ?>
                <?php while ( have_rows( 'titels-kunstOntwerpen' ) ) : the_row(); ?>
                    <h2 class="titels-homeKunst"><?php the_sub_field( 'titel-kunstOntwerpen_1' ); ?><span class="paarse-titel"><?php the_sub_field( 'titel-kunstOntwerpen_2' ); ?></span><?php the_sub_field( 'titeltitel-kunstOntwerpen_3' ); ?></h2>
                <?php endwhile; ?>
            <?php endif; ?>
            <span class="titels-kunstOntwerpen">
                <?php the_field( 'informatie-kunstOntwerpen' ); ?>
            </span>
        </div>
    </div>
    <div class="groen-blok"></div>
</div>
<div class="quote-home">
    <h2 class="quote-tekst"><?php the_field( 'quote-klantervaringen' ); ?></h2>
</div>
<div class="klant-ervaring">
    <div class="klant-ervaring-inhoud">
        <h2 class="titel-klant-ervaring"><?php the_field( 'titel-klantervaring' ); ?><i class="fa fa-leaf"></i></h2>
        <div class="reviews-all">
            <?php if ( have_rows( 'reviews-klantervaring' ) ) : ?>
                <?php while ( have_rows( 'reviews-klantervaring' ) ) : the_row(); ?>
                    <div class="reviews-div">
                        <?php the_sub_field( 'klantervaring-info' ); ?>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

