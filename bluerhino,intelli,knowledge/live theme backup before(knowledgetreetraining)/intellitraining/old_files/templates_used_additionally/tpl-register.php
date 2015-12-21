<?php 
@ob_start();
@session_start();
/*********

Template Name: Template For User Registration


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
			<form method="post" action="" id="signupForm">
				<div class="one_row"><div class="one_coloumn"><span>UserName: </span></div><div class="one_coloumn"><input type="text" id="username" name="username" placeholder="Username"/></div></div>
				<div class="one_row"><div class="one_coloumn"><span>Email Id: </span></div><div class="one_coloumn"><input type="text" id="email" name="email" placeholder="Email Id"/></div></div>
				<div class="one_row"><div class="one_coloumn"><span>Password: </span></div><div class="one_coloumn"><input type="password" id="password" name="password" placeholder="Password"/></div></div>
				<div class="one_row"><div class="one_coloumn"><span>Confirm Password: </span></div><div class="one_coloumn"><input type="password" id="confirm_pass" name="confirm_pass" placeholder="Confirm Password"/></div></div>
							<div class="error1"><?php
							if(isset($_GET['user_exists'])){
							 echo 'User Already Exists.Try Agin With Another Mail ID.';
							 } ?>	</div>

				<div class="one_row"><div class="one_coloumn"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span></div><div class="one_coloumn"><input type="submit" name="user_register" value="Sign Up" /></div></div>
												<div class="one_row"><div class="one_coloumn"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span></div><div class="one_coloumn"><a href="<?php  echo bloginfo('siteurl')."/login"; ?>">Login</a></div>
</div></div>

		</form>
				<?php if(isset($_POST['user_register'])){
		
		$email= $_REQUEST['email'];
	$username = $_REQUEST['username'];
	$repeat_password= $_REQUEST['confirm_pass'];
	if( email_exists( $email )) {
	
		if ( wp_get_referer() )
{
 $previous_page_url = wp_get_referer();
 $msg = "User Already Exists.Try Agin With Another Mail ID.";
 $redirect_url = $previous_page_url."?user_exists=".urlencode($msg);
    wp_safe_redirect( $redirect_url );
}
	   } else {
	$userdata = array(
		'user_login'    =>  $username,
		'user_pass'  => $repeat_password,
		'user_email'  => $email,
		'display_name '  => $username,
	);
	$user_id = wp_insert_user( $userdata ) ;
	
	$to = $email;
	$admin_email = get_option( 'admin_email' );
				$subject = 'Intelli-training';
				$message = '<html>
							<head>
							<title>Intelli-training</title>
							</head>
							<body>
							<div style="background:#EEEEEE; width:748px; padding:25px;">
								<table align="center" border="0" cellpadding="4" cellspacing="4">
									<tr>
										<td align="center" style="padding:0;">
											<table style="background:#FFF; padding:25px; margin:0 0 15px 0; color:#000000;border:5px solid #626262;">	
												<tr style="margin-bottom:5px; float:left; width:100%;">
													<td width="450" valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif;">A New User registered in Intelli-training. Their details are as follows : </font></td>
												</tr>
												<tr style="margin-bottom:5px; float:left; width:100%;">
													<td width="110" valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif;"><strong>Email ID</strong> </font></td>
													<td valign="top">:</td>
													<td valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif;"> '.$email.' </font></td>
												</tr>
												<tr style="margin-bottom:5px; float:left; width:100%;">
													<td width="110" valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif;"><strong>UserName</strong> </font></td>
													<td valign="top">:</td>
													<td valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif;"> '.$username.' </font></td>
												</tr>
												<tr style="margin-bottom:5px; float:left; width:100%;">
													<td width="110" valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif;"><strong>Password</strong> </font></td>
													<td valign="top">:</td>
													<td valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif;"> '.$repeat_password.' </font></td>
												</tr>
												<tr>
													<td style="border-bottom:1px dotted #cccccc;" colspan="3" valign="top"></td>
												</tr>
											</table>
										</td>
									</tr>	
								</table>
							</div>
							</body>
							</html>';
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From:Intelli-training <'.$admin_email .'>' . "\r\n";
				$headers .= 'Reply-To: '.$admin_email. "\r\n"; 
	wp_mail ( $to, $subject, $message, $headers, '');
	
	
auto_login($username);
	$home_url =  get_site_url();
	header("Location:".$home_url);
	
		}
		}
?>
			</div>
				</div><!--our-clients-outer-->
													  <?php include(TEMPLATEPATH."/sidebar.php");?>

			</div><!--whole-outer-->
			
				</div><!--menu-slide-->
		</div><!-- wrapper -->
	</div><!-- container -->
<?php get_footer(); ?>