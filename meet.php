<?php
/**
 * Template Name: Meet
 *
 * @package EdTrips
 */

get_header(); ?>
<header class="header-meet" style="background: url(<?php the_field('hero_image')?>); background-repeat: no-repeat; background-size: cover; background-position: top center;">
	<div class="hero-mask">
		<div id="meet-hero-text" class="text-vertical-center">
			<h2><?php the_field('hero_line_1_text')?></h2>
			<h1><?php the_field('hero_line_2_text')?></h1>
		</div>
	</div>
</header>
<aside id="meet-story" class="mktg-callout meet-callout-1">
    <div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 fp-content text-center">
			
				<div class="row">
					<div id="meet-1-image" class="">
						<img src="../wp-content/uploads/2014/07/LocationMarkers_2x1.png">
					</div>
					<div id="our-story" class="meet-title marketing-first">
						<p>
						<?php the_field('row_1_header')?>
						</p>
					</div>
					<div id="our-story-text" class="col-lg-10 col-lg-offset-1 what-text marketing-text">
						<p>
						<?php the_field('row_1_text')?>
						</p>
					</div>
				</div>
                    <!-- /.row (nested) -->
			</div>
			<!-- /.col-lg-10 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</aside>
<hr class="meet-rule">
<section id="team" class="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<p class="marketing-first meet-title"><?php the_field('row_2_header')?></p>

				<div class="row">
					
					<?php $args = array(
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'post_type'        => 'et_teamprof',
					'post_status'      => 'publish',
					'suppress_filters' => true ); ?>
					<?php $team_profs = get_posts( $args ); ?>
					<?php foreach ( $team_profs as $post ) : setup_postdata( $post ); ?>
					
					<div class="col-md-6">
						<div class="portfolio-item">
							<a href="#">
								<img class="img-portfolio img-responsive" src="<?php the_field('image')?>">
							</a>
						</div>
						<div class="row team-member-text et-content">
							<div class="col-lg-4 text-left team-data">
							<span class="first-word team-first"><?php the_field('first_name')?></span> 
							<span class="first-word team-last"><?php the_field('last_name')?></span>
							<span class="team-title"><?php the_field('title')?></span>
							

							<a href="<?php the_field('twitter_account')?>" target="_blank"><span class="entypo-social team-socicon">&#62218;</span></a>
							<a href="<?php the_field('linkedin_account')?>" target="_blank"><span class="entypo-social team-socicon">&#62233;</span></a>
							<a href="mailto:<?php the_field('email')?>"><span class="entypo-social team-socicon">&#9993;</span></a>
							</div>
							<div class="col-lg-8 text-left team-schools">
							<span class="team-fav"><?php the_field('quote')?></span>
							<span class="team-schools-list"><?php the_field('education_1')?><br>
							<?php the_field('education_2')?><BR>
							<?php the_field('education_3')?><BR>
							<?php the_field('education_4')?><BR>
							<?php the_field('education_5')?>
							</span>
							</div>
						</div>
					</div>
					
					<?php endforeach; 
					wp_reset_postdata();?>
					
				</div>
				<!-- /.row (nested) -->
			</div>
			<!-- /.col-lg-10 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
