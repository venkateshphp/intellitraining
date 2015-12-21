<?php 

get_header();

?>


<div class="container">

			<div class="wrapper">

				<div class="main-bd">

				<!--For add the content start-->	 

				<?php 

				$cate = get_queried_object();

				$cat_id = $cate->term_id;

				

				  
				  
				  				 $unserialize_val = unserialize(base64_decode(get_option('serialized_val'.$cat_id)));


				// $unserialize_val = maybe_unserialize(get_option('serialized_val'.$cat_id));

				

				?>



				 <h1><?php 

				 $h1_tag_content = $unserialize_val['h1_tag_content'];

				 $h2_tag_content = $unserialize_val['h2_tag_content'];

				 if($h1_tag_content){

				 echo $h1_tag_content;

				 }else{

				 echo $cate->name;

				 }
				 ?></h1>

				 <hr>

					<div class="page-content">

				<?php //echo $cate->description;

				?>

				<h2  style="font-size:18px;line-height: 23px;"><?php 

				 if($h2_tag_content){

				 echo $h2_tag_content;

				 }

				 ?></h2>

					</div>		

					<?php  ?>

				<!--For add the content end-->	 

					<div class="main-bd-lt">

						<h4>Key Features</h4>

						<div class="listkeayf">

						

						

											<?php
											
																$re_key_fea_img_array = $unserialize_val['key_fea_img'];	
					foreach($re_key_fea_img_array as $key => $values){												
$string1 = get_option('siteurl');
$mystring = $values;
$findme   = 'wp-content';
$pos = strpos($mystring, $findme);
if ($pos === false) {
}else{
$string2 = strstr($mystring, '/wp-content');
$key_fea_img_array[$key] = $string1.$string2;					
}
		
		}	

				//	$key_fea_img_array = $unserialize_val['key_fea_img'];

					$key_fea_title_array = $unserialize_val['key_fea_text'];

					if($key_fea_img_array) {

					foreach($key_fea_img_array as $key => $values){

					$key_fea_img = $values;

					$key_fea_title = $key_fea_title_array[$key];

					if($key==0){?><ul><?php }elseif($key==3){?><ul style="border:none;"><?php }

					?>

					

								<li> <span><img src="<?php echo $key_fea_img; ?>" alt="" height="30" width="30"></span> <?php echo $key_fea_title; ?> </li>

								 <?php

								 if($key==2){?></ul><?php }elseif($key==5){?></ul><?php }

				   }

				  }

				  ?>

						

		

						</div>

						<div class="course-table" id="course-table_id">

		<table id="reorder" width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#06CBCB">

			<thead>

			<tr class="heading_row" itemscope itemtype="">

			<td class="course_title_width" itemprop="name" height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table">Course Name <span></span></td>

			<td itemprop="location" itemscope itemtype="http://schema.org/PostalAddress" height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table"> <span itemprop="addressLocality">Location</span></td>

			<td itemprop="startDate" content="Start Date" height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table"><span class="arrow_label">Date</span></td>

			<td height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table mobile_hide"><span class="arrow_label">Availability</span></td>

			<td class="duration_width" height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table">Duration</td>

			<td height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table mobile_hide">Weekend</td>

			<td itemprop="offers" itemscope itemtype="http://schema.org/Offer" height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table"><span itemprop="price" class="arrow_label">Price</span><span class="arrows"></span></td>

			<td height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table">&nbsp;</td>

			</tr>

			</thead>

		<tbody>

	<?php

	

	$categories=get_posts(array(

    'post_type' => 'product',

	'posts_per_page' => -1,

    'tax_query' => array(

        array(

        'taxonomy' => 'product_cat',

        'field' => 'term_id',

        'terms' => $cat_id)//taxonomy name id

    ))

);							

