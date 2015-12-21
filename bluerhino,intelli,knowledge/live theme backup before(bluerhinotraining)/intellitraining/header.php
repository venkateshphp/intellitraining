<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="language" content="en" />
<meta name="format-detection" content="telephone=no">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="nileforest">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<?php /*?><title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title><?php */?>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) {} ?> <?php bloginfo('name'); ?></title>

<!-----------------------------------
Added For New For Bootstrap Design Start
-------------------------------------->

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!--added for bootstrap accordion start-->
<!--added for bootstrap accordion end-->

<!-----------------------------------
Added For New For Bootstrap Design End
-------------------------------------->


<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
<?php /*?><?php if ( !is_page(4) ) {?><?php */?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php /*?><?php } ?><?php */?>
<!--for owl js and css Start -->
<!--Added For GridList View Start-->
<!--Added For GridList View End-->


<!--for owl js and css End -->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body class="full-intro">
<?php 
$home_url =  get_site_url();

?>

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Sidemenu -->
	 							
    <section class="side-menu cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
	
        <a class="menu-close toggle-menu menu-right push-body"><i class="ion ion-android-close"></i></a>
		
		<?php  if (is_user_logged_in() ) { ?>
								<h5 class="white add-margin-top">You ALready Looged in </h5>
<?php }else {?>

        <h5 class="white">Log In</h5>
		
			
                <hr>
				
        <div class="sign-in">
		
		<?php /*?><?php
	
	$args = array(
	'echo' => true,
	'redirect' => $redirect_url_my_account,
	'form_id' => 'loginForm',
	'label_username' => __( '' ),
	'label_password' => __( '' ),
	'label_log_in' => __( 'LOGIN IN' ),
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
	<?php if(isset($_GET['login'])){
			$login_value = $_GET['login'];
			?>
			<div class="error1"><?php echo 'Please Check Your Login Details';?></div>
			<?php } ?><?php */?>
			<?php 
	$redirect_url = $home_url."/my-account/";
    $redirect_url_forget_password = $home_url."/my-account/lost-password/";

	?>
			<form method="post" action="" id="login_form" class="login_form" name="login_form">
            <input class="input-sm form-full" type="text" aria-required="true" id="email" name="email" placeholder="Email" value="" />
            <input class="input-sm form-full" type="password" aria-required="true" id="password" name="password" placeholder="Password" value="" />
            <input type="button" class="btn btn-md btn-color-b form-full" id="login_sub" value="Login In" />
			</form>
						<div class="error1"></div>
						<div class="success_msg"></div>

				<h7 class="text-centre"><a data-target="#myModal" data-toggle="modal" href="<?php echo $redirect_url_forget_password;?>">Forget your Password ?</a></h7>

            <a>New Customer?</a>
        </div>
  <?php } ?>
      
    </section>
    <!--End Sidemenu -->
    

    <!-- Site Wraper -->
    <div class="wrapper">

        <!-- HEADER -->
        <header class="header">
            <div class="container">

                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo $home_url;?>">
<?php					
$site_logo = get_option('site_logo');
if($site_logo) {?>

                        <img class="l-black" src="<?php echo $site_logo; ?>"<?php /*?> height="81" width="275"<?php */?> />
                        <img class="l-white" src="<?php echo $site_logo; ?>" <?php /*?>height="81" width="275" <?php */?> />
                        <img class="l-color" src="<?php echo $site_logo; ?>" <?php /*?>height="81" width="275"<?php */?>  />
						
						<?php /*?> <img class="l-black" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" />
                        <img class="l-white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" />
                        <img class="l-color" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" /><?php */?>
<?php }else{ ?>	
                        <img class="l-black" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" />
                        <img class="l-white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" />
                        <img class="l-color" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" />
<?php } ?>					
                    </a>
                </div>
                <!--End logo-->

                <!-- Rightside Menu (Search, Cart, Bart icon) -->
                <div class="side-menu-btn">
                    <ul>
                    
                        <!--Sidebar Menu Icon-->
                        <li class="">
                            <a class="right-icon bar-icon toggle-menu menu-right push-body"><i class="fa fa-bars"></i></a>
							
						<?php	global $woocommerce;
