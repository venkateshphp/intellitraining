<div class="courses-panel-left">
  
<!--form-start-here-->
<div class="well-green margintop45">
  <div class="whitecolor">Drop us a Query</div>
  <hr>
      <?php echo do_shortcode('[contact-form-7 id="2194" title="Contact Form In Sidebar new"]');?>

  
  </div>
<!--form-end-here-->


<div class="clearfix"></div>

<?php 
$single_course_cat_sidebar_cat1 =  $unserialize_val['single_course_cat_sidebar_cat1'];
$course_category1 = get_term_by('id',$single_course_cat_sidebar_cat1,'product_cat');
$single_course_cat_sidebar_cat2 =  $unserialize_val['single_course_cat_sidebar_cat2'];
$course_category2 = get_term_by('id',$single_course_cat_sidebar_cat2,'product_cat');

				$read_more_link1 = get_term_link($course_category1->slug, $course_category1->taxonomy);
				$read_more_link2 = get_term_link($course_category2->slug, $course_category2->taxonomy);

				$thumbnail_id = get_woocommerce_term_meta( $course_category1->term_id, 'thumbnail_id', true ); 
				$image = wp_get_attachment_url( $thumbnail_id ); 
				 $unserialize_val = unserialize(base64_decode(get_option('serialized_val'.$course_category1->term_id)));
				 $seo_ratingValue =  $unserialize_val['seo_ratingValue'];
if($single_course_cat_sidebar_cat1) {

?>

<div class="box-one">
                <div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/c1.jpg" alt="#" class="img-responsive"></div>
                <div class="padding-box">
	<div class="blackheading"><?php
	echo preg_replace('/[\[{\(].*[\]}\)]/U' , '', $course_category1->name);
	// echo $course_category[$key]->name;?></div>
		<p><?php
		$string = wp_trim_words( $course_category1->description, 5 ); //echo $string;
		echo strip_shortcodes( $string );
		?></p>
	<span class="course-rating">
	<?php 
	$seo_bestRating =  $unserialize_val['seo_bestRating'];
	$empty_star = $seo_bestRating-$seo_ratingValue;
	if (strpos($seo_ratingValue,'.') == true) {
	$exploded_value = explode('.',$empty_star);
	$empty_value = $exploded_value[0];
	}else {
	$empty_value = $empty_star;
	}
	if (strpos($seo_ratingValue,'.') == true) {
	$exploded_value = explode('.',$seo_ratingValue);
	$rating_value = $exploded_value[0];
	}else {
	$rating_value = $seo_ratingValue;
	}
	for($i=0;$i<$rating_value;$i++){?>
	<i class="fa fa-star fa-enable-star"></i>
	<?php }
	if (strpos($seo_ratingValue,'.') == true) {
	?><i class="fa fa-star-half-o fa-enable-star"></i><?php
	}
	for($i=0;$i<$empty_value;$i++){?>
	<i class="fa fa-star-o fa-enable-star"></i>
	<?php }
	?>
	</span>
<div class="clearfix"></div>

<a href="<?php echo $read_more_link1;?>" class="btn btn-danger trending-btn">READ MORE</a>

</div>
                </div><!--box-one-->
	<?php } ?>			
				
				
				
<div class="clearfix"></div>

<div class="margintop20">

<?php 

				//$read_more_link = get_term_link($course_category2->slug, $course_category2->taxonomy);
				$thumbnail_id = get_woocommerce_term_meta( $course_category2->term_id, 'thumbnail_id', true ); 
				$image = wp_get_attachment_url( $thumbnail_id ); 
				 $unserialize_val = unserialize(base64_decode(get_option('serialized_val'.$course_category2->term_id)));
				 $seo_ratingValue =  $unserialize_val['seo_ratingValue'];

if($single_course_cat_sidebar_cat2) {
?>

<div class="box-one">
                <div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/c1.jpg" alt="#" class="img-responsive"></div>
                <div class="padding-box">
	<div class="blackheading"><?php
	echo preg_replace('/[\[{\(].*[\]}\)]/U' , '', $course_category2->name);
	// echo $course_category[$key]->name;?></div>
		<p><?php
		$string = wp_trim_words( $course_category2->description, 5 ); //echo $string;
		echo strip_shortcodes( $string );
		?></p>
	<span class="course-rating">
	<?php 
	$seo_bestRating =  $unserialize_val['seo_bestRating'];
	$empty_star = $seo_bestRating-$seo_ratingValue;
	if (strpos($seo_ratingValue,'.') == true) {
	$exploded_value = explode('.',$empty_star);
	$empty_value = $exploded_value[0];
	}else {
	$empty_value = $empty_star;
	}
	if (strpos($seo_ratingValue,'.') == true) {
	$exploded_value = explode('.',$seo_ratingValue);
	$rating_value = $exploded_value[0];
	}else {
	$rating_value = $seo_ratingValue;
	}
	for($i=0;$i<$rating_value;$i++){?>
	<i class="fa fa-star fa-enable-star"></i>
	<?php }
	if (strpos($seo_ratingValue,'.') == true) {
	?><i class="fa fa-star-half-o fa-enable-star"></i><?php
	}
	for($i=0;$i<$empty_value;$i++){?>
	<i class="fa fa-star-o fa-enable-star"></i>
	<?php }
	?>
	</span>
<div class="clearfix"></div>

<a href="<?php echo $read_more_link2;?>" class="btn btn-danger trending-btn">READ MORE</a>

</div>
                </div><!--box-one-->
				<?php } ?>
				</div>
                
                
                <div class="clearfix"></div>
                
                
  
  </div>