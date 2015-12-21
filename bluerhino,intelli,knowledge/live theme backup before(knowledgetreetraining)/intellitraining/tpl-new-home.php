<?php 
/*********

Template Name: Template For New Home Design With Bootstarp


*********/
//new Home Page	

get_header(); ?>

	<?php $siteurl =  site_url();
		$home_page_h2_tetxs_array = unserialize(base64_decode(get_option('home_page_h2_tetxs')));
		
							$jump_to_most_popular = stripslashes_deep($home_page_h2_tetxs_array['jump_to_most_popular']);
							$testimonials_title = stripslashes_deep($home_page_h2_tetxs_array['testimonials_title']);
							$trending_courses_title = stripslashes_deep($home_page_h2_tetxs_array['trending_courses_title']);
							$accredited_courses_title = stripslashes_deep($home_page_h2_tetxs_array['accredited_courses_title']);
							$contact_us_title = stripslashes_deep($home_page_h2_tetxs_array['contact_us_title']);
							$training_for_business = stripslashes_deep($home_page_h2_tetxs_array['training_for_business']);
							
							$popular_courses_description = stripslashes_deep($home_page_h2_tetxs_array['popular_courses_description']);
							$contact_us_description = stripslashes_deep($home_page_h2_tetxs_array['contact_us_description']);
		?>

 <!--Banner-start-here-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
   <?php if (class_exists('wpslideshow')) {  global $obj; $up = wp_upload_dir(); 
				  foreach($obj->show_slider() as $key => $slide){ ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $key;?>" class="<?php if($key==0){?>active<?php } ?>"></li>
	<?php } } ?>
	
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
  <?php if (class_exists('wpslideshow')) {  global $obj; $up = wp_upload_dir(); 
  
$results_default = $obj->show_slider();

$default_array = $results_default;

//echo "<br>count using show_slider = ".count($default_array);

foreach($default_array as $key => $val){
$default_array[$key] = $default_array[$key]->id;
}
/*echo "<pre>";
print_r($default_array);
echo "</pre>";*/
	$category_optionname = 'wpslideshow-sorted_values';
	$values = get_option( $category_optionname);	
	
	
	
		$serialized_value = get_option( $category_optionname);	
	$unserialized_values = unserialize(base64_decode($serialized_value));
     $results_after_order =  $obj->get_image($unserialized_values);
	 
	 $after_order_values = $results_after_order;
	 
foreach($after_order_values as $key => $val){
$after_order_values[$key] = $after_order_values[$key]->id;
}

  //echo "<br>count using get_image =".count($after_order_values);


$default_array_count = count($default_array);
		$ordered_array_count = count($after_order_values);
		if($after_order_values){
		$result=array_diff($default_array,$after_order_values);
		}
		if($after_order_values[0]==""){
							$retrive = $results_default;
		}else
		if(!$after_order_values){
							$retrive = $results_default;
		}elseif($default_array_count!=$ordered_array_count){
							$retrive = $results_default;
		}elseif($result){
					$retrive = $results_default;
		}else{
					$retrive = $results_after_order;
		}
	//
//	if($values){
//	$serialized_value = get_option( $category_optionname);	
//	$unserialized_values = unserialize(base64_decode($serialized_value));
//    $results = $obj->get_image($unserialized_values);
//	}

				  foreach($retrive as $key => $slide){ ?>
				  
    <div class="item <?php if($key==0){?>active<?php } ?>">
	<?php 
	$file_type = $slide->uploadFileType;
	if($file_type=='video'){
		//echo $up['baseurl'].'/wpslideshow/'.$slide->guid;
	?>
	<video <?php /*?> width="1000" height="1000" <?php */?> class="video-section" id="<?php echo $key; ?>">
		<source src="<?php echo $up['baseurl'].'/wpslideshow/'.$slide->guid;?>" type="video/ogg">
	</video>
		<?php }elseif($file_type=='image'){?>
      <img src="<?php echo $up['baseurl'].'/wpslideshow/'.$slide->guid;?>" alt="#">
	 <?php } ?> 
      <div class="carousel-caption">
      <div class="container">
      <h1 class="banner-heading"><?php if($slide->title){ echo $slide->title; }?></h1>
      <div class="row">
      <div class="col-xs-10 hidden-xs">
       
       <p class="banner-text"><?php if($slide->content){ echo $slide->content; }?></p>
       </div>
       <div class="col-xs-2 hidden-xs"><?php if($slide->link) { ?> <a href="<?php echo $slide->link; ?>" class="btn learn-more-button">LEARN MORE</a><?php }?></div>
       
       </div>
       </div>
      </div>
    </div>
    			<?php } } ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
