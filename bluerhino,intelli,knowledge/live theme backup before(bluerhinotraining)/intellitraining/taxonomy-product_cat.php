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

	<section class="inner-intro inner-intro-small">
            <div class="container">
            <div class="clearfix"></div>
                <div class="row title text-left gap70 add_padding_top">
                    <h1 class="h2 whitecolor text-left single_course_h1"><?php
	if($h1_tag_content){
	echo $h1_tag_content;
	}else{
	echo $cate->name;
	}
	?><!--PMP &reg; CERTIFICATION TRAINING--></h1><h2 class="text-left whitecolor single_course_h2"><!--In Hayes, United Kingdom-->
	<?php 
	if($h2_tag_content){
	echo $h2_tag_content;
	}
	?>

</h2>
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

<ul class="text-left whitecolor list-unstyled">
<?php 
  if($key_fea_img_array) {
foreach($key_fea_img_array as $key => $values){
$key_fea_img = $values;
$key_fea_title = $key_fea_title_array[$key]; ?>
<li><i class="fa fa-check"></i>
<?php echo $key_fea_title;?></li>
 <?php } }?>
</ul>
                    
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->
        
        
        
            <!-- Process -->
        <section id="process" class="ptb ptb-sm-80">
            <div class="wow fadeInLeft container text-center">
               
                <div class="row ">
                
                <div class="col-md-2 col-sm-4 col-xs-6">
                      
                            <div class="page-icon-top"><a href="#course" class="greycolor-light singlepage-nav"><i class="fa fa-calendar"></i></a>

</div>
                            <h6><a href="#course" class="greycolor-light singlepage-nav">schedule</a></h6>
                      
                    </div>
                
                
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        
                           <div class="page-icon-top"> <a href="#overview" class="greycolor-light"><i class="fa fa-list"></i></a>

</div>
                            <h6><a href="#overview" class="greycolor-light">Overview</a></h6>
                       </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                       
                            <div class="page-icon-top"><a href="#venue" class="greycolor-light"><i class="fa fa-th-large"></i></a>

</div>
                            <h6><a href="#venue" class="greycolor-light">Venue</a></h6>
                        
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6">
                       
                            <div class="page-icon-top"><a href="#faq" class="greycolor-light"><i class="fa fa-question-circle"></i></a>

</div>
                            <h6><a href="#faq" class="greycolor-light">faq's</a></h6>
                     
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6">
                    
                            <div class="page-icon-top"><a href="#customer" class="greycolor-light"><i class="fa fa-list-alt"></i></a>

</div>
                            <h6><a href="#customer" class="greycolor-light">customer review</a></h6>
                        
                    </div>
                    
                    
                    
                    
                </div>
            </div>
        </section>
        <!-- End Process -->
        


        <div class="container">
        <div class="row gap70">
        
        
        
        
        <div class="col-md-8 for_mobile_responsive">
        <h3><a name="course">Course Schedule</a></h3>
        <div class="table-responsive">
<table class="table small-table-text table-border" id="reorder">
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
	<!--<a href="#" class="green-button ">BOOK NOW</a>-->
	
	<?php $site_url = get_site_url(); ?>

		<a  class="btn btn-xs btn-color-c" itemprop="url" href="<?php echo $site_url;?>/cart/?add-to-cart=<?php echo $post->ID; ?>">BOOK NOW</a>
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
    <td itemprop="startDate" content="<?php echo $date;?>" ><!--05/05/2015--><?php if($date!=""){  $unixtime = strtotime($date);
	echo date("m/d/Y",$unixtime);
	 }?> <span class="places"><!--3 places left-->
	<?php  $availability = get_post_meta($vari_id,'attribute_pa_availability',true);
     if($availability!=""){echo get_post_meta($vari_id,'attribute_pa_availability',true);} ?>
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
	if($course_duration!=""){echo get_post_meta($vari_id,'attribute_pa_duration',true);} ?>
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
    <a   class="btn btn-xs btn-color-c" itemprop="url" href="<?php echo $site_url;?>/cart/?add-to-cart=<?php echo $post_id; ?>&variation_id=<?php echo $vari_id; ?>&attribute_pa_availability=<?php echo $pa_availability; ?>&attribute_pa_duration=<?php echo $pa_duration; ?>&attribute_pa_course-date=<?php echo $pa_coursedate; ?>">
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



<div class="clearfix"></div>



        

        
       <div class="gap70" ><a name="overview"></a></div>
        <div class="tabs">
                            <ul>
                                <li><a href="#tabs-1">Overview </a></li>
                                <li><a href="#tabs-2">Course Content</a></li>
                            </ul>
                            <div class="ui-tab-content">
                                <div id="tabs-1">
