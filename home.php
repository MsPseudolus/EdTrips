<?php
/**
 * The blog index template file.
 *
 *
 *
 * @package edtrips
 */
get_header(); ?>
<header class="header-what">
	<div class="hero-mask">
		<div id="what-hero-text" class="text-vertical-center">
			<h1>EdTrips Blog</h1>
		</div>
	</div>
</header>
<section id="services" class="blog-index">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 et-content">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				//twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->
</section>

<?php
get_sidebar();
get_footer();