</span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!--Banner-end-here-->
    
    <div class="clearfix"></div>
    
    <!--courses content start-->
    <div class="container gap30">
    <h2 class="text-center"><?php if($jump_to_most_popular){
				echo $jump_to_most_popular;
				}else {?>
				OVER 100 COURSES
				<?php } ?></h2>
    <p class="bottom-text text-center"><?php echo $popular_courses_description;?></p>
<?php 
$button_array[0]='btn-default';
$button_array[1]='btn-primary';
$button_array[2]='btn-success';
$button_array[3]='btn-info';
$button_array[4]='btn-warning';
?>
    <div align="center">
	<?php 
	for($i=0;$i<5;$i++){
	   $button_title = get_option('button_title'.$i);
      $button_link = get_option('button_link'.$i);
	  if($button_title) {
		?>
		<a class="btn <?php echo $button_array[$i];?>" href="<?php echo $button_link;?>"><?php echo $button_title;?></a>
	<?php
	}
	}
	?>
	</div>
    <div class="gap10" align="center"><a href="<?php echo $siteurl;?>/courses"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/browse-courses-btrn.png" alt="#" border="0" class="img-responsive"></a></div>
    
    </div>
        <!--courses content end-->


<!--testimonials-start-here-->
<div class="testimonials-back">

 <div class="container">
                <h3 class="pull-left"><a class="change_color" href="<?php echo $siteurl.'/testimonials';?>">
				<?php if($testimonials_title){
				echo $testimonials_title;
				}else {?>
				Testimonials
				<?php } ?>
				</a></h3>
                <div class="carousel-controls pull-right">
                    <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                    <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                </div><!--//carousel-controls--> 
                <div class="clearfix"></div>
                <div class="section-content">
                    <div id="news-carousel" class="news-carousel carousel slide">
                        <div class="carousel-inner">
<?php 
$testi_args = array('posts_per_page' => -1,'post_type' => 'testimonials','post_status' => 'publish','meta_query' => array( array( 'key' => 'come_under_home','value' => 'Yes', 'compare' => 'NOT' )));
$testimonials_posts = get_posts( $testi_args ); 
$newArray = array_chunk($testimonials_posts, 3, false);
foreach($newArray as $key => $testimonials_post) {?>
<div class="item <?php if($key==0){?>active<?php }?>"> 
<?php while (list($key, $value_new) = each($testimonials_post)) { ?>
									<a class="change_color" href="<?php echo $siteurl.'/testimonials';?>"><div class="col-md-4 news-item">
										<div class="item">
								<div class="quote-box">
								<p class="testimonials-heading">"<?php echo $testimonials_post[$key]->post_title; ?>"</p>
									<blockquote class="quote"><?php echo wp_trim_words($testimonials_post[$key]->post_content, 35); ?>
									</blockquote><!--//quote-->
									<p class="details">
										<span class="name"><?php echo get_post_meta( $testimonials_post[$key]->ID, 'testimonial_name', true );?></span>
										<span class="title"><?php echo get_post_meta( $testimonials_post[$key]->ID, 'designation', true );?></span>
									</p> 
									<i class="fa fa-quote-right"></i>                                
								</div><!--//quote-box-->
								<!--//people-->
							</div>           
									</div><!--//item--></a>
		<?php
			}?></div><!--outer item--><?php 
		 }	?>							
                        </div><!--//carousel-inner-->
                    </div><!--//news-carousel-->  
                </div><!--//section-content-->     
            </div><!--//news-->

