<?php 			
$cate = get_queried_object();
$post->ID = $cate->ID;
$page_id = $cate->ID;
$cat_id = $cate->term_id;
//$unserialize_val = maybe_unserialize(get_option('serialized_val'.$cat_id));
$unserialize_val = unserialize(base64_decode(get_option('serialized_val'.$cat_id)));
?>
<div class="main-bd-rt">
	<div class="query">
	<?php 
	echo do_shortcode('[contact-form-7 id="1065" title="Contact Form In Sidebar"]');
	?>
	</div><!--query-->
<!--first sidebar image start-->
<div class="rgt-bottom-boxes remove_bg_and_border <?php $taxonomy = 'product_cat'; if(is_tax( $taxonomy)){ ?>
remove_bg_and_border <?php } ?>">
<?php
/*$cate = get_queried_object();
$cat_id = $cate->term_id;*/
$course_cat_siebar_image1 = $unserialize_val['course_cat_siebar_image1'];
$course_cat_siebar_image1_url = $unserialize_val['course_cat_siebar_image1_url'];	
$course_cat_siebar_image2 = $unserialize_val['course_cat_siebar_image2'];	
$course_cat_siebar_image2_url = $unserialize_val['course_cat_siebar_image2_url'];	
$sidebar_image1 = get_post_meta( $post->ID, 'sidebar_image1', true );
$sidebar_image1_url = get_post_meta( $post->ID, 'sidebar_image1_url', true );
$sidebar_image2 = get_post_meta( $post->ID, 'sidebar_image2', true );
$sidebar_image2_url = get_post_meta( $post->ID, 'sidebar_image2_url', true );
$sidebar_slider = get_post_meta( $post->ID, 'sidebar_slider', true );
if($course_cat_siebar_image1) {
?>
<p><a href="<?php echo $course_cat_siebar_image1_url;?>"><img class="sidebar_image" src="<?php echo $course_cat_siebar_image1; ?>" /></a></p>
<?php }elseif($sidebar_image1){

?>
<p><a href="<?php echo $sidebar_image1_url;?>"><img class="sidebar_image" src="<?php echo $sidebar_image1; ?>" width="340" height="375" /></a></p>
<?php
}else{

?>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis sem ac metus tristique maximus. Pellentesque ullamcorper, ligula vitae mattis eleifend, libero nunc bibendum ligula, ac imperdiet ligula felis eget massa. Maecenas neque neque, faucibus non lectus at, consequat euismod nisi. Sed magna nulla, pharetra a enim sed, pretium iaculis purus. Proin eget tincidunt risus. </p>											
<?php } ?>
</div>
<!--first sidebar image end-->
<div class="rgt-bottom-boxes remove_bg_and_border sidebar_for_width <?php $taxonomy = 'product_cat'; if(is_tax( $taxonomy)){ ?>remove_bg_and_border<?php } ?>">
<?php /*?><?php $taxonomy = 'product_cat'; if(is_tax( $taxonomy)||($sidebar_slider)){ ?><?php */?>
<h3>You might also like...</h3>
<h6>
<b style="float:right;">
<img class="prev_cat_sidebar" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lt-arrow1.png" alt="">
<img class="next_cat_sidebar" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rt-arrow1.png" alt="">
</b>
</h6>
<div class="owl-carouse" id="owl-cat-single-sidebar">
<?php
if($cat_id) {
$formed_name = 'cat_sidebar_order'.$cat_id;
$formed_values_after = 'cat_sidebar_slider_after_order'.$cat_id;
//$after_order_values = maybe_unserialize(get_option($formed_values_after));
$after_order_values = unserialize(base64_decode(get_option($formed_values_after)));

$default_array = explode(",",get_option($formed_name));

		$default_array_count = count($default_array);
		$ordered_array_count = count($after_order_values);
	if($after_order_values[0]=="") {
	//echo "one";
		$box1 = $default_array;
	}else
	if(!$after_order_values) {
		//echo "two";

		$box1 = $default_array;
	}else
if($default_array){ 
if($default_array_count != $ordered_array_count){
$box1 = $default_array;
}else {
$result=array_diff($default_array,$after_order_values);
							if($result){
$box1 = $default_array;
							}else{
$box1 = $after_order_values;
							}
 }
  }
}else
	if($page_id){
	//echo "check1";
	$formed_name = 'sidebar_order_page'.$page_id;
	$formed_values_after = 'sidebar_slider_after_order_page'.$page_id;
	
	
	//$after_order_values = maybe_unserialize(get_option($formed_values_after));
$after_order_values = unserialize(base64_decode(get_option($formed_values_after)));
	
	$default_array = explode(",",get_option($formed_name));
	$default_array_count = count($default_array);
	$ordered_array_count = count($after_order_values);
	if($after_order_values[0]=="") {
		$box1 = $default_array;
	}else	if(!$after_order_values) {
		$box1 = $default_array;
	}else

	if($default_array){ 
//	echo "check2";
	if($default_array_count != $ordered_array_count){
	$box1 = $default_array;
//	echo "check3";
	}else {
	//echo "check4";
	$result=array_diff($default_array,$after_order_values);
	if($result){
	//echo "check5";
	$box1 = $default_array;
	}else{
	//echo "check5";
	$box1 = $after_order_values;
	}
	}
	}
	/*if($sidebar_slider){
	
		$box1 = explode("," ,$sidebar_slider);
		}*/
  }
	/*if($unserialize_val['sidebar_cat']){
	$box1 =  $unserialize_val['sidebar_cat'];	
	}elseif($sidebar_slider){
	$box1 = explode("," ,$sidebar_slider);
	}*/
	
	
