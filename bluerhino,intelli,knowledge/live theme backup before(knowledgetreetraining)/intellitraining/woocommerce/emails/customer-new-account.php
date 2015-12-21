<?php
/**
 * Customer new account email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading ); ?>

<p><?php printf( __( "Thanks for creating an account on %s. Your username is <strong>%s</strong>.", 'woocommerce' ), esc_html( $blogname ), esc_html( $user_login ) ); ?></p>

<?php if ( get_option( 'woocommerce_registration_generate_password' ) == 'yes' && $password_generated ) : ?>

	<p><?php printf( __( "Your password has been automatically generated: <strong>%s</strong>", 'woocommerce' ), esc_html( $user_pass ) ); ?></p>

<?php endif; ?>
<?php $home_url =  get_site_url();
$redirect_url = $home_url."/myintelli/";
$req_link = '<a href="'.$redirect_url.'">'.$redirect_url.'</a>';
?>
<p><?php // printf( __( 'You can access your account area to view your orders and change your password here: %s.', 'woocommerce' ), wc_get_page_permalink( 'myaccount' ) );

printf( __( 'You can access your account area to view your orders and change your password here: %s.', 'woocommerce' ), $req_link ); ?></p>


<?php do_action( 'woocommerce_email_footer' ); ?>
