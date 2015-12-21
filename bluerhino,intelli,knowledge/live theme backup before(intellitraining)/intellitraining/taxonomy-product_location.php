<?php 
get_header();
?>
<div class="container">
			<div class="wrapper">
				<div class="main-bd">
				<!--For add the content start-->	 
				<?php 
				$cate = get_queried_object();
				?>
				 <h2><?php echo $cate->name;?></h2>
				 <hr>
					<div style="display:none" class="page-content">
				<?php echo $cate->description;?>
					</div>		
					<?php  ?>
				<!--For add the content end-->	 
					<div class="main-bd-lt">
						<h4>Key Features</h4>
						<div class="listkeayf">
							<ul>
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon1.png" alt=""></span> 29 Hrs of High Quality e-Learning content</li>
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon2.png" alt=""></span> 5 PMP&reg; Simulation exams</li>
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon3.png" alt=""></span>Retain PMP Certification for 6 years</li>
							</ul>
							<ul style="border:none;">
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon4.png" alt=""></span> 83 Chapter-end Quizzes</li>
							    <li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon5.png" alt=""></span>105 PDUs Offered</li>
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon6.png" alt=""></span>15 end of chapter reference slides for terms & acronyms</li>
							</ul>
						</div>
						<div class="course-table" id="course-table_id">
		<table id="reorder" width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#06CBCB">
			<thead>
			<tr class="heading_row" itemscope itemtype="http://schema.org/Event">
			<td class="course_title_width" itemprop="name" height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table">Course Name <span></span></td>
			<td itemprop="location" itemscope itemtype="http://schema.org/Place" height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table"> <span itemprop="addressLocality">Location</span></td>
			<td itemprop="startDate" content="2015-02-25T09:30" height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table"><span class="arrow_label">Date</span></td>
			<td height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table"><span class="arrow_label">Availability</span></td>
			<td class="duration_width" height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table">Duration</td>
			<td height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table">Weekend</td>
			<td itemprop="offers" itemscope itemtype="http://schema.org/Offer" height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table"><span itemprop="price" class="arrow_label">Price</span><span class="arrows"></span></td>
			<td height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table">&nbsp;</td>
			</tr>
			</thead>
		<tbody>
	<?php
	if (have_posts())  { while (have_posts()) { the_post(); 
	$post_id = $post->ID;
	$taxonomy = "product_location";
	$cat_deatils = get_the_terms( $post_id, $taxonomy ); 
	$taxonomy1 = "course_periods";
	$cat_deatils1 = get_the_terms( $post_id, $taxonomy1 ); 
	$attributes = get_post_meta($post_id,'_product_attributes',true);
	if(!$attributes) { 
	$regular_price = get_post_meta($post_id,'_regular_price',true);
	if($regular_price){
	?>
 <tr itemscope itemtype="http://schema.org/Event">
    <td class="course_title_width" itemprop="name" height="50" align="center" valign="middle" class="row-col-wht">
		<?php /*?><a class="font_color for_captitalize" href="<?php the_permalink() ?>" rel="bookmark"><?php */?><?php the_title();?>	<?php /*?></a><?php */?>
		</td>
    <td itemprop="location" itemscope itemtype="http://schema.org/Place" height="50" align="center" valign="middle" class="row-col-wht">
		<span itemprop="addressLocality">
<?php
		$loc_count = count($cat_deatils);
		$for_check_count = $loc_count-1;
					if($cat_deatils){
								foreach($cat_deatils as $key => $cat_deatil) {
								if($loc_count==1) {
								?>
							<a class="font_color" href="<?php echo get_term_link($cat_deatil->term_id,$cat_deatil->taxonomy);?>"><?php echo $cat_deatil->name;?></a><?php
								}else
								if($key==($loc_count-1)){
								?>
								<a class="font_color" href="<?php echo get_term_link($cat_deatil->term_id,$cat_deatil->taxonomy);?>"><?php echo $cat_deatil->name;?></a><?php
								}else {?>
								<a class="font_color" href="<?php echo get_term_link($cat_deatil->term_id,$cat_deatil->taxonomy);?>"><?php echo $cat_deatil->name.",";?></a><?php
								}
								}
								}
					?>		</span>
	</td>
    <td class="reduce_fontsize"  itemprop="startDate" content="2015-02-25T09:30" height="50" align="center" valign="middle" class="row-col-wht"></td>
    <td height="50" align="center" valign="middle" class="row-col-wht"></td>
	<td class="duration_width" height="50" align="center" valign="middle" class="row-col-wht"></td>
    <td height="50" align="center" valign="middle" class="row-col-wht">
		<?php if(!$cat_deatils1) {}else {foreach($cat_deatils1 as $cat_deatil1){ if(strtolower($cat_deatil1->name)=="weekend"){?>
			<img class="tick-class" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tick1.png" />
		<?php }else { } } }?>
	 </td>
    <td itemprop="offers" itemscope itemtype="http://schema.org/Offer" height="50" align="center" valign="middle" class="row-col-wht">
		<span itemprop="price">
		<?php if($regular_price) {echo "&#163;".$regular_price; } ?>
		</span>
	</td>
    <td height="50" align="center" valign="middle" class="row-col-wht">
		<a itemprop="url" href="http://sitecare.org/intellitraining/cart/?add-to-cart=<?php echo $post->ID; ?>">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/book-now-btn.png" alt="" width="91" height="29">
		</a>
	</td>
  </tr>
  <?php
  }
  }else{
	if(isset($attributes['pa_course-date']['name'])){
	$attr_name_course_date = $attributes['pa_course-date']['name'];
	}
	if(isset($attributes['pa_duration']['name'])) {
	$attr_name_duration = $attributes['pa_duration']['name'];
	}
	if(isset($attributes['pa_availability']['name'])){
	$attr_name_availability = $attributes['pa_availability']['name'];
	}
		  $args = array(
			 'post_type'     => 'product_variation',
			 'post_status'   => array( 'private', 'publish' ),
			 'numberposts'   => -1,
			 'orderby'       => 'menu_order',
			 'order'         => 'asc',
			 'post_parent'   => $post->ID
		 );
                 $variations = get_posts( $args ); 
				
			foreach($variations as $variation){
				 $vari_id = $variation->ID;
					if(isset($attributes['pa_course-date']['name'])){
					$date = get_post_meta($vari_id,'attribute_pa_course-date',true);
					}
					if(isset($attributes['pa_duration']['name'])) {
					$course_duration = get_post_meta($vari_id,'attribute_pa_duration',true);
					}
					if(isset($attributes['pa_availability']['name'])){
					$availability = get_post_meta($vari_id,'attribute_pa_availability',true);
					}
	$price = get_post_meta($vari_id,'_price',true);
	 if((isset($date))||(isset($course_duration))||(isset($availability))) {
	 if($price) {
	 ?>
	 <tr itemscope itemtype="http://schema.org/Event">
    <td class="course_title_width" itemprop="name" height="50" align="center" valign="middle" class="row-col-wht">
	  <?php /*?><a class="font_color for_captitalize" href="<?php the_permalink() ?>" rel="bookmark"><?php */?>
	  	<?php the_title(); ?>
	 <?php /*?> </a><?php */?>
	</td>
     <td itemprop="location" itemscope itemtype="http://schema.org/Place" height="50" align="center" valign="middle" class="row-col-wht">
	 	<span itemprop="addressLocality">
		<?php
		$loc_count = count($cat_deatils);
		$for_check_count = $loc_count-1;
					if($cat_deatils){
								foreach($cat_deatils as $key => $cat_deatil) {
								if($loc_count==1) {
								?>
							<a class="font_color" href="<?php echo get_term_link($cat_deatil->term_id,$cat_deatil->taxonomy);?>"><?php echo $cat_deatil->name;?></a><?php
								}else
								if($key==($loc_count-1)){
								?>
								<a class="font_color" href="<?php echo get_term_link($cat_deatil->term_id,$cat_deatil->taxonomy);?>"><?php echo $cat_deatil->name;?></a><?php
								}else {?>
								<a class="font_color" href="<?php echo get_term_link($cat_deatil->term_id,$cat_deatil->taxonomy);?>"><?php echo $cat_deatil->name.",";?></a><?php
								}
								}
								}
					?>
	    </span>
	</td>
    <td class="reduce_fontsize" itemprop="startDate" content="2015-02-25T09:30" height="50" align="center" valign="middle" class="row-col-wht">
		<?php if($date!=""){ echo " <span class='course_att'>".$date."</span><br>"; }?>
	</td>
	<td height="50" align="center" valign="middle" class="row-col-wht">   
	<?php  $availability = get_post_meta($vari_id,'attribute_pa_availability',true);
     if($availability!=""){echo "<span class='avail_att'>".get_post_meta($vari_id,'attribute_pa_availability',true)."</span>";} ?>
	</td>
	<td class="duration_width" height="50" align="center" valign="middle" class="row-col-wht">   
	<?php $course_duration = get_post_meta($vari_id,'attribute_pa_duration',true);
		 if($course_duration!=""){echo "<span class='duration_att'>".get_post_meta($vari_id,'attribute_pa_duration',true)."</span><br>";} ?>
	</td>
    <td height="50" align="center" valign="middle" class="row-col-wht">
	  <?php if(!$cat_deatils1) {}else {foreach($cat_deatils1 as $cat_deatil1){ if(strtolower($cat_deatil1->name)=="weekend"){?>
	     <img class="tick-class" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tick1.png" />
	  <?php }else {} } }?>
	</td>
    <td itemprop="offers" itemscope itemtype="http://schema.org/Offer" height="50" align="center" valign="middle" class="row-col-wht">
	  <span itemprop="price">
	  <?php if(isset($price)){ 
	      if($price!=""){
	        echo "&#163;". $price;
	       }
	  }?>
	  </span>
    </td>
    <td height="50" align="center" valign="middle" class="row-col-wht">
	<?php
    $pa_coursedate = get_post_meta($vari_id,'attribute_pa_course-date',true);
    $pa_availability = get_post_meta($vari_id,'attribute_pa_availability',true);
    $pa_duration = get_post_meta($vari_id,'attribute_pa_duration',true);
	?>
    <a itemprop="url" href="http://sitecare.org/intellitraining/cart/?add-to-cart=<?php echo $post_id; ?>&variation_id=<?php echo $vari_id; ?>&attribute_pa_availability=<?php echo $pa_availability; ?>&attribute_pa_duration=<?php echo $pa_duration; ?>&attribute_pa_course-date=<?php echo $pa_coursedate; ?>">
	  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/book-now-btn.png" alt="" width="91" height="29">
	</a>
	</td>
  </tr>
	 <?php  }
		   }
		 }
		}
     ?>
			<?php } 
			}else {?>
			<tr><td colspan="6" height="50" align="center" valign="middle" class="row-col-wht">
			<?php _e('No Course Found.', 'intellitraining'); ?></td></tr><?php } ?>
			
            <p><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></p>
   </tbody>
