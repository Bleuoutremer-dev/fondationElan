<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices(); ?>

<style>
	.woocommerce form .form-row-first, .woocommerce form .form-row-last, .woocommerce-page form .form-row-first, .woocommerce-page form .form-row-last{
		width:100%;
	}
	span.woocommerce-input-wrapper{
		width:80%;
	}
	.woocommerce form .form-row label{
		width:100%;
	}

	.address-field .select2-container--default:first-of-type{
		opacity:0;
		position:absolute;
		z-index: -1;
	}
	.woocommerce-checkout{
		font-family:'TTNormsPro-Regular';
	}
	.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{
		background-color:#56bc81;
		transition:all 0.3s;
		border-radius: 50px;
		display: block;
		height: 50px;
		text-transform: uppercase;
		font-family: "TTNormsPro-Regular";
		font-size:15px;
		width:300px;
	}
	.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{
		background-color:#000000;
	}
	.woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {
	    box-sizing: border-box;
	    width: 100%;
	    margin: 0;
	    outline: 0;
	    line-height: normal;
	    border-radius: 5px;
	    border: 1px solid black;
	    height: 35px;
	    padding: 1rem 0.5rem;
	}
	#customer_details h3{
		font-family:'NoeDisplay-Regular';
		font-size:40px;
		margin-top:2rem;
	}
	.woocommerce form .form-row textarea {
		height:250px;
	}
</style>

<!-- // do_action( 'woocommerce_before_checkout_form', $checkout ); -->

<section class="module_tab module_tabswimg bg_eggs" style="position:relative; padding:0; margin-bottom:3rem;">
	<div class="thebg" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boutique.jpg');">
      <div class="wrapper no-bg">
        <h2 class="title">Commande</h2>
      </div>      
    </div>
</section>


<div class="wrapper" style="padding:5rem 0;">
	<h2 style="padding:3rem 0 6rem; max-width:70%; margin:0 auto;font-size:40px; font-family:NoeDisplay-Regular";>Le prix affiché au total est un prix approximatif, le prix final vous sera divulgué lors de la pesée de votre commande chez le boucher</h2>
	<?php
	// If checkout registration is disabled and not logged in, the user cannot checkout
	if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
		echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
		return;
	}

	// filter hook for include new pages inside the payment method
	$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>

	<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">
		
	<div class="col2-set">
		<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

			<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
			<div class="col-lg-6 col-md-6 col-sm-12 float-left">
				
				<div id="customer_details">
					<?php do_action( 'woocommerce_checkout_billing' ); ?>
					<?php do_action( 'woocommerce_checkout_shipping' ); ?>
				</div>
		
				<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
		
				<?php /* <h3 id="order_review_heading" class="big title"><?php _e( 'Your order', 'woocommerce' ); ?></h3> */ ?>

		</div>
		<?php endif; ?>
		
		<div class="col-lg-6 col-md-6 col-sm-12 float-left">
			
			<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
		
			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>
		
			<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
		</div>
	</div>
</div>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
