<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="language" content="en" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=0">
<meta name="format-detection" content="telephone=no">
<?php /*?><title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title><?php */?>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) {} ?> <?php bloginfo('name'); ?></title>
<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/fonts.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/data-table.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.flipster.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/meanmenu.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexisel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flipster.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/easyResponsiveTabs.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.meanmenu.js"></script>
<!--for owl js and css Start -->
<?php /*?><link href="<?php echo get_stylesheet_directory_uri(); ?>/js/owl-slider/docs.theme.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/owl-slider/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/owl-slider/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl-slider/owl.carousel.js"></script><?php */?>

<!--for owl js and css End -->

<script type="text/javascript">
//for header js 
var j = jQuery.noConflict();
j(document).ready(function() {
/*****************for mobile menu start**************/
j('header nav').meanmenu();
/*****************for mobile menu end***************/
/*****************For Responsive Start **********************/
 width = j(this).width();

//alert(width);
/*if (width <='1024') {

	j('.owl-carousel .owl-item').css('width','285px');
}

*//*****************For Responsive End **********************/
/********************Default checkbox checked Start************************/
j('#createaccount').prop({
  checked: true
});
j('#createaccount').prop({
  disabled: true
});

/*********************Default checkbox checked End************************/
/********************For Redirect Start************************/
<?php
$redirect_urls_values = get_option('redirect_urls');
$unserialize_redirect_urls_values = unserialize(base64_decode($redirect_urls_values));

$from_url_array = $unserialize_redirect_urls_values['from_url'];
$to_url_array = $unserialize_redirect_urls_values['to_url'];
if($from_url_array) {
foreach($from_url_array as $key => $values){
$from_url = $values;
$to_url = $to_url_array[$key];
if(($from_url!="")||($to_url!="")) {
?>
  if (window.location.hash == "<?php echo $from_url; ?>") {
        window.location = "<?php echo $to_url; ?>";
    }
<?php 
}
}
}
?>	
/********************For Redirect End************************/

//add place holder in myintelli login form start
j('p.login-username #username').attr("placeholder", "Username or e-mail");
j('p.login-password #password').attr("placeholder", "Password");

//add place holder in myintelli login form end
//new accordion
        // Child Tab
	j('#ChildVerticalTab_1').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true,
		tabidentify: 'ver_1', // The tab groups identifier
		activetab_bg: '#fff', // background color for active tabs in this group
		inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
		active_border_color: '#c1c1c1', // border color for active tabs heads in this group
		active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
	});
//SLIDER COOL START
j(".flipster").flipster({ style: 'carousel', start: 0 });
//SLIDER COOL END
/********************************************* For Cycle Slider Start  ******************************************/
j('#slide').cycle();
j('#owl-demo-mobile').cycle({
        fx: 'scrollLeft',
    prev: '.prev',
    next: '.next1'
 
    });
/*********************************************  For Cycle Slider End  ******************************************/
/******************************************  add class scroll for menu anchor tag Start  *******************************************/
 j('#menu-course-category-menu li a').addClass('scroll');
 /******************************************  add class scroll for menu anchor tag Start *******************************************/
/***********************    Smooth Scroll Start  ***********************/
 j(".faq_cat_title_tab").click(function(event) {
 var req_val = this.id;
 var req_val_after = req_val.split('_')[1];
    j(".faq_cat_title_tab").css("color", "#767676");
	    j("#id-val_"+req_val_after).css("color", "#237a00");
/*    j( ".each_accordion").fadeOut();
    j( "#faq_cat_"+req_val_after).fadeIn();*/
	  j( ".each_accordion").hide();
    j( "#faq_cat_"+req_val_after).show();
  });
 j(".scroll").click(function(event) {
  j('html,body').animate({ scrollTop: j(this.hash).offset().top }, 2000);
  });
 /***********************    Smooth Scroll End ***********************/ 
