<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package edtrips
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>   
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'edtrips' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-fixed-top" role="navigation">
        	<div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<?php _e( 'Primary Menu', 'edtrips' ); ?>
				</button>
            </div>
            <div class="collapse navbar-collapse">
			<?php wp_nav_menu( array( 
				'theme_location' => 'primary',
				'menu_class' => 'nav navbar-nav',
				'container_class' => 'menu-top-nav-container col-md-8 col-md-offset-2',) 
				);
			?>
			</div>
            <!-- /.navbar-collapse -->
        </div>
    </nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
