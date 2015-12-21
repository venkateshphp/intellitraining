<?php 
/*********

Template Name: Template Home


*********/

get_header();
?>
<div class="container">  
  <div class="wrapper">  
    <div class="menu-slide">  
				<div class="hover_page"> 
				<div class="menu_part"> 
				<ul>
				<?php 
				$home_hover_order = get_option('home_hover_order');
				if($home_hover_order){
								//$home_hover = maybe_unserialize($home_hover_order);
								$home_hover = unserialize(base64_decode($home_hover_order));

								/*echo "<pre>";
								print_r();
								echo "</pre>";*/
				}else{
				$home_hover = get_option('home_hover');
				}
				
				if($home_hover) {
				if($home_hover_order){
				$pages_list = $home_hover;
				}else {
				$pages_list = explode(",",$home_hover);
				}
				/*echo "<pre>";
				print_r($pages_list);
				echo "</pre>";*/
				foreach($pages_list as $each_page){
				$child_pages[] = get_post($each_page);
				}
				}else{
				$child_pages = get_pages( array( 'child_of' => '123', 'sort_column' => 'post_date', 'sort_order' => 'asc' ) ); 
				}
				/*echo "<pre>";
				print_r($child_pages);
				echo "</pre>";*/
				foreach($child_pages as $key => $child_page){
				?>
				<li id="page_id<?php echo $key+1;?>" class="color<?php echo $key+1;?> control_width"><a href="<?php echo get_permalink($child_page->ID);?>"><?php echo $child_page->post_title;?></a><img class="arrow-control" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover-menu-arrow.png" /></li>
				<?php
				}	
				?>
				</li>
				</div> 	<!--menu_part-->
				<div class="page_part">
				
							<?php	foreach($child_pages as $key => $child_page){
							if($key==6) { break; }
							$fea_url = wp_get_attachment_image_src( get_post_thumbnail_id($child_page->ID), 'thumbnail');
							 ?>

					<div class="single_page page_id<?php echo $key+1;?>_content <?php if($key==0) { ?> first <?php } ?> color<?php echo $key+1;?>_content" <?php if($key==0) { ?> style="display:block;"  <?php } ?>  >
						<div class="post_title1 main-bd">
							<h1><?php
							$post_title =  get_post_meta( $child_page->ID, 'page_custom_title', true );
							if($post_title) {
							echo $post_title;
							}else{
							echo $child_page->post_title;
							}
							?></h1>
						<?php /*?><h1><?php echo $child_page->post_title;?></h1><?php */?>
						
						</div>
						<div class="content_part">
						 <div class="for_bg">
						<?php
						$page_content = $child_page->post_content;
						//echo $page_content;
						if($page_content){
						echo  custom_trim_words($page_content,40);
						// echo $page_content;
						 }else{
						 echo "No Description Is Available";
						 } ?>
						</div>
						</div>
						<div class="image_part">
					<?php if($fea_url){?>
						<a href="<?php echo get_permalink($child_page->ID);?>"><img src="<?php echo $fea_url[0];?>" width="179" height="159"></a>
						<?php }else { ?>
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no_image_available.jpg" width="179" height="159"/></a>
						<?php  } ?> 
						</div>
						<?php /*?><div class="link_part"><?php echo $child_page->post_title;?><a href="<?php echo get_permalink($child_page->ID);?>">...click here</a></div><?php */?>
						</div>
						<?php } ?>
					</div><!--page_part-->

				</div><!--hover_page--> 
			  </div><!--menu-slide--> 
			</div><!--wrapper--> 
		</div><!--container-->

	<div class="course-bg">
  <div class="container">
    <div class="wrapper">
	<?php
	

							//$home_page_h2_tetxs_array = maybe_unserialize(get_option('home_page_h2_tetxs'));
							
															$home_page_h2_tetxs_array = unserialize(base64_decode(get_option('home_page_h2_tetxs')));


							$jump_to_most_popular = $home_page_h2_tetxs_array['jump_to_most_popular'];
							$testimonials_title = $home_page_h2_tetxs_array['testimonials_title'];
							$accredited_courses_title = $home_page_h2_tetxs_array['accredited_courses_title'];
							$training_for_business = $home_page_h2_tetxs_array['training_for_business'];
							?>
	<div class="outer_div_course_finder">
		<div class="for_top_heading_part">
			<div class="center_part">
			<?php /*?><h3>Jump To Most Popular</h3><?php */?>
				<h2>
				<?php if($jump_to_most_popular){
				echo $jump_to_most_popular;
				}else {?>
				Jump To Most Popular
				<?php } ?>
				</h2>
			</div>
		</div>
	<?php 
		$box1 =  get_option('homebox_1');
		if($box1) {
		$retrive = explode("," ,$box1);
		$postid_count = count($retrive);
			foreach($retrive as $key => $retrive_ID) { if($key==6){ break;}
				$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
				$count = count($single_taxonomy);
			if($count){
			foreach($single_taxonomy as $key => $single_taxonomy_cat){
			$cat_id = $single_taxonomy_cat->term_id;						
			if($cat_id == $retrive_ID){
		?>
		<a href="<?php echo get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy);?>">
			<div class="over-Details">
				<div class="product cat_image">
				<?php $thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
				// get the image URL
				$image = wp_get_attachment_url( $thumbnail_id ); 
				?><img src="<?php echo $image;?>"/>
				</div><!--product-->
				<div class="pro-detail">
					<h4><?php echo $single_taxonomy_cat->name/*."slug = ".$single_taxonomy_cat->slug*/;?></h4>
					<p><?php $string = wp_trim_words( $single_taxonomy_cat->category_description, 5 ); //echo $string;
				echo strip_shortcodes( $string );
			
					?></p>
						<div class="accred_div_card">
							<span class="icon_right cat_icon"></span>
							<span class="accred_title"> View courses</span>
						</div>
				</div><!--pro-detail-->
			</div>
		</a><!--over-Details-->
	<?php } } } }
	}else{ //If no theme option values then this will work 
	
	$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
				$count = count($single_taxonomy);
			if($count){
			$i=0;
			foreach($single_taxonomy as $key => $single_taxonomy_cat){
			$cat_id = $single_taxonomy_cat->term_id;						
		?>
		<a href="<?php echo get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy);?>">
			<div class="over-Details">
				<div class="product cat_image">
				<?php $thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
				// get the image URL
				$image = wp_get_attachment_url( $thumbnail_id ); 
				?><img src="<?php echo $image;?>"/>
				</div><!--product-->
				<div class="pro-detail">
					<h4><?php echo $single_taxonomy_cat->name/*."slug = ".$single_taxonomy_cat->slug*/;?></h4>
					<p><?php  $string = wp_trim_words( $single_taxonomy_cat->category_description, 5 ); echo $string;?></p>
						<div class="accred_div_card">
							<span class="icon_right cat_icon"></span>
							<span class="accred_title"> View courses</span>
						</div>
				</div><!--pro-detail-->
			</div>
	</a><!--over-Details-->
<?php	
++$i;
if($i==6) { break; }
	} } 
	}
	
	 ?>
	</div><!--outer_div_course_finder-->				  
					  
      
    </div>
  </div>
