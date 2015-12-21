<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="language" content="en" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=0">
<meta name="format-detection" content="telephone=no">
<?php /*?><title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title><?php */?>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) {} ?> <?php bloginfo('name'); ?></title>

<!-----------------------------------
Added For New For Bootstrap Design Start
-------------------------------------->

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<!-- Bootstrap -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-fresh.css" media="all" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/flexslider.css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet">

<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.css" rel="stylesheet" type="text/css" /> 
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/metro-check.css" rel="stylesheet" type="text/css" />


<!-- Owl Carousel Assets -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/owl-carousel/owl.theme.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!--added for bootstrap accordion start-->
<?php if(is_page('847')){?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap_accordion/new-bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap_accordion/new-bootstrap.min.css" rel="stylesheet">
<?php } ?>
<!--added for bootstrap accordion end-->

<!-----------------------------------
Added For New For Bootstrap Design End
-------------------------------------->


<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
<?php /*?><?php if ( !is_page(4) ) {?><?php */?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php /*?><?php } ?><?php */?>

<?php /*?><link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="<?php bloginfo('template_url'); ?>/fonts/fonts.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/js/jquery.flipster.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/js/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/js/meanmenu.css" rel="stylesheet" type="text/css"><?php */?>
<link href="<?php bloginfo('template_url'); ?>/css/data-table.css" rel="stylesheet" type="text/css">




<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>
<!--added for slidedown/slideup start-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<!--added for slidedown/slideup end-->

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
<!--Added For GridList View Start-->
<!--Added For GridList View End-->

<?php /*?><link href="<?php echo get_stylesheet_directory_uri(); ?>/js/owl-slider/docs.theme.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/owl-slider/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/owl-slider/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl-slider/owl.carousel.js"></script><?php */?>

<!--for owl js and css End -->

