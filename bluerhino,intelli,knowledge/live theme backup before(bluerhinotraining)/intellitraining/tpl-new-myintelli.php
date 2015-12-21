<?php  
@ob_start();
@session_start();

global $post,$wpdb;
/*********

Template Name: New My Intelli Page


*********/
//new MyIntelli Page
get_header(); 

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

wc_print_notices();

$home_url =  get_site_url();

 ?>
 <!-- Login Section -->
        <section id="Pricing" class="ptb ptb-sm-80">
            <div class="container">
            <h3>MyIntelli</h3>
										<?php  if (is_user_logged_in() ) { ?>

           <P>
		   <?php
							printf(
							__( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ',
							$current_user->display_name,
							wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) )
							);
							printf( __( 'From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <a href="%s">edit your password and account details</a>.', 'woocommerce' ),
							wc_customer_edit_account_url()
							);?> 
							<!--<strong>Hello admin</strong> (not admin? Signout). From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <strong>edit your password and account details.</strong>
-->							
							</P>
							<?php } ?>
            
  <div class="row gap30">
                    <div class="col-md-6">
					 							<?php  if (is_user_logged_in() ) { ?>

                        <div class="border-box">
  <?php 
	$redirect_url = $redirect_url."/my-account/";
	?>                        
                        <p style="text-align:center;" class="for_align_center">
                            <a href="<?php echo $redirect_url;?>"><button class="btn btn-lg btn-color-b">My Account<i class="fa fa-cog right"></i></button></a>
                        </p>
                        </div>
						
						<?php }else{ ?>
						
						<div class="border-box">
                            <h5>Already registered?</h5>
			<form method="post" action="" id="login_form" class="login_form" name="login_form">
                                <div class="form-field-wrapper">
                                    <label for="login-email">Email address</label>
                                    <input type="text" required="" placeholder="Enter your Email or Username" name="email" id="email" class="input-sm form-full email" aria-required="true">
                                </div>
                                <div class="form-field-wrapper">
                                    <label for="login-pass">Password</label>
                                    <input type="password" required="" placeholder="Enter your Password" name="password" id="password" class="input-sm form-full password" aria-required="true">
                                </div>
                                <button name="submit" id="login_sub" type="button" class="btn btn-md btn-black login_sub">Sign In</button>
							<?php 
							$home_url =  get_site_url();
							$redirect_url_for_lostpassword = $redirect_url."/my-account/lost-password/";
							?>
                                <a href="<?php echo $redirect_url_for_lostpassword;?>" class="float-right">Forgot password?</a>
							<div class="error1"></div>
							<div class="success_msg"></div>
                            </form>
						

                        </div>
						<?php } ?>
						
                    </div>
                    <div class="col-md-6">
                        <div class="border-box">
  <?php $elearning_link = get_option('elearning_link'); 
	$elearning_link_text = get_option('elearning_link_text');
	?>                            
                        <p style="text-align:center;" class="for_align_center">
                             <a href="<?php echo $elearning_link;?>"><button class="btn btn-lg btn-black"><?php if($elearning_link_text){echo $elearning_link_text;}else{?>Launch e-learning zone<?php } ?><i class="fa fa-cog right"></i></button></a>
                        </p>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                <div class="well gap30">
                <h5>Need help?</h5>
                <hr>
                <p class="gap30">
				<?php 
$need_help = get_option('need_help');
if($need_help){
echo $need_help;	
}else{
?>
				If you are in the UK and wish to book a course or enquire about our training, please call the number below or email info@intellitraining.co.uk</p>

<p>If you have any technical issues with your account or login to My.Intelli website, please email webmaster@intellitraining.co.uk
<?php } ?>
</p>
                </div>
            </div>
        </section>
        <!-- End Login Section -->


<?php 
get_footer();
?>