</div>

<div class="container">
  <div class="wrapper">
    <div class="details">
      <div class="col add_margin_right">
	  <?php 
	  $latest_news_title = get_option('latest_news_title');
			$video_title = get_option('video_title');
			$sign_up_title = get_option('sign_up_title');
			
	  ?>
        <h2>
		<?php if($latest_news_title){
		echo $latest_news_title;
		}else { ?>
		latest news and blog
		<?php } ?>
		</h2>
		<div class="recent_posts">
<?php
global $post;
$args = array(
	'posts_per_page'   => 3,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	); 
$myposts = get_posts( $args );
foreach ( $myposts as $post ) {
?>
<div class="single_post">
				<div class="post_title"><strong><?php the_title(); ?></strong></div>
				<div class="post_content"><?php echo  wp_trim_words($post->post_content,10); ?>
								<a class="read_more_btn"  href="<?php the_permalink(); ?>">Read More</a>
				</div>
				</div>

<?php }
 ?>
			
		</div>
      
      </div>
      <div class="col">
	  				<h2>
					<?php if($video_title){
		echo $video_title;
		}else { ?>
					Video
					<?php } ?>
					</h2>
      <div class="vedio"> 
	<?php $homepage_video_section_url =  get_option('homepage_video_section_url'); ?>

	 
	<?php if($homepage_video_section_url) {echo $homepage_video_section_url;}?>
      </div> 
      </div>
      <div class="col add_float_right">
        <h2>
		<?php if($sign_up_title){
		echo $sign_up_title;
		}else { ?>
		Sign up form
		<?php } ?>
		</h2>
		<?php
		
		  $site_url = home_url(); 
		  echo do_shortcode('[mc4wp_form]');
		  ?>
		  <?php /*?><div class="login_link">
		<a href="<?php  echo bloginfo('siteurl')."/login"; ?>">Login</a>
		 </div><?php */?><!--sing-->
		<form method="post" action="<?php  echo bloginfo('siteurl')."/register"; ?>" id="signupForm" style="display:none;">
		<input type="text" class="txtfild" id="username" name="username" placeholder="Username"/>
		<input type="text" class="txtfild" id="email" name="email" placeholder="Email Id"/>
		<input type="password" class="txtfild" id="password" name="password" placeholder="Password"/>
		<input type="password" class="txtfild" id="confirm_pass" name="confirm_pass" placeholder="Confirm Password"/>
			<div class="error1"><?php
							if(isset($_GET['user_exists'])){
							 echo 'User Already Exists.Try Agin With Another Mail ID.';
							 } ?>	</div>
		<div class="sing">
		<a class="anchor_field for-white-color" href="<?php  echo bloginfo('siteurl')."/login"; ?>">Login</a><span><input type="submit" class="sidebar-signup-btn" name="user_register" value="Sign-up" /></span> </div>
		</div>
		</form>


    </div>
  </div>
