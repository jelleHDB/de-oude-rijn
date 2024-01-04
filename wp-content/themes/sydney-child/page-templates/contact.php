<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="tuinOntwerpen-slider" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field( 'slider_afbeelding-contact' ); ?>)"></div>

<div class="contact">
    <div class="contact-inhoud">
        <div class="contact-c1">
            <?php if ( have_rows( 'titels-contact' ) ) : ?>
                <?php while ( have_rows( 'titels-contact' ) ) : the_row(); ?>
                    <h2 class="titel-contactTuin"><?php the_sub_field( 'titel-contact_1' ); ?><span class="titel-dik-contactTuin"><?php the_sub_field( 'titel-contact_2' ); ?></span><?php the_sub_field( 'titel-contact_3' ); ?></h2>
                <?php endwhile; ?>
            <?php endif; ?>
            <span class="contactformulier-contact">
                <?php the_field( 'contact_formulier-contact' ); ?>
            </span>
        </div>
        <div class="contact-c2">
            <h2 class="titel-contact-informatie"><?php the_field( 'titel-contactInformatie' ); ?></h2>
            <?php $telefoonnummer_contact = get_field( 'telefoonnummer-contact' ); ?>
            <?php if ( $telefoonnummer_contact ) : ?>
                <a class="link-contact link-telefoonnummer" href="<?php echo esc_url( $telefoonnummer_contact['url'] ); ?>" target="<?php echo esc_attr( $telefoonnummer_contact['target'] ); ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( $telefoonnummer_contact['title'] ); ?></a>
            <?php endif; ?>
            <?php $mail_contact = get_field( 'mail-contact' ); ?>
            <?php if ( $mail_contact ) : ?>
                <a class="link-contact link-mail" href="<?php echo esc_url( $mail_contact['url'] ); ?>" target="<?php echo esc_attr( $mail_contact['target'] ); ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( $mail_contact['title'] ); ?></a>
            <?php endif; ?>
            <p class="informatie-contact_1"><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field( 'straatnaam_nummer-contact' ); ?></p>
            <p class="informatie-contact_2"><?php the_field( 'postcode_stad-contact' ); ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>

