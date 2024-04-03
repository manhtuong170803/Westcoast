<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="page-header-holder">
	<div class="container">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>');?>
		</header>
	</div>
</div>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div class="col-lg-7">
				<main class="site-main" id="main">

					<?php
					if ( have_posts() ) {
					?>

					<div class="row">
						<?php
							// Start the loop.
							while ( have_posts() ) {
						?>
						<div class="col-lg-6">
								<?php
									the_post();
									get_template_part( 'loop-templates/content', get_post_format() );
								?>
						</div>
						<?php
							}
							} else {
								get_template_part( 'loop-templates/content', 'none' );
						}
						?>
					</div>

				</main>
			</div>
			<div class="offset-lg-1 col-lg-4">
				<div class="right-sidebar-blog-categories">
					<h3>Blog Categories</h3>
					<ul>
						<?php
							$categories = get_categories();
							foreach($categories as $category){
								echo '<li><a href="'.get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
							}
						?>
					</ul>
				</div>
			</div>

		</div><!-- .row -->
		<div class="post-navigation-options">
			<?php understrap_post_nav();?>
		</div>

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