</div>

<div class="testmonial-bg desktop_view">
  <div class="container">
    <div class="wrapper">
	<?php $siteurl =  site_url(); ?>
      <?php /*?><h1><a class="change_color" href="<?php echo $siteurl.'/testimonials';?>">Testimonials</a></h1><?php */?>
	  
	  <h2><a class="change_color" href="<?php echo $siteurl.'/testimonials';?>">
				<?php if($testimonials_title){
				echo $testimonials_title;
				}else {?>
				Testimonials
				<?php } ?>
				</a></h2>
	  			  	<a class="prev" id="test_next"></a>		
		<div class="owl-carouse" id="owl-demo">
		<?php 
		$testi_args = array('posts_per_page' => -1,'post_type' => 'testimonials','post_status' => 'publish',);
		$testimonials_posts = get_posts( $testi_args ); 
		foreach($testimonials_posts as $testimonials_post){	
		$come_under_home = get_post_meta( $testimonials_post->ID, 'come_under_home', true );
		if($come_under_home=="Yes"){
		?>
			<a class="change_color" href="<?php echo $siteurl.'/testimonials';?>"><div class="cols">
				<div class="test-col">
				<h3>"<?php echo $testimonials_post->post_title; ?>"</h3>
				<p><?php echo wp_trim_words($testimonials_post->post_content, 40); ?></p>
				</div>
				<div class="athor">
				<p><?php echo get_post_meta( $testimonials_post->ID, 'testimonial_name', true );?>, <span><?php echo get_post_meta( $testimonials_post->ID, 'designation', true );?></span></p>
				</div>
			</div></a>
		<?php
			}
		 }	?>
		</div><!--owl-carouse-->
					  	<a class="next1" id="test_next"></a>		
    </div>
  </div>
</div>

