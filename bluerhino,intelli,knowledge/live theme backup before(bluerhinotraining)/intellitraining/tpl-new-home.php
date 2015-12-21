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
		
		$icon1_text = get_option('icon1_text');
		$icon1_link = get_option('icon1_link');
		$icon2_text = get_option('icon2_text');
		$icon2_link = get_option('icon2_link');
		$icon3_text = get_option('icon3_text');
		$icon3_link = get_option('icon3_link');
		$icon4_text = get_option('icon4_text');
		$icon4_link = get_option('icon4_link');
		$icon5_text = get_option('icon5_text');
		$icon5_link = get_option('icon5_link');
		$icon6_text = get_option('icon6_text');
		$icon6_link = get_option('icon6_link');
		
		
		$first_text = get_option('first_text');
		$first_desc = get_option('first_desc');
		$second_text = get_option('second_text');
		$second_desc = get_option('second_desc');
		$thired_text = get_option('thired_text');
		$thired_desc = get_option('thired_desc');
		$fourth_text = get_option('fourth_text');
		$fourth_desc = get_option('fourth_desc');
		
		$testimonial_section_left_image_upload = get_option('testimonial_section_left_image_upload');

		
		$right_side_image_upload = get_option('right_side_image_upload');
		$heading1_text = get_option('heading1_text');
		$heading2_text = get_option('heading2_text');
		$heading3_text = get_option('heading3_text');
		$desc_text = get_option('desc_text');
		$view_more_link = get_option('view_more_link');
		?>





<!-- CONTENT --------------------------------------------------------------------------------->

        <!-- Intro Section -->
        <section class="hero">
          

            <!-- Hero Slider Section -->
            <div class="flexslider fullscreen-carousel hero-slider-1 parallax parallax-section1">
                <ul class="slides">
				<?php if (class_exists('wpslideshow')) {  global $obj; $up = wp_upload_dir(); 
  
$results_default = $obj->show_slider();

$default_array = $results_default;
foreach($default_array as $key => $val){
$default_array[$key] = $default_array[$key]->id;
}
	$category_optionname = 'wpslideshow-sorted_values';
	$values = get_option( $category_optionname);	
	
	
	
		$serialized_value = get_option( $category_optionname);	
	$unserialized_values = unserialize(base64_decode($serialized_value));
     $results_after_order =  $obj->get_image($unserialized_values);
	 
	 $after_order_values = $results_after_order;
	 
foreach($after_order_values as $key => $val){
$after_order_values[$key] = $after_order_values[$key]->id;
}
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

				  foreach($retrive as $key => $slide){ ?>
                    <li>
					<?php 
	$file_type = $slide->uploadFileType;
	if($file_type=='video'){
	?>
	<video class="video-section" id="<?php echo $key; ?>">
		<source src="<?php echo $up['baseurl'].'/wpslideshow/'.$slide->guid;?>" type="video/ogg">
	</video>
		<?php }elseif($file_type=='image'){?>
                        <img src="<?php echo $up['baseurl'].'/wpslideshow/'.$slide->guid;?>" alt="portfolio" <?php if($key!=0){?>draggable="false"<?php } ?>  />
						 <?php } ?> 
                        <div class="overlay-hero">
                            <div class="container caption-hero light-color">
                                <div class="inner-caption">

                                    <h2 class="h2"><?php if($slide->title){ echo $slide->title; }?></h2>
                                    <p class="lead"><?php if($slide->content){ echo $slide->content; }?></p>
                                    <a href="<?php  if($slide->link) {  echo $slide->link; }?>" class="btn btn-md btn-white-line xs-hidden">LEARN MORE</a>

                                </div>
                          </div>
                      </div>
                  </li>
                 <?php  }} ?>   
                    

                    



   

                </ul>
            </div>
            <!-- End Hero Slider Section -->
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->
        
        
            <!-- Process -->
        <section id="process" class="ptb ptb-sm-80">
            <div class="wow fadeInLeft container text-center">
               
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        
                            <a href="<?php echo $icon1_link;?>"><div class="page-icon-top"><i class="fa fa-suitcase"></i>