</div>
<!--testimonials-end-here-->
<div class="clearfix"></div>

<!--TRENDING COURSE-start-->
<div class="treding-course">
<div class="container">
<h3 class="pull-left"><!--TRENDING COURSE-->
<?php 
$trending_courses_title = stripslashes_deep($home_page_h2_tetxs_array['trending_courses_title']);
if($trending_courses_title){
				echo $trending_courses_title;
				}else {?>
				TRENDING COURSE
				<?php } ?>
</h3>
 <div class="carousel-controls pull-right">
                            <a class="prev" href="#videos-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                            <a class="next" href="#videos-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                        </div><!--//carousel-controls-->
                        <div class="clearfix"></div>
                        		

                         <div class="section-content">    
                           <div id="videos-carousel" class="videos-carousel carousel slide">
                                <div class="carousel-inner">
                                
                                
                                <?php		$trending_course_order = get_option('trending_course_order');
				if($trending_course_order){
								$trending_course = unserialize(base64_decode($trending_course_order));
				}else{
				$trending_course = get_option('trending_course');
				}
					if($trending_course) {
				if($trending_course_order){
				$courses_cat_list = $trending_course;
				}else {
				$courses_cat_list = explode(",",$trending_course);
				}
				foreach($courses_cat_list as $each_course_cat){
				$course_categories[] = get_term_by('id',$each_course_cat,'product_cat');
				//echo "<br>one<br>";
				}
				}else{
				$course_categories =  get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
			//	echo "<br>two<br>";
				}
				
				$newArray = array_chunk($course_categories, 3, false);
foreach($newArray as $key => $course_category) { ?>
<div class="item <?php if($key==0){?>active<?php }?>"> 
<?php while (list($key, $value_new) = each($course_category)) {

				
				$read_more_link = get_term_link($course_category[$key]->slug, $course_category[$key]->taxonomy);
				$thumbnail_id = get_woocommerce_term_meta( $course_category[$key]->term_id, 'thumbnail_id', true ); 
				$image = wp_get_attachment_url( $thumbnail_id ); 
				 $unserialize_val = unserialize(base64_decode(get_option('serialized_val'.$course_category[$key]->term_id)));
				 $seo_ratingValue =  $unserialize_val['seo_ratingValue'];
 ?>

									<div class="col-md-4">
										<div class="bg-white-rounded col-trend">
										 <div align="center"><img src="<?php echo $image; ?>"  class="img-responsive" alt="#"></div>
										 
		<!--newly added content start-->								 
										 
<div class="padding-box">
	<div class="blackheading"><?php
	echo preg_replace('/[\[{\(].*[\]}\)]/U' , '', $course_category[$key]->name);
	// echo $course_category[$key]->name;?></div>
		<p><?php
		$string = wp_trim_words( $course_category[$key]->description, 5 ); //echo $string;
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

<a href="<?php echo $read_more_link;?>" class="btn btn-danger trending-btn">READ MORE</a>

</div>	 
										 
		<!--newly added content end-->								 
										 
										 
										 
										 
										 
										 
										 <!--already exist content start-->
										 <span class="trend-title" style="display:none;">
										<?php echo $course_category[$key]->name;?><br>
										<?php
									/*	echo "<pre>"; 
										print_r($course_category[$key]);
										echo "</pre>";*/
										$string = wp_trim_words( $course_category[$key]->description, 5 ); //echo $string;
				                        echo strip_shortcodes( $string );
										?>

									</span>
									
	<span class="course-rating" style="display:none;">
	<?php 
					 $seo_bestRating =  $unserialize_val['seo_bestRating'];

	$empty_star = $seo_bestRating-$seo_ratingValue;
	
	if (strpos($seo_ratingValue,'.') == true) {
		$exploded_value = explode('.',$empty_star);
		$empty_value = $exploded_value[0];
		}else {
		$empty_value = $empty_star;
		}
	//echo "empty start<br>".$seo_bestRating;
	if (strpos($seo_ratingValue,'.') == true) {
		/*if(is_float($seo_bestRating)){*/
		$exploded_value = explode('.',$seo_ratingValue);
		$rating_value = $exploded_value[0];
		}else {
		$rating_value = $seo_ratingValue;
		}
		//echo "rating value=<br>".$rating_value;
	for($i=0;$i<$rating_value;$i++){?>
	<i class="fa fa-star fa-enable-star"></i>
	<?php }
	if (strpos($seo_ratingValue,'.') == true) {
//	echo "yes";
	?><i class="fa fa-star-half-o fa-enable-star"></i><?php
	}
	for($i=0;$i<$empty_value;$i++){?>
	<i class="fa fa-star-o fa-enable-star"></i>
	<?php }
	 ?>
	</span>
	<A  style="display:none;" href="<?php echo $read_more_link;?>" class="btn-viewmore"><!--READ MORE-->SHOW ME &nbsp;&nbsp;&nbsp; <!--<i class="fa fa-arrow-right"></i>-->
	</A>
		<!--already exist content end-->
										</div>           
									</div><!--//item-->

	<?php }
	
	?> </div><?php
	 } ?>
