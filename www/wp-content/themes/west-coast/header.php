<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
<div id="wrapper-navbar">
	
	<div class="top-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<div class="mobile-holder-logo">
						<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo">
					</a>
					</div>
				</div>
				<div class="col-lg-7 col-md-6">
					<div class="top-header-contact">
						<a href="tel:1800927831"><i class="fa fa-phone"></i> 1800 927 831</a>
						<a href="mailto:info@westcoastwaste.com.au" class="top-header-contact-email"><i class="fa fa-envelope-o"></i> info@westcoastwaste.com.au</a>
						<div class="mobile-menu-dropdown">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdow"
							aria-controls="navbarNavDropdow" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation',
							'understrap' );?>">
							<span>Menu</span><i class="fa fa-bars"></i>
						</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<nav id= "main-nav" class="navbar navbar-expand-xl navbar-dark" aria-labelledby="main-nav-label">
		<div class="container">

			<div class="search-input-holder">
				<div class="title">Quote:</div>
				<input type="text" placeholder="Type your suburb here">
			</div>
			<div class="mobile-menu-dropdown">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdow"
				aria-controls="navbarNavDropdow" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation',
				'understrap' );?>">
				<span>Menu</span><i class="fa fa-bars"></i>
			</button>
			</div>

			<?php 
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class'  => 'collapse navbar-collapse',
					'container_id'  => 'navbarNavDropdown',
					'menu_class'  => 'navbar-nav ml-auto',
					'fallback_cb'  => '',
					'menu_id'  => 'main-menu',
					'depth'  => 2,
					'walker'  => new Understrap_WP_Bootstrap_Navwalker(),
				)
			); 
			?>
		</div>
	</nav>
 </div>


	<!-- ******************* The Navbar Area ******************* -->
	<!-- <header id="wrapper-navbar">

		<a class="skip-link <?php //echo understrap_get_screen_reader_class( true ); ?>" href="#content">
			<?php //esc_html_e( 'Skip to content', 'understrap' ); ?>
		</a>

		<?php //get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header> -->
