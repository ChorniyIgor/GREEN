<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GETG
 */

?>

<footer class="footer">

					<div class="footer__container container border_left border_right" >
							<div class="footer__menu footer__menu_1"><?php dynamic_sidebar( 'footer-1' ); ?></div>
							<div class="footer__menus">
									<div class="footer__menu"><?php dynamic_sidebar( 'footer-2' ); ?></div>
									<div class="footer__menu"><?php dynamic_sidebar( 'footer-3' ); ?></div>
									<div class="footer__menu"><?php dynamic_sidebar( 'footer-4' ); ?></div>
									<div class="footer__menu"><?php dynamic_sidebar( 'footer-5' ); ?></div>
							</div>

					</div>

					<div class="footer__search_section">
							<div class=" container border_left border_right">
									<?php dynamic_sidebar( 'footer-6' ); ?>
							</div>
					</div>


					<div class="footer__bottom_line">
							<div class=" container border_left border_right">
									<p>Copyright © Green Earth Technologies Global Inc.</p>
									<?php
									wp_nav_menu(
											array(
													'theme_location' => 'bottom-line',
													'menu_id'        => 'bottom-line-menu',
											)
									);
									?>
							</div>
					</div>
</footer>
</div>


<?php wp_footer(); ?>

</body>
</html>