/********************   Faq Accordion Start ********************/
//load_show0
var myID = "";
myID = j('.load_show0').attr('id');
if(myID){
var check_after_split = myID.split('_')[1];
j( "#faq_cat_"+check_after_split).show();
j("#id-val_"+check_after_split).css("color", "#237a00");
}
    j( ".accordion" ).accordion({ 
	animate: {
        duration: 150
		}
    });
	//j( "#accordion" ).accordion();
	j( "#accordion" ).accordion({ 
	animate: {
        duration: 150
		}
    });
 /********************   Faq Accordion End ********************/
	//owl slider
	
	/****************************************** 	For Testimonial Slider In Home Page Start 	*******************************************/
	  var owl = j("#owl-demo");
      owl.owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
      });
      // Custom Navigation Events
     j(".next1").click(function(){
        owl.trigger('owl.next');
      })
      j(".prev").click(function(){
        owl.trigger('owl.prev');
      })
     j(".play").click(function(){
        owl.trigger('owl.play',1000);
      })
      j(".stop").click(function(){
        owl.trigger('owl.stop');
      })
	/****************************************** 	For Testimonial Slider In Home Page End 	*******************************************/
	/*************************************************  	For Testimonial Slider In Category Single Page Start 	**************************************************/
	   var owl_cat = j("#owl-cat-single");
      owl_cat.owlCarousel({
      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0;
      itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
      });
      // Custom Navigation Events
     j(".next_cat").click(function(){
        owl_cat.trigger('owl.next');
      })
      j(".prev_cat").click(function(){
        owl_cat.trigger('owl.prev');
      })
     j(".play").click(function(){
        owl_cat.trigger('owl.play',1000);
      })
      j(".stop").click(function(){
        owl_cat.trigger('owl.stop');
      })
	/************************************************* 	For Testimonial Slider In Category Single Page End 	**************************************************/
	/****************************************************** 	For Sidebar Slider In Single Course Category Page Start *********************************************************/
	  var owl_cat_sidebar = j("#owl-cat-single-sidebar");
      owl_cat_sidebar.owlCarousel({
      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0;
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      });
      // Custom Navigation Events
     j(".next_cat_sidebar").click(function(){
        owl_cat_sidebar.trigger('owl.next');
      })
      j(".prev_cat_sidebar").click(function(){
        owl_cat_sidebar.trigger('owl.prev');
      })
     j(".play").click(function(){
        owl_cat_sidebar.trigger('owl.play',1000);
      })
      j(".stop").click(function(){
        owl_cat_sidebar.trigger('owl.stop');
      })
	/****************************************************** 	For Sidebar Slider In Single Course Category Page End  	*********************************************************/
	/**************************** 		For Logos Slider Start 	****************************/
	j("#flexiselDemo2").flexisel({
	visibleItems: 5,
	autoPlay: false,
	enableResponsiveBreakpoints: true,
		responsiveBreakpoints: { 
			portrait: { 
			changePoint:480,
			visibleItems: 1
			}, 
			landscape: { 
			changePoint:640,
			visibleItems: 2
			},
			tablet: {	 
			changePoint:768,
			visibleItems: 3
			}
		}
	});
	/**************************** 		For Logos Slider End  	****************************/
	/************************************  		Validation For Signup Form Start 	**************************************/
	j("#signupForm").validate({
		rules: {
			username: {
			required: true,
			minlength: 2
			},
			password: {
			required: true,
			minlength: 5
			},
			confirm_pass: {
			required: true,
			minlength: 5,
			equalTo: "#password"
			},
			email: {	
			required: true,
			email: true
			},
		},
		messages: {
			username: {
			required: "Please enter a username",
			minlength: "Your username must consist of at least 2 characters"
			},
			password: {
			required: "Please provide a password",
			minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
			required: "Please provide a password",
			minlength: "Your password must be at least 5 characters long",
			equalTo: "Please enter the same password as above"
			},
			email: "Please enter a valid email address",
		}
	});
	/************************************ 		Validation For Signup Form End  	**************************************/
	/************************************ 		Validation For Login Form Start 	**************************************/
			j("#loginForm").validate({
			rules: {
				username: {
				required: true,
				},
				password: {
				required: true,
				}
			},
			messages: {
				username: {
				required: "Please enter a username/Email Id",
				},
				password: {
				required: "Please provide a password",
				},
			},
		});
	/************************************ 	Validation For Login Form Start  	**************************************/
	/************************************ 	For Hover Display Page Content Start 	**************************************/
	j('.menu_part ul li').mouseover(function() {
	j('.first').hide();
	var page_id = this.id;
	j(".single_page").hide();
	j(".control_width img").hide();
	j('.control_width').css ("width", "90%");
	j('.control_width').css ("z-index", "9999");
	j('#page_id1').removeClass("increase-width");
	j("."+page_id+"_content").show();
	j("#"+page_id +" img").show();
	j(this).css ("width", "110%");
	j(this).css ("z-index", "9999");
	});
	j('#page_id1').addClass("increase-width");
	j('#page_id1 img').show();
	/************************************ 	For Hover Display Page Content End 	**************************************/
	/************************************ 		For Product Filter Options Start 	**************************************/
    j(':checkbox:checked').prop('checked',false); //For remove the check box checked on page load
	j("ul.category-listing li input:checkbox").change(function() {
	j(".filtered_product_part").empty();
	 j('.filtered_product_part').html('<div id="mydiv"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" class="ajax-loader"></div>');
	var someObj = {};
	someObj.fruitsGranted = [];
	someObj.fruitsDenied = [];
	j("ul.category-listing li input:checkbox").each(function() {
	if (j(this).is(":checked")) {
	someObj.fruitsGranted.push(j(this).attr("value"));
	} else {
	someObj.fruitsDenied.push(j(this).attr("value"));
	}
	});
	var a_checkbox_values = someObj.fruitsGranted;
		j.post("<?php echo bloginfo('template_url'); ?>/includes/ajax_file.php", { 
			f_checkbox_values: a_checkbox_values,
			action: 'chk_values'},function(responseText) { 
			 if(j.trim(responseText).length == 0 ) {
			 						j(".filtered_product_part").empty().html("<div class='no-course'>No Courses Are Found</div>");
			 }else {
						j(".filtered_product_part").empty().html(responseText);
						 }

			});
});
		j('#clear_all').click(function() {
			j('ul.category-listing li input:checkbox').prop('checked', false);
				j(".filtered_product_part").empty();
	 j('.filtered_product_part').html('<div id="mydiv"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" class="ajax-loader"></div>');
			var a_checkbox_values = "";
				j.post("<?php echo bloginfo('template_url'); ?>/includes/ajax_file.php", { 
			f_checkbox_values: a_checkbox_values,
			action: 'chk_values'},function(responseText) { 
						j(".filtered_product_part").empty().html(responseText);
			});
		});
	/************************************		For Product Filter Options End  	**************************************/
	j('.course_selection').on('change', function() {
	var a_course_id = this.value;
	j.post("<?php echo bloginfo('template_url'); ?>/includes/ajax_file.php", { 
	f_course_id: a_course_id,
	action: 'course_id'},function(responseText) { 
			var data = j.parseJSON(responseText);
	j(".location_selection_part").empty().html(data.select_box);
	j("#CourseFindForm").attr("action",data.course_link);
	});
 });
 //For form validation For course Finder Start
 			j("#CourseFindForm").validate({
			rules: {
				course_selection: {
				required: true
				},
				location_selection: {
				required: true
				}
			},
			messages: {
				course_selection: {
				required: "Please Select a Course Name",
				},
				location_selection: {
				required: "Please Select a Location Name",
				},
			},
		});
 //For form validation For course Finder Start
	/************************************ 		For Pagination Start  	**************************************/