</div>
                            <h6><?php if($icon1_text){echo $icon1_text;}else{?>Courses<?php } ?></h6>
                      
                    </div> </a>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                           <a href="<?php echo $icon2_link;?>"><div class="page-icon-top"><i class="fa fa-laptop"></i>
                          
						  
                        </div> 
						<h6><?php if($icon2_text){echo $icon2_text;}else{?>e-learning<?php } ?></h6> 
                    </div></a>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="<?php echo $icon3_link;?>"><div class="page-icon-top"><i class="fa fa-home"></i>
                            </div> <h6>
                       <?php if($icon3_text){echo $icon3_text;}else{?>In-House<?php } ?></h6>
                    </div></a>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="<?php echo $icon4_link;?>"><div class="page-icon-top"><i class="fa fa-map-marker"></i>
                            
                        </div><h6><?php if($icon4_text){echo $icon4_text;}else{?>LOCATIONs<?php } ?></h6>
                    </div></a>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="<?php echo $icon5_link;?>"><div class="page-icon-top"><i class="fa fa-file-text-o"></i>
                            
                        </div><h6><?php if($icon5_text){echo $icon5_text;}else{?>My.Intelli<?php } ?></h6>
                    </div></a>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="<?php echo $icon6_link;?>"><div class="page-icon-top"><i class="fa fa-newspaper-o"></i>
                            
                        </div><h6><?php if($icon6_text){echo $icon6_text;}else{?>BLOG<?php } ?></h6>
                    </div></a>
                </div>
            </div>
        </section>
        <!-- End Process -->

        
        

        <!--Trending COURSES-->
      
            <div class="blue-back">
            <div class="row row-new">
            <div class="col-md-3 padding-left-right">
            <div class="darkblue-box">
            <h4 class="lineheight55">
			<?php 
			$trending_courses_title = stripslashes_deep($home_page_h2_tetxs_array['trending_courses_title']);
if($trending_courses_title){
				echo $trending_courses_title;
				}else {?>
				Trending
COURSES
				<?php } ?>
			
</h4>
<div class="clearfix"></div>

<a href="<?php echo $siteurl;?>/courses" class="btn btn-md btn-white-line">VIEW ALL COURSES</a>
            
            </div>
            
            </div>
            
            <div class="col-md-9 padding-left-right">
            <div class="paddingcol"><div id="demo">
    

              <div id="owl-demo" class="owl-carousel">
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
				}
				}else{
				$course_categories =  get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
				}
				
				$newArray = array_chunk($course_categories, 3, false);
