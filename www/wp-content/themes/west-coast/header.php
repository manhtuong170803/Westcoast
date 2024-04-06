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
					<i class="fa fa-location-arrow"></i><input type="text" 
						id="header-product-autocomplete-input" onKeyUp="headerProductKeyup(this);" 
						placeholder="Type your suburb here">
					<ul id="header-product-autocomplete-list">

			 		</ul>
				</div>
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
		<!-- ******************* The Navbar Area ******************* -->
		<!-- <header id="wrapper-navbar">

			<a class="skip-link <?php //echo understrap_get_screen_reader_class( true ); ?>" href="#content">
				<?php //esc_html_e( 'Skip to content', 'understrap' ); ?>
			</a>

			<?php //get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

		</header> -->
	</div>
	<div id="quick-select-bin">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="steps">
						<div class="step one active">
							<div class="title">
								<div class="title-icon">
									<i class="fa fa-arrow-circle-up"></i>
								</div><strong></strong>
								Step 1: <strong>Suburb Selected, Bunbury</strong>
							</div>
							<div class="icon">
							<i class="fa fa-check-circle"></i>
							</div>
						</div>
						<div class="step two">
							<div class="title">
								<div class="title-icon">
									<i class="fa fa-arrow-circle-down"></i>
								</div>
								Step 2: <strong>Select the skip that suits your needs</strong>
							</div>
							<div class="icon">
							<i class="fa fa-check-circle"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-lg-1 col-lg-4">
					<div class="price-info">
						All prices below reflect the price you will pay to hire a
						skip-bin from West Coast Waste for 7 days, delivered to your door.
					</div>
				</div>
			</div>
			<div class="quick-select-all-bins">
				<div class="row">
					<?php
						$args = array(
							'post_type' => 'product',
							'orderby' => 'title',
							'order' => 'ASC',
							'product_cat' => 'Bin',
							'posts_per_page' => 4
						);
						$index = 0;
						$loop = new WP_Query($args);
						while($loop->have_posts() ) : $loop->the_post;
						
						global $product;
						$index++;
						$varitation_html= "";
						if ($product->is_type('variable')){
							$vailable_variations = $product->get_available_variations();
							foreach ($vailable_variations as $variations) {
								$attribute_depo = $variations['attributes']['attribute_depo'];
								$attribute_distance = $variations['attributes']['attribute_distance'];
								$price_html = $variations['price_html'];
								// $variations_html .= <div
								// 						class='depo-price'
								// 						data-productid='$product->id'
								// 						data-depo='$attribute_depo'
								// 						data-distance='$attribute_distance'>";"
								// $variations_html .= $price_html;
								// $variations_html .= </div>;

							}
						}
					?>
					<div class="col-lg-3">
						<a 
							href="#" 
							class="quick-select-bin"
							onClick="headereProductToCart(this);"
							data-product="<?php echo $product->id; ?>"
							data-distance=""
							data-depo=""
						>
							<div class="title">
								<?php the_title();?>
								4m3 Skip Bin
							</div>
							<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');?>
							<img src="<?php echo $image[0];?>" alt="<?php the_field('full_title'); ?>">
							<div class="price">
								<?php echo $product->get_price_html();?>
								$100
							</div>
							<div class="hire">
								Up to 7 Day Hire inc. GST
							</div>
							<div class="meta-info">
								<div class="info">
									<div>
										<img src="<?php echo get_template_directory_uri();?>/img/trailer.svg" alt="Product Trailer" width=100%>
									</div>
									x <?php the_field('approx_trailer');?> 
								</div>
								<div class="spacer"></div>
								<div class="info">
									<div>
										<img src="<?php echo get_template_directory_uri();?>/img/home-bin.svg" alt="Product home bin" width=66%>
									</div>
									x <?php the_field('approx_bin');?>
								</div>
							</div>
							<div class="quick-button">
								ORDER THIS SKIP BIN
							</div>
						</a>
					</div>
					<?php endwhile;?>
					<?php wp_reset_query();?>
				</div>
			</div>
		</div>
	</div>
</div>