if($box1[0]!="") {
/*echo "available";
echo "<pre>";
print_r($box1);
echo "<pre>";*/
$retrive =$box1;	
$postid_count = count($retrive);
$newArray = array_chunk($retrive, 2, false);
$sc = 0;
foreach($newArray as $key => $retrive_ID) { 
$sc++;
echo '<div class="slide">';
while (list($key, $value_new) = each($retrive_ID)) { 
$single_taxonomy = get_term_by('id', $value_new, 'product_cat'); 
?>
<a href="<?php echo get_term_link($single_taxonomy->slug, $single_taxonomy->taxonomy);?>"><div class="over-Details">
<div class="product">
<?php $thumbnail_id = get_woocommerce_term_meta( $single_taxonomy->term_id, 'thumbnail_id', true ); $image = wp_get_attachment_url( $thumbnail_id ); ?>
<img src="<?php echo $image;?>"/>
</div><!--product-->
<div class="pro-detail">
<h4><?php echo $single_taxonomy->name;?></h4>
<p><?php $string = wp_trim_words( $single_taxonomy->description, 5 ); echo strip_shortcodes( $string );?></p>
<div class="accred_div_card">
<span class="icon_right"></span>
<span class="accred_title"> View courses</span>
</div>
</div><!--pro-detail-->
</div>
</a>										
<?php 
}
echo '</div>';
}
}
?>
</div><!--owl-carouse-->	
<?php /* }else{*/
/*if($box1[0]==""){
 ?>
<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Blue-icon.png" alt=""> You Recently Viewed</h3>
<ul>
<li><a href="#">PRINCE2 Foundation London</a></li>
<li><a href="#">PRINCE2 Foundation London</a></li>
<li><a href="#">PRINCE2 Foundation London</a></li>
<li><a href="#">PRINCE2 Foundation London</a></li>
<li><a href="#">PRINCE2 Foundation London</a></li>
<li><a href="#">PRINCE2 Foundation London</a></li>
<li><a href="#">PRINCE2 Foundation London</a></li>
<li><a href="#">PRINCE2 Foundation London</a></li>
<li><a href="#">PRINCE2 Foundation London</a></li>
</ul>
<?php 
}*/
/*} */
?>	
</div>


<!--Second  sidebar image start-->
<div class="rgt-bottom-boxes remove_bg_and_border <?php $taxonomy = 'product_cat'; if(is_tax( $taxonomy)){ ?>
remove_bg_and_border <?php } ?>">
<?php	if($course_cat_siebar_image2) {?>
<p><a href="<?php echo $course_cat_siebar_image2_url;?>"><img class="sidebar_image" src="<?php echo $course_cat_siebar_image2; ?>"  width="345" height="375"/></a></p>
<?php }elseif($sidebar_image2){?>
<p><a href="<?php echo $sidebar_image2_url;?>"><img class="sidebar_image" src="<?php echo $sidebar_image2; ?>" width="340" height="375" /></a></p>
<?php }else{?>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis sem ac metus tristique maximus. Pellentesque ullamcorper, ligula vitae mattis eleifend, libero nunc bibendum ligula, ac imperdiet ligula felis eget massa. Maecenas neque neque, faucibus non lectus at, consequat euismod nisi. Sed magna nulla, pharetra a enim sed, pretium iaculis purus. Proin eget tincidunt risus. </p>											
<?php } ?>
</div>
<!--Second  sidebar image end-->
</div><!--main-bd-rt-->