foreach($newArray as $key => $course_category) { ?>
<?php while (list($key, $value_new) = each($course_category)) {

				
				$read_more_link = get_term_link($course_category[$key]->slug, $course_category[$key]->taxonomy);
				$thumbnail_id = get_woocommerce_term_meta( $course_category[$key]->term_id, 'thumbnail_id', true ); 
				$image = wp_get_attachment_url( $thumbnail_id ); 
				 $unserialize_val = unserialize(base64_decode(get_option('serialized_val'.$course_category[$key]->term_id)));
				 $seo_ratingValue =  $unserialize_val['seo_ratingValue'];
 ?>
                <div class="item">
				
                <div class="box-one">
                <div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/c1.jpg" alt="#" class="img-responsive"></div>
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
                </div>
				
                </div>
				<?php }} ?>
                
              
              </div>


    </div></div>
            
            
            </div>
            
            
            </div>
            
            </div>
        <div class="clearfix"></div>
        <!-- End About Section-->
        <hr />
        <!-- Service Section -->
        <section id="service" class="ptb ptb-sm-80">
            <div class="wow fadeInLeft container text-center">
                <div class="spacer-60"></div>
                <div class="row">
                    <div class="col-md-5 col-sm-12 mb-45 col-xs-offset-1">
                        <div class="page-icon-top"><i class="ion-ios-upload-outline blackcolor"></i></div>
                        <h5 class="blackcolor"><?php if($first_text){echo $first_text;}else{?> How do we achieve our mission?<?php } ?></h5>
                        <p class="blackcolor-small"><?php if($first_desc){echo $first_desc;}else{?>We offer weekend courses in central London locations so that you can still get the training you need without taking time off work. Our experienced trainers will give you all the tools you need to successfully pass the courses and allow you to take your career to the next level.<?php } ?></p>
                    </div>
                    <div class="col-md-5 col-sm-12 mb-45">
                        <div class="page-icon-top"><i class="ion-ios-people-outline blackcolor"></i></div>
                        <h5 class="blackcolor"><?php if($second_text){echo $second_text;}else{?> Core Values<?php } ?></h5>
                        <p class="blackcolor-small"><?php if($second_desc){echo $second_desc;}else{?>We perform to the highest standards for all of our customers
We only employ the highest calibre trainers to ensure that our customers needs can be fully met.<?php } ?></p>
                    </div>
                    <div class="clearfix"></div>
                   <div class="col-md-5 col-sm-12 mb-45 col-xs-offset-1">
                        <div class="page-icon-top"><i class="ion-speedometer blackcolor"></i></div>
                        <h5 class="blackcolor"><?php if($thired_text){echo $thired_text;}else{?> Aenean commodo ligula eget dolor<?php } ?></h5>
                        <p class="blackcolor-small"><?php if($thired_desc){echo $thired_desc;}else{?>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.<?php } ?></p>
                    </div>
                    <div class="col-md-5 col-sm-12 mb-45">
                        <div class="page-icon-top"><i class="ion-ios-loop blackcolor"></i></div>
                        <h5 class="blackcolor"><?php if($fourth_text){echo $fourth_text;}else{?> Donec pede justo, fringilla vel<?php } ?></h5>
                        <p class="blackcolor-small"><?php if($fourth_desc){echo $fourth_desc;}else{?>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.<?php } ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Section -->
        
        
        
        <!--testimonials-start-here-->
        
        <div class="green-back">
        <div class="row row-new">
        <div class="col-xs-5 padding-left-right hidden-xs"><img src="<?php if($testimonial_section_left_image_upload){ echo $testimonial_section_left_image_upload;}else { echo get_stylesheet_directory_uri(); ?>/images/testimonials-back.png<?php } ?>" alt="#" class="img-responsive"></div>
         <div class="col-xs-7 testimonial-section">
         
         <h2 class="light-color gap70 text-center testimonial-heading"><a class="change_color" href="<?php echo $siteurl.'/testimonials';?>">
				<?php if($testimonials_title){
				echo $testimonials_title;
				}else {?>
				What our customer says
				<?php } ?>
				</a></h2>
         
         <div class="owl-carousel testimonial-carousel nf-carousel-theme">
		 
		 <?php 
$testi_args = array('posts_per_page' => -1,'post_type' => 'testimonials','post_status' => 'publish','meta_query' => array( array( 'key' => 'come_under_home','value' => 'Yes', 'compare' => 'NOT' )));
$testimonials_posts = get_posts( $testi_args ); 
foreach($testimonials_posts as $key => $testimonials_post) {?>
                    <div class="item">
                        <div class="testimonial text-center light-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">"<?php echo wp_trim_words($testimonials_post->post_content, 35); ?>"</p>
                            <h6 class="quote-author"><?php echo get_post_meta( $testimonials_post->ID, 'testimonial_name', true );?><span style="font-weight: 400;">( <?php echo get_post_meta( $testimonials_post->ID, 'designation', true );?> )</span></h6>
                        </div>
                    </div>
					<?php } ?>
                    
                    
                </div>
         
         
         </div>
        </div>
        
        
        </div>
        
        <!--testimonials-end-here--> 

       
<div class="clearfix"></div>


<!--blog-social-block-start-->

<div class="row row-new">
<div class="col-md-6 padding-left-right">
<section class="blog-block">

