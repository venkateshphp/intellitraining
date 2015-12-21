<?php 
@ob_start();
@session_start();

global $post,$wpdb;

/*********

Template Name: Template For User Login


*********/

get_header(); ?>
<div class="container">
  <div class="wrapper">
    		<div class="whole-outer">
			<div class="our-clients-outer">
			
					 <div class="main-bd">
					<h1><?php
					$post_title =  get_post_meta( $post->ID, 'page_custom_title', true );
					if($post_title) {
					echo $post_title;
					}else{
					 echo get_the_title();
					}
					?></h1>
				</div><!--main-bd-->

		<div class="menu-slide">
		
					<div class="user_reg">
			<form method="post" action="" id="loginForm">
				<div class="one_row"><div class="one_coloumn"><span>UserName: </span></div><div class="one_coloumn"><input type="text" id="username" name="username" placeholder="Username"/></div></div>
				<div class="one_row"><div class="one_coloumn"><span>Password: </span></div><div class="one_coloumn"><input type="password" id="password" name="password" placeholder="Password"/></div></div>
				<div class="one_row"><div class="one_coloumn"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span></div><div class="one_coloumn"><input type="submit" name="user_login" value="Log In" /></div></div>
								<div class="one_row"><div class="one_coloumn"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span></div><div class="one_coloumn"><a href="<?php  echo bloginfo('siteurl')."/register"; ?>">New customer</a></div></div>

						</form>

				<?php
				
if(isset($_POST['user_login'])) {
//for login action
$user_name = $_POST['username'];
$password_login= $_POST['password'];
$user_ID = username_exists( $user_name );
$check = wp_authenticate_username_password( NULL, $user_name, $password_login );
if(is_wp_error( $check )){ ?> 
<div class="error1"><?php echo 'Please Check Your Login Details';?></div><?php
 } else { 

$username  = $user_name;
auto_login($username);
	$home_url =  get_site_url();
	header("Location:".$home_url);
//added new end

 	}
 }
 ?>
			</div>
			
				</div><!--menu-slide-->
							</div><!--our-clients-outer-->
																  <?php include(TEMPLATEPATH."/sidebar.php");?>

			</div><!--whole-outer-->

		</div><!-- wrapper -->
	</div><!-- container -->
<?php get_footer(); ?>