j('#data').after('<div id="pagination"></div>');
            var rowsShown = 1;
            var rowsTotal = j('#data tbody tr').length;
            var numPages = rowsTotal/rowsShown;
            for(i = 0;i < numPages;i++) {
                var pageNum = i + 1;
                j('#pagination').append('<a href="#course-table_id" rel="'+i+'">'+pageNum+'</a> ');
            }
            j('#data tbody tr').hide();
            j('#data tbody tr').slice(0, rowsShown).show();
            j('#pagination a:first').addClass('active');
            j('#pagination a').bind('click', function(){
                j('#pagination a').removeClass('active');
                j(this).addClass('active');
                var currPage = j(this).attr('rel');
                var startItem = currPage * rowsShown;
                var endItem = startItem + rowsShown;
                j('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
                        css('display','table-row').animate({opacity:1}, 300);
            });
	/************************************  		For Pagination End  	**************************************/
	/************************************ 		For Data Table Start  	**************************************/
		j('#reorder').dataTable({ 
		responsive: true,
			"aaSorting": [[ 6, "asc" ]], 
			"columnDefs": [ { "targets": 7, "orderable": false } ]
			});
	/************************************  		For Data Table End  	**************************************/
	
	//For Responsive Start
	/*j('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
				   320: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })*/
	
	//For Responsive End
	});
</script>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<div class="tp-strip">
  <div class="container">
    <div class="wrapper">
      <p>
	  <?php if ( !is_user_logged_in() ) {  ?>
	  <a class="white_font_color" href="<?php  echo bloginfo('siteurl')."/myintelli"; ?>">Login</a>
	  <?php }else { ?>
	  <a  class="white_font_color" href="<?php echo wp_logout_url( home_url() ); ?>">Log out</a>
	  <?php
	  }
	   	   //added new for cart product count start
global $woocommerce;
$add_cart_count=sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); 
$cart_page_url=$woocommerce->cart->get_cart_url();
	   //added new for cart product count end  
?>
<a href="<?php echo $cart_page_url;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cart-icon.png" alt="">
<span class="cart_count"><?php echo $add_cart_count;
 ?></span></a>
	   </p>
    </div>
  </div>