<header class="clearfix border-bottom-blue">
                  <h3 class="blackcolor"><strong>Our</strong><br><span class="secondary-font"><strong>Blog</strong></span></h3>
                    <a class="btn btn-md btn-white-line blackcolor" target="_blank" href="<?php echo $siteurl;?>/blog"><span>Read latest posts</span><i class="icon-arrow-right-sharp"></i></a>
                </header>

                <?php $recent_posts = get_posts(array('posts_per_page' => 1,'post_type' => 'post','orderby'=> 'date','order'=> 'DESC'));
				
			//	$post_author_id = get_post_field( 'post_author', $post_id );
				/*echo "<pre>";
				print_r($recent_post);
				echo "</pre>";*/
				foreach($recent_posts as $key => $recent_post ){
				
$url = wp_get_attachment_image_src( get_post_thumbnail_id($recent_post->ID), 'full');

				?>
				<div class="blog-block-main">
                    <div class="meta-box clearfix">
                        <p class=" meta author blackcolor">author: <span><?php the_author_meta( 'display_name', $recent_post->post_author ); ?><!--sepra4life--></span></p>
                        <div>
                            <p class="meta date blackcolor"><span><strong><?php //echo $recent_post->post_date;
							
							 echo date("F m, Y", strtotime($recent_post->post_date));
							
							?><!--March 12, 2015--></strong></span></p>
                            <p class="meta comments blackcolor"><strong><!--5--><?php echo $recent_post->comment_count;?> comments</strong></p>
                        </div>
                    </div>
                    <h3><a href="#"><?php echo $recent_post->post_title;?><!--Lorem ipsum dolor sit amet, consectetuer --></a></h3>
                                                            <img width="267" height="237" alt="Hunting for inspiration? Introducing Huntt." src="<?php echo $url[0];?>">
                                        <p><?php echo $recent_post->post_content;?><!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.--></p>

<p> <a class="more-link" href="<?php echo get_permalink($recent_post->ID);?>">Read more</a></p>
                </div>
				<?php
				}
				
				?>
                
            </section>

</div>



<div class="col-md-6 padding-left-right">

<section class="twitter-block">

                <header class="clearfix border-bottom-blue">
                    <h3 class="secondary-font blackcolor"><span><strong>the</strong></span> <strong class="blackcolor">Buzz</strong></h3>
                    <a class="btn" target="_blank" href="#"><span></span><i class="fa fa-twitter fa-2x"></i>
</a>
                </header>

                <div class="twitter-main">
				<?php dynamic_sidebar( 'Twitter Feeds' ); ?>

                    <!--<p class="meta date"><a href="#" target="_blank">@ryan_burns</a></p>
                    <p class="twit">Love the <a href="#">@knowledgetreetraining</a> support. Always take care of their customers. Great premium <a href="#">#WordPress</a> themes!</p>
                    <div class="twit-author">
                        <img alt="Ryan Burns - Love the Themes Kingdom support. Always take care of their customers. Great premium WordPress themes" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ryan-burns.jpg">
                        <div class="twit-author-info">
                            <p>Ryan Burns</p>
                            <a href="#">Richmond, VA</a>
                        </div>
                    </div>
                    <a class="btn" href="#"><span>Follow Us</span><i class="icon-twitter"></i></a>-->
                </div>
            </section>
</div>



</div>


<!--blog-social-block-end-->

      <?php
							$right_side_image_upload = get_option('right_side_image_upload');
							$heading1_text = get_option('heading1_text');
							$heading2_text = get_option('heading2_text');
							$heading3_text = get_option('heading3_text');
							$desc_text = get_option('desc_text');
														$view_more_link = get_option('view_more_link');

							?>

<!--grey-background-content-start-->
<div class="lightgreyback">
<div class="row row-new">
<div class="col-md-6 gap30">
<div class="padding-left">
<h5 class="blackcolor"><?php if($heading1_text){ echo $heading1_text;}else {?>TRUSTED BY THESE AND<?php } ?></h5>
<div class="contributor-header blackcolor">
<?php if($heading2_text){ echo $heading2_text;}else {?>MANY<br>
MORE AWESOME<br>
CUSTOMERS!<?php } ?>
</div>
<div class="clearfix gap70"></div>
<h3 class="blackcolor text-center"><?php if($heading3_text){ echo $heading3_text;}else {?>Aenean commodo<?php } ?></h3>
<p class="text-center blackcolor"><?php if($desc_text){ echo $desc_text;}else {?>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. <?php } ?></p>
<a href="<?php if($view_more_link){ echo $view_more_link;}else {?>#<?php } ?>" target="_blank" class="btn btn-md borderblack blackcolor gap30"><span>View More</span></a>

</div>
</div>

<div class="col-md-6 padding-left-right" align="right"><img src="<?php if($right_side_image_upload){ echo $right_side_image_upload;}else { echo get_stylesheet_directory_uri(); ?>/images/people.png<?php } ?>" alt="#" class="img-responsive"></div>


</div>
</div>

<!--grey-background-content-end-->


<?php get_footer(); ?>