<?php
$overview_title_array = $unserialize_val['overview_title'];
$overview_desc_array = $unserialize_val['overview_desc'];
if($overview_title_array) {
foreach($overview_title_array as $key => $values){
$overview_title = $values;
$overview_desc = $overview_desc_array[$key];
?>
	<h5><?php if($overview_title) {echo $overview_title;}else { echo "Overview";} ?></h5>
<?php if($overview_desc){ ?><p><?php echo $overview_desc; ?></p><?php }else{?>
                                    <p>The Scrum framework is very popular as it helps teams to increase efficiency and become extremely productive. Projects are completed in a fraction of the time that would be required by traditional methods. As defects are immediately visible to the team, changes and revisions can be made as often as necessary so as to get an end product of very high quality.</p>
                                    <p>This course in Agile Project Management with Scrum introduces participants to Agile methodology and the Scrum framework. Ken Schwaber, along with Jeff Sutherland, was the original creator of Scrum. This courseware is based on the framework and theories of Ken Schwaber's work on successfully implementing complex and partially defined software development projects.</p>
                                    <p>Participants are given an overview of the principles and practices that make Scrum effective at managing projects. The course itself uses the principles of Scrum, where the learning outcome is driven by the needs of the participants through a combination of expert instruction and self-directed learning. Opportunities to reflect and adapt the direction of the course are offered at regular intervals.</p>
                                    <p>At the end of the training the participants will have the confidence and understanding to begin to socialize Scrum at their own organization and support teams in improving their processes.</p>
									<?php }  } }?>
                                </div>
                                <div id="tabs-2">
<?php
$course_content_title_array = $unserialize_val['course_content_title'];
$course_content_desc_array = $unserialize_val['course_content_desc'];
if($course_content_title_array) {
foreach($course_content_title_array as $key => $values){
$course_content_title = $values;
$course_content_desc = $course_content_desc_array[$key];
?>
                                <h5><?php if($course_content_title) {echo $course_content_title;}else { echo "From the course:";} ?></h5>
	<?php if($course_content_desc){ echo $course_content_desc;}else{?>

                                  <ul>
    <li>Get a comprehensive introduction to Agile and Scrum methodology</li>
   <li> Understand the advantages of Agile over traditional methods, and how adopting Agile approaches can increase business value</li>
   <li> Get to know the core practices and philosophies behind this way of working</li>
  <li>  Learn about Roles and Artifacts, and the Process flow</li>
   <li> Using hands-on examples, get a grasp of how Agile and Scrum principles actually work</li>
</ul>

<h5>From the workshop:</h5>
     <ul>                              
  <li>  High quality training from an industry expert</li>
  <li>  Earn 8 PDUs and 8 SEUs</li>
  <li>  Hard copy of courseware</li>
   <li> 100 days Free Online Training Access to Agile and Scrum</li>
  <li>  A soft copy of the slide deck will be emailed to the course attendees</li>
 <li>   A reading list for further learning</li>
    <li>Attendees will get 5% discount for our upcoming Scrum Certification Programs</li></ul>
									<?php }
	}
	}
	?>

                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="clearfix"></div>
                        
                        
                        <div class="gap70" ><a name="venue"></a></div>
                        <div class="row gap30">
<div class="col-md-6">
<h5><?php	 $venu_title =  $unserialize_val['venu_title']; if($venu_title){ echo $venu_title;}else{ ?>Venue <?php } ?></h5>
<hr>
<p>
<?php 
$venu_desc = $unserialize_val['venu_desc'];
if($venu_desc){
echo $venu_desc;
}else{
?>
Our two day PRINCE2 Foundation Course is always a popular course with our customers across the UK. This course will give you a great basis on which to start your Project Management Career or be involved in a PRINCE2 Project. <br>
<strong><a href="#">read more</a></strong>
<?php } ?>
</p>

</div>

<?php

$string = $cate->description;
$test = explode('"',$string);
$galids = explode(',',$test[1]);
global $wpdb;
?>

<div class="col-md-6">
<section class="ptb ptb-sm-80">
                        <div class="owl-carousel image-slider o-flow-hidden">
					<?php 
					for($i=0;$i<count($galids);$i++){
					$myrows = $wpdb->get_results( "SELECT * FROM wp_postmeta where post_id=".$galids[$i]."" );
					$post_id = $galids[$i];
					$key = '_wp_attachment_metadata';
					$single =  'true' ; 
					$meta_values = get_post_meta( $post_id, $key, $single ); 
					$url_pro = wp_get_attachment_image_src( $galids[$i], 'gallery_image_pages');
					?>
				<div class="item">
				<img src="<?php echo $url_pro[0];?>" alt="#">
				</div>
					<?php 
					} 
					?>
            </div>
        </section>
</div>


</div>

