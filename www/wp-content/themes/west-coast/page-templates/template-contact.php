<?php
/**
 * Template Name: Template Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>
<div class="page-header-holder">
	<div class="container">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>');?>
		</header>
	</div>
</div>

<div class="wrapper template-contact-us" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

            <div class="col-lg-6">
				<main class="site-main" id="main" role="main">
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main>
            </div>
            <div class="offset-lg-1 col-lg-5">
				<div class="iframe-holder">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13331.118043945131!2d
                    115.689808!3d-33.3507097!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a31e25ce15611a5%3A0xc8e04c2e2e970369
                    !2sWest%20Coast%20Waste!5e0!3m2!1svi!2s!4v1712072811423!5m2!1svi!2s" width="100%" height="100%" style="border:0;" 
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="iframe-holder">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13331.118043945131!2d
                    115.689808!3d-33.3507097!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a31e25ce15611a5%3A0xc8e04c2e2e970369
                    !2sWest%20Coast%20Waste!5e0!3m2!1svi!2s!4v1712072811423!5m2!1svi!2s" width="100%" height="100%" style="border:0;" 
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="iframe-holder">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13331.118043945131!2d
                    115.689808!3d-33.3507097!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a31e25ce15611a5%3A0xc8e04c2e2e970369
                    !2sWest%20Coast%20Waste!5e0!3m2!1svi!2s!4v1712072811423!5m2!1svi!2s" width="100%" height="100%" style="border:0;" 
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
			</div>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
