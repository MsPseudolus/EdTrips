<?php
/**
 * Template Name: What
 *
 * @package EdTrips
 */

get_header(); ?>
<header class="header-what" style="background: url(<?php the_field('hero_image')?>); background-repeat: no-repeat; background-size: cover; background-position: top left;">
	<div class="hero-mask">
		<div id="what-hero-text" class="text-vertical-center">
			<h2><?php the_field('hero_text_line_1');?></h2>
			<h1><?php the_field('hero_text_line_2');?></h1>
			<h2><?php the_field('hero_text_line_3');?></h2>
		</div>
	</div>
</header>
<section id="what-discover" class="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 et-content">
				<div class="row">
					<div id="discover-video" class="col-lg-7 no-padding">
						<?php the_field('row_1_video');?>
					</div>
					<div id="discover-text" class="col-lg-4 col-lg-offset-1 no-padding">
						<p id="discover-copy" class="marketing-text">
						<?php the_field('row_1_text');?>
						</p>
					</div>
				</div><!-- /.row (nested) -->
			</div><!-- /.col-lg-10 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<aside id="what-explore" class="mktg-callout what-callout-1" style="background: url(<?php the_field('row_2_bg_img');?>);">
    <div class="container">
		<div class="row">
			<div id="explore-content" class="col-lg-10 col-lg-offset-1 fp-content text-center">
			
				<div class="row">
					<div id="explore-image" class="what-circle">
						<img src="<?php the_field('row_2_circle_img');?>">
					</div>
					<div id="explore-title" class="what-title marketing-first">
						<p>
						<?php the_field('row_2_header');?>
						</p>
					</div>
					<div id="explore-text" class="col-lg-10 col-lg-offset-1 what-text marketing-text">
						<p>
						<?php the_field('row_2_text');?>
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
<aside id="what-manage" class="mktg-callout what-callout-2">
	<div class="connect-arrow col-xs-12">
	<img src="../wp-content/uploads/2014/08/ET_arrow.png">
	</div>
    <div class="container">
		<div class="row">
			<div id="manage-content" class="col-lg-10 col-lg-offset-1 fp-content text-center">
			
				<div class="row">
					<div id="manage-image" class="what-circle">
						<img src="<?php the_field('row_3_circle_image');?>">
					</div>
					<div id="manage-title" class="what-title marketing-first">
						<p>
						<?php the_field('row_3_header');?>
						</p>
					</div>
					<div id="explore-text" class="col-lg-10 col-lg-offset-1 what-text marketing-text">
						<p>
						<?php the_field('row_3_text');?>
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
<aside id="what-communicate" class="mktg-callout what-callout-3" style="background: url(<?php the_field('row_4_bg_img');?>);">
	<div class="connect-arrow col-xs-12">
	<img src="../wp-content/uploads/2014/08/ET_arrow.png">
	</div>
    <div class="container">
		<div class="row">
			<div id="communicate-content" class="col-lg-10 col-lg-offset-1 fp-content text-center">
			
				<div class="row">
					<div id="communicate-image" class="what-circle">
						<img src="<?php the_field('row_4_circle_image');?>">
					</div>
					<div id="communicate-title" class="what-title marketing-first">
						<p>
						<?php the_field('row_4_header');?>
						</p>
					</div>
					<div id="explore-text" class="col-lg-10 col-lg-offset-1 what-text marketing-text">
						<p>
						<?php the_field('row_4_text');?>
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
<aside id="what-start" class="mktg-callout what-callout-4">
	<div class="connect-arrow col-xs-12">
	<img src="../wp-content/uploads/2014/08/ET_arrow.png">
	</div>
    <div class="container">
		<div class="row">
			<div id="get-started" class="col-lg-10 col-lg-offset-1 fp-content text-center">
			
				<div class="row">
					<div id="ready-to-get" class="what-title marketing-first">
						<p>
						<?php the_field('row_5_header');?>
						</p>
					</div>
					<div id="ready-button" class="col-lg-10 col-lg-offset-1 what-text marketing-text">
						<p>
						<div><a href="<?php the_field('row_5_button_link');?>"><button type="button" class="btn btn-warning btn-edtrips"><?php the_field('row_5_button_text');?></button></a></div>
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>
