<?php 
@ob_start();
@session_start();
include_once('../../../wp-config.php');

global $post,$wpdb,$current_user;

if ($_POST['update'] == "update"){

	$arrayorder	= $_POST['arrayorder'];
	$category_id = $arrayorder[0];
	array_shift($arrayorder);
	//$serialized_value = maybe_serialize( $arrayorder );
	$serialized_value = base64_encode(serialize($arrayorder));
	$category_optionname = 'category_faq_data_'.$category_id;
	update_option( $category_optionname, $serialized_value );	
	echo 'Your Faq&rsquo;s Are Ordering  Successfully Saved ';
}

if ($_POST['update_faqs'] == "update"){
	$arrayorder	= $_POST['arrayorder'];
	$faq_category_id = $arrayorder[0];
	$course_category_id = $arrayorder[1];
	array_shift($arrayorder);
	array_shift($arrayorder);
	//$serialized_value = maybe_serialize( $arrayorder );
	$serialized_value = base64_encode(serialize($arrayorder));
	$category_optionname = 'single_faqs_order'.$course_category_id.$faq_category_id;
	update_option( $category_optionname, $serialized_value );	
	echo 'Your Faq&rsquo;s Are Ordering  Successfully Saved ';
}

if ($_POST['update_trending_course'] == "update"){
	$arrayorder	= $_POST['arrayorder'];
	//$serialized_value = maybe_serialize( $arrayorder );
	$serialized_value = base64_encode(serialize($arrayorder));
	$category_optionname = 'trending_course_order';
	update_option( $category_optionname, $serialized_value );	
	echo 'Your Course Categories Are Ordering and Successfully Saved ';
}
if ($_POST['cat_sidebar_slider'] == "update"){
	$arrayorder	= $_POST['arrayorder'];
	$category_id = $arrayorder[0];
	array_shift($arrayorder);
	//$serialized_value = maybe_serialize( $arrayorder );
	$serialized_value = base64_encode(serialize($arrayorder));
	$category_optionname = 'cat_sidebar_slider_after_order'.$category_id;
	update_option( $category_optionname, $serialized_value );	
	echo 'Your Categories Are Ordering and Successfully Saved ';
}

if ($_POST['sidebar_slider_page'] == "update"){
	$arrayorder	= $_POST['arrayorder'];
	$page_id = $arrayorder[0];
	array_shift($arrayorder);
	//$serialized_value = maybe_serialize( $arrayorder );
	$serialized_value = base64_encode(serialize($arrayorder));
	$category_optionname = 'sidebar_slider_after_order_page'.$page_id;
	update_option( $category_optionname, $serialized_value );	
	echo 'Your Categories Are Ordering and Successfully Saved ';
}

?>