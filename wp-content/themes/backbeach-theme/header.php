<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Fredericka+the+Great&family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<div class="top-header-holder">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-4 d-none d-sm-block">
						<a href="/" class="logo-holder">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="The Backbeach Logo">
						</a>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="reservation-holder">
							<div class="contact-holder">

								<a href="#" class="phone"><i class="fa fa-phone"></i> 08 9791 6575</a>
								<a href="#" class="address"><i class="fa fa-map-marker"></i> Lot 757, Ocean Drive, Bunbury</a>

								<div class="social-media-holder-tablet">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>

								<button class="navbar-toggler sm-view" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
									<div class="menu-title">Menu</div>
									<div>
										<div class="bar"></div>
										<div class="bar"></div>
										<div class="bar"></div>
									</div>
								</button>
								
							</div>	
							<a href="#" class="reservation-btn">Make a Reservation</a>
						</div>
					</div>
					<div class="col- d-none d-sm-block">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<!-- <i class="fa fa-bars"></i> -->
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="menu-title">Menu</div>
						</button>
						<div class="social-media-holder">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

			<div class="container">
				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

	<div class="mobile-holder-logo-btn">
		<div class="mobile-logo-holder">
			<a href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="The Backbeach Logo">
			</a>
		</div>
		<div class="mobile-reservation-btn">
			<a href="#">Make a Reservation</a>
		</div>
	</div>

</div>
