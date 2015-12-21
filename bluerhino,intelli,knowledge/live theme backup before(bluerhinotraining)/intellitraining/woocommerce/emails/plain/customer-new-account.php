<?php
/**
 * Customer new account email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails/Plain
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

echo "= " . $email_heading . " =\n\n";

echo sprintf( __( "Thanks for creating an account on %s. Your username is <strong>%s</strong>.", 'woocommerce' ), $blogname, $user_login ) . "\n\n";

if ( get_option( 'woocommerce_registration_generate_password' ) === 'yes' && $password_generated )
	echo sprintf( __( "Your password is <strong>%s</strong>.", 'woocommerce' ), $user_pass ) . "\n\n";


$home_url =  get_site_url();
$redirect_url = $home_url."/myintelli/";
$req_link = '<a href="'.$redirect_url.'">'.$redirect_url.'</a>';

echo sprintf( __( 'You can access your account area to view your orders and change your password here: %s.', 'woocommerce' ), $req_link ) . "\n\n";

echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );
