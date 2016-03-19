<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package edtrips
 */
?>

	</div><!-- #content -->
	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 et-content">
					<div class="row">
						<footer id="colophon" class="site-footer" role="contentinfo">
							<div class="footer-menu col-sm-3">
							<h3>Navigate</h3>
							<?php wp_nav_menu( 
							array( 'theme_location' => 'footer-nav',
									'menu_class' => 'nav navbar-nav',
									'container_class' => 'menu-footer-nav-container',) ); ?>
							</div>
							<div class="social-links col-sm-3 col-xs-4">
							<h3>Social</h3>
								<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
								<div id="" class="widget-area" role="complementary">
									<?php dynamic_sidebar( 'sidebar-2' ); ?>
								</div><!-- #primary-sidebar -->
								<?php endif; ?>
							</div>
							<div class="footer-subscribe col-md-6">
							<h3>Subscribe</h3>
								<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
								<div id="" class="widget-area" role="complementary">
									<?php dynamic_sidebar( 'sidebar-3' ); ?>
								</div><!-- #primary-sidebar -->
								<?php endif; ?>
							</div>
							<div class="site-info col-md-12">
								<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'edtrips' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'edtrips' ), 'WordPress' ); ?></a>
								<span class="sep"> | </span>
								<?php printf( __( 'Theme: %1$s by Kirsten Lambertsen built on %2$s.', 'edtrips' ), 'edtrips', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
							</div><!-- .site-info -->
						</footer><!-- #colophon -->
					</div><!--row-->
				</div><!--col-lg-row-10-->	
			</div><!--row-->
		</div><!--container-->
	</section><!--footer-->	
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