$add_cart_count=sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); 
$cart_page_url=$woocommerce->cart->get_cart_url();
	   //added new for cart product count end  
?>
<a class="cart_icon" href="<?php echo $cart_page_url;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cart-icon-new.png" alt="">
<span class="cart_count"><?php echo $add_cart_count;
 ?></span></a>
                        </li>
                        <!-- End Sidebar Menu Icon-->
                    </ul>
                </div>
                <!-- End Rightside Menu -->

                <!-- Navigation Menu -->
                <nav class='navigation'>
										<?php if ( has_nav_menu( 'primary' ) ) { wp_nav_menu(array('menu'=>'primary-menu','menu_class'=> '','container' => '')); } ?>		

                    <?php /*?><ul>
                        <li><a href="#">Home</a></li>
                         <li><a href="#">WHY JOIN</a></li>

                        <li class="nav-has-sub">
                            <a> ABOUT us  </a>
                            <!-- Nav Dropdown -->
                            <ul class="nav-dropdown">
                        <li><a href="#">Page 1</a></li>
                              <li><a href="#">Page 1</a></li>
                              <li><a href="#">Page 1</a></li>
                              <li><a href="#">Page 1</a></li>
                               <li><a href="#">Page 1</a></li>
                                <li><a href="#">Page 1</a></li>

                               
                            </ul>
                            <!-- End Nav Dropdown-->
                        </li>
                        <li><a class="right-icon bar-icon toggle-menu menu-right push-body">Login</a></li>
                          <li><a href="#">Contact Us</a></li>
                        
                        
                        
                    </ul><?php */?>
                </nav>
                <!--End Navigation Menu -->

            </div>
        </header>
        <!-- END HEADER -->

<!--For SEO Purposes Start-->

	<div class="for_seo" style="display:none;">

		<div itemscope itemtype="http://schema.org/LocalBusiness">

		<span itemprop="name"><?php echo $seo_name; ?></span>

		<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

		<span itemprop="streetAddress"><?php echo $seo_streetAddress; ?></span>

		<span itemprop="addressLocality"><?php echo $seo_addressLocality; ?></span>,

		<span itemprop="addressRegion"><?php echo $seo_addressRegion; ?></span>

		<span itemprop="postalCode"><?php echo $seo_postalCode; ?></span>

		</div>

		<span itemprop="telephone"><?php echo $seo_telephone; ?></span>

		</div>



		<div class="rating" itemscope itemtype="http://schema.org/Product">

		<span itemprop="name"><?php echo $seo_aggregate_name; ?></span>

		<span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">

		<span itemprop="ratingValue">	

		<?php echo $seo_ratingValue; ?></span> <span itemprop="bestRating"><?php echo $seo_bestRating; ?></span> <span itemprop="reviewCount">	

		<?php echo $seo_reviewCount; ?></span> <a >reviews</a>

		</span>

		</p>

		</div>

		

		

	</div><!--for_seo-->

<!--For SEO Purposes End-->
        <!-- CONTENT --------------------------------------------------------------------------------->
		 

<?php if((!is_front_page())&&(!is_tax('product_cat'))){?>
        <!-- Intro Section -->
		
		<?php
	
$feature_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
if(!$feature_image_url){
?>
        <section class="inner-intro inner-intro-small">
<?php }else if(!is_tax('product_cat')){ ?>
		    <section class="inner-intro overlay-dark light-color parallax parallax-background2" style="background-position: left 0px;background-image: url('<?php echo $feature_image_url[0];?>');">
<?php } ?>
            <div class="container">
                <div class="row title">
                    <?php /*?><h2 class="h2 whitecolor"><?php echo get_the_title($post->ID);?></h2><?php */?>
                    <h1 class="h2 whitecolor"><?php echo get_the_title($post->ID);?></h1>		
                    <div class="page-breadcrumb">
						<a href="<?php echo get_option('siteurl');?>" title="Go to ." property="v:title" rel="v:url">Home</a>  /
						<?php if(function_exists('bcn_display'))
						{
						bcn_display();
						}?>
                        <!--<a>Home</a>/<span>Login</span>-->
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->
		<?php  } ?>