<div class="testmonial-bg for_mobile_only">
  <div class="container">
    <div class="wrapper">
	<?php $siteurl =  site_url(); ?>
      <?php /*?><h1><a class="change_color" href="<?php echo $siteurl.'/testimonials';?>">Testimonials</a></h1><?php */?>
	  
	  <h2><a class="change_color" href="<?php echo $siteurl.'/testimonials';?>">
				<?php if($testimonials_title){
				echo $testimonials_title;
				}else {?>
				Testimonials
				<?php } ?>
				</a></h2>
	  			  	<a class="prev" id="test_next"></a>		
		<div class="owl-carouse" id="owl-demo-mobile">
		<?php 
		$testi_args = array('posts_per_page' => -1,'post_type' => 'testimonials','post_status' => 'publish',);
		$testimonials_posts = get_posts( $testi_args ); 
		foreach($testimonials_posts as $testimonials_post){	
		$come_under_home = get_post_meta( $testimonials_post->ID, 'come_under_home', true );
		if($come_under_home=="Yes"){
		?>
			<a class="change_color" href="<?php echo $siteurl.'/testimonials';?>"><div class="cols">
				<div class="test-col">
				<h3>"<?php echo $testimonials_post->post_title; ?>"</h3>
				<p><?php echo wp_trim_words($testimonials_post->post_content, 40); ?></p>
				</div>
				<div class="athor">
				<p><?php echo get_post_meta( $testimonials_post->ID, 'testimonial_name', true );?>, <span><?php echo get_post_meta( $testimonials_post->ID, 'designation', true );?></span></p>
				</div>
			</div></a>
		<?php
			}
		 }	?>
		</div><!--owl-carouse-->
					  	<a class="next1" id="test_next"></a>		
    </div>
  </div>
</div>



<div class="container">
  <div class="wrapper">
    <div class="c-logo">
    <?php /*?>  <h1>ACCREDITED COURSES</h1><?php */?>
	  
	  <h2>
				<?php if($accredited_courses_title){
				echo $accredited_courses_title;
				}else {?>
				ACCREDITED COURSES
				<?php } ?>
				</h2>
		<ul id="flexiselDemo2"> 
		
		<?php 	if (class_exists('wpslideshow')) { 
		global $obj; $up = wp_upload_dir(); ?>
		
		<?php  foreach($obj->show_logos() as $key => $logo){ ?><li>
		<img src="<?php echo $up['baseurl'].'/wpslideshow/logos/'.$logo->guid;?>" height="63" width="188" />
		<?php } ?>	
		</li>
		<?php }  ?>	
		</ul>

    </div>
  </div>
</div>

<div class="Training-bg">
  <div class="container">
    <div class="wrapper">
      <div class="Training">
       <?php /*?> <h1>TRAINING FOR BUSINESS & ENTERPRISE</h1><?php */?>
		
		<h2>
				<?php if($training_for_business){
				echo $training_for_business;
				}else {?>
				TRAINING FOR BUSINESS & ENTERPRISE
				<?php } ?>
				</h2>
        <div class="lt">
          <p>
<?php
$my_id = 175;
$post_id_175 = get_post($my_id);
$content = $post_id_175->post_content;
 echo wp_trim_words($content, 100);?>		  <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat at purus ac pretium. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec suscipit tortor libero, eu pulvinar elit scelerisque ac. Vestibulum vulputate tortor ut eros maximus interdum. Duis condimentum ex ac ornare ornare. Nullam vulputate vehicula libero et dapibus. Vestibulum vulputate tortor ut eros maximus interdum. Duis condimentum ex ac ornare ornare. Nullam vulputate vehicula libero et dapibus.--></p>
          <span><a class="white_font_color" href="<?php echo get_permalink(175);?>">Learn More</a></span> </div>
        <div class="rt">
		<?php $box1 =  get_option('homepage_client_options');
								/*echo "<pre>";
								print_r($box1);
								echo "</pre>";*/
		if($box1) {
		$retrive = explode("," ,$box1);
		$postid_count = count($retrive);
			foreach($retrive as $key => $retrive_ID) { if($key==4){ break;}
			if($retrive_ID){
			$url = wp_get_attachment_image_src( get_post_thumbnail_id($retrive_ID), 'client_logo');
?>
<a href="<?php echo get_permalink(175);?>"><img id="client_image<?php echo $key;?>" class="client_image" src="<?php echo $url[0];?>"></a>
<?php
			}
			}
			}
										?>
		 <?php /*?><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/it-logo.png" alt=""><?php */?></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>