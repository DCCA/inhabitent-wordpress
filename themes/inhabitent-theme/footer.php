<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info container">
					<div class='inhabitent-footer-info-section'>
						<div class="widget-footer-area">
							<?php dynamic_sidebar( 'footer' ); ?>
						</div>
						<a href="" class='footer-logo-image'>
							<img src="<?php echo get_template_directory_uri() . '/assets/logos/inhabitent-logo-text.svg' ?>" alt="">
						</a>
					</div>
					<p class='inhabitent-copyright-tag'>Copyright &copy 2020 Inhabitent</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