<div class="clearfix"></div>
                        
                        
                          <div class="gap70" ><a name="faq"></a></div>
                        <h3 class="blackcolor gap30">FAQ'S</h3>
                        <hr>
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
                        <div class="tabs b-lrb-none">
						
                            <ul>
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
                                <li><a href="#tabs-<?php echo $term_id_req;?>"><?php echo $category->name;?></a></li>
								<?php 
	++$for_iteration;
	}  } ?>
                            </ul>
							
                            <div class="ui-tab-content">
							
							<?php 
				 foreach($categories as $key => $category){
				 $key_outer = $key;
				 $term_id_req = $category->term_id;
				 $cat_id = $cate->term_id;
				 $faq_posts_check = get_posts(array('post_status' => 'publish','post_type' => 'faqs', 'posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $term_id_req)))); 
				$req_count = count($faq_posts_check);
				foreach($faq_posts_check as $key => $value){
				$key_value = $key;
				$req_array[$key]=$value->ID;
				}
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
							
							
                                <div id="tabs-<?php echo $term_id_req;?>" class="plr-0">
								
                                  <div class="accordion">
								  <?php
				++$iteration;
				foreach ( $all_faqs as $key => $faqs ) { 
				$faqs_for_cat = get_post_meta( $faqs->ID, 'faq_for_cat', true );
					$current_cat_id = $cat_id;
								$retrieve = explode("," ,$faqs_for_cat);
					if(in_array($current_cat_id,$retrieve)){
				?>
                            <div class="accordion-section">
                                <h6 class="accordion-title"><?php echo $faqs->post_title; ?></h6>
                                <div class="accordion-content">
                                    <p><?php echo $faqs->post_content;?></p>
                                </div>
                            </div>
							<?php } } ?>
                            
                            
                            
                        </div>
                                </div>
								
								
								<?php } ?>
                                
                                
                                
                                
                            </div>
                        </div>
                        
                        
                        <div class="clearfix"></div>
                          <div class="gap70" ><a name="customer"></a></div>
                         <h3 class="blackcolor gap30">Customer Review</h3>
                        <hr>
                        
 <?php 
 											$customer_review_bg_image = $unserialize_val['customer_review_bg_image'];	

	$mystring2 = $customer_review_bg_image;
	$pos2 = strpos($mystring2, $findme);
	if ($pos2 === false) {
	}else{
	$string3 = strstr($mystring2, '/wp-content');
	$customer_review_bg_image_after = $string1.$string3;					
	} 

 ?>                  
                        <!-- Testimonials Slider -->
        <section class="overlay-dark80 dark-bg ptb ptb-sm-80 control_arrow" style="background:url(<?php echo $customer_review_bg_image_after;?>); padding:15px;" data-stellar-background-ratio="0.5">
                <div class="gap30"></div>
                <h3 class="text-center">Happy Customers</h3>
                <div class="gap30"></div>
                <div class="white owl-carousel image-slider nf-carousel-theme testimonial-carousel">
<?php 
$testi_args = array('posts_per_page' => -1,'post_type' => 'testimonials','post_status' => 'publish');
$testimonials_posts = get_posts( $testi_args ); 
foreach($testimonials_posts as $testimonials_post){	

				$read_more_link = get_permalink($testimonials_post->ID);


$testi_for_cat = get_post_meta( $testimonials_post->ID, 'testi_for_cat', true );
$retrieve = explode("," ,$testi_for_cat);
$current_cat_id = $cate->term_id;
if(in_array($current_cat_id,$retrieve)){
$testimonial_content = wp_trim_words($testimonials_post->post_content, 35);
?>				
                    <div class="item">
                        <div class="testimonial text-center dark-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead"><?php if($testimonial_content){ echo $testimonial_content;}else{  ?>" I got a dummy for Christmas and started teaching myself. I got books and records and sat in front of the practising. I did my first show in the third grade and just kept going. "<?php } ?></p>
                            <h6 class="quote-author"><?php echo get_post_meta( $testimonials_post->ID, 'testimonial_name', true );?> <span style="font-weight: 400;">( <?php echo get_post_meta( $testimonials_post->ID, 'designation', true );?> )</span></h6>
                        </div>
                    </div>
                    <?php }
							}
							?>		
                    
          
            </div><div class="clearfix"></div>
                    
                    <div class="gap30"></div>
        </section>
        <!-- End Testimonials Slider -->
                        
                        
        
        </div>  
  
  
  
  
  
  <div class="col-md-4">
  
                       									  <?php include(TEMPLATEPATH."/sidebar-in-single-course-category-page.php");?>

  
  </div><!--col-md-4-->
        
        
        </div>
        
        
        
        
        </div>
        
         
        
        
        

<?php 

get_footer();

?>

