<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<?php $container 	= get_theme_mod( 'footer_credits_container', 'container' ); ?>
	<?php $credits 		= sydney_footer_credits(); ?>

	<footer id="footer" class="footer-costum">
		<hr class="streep-footer"> 
		<div class="footer-inhoud" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field( 'achtergrond_afbeelding-footer', 'option' ); ?>)">
			<div class="footer-c1">
				<?php if ( get_field( 'logo-footer', 'option' ) ) : ?>
					<a href="/">
						<img class="logo-footer" src="<?php the_field( 'logo-footer', 'option' ); ?>" />
					</a>
				<?php endif ?>
			</div>
			<div class="footer-c2">
				<div class="footer-c2-c1">
					<h2 class="titel-footer"><?php the_field( 'titel-kolom-2', 'option' ); ?></h2>
					<div class="menu-items-c1">
						<?php if ( have_rows( 'menu_items-kolom-2', 'option' ) ) : ?>
							<?php while ( have_rows( 'menu_items-kolom-2', 'option' ) ) : the_row(); ?>
								<?php $menu_item_kolom_2 = get_sub_field( 'menu_item-kolom-2' ); ?>
								<?php if ( $menu_item_kolom_2 ) : ?>
									<a class="menu-item-c1" href="<?php echo esc_url( $menu_item_kolom_2['url'] ); ?>" target="<?php echo esc_attr( $menu_item_kolom_2['target'] ); ?>"><?php echo esc_html( $menu_item_kolom_2['title'] ); ?></a>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php else : ?>
							<?php // No rows found ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="footer-c2-c2">
					<h2 class="titel-footer"><?php the_field( 'titel-kolom-3', 'option' ); ?></h2>
					<h2 class="straatnaam-tekst"><?php the_field( 'straatnaam-nummer-footer', 'option' ); ?></h2>
					<h2 class="postcode-tekst"><?php the_field( 'postcode-stad-footer', 'option' ); ?></h2>
					<?php $telefoonnummer_footer = get_field( 'telefoonnummer-footer', 'option' ); ?>
					<?php if ( $telefoonnummer_footer ) : ?>
						<a class="link-footer-c2" href="<?php echo esc_url( $telefoonnummer_footer['url'] ); ?>" target="<?php echo esc_attr( $telefoonnummer_footer['target'] ); ?>"><?php echo esc_html( $telefoonnummer_footer['title'] ); ?></a>
					<?php endif; ?>
					<?php $e_mailadres_footer = get_field( 'e-mailadres-footer', 'option' ); ?>
					<?php if ( $e_mailadres_footer ) : ?>
						<a class="link-footer-c2" href="<?php echo esc_url( $e_mailadres_footer['url'] ); ?>" target="<?php echo esc_attr( $e_mailadres_footer['target'] ); ?>"><?php echo esc_html( $e_mailadres_footer['title'] ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->

	<div class="credit-footer">
		<div class="credit-footer-inhoud">
			<?php echo wp_kses_post( $credits ); ?>
		</div>
	</div>

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
