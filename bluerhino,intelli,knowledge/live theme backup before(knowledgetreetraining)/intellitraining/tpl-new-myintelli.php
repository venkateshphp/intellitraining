<?php  
@ob_start();
@session_start();

global $post,$wpdb;
/*********

Template Name: New My Intelli Page


*********/
//new MyIntelli Page
get_header(); 

?> 
<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

wc_print_notices();

 ?>
	
  <div class="clearfix"></div>
  <?php 
  	$home_url =  get_site_url();

?>


<h3><!--MyIntelli--><?php echo get_the_title();?></h3>
<!--For Show Statement After Login Start-->
							<?php  if (is_user_logged_in() ) { ?>
 <p>
 	<?php
							printf(
							__( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ',
							$current_user->display_name,
							wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) )
							);
							printf( __( 'From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <a href="%s">edit your password and account details</a>.', 'woocommerce' ),
							wc_customer_edit_account_url()
							);?>
<!--
<strong>Hello admin </strong>(not admin? Signout). From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <strong>edit your password and account details.</strong>-->
</p>
							<?php } ?>
						<!--For Show Statement After Login End-->
							

<hr>
    
    <div class="clearfix"></div>
	<?php 
	$redirect_url = $redirect_url."/my-account/";
	?>
 <div class="row margintop45">
 							<?php  if (is_user_logged_in() ) { ?>
        <div class="col-md-6 col-sm-8">
            <div class="reg-page" align="center">
        <a href="<?php echo $redirect_url;?>" class="btn btn-success margintop200">My Account</a>
        </div>
    </div>
							<?php } ?>
							
							<?php  if (!is_user_logged_in() ) {
						?>
						<div class="col-md-6 col-sm-8">
            <div class="reg-page">
                <div class="reg-header">            
                    <h4 align="center">Login </h4>
                </div>
                <hr>
           <p>

Please use the form below to sign in. 
<a href="create-account.html"><strong>Click Here</strong></a></p>
                <hr>
<!--     
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username or email" kl_virtual_keyboard_secure_input="on">
                </div>                    
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                    <input type="text" class="form-control" placeholder="Password" kl_virtual_keyboard_secure_input="on">
                </div>                    

                <div class="row">
                
            
                    <div class="col-md-3">
                        <button type="submit" class="btn-u">Login</button>                        
                    </div>
                </div>
-->	<?php
	
	$args = array(
	'echo' => true,
	'redirect' => $redirect_url_my_account,
	'form_id' => 'loginForm',
	'label_username' => __( '' ),
	'label_password' => __( '' ),
	'label_log_in' => __( 'Log In' ),
	'id_username' => 'username',
	'id_password' => 'password',
	'id_submit' => 'wp-submit',
	'remember' => false,
	'value_username' => NULL,
	'value_remember' => false );
	wp_login_form($args);
	
	$home_url =  get_site_url();
	$redirect_url_for_myaccount = $redirect_url."/my-account/lost-password/";
	?>
                <hr>

                <h7 class="text-centre"><a data-target="#myModal" data-toggle="modal" href="<?php echo $redirect_url_for_myaccount;?>">Forget your Password ?</a></h7>
			<?php if(isset($_GET['login'])){
			$login_value = $_GET['login'];
			?>
			<div class="error1"><?php echo 'Please Check Your Login Details';?></div>
			<?php } ?>
            </div>  
            
           
            
                      
        </div>
									<?php }?>
        
      
	<?php $elearning_link = get_option('elearning_link'); 
	$elearning_link_text = get_option('elearning_link_text');
	?>
	    <div class="col-md-6 col-sm-8">
          <div class="reg-page" align="center">
        <a href="<?php echo $elearning_link; ?>" class="btn btn-danger margintop200" target="_blank"><?php if($elearning_link_text){ echo $elearning_link_text;}else{?>e-learning zone<?php } ?><!--Launch e-learning zone--></a>
        </div>
    </div>
	
	
    </div>
    
    
    <p ><strong>Need help?</strong><br>
        <hr>
<?php 
$need_help = get_option('need_help');
if($need_help){
echo $need_help;	
}
?>
<!--If you are in the UK and wish to book a course or enquire about our training, please call the number below or email <a href="mailto:info@intellitraining.co.uk">info@intellitraining.co.uk</a><br><br>

If you have any technical issues with your account or login to My.Intelli website, please email <a href="mailto:webmaster@intellitraining.co.uk">webmaster@intellitraining.co.uk</a>--></p>
  
  </div>
    <!--main-content-end-->
    
    
    
    <div class="clearfix"></div>
   







<?php 
get_footer();
?>
