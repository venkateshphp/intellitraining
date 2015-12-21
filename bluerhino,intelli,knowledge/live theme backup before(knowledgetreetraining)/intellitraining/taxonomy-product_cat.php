<?php 
get_header();

$cate = get_queried_object();
$cat_id = $cate->term_id;
$unserialize_val = unserialize(base64_decode(get_option('serialized_val'.$cat_id)));
$h1_tag_content = $unserialize_val['h1_tag_content'];
$h2_tag_content = $unserialize_val['h2_tag_content'];

$like_to_more_info_title = $unserialize_val['like_to_more_info_title'];
$like_to_more_info_sub_title = $unserialize_val['like_to_more_info_sub_title'];
$more_info_phone_no = $unserialize_val['more_info_phone_no'];
$more_info_mail_id = $unserialize_val['more_info_mail_id'];
$happy_customers_title = $unserialize_val['happy_customers_title'];
							


  	$home_url =  get_site_url();
	$current_page_url = get_permalink($post->ID);

?>

	<h1 style="margin-top:20px !important;">	
	<?php
	if($h1_tag_content){
	echo $h1_tag_content;
	}else{
	echo $cate->name;
	}
	?>
	<!--PRINCE2 Foundation Course-->
	</h1>
	 <p><strong><h2 class="course-h2-content"><?php 
	if($h2_tag_content){
	echo $h2_tag_content;
	}
	?>
				 <!--PRINCE2 Foundation Training like never before...--></h2></strong></p>
  
  <div class="clearfix"></div>
  
  <div class="row">
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
$key_fea_title_array = $unserialize_val['key_fea_text'];
?>

  <div class="col-md-12">
  <?php 
  if($key_fea_img_array) {
foreach($key_fea_img_array as $key => $values){
$key_fea_img = $values;
$key_fea_title = $key_fea_title_array[$key];
if($key==0){?><div class="row"><?php }elseif($key==3){?>
<div class="clearfix"></div>
<div class="row gap30">
<?php }
?>
<div class="col-md-4">
  <div align="center">
  <img src="<?php echo $key_fea_img; ?>"  alt="Knowledge Tree" class="img-responsive"<?php /*?> height="30" width="30"<?php */?>>
 <?php /*?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon1.png" alt="Knowledge Tree" class="img-responsive"><?php */?>
 </div>
<p class="text-center servicestext-internal"><?php echo $key_fea_title; ?><!--Fully Accredited by Peoplecert--></p>
  </div>
<?php
if($key==2){?> </div><?php }elseif($key==5){?></div><?php }
}
 }
  ?>  
  </div>
  
  
  
  </div>
  
  </div>
    <!--main-content-end-->
    
    
    
    <div class="clearfix"></div>
<!--wouldyou-like-more-start-->
<div class="container">
<h5 class="text-center gap30"><?php echo $like_to_more_info_title; ?></h5>
<div class="smallblue text-center"><?php echo $like_to_more_info_sub_title; ?></div>
<div id="more-info" align="center">
<header>
<ul>
      <li class="tel"><?php echo $more_info_phone_no; ?></li>
      <li class="email"><a href="mailto:<?php echo $more_info_mail_id; ?>"><?php echo $more_info_mail_id; ?></a></li>
      <li class="message">Or send us a <a href="#contact_form" class="scroll">message</a></li>
    </ul>
    </header>
    </div>
    <hr>
</div>
<!--wouldyou-like-more-end-->


<!--courses-table-start-from-here-->
<div class="container gap30">
<h3>Course Schedule</h3>

<div class="clearfix"></div>
<div class="table-responsive table-border">
<table class="table small-table-text" id="reorder">
<thead>
  <tr class="bluecolor-row">
    <th itemprop="name" >Course Name</th>
    <th itemprop="startDate" content="Start Date" >Date</th>
    <th itemprop="location" itemscope itemtype="http://schema.org/PostalAddress" ><span itemprop="addressLocality">Location</span></th>
    <th>Duration</th>
    <th itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="price">Price</span></th>
    <th>Book Online</th>
  </tr>
  </thead>
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