</table>
						</div>
						<h4>Quick Jump Menu</h4>
						<div class="qjmenu">
							<ul>
								<li><a href="#">Overview</a> | </li>         
								<li><a class="scroll" href="#course_content_part">Course Content</a> |</li>         
								<li><a href="#">Testimonials</a> |</li>          
								<li><a href="#">Venue</a> |</li>          
								<li><a href="#">FAQs</a></li>
							</ul>
						</div>	
						<div class="over-data">
							<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span>Overview</span></h6>
							<p>This two day course is the entry level PRINCE2 qualification. It is widely regarded as essential for anyone involved in PRINCE2 projects.</p>
							<hr>
					<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span id="course_content_part">Course Content</span></h6>
					<h5>Are you Accredited?</h5>
					<p>Yes, we are accredited by PeopleCert, one of the fastest growing and technologically advanced examination Institutes in the world. Our accreditation lets you know that our trainers, courseware and company have passed the most stringent checks, as required by Axelos.</p>
					<h5>Should I do the combined PRINCE2 Foundation & Practitioner Course?</h5>
					<p>A five day combined course is a great way to get both the foundation and Practitioner certifications in one go. You will be fully immersed in PRINCE2, really 					absorbing and internalising the PRINCE2 terminology and methodology. This option will also save you money, as it's sold as a discounted course package.</p>
					<hr>
					<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt="">
					<span>Testimonials</span>
						<b style="float:right;">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lt-arrow1.png" alt="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rt-arrow1.png" alt="">
						</b>
					</h6>
					
					<?php 
		$testi_args = array('posts_per_page' => -1,'post_type' => 'testimonials','post_status' => 'publish',);
		$testimonials_posts = get_posts( $testi_args ); 
		foreach($testimonials_posts as $testimonials_post){	
		$testi_for_cat = get_post_meta( $testimonials_post->ID, 'testi_for_cat', true );
		$retrieve = explode("," ,$testi_for_cat);
		$current_cat_id = $cate->term_id;
		if(in_array($come_under_home,$retrieve){
		?>
				<div class="testi-row">
					<strong class="testi-img">
						<?php get_the_post_thumbnail( $testimonials_post->ID, 'thumbnail' ); ?>
					</strong>
				<p class="testi">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lt-comment.png" alt="">
					<?php echo wp_trim_words($testimonials_post->post_content, 40); ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rt-comment.png" alt="">
				</p>
				<strong style="float:right;"><p><?php echo get_post_meta( $testimonials_post->ID, 'testimonial_name', true );?>, <span><?php echo get_post_meta( $testimonials_post->ID, 'designation', true );?></span></p></strong>
				</div>
				<?php } ?>
				
				<hr>
				<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span>Venue</span></h6>
				
				<div class="testi-row">
				<p class="venue">Hilton Hyde Park<br>
				129 Bayswater Road<br>
				London<br>
				W2 4RJ<br>
				Phone: 020 7221 2217<br>
				E: info@intellitraining.co.uk  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-readmorew.png" alt="" border="0"></a>
				</p>
				<div class="venue-img">
					<ul>
						<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.png" alt=""></li>
						<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image2.png" alt=""></li>
						<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image3.png" alt=""></li>
						<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image4.png" alt=""></li>
					</ul>
				</div>
				</div>
			<hr>
		<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span>Faqs</span></h6>
			<p>
			1. Are your accredited?<br>
			2. Are your instractors good?<br>
			3. whats the pass rate?
			</p>
						</div>	
					</div>
					<div class="main-bd-rt">
						<div class="query">
							<h2>Drop us a Query</h2>
							<p><input name="" type="text" placeholder="Full Name"></p>
							<p><input name="" type="text" placeholder="Email Address"></p>
							<div class="fie-row">
								<span><select name="">
								  <option>India</option>
								  <option>USA</option>
								  <option>UK</option>
								</select></span>
								<span><input name="" type="text"  class="mob-no" placeholder="+91"></span>
							</div>
							<p><textarea name="" cols="" rows="5"></textarea></p>
							<div class="fie-row">
							<label><input name="" type="checkbox" value=""> I agree to the Teams of service.</label>
							</div>
							<p class="txt-rgt"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Sing-up.png" alt=""></p>
						</div>
						<div class="rgt-bottom-boxes">
							<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Blue-icon.png" alt=""> Facts & figures</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis sem ac metus tristique maximus. Pellentesque ullamcorper, ligula vitae mattis eleifend, libero nunc bibendum ligula, ac imperdiet ligula felis eget massa. Maecenas neque neque, faucibus non lectus at, consequat euismod nisi. Sed magna nulla, pharetra a enim sed, pretium iaculis purus. Proin eget tincidunt risus. </p>
						</div>
						<div class="rgt-bottom-boxes">
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
						</div>
						<div class="rgt-bottom-boxes">
							<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Blue-icon.png" alt=""> PRINCE2 e-learning</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis sem ac metus tristique maximus. Pellentesque ullamcorper, ligula vitae mattis eleifend, libero nunc bibendum ligula, ac imperdiet ligula felis eget massa. Maecenas neque neque, faucibus non lectus at, consequat euismod nisi. Sed magna nulla, pharetra a enim sed, pretium iaculis purus. Proin eget tincidunt risus. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php 
get_footer();
?>