if($categories){

foreach($categories as $key => $category){


	$post_id = $category->ID;


	/****    for SEO Start *******/
	$seo_edu_name = get_post_meta( $post_id, 'seo_edu_name', true );
	$seo_streetAddress = get_post_meta( $post_id, 'seo_streetAddress', true );	
	$seo_postalCode = get_post_meta( $post_id, 'seo_postalCode', true );	
	/****    for SEO End *******/

	$taxonomy = "product_location";

	$cat_deatils = get_the_terms( $post_id, $taxonomy ); 

	

	$taxonomy1 = "course_periods";

	$cat_deatils1 = get_the_terms( $post_id, $taxonomy1 ); 

	$attributes = get_post_meta($post_id,'_product_attributes',true);

	
	

	if(!$attributes) { 

	$regular_price = get_post_meta($post_id,'_regular_price',true);

	if($regular_price){

	?>

 <tr itemscope itemtype="http://schema.org/EducationEvent">

    <td class="course_title_width" itemprop="name" height="50" align="center" valign="middle" class="row-col-wht">

		<?php /*?><a class="font_color for_captitalize" href="<?php the_permalink() ?>" rel="bookmark"><?php */?><?php echo $category->post_title;?>	<?php /*?></a><?php */?>

		</td>

    <td itemprop="location" itemscope itemtype="http://schema.org/Place" height="50" align="center" valign="middle" class="row-col-wht">

	<!--added start for seo-->
		<span style="display:none" itemprop="name"><?php echo $seo_edu_name; ?></span><span style="display:none" >, </span>

<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<span style="display:none" itemprop="streetAddress"><?php echo $seo_streetAddress; ?></span><span style="display:none" >, </span>

<!--added end for seo-->
		<span itemprop="addressLocality">

<?php

		$loc_count = count($cat_deatils);

		$for_check_count = $loc_count-1;

					if($cat_deatils){

								foreach($cat_deatils as $key => $cat_deatil) {

								if($loc_count==1) {
 echo $cat_deatil->name;
 }else

								if($key==($loc_count-1)){
echo $cat_deatil->name;
								}else { echo $cat_deatil->name.",";

								}

								}

								}

					?>		</span>
						<!--added start for seo-->
<span style="display:none" >, </span>
<span style="display:none" itemprop="postalCode"><?php echo $seo_postalCode; ?></span></span>
	<!--added end for seo-->

	</td>

    <td class="reduce_fontsize"  itemprop="startDate" content="<?php echo $date;?>" height="50" align="center" valign="middle" class="row-col-wht"></td>

    <td height="50" align="center" valign="middle" class="row-col-wht mobile_hide"></td>

	<td class="duration_width" height="50" align="center" valign="middle" class="row-col-wht"></td>

    <td height="50" align="center" valign="middle" class="row-col-wht mobile_hide">

		<?php if(!$cat_deatils1) {}else {foreach($cat_deatils1 as $cat_deatil1){ if(strtolower($cat_deatil1->name)=="weekend"){?>

			<img class="tick-class" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tick1.png" />

		<?php }else { } } }?>

	 </td>

    <td itemprop="offers" itemscope itemtype="http://schema.org/Offer" height="50" align="center" valign="middle" class="row-col-wht">

		<span itemprop="price">

		<?php if($regular_price) {echo "&#163;".$regular_price; } ?>

		</span>		
			<!--added start for seo-->
	   <span style="display:none;">,</span>
	   <?php  $current_url = home_url(add_query_arg(array(),$wp->request));   ?>
	   <a style="display:none;" itemprop="url"><?php echo $current_url;?></a>
			<!--added end for seo-->


	</td>

    <td itemscope itemtype="http://schema.org/Offer" height="50" align="center" valign="middle" class="row-col-wht">

	<?php $site_url = get_site_url(); ?>

		<a itemprop="url" href="<?php echo $site_url;?>/cart/?add-to-cart=<?php echo $post->ID; ?>">

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

			 'post_parent'   => $post_id

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

	 <tr itemscope itemtype="http://schema.org/EducationEvent">

    <td class="course_title_width" itemprop="name" height="50" align="center" valign="middle" class="row-col-wht">

	  	<?php echo $category->post_title;?>

	</td>

     <td itemprop="location" itemscope itemtype="http://schema.org/Place" height="50" align="center" valign="middle" class="row-col-wht">
	 	<!--added start for seo-->
		<span style="display:none" itemprop="name"><?php echo $seo_edu_name; ?></span><span style="display:none" >, </span>

<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<span style="display:none" itemprop="streetAddress"><?php echo $seo_streetAddress; ?></span><span style="display:none" >, </span>

	<!--added end for seo-->
 
	 	<span itemprop="addressLocality">

		<?php

		$loc_count = count($cat_deatils);

		$for_check_count = $loc_count-1;

					if($cat_deatils){

								foreach($cat_deatils as $key => $cat_deatil) {

								if($loc_count==1) {

								 echo $cat_deatil->name;

								}else

								if($key==($loc_count-1)){

							 echo $cat_deatil->name;
								}else { echo $cat_deatil->name.",";

								}

								}

								}

					?>

	    </span>
			<!--added start for seo-->
<span style="display:none" >, </span>
<span style="display:none" itemprop="postalCode"><?php echo $seo_postalCode; ?></span></span>

	<!--added end	 for seo-->

	</td>

    <td class="reduce_fontsize" itemprop="startDate" content="<?php echo $date;?>" height="50" align="center" valign="middle" class="row-col-wht">

		<?php if($date!=""){ echo " <span class='course_att'>".$date."</span><br>"; }?>

	</td>

	<td height="50" align="center" valign="middle" class="row-col-wht mobile_hide">   

	<?php  $availability = get_post_meta($vari_id,'attribute_pa_availability',true);

     if($availability!=""){echo "<span class='avail_att'>".get_post_meta($vari_id,'attribute_pa_availability',true)."</span>";} ?>

	</td>

	<td class="duration_width" height="50" align="center" valign="middle" class="row-col-wht">   

	<?php $course_duration = get_post_meta($vari_id,'attribute_pa_duration',true);

		 if($course_duration!=""){echo "<span class='duration_att'>".get_post_meta($vari_id,'attribute_pa_duration',true)."</span><br>";} ?>

	</td>

    <td height="50" align="center" valign="middle" class="row-col-wht mobile_hide">

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
			<!--added start for seo-->
	   <span style="display:none;">,</span>
	   <?php  $current_url = home_url(add_query_arg(array(),$wp->request));   ?>
	   <a style="display:none;" itemprop="url"><?php echo $current_url;?></a>
			<!--added end for seo-->

    </td>

    <td itemscope itemtype="http://schema.org/Offer" height="50" align="center" valign="middle" class="row-col-wht">

	<?php

    $pa_coursedate = get_post_meta($vari_id,'attribute_pa_course-date',true);

    $pa_availability = get_post_meta($vari_id,'attribute_pa_availability',true);

    $pa_duration = get_post_meta($vari_id,'attribute_pa_duration',true);

	?>

		<?php $site_url = get_site_url(); ?>



    <a itemprop="url" href="<?php echo $site_url;?>/cart/?add-to-cart=<?php echo $post_id; ?>&variation_id=<?php echo $vari_id; ?>&attribute_pa_availability=<?php echo $pa_availability; ?>&attribute_pa_duration=<?php echo $pa_duration; ?>&attribute_pa_course-date=<?php echo $pa_coursedate; ?>">

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

			

   </tbody>

</table>

						</div>

						<h4>Quick Jump Menu</h4>

						<div class="qjmenu">

												<?php if ( has_nav_menu( 'course-category-menu' ) ) { wp_nav_menu( array( 'theme_location' => 'course-category-menu') ); } ?>



					

						</div>	

						<div class="over-data">

							<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span id="overview_part">Overview</span></h6>

							

					<?php

					$overview_title_array = $unserialize_val['overview_title'];

					$overview_desc_array = $unserialize_val['overview_desc'];

					if($overview_title_array) {

					foreach($overview_title_array as $key => $values){

					$overview_title = $values;

					$overview_desc = $overview_desc_array[$key];

					?>

				   <h5><?php echo $overview_title; ?></h5>

					<p><?php echo $overview_desc; ?></p>

				  <?php

				   }

				  }

				  ?>

				  

				  

				

							<hr>

					<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span id="course_content_part">Course Content</span></h6>

				

				

				

				<?php

				  $course_content_title_array = $unserialize_val['course_content_title'];

				  $course_content_desc_array = $unserialize_val['course_content_desc'];

				  if($course_content_title_array) {

				  foreach($course_content_title_array as $key => $values){

				  $course_content_title = $values;

				  $course_content_desc = $course_content_desc_array[$key];

				  ?>

				<h5><?php echo $course_content_title; ?></h5>

					<p><?php echo $course_content_desc; ?></p>

				  <?php

				   }

				  }

				  ?>

				

				

			

					<hr>

					<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt="">

	                 <?php $siteurl =  site_url(); ?>

					<span id="testimonials_part"><a class="change_color_black" href="<?php echo $siteurl.'/testimonials';?>">Testimonials</a></span>

						<b style="float:right;">

							<img class="prev_cat" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lt-arrow1.png" alt="">

							<img class="next_cat" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rt-arrow1.png" alt="">

						</b>

					</h6>

					<div class="owl-carouse" id="owl-cat-single">	

						<?php 

			$testi_args = array('posts_per_page' => -1,'post_type' => 'testimonials','post_status' => 'publish');

			$testimonials_posts = get_posts( $testi_args ); 

			foreach($testimonials_posts as $testimonials_post){	

			$testi_for_cat = get_post_meta( $testimonials_post->ID, 'testi_for_cat', true );

			$retrieve = explode("," ,$testi_for_cat);

			$current_cat_id = $cate->term_id;

		

			if(in_array($current_cat_id,$retrieve)){

			?>

					<div class="testi-row">

						<strong class="testi-img">

							<?php echo get_the_post_thumbnail( $testimonials_post->ID, 'thumbnail' ); ?>

						</strong>

					<p class="testi">

						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lt-comment.png" alt="">

						<?php echo wp_trim_words($testimonials_post->post_content, 40); ?>

						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rt-comment.png" alt="">

					<span class="readmore_link"><a class="change_color_black" href="<?php echo $siteurl.'/testimonials';?>">Read Full Review</a></span><!--readmore_link-->

					</p>

					<strong style="float:right;"><?php echo get_post_meta( $testimonials_post->ID, 'testimonial_name', true );?>, <?php echo get_post_meta( $testimonials_post->ID, 'designation', true );?></strong>

					</div>

					<?php }

					}

					 ?>

				</div><!--owl-carouse-->	

				<hr>

				<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span id="venue_part">Venue</span></h6>

				

				<div class="testi-row">

				  <h5><?php	echo $venu_title =  $unserialize_val['venu_title']; ?></h5>

				

				<p class="venue">

				<?php 

				  $venu_desc = $unserialize_val['venu_desc'];



						if($venu_desc){

						echo $venu_desc;

						}

						?>

				</p>

					<div class="venue-img">

					<?php

					$string = $cate->description;

					$test = explode('"',$string);

			$galids = explode(',',$test[1]);

			?>

<div id="slider">

	<div class="container_slider">

		<div id="slide">

							<?php

							for($i=0;$i<count($galids);$i++){

							$myrows = $wpdb->get_results( "SELECT * FROM wp_postmeta where post_id=".$galids[$i]."" );

							$post_id = $galids[$i];

							$key = '_wp_attachment_metadata';

							$single =  'true' ; 

							$meta_values = get_post_meta( $post_id, $key, $single ); 

							$url_pro = wp_get_attachment_image_src( $galids[$i], 'gallery_image_pages');

							?>

								<img src="<?php echo $url_pro[0];?>" height="190" width="290">

							<?php 

								} 

							?>

		</div>

	</div>

</div>



					</div>



				</div>

			<hr>

		<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span id="faqs_part">Faqs</span></h6>

		<!--accordion start -->

		<?php

		$taxonomy_name = "faq_categories";

			 $args = array(

			'type'                     => 'faqs',

			'orderby'                  => 'name',

			'order'                    => 'ASC',

			'taxonomy'                 => $taxonomy_name,

			'hide_empty'               => 0,

			); 



				 $categories = get_categories( $args );

				 

				 ?>

		<div class="faqs-accordion-section accordion-outer qjmenu">

		<ul>

		 <?php

		 $iteration = 0;

		  foreach($categories as $key => $category){

				$term_id_req = $category->term_id;

				$cat_id = $cate->term_id;

				$all_faqs=get_posts(array('post_status' => 'publish','post_type' => 'faqs','tax_query' => array(array('taxonomy' => 'faq_categories','field' => 'term_id','terms' => $term_id_req))));

            $faqs_count = count($all_faqs);

			$for_allow_title = 0;

			foreach ( $all_faqs as $key => $faqs ) { 

			$faqs_for_cat = get_post_meta( $faqs->ID, 'faq_for_cat', true );

					$current_cat_id = $cat_id;

					$retrieve = explode("," ,$faqs_for_cat);

					if(in_array($current_cat_id,$retrieve)){

					++$for_allow_title;

					}

					}

				if($for_allow_title>0){
$for_iteration = 0;
				 ?>

				<li><a class="faq_cat_title_tab load_show<?php echo $for_iteration;?>" id="id-val_<?php echo $term_id_req;?>" <?php if($key==0){?> style="color:#237a00;"<?php } ?>><?php

				echo $category->name;

				?></a></li>

	<?php 
	++$for_iteration;
	}  } ?></ul>

			 <!--newly added fqs start-->

				 <?php 

				 foreach($categories as $key => $category){

				 $term_id_req = $category->term_id;

				 $cat_id = $cate->term_id;

				

				 $faq_posts_check = get_posts(array('post_status' => 'publish','post_type' => 'faqs', 'posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $term_id_req)))); 

				$req_count = count($faq_posts_check);
				
				/************added new start***************/
									foreach($faq_posts_check as $key => $whole_faq){
											$whole_faqs_for_cat = get_post_meta( $whole_faq->ID, 'faq_for_cat', true );
					$current_cat_id = $cat_id;
								$retrieve = explode("," ,$whole_faqs_for_cat);
								
					if(in_array($current_cat_id,$retrieve)){
					$req_array[$key] = $whole_faq->ID;
					}
					}
									/************added new end***************/
/*
				foreach($faq_posts_check as $key => $value){

				$key_value = $key;

				$req_array[$key]=$value->ID;

				}*/

				$formed_option_value = 'single_faqs_order'.$cat_id.$term_id_req;

				$saved_options_value = get_option($formed_option_value);

								

						if($saved_options_value){ 
	
						//$ordered_post_ids = maybe_unserialize($saved_options_value);
	$ordered_post_ids = unserialize(base64_decode($saved_options_value));
	
						$req_array_count = count($req_array);
	
						$ordered_post_ids_count = count($ordered_post_ids);
						
	if($ordered_post_ids[0]==""){
							$all_faqs = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $term_id_req)))); 
	}elseif(!$ordered_post_ids){
							$all_faqs = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $term_id_req)))); 
	}else
							if($req_array_count!=$ordered_post_ids_count){	
	
							$all_faqs = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $term_id_req)))); 
	
							}else{
	
								$result=array_diff($req_array,$ordered_post_ids);
	
								if($result){
	
								$all_faqs = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $term_id_req)))); 
	
								}else{
	
									foreach($ordered_post_ids as $ordered_post_id){
	
										if ( get_post_status ( $ordered_post_id ) == 'publish' ) {
	
										$all_faqs[] = get_post($ordered_post_id);	
	
										}						
	
									}
	
								}
	
						   }
	
						} else {

					$all_faqs = get_posts(array('post_status' => 'publish','post_type' => 'faqs','tax_query' => array(array('taxonomy' => 'faq_categories','field' => 'term_id','terms' => $term_id_req))));

					}

				?>

				 <div class="faqs-accordion-section each_accordion" id="faq_cat_<?php echo $term_id_req;?>" <?php if($iteration!=0){?>style="display:none;"<?php } ?>>

				<div class="accordion">

				<?php

				++$iteration;

				foreach ( $all_faqs as $key => $faqs ) { 

				$faqs_for_cat = get_post_meta( $faqs->ID, 'faq_for_cat', true );

					$current_cat_id = $cat_id;

								$retrieve = explode("," ,$faqs_for_cat);

							/*echo "<pre>";

								print_r($retrieve);

								echo "</pre>";*/

					if(in_array($current_cat_id,$retrieve)){

				?>

				<h3 class="for_add_font"><?php echo $faqs->post_title; ?></h3>

				<div><p><?php //echo wp_trim_words($faqs->post_content, 40); 

				echo $faqs->post_content; 

				?></p></div>

				<?php }

				}

				?>

				</div><!--accordion end-->

				 </div><!--faqs-accordion-section-->

				<?php

				 unset($all_faqs);
				  unset($req_array);

				 }

				 

				 ?>

				

				 

				 <!--newly added fqs end-->

		

		<!--accordion end-->

  </div><!--faqs-accordion-section-->

 

   



						</div>	

					</div>

									  <?php include(TEMPLATEPATH."/sidebar.php");?>



				</div>

			</div>

		</div>

<?php 

get_footer();

?>