if($key % 2 == 0) {
$class_for_even = "";
}else {
$class_for_even = "light-blue";
}
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
<tbody>
  <tr class="<?php echo $class_for_even;?>" itemscope itemtype="http://schema.org/EducationEvent">
    <td itemprop="name"><?php echo $category->post_title;?><!--PRINCE2&reg; Foundation & Practitioner--></td>
    <td   itemprop="startDate" content="<?php echo $date;?>"><!--05/05/2015 <span class="places">3 places left</span>--></td>
    <td itemprop="location" itemscope itemtype="http://schema.org/Place">
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
 }elseif($key==($loc_count-1)){
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
	<!--London-->
	</td>
    <td><!--5 days--></td>
    <td  itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="big-table-text">
	
	<span itemprop="price">
		<?php if($regular_price) {echo "&pound;".$regular_price; } ?>
		</span>		
			<!--added start for seo-->
	   <span style="display:none;">,</span>
	   <?php  $current_url = home_url(add_query_arg(array(),$wp->request));   ?>
	   <a style="display:none;" itemprop="url"><?php echo $current_url;?></a>
			<!--added end for seo--><!--&pound;849-->
			</td>
    <td itemscope itemtype="http://schema.org/Offer" >
	<!--<a href="#" class="green-button">BOOK NOW</a>-->
	
	<?php $site_url = get_site_url(); ?>

		<a class="green-button" itemprop="url" href="<?php echo $site_url;?>/cart/?add-to-cart=<?php echo $post->ID; ?>">BOOK NOW</a>
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
  <tr itemscope itemtype="http://schema.org/EducationEvent" class="<?php echo $class_for_even;?>">
    <td itemprop="name"><?php echo $category->post_title;?><!--PRINCE2&reg; Foundation & Practitioner--></td>
    <td itemprop="startDate" content="<?php echo $date;?>" ><!--05/05/2015--><?php if($date!=""){ echo " <span class='course_att'>".$date."</span><br>"; }?> <span class="places"><!--3 places left-->
	<?php  $availability = get_post_meta($vari_id,'attribute_pa_availability',true);
     if($availability!=""){echo "<span class='avail_att'>".get_post_meta($vari_id,'attribute_pa_availability',true)."</span>";} ?>
	 </span></td>
    <td itemprop="location" itemscope itemtype="http://schema.org/Place" >
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
	<!--Birmingham-->
	</td>
    <td>
	<?php $course_duration = get_post_meta($vari_id,'attribute_pa_duration',true);
	if($course_duration!=""){echo "<span class='duration_att'>".get_post_meta($vari_id,'attribute_pa_duration',true)." days</span><br>";} ?>
	<!--5 days-->
	</td>
    <td itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="big-table-text">
	<span itemprop="price">
	  <?php if(isset($price)){ 
	      if($price!=""){
	        echo "&pound;". $price;
	       }
	  }?>
	  </span>
			<!--added start for seo-->
	   <span style="display:none;">,</span>
	   <?php  $current_url = home_url(add_query_arg(array(),$wp->request));   ?>
	   <a style="display:none;" itemprop="url"><?php echo $current_url;?></a>
			<!--added end for seo-->
	<!--&pound;849-->
	</td>
    <td itemscope itemtype="http://schema.org/Offer" >
	<?php
    $pa_coursedate = get_post_meta($vari_id,'attribute_pa_course-date',true);
    $pa_availability = get_post_meta($vari_id,'attribute_pa_availability',true);
    $pa_duration = get_post_meta($vari_id,'attribute_pa_duration',true);
    $site_url = get_site_url(); ?>
    <a  class="green-button" itemprop="url" href="<?php echo $site_url;?>/cart/?add-to-cart=<?php echo $post_id; ?>&variation_id=<?php echo $vari_id; ?>&attribute_pa_availability=<?php echo $pa_availability; ?>&attribute_pa_duration=<?php echo $pa_duration; ?>&attribute_pa_course-date=<?php echo $pa_coursedate; ?>">
	  BOOK NOW</a>
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


</div>
<!--courses-table-end-from-here-->

<!--faq's-start-here-->
<div class="container gap30">
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#overview" aria-controls="profile" role="tab" data-toggle="tab">Overview</a></li>
    <li role="presentation"><a href="#included" aria-controls="messages" role="tab" data-toggle="tab"><!--What's included?-->Course Content</a></li>
	<li role="presentation"><a href="#faq" aria-controls="home" role="tab" data-toggle="tab">FAQ's</a></li>
<!--
    <li role="presentation"><a href="#video" aria-controls="settings" role="tab" data-toggle="tab">Video</a></li>
    
      <li role="presentation"><a href="#blog" aria-controls="settings" role="tab" data-toggle="tab">Blog</a></li>
-->  </ul>

  <!-- Tab panes -->
  <div class="tab-content" style="border:none !important;">
    <div role="tabpanel" class="tab-pane fade" id="faq"><div role="tabpanel">

  <!-- Nav tabs -->
 
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
 <ul class="nav nav-tabs" role="tablist" style="margin:0 !important;">
		 <?php
		 $iteration = 0;
		  foreach($categories as $key => $category){
		  $key_outer = $key;
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
				<li role="presentation" class="<?php echo $key_outer.$key;  if($key_outer==0){?>active<?php } ?>"><a data-toggle="tab" role="tab" aria-controls="home"  href="#<?php echo $term_id_req;?>" class="<?php if($key_outer==0){?>redcolor<?php } ?>"><?php

				echo $category->name;

				?></a></li>

	<?php 
	++$for_iteration;
	}  } ?></ul>
   <!-- <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#Course" class="redcolor">Course</a></li>
    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="profile" href="#Exam">Exam</a></li>
    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#General">General</a></li>
    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="settings" href="#Payments">Payments &amp; Refunds</a></li>
  </ul>-->
  

  <!-- Tab panes -->
  <div class="tab-content" style="border:none !important;">
   <?php 
				 foreach($categories as $key => $category){
				 $key_outer = $key;
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
				/*foreach($faq_posts_check as $key => $value){
				$key_value = $key;
				$req_array[$key]=$value->ID;
				}*/
				$formed_option_value = 'single_faqs_order'.$cat_id.$term_id_req;
				$saved_options_value = get_option($formed_option_value);
						if($saved_options_value){ 
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
  
    <div role="tabpanel" class="tab-pane pane-new <?php if($key_outer==0){?>active<?php }?>" id="<?php echo $term_id_req;?>">
	<?php
				++$iteration;
				foreach ( $all_faqs as $key => $faqs ) { 
				$faqs_for_cat = get_post_meta( $faqs->ID, 'faq_for_cat', true );
					$current_cat_id = $cat_id;
								$retrieve = explode("," ,$faqs_for_cat);
					if(in_array($current_cat_id,$retrieve)){
				?>
					<h6><?php echo $faqs->post_title; ?></h6>
				<p><?php echo $faqs->post_content;?></p>

				<?php }

				}

				?>
					</div>

		<?php

				 unset($all_faqs);
				  unset($req_array);

				 }

				 

				 ?>
	
    </div>
	</div>
</div>
	
    
    
    
  
    <div role="tabpanel" class="tab-pane active" id="overview">
	
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

<!--	<h3>The Knowledge Academy</h3>
    <p><strong>The Knowledge Academy Materials and Trainers</strong></p>
    <ul>
    <li>The Knowledge Academy PRINCE2&reg; course materials and trainers are accredited by BCS. ensuring that delegates receive a consistently high standard of training. The Knowledge Academy course materials are regularly assessed and maintained in line with stringent standards administered by BCS. The Knowledge Academy trainers are regularly assessed by The Knowledge Academy and BCS. to ensure that their knowledge of Project Management and PRINCE2&reg; are strong enough to deliver training that helps delegates extract maximum benefit from attending our courses.</li>
<li class="gap30">The Knowledge Academy PRINCE2&reg; courses materials are based on the 2009 edition of, "Managing Successful Projects using PRINCE2&reg; ," and include examinations based on this manual.
</li>
    </ul>
    <p class="gap30"><strong>Pre-Course Reading</strong> </p>
    <p>The Knowledge Academy PRINCE2&reg; Foundation and Practitioner event is designed to maximise delegates' potential in the PRINCE2&reg; training environment.<br>
<br>


Following confirmation of booking The Knowledge Academy will send the Pre-Course work to the delegate. This work consists of;
</p>
<ol><li> Reading 3 chapters of the PRINCE2® manual, "Managing Successful Projects with PRINCE2&reg;"</li>
<li> Pre-course workbook to be completed by the Delegate and handed to Trainer at the start of course.</li>
<li> 70 multiple choice Questions to test your PRINCE2® with detailed answers
</li></ol>

<p>The pre-course work on a The Knowledge Academy course will require around 15 hours of study prior to the course start date. The Knowledge Academy PRINCE2&reg; Foundation and Practitioner training event is an intensive 5 day course that includes the PRINCE2® Foundation and Practitioner examinations within the course. Upon booking, Joining Instructions that describe the course location and other administrative details will also be emailed. In addition, delegates will be required to complete a MINIMUM of 2 hours homework each evening which will be set by the instructor. </p>
    
    <p class="gap30"><strong>Course Pre-Requisites</strong></p>
    <p>There are no formal prerequisites for this course, however, candidates must achieve a pass at Foundation level before attempting to complete the Practitioner examination. </p>
     <p class="gap30"><strong>PRINCE2&reg; Foundation</strong></p>
     <p>A 75 question multiple choice examination with a pass mark of 35 out of 70. Success in this examination indicates that the candidate would be able to act as an informed member of a project management team using the PRINCE2&reg; method within a project environment supporting PRINCE2&reg;. Please note that success in the Foundation examination is a prerequisite for that candidate to move forward to the Practitioner examination. </p>
     
     <p class="gap30"><strong>PRINCE2&reg;: 2009 Practitioner Exam Format </strong></p>
     <p> A 80 question Objective Test Examination with a pass mark of 44 out of 80 (55%). Success in this examination indicates that the candidate could apply PRINCE2&reg; to the running and managing of a non-complex project within an environment supporting PRINCE2&reg;. This is the top level of PRINCE2&reg; qualification. 
</p>

<p class="gap30"><strong>Course Structure</strong></p>
     <p> The Knowledge Academy PRINCE2&reg; Foundation and Practitioner 5 day course follows a two part structure. The first three days of the course involve familiarisation with the content of the PRINCE2® manual, preparing for the Foundation examination. Following successful completion of the Foundation examination, delegates will spend one day preparing for the PRINCE2&reg; Practitioner examination, sitting this examination on the final day of the course.
</p>

<p class="gap30"><strong>Course Content</strong></p>
<ul><li>&bull; The Knowledge Academy PRINCE2&reg; Foundation and Practitioner 5 day course covers the following topics:</li>
<li>&bull; Principles of PRINCE2&reg;</li>
<li>&bull; Business Case Theme</li>
<li>&bull; Organisation Theme</li>
<li>&bull; Quality Theme</li>
<li>&bull; Plans Theme</li>
<li>&bull; Risk Theme</li>
<li>&bull; Change Theme</li>
<li>&bull; Progress Theme</li>
<li>&bull; Starting up a Project Process</li>
<li>&bull; Directing a Project Process</li>
<li>&bull; Initiating a Project Process</li>
<li>&bull; Controlling a Stage Process</li>
<li>&bull; Managing Product Delivery Process</li>
<li>&bull; Managing a Stage Boundary Process</li>
<li>&bull; Closing a Project Process</li>
<li>&bull; Tailoring PRINCE2&reg; to the project environment</li>
</ul>
-->
    </div>
    <div role="tabpanel" class="tab-pane fade" id="included">
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
<!--	<ul>
    <li>&bull; The official Managing Successful Projects with PRINCE2&reg; course manual</li>
<li>&bull; The Knowledge Academy Courseware Book</li>
<li>&bull; Pre-Course Material</li>
<li>&bull; Exams</li>
<li>&bull; Certificates</li>
<li>&bull; Experienced Instructor</li>
<li>&bull; Refreshments</li>
    
    </ul>-->
	
	</div>
    

 
  </div>

</div>

</div>
<!--faq's-end-here-->



<!--testimonials-start-here-->

<div class="testimoials-back">
<div class="container">
<h4 class="text-center"><?php  echo $happy_customers_title;?>
</h4>
<hr>
<div class="wrapper-with-margin">
<div class="quote-two">
					<!-- Container -->
					
						<!-- Quote Two Content -->
						<div class="quote-two-content gap30">
							<div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotes-img.png"  class="img-responsive" alt="#"></div>
							<div class="owl-carousel" data-items="1" data-auto-play="true" data-pagination="true" data-single-item="true">
<?php 
$testi_args = array('posts_per_page' => -1,'post_type' => 'testimonials','post_status' => 'publish');
$testimonials_posts = get_posts( $testi_args ); 
foreach($testimonials_posts as $testimonials_post){	

				$read_more_link = get_permalink($testimonials_post->ID);


$testi_for_cat = get_post_meta( $testimonials_post->ID, 'testi_for_cat', true );
$retrieve = explode("," ,$testi_for_cat);
$current_cat_id = $cate->term_id;
if(in_array($current_cat_id,$retrieve)){
?>
								<!-- Item -->
								<div class="item gap30">
									<p class="text-center testimonials-text">
									<?php echo wp_trim_words($testimonials_post->post_content, 35); ?>
									<!--I really enjoyed the two day PRINCE2 Foundation Course with Intelli. The instructor was great and they really knew what they were talking about. It was actually a very fun say, with lots of exercises and debate around the subject, ... 	-->
									</p>
									<p class="text-center"><strong>- <?php echo get_post_meta( $testimonials_post->ID, 'testimonial_name', true );?><!--Elaine Kelly-->, <?php echo get_post_meta( $testimonials_post->ID, 'designation', true );?><!--HMRC-->   <a href="<?php echo $read_more_link;?>" class="testimonial-btn">Read More</a></strong>  </p>
								</div>
							<?php }
							}
							?>								
							</div>
						
					</div>					
				</div>
</div>
</div>

</div>

<!--testimonials-end-here-->

<hr>

<!--contact-form-start-here-->
<div class="contact-back" id="contact_form" style="margin-top:0 !important; background-color:#f7f7f7 !important;">
<div class="container">
<hr>
<h4 class="text-center"><?php 
$contact_us_title = $home_page_h2_tetxs_array['contact_us_title'];
$contact_us_description = $home_page_h2_tetxs_array['contact_us_description'];

if($contact_us_title){
				echo $contact_us_title;
				}else {?>
				Contact Us
				<?php } ?></h4>
<p class="text-center"><?php echo $contact_us_description;?></p>
<?php echo do_shortcode('[contact-form-7 id="2168" title="Home Contact Form"]');?>
</div>

</div>
<div class="clearfix"></div>

<!--contact-form-end-here-->





<!--<div class="clearfix"></div>-->
<!--content-panel-start-->
<div class="container gap30">
<div class="row">
<div class="col-md-6">
<h4>Venue</h4>
<hr>
<h5><?php	echo $venu_title =  $unserialize_val['venu_title']; ?></h5>
<p class="for_min_height">
<?php 
$venu_desc = $unserialize_val['venu_desc'];
if($venu_desc){
echo $venu_desc;
}
?>
</p>
<!--<p>Our two day PRINCE2 Foundation Course is always a popular course with our customers across the UK. This course will give you a great basis on which to start your Project Management Career or be involved in a PRINCE2 Project.<br>
<br>


The PRINCE2 Foundation certification is widely regarded as an essential qualification for employees working on projects in any major industry.  Another great option is our combined PRINCE2 Foundation and Practitioner Course, enabling you to get fully PRINCE2 certified quickly, saving both time and money.  <br>
<strong><a href="#">read more</a></strong></p>-->

</div>

<?php

$string = $cate->description;
$test = explode('"',$string);
$galids = explode(',',$test[1]);
?>


<div class="col-md-6">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
	<?php 	for($i=0;$i<count($galids);$i++){ ?>
	<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" class="<?php if($i==0) {?>active<?php } ?>"></li>
	<?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php
							for($i=0;$i<count($galids);$i++){
							$myrows = $wpdb->get_results( "SELECT * FROM wp_postmeta where post_id=".$galids[$i]."" );
							$post_id = $galids[$i];
							$key = '_wp_attachment_metadata';
							$single =  'true' ; 
							$meta_values = get_post_meta( $post_id, $key, $single ); 
							$url_pro = wp_get_attachment_image_src( $galids[$i], 'gallery_image_pages');
							?>

								<?php /*?><img src="<?php echo $url_pro[0];?>"  height="190" width="290"><?php */?>
<div class="item <?php if($i==0) { ?> active <?php } ?>">
      <img src="<?php echo $url_pro[0];?>" class="img-responsive img-thumbnail" alt="#">
	  </div>
							<?php 

								} 

							?>
    

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


</div>

</div>
<!--content-panel-end-->



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
	
	//echo $course_category[$key]->name;
		echo preg_replace('/[\[{\(].*[\]}\)]/U' , '', $course_category[$key]->name);

	
	?></div>
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




<?php 

get_footer();

?>