</div>
</div>
</div>
</div>
</div>
<!--TRENDING COURSE-here-->


<!--Our Accreditations start-->
<div class="white-back-padding">
<div class="container">
<h4 class="text-center"><?php if($accredited_courses_title){
				echo $accredited_courses_title;
				}else {?>
				Our Accreditations
				<?php } ?></h4>
   <div class="wrapper-with-margin">
        <div id="owl-demo" class="owl-carousel">
						<?php 	if (class_exists('wpslideshow')) { 
		global $obj; $up = wp_upload_dir();
		  foreach($obj->show_logos() as $key => $logo){ ?>
           <div align="center"><img src="<?php echo $up['baseurl'].'/wpslideshow/logos/'.$logo->guid;?>" alt="#"></div>
		   		<?php } }?>	
        </div>
</div>
</div>
</div>
<!--Our Accreditations end-->


<!--contact-form-start-here-->
<div class="contact-back">
<div class="container">
<h4 class="text-center"><?php if($contact_us_title){
				echo $contact_us_title;
				}else {?>
				Contact Us
				<?php } ?></h4>
<p class="text-center"><?php echo $contact_us_description;?></p>
<?php echo do_shortcode('[contact-form-7 id="2168" title="Home Contact Form"]');?>
</div>

</div>
<!--contact-form-end-here-->


<!--Customer Showcase-start-->
<div class="white-back-padding">
<div class="container">
<h5 class="text-center"><?php if($training_for_business){
				echo $training_for_business;
				}else {?>
				Customer Showcase
				<?php } ?></h5>
<div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/line.jpg"  class="img-responsive" alt="#"></div>
<div class="clearfix"></div>
 <div class="wrapper-with-margin">
<div id="owl-demo2" class="owl-carousel">
<?php
$client_args = array('posts_per_page' => -1,'post_type' => 'clients','post_status' => 'publish');
$client_posts = get_posts( $client_args ); 

				$postid_count = count($retrive);
					foreach($client_posts as $key => $client_post) { /*if($key==4){ break;}*/
					$url = wp_get_attachment_image_src( get_post_thumbnail_id($client_post->ID), 'full');
		?>
<div align="center"><a href="<?php echo get_permalink(175);?>"><img src="<?php echo $url[0];?>"  alt="#"></a></div>
<?php
			}
			
										?>  

  </div>
</div>
</div></div>
<!--Customer Showcase-end-->
<?php get_footer(); ?>