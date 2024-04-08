<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="row" id="customer_details">
			<div class="col-12 col-md-6">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>

			<div class="col-12 col-md-6">
				<h3 id="order_review_heading"><?php esc_html_e( 'Cart Summary', 'woocommerce' ); ?></h3>
				<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
				<div id="order_review" class="woocommerce-checkout-review-order">
					<?php do_action( 'woocommerce_checkout_order_review' ); ?>
				</div>
				<div class="woocommerce-checkout-acceptable-waste">
					<h3>Acceptable Waste</h3>
					<p>Owing to envirommental obligations, we can only accpet certain waste products in our skip bins.</p>
					<ul>
						<li><i class="fa fa-check-circle"></i>Sand</li>
						<li><i class="fa fa-check-circle"></i>Rubble</li>
						<li><i class="fa fa-check-circle"></i>Bricks</li>
						<li><i class="fa fa-check-circle"></i>Timer</li>
						<li><i class="fa fa-check-circle"></i>Plastics</li>
					</ul>
					<ul>
						<li><i class="fa fa-check-circle"></i>Cardboard</li>
						<li><i class="fa fa-check-circle"></i>Paper</li>
						<li><i class="fa fa-check-circle"></i>Steel</li>
						<li><i class="fa fa-check-circle"></i>Furnture</li>
						<li><i class="fa fa-check-circle"></i>Green Waste</li>
					</ul>
					<ul class="not-allowed">
						<li><i class="fa fa-check-circle"></i>Sand</li>
						<li><i class="fa fa-check-circle"></i>Rubble</li>
						<li><i class="fa fa-check-circle"></i>Bricks</li>
						<li><i class="fa fa-check-circle"></i>Timer</li>
						<li><i class="fa fa-check-circle"></i>Plastics</li>
					</ul>
				</div>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>	

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php
do_action( 'woocommerce_after_checkout_form', $checkout );