</div>
<div class="container">
  <div class="wrapper">
    <div class="Header">
		  <div class="logo">
		  <?php 
		  $site_url = home_url();
		  $site_logo = get_option('site_logo');
		  if($site_logo) {?>
			<a href="<?php echo $site_url;?>"><img src="<?php echo $site_logo; ?>" alt="" width="300" height="120"></a><?php }else{ ?>
			<a href="<?php echo $site_url;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="" width="300" height="120"></a> 
		  <?php } ?>
			
		  </div>
      <div class="social">
        <p><a href="<?php echo get_option('facebook_url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/T-Fb-icon.png" alt=""></a> <a href="<?php echo get_option('twitter_url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/T-Twitter-icon.png" alt=""></a> <a href="<?php echo get_option('google_url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/T-Google+-icon.png" alt=""></a> <a href="<?php echo get_option('youtube_url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/T-Youtube-icon.png" alt=""></a></p>
        <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Phone-icon.png" alt=""> 
		<?php  $phone_number = get_option('phone_number');	if($phone_number) { echo $phone_number; }else{ echo "020 - 7727 - 2727"; } ?>
		 <a class="mailto_anchor" href="mailto:<?php  $mail_id = get_option('email_id');	if($mail_id) { echo $mail_id; }else{ echo "info@intellitraining"; } ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail-icon.png" alt=""><?php  $mail_id = get_option('email_id');	if($mail_id) { echo $mail_id; }else{ echo "info@intellitraining"; } ?>
		  		</a>
		  </p>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="wrapper">
    <div id="mob-nav">
	<!--for mobile menu start-->
		<header>
		<nav>
								<?php if ( has_nav_menu( 'primary' ) ) { wp_nav_menu( array( 'theme_location' => 'primary') ); } ?>

		</nav>
		</header>
			<!--for mobile menu end-->

      <!--<ul>
        <li> <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-icon.png" alt=""></a>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">courses</a></li>
            <li><a href="#">e-learning</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">Location</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </li>
      </ul>-->
    </div>
  </div>
</div>
<div class="nav_container">
  <div class="container">
    <div class="wrapper">

      <div id="nav">
						<?php if ( has_nav_menu( 'primary' ) ) { wp_nav_menu( array( 'theme_location' => 'primary') ); } ?>
      </div>
      <div class="sch">
	  	<?php //include (TEMPLATEPATH . '/searchform.php'); ?>

        <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Sch-icon.png" alt=""></p>
      </div>
    </div>
  </div>
</div>

<?php
	$current_page_details = get_queried_object();
	/*echo "<br>Category id = ".*/$id_for_category = $current_page_details->term_id;
	/*echo "<br>Page id = ".*/$id_for_page = $current_page_details->ID;
	
	if($id_for_page){
		$seo_name =  get_post_meta($id_for_page, 'seo_name', true );
		$seo_streetAddress =  get_post_meta($id_for_page, 'seo_streetAddress', true );
		$seo_addressLocality =  get_post_meta($id_for_page, 'seo_addressLocality', true );
		$seo_addressRegion =  get_post_meta($id_for_page, 'seo_addressRegion', true );
		$seo_postalCode  =  get_post_meta($id_for_page, 'seo_postalCode', true );
		$seo_telephone =  get_post_meta($id_for_page, 'seo_telephone', true );
		
		$seo_aggregate_name = get_post_meta($id_for_page, 'seo_aggregate_name', true );
		$seo_ratingValue = get_post_meta($id_for_page, 'seo_ratingValue', true );
		$seo_bestRating  = get_post_meta($id_for_page, 'seo_bestRating', true );
		$seo_reviewCount = get_post_meta($id_for_page, 'seo_reviewCount', true );
		
		}else if($id_for_category){
			//$unserialize_val = maybe_unserialize(get_option('serialized_val'.$id_for_category));
							  				 $unserialize_val = unserialize(base64_decode(get_option('serialized_val'.$id_for_category)));
		$seo_name =  $unserialize_val['seo_name'];
		$seo_streetAddress =  $unserialize_val['seo_streetAddress'];
		$seo_addressLocality =  $unserialize_val['seo_addressLocality'];
		$seo_addressRegion =  $unserialize_val['seo_addressRegion'];
		$seo_postalCode =  $unserialize_val['seo_postalCode'];
		$seo_telephone =  $unserialize_val['seo_telephone'];
		
		$seo_aggregate_name =  $unserialize_val['seo_aggregate_name'];
		$seo_ratingValue  =  $unserialize_val['seo_ratingValue'];
		$seo_bestRating =  $unserialize_val['seo_bestRating'];
		$seo_reviewCount =  $unserialize_val['seo_reviewCount'];
		
		}
?>
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