<script type="text/javascript">
//for header js 
var j = jQuery.noConflict();
j(document).ready(function() {

j('.shop_table').parent().addClass('table-responsive');

///******Slide From Right Start **************/
//    var effect = 'slide';
//
//    // Set the options for the effect type chosen
//    var options = { direction: 'right' };
//
//    // Set the duration (default: 400 milliseconds)
//    var duration = 1500;
//
//    j('#slide_from_right').toggle(effect, options, duration);
//	 j('#slide_from_right').show();
	
/******Slide From Right end **************/
/***************for make Image in Responsive (Bootstrap) Start************/

j('.margintop20 img').addClass('img-responsive');

/***************for make Image in Responsive (Bootstrap) end************/
/**********************************
  Added Class in CF7 in Single Course Category Page Start(For Bootstrap)
**********************************/
j('.for_control .label').addClass('whilecolor');

/**********************************
  Added Class in CF7 in Single Course Category Page End
**********************************/


/**********************************
  Added Class in Menu in MyIntelli Page Start(For Bootstrap)
**********************************/
j('#username').addClass('form-control');
j('#password').addClass('form-control');

j('.login-username').addClass('input-group margin-bottom-20');
j('.login-password').addClass('input-group margin-bottom-20');

j('.login-username').prepend('<span class="input-group-addon"><i class="fa fa-user"></i></span>');
j('.login-password').prepend('<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>');

j('#wp-submit').addClass('btn-u');
j('#login-submit').addClass('row col-md-3');

/**********************************
  Added Class in Menu in MyIntelli Page End
**********************************/


/**********************************
  Added Class in menu Start(For Bootstrap)
**********************************/

/*j('.for_add_bootstarp_class ul').addClass('nav navbar-nav');
j('.for_add_bootstarp_class ul.sub-menu').addClass('dropdown-menu dropdown-menu-large row');
*/


/**********************************
  Added Class in menu End
**********************************/
j('.menu-item-has-children').addClass('dropdown dropdown-large');
j(".menu-item-has-children a").first().addClass("dropdown-toggle");
j(".menu-item-has-children a").first().attr("data-toggle","dropdown");
j(".sub-menu").addClass("dropdown-menu dropdown-menu-large row");
j('.dropdown-toggle').append('<span class="caret"></span>');
/**********************************
  Added Class in Footer link Start(For Bootstrap)
**********************************/
j('.footer-back .widget_nav_menu a').addClass('footer-links');
/**********************************
  Added Class in Footer link End
**********************************/

///**********************************
//  Added For Filter Section  Start 
//**********************************/
//						j('.nav-toggle').click(function(){
//						var req_id = this.id;
//						//alert(this.id);
//						 j("#collapse"+req_id).slideToggle(500);
//							if(j(this).html()=='-'){
//						//	alert('yes');
//							j(this).html('+');	
//							}else{
//						//	alert('no');
//							j(this).html('-');	
//							}
//							//get collapse content selector
//							/*var collapse_content_selector = j(this).attr('href');					
//							
//							//make the collapse content to be shown or hide
//							var toggle_switch = j(this);
//							j(collapse_content_selector).toggle(function(){
//								if(j(this).css('display')=='none'){
//									toggle_switch.html('+');//change the button label to be 'Show'
//								}else{
//									toggle_switch.html('-');//change the button label to be 'Hide'
//								}
//							});*/
//						});
///**********************************
//  Added For Filter Section  End 
//**********************************/


/**********************************
  Added For GridList View Start 
**********************************/
var screen_width = j( document ).width();
//alert(screen_width);
	  j('.filtered_product_part_list').hide();

	 j('#list').click(function(){
	  j('.filtered_product_part_grid').hide();
	  j('.filtered_product_part_list').show();
	 });
	 j('#grid').click(function(){
	  j('.filtered_product_part_grid').show();
	  j('.filtered_product_part_list').hide();
	 });
/**********************************
  Added For GridList View End 
**********************************/
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

$findMich   = '#';
$pos = strpos($from_url, $findMich);
if($pos !== false) {
if(($from_url!="")||($to_url!="")) {
?>
  if (window.location.hash == "<?php echo $from_url; ?>") {
        window.location = "<?php echo $to_url; ?>";
    }
<?php 
}
  }else{
  ?>
  if (window.location == "<?php echo $from_url; ?>") {
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
///********************   Faq Accordion Start ********************/
////load_show0
//var myID = "";
//myID = j('.load_show0').attr('id');
//if(myID){
//var check_after_split = myID.split('_')[1];
//j( "#faq_cat_"+check_after_split).show();
//j("#id-val_"+check_after_split).css("color", "#237a00");
//}
//    j( ".accordion" ).accordion({ 
//	animate: {
//        duration: 150
//		}
//    });
//	//j( "#accordion" ).accordion();
//	j( "#accordion" ).accordion({ 
//	animate: {
//        duration: 150
//		}
//    });
// /********************   Faq Accordion End ********************/
	//owl slider
	
	
	///*************************************************  	For Testimonial Slider In Category Single Page Start 	**************************************************/
//	   var owl_cat = j("#owl-cat-single");
//      owl_cat.owlCarousel({
//      items : 1, //10 items above 1000px browser width
//      itemsDesktop : [1000,1], //5 items between 1000px and 901px
//      itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
//      itemsTablet: [600,1], //2 items between 600 and 0;
//      itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
//      });
//      // Custom Navigation Events
//     j(".next_cat").click(function(){
//        owl_cat.trigger('owl.next');
//      })
//      j(".prev_cat").click(function(){
//        owl_cat.trigger('owl.prev');
//      })
//     j(".play").click(function(){
//        owl_cat.trigger('owl.play',1000);
//      })
//      j(".stop").click(function(){
//        owl_cat.trigger('owl.stop');
//      })
//	/************************************************* 	For Testimonial Slider In Category Single Page End 	**************************************************/
//	/****************************************************** 	For Sidebar Slider In Single Course Category Page Start *********************************************************/
//	  var owl_cat_sidebar = j("#owl-cat-single-sidebar");
//      owl_cat_sidebar.owlCarousel({
//      items : 1, //10 items above 1000px browser width
//      itemsDesktop : [1000,1], //5 items between 1000px and 901px
//      itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
//      itemsTablet: [600,1], //2 items between 600 and 0;
//      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
//      });
//      // Custom Navigation Events
//     j(".next_cat_sidebar").click(function(){
//        owl_cat_sidebar.trigger('owl.next');
//      })
//      j(".prev_cat_sidebar").click(function(){
//        owl_cat_sidebar.trigger('owl.prev');
//      })
//     j(".play").click(function(){
//        owl_cat_sidebar.trigger('owl.play',1000);
//      })
//      j(".stop").click(function(){
//        owl_cat_sidebar.trigger('owl.stop');
//      })
//	/****************************************************** 	For Sidebar Slider In Single Course Category Page End  	*********************************************************/
//	/**************************** 		For Logos Slider Start 	****************************/
//	j("#flexiselDemo2").flexisel({
//	visibleItems: 5,
//	autoPlay: false,
//	enableResponsiveBreakpoints: true,
//		responsiveBreakpoints: { 
//			portrait: { 
//			changePoint:480,
//			visibleItems: 1
//			}, 
//			landscape: { 
//			changePoint:640,
//			visibleItems: 2
//			},
//			tablet: {	 
//			changePoint:768,
//			visibleItems: 3
//			}
//		}
//	});
//	/**************************** 		For Logos Slider End  	****************************/
	///************************************  		Validation For Signup Form Start 	**************************************/
//	j("#signupForm").validate({
//		rules: {
//			username: {
//			required: true,
//			minlength: 2
//			},
//			password: {
//			required: true,
//			minlength: 5
//			},
//			confirm_pass: {
//			required: true,
//			minlength: 5,
//			equalTo: "#password"
//			},
//			email: {	
//			required: true,
//			email: true
//			},
//		},
//		messages: {
//			username: {
//			required: "Please enter a username",
//			minlength: "Your username must consist of at least 2 characters"
//			},
//			password: {
//			required: "Please provide a password",
//			minlength: "Your password must be at least 5 characters long"
//			},
//			confirm_password: {
//			required: "Please provide a password",
//			minlength: "Your password must be at least 5 characters long",
//			equalTo: "Please enter the same password as above"
//			},
//			email: "Please enter a valid email address",
//		}
//	});
//	/************************************ 		Validation For Signup Form End  	**************************************/
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
	///************************************ 	For Hover Display Page Content Start 	**************************************/
//	j('.menu_part ul li').mouseover(function() {
//	j('.first').hide();
//	var page_id = this.id;
//	j(".single_page").hide();
//	j(".control_width img").hide();
//	j('.control_width').css ("width", "90%");
//	j('.control_width').css ("z-index", "9999");
//	j('#page_id1').removeClass("increase-width");
//	j("."+page_id+"_content").show();
//	j("#"+page_id +" img").show();
//	j(this).css ("width", "110%");
//	j(this).css ("z-index", "9999");
//	});
//	j('#page_id1').addClass("increase-width");
//	j('#page_id1 img').show();
	/************************************ 	For Hover Display Page Content End 	**************************************/
	/************************************ 		For Product Filter Options Start 	**************************************/
    //j(':checkbox:checked').prop('checked',false); //For remove the check box checked on page load
	j(".panel-body input:checkbox").change(function() {
	
	j(".filtered_product_part_grid").empty();
	 j('.filtered_product_part_grid').html('<div id="mydiv"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" class="ajax-loader"></div>');
	 
	 	j(".filtered_product_part_list").empty();
	 j('.filtered_product_part_list').html('<div id="mydiv"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" class="ajax-loader"></div>');

	var someObj = {};
	someObj.fruitsGranted = [];
	someObj.fruitsDenied = [];
	j(".panel-body input:checkbox").each(function() {
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
			
						var data = j.parseJSON(responseText);
						//alert(data);
						var grid_content = data.grid;
						var list_content = data.list;
					//	alert(grid_content);
					//	alert(list_content);


             var str_grid = grid_content;
			//var str = j.trim(responseText);
			   var n_grid = str_grid.indexOf("over-Details-new");
			 if(n_grid==-1) {
			
			 						j(".filtered_product_part_grid").empty().html("<div class='no-course'>No Courses Are Found</div>");
			 }else {
			 			
						j(".filtered_product_part_grid").empty().html(grid_content);
						 }
						 
			 if(j.trim(list_content).length == 0 ) {
			 			 						j(".filtered_product_part_list").empty().html("<div class='no-course'>No Courses Are Found</div>");

						 }else{
						 						j(".filtered_product_part_list").empty().html(list_content);

						 }

			});
});
		j('#clear_all').click(function() {
			j('.panel-body input:checkbox').prop('checked', false);
				j(".filtered_product_part_grid").empty();
	 j('.filtered_product_part_grid').html('<div id="mydiv"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" class="ajax-loader"></div>');
	 
	 				j(".filtered_product_part_list").empty();
	 j('.filtered_product_part_list').html('<div id="mydiv"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" class="ajax-loader"></div>');

			var a_checkbox_values = "";
				j.post("<?php echo bloginfo('template_url'); ?>/includes/ajax_file.php", { 
			f_checkbox_values: a_checkbox_values,
			action: 'chk_values'},function(responseText) {
			
				var data = j.parseJSON(responseText);
						//alert(data);
						var grid_content = data.grid;
						var list_content = data.list;
						
						j(".filtered_product_part_grid").empty().html(grid_content);
						j(".filtered_product_part_list").empty().html(list_content);
			});
		});
	/************************************		For Product Filter Options End  	**************************************/
//	j('.course_selection').on('change', function() {
//	var a_course_id = this.value;
//	j.post("<?php echo bloginfo('template_url'); ?>/includes/ajax_file.php", { 
//	f_course_id: a_course_id,
//	action: 'course_id'},function(responseText) { 
//			var data = j.parseJSON(responseText);
//	j(".location_selection_part").empty().html(data.select_box);
//	j("#CourseFindForm").attr("action",data.course_link);
//	});
// });
// //For form validation For course Finder Start
// 			j("#CourseFindForm").validate({
//			rules: {
//				course_selection: {
//				required: true
//				},
//				location_selection: {
//				required: true
//				}
//			},
//			messages: {
//				course_selection: {
//				required: "Please Select a Course Name",
//				},
//				location_selection: {
//				required: "Please Select a Location Name",
//				},
//			},
//		});
// //For form validation For course Finder Start
//	/************************************ 		For Pagination Start  	**************************************/
//j('#data').after('<div id="pagination"></div>');
//            var rowsShown = 1;
//            var rowsTotal = j('#data tbody tr').length;
//            var numPages = rowsTotal/rowsShown;
//            for(i = 0;i < numPages;i++) {
//                var pageNum = i + 1;
//                j('#pagination').append('<a href="#course-table_id" rel="'+i+'">'+pageNum+'</a> ');
//            }
//            j('#data tbody tr').hide();
//            j('#data tbody tr').slice(0, rowsShown).show();
//            j('#pagination a:first').addClass('active');
//            j('#pagination a').bind('click', function(){
//                j('#pagination a').removeClass('active');
//                j(this).addClass('active');
//                var currPage = j(this).attr('rel');
//                var startItem = currPage * rowsShown;
//                var endItem = startItem + rowsShown;
//                j('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
//                        css('display','table-row').animate({opacity:1}, 300);
//            });
//	/************************************  		For Pagination End  	**************************************/
	/************************************ 		For Data Table Start  	**************************************/
		j('#reorder').dataTable({ 
		responsive: true,
		"sDom": 't<plf>',
			"aaSorting": [[ 4, "asc" ]], 
			"columnDefs": [ { "targets": 5, "orderable": false } ]
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
<div class="top-bar-grey"></div>
<!--------------------------
Added for New Header Start
--------------------------->
<!--logo-phone-email-start here-->
<div class="top-logo-bar">
<div class="container">
<div class="row">
<div class="col-xs-6">
<?php 
$site_url = home_url();
$site_logo = get_option('site_logo');
if($site_logo) {?>
<a href="<?php echo $site_url;?>"><img src="<?php echo $site_logo; ?>" alt="Knowledge Tree" class="img-responsive"></a><?php }else{ ?>
<a href="<?php echo $site_url;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Knowledge Tree" class="img-responsive"></a> 
<?php } ?>
</div>
<div class="col-xs-5 text-right">
<div class="callus-text">Call us 9am to midnight (GMT)</div>
<div class="phobe-number-text"><i class="fa fa-mobile fa-lg"></i> 
<?php  $phone_number = get_option('phone_number');	if($phone_number) { echo $phone_number; }else{ echo "07763751310"; } ?>
</div>
<div class="email-text"> <i class="fa fa-envelope-o"></i>  <a href="mailto:<?php  $mail_id = get_option('email_id');	if($mail_id) { echo $mail_id; }else{ echo "info@knowledgetreetraining.com"; } ?>" class="email-text"><?php  $mail_id = get_option('email_id');	if($mail_id) { echo $mail_id; }else{ echo "info@knowledgetreetraining.com"; } ?></a>
</div>

</div>

<div class="col-xs-1">
<a href="<?php echo get_option('facebook_url'); ?>"><i class="fa fa-facebook"></i></a>
<a href="<?php echo get_option('google_url'); ?>"><i class="fa fa-google-plus"></i></a>
<a href="<?php echo get_option('youtube_url'); ?>"><i class="fa fa-youtube-play"></i></a>
<a href="<?php echo get_option('twitter_url'); ?>"><i class="fa fa-twitter"></i></a>
</div>
<div class="cart_icon_section">
<?php
global $woocommerce;
$add_cart_count=sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); 
$cart_page_url=$woocommerce->cart->get_cart_url();
	   //added new for cart product count end  
?>
<a class="cart_icon" href="<?php echo $cart_page_url;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cart-icon-new.png" alt="">
<span class="cart_count"><?php echo $add_cart_count;
 ?></span></a>
</div><!--cart_icon_section-->


</div>
</div>
</div>
<!--logo-phone-email-end here-->
<div class="clearfix"></div>
<!--menu-start-here-->
<div id="navigation">
        <div class="navbar navbar-static-top" role="banner">
            <div class="container">
				<div class="row header-section">
							
					<div class="col-sm-12">
                    <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
													
				    </div>
						<nav class="collapse navbar-collapse navbar-default for_add_bootstarp_class">		
						<?php if ( has_nav_menu( 'primary' ) ) { wp_nav_menu(array('menu'=>'primary-menu','menu_class'=> 'nav navbar-nav pull-left','container' => '')); } ?>		
							<!--<ul class="nav navbar-nav">
								<li><a href="#">Home </a></li>								
							
								<li class="dropdown dropdown-large"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu-large row">
										<li class="col-sm-3">
											<ul>
												<li class="heading">Main Features</li>
												<li><a href="#">Bootstrap Grid System</a></li>
												<li><a href="#">CSS3 Animation</a></li>					
												<li><a href="#">Font-Awesome Icons</a></li>					
												<li><a href="#">Unique Design</a></li>					
											</ul>
										</li>
										<li class="col-sm-3">
											<ul>
												<li class="heading">Heading Two</li>
												<li><a href="#">Example One</a></li>
												<li><a href="#">Example Two</a></li>
												<li><a href="#">Example Three</a></li>
												<li><a href="#">Example Four</a></li>
											</ul>
										</li>
										<li class="col-sm-3">
											<ul>
												<li class="heading">Heading Three</li>
												<li><a href="#">Example One</a></li>
												<li><a href="#">Example Two</a></li>
												<li><a href="#">Example Three</a></li>
												<li><a href="#">Example Four</a></li>
											</ul>
										</li>
										<li class="col-sm-3">
											<ul>
												<li class="heading">Heading Four</li>
												<li><a href="#">Example One</a></li>
												<li><a href="#">Example Two</a></li>
												<li><a href="#">Example Three</a></li>
												<li><a href="#">Example Four</a></li>
											</ul>
										</li>					
									</ul>
								</li>
							<li><a href="#">e-learning </a></li>	
                            <li><a href="#">In-House </a></li>
                            <li><a href="#">Locations </a></li>
                            <li><a href="#">  My.Intelli</a></li>
                            <li><a href="#">  Contact Us</a></li>
                            <li><a href="#">  Blog</a></li>
							</ul>-->					
						</nav>
						
                        
                        
				  </div>
                    
                    	
				</div>
            </div>
        </div></div>
   <!--/#navigation--><!--menu-end-here-->
<!--------------------------
Added for New Header end
--------------------------->


<!--Added for Breadcum Start -->
<?php if ( !is_page('home') ) {
?>
<div class="container">
  <!--breadcrumb-start-->
  <div class="well gap30">
  <div class="row">
  <div class="<?php if(is_taxonomy('product_cat')) {?>col-md-7<?php }else{?>col-md-12<?php } ?>"> <ol class="breadcrumb">
  
  <li typeof="v:Breadcrumb"><a href="<?php echo get_option('siteurl');?>" title="Go to ." property="v:title" rel="v:url">Home</a></li>
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
 <?php /*?> <li><a href="#">Home</a></li>
  <li class="active"><a href="<?php echo get_permalink($post->ID);?>">Contact Us</a></li><?php */?>
 
  
</ol></div>
<?php if(is_tax('product_cat')) {
//echo "yes";
?>
<div class="col-md-5 blue-color text-right"><marquee behavior="slide" scrolldelay="5">
  <?php 
  $a=array(3,4,5,6,7,8,9,10);
$random_keys=array_rand($a,3);
/*for($i=0;$i<8;$i++){*/
echo $a[$random_keys[2]];
/*echo "<br>";
}*/
?>
  <!--4--> people are currently looking at this course</marquee></div>

<?php } ?>
  </div>
  </div>
  
 <!--breadcrumb-end--> 
 
<div class="clearfix"></div>
<?php } ?>
<!--Added for Breadcum End -->

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
<?php 
$name = "[hi] helloz [hello] (hi) {jhihi}";
//echo preg_replace('/[\[{\(].*[\]}\)]/U' , '', $name);


?>
