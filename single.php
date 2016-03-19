<?php
/**
 * The template for displaying all single posts.
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
<section id="services" class="blog-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 et-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php edtrips_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	</div>
</section>	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
