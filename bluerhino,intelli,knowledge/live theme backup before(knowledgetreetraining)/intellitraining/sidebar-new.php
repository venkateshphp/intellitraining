<?php 			
$cate = get_queried_object();
$post_id = $cate->ID;
$page_id = $cate->ID;
$cat_id = $cate->term_id;
//$unserialize_val = maybe_unserialize(get_option('serialized_val'.$cat_id));
$unserialize_val = unserialize(base64_decode(get_option('serialized_val'.$cat_id)));
?>



<div class="well-green <?php if (is_page('courses')) {?>margintop45<?php }?>">
  <div class="drop-heading">Drop us a Query</div>
  <hr>
    <?php echo do_shortcode('[contact-form-7 id="2194" title="Contact Form In Sidebar new"]');?>

  
  </div>
  <div class="clearfix"></div>
  <div class="margintop20">		
  
  <?php
/*$cate = get_queried_object();
$cat_id = $cate->term_id;*/
$course_cat_siebar_image1 = $unserialize_val['course_cat_siebar_image1'];
$course_cat_siebar_image1_url = $unserialize_val['course_cat_siebar_image1_url'];	
$course_cat_siebar_image2 = $unserialize_val['course_cat_siebar_image2'];	
$course_cat_siebar_image2_url = $unserialize_val['course_cat_siebar_image2_url'];	
$sidebar_image1 = get_post_meta( $post_id, 'sidebar_image1', true );
$sidebar_image1_url = get_post_meta( $post_id, 'sidebar_image1_url', true );
$sidebar_image2 = get_post_meta( $post_id, 'sidebar_image2', true );
$sidebar_image2_url = get_post_meta( $post_id, 'sidebar_image2_url', true );
$sidebar_slider = get_post_meta( $post_id, 'sidebar_slider', true );
if($course_cat_siebar_image1) {
?>
<p><a href="<?php echo $course_cat_siebar_image1_url;?>"><img class="img-responsive" <?php /*?> width="345" height="375"<?php */?> src="<?php echo $course_cat_siebar_image1; ?>" alt="#" /></a></p>
<?php }elseif($sidebar_image1){
?>
<p><a href="<?php echo $sidebar_image1_url;?>"><img class="img-responsive" src="<?php echo $sidebar_image1; ?>" <?php /*?>width="340" height="375" <?php */?>/> </a></p>
<?php
}else{

?>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis sem ac metus tristique maximus. Pellentesque ullamcorper, ligula vitae mattis eleifend, libero nunc bibendum ligula, ac imperdiet ligula felis eget massa. Maecenas neque neque, faucibus non lectus at, consequat euismod nisi. Sed magna nulla, pharetra a enim sed, pretium iaculis purus. Proin eget tincidunt risus. </p>											
<?php } ?>
  
  
</div>
  
      <div class="clearfix"></div>
<div class="margintop20">
<?php	if($course_cat_siebar_image2) {?>
<p><a href="<?php echo $course_cat_siebar_image2_url;?>"><img class="img-responsive" src="<?php echo $course_cat_siebar_image2; ?>"  width="345" height="375"/></a></p>
<?php }elseif($sidebar_image2){?>
<p><a href="<?php echo $sidebar_image2_url;?>"><img class="img-responsive" src="<?php echo $sidebar_image2; ?>" width="340" height="375" /></a></p>
<?php }else{?>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis sem ac metus tristique maximus. Pellentesque ullamcorper, ligula vitae mattis eleifend, libero nunc bibendum ligula, ac imperdiet ligula felis eget massa. Maecenas neque neque, faucibus non lectus at, consequat euismod nisi. Sed magna nulla, pharetra a enim sed, pretium iaculis purus. Proin eget tincidunt risus. </p>											
<?php } ?>
</div>