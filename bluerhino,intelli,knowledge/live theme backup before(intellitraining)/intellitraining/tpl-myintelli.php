<?php  
@ob_start();
@session_start();

global $post,$wpdb;
/*********

Template Name: Template My Intelli Page


*********/
get_header(); 

?> 

<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

wc_print_notices();

 ?>
			<div class="container test">
				<div class="wrapper">
					<div class="venues_inner_bd no_margin">
						<h1><?php echo get_the_title();?></h1>
						<div class="whole-outer">
						
						<!--For Show Statement After Login Start-->
							<?php  if (is_user_logged_in() ) { ?>
							<p class="myaccount_user">
							<?php
							printf(
							__( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ',
							$current_user->display_name,
							wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) )
							);
							printf( __( 'From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <a href="%s">edit your password and account details</a>.', 'woocommerce' ),
							wc_customer_edit_account_url()
							);
							?>
							</p>
							<?php } ?>
						<!--For Show Statement After Login End-->
							
						<?php  if (!is_user_logged_in() ) {
						?>
									<div class="login_part">
									<span class="existing_cus">Existing Customer</span>
								<?php
								$home_url =  get_site_url();
								$redirect_url_my_account = $home_url."/my-account/";
								
								 $args = array(
								'echo' => true,
								'redirect' => $redirect_url_my_account,
								'form_id' => 'loginForm',
								'label_username' => __( 'Username or e-mail' ),
								'label_password' => __( 'Password' ),
								'label_remember' => __( 'Remember Me' ),
								'label_log_in' => __( 'Log In' ),
								'id_username' => 'username',
								'id_password' => 'password',
								'id_remember' => 'rememberme',
								'id_submit' => 'wp-submit',
								'remember' => true,
								'value_username' => NULL,
								'value_remember' => false );
								wp_login_form($args);
					
								$home_url =  get_site_url();
								$redirect_url_for_myaccount = $redirect_url."/my-account/lost-password/";
								?>
								<a class="forget_password" href="<?php echo $redirect_url_for_myaccount;?>">Forgot Password?</a>
								<?php if(isset($_GET['login'])){
								$login_value = $_GET['login'];
								 ?>
								<div class="error1"><?php echo 'Please Check Your Login Details';?></div>
								<?php } ?>
									</div><!--login_part-->
									
									<?php }else{
									$home_url =  get_site_url();
									$redirect_url = $redirect_url."/my-account/";
									 ?>
									<div class="elearningzone_part margin_right">
									<h1><a href="<?php echo $redirect_url;?>">My Account</a></h1>
									</div><!--elearningzone_part-->
									<?php } ?>
							<div class="elearningzone_part">
							<?php $elearning_link = get_option('elearning_link'); 
							$elearning_link_text = get_option('elearning_link_text');
							?>
							<h1 class="elearning_text"><a href="<?php echo $elearning_link; ?>" target="_blank"><?php if($elearning_link_text){ echo $elearning_link_text;}else{?>e-learning zone<?php } ?></a></h1>
							</div><!--elearningzone_part-->
							
							<div class="need_help_part">
								<?php 
								$need_help = get_option('need_help');
								if($need_help){
								echo $need_help;	
								}
								?>
							
							</div><!--need_help_part-->
						</div><!--whole-outer-->
					</div><!--venues_inner_bd-->
				</div><!--wrapper-->
			</div><!--container-->

<?php 
get_footer();
?>
