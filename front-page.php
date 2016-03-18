<?php
/**
 * Template Name: Front Page
 *
 * @package EdTrips
 */
/*all content is generated from custom fields in the Front Page*/
$custom_fields = get_post_custom();
	
get_header(); ?>
<header id="top" class="header">
	<div class="hero-mask">
		<div id="fp-hero-text" class="text-vertical-center">
			<h1><?php the_field('hero_text_1');?></h1>
			<h3><?php the_field('hero_text_2');?></h3>
			<div><a href="<?php the_field('hero_button_link');?>"><button type="button" class="btn btn-warning btn-edtrips et-orange-btn"><?php the_field('hero_button_text');?></button></a></div>
		</div>
	</div>
</header>
<aside class="callout">
    <div class="container">
		<div id="fp-callout" class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-md-8">
						<div class="portfolio-item">
							<div id="fp-callout-icon">
							<img src="wp-content/uploads/2014/07/LocationMarkers_2x1.png">
							</div>
							<div id="description-copy" class="text-left fp-content">
							<?php the_field('row_1_text');?>
								<div>
								<a href="<?php the_field('row_1_button_link');?>">
								<button type="button" class="btn btn-warning btn-edtrips et-orange-btn">
								<?php the_field('row_1_button_text');?>
								</button>
								</a>
								</div>
							</div> 	
						</div>
					</div>
					<div class="col-md-3 col-sm-12 fp-callout-buttons">
						<div class="portfolio-item">
							<div class="fp-teach-ven-link">
							<?php the_field('row_1_callout_1_line_1');?>
							<a href="<?php the_field('row_1_callout_1_link');?>">
							<?php the_field('row_1_callout_1_line_2');?>
							</a>
							</div>
							<div class="fp-teach-ven-link">
							<?php the_field('row_1_callout_2_line_1');?>
							<a href="<?php the_field('row_1_callout_2_link');?>">
							<?php the_field('row_1_callout_2_line_2');?>
							</a>
							</div>
						</div>
					</div>
				</div><!-- /.row (nested) -->
				<div id="venues" class="row">
					<div id="venues-title" class="col-lg-3">
						<h4><?php the_field('venues_title');?></h4>
					</div>	
					<div class="col-lg-12 text-center">
						<div id="fp-venue-1" class="fp-venue-badge col-lg-3 col-md-3" style="background-image: url('<?php the_field('venue_1_image');?>');">
							<div class="venue-mask">
							<img id="venue-1-marker" src="wp-content/uploads/2014/08/Orange-Marker_2x.png"><br>
							<a href="<?php the_field('venue_1_link');?>">
								<div class="venue-title">
								<?php the_field('venue_1_title');?>
								</div><br>
								<div class="venue-location">
								<?php the_field('venue_1_location');?></div>
							</a>
							</div>
						</div>
						<div id="fp-venue-2" class="fp-venue-badge col-lg-3 col-md-3" style="background-image: url('<?php the_field('venue_2_image');?>');">
							<div class="venue-mask">
							<img id="venue-2-marker" src="wp-content/uploads/2014/08/Pink-Marker_2x.png"><br>
							<a href="<?php the_field('venue_2_link');?>">
								<div class="venue-title">
								<?php the_field('venue_2_title');?></div><br>
								<div class="venue-location">
								<?php the_field('venue_2_location');?></div>
							</a>
							</div>
						</div>
						<div id="fp-venue-3" class="fp-venue-badge col-lg-3 col-md-3" style="background-image: url('<?php the_field('venue_3_image');?>');">
							<div class="venue-mask">
							<img id="venue-3-marker" src="wp-content/uploads/2014/08/Green-Marker_2x.png"><br>
							<a href="<?php the_field('venue_3_link');?>">
								<div class="venue-title">
								<?php the_field('venue_3_title');?>
								</div><br>
								<div class="venue-location">
								<?php the_field('venue_3_location');?>
								</div>
							</a>
							</div>
						</div>
						<div id="fp-venue-4" class="fp-venue-badge col-lg-3 col-md-3" style="background-image: url('<?php the_field('venue_4_image');?>');">
							<div class="venue-mask">
							<img id="venue-4-marker" src="wp-content/uploads/2014/08/Blue-Marker_2x.png"><br>
							<a href="<?php the_field('venue_4_link');?>">
								<div class="venue-title">
								<?php the_field('venue_4_title');?>
								</div><br>
								<div class="venue-location">
								<?php the_field('venue_4_location');?>
								</div>
							</a>
							</div>
						</div>
					</div>
				</div><!-- /second nested row-->
			</div><!-- /.col-lg-10 -->
		</div><!-- /.row -->
    </div><!-- /.container -->
</aside>
<section id="services" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1 et-content">
                    <h2><?php the_field('row_2_header');?></h2>
                    <p><?php the_field('row_2_subheader');?></p>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="et-circles">
                                <a href="<?php the_field('bubble_1_link');?>">
                                <img id="img-explore" src="<?php the_field('bubble_1_image');?>">
                                </div>
                                <h4><?php the_field('bubble_1_title');?></h4>
                                <p><?php the_field('bubble_1_text');?></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="et-circles">
                                <a href="<?php the_field('bubble_2_link');?>"><img  id="img-manage" src="<?php the_field('bubble_2_image');?>"></div>
                                <h4><?php the_field('bubble_2_title');?></h4>
                                <p><?php the_field('bubble_2_text');?></p>
                               	</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="et-circles">
                                <a href="<?php the_field('bubble_3_link');?>"><img id="img-comm"  src="<?php the_field('bubble_3_image');?>"></div>
                                <h4><?php the_field('bubble_3_title');?> </h4>
                                <p><?php the_field('bubble_3_text');?></p>     
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="et-circles">
                                <a href="<?php the_field('bubble_4_link');?>">
                                <img  id="img-enjoy" src="<?php the_field('bubble_4_image');?>">
                                </div>
                                <h4><?php the_field('bubble_4_title');?></h4>
                                <p><?php the_field('bubble_4_text');?></p>
                                </a>
                            </div>
                        </div>
                    </div><!-- /.row (nested) -->
                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
</section>
<aside class="callout-research">
    <div class="container">
		<div id="fp-research-callout" class="row">
			<div class="col-lg-10 col-lg-offset-1 fp-content">
			
				<div class="row">
					<div class="col-md-6">
						<div class="portfolio-item">
							
							<h2><?php the_field('row_3_header');?></h2>
							
							<div id="research" class="text-left">
							<?php the_field('row_3_text');?>
							</div>
							<p class="text-left citation">
							<?php the_field('row_3_footnote');?>
							</p>
				
						</div>
					</div>
					<div id="fp-testimonial" class="col-md-6">
						<div class="portfolio-item">
							<img class="fp-teacher" src="<?php the_field('testimonial_img');?>">
							<img class="fp-quote-box" src="wp-content/uploads/2014/07/Conversation_2x.png">
							<p class="fp-quote-text"><?php the_field('testimonial_text');?></p>
							<p class="fp-teacher-attrib"><?php the_field('testimonial_source');?></p>
						</div>
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
<section id="fp-promos" class="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 et-content">
				<div class="row">
					<h4><?php the_field('row_4_header');?></h4>
					<div id="fp-promo-1" class="col-lg-4 col-md-4 col-sm-12 fp-promo-unit" style="background-image: url('<?php the_field('row_4_image_1');?>');">
						<a href="<?php the_field('row_4_image_1_link');?>">
						<p span="fp-promo-title">
						<?php the_field('row_4_image_1_title');?>
						</p>
						<p span="fp-promo-date">
						<?php the_field('row_4_image_1_date');?>
						</p>
						</a>
					</div>
					<div id="fp-promo-2" class="col-lg-4 col-md-4 col-sm-12 fp-promo-unit" style="background-image: url('<?php the_field('row_4_image_2');?>');">
						<a href="<?php the_field('row_4_image_1_link');?>">
						<p span="fp-promo-title">
						<?php the_field('row_4_image_2_title');?>
						</p>
						<p span="fp-promo-date">
						<?php the_field('row_4_image_2_date');?>
						</p>
						</a>
					</div>
					<div id="fp-promo-3" class="col-lg-4 col-md-4 col-sm-12 fp-promo-unit" style="background-image: url('<?php the_field('row_4_image_3');?>');">
						<a href="<?php the_field('row_4_image_1_link');?>">
						<p span="fp-promo-title">
						<?php the_field('row_4_image_3_title');?>
						</p>
						<p span="fp-promo-date">
						<?php the_field('row_4_image_3_date');?>
						</p>
						</a>
					</div>
				</div><!-- /.row (nested) -->
			</div><!-- /.col-lg-10 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<section id="from-blog" class="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 et-content">
				<div class="row">
					<h4>From Our Blog</h4>
					<div class="col-lg-6 col-sm-12 blog-unit">
						<?php
						$args = array( 'numberposts' => '1' );
						$recent_posts = wp_get_recent_posts( $args );
						
						foreach( $recent_posts as $recent ){
							$feat_img = get_post_meta($recent["ID"], 'feat_img', true);	
							echo the_attachment_link( $feat_img, true );
							echo '</div>
							<div class="blog-unit-right col-lg-6 text-center">';
							echo '<p class="fp-blog-date uppercase">'. esc_attr(mysql2date('F j, Y', $recent["post_date"])) .'</p>';
							echo '<p class="fp-blog-title"><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a></p>';
							echo '<hr class="fp-blue-rule">';
							echo '<p class="fp-blog-excerpt">'.esc_attr($recent["post_excerpt"]).'</p>';
							$btn_text = get_post_meta($recent["ID"], 'fp_button_text', true);	
							echo '<a href="'. get_permalink($recent["ID"]) . '"><button type="button" class="btn btn-warning btn-edtrips et-orange-btn">' . $btn_text . '</button></a>';
						}//end foreach
						?>
					</div>		
				</div><!-- /.row (nested) -->
			</div><!-- /.col-lg-10 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
		
<?php get_footer(); ?>