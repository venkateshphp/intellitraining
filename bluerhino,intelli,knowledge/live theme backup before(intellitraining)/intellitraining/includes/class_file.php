<?php
/************************************
*
Create Custom Post type
*
*************************************/
class ThemeOptions {



public static function registerTestimonialsPostType() {
	
					/************************************
					Labels for Custom Post Type(Testimonials)
					*************************************/

					$labels = array(
					'name'                => _x( 'Testimonials', 'Post Type General Name', 'wpex' ),
					'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'wpex' ),
					'menu_name'           => __( 'Testimonials', 'wpex' ),
					'parent_item_colon'   => __( 'Parent Testimonial', 'wpex' ),
					'all_items'           => __( 'All Testimonials', 'wpex' ),
					'view_item'           => __( 'View Testimonial', 'wpex' ),
					'add_new_item'        => __( 'Add New Testimonial', 'wpex' ),
					'add_new'             => __( 'Add New Testimonial', 'wpex' ),
					'edit_item'           => __( 'Edit Testimonial', 'wpex' ),
					'update_item'         => __( 'Update Testimonial', 'wpex' ),
					'search_items'        => __( 'Search Testimonial', 'wpex' ),
					'not_found'           => __( 'Not Found', 'wpex' ),
					'not_found_in_trash'  => __( 'Not found in Trash', 'wpex' ),
					);
					
					/************************************
					Other supports for Custom Post Type(Testimonials)
					*************************************/

					$args = array(
					'label'               => __( 'testimonials', 'wpex' ),
					'description'         => __( 'Testimonials For Users Guide', 'wpex' ),
					'labels'              => $labels,
					'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
					'public'              => true,
					'show_ui'             => true,
					'show_in_menu'        => true,
					'show_in_nav_menus'   => true,
					'show_in_admin_bar'   => true,
					'menu_position'       => 5,
					'can_export'          => true,
					'has_archive'         => true,
					'exclude_from_search' => false,
					'publicly_queryable'  => true,
					'capability_type'     => 'page',
					);

					/************************************
					Register Custom Post Type(Testimonials)
					*************************************/

					register_post_type( 'testimonials', $args );
					
	}
	public static function registerFaqsPostType() {
	
					/************************************
					Labels for Custom Post Type(Faqs)
					*************************************/

					$labels = array(
					'name'                => _x( 'Faqs', 'Post Type General Name', 'wpex' ),
					'singular_name'       => _x( 'Faq', 'Post Type Singular Name', 'wpex' ),
					'menu_name'           => __( 'Faqs', 'wpex' ),
					'parent_item_colon'   => __( 'Parent Faq', 'wpex' ),
					'all_items'           => __( 'All Faqs', 'wpex' ),
					'view_item'           => __( 'View Faq', 'wpex' ),
					'add_new_item'        => __( 'Add New Faq', 'wpex' ),
					'add_new'             => __( 'Add New Faq', 'wpex' ),
					'edit_item'           => __( 'Edit Faq', 'wpex' ),
					'update_item'         => __( 'Update Faq', 'wpex' ),
					'search_items'        => __( 'Search Faq', 'wpex' ),
					'not_found'           => __( 'Not Found', 'wpex' ),
					'not_found_in_trash'  => __( 'Not found in Trash', 'wpex' ),
					);
					
					/************************************
					Other supports for Custom Post Type(Faqs)
					*************************************/

					$args = array(
					'label'               => __( 'faqs', 'wpex' ),
					'description'         => __( 'Faqs For Users Guide', 'wpex' ),
					'labels'              => $labels,
					'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
					'public'              => true,
					'show_ui'             => true,
					'show_in_menu'        => true,
					'show_in_nav_menus'   => true,
					'show_in_admin_bar'   => true,
					'menu_position'       => 5,
					'can_export'          => true,
					'has_archive'         => true,
					'exclude_from_search' => false,
					'publicly_queryable'  => true,
					'capability_type'     => 'page',
					);

					/************************************
					Register Custom Post Type(Faqs)
					*************************************/

					register_post_type( 'faqs', $args );
					
	}
	
		public static function registerClientsPostType() {
		
						/************************************
						Labels for Custom Post Type(Clients)
						*************************************/
	
						$labels = array(
						'name'                => _x( 'Clients', 'Post Type General Name', 'wpex' ),
						'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'wpex' ),
						'menu_name'           => __( 'Clients', 'wpex' ),
						'parent_item_colon'   => __( 'Parent Client', 'wpex' ),
						'all_items'           => __( 'All Clients', 'wpex' ),
						'view_item'           => __( 'View Client', 'wpex' ),
						'add_new_item'        => __( 'Add New Client', 'wpex' ),
						'add_new'             => __( 'Add New Client', 'wpex' ),
						'edit_item'           => __( 'Edit Client', 'wpex' ),
						'update_item'         => __( 'Update Client', 'wpex' ),
						'search_items'        => __( 'Search Client', 'wpex' ),
						'not_found'           => __( 'Not Found', 'wpex' ),
						'not_found_in_trash'  => __( 'Not found in Trash', 'wpex' ),
						);
						
						/************************************
						Other supports for Custom Post Type(Clients)
						*************************************/
	
						$args = array(
						'label'               => __( 'clients', 'wpex' ),
						'description'         => __( 'Clients For Users Guide', 'wpex' ),
						'labels'              => $labels,
						'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
						'public'              => true,
						'show_ui'             => true,
						'show_in_menu'        => true,
						'show_in_nav_menus'   => true,
						'show_in_admin_bar'   => true,
						'menu_position'       => 5,
						'can_export'          => true,
						'has_archive'         => true,
						'exclude_from_search' => false,
						'publicly_queryable'  => true,
						'capability_type'     => 'page',
						);
	
						/************************************
						Register Custom Post Type(Clients)
						*************************************/
	
						register_post_type( 'clients', $args );
						 
		}
		
		public static function registerCourseVenuePostType() {
		
						/************************************
						Labels for Custom Post Type(Course Venue)
						*************************************/
	
						$labels = array(
						'name'                => _x( 'Course Venues', 'Post Type General Name', 'wpex' ),
						'singular_name'       => _x( 'Course Venue', 'Post Type Singular Name', 'wpex' ),
						'menu_name'           => __( 'Course Venues', 'wpex' ),
						'parent_item_colon'   => __( 'Parent Course Venue', 'wpex' ),
						'all_items'           => __( 'All Course Venues', 'wpex' ),
						'view_item'           => __( 'View Course Venue', 'wpex' ),
						'add_new_item'        => __( 'Add New Course Venue', 'wpex' ),
						'add_new'             => __( 'Add New Course Venue', 'wpex' ),
						'edit_item'           => __( 'Edit Course Venue', 'wpex' ),
						'update_item'         => __( 'Update Course Venue', 'wpex' ),
						'search_items'        => __( 'Search Course Venue', 'wpex' ),
						'not_found'           => __( 'Not Found', 'wpex' ),
						'not_found_in_trash'  => __( 'Not found in Trash', 'wpex' ),
						);
						
						/************************************
						Other supports for Custom Post Type(Course Venue)
						*************************************/
	
						$args = array(
						'label'               => __( 'course_venues', 'wpex' ),
						'description'         => __( 'Clients For Users Guide', 'wpex' ),
						'labels'              => $labels,
						'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
						'public'              => true,
						'show_ui'             => true,
						'show_in_menu'        => true,
						'show_in_nav_menus'   => true,
						'show_in_admin_bar'   => true,
						'menu_position'       => 5,
						'can_export'          => true,
						'has_archive'         => true,
						'exclude_from_search' => false,
						'publicly_queryable'  => true,
						'capability_type'     => 'page',
						);
	
						/************************************
						Register Custom Post Type(Course Venue)
						*************************************/
	
						register_post_type( 'course_venues', $args );
						 
		}
	
                 	/************************************
					Create Taxonomies Post Type(Product)
					*************************************/
	
	public static function registerTaxonomyForProductsPostType() {
					
					$labels = array(
					'name'              => _x( 'Locations', 'taxonomy general name' ),
					'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
					'search_items'      => __( 'Search Locations' ),
					'all_items'         => __( 'All Locations' ),
					'parent_item'       => __( 'Parent Locations' ),
					'parent_item_colon' => __( 'Parent Location:' ),
					'edit_item'         => __( 'Edit Locations' ),
					'update_item'       => __( 'Update Locations' ),
					'add_new_item'      => __( 'Add New Location' ),
					'new_item_name'     => __( 'New Location Name' ),
					'menu_name'         => __( 'Location' ),
					);
					
					$args = array(
					'hierarchical'      => true,
					'labels'            => $labels,
					'show_ui'           => true,
					'show_admin_column' => true,
					'query_var'         => true,
					'rewrite'           => array( 'slug' => 'locations'),
					);
					
					register_taxonomy( 'product_location', array( 'product' ), $args );
				} 
				
				
					/************************************
					Create Taxonomies Post Type(FAQs)
					*************************************/
	
	public static function registerTaxonomyForFAQs() {
					
					$labels = array(
					'name'              => _x( 'FAQ Categories', 'taxonomy general name' ),
					'singular_name'     => _x( 'FAQ Category', 'taxonomy singular name' ),
					'search_items'      => __( 'Search FAQ Categories' ),
					'all_items'         => __( 'All FAQ Categories' ),
					'parent_item'       => __( 'Parent FAQ Categories' ),
					'parent_item_colon' => __( 'Parent FAQ Category:' ),
					'edit_item'         => __( 'Edit FAQ Categories' ),
					'update_item'       => __( 'Update FAQ Categories' ),
					'add_new_item'      => __( 'Add New FAQ Category' ),
					'new_item_name'     => __( 'New FAQ Category Name' ),
					'menu_name'         => __( 'FAQ Category' ),
					);
					
					$args = array(
					'hierarchical'      => true,
					'labels'            => $labels,
					'show_ui'           => true,
					'show_admin_column' => true,
					'query_var'         => true,
					'rewrite'           => array( 'slug' => 'faqs_categories'),
					);
					
					register_taxonomy( 'faq_categories', array( 'faqs' ), $args );
				} 
				
					/************************************
					Create Taxonomies Post Type(Course Venues)
					*************************************/
	
	public static function registerTaxonomyForCourseVenue() {
					
					$labels = array(
					'name'              => _x( 'Course Venue Categories', 'taxonomy general name' ),
					'singular_name'     => _x( 'Course Venue Category', 'taxonomy singular name' ),
					'search_items'      => __( 'Search Course Venue Categories' ),
					'all_items'         => __( 'All Course Venue Categories' ),
					'parent_item'       => __( 'Parent Course Venue Categories' ),
					'parent_item_colon' => __( 'Parent Course Venue Category:' ),
					'edit_item'         => __( 'Edit Course Venue Categories' ),
					'update_item'       => __( 'Update Course Venue Categories' ),
					'add_new_item'      => __( 'Add New Course Venue Category' ),
					'new_item_name'     => __( 'New Course Venue Category Name' ),
					'menu_name'         => __( 'Course Venue Category' ),
					);
					
					$args = array(
					'hierarchical'      => true,
					'labels'            => $labels,
					'show_ui'           => true,
					'show_admin_column' => true,
					'query_var'         => true,
					'rewrite'           => array( 'slug' => 'course_venue_categories'),
					);
					
					register_taxonomy( 'course_venue_categories', array( 'course_venues' ), $args );
				} 
					/*************************************************
									For Register Menus
					**************************************************/
					public static function register_my_menu() {
					  register_nav_menus( array('primary'=>'Primary Menu','footer-menu1'=>'Footer Menu1','course-category-menu'=>'Course Category Menu') );
					}
					
							/************************************
							Adding Meta Box For Each Testimonials Psition
							*************************************/
					
					public static function testimonial_add_custom_box() {
					
							add_meta_box('',__( 'Page Theme Options', 'testimonial_textdomain' ), 'ThemeOptions::testimonial_inner_custom_box1', 'testimonials' , 'advanced' , 'high');
							add_meta_box('',__( 'Faq', 'faq_textdomain' ), 'ThemeOptions::faq_inner_custom_box1', 'faqs' , 'side' , 'high');	
							$array[0]='page';
							$array[1]='clients';
							$array[2]='post';
							foreach($array as $key => $value){
							add_meta_box('',__( 'Page Theme Options', 'page_custom_title_textdomain' ), 'ThemeOptions::page_custom_title', $value , 'advanced' , 'high');	
							}
							
							add_meta_box('',__( 'Course Venue Theme Options', 'testimonial_textdomain' ), 'ThemeOptions::course_venue_inner_custom_box1', 'course_venues' , 'advanced' , 'high');
							
						add_meta_box('',__( 'Page Theme Options', 'testimonial_textdomain' ), 'ThemeOptions::testimonial_inner_custom_box_product', 'product' , 'advanced' , 'high');	
							
						}
						
					public static function testimonial_inner_custom_box_product( $post ) {	
											wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );

					$seo_edu_name = get_post_meta( $post->ID, 'seo_edu_name', true );
					$seo_streetAddress = get_post_meta( $post->ID, 'seo_streetAddress', true );	
					$seo_postalCode = get_post_meta( $post->ID, 'seo_postalCode', true );	
					
					?>
					<div class="overview">
								<h4>For SEO Purpose educationevent Fields</h4>
											<div class="custom_adjust">
												 <div class="single_whole_div">   
												<div class="link_for_image">name :</div>
												<input id="seo_edu_name" type="text" size="45" value="<?php echo $seo_edu_name; ?>" name="seo_edu_name" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">streetAddress  :</div>
												<textarea id="seo_streetAddress" name="seo_streetAddress"><?php echo $seo_streetAddress; ?></textarea> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">postalCode  :</div>
												<input id="seo_postalCode" type="text" size="45" value="<?php echo $seo_postalCode; ?>" name="seo_postalCode" /> 
												</div><!--single_whole_div-->
												
												
												</div><!--custom_adjust-->
												</div><!--overview-->
												
												<style>
						.overview textarea {
						width: 80%;
						float: left;
						min-height: 200px;
						resize: none;
						}
						.postbox {
						width:100% !important;
						float:left !important;
						}
						.single_whole_div {
						width:100%;
						float:left;
						margin-top:1%;
						margin-bottom:1%;
						}
						.font_color_red {
						color:red;
						}
						.overview label {
					width: 25%;
					float: left;
					margin-top: 5px;
					}
					.overview {
					margin-bottom: 3%;
					width:100%;
					float:left;
					}
					.overview h3{
					padding-left:0;
					}
					textarea {
					width: 90%;
					min-height: 200px;
					resize: none;
					}
						</style>
					<?php
					
					
					}

						public static function course_venue_inner_custom_box1( $post ) {	
						wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );
						
						$hotel_discount = get_post_meta( $post->ID, 'hotel_discount', true );
						$address = get_post_meta( $post->ID, 'address', true );
						
                        $box1_title = get_post_meta( $post->ID, 'box1_title', true );
						$box2_title = get_post_meta( $post->ID, 'box2_title', true );	
						
						$map = get_post_meta( $post->ID, 'map', true );	
						
											?>
						<div class="overview">
							
							<h3>Title:<input type="text" name="box1_title" value="<?php echo $box1_title;?>" /></h3>
						<label for="myplugin_new_field">
						Hotel Discount:<br>
						</label>
						<textarea name="hotel_discount" id="hotel_discount"><?php echo $hotel_discount; ?></textarea>
						</div><!--overview-->
						<div class="overview">
							
							<h3>Title:<input type="text" name="box2_title" value="<?php echo $box2_title;?>" /></h3>
						<label for="myplugin_new_field">
						Address:<br>
						</label>
						<textarea name="address" id="address"><?php echo $address; ?></textarea>
						</div><!--overview-->
						<div class="overview">
							
							<h3>Map Section</h3>
						<label for="myplugin_new_field">
						Map:<br>
						</label>
						<textarea name="map" id="map"><?php echo $map; ?></textarea>
						<div class="single_whole_div"> 
									 <strong class="font_color_red"><u class="font_color_red">Important Note:</u> The Map Iframe should be width=550px height=230px.</strong>
									</div>
						
						</div><!--overview-->
						<!--For SEO purpose added fields start-->
															<div class="overview">
								<h3>For SEO purpose added fields </h3>
								<h4>Schema.org/LocalBusiness  </h4>

										<div class="custom_adjust">
										<?php
											$seo_name =  get_post_meta($post->ID, 'seo_name', true );
											$seo_streetAddress =  get_post_meta($post->ID, 'seo_streetAddress', true );
											$seo_addressLocality =  get_post_meta($post->ID, 'seo_addressLocality', true );
											$seo_addressRegion =  get_post_meta($post->ID, 'seo_addressRegion', true );
											$seo_postalCode  =  get_post_meta($post->ID, 'seo_postalCode', true );
											$seo_telephone =  get_post_meta($post->ID, 'seo_telephone', true );
												?>
												 <div class="single_whole_div">   
												<div class="link_for_image">name :</div>
												<input id="seo_name" type="text" size="45" value="<?php echo $seo_name; ?>" name="seo_name" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">streetAddress :</div>
												<textarea id="seo_streetaddress" name="seo_streetAddress"><?php echo $seo_streetAddress; ?></textarea> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">addressLocality :</div>
												<input id="seo_addressLocality" name="seo_addressLocality"  type="text" size="45" value="<?php echo $seo_addressLocality;?>" />
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">addressRegion :</div>
												<input id="seo_addressRegion" type="text" size="45" value="<?php echo $seo_addressRegion; ?>" name="seo_addressRegion" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">postalCode :</div>
												<input id="seo_postalCode" type="text" size="45" value="<?php echo $seo_postalCode; ?>" name="seo_postalCode" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">telephone :</div>
												<input id="seo_telephone" type="text" size="45" value="<?php echo $seo_telephone; ?>" name="seo_telephone" /> 
												</div><!--single_whole_div-->
												
												</div><!--custom_adjust-->
												<h4>Schema.org/AggregateReview</h4>
											<div class="custom_adjust">
										<?php
											$seo_aggregate_name = get_post_meta($post->ID, 'seo_aggregate_name', true );
											$seo_ratingValue = get_post_meta($post->ID, 'seo_ratingValue', true );
											$seo_bestRating  = get_post_meta($post->ID, 'seo_bestRating', true );
											$seo_reviewCount = get_post_meta($post->ID, 'seo_reviewCount', true );
												?>
												 <div class="single_whole_div">   
												<div class="link_for_image">name :</div>
												<input id="seo_aggregate_name" type="text" size="45" value="<?php echo $seo_aggregate_name; ?>" name="seo_aggregate_name" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">ratingValue  :</div>
												<input id="seo_ratingValue" type="text" size="45" value="<?php echo $seo_ratingValue; ?>" name="seo_ratingValue" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">bestRating :</div>
												<input id="seo_bestRating" type="text" size="45" value="<?php echo $seo_bestRating; ?>" name="seo_bestRating" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">reviewCount :</div>
												<input id="seo_reviewCount" type="text" size="45" value="<?php echo $seo_reviewCount; ?>" name="seo_reviewCount" /> 
												</div><!--single_whole_div-->
												
												</div><!--custom_adjust-->

											
											
								</div><!--overview-->	
							<!--For SEO purpose added fields End-->
						
						<style>
						.overview textarea {
						width: 80%;
						float: left;
						min-height: 200px;
						resize: none;
						}
						.postbox {
						width:100% !important;
						float:left !important;
						}
						.single_whole_div {
						width:100%;
						float:left;
						margin-top:1%;
						margin-bottom:1%;
						}
						.font_color_red {
						color:red;
						}
						.overview label {
					width: 25%;
					float: left;
					margin-top: 5px;
					}
					.overview {
					margin-bottom: 3%;
					width:100%;
					float:left;
					}
					.overview h3{
					padding-left:0;
					}
					textarea {
					width: 90%;
					min-height: 200px;
					resize: none;
					}
						</style>
						<?php
						}
					
						public static function testimonial_inner_custom_box1( $post ) {	
						
						wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );
						
						$testimonial_designation = get_post_meta( $post->ID, 'designation', true );
						$testimonial_name = get_post_meta( $post->ID, 'testimonial_name', true );
						$come_under_home = get_post_meta( $post->ID, 'come_under_home', true );
						$testi_for_cat = get_post_meta( $post->ID, 'testi_for_cat', true );
						$retrieve = explode("," ,$testi_for_cat);
						echo '<label for="myplugin_new_field">';
						_e("Name:", 'testimonial_textdomain' );
						echo '</label> ';
						echo '<input type="text" id="testimonial_name" name="testimonial_name" value="'.esc_attr($testimonial_name).'" size="27" /><br/>';
						echo '<label for="myplugin_new_field">';
						_e("Designation:", 'testimonial_textdomain' );
						echo '</label> ';
						echo '<input type="text" id="designation" name="designation" value="'.esc_attr($testimonial_designation).'" size="27" /><br/><br>';
						echo '<label for="myplugin_new_field">';
						?>
						Is Come Under Home:&nbsp;&nbsp;
						</label>
						<input type="hidden" name="hidden_come_under_home" />
						<?php //echo $come_under_home;
						 echo $_POST['come_under_home'];
						?>
					<?php /*?>	<input type="checkbox" id="come_under_home" name="come_under_home" <?php if($come_under_home=="Yes"){ ?> checked="checked" <?php } ?> value="" size="27" /><?php */?>
						  <?php 
    echo '<label for="myplugin_new_field" style="margin-right: 1%;position: relative;bottom: 3px;">';
      _e("Active:", 'store_textdomain' );
    echo '</label> '; ?>
						  <input type="radio" class="come_under_home" name="come_under_home" value="Yes" size="27" <?php if($come_under_home == 'Yes'){ echo "checked"; } ?>/>
    <?php 
    echo '<label for="myplugin_new_field" style="margin-right: 1%;position: relative;bottom: 3px;">';
      _e("Inactive:", 'store_textdomain' );
    echo '</label> '; ?>
    <input type="radio" class="come_under_home" name="come_under_home" value="No" size="27" <?php if($come_under_home == 'No'){ echo "checked"; } ?>/>
	
						<br><br><label for="myplugin_new_field">
						Its Under  which Categories:
						</label>
						<?php
							$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
							$count = count($single_taxonomy);
							if($count){
						?>
					<select name="testi_for_cat[]" id="testi_for_cat" multiple> 
							<?php
							foreach($single_taxonomy as $key => $single_taxonomy_cat){
							$cat_id = $single_taxonomy_cat->term_id;
							?>
							<option value="<?php echo $single_taxonomy_cat->term_id;?>" <?php foreach($retrieve as $retrive_ID) { if($single_taxonomy_cat->term_id == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $single_taxonomy_cat->name;?></option>
							<?php 
							}
							?>
					</select><br><br>
				<?php		$page_custom_title = get_post_meta( $post->ID, 'page_custom_title', true );
						?>
						<div class="overview">
							
							<h3>Page Custom  Title</h3>
						<label for="myplugin_new_field">
						Page Custom  Title:
						</label>
						<input type="text" name="page_custom_title" id="page_custom_title" value="<?php echo $page_custom_title; ?>" />
						</div><!--overview-->
						
						<!--sidebar image1 start-->
						<?php
								$sidebar_image1 = get_post_meta( $post->ID, 'sidebar_image1', true );
								$sidebar_image1_url = get_post_meta( $post->ID, 'sidebar_image1_url', true );
										
								$sidebar_image2 = get_post_meta( $post->ID, 'sidebar_image2', true );
								$sidebar_image2_url = get_post_meta( $post->ID, 'sidebar_image2_url', true );	
						?>
							<div class="overview">
							
							<h3>Sidebar Image1</h3>
							<div class="custom_adjust">
							<?php
							echo '<label for="myplugin_new_field">';
							_e("Upload Only Images :", 'icon_file_textdomain' );
							echo '</label>'; ?>
							<input id="fetch_url_image1" type="text" size="45" value="<?php echo $sidebar_image1; ?>" name="sidebar_image1" />
							<input id="icon_file_button_image1" type="button" class="for_sidebar_image" value="Upload Image" /><label>Enter URL or upload file.</label>
							<div class="single_whole_div"> 
							<strong class="font_color_red"><u class="font_color_red">Important Note:</u> The images should be in 345x375(width = 345px,Height = 375px) Resolutions.</strong>
							</div>
							<div class="single_whole_div">   
							<div class="link_for_image">Sidebar Image 1 Link :</div>
							<input id="fetch_url_image1_url" type="text" size="45" value="<?php echo $sidebar_image1_url; ?>" name="sidebar_image1_url" /> 
							</div>
							</div><!--custom_adjust-->
							</div><!--overview-->	
<!--sidebar image1 end-->
<!--sidebar image2 start-->
							<div class="overview">
							
							<h3>Sidebar Image2</h3>
							<div class="custom_adjust">
							<?php
							echo '<label for="myplugin_new_field">';
							_e("Upload Only Images :", 'icon_file_textdomain' );
							echo '</label>'; ?>
							<input id="fetch_url_image2" type="text" size="45" value="<?php echo $sidebar_image2; ?>" name="sidebar_image2" />
							<input id="icon_file_button_image2" type="button" class="for_sidebar_image" value="Upload Image" /><label>Enter URL or upload file.</label>
							<div class="single_whole_div"> 
							<strong class="font_color_red"><u class="font_color_red">Important Note:</u> The images should be in 345x375(width = 345px,Height = 375px) Resolutions.</strong>
							</div>
							<div class="single_whole_div">   
							<div class="link_for_image">Sidebar Image 2 Link :</div>
							<input id="fetch_url_image2_url" type="text" size="45" value="<?php echo $sidebar_image2_url; ?>" name="sidebar_image2_url" /> 
							</div>
							</div><!--custom_adjust-->
							</div><!--overview-->	
<!--sidebar image2 end-->
<!--sidebar slider start-->
												<div class="overview">
												<h3>Sidebar Slider</h3>
												<div class="custom_adjust">
												<?php	
												$sidebar_slider = get_post_meta( $post->ID, 'sidebar_slider', true );
						                        $retrive = explode("," ,$sidebar_slider);
												$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
												$count = count($single_taxonomy);
												if($count){
												?>
												<select name="sidebar_slider[]" id="sidebar_slider-<?php echo $post->ID;?>" class="checming" multiple> 
												
												<?php
												foreach($single_taxonomy as $key => $single_taxonomy_cat){
												$cat_id = $single_taxonomy_cat->term_id;
												
												?>
												<option value="<?php echo $single_taxonomy_cat->term_id;?>" <?php foreach($retrive as $retrive_ID) { if($single_taxonomy_cat->term_id == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $single_taxonomy_cat->name;?></option>
												<?php 
												}
												?>
												</select>
												<br />
												<p style="color:#ff0000; font-weight:bolder; font-size:15px; text-decoration:underline;">Important Note:</p>
												<p style="color:#ff0000; font-weight:bold;">1) Please Select Maximum (10) Course Categories to Display in Coressponding Single course Category Page.</p>
												<p style="color:#ff0000; font-weight:bold;">2) If You'll Select More Than (10) Course Categories means, It'll Display First (10) Course Categories Only In in Coressponding Single course Category Page.</p>
												<p style="color:#ff0000; font-weight:bold;">3) Hold down the Ctrl (windows) / Command (Mac) button to select multiple options In The Select Box.</p>
												<?php
												}
												?>
	<div class="ordered_part" id="need_to_change<?php echo $post->ID;?>">
	</div>
	<!--<div class="need"></div>-->
												</div><!--custom_adjust-->
												
												</div><!--overview-->	
												
	<!--For SEO purpose added fields start-->
															<div class="overview">
								<h3>For SEO purpose added fields </h3>
								<h4>Schema.org/LocalBusiness  </h4>

										<div class="custom_adjust">
										<?php
											$seo_name =  get_post_meta($post->ID, 'seo_name', true );
											$seo_streetAddress =  get_post_meta($post->ID, 'seo_streetAddress', true );
											$seo_addressLocality =  get_post_meta($post->ID, 'seo_addressLocality', true );
											$seo_addressRegion =  get_post_meta($post->ID, 'seo_addressRegion', true );
											$seo_postalCode  =  get_post_meta($post->ID, 'seo_postalCode', true );
											$seo_telephone =  get_post_meta($post->ID, 'seo_telephone', true );
												?>
												 <div class="single_whole_div">   
												<div class="link_for_image">name :</div>
												<input id="seo_name" type="text" size="45" value="<?php echo $seo_name; ?>" name="seo_name" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">streetAddress :</div>
												<input id="seo_streetaddress" type="text" size="45" value="<?php echo $seo_streetAddress; ?>" name="seo_streetAddress" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">addressLocality :</div>
												<textarea id="seo_addressLocality" name="seo_addressLocality"><?php echo $seo_addressLocality; ?></textarea>
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">addressRegion :</div>
												<input id="seo_addressRegion" type="text" size="45" value="<?php echo $seo_addressRegion; ?>" name="seo_addressRegion" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">postalCode :</div>
												<input id="seo_postalCode" type="text" size="45" value="<?php echo $seo_postalCode; ?>" name="seo_postalCode" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">telephone :</div>
												<input id="seo_telephone" type="text" size="45" value="<?php echo $seo_telephone; ?>" name="seo_telephone" /> 
												</div><!--single_whole_div-->
												
												</div><!--custom_adjust-->
												<h4>Schema.org/AggregateReview</h4>
											<div class="custom_adjust">
										<?php
											$seo_aggregate_name = get_post_meta($post->ID, 'seo_aggregate_name', true );
											$seo_ratingValue = get_post_meta($post->ID, 'seo_ratingValue', true );
											$seo_bestRating  = get_post_meta($post->ID, 'seo_bestRating', true );
											$seo_reviewCount = get_post_meta($post->ID, 'seo_reviewCount', true );
												?>
												 <div class="single_whole_div">   
												<div class="link_for_image">name :</div>
												<input id="seo_aggregate_name" type="text" size="45" value="<?php echo $seo_aggregate_name; ?>" name="seo_aggregate_name" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">ratingValue  :</div>
												<input id="seo_ratingValue" type="text" size="45" value="<?php echo $seo_ratingValue; ?>" name="seo_ratingValue" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">bestRating :</div>
												<input id="seo_bestRating" type="text" size="45" value="<?php echo $seo_bestRating; ?>" name="seo_bestRating" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">reviewCount :</div>
												<input id="seo_reviewCount" type="text" size="45" value="<?php echo $seo_reviewCount; ?>" name="seo_reviewCount" /> 
												</div><!--single_whole_div-->
												
												</div><!--custom_adjust-->

											
											
								</div><!--overview-->	
							<!--For SEO purpose added fields End-->
							
							<!--sidebar slider end-->
					<style>
					.overview textarea {
						width: 80%;
						float: left;
						min-height: 200px;
						resize: none;
						}
						.postbox {
						width:100% !important;
						float:left !important;
						}
					.single_whole_div {
						width:100%;
						float:left;
						margin-top:2%;
						margin-bottom:2%;
						}
						.link_for_image {
						float: left;
						width: 25%;
						margin-top: 4px;
						}
						.overview input[type='text'] {
						width: 60%;
						float: left;
						}
					select#testi_for_cat,select#sidebar_slider {
					min-height: 400px;
					width:60%;
					float:left;
					margin-right:40%;
					}
					.overview label {
					width: 25%;
					float: left;
					margin-top: 5px;
					}
					.overview {
					margin-bottom: 3%;
					}
					.overview h3{
					padding-left:0;
					}
					.font_color_red {
						color:red;
						}
						.response_cat_sidebar_slider {
								padding:10px;
								background-color:#9F9;
								border:2px solid #396;
								margin-bottom:20px;
							}
							
							.list_cat_sidebar li {
							margin: 0 0 3px;
								padding:8px;
								background-color:#333;
								color:#fff;
								list-style: none;
							}
							select.checming {
						min-height: 365px;
						width: 100%;
						float: left;
						}
					</style>
					<script type="text/javascript">
					
					var m = jQuery.noConflict();
						m(document).ready(function() {
						/**************Select Box Onchange Start ************/
							m( ".checming" )
							.change(function () {
							var req_id = this.id;
							var id_val = req_id.split('-', 2)[1];
							//alert(id_val);
							var str = "";
							m( "#"+req_id+" option:selected" ).each(function() {
						
							str += m( this ).val() + ",";
					   
	
							});
							//var req_val = m( "#"+req_id+" option:selected" ).val();
							//alert(req_val);
							 m( ".need" ).text( str );
							 var a_post_id = id_val;
					m.post("<?php echo bloginfo('template_url'); ?>/includes/ajax_file.php", { 
					f_post_id: a_post_id,
					sel_val: str.slice(0,-1),
					action: 'sidebar_order_in_page'},function(responseText) { 
						m("#need_to_change"+id_val).empty().html(responseText);
					});
	
							})
							.change();
							
							
							
						/**************Select Box Onchange End ************/
					 /****************************************************************
						 For get the uploaded image url for caregory sidbar image start
						********************************************************************/
						
					var formfield;
					var textbox_validation;
					var id_name;
					var current_id,part_name;
					m('.for_sidebar_image').click(function() {
					
					    part_name = this.id;
					   

						textbox_validation = part_name;
						m('html').addClass('Image');

						
						if(part_name=='icon_file_button_image1'){
						formfield = m('#fetch_url_image1').attr('name');
						}else if(part_name=='icon_file_button_image2'){
						formfield = m('#fetch_url_image2').attr('name');
						}
						
					
						
					tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
						return false;
					});
		
					// user inserts file into post. only run custom if user started process using the above process
					// window.send_to_editor(html) is how wp would normally handle the received data
					window.original_send_to_editor = window.send_to_editor;
					window.send_to_editor = function(html){
						if (formfield) {
						var string_validation = html.indexOf('"');
						if(string_validation === -1){
							var resulted_url = html.split("'");
						
						} else {
						
						var resulted_url = html.split('"');
						}
							if(textbox_validation == 'icon_file_button_image1'){
							
								m('#fetch_url_image1').val(resulted_url[1]);
								
							}else if(textbox_validation == 'icon_file_button_image2'){
							
								m('#fetch_url_image2').val(resulted_url[1]);
								
							}
							
						
							tb_remove();
							
							m('html').removeClass('Image');
							
						} else {
							window.original_send_to_editor(html);
						}
					};


						/****************************************************************
						 For get the uploaded image url for caregory sidbar image end
						********************************************************************/
						
						
						});
					</script>
					<?php
					}
						}
						
						/*****************************************
					     Adding Meta Box For Each Faqs Psition
				     	*****************************************/
						
								public static function faq_inner_custom_box1( $post ) {	
						
						wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );
						
						$faq_for_cat = get_post_meta( $post->ID, 'faq_for_cat', true );
						$retrieve = explode("," ,$faq_for_cat);
						?><label for="myplugin_new_field">
						Its Under  which Categories:
						</label>
						<?php
							$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
							$count = count($single_taxonomy);
							if($count){
						?>
					<select name="faq_for_cat[]" id="faq_for_cat" multiple> 
							<?php
							foreach($single_taxonomy as $key => $single_taxonomy_cat){
							$cat_id = $single_taxonomy_cat->term_id;
							?>
							<option value="<?php echo $single_taxonomy_cat->term_id;?>" <?php foreach($retrieve as $retrive_ID) { if($single_taxonomy_cat->term_id == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $single_taxonomy_cat->name;?></option>
							<?php 
							}
							?>
					</select><br><br>
					<?php	$page_custom_title = get_post_meta( $post->ID, 'page_custom_title', true );
						?><label for="myplugin_new_field">
						Page Custom  Title:
						</label>
						<input type="text" name="page_custom_title" id="page_custom_title" value="<?php echo $page_custom_title; ?>" />
	
					<style>
					select#faq_for_cat {
					min-height: 400px;
					}
					</style>
					
					
					<?php
					}
						}
	                  /************************************
					   Adding Meta Box For Page  Custom Title
				     	*************************************/
						
						public static function page_custom_title( $post ) {	
						
						wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );
						
						$page_custom_title = get_post_meta( $post->ID, 'page_custom_title', true );
						?>
						<div class="overview">
						<h3>Page Custom  Title</h3>
						<label for="myplugin_new_field">
						Page Custom  Title:
						</label>
						<input type="text" name="page_custom_title" id="page_custom_title" value="<?php echo $page_custom_title; ?>" />
						<?php
								$sidebar_image1 = get_post_meta( $post->ID, 'sidebar_image1', true );
								$sidebar_image1_url = get_post_meta( $post->ID, 'sidebar_image1_url', true );
										
								$sidebar_image2 = get_post_meta( $post->ID, 'sidebar_image2', true );
								$sidebar_image2_url = get_post_meta( $post->ID, 'sidebar_image2_url', true );	
						?>
						</div><!--overview-->
<!--sidebar image1 start-->
						<div class="overview">
							
							<h3>Sidebar Image1</h3>
							<div class="custom_adjust">
							<?php
							echo '<label for="myplugin_new_field">';
							_e("Upload Only Images :", 'icon_file_textdomain' );
							echo '</label>'; ?>
							<input id="fetch_url_image1" type="text" size="45" value="<?php echo $sidebar_image1; ?>" name="sidebar_image1" />
							<input id="icon_file_button_image1" type="button" class="for_sidebar_image" value="Upload Image" /><label>Enter URL or upload file.</label>
							<div class="single_whole_div"> 
							<strong class="font_color_red"><u class="font_color_red">Important Note:</u> The images should be in 345x375(width = 345px,Height = 375px) Resolutions.</strong>
							</div>
							<div class="single_whole_div">   
							<div class="link_for_image">Sidebar Image 1 Link :</div>
							<input id="fetch_url_image1_url" type="text" size="45" value="<?php echo $sidebar_image1_url; ?>" name="sidebar_image1_url" /> 
							</div>
							</div><!--custom_adjust-->
							</div><!--overview-->	
<!--sidebar image1 end-->
<!--sidebar image2 start-->
							<div class="overview">
							
							<h3>Sidebar Image2</h3>
							<div class="custom_adjust">
							<?php
							echo '<label for="myplugin_new_field">';
							_e("Upload Only Images :", 'icon_file_textdomain' );
							echo '</label>'; ?>
							<input id="fetch_url_image2" type="text" size="45" value="<?php echo $sidebar_image2; ?>" name="sidebar_image2" />
							<input id="icon_file_button_image2" type="button" class="for_sidebar_image" value="Upload Image" /><label>Enter URL or upload file.</label>
							<div class="single_whole_div"> 
							<strong class="font_color_red"><u class="font_color_red">Important Note:</u> The images should be in 345x375(width = 345px,Height = 375px) Resolutions.</strong>
							</div>
							<div class="single_whole_div">   
							<div class="link_for_image">Sidebar Image 2 Link :</div>
							<input id="fetch_url_image2_url" type="text" size="45" value="<?php echo $sidebar_image2_url; ?>" name="sidebar_image2_url" /> 
							</div>
							</div><!--custom_adjust-->
							</div><!--overview-->	
<!--sidebar image2 end-->
<!--sidebar slider start-->
												<div class="overview">
												<h3>Sidebar Slider</h3>
												<div class="custom_adjust">
												<?php	
												$sidebar_slider = get_post_meta( $post->ID, 'sidebar_slider', true );
						                        $retrive = explode("," ,$sidebar_slider);
												$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
												$count = count($single_taxonomy);
												if($count){
												?>
												<select name="sidebar_slider[]" id="sidebar_slider-<?php echo $post->ID;?>" class="checming" multiple> 
												
												<?php
												foreach($single_taxonomy as $key => $single_taxonomy_cat){
												$cat_id = $single_taxonomy_cat->term_id;
												
												?>
												<option value="<?php echo $single_taxonomy_cat->term_id;?>" <?php foreach($retrive as $retrive_ID) { if($single_taxonomy_cat->term_id == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $single_taxonomy_cat->name;?></option>
												<?php 
												}
												?>
												</select>
												<br />
												<p style="color:#ff0000; font-weight:bolder; font-size:15px; text-decoration:underline;">Important Note:</p>
												<p style="color:#ff0000; font-weight:bold;">1) Please Select Maximum (10) Course Categories to Display in Coressponding Single course Category Page.</p>
												<p style="color:#ff0000; font-weight:bold;">2) If You'll Select More Than (10) Course Categories means, It'll Display First (10) Course Categories Only In in Coressponding Single course Category Page.</p>
												<p style="color:#ff0000; font-weight:bold;">3) Hold down the Ctrl (windows) / Command (Mac) button to select multiple options In The Select Box.</p>
												<?php
												}
												?>
	
	<div class="ordered_part" id="need_to_change<?php echo $post->ID;?>">
	</div>
	
												</div><!--custom_adjust-->
												
												</div><!--overview-->	
<!--sidebar slider end-->
<!--For SEO purpose added fields start-->
															<div class="overview">
								<h3>For SEO purpose added fields </h3>
								<h4>Schema.org/LocalBusiness  </h4>

										<div class="custom_adjust">
										<?php
											$seo_name =  get_post_meta($post->ID, 'seo_name', true );
											$seo_streetAddress =  get_post_meta($post->ID, 'seo_streetAddress', true );
											$seo_addressLocality =  get_post_meta($post->ID, 'seo_addressLocality', true );
											$seo_addressRegion =  get_post_meta($post->ID, 'seo_addressRegion', true );
											$seo_postalCode  =  get_post_meta($post->ID, 'seo_postalCode', true );
											$seo_telephone =  get_post_meta($post->ID, 'seo_telephone', true );
												?>
												 <div class="single_whole_div">   
												<div class="link_for_image">name :</div>
												<input id="seo_name" type="text" size="45" value="<?php echo $seo_name; ?>" name="seo_name" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">streetAddress :</div>
												<input id="seo_streetaddress" type="text" size="45" value="<?php echo $seo_streetAddress; ?>" name="seo_streetAddress" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">addressLocality :</div>
												<textarea id="seo_addressLocality" name="seo_addressLocality"><?php echo $seo_addressLocality; ?></textarea>
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">addressRegion :</div>
												<input id="seo_addressRegion" type="text" size="45" value="<?php echo $seo_addressRegion; ?>" name="seo_addressRegion" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">postalCode :</div>
												<input id="seo_postalCode" type="text" size="45" value="<?php echo $seo_postalCode; ?>" name="seo_postalCode" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">telephone :</div>
												<input id="seo_telephone" type="text" size="45" value="<?php echo $seo_telephone; ?>" name="seo_telephone" /> 
												</div><!--single_whole_div-->
												
												</div><!--custom_adjust-->
												<h4>Schema.org/AggregateReview</h4>
											<div class="custom_adjust">
										<?php
											$seo_aggregate_name = get_post_meta($post->ID, 'seo_aggregate_name', true );
											$seo_ratingValue = get_post_meta($post->ID, 'seo_ratingValue', true );
											$seo_bestRating  = get_post_meta($post->ID, 'seo_bestRating', true );
											$seo_reviewCount = get_post_meta($post->ID, 'seo_reviewCount', true );
												?>
												 <div class="single_whole_div">   
												<div class="link_for_image">name :</div>
												<input id="seo_aggregate_name" type="text" size="45" value="<?php echo $seo_aggregate_name; ?>" name="seo_aggregate_name" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">ratingValue  :</div>
												<input id="seo_ratingValue" type="text" size="45" value="<?php echo $seo_ratingValue; ?>" name="seo_ratingValue" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">bestRating :</div>
												<input id="seo_bestRating" type="text" size="45" value="<?php echo $seo_bestRating; ?>" name="seo_bestRating" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">reviewCount :</div>
												<input id="seo_reviewCount" type="text" size="45" value="<?php echo $seo_reviewCount; ?>" name="seo_reviewCount" /> 
												</div><!--single_whole_div-->
												
												</div><!--custom_adjust-->

											
											
								</div><!--overview-->	
							<!--For SEO purpose added fields End-->
						<style>
						.overview textarea {
						width: 80%;
						float: left;
						min-height: 200px;
						resize: none;
						}
						.postbox {
						width:100% !important;
						float:left !important;
						}
					.single_whole_div {
						width:100%;
						float:left;
						margin-top:2%;
						margin-bottom:2%;
						}
						.link_for_image {
						float: left;
						width: 25%;
						margin-top: 4px;
						}
						.overview input[type='text'] {
						width: 60%;
						float: left;
						}
					select#testi_for_cat,select#sidebar_slider {
					min-height: 400px;
					width:60%;
					float:left;
					margin-right:40%;
					}
					.overview label {
					width: 25%;
					float: left;
					margin-top: 5px;
					}
					.overview {
					margin-bottom: 3%;
					}
					.overview h3{
					padding-left:0;
					}
					.font_color_red {
						color:red;
						}
							.response_cat_sidebar_slider {
								padding:10px;
								background-color:#9F9;
								border:2px solid #396;
								margin-bottom:20px;
							}
							
							.list_cat_sidebar li {
							margin: 0 0 3px;
								padding:8px;
								background-color:#333;
								color:#fff;
								list-style: none;
							}
							select.checming {
						min-height: 365px;
						width: 100%;
						float: left;
						}
					</style>
					<script type="text/javascript">
					
					var m = jQuery.noConflict();
						m(document).ready(function() {
						
						
						
						/**************Select Box Onchange Start ************/
							m( ".checming" )
							.change(function () {
							var req_id = this.id;
							var id_val = req_id.split('-', 2)[1];
							//alert(id_val);
							var str = "";
							m( "#"+req_id+" option:selected" ).each(function() {
						
							str += m( this ).val() + ",";
					   
	
							});
							//var req_val = m( "#"+req_id+" option:selected" ).val();
							//alert(req_val);
							 m( ".need" ).text( str );
							 var a_post_id = id_val;
					m.post("<?php echo bloginfo('template_url'); ?>/includes/ajax_file.php", { 
					f_post_id: a_post_id,
					sel_val: str.slice(0,-1),
					action: 'sidebar_order_in_page'},function(responseText) { 
						m("#need_to_change"+id_val).empty().html(responseText);
					});
	
							})
							.change();
							
							
							
						/**************Select Box Onchange End ************/
						
					 /****************************************************************
						 For get the uploaded image url for caregory sidbar image start
						********************************************************************/
						
					var formfield;
					var textbox_validation;
					var id_name;
					var current_id,part_name;
					m('.for_sidebar_image').click(function() {
					
					    part_name = this.id;
					   

						textbox_validation = part_name;
						m('html').addClass('Image');

						
						if(part_name=='icon_file_button_image1'){
						formfield = m('#fetch_url_image1').attr('name');
						}else if(part_name=='icon_file_button_image2'){
						formfield = m('#fetch_url_image2').attr('name');
						}
						
					
						
					tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
						return false;
					});
		
					// user inserts file into post. only run custom if user started process using the above process
					// window.send_to_editor(html) is how wp would normally handle the received data
					window.original_send_to_editor = window.send_to_editor;
					window.send_to_editor = function(html){
					//alert(html);
						if (formfield) {
						var string_validation = html.indexOf('"');
						if(string_validation === -1){
							var resulted_url = html.split("'");
						
						} else {
						
						var resulted_url = html.split('"');
						}
							if(textbox_validation == 'icon_file_button_image1'){
							
								m('#fetch_url_image1').val(resulted_url[1]);
								
							}else if(textbox_validation == 'icon_file_button_image2'){
							
								m('#fetch_url_image2').val(resulted_url[1]);
								
							}
							
						
							tb_remove();
							
							m('html').removeClass('Image');
							
						} else {
							window.original_send_to_editor(html);
						}
					};


						/****************************************************************
						 For get the uploaded image url for caregory sidbar image end
						********************************************************************/
						
						
						});
					</script>
					<?php
					}
					
							/************************************
							When the post is saved, saves our custom data
							*************************************/
				
						public static function testimonial_save_postdata( $post_id ) {
						
							  if ( 'page' == isset($_REQUEST['post_type']) ) {
								if ( ! current_user_can( 'edit_page', $post_id ) )
									return;
							  } else {
								if ( ! current_user_can( 'edit_post', $post_id ) )
									return;
							  }
						
						
						if ( ! isset( $_POST['myplugin_noncename'] ) || ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename( __FILE__ ) ) )
								  return;
							
							  $post_ID = $_POST['post_ID'];
							  
							  /**********for SEO purpose Start **************/
							  
							   if(isset($_POST['seo_name'])){
							  $seo_name = sanitize_text_field( $_POST['seo_name'] );
							  add_post_meta($post_ID, 'seo_name', $seo_name, true) or update_post_meta($post_ID, 'seo_name', $seo_name);
							  }
							   if(isset($_POST['seo_streetAddress'])){
							   $seo_streetAddress = sanitize_text_field( $_POST['seo_streetAddress'] );
							  add_post_meta($post_ID, 'seo_streetAddress', $seo_streetAddress, true) or update_post_meta($post_ID, 'seo_streetAddress', $seo_streetAddress);
							  } 
							  
							  if(isset($_POST['seo_addressLocality'])){
							  $seo_addressLocality = sanitize_text_field( $_POST['seo_addressLocality'] );
							  add_post_meta($post_ID, 'seo_addressLocality', $seo_addressLocality, true) or update_post_meta($post_ID, 'seo_addressLocality', $seo_addressLocality);
							  }
							   if(isset($_POST['seo_addressRegion'])){
							   $seo_addressRegion = sanitize_text_field( $_POST['seo_addressRegion'] );
							  add_post_meta($post_ID, 'seo_addressRegion', $seo_addressRegion, true) or update_post_meta($post_ID, 'seo_addressRegion', $seo_addressRegion);
							  } 
							  
							  if(isset($_POST['seo_postalCode'])){
							  $seo_postalCode = sanitize_text_field( $_POST['seo_postalCode'] );
							  add_post_meta($post_ID, 'seo_postalCode', $seo_postalCode, true) or update_post_meta($post_ID, 'seo_postalCode', $seo_postalCode);
							  }
							   if(isset($_POST['seo_telephone'])){
							   $seo_telephone = sanitize_text_field( $_POST['seo_telephone'] );
							  add_post_meta($post_ID, 'seo_telephone', $seo_telephone, true) or update_post_meta($post_ID, 'seo_telephone', $seo_telephone);
							  } 
							  
							  if(isset($_POST['seo_aggregate_name'])){
							  $seo_aggregate_name = sanitize_text_field( $_POST['seo_aggregate_name'] );
							  add_post_meta($post_ID, 'seo_aggregate_name', $seo_aggregate_name, true) or update_post_meta($post_ID, 'seo_aggregate_name', $seo_aggregate_name);
							  }
							   if(isset($_POST['seo_ratingValue'])){
							   $seo_ratingValue = sanitize_text_field( $_POST['seo_ratingValue'] );
							  add_post_meta($post_ID, 'seo_ratingValue', $seo_ratingValue, true) or update_post_meta($post_ID, 'seo_ratingValue', $seo_ratingValue);
							  } 
							  
							  if(isset($_POST['seo_bestRating'])){
							  $seo_bestRating = sanitize_text_field( $_POST['seo_bestRating'] );
							  add_post_meta($post_ID, 'seo_bestRating', $seo_bestRating, true) or update_post_meta($post_ID, 'seo_bestRating', $seo_bestRating);
							  }
							   if(isset($_POST['seo_reviewCount'])){
							   $seo_reviewCount = sanitize_text_field( $_POST['seo_reviewCount'] );
							  add_post_meta($post_ID, 'seo_reviewCount', $seo_reviewCount, true) or update_post_meta($post_ID, 'seo_reviewCount', $seo_reviewCount);
							  } 
							  /**********for SEO purpose End **************/
							  
							   if(isset($_POST['designation'])){
							  $testimonial_designation = sanitize_text_field( $_POST['designation'] );
							  add_post_meta($post_ID, 'designation', $testimonial_designation, true) or update_post_meta($post_ID, 'designation', $testimonial_designation);
							  }
							   if(isset($_POST['testimonial_name'])){
							   $testimonial_name = sanitize_text_field( $_POST['testimonial_name'] );
							  add_post_meta($post_ID, 'testimonial_name', $testimonial_name, true) or update_post_meta($post_ID, 'testimonial_name', $testimonial_name);
							  }
							 //  if($_POST['hidden_come_under_home']){
							   if($_POST['come_under_home']=='Yes'){
								  $come_under_home = sanitize_text_field( $_POST['come_under_home'] );
							  add_post_meta($post_ID, 'come_under_home', $come_under_home, true) or update_post_meta($post_ID, 'come_under_home', $come_under_home);
							  }else{
								$come_under_home = "No";
							  add_post_meta($post_ID, 'come_under_home', $come_under_home, true) or update_post_meta($post_ID, 'come_under_home', $come_under_home);
							  }
							//  }
								
							  if(isset($_POST['testi_for_cat'])) {
							   $testi_for_cat = implode("," ,$_POST['testi_for_cat']);
							  add_post_meta($post_ID, 'testi_for_cat', $testi_for_cat, true) or update_post_meta($post_ID, 'testi_for_cat', $testi_for_cat);	
							  }
							   if(isset($_POST['faq_for_cat'])) {
							   $faq_for_cat = implode("," ,$_POST['faq_for_cat']);
							  add_post_meta($post_ID, 'faq_for_cat', $faq_for_cat, true) or update_post_meta($post_ID, 'faq_for_cat', $faq_for_cat);
								}
								if(isset($_POST['page_custom_title'])){
							   $page_custom_title = $_POST['page_custom_title'];
							  add_post_meta($post_ID, 'page_custom_title', $page_custom_title, true) or update_post_meta($post_ID, 'page_custom_title', $page_custom_title);	
							  }
								if(isset($_POST['sidebar_image1'])){
								 $sidebar_image1 = $_POST['sidebar_image1'];
							  add_post_meta($post_ID, 'sidebar_image1', $sidebar_image1, true) or update_post_meta($post_ID, 'sidebar_image1', $sidebar_image1);	
							  }
								if(isset($_POST['sidebar_image1_url'])){
							   $sidebar_image1_url = $_POST['sidebar_image1_url'];
							  add_post_meta($post_ID, 'sidebar_image1_url', $sidebar_image1_url, true) or update_post_meta($post_ID, 'sidebar_image1_url', $sidebar_image1_url);
							  }
								if(isset($_POST['sidebar_image2'])){
								 $sidebar_image2 = $_POST['sidebar_image2'];
							  add_post_meta($post_ID, 'sidebar_image2', $sidebar_image2, true) or update_post_meta($post_ID, 'sidebar_image2', $sidebar_image2);	
							  }
								if(isset($_POST['sidebar_image2_url'])){
							   $sidebar_image2_url = $_POST['sidebar_image2_url'];
							  add_post_meta($post_ID, 'sidebar_image2_url', $sidebar_image2_url, true) or update_post_meta($post_ID, 'sidebar_image2_url', $sidebar_image2_url);
							  }
							  
								if(isset($_POST['sidebar_slider'])){
							   $sidebar_slider = implode("," ,$_POST['sidebar_slider']);
							  add_post_meta($post_ID, 'sidebar_slider', $sidebar_slider, true) or update_post_meta($post_ID, 'sidebar_slider', $sidebar_slider);
							  }
								if(isset($_POST['hotel_discount'])){
							   $hotel_discount = $_POST['hotel_discount'];
							  add_post_meta($post_ID, 'hotel_discount', $hotel_discount, true) or update_post_meta($post_ID, 'hotel_discount', $hotel_discount);
							  }
							  
								if(isset($_POST['address'])){
							   $address = $_POST['address'];
							  add_post_meta($post_ID, 'address', $address, true) or update_post_meta($post_ID, 'address', $address);
							  }
							  
								if(isset($_POST['box1_title'])){
							   $box1_title = $_POST['box1_title'];
							  add_post_meta($post_ID, 'box1_title', $box1_title, true) or update_post_meta($post_ID, 'box1_title', $box1_title);
							  }
							  
								if(isset($_POST['box2_title'])){
							   $box2_title = $_POST['box2_title'];
							  add_post_meta($post_ID, 'box2_title', $box2_title, true) or update_post_meta($post_ID, 'box2_title', $box2_title);
							  }
								if(isset($_POST['map'])){
								$map = $_POST['map'];
								add_post_meta($post_ID, 'map', $map, true) or update_post_meta($post_ID, 'map', $map);
								}
							  
							  if(isset($_POST['seo_edu_name'])){
								$seo_edu_name = $_POST['seo_edu_name'];
								add_post_meta($post_ID, 'seo_edu_name', $seo_edu_name, true) or update_post_meta($post_ID, 'seo_edu_name', $seo_edu_name);
								}
								
								 if(isset($_POST['seo_streetAddress'])){
								$seo_streetAddress = $_POST['seo_streetAddress'];
								add_post_meta($post_ID, 'seo_streetAddress', $seo_streetAddress, true) or update_post_meta($post_ID, 'seo_streetAddress', $seo_streetAddress);
								}
								
								 if(isset($_POST['seo_postalCode'])){
								$seo_streetAddress = $_POST['seo_postalCode'];
								add_post_meta($post_ID, 'seo_postalCode', $seo_postalCode, true) or update_post_meta($post_ID, 'seo_postalCode', $seo_postalCode);
								}
							  
					}
				

				
							/************************************
							Adding Social Links Theme Option
							*************************************/
					
						
						public static function  theme_options_init(){
						register_setting( 'sample_options', 'sample_theme_options');
						
						} 

						public static function theme_options_add_page() {
							add_theme_page( __( 'Social Links', 'sampletheme' ), __( 'Social Links', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'ThemeOptions::theme_options_do_page' );
							add_theme_page( __( 'Added Theme Options', 'sampletheme' ), __( 'Added Theme Options', 'sampletheme' ), 'edit_theme_options', 'theme_options_filter', 'ThemeOptions::theme_filter_options_do_page' );
							add_theme_page( __( 'Dynamic Data In Single Course Category Page', 'sampletheme' ), __( 'Dynamic Data In Single Course Category Page', 'sampletheme' ), 'edit_theme_options', 'dynamic_data_single_course_cat_page', 'ThemeOptions::dynamic_data_single_course_cat_page' );
							
							add_theme_page( __( 'FAQ General Ordering', 'sampletheme' ), __( 'FAQ General Ordering', 'sampletheme' ), 'edit_theme_options', 'theme_options_faqordering', 'ThemeOptions::theme_faqordering_options_do_page' );
							
						} 
						public static function theme_faqordering_options_do_page()	{	
								
								if ( $_POST['update_themeoptions'] == 'true' ) { ThemeOptions::theme_options_faqordering(); }
						?>	
							<script type="text/javascript">
							var fq = jQuery.noConflict();
						fq(document).ready(function(){ 	
							function slideout(){
							setTimeout(function(){
							fq("#response").slideUp("slow", function () {
							});
							
							}, 2000);}
							
							fq("#response").hide();
							fq(function() {
							fq("#list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
								
								var order = fq(this).sortable("serialize") + '&update=update'; 
								var order = fq(this).sortable("serialize") + '&update=update'; 
								var templateUrl = '<?php echo get_bloginfo("template_url"); ?>';
								fq.post(templateUrl + "/update-faqs-general-ajax.php", order, function(theResponse){
									fq("#response").html(theResponse);
									fq("#response").slideDown('slow');
									slideout();
								}); 															 
							}								  
							});
							});
						});	
							</script>
						
	<div class="wrap">
		<div id="social_options">
			<h2>FAQ General Template Ordering</h2>
			<p style="color:red; font-size:20px;">
			<b>Please Note: This Ordering will apply for the Genereal FAQ's Listing Page <i>Not For a Course Category FAQ's Listing Section</i></b>
			</p>
		
		<?php 	
		$taxonomy_name = 'faq_categories';
		$store_categories = get_terms($taxonomy_name); 
		echo '<div id="list">';
		echo '<div id="response"></div>';
		foreach($store_categories as $key => $store_category) {
		$saved_options_value = get_option('category_faq_data_'.$store_category->term_id);
		
		$faq_posts_check = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $store_category->term_id)))); 
		foreach($faq_posts_check as $key => $value){
		$req_array[$key]=$value->ID;
		}
		
		if($saved_options_value){ 
		$ordered_post_ids = unserialize(base64_decode($saved_options_value));
	    $req_array_count = count($req_array);
		$ordered_post_ids_count = count($ordered_post_ids);
		if($req_array_count!=$ordered_post_ids_count){
		$faq_posts = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $store_category->term_id)))); 
		}else{
		$result=array_diff($req_array,$ordered_post_ids);
		if($result){
		$faq_posts = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $store_category->term_id)))); 
		}else {
		foreach($ordered_post_ids as $ordered_post_id){
		if ( get_post_status ( $ordered_post_id ) == 'publish' ) {
		$faq_posts[] = get_post($ordered_post_id);	
		}						
		}
		}
		}
		} else {
		$faq_posts = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $store_category->term_id)))); 
		}
		echo '<h2>'.$store_category->name.'</h2>'; 
		echo '<ul>';
		echo '<li id="arrayorder_'.$store_category->term_id.'" style="display:none;"/></li>';
		foreach($faq_posts as $faq_post){ ?>
		<li id="arrayorder_<?php echo $faq_post->ID; ?>"><?php echo ucfirst($faq_post->post_title); ?>
		<div class="clear"></div>
		</li>								
		<?php } echo '</ul>'; unset($ordered_post_ids); unset($faq_posts); unset($req_array); } echo '</div>'; ?>
		</div>
	</div>
							<style>
							ul {
								padding:0px;
								margin: 0px;
							}
							#response {
								padding:10px;
								background-color:#9F9;
								border:2px solid #396;
								margin-bottom:20px;
							}
							#list li {
								margin: 0 0 3px;
								padding:8px;
								background-color:#333;
								color:#fff;
								list-style: none;
							}
							</style>	
						<?php 
						}


					public static function theme_options_do_page() 
						{
							
							if ( $_POST['update_themeoptions'] == 'true' ) { ThemeOptions::themeoptions_update(); }
					?>	
						<div class="wrap">
						<div id="social_options">
							<h2>Social Icon Links</h2>
							<form method="post" action="" name="social_form" id="social_form" >
								<input type="hidden" name="update_themeoptions" value="true" />
								<label>Facebook URL</label><br />
								<input type="text" name="facebook_url" size="40" id="fb" value="<?php echo get_option('facebook_url'); ?>"/><br />
								<label>Twitter URL</label><br />
								<input type="text" name="twitter_url" size="40" id="tw"  value="<?php echo get_option('twitter_url'); ?>"/><br />
								<label>Google Plus URL</label><br />
								<input type="text" name="google_url" size="40" id="in"  value="<?php echo get_option('google_url'); ?>"/><br />
								<label>Youtube URL</label><br />
								<input type="text" name="youtube_url" size="40" id="pl"  value="<?php echo get_option('youtube_url'); ?>"/><br />
								<input id="btn" type="submit" value="Save" name="req_submit" />	
					
							</form>
						</div>
					</div>
						<style>
						#social_options{
							width: 50%;
							}
						#social_options label {
						font-size: 15px;
						font-weight: bold;
						padding: 0 0 12px;
						}
						#social_options input {
						margin: 0 0 25px;
						}
						#social_options form {
						margin-left: 25px;
						margin-top:35px;
						}	
						#social_options #btn {
						cursor: pointer;
						width: 100px;
						}
						</style>	
					<?php 
					}

				 public static function themeoptions_update()
						{ 
						update_option('facebook_url',$_POST['facebook_url']);	
						update_option('twitter_url', $_POST['twitter_url']);
						update_option('google_url', $_POST['google_url']);
						update_option('youtube_url', $_POST['youtube_url']);
						
						}
										public static function theme_filter_options_do_page() {
						
					   if ( isset($_POST['update_themeoptions_filter']) == 'true' ) { self::theme_filter_options_update(); }
			?>	
			<form method="post" action="" name="social_form" id="social_form" >
					<input type="hidden" name="update_themeoptions_filter" value="true" />
					 <?php ?>
			  
						<div class="wrap">
			<div id="social_options">
				<h2>Course Page Filter Options</h2>
				<?php
				$taxonomy_names = get_object_taxonomies( 'product' );
				foreach($taxonomy_names as $key => $value) {
				$single_taxonomy = get_categories('taxonomy='.$value.'&type=product&hide_empty=0'); 
						$count = count($single_taxonomy);
				if(($value=='product_cat')||($value=='product_location')||($value=='course_periods')) {
			  $box1 =  get_option('product_cat');
			  $retrive_box1 = explode("," ,$box1);
			  $box2 =  get_option('product_location');
			  $retrive_box2 = explode("," ,$box2);
			  $box3 =  get_option('course_periods');
			  $retrive_box3 = explode("," ,$box3);
			  
				?>  <h4><?php $term = get_taxonomy( $value);echo $term->labels->menu_name;?></h4>
					<select  name="<?php echo $value.'[]';?>" id="fb" multiple> 
				<?php if($count){
						foreach($single_taxonomy as $key => $single_taxonomy_cat){
							$cat_id = $single_taxonomy_cat->term_id;
						if($value=='product_cat') {?>
									<option value="<?php echo $single_taxonomy_cat->term_id;?>" <?php foreach($retrive_box1 as $retrive_ID) { if($single_taxonomy_cat->term_id == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $single_taxonomy_cat->name;?></option>
		<?php 
		}else if($value=='product_location'){?>
									<option value="<?php echo $single_taxonomy_cat->term_id;?>" <?php foreach($retrive_box2 as $retrive_ID) { if($single_taxonomy_cat->term_id == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $single_taxonomy_cat->name;?></option>
		 <?php
		}else if($value=='course_periods'){ ?>
		<option value="<?php echo $single_taxonomy_cat->term_id;?>" <?php foreach($retrive_box3 as $retrive_ID) { if($single_taxonomy_cat->term_id == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $single_taxonomy_cat->name;?>
		<?php
		}
		
		} 
		 }
			
			} ?></select>
					
				
			<?php
		 }
		?>
		<input id="btn" type="submit" value="Save" name="req_submit" />	
		
				</form>
						<h2>Home Page Course Categories</h2>
					<?php   if ( isset($_POST['update_themeoptions_homepage']) == 'true' ) { self::theme_home_options_update(); } ?>
					<form method="post" action="" name="home_cat" id="home_cat" >
					<input type="hidden" name="update_themeoptions_homepage" value="true" />
							<?php		
							 $box1 =  get_option('homebox_1');
			  $retrive = explode("," ,$box1);
										$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
					$count = count($single_taxonomy);
					if($count){
		?>
					<select name="homebox_1[]" id="fb" multiple> 
		
		<?php
							foreach($single_taxonomy as $key => $single_taxonomy_cat){
						$cat_id = $single_taxonomy_cat->term_id;
						
						?>
									<option value="<?php echo $single_taxonomy_cat->term_id;?>" <?php foreach($retrive as $retrive_ID) { if($single_taxonomy_cat->term_id == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $single_taxonomy_cat->name;?></option>
						<?php 
						}
						?>
						</select>
						<br />
					<p style="color:#ff0000; font-weight:bolder; font-size:15px; text-decoration:underline;">Important Note:</p>
					<p style="color:#ff0000; font-weight:bold;">1) Please Select Maximum (6) Course Categories to Display in Home Page.</p>
					<p style="color:#ff0000; font-weight:bold;">2) If You'll Select More Than (6) Course Categories means, It'll Display First (6) Course Categories Only In HomePage</p>
					<p style="color:#ff0000; font-weight:bold;">3) Hold down the Ctrl (windows) / Command (Mac) button to select multiple options In The Select Box.</p>
						<?php
						}
		?>
		
		

					<input id="btn" type="submit" value="Save" name="req_submit" />	
		
		</form>
				
				
			</div>
		</div>

						<style>
			#social_options{
				width: 50%;
				}
			#social_options label {
			font-size: 15px;
			font-weight: bold;
			padding: 0 0 12px;
			}
			#social_options input {
			margin: 0 0 25px;
			}
			#social_options form {
			margin-left: 25px;
			margin-top:35px;
			}	
			#social_options #btn {
			cursor: pointer;
			width: 100px;
			}
			#fb {
			width: 40%;
			height:auto;
				}
			select#fb {	
			min-height: 246px;
			float: left;
			width: 100%;
			margin-bottom:50px;
			}
			</style>
			<div class="overview">
				<h2>Home Page Video Section</h2>	
									<?php   if ( isset($_POST['update_themeoptions_homepage_video_section']) == 'true' ) { self::theme_home_options_video_section_update(); } 
									
																 $homepage_video_section_url =  get_option('homepage_video_section_url');
									?>
					<form method="post" action="" name="form_homepage_video_section" id="form_homepage_video_section" >
					<input type="hidden" name="update_themeoptions_homepage_video_section" value="true" />
					<div class="single_whole_div"> 
					<label>Url For Home Page Video:</label> 
					
					<textarea class="for_extend_width" type="text" name="homepage_video_section_url"><?php if($homepage_video_section_url){echo $homepage_video_section_url;} ?></textarea> </div>
					<div class="single_whole_div"> 
									 <strong class="font_color_red"><u class="font_color_red">Important Note:</u> The Iframe should be width=360px height=280px.</strong>
									</div>
					<input id="btn" type="submit" value="Save" name="req_submit" />	
					</form>
					</div><!--overview-->
					<div class="overview">
						<h2>Home Page Client Logos To Display</h2>
					<?php   if ( isset($_POST['update_themeoptions_homepage_client_logo']) == 'true' ) { self::theme_homepage_client_logo_options_update(); } ?>
					<form method="post" action="" name="homepage_client_logo" id="homepage_client_logo" >
					<input type="hidden" name="update_themeoptions_homepage_client_logo" value="true" />
							<?php		
							 $box1 =  get_option('homepage_client_options');
			  $retrive = explode("," ,$box1);

$args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post_type'        => 'clients',
	'post_status'      => 'publish'
	); 
										$single_taxonomy = get_posts($args); 
					$count = count($single_taxonomy);
					if($count){
		?>
					<select name="homepage_client_options[]" id="fb" multiple> 
		
		<?php
							foreach($single_taxonomy as $key => $single_taxonomy_cat){
					 	$cat_id = $single_taxonomy_cat->term_id;
						
						?>
									<option value="<?php echo $single_taxonomy_cat->ID;?>" <?php foreach($retrive as $retrive_ID) { if($single_taxonomy_cat->ID == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $single_taxonomy_cat->post_title;?></option>
						<?php 
						}
						?>
						</select>
						<br />
					<p style="color:#ff0000; font-weight:bolder; font-size:15px; text-decoration:underline;">Important Note:</p>
					<p style="color:#ff0000; font-weight:bold;">1) Please Select Maximum (4) Clients to Display Their Logos in Home Page.</p>
					<p style="color:#ff0000; font-weight:bold;">2) If You'll Select More Than (4) Clients means, It'll Display First (4) Clients Only In HomePage if they Contain Their logo As featured Image</p>
					<p style="color:#ff0000; font-weight:bold;">3) Hold down the Ctrl (windows) / Command (Mac) button to select multiple options In The Select Box.</p>
						<?php
						}
		?>
		
		

					<input id="btn" type="submit" value="Save" name="req_submit" />	
		
		</form>
				</div><!--overview-->
					<div class="overview">
				<h2>Icons For Select </h2>
					<?php   if ( isset($_POST['update_themeoptions_icons_for_selectbox']) == 'true' ) { self::icons_for_selectbox_update(); } ?>
					<form method="post" action="" name="homepage_client_logo" id="homepage_client_logo" >
					<input type="hidden" name="update_themeoptions_icons_for_selectbox" value="true" />
					<?php
					  $select_icon1 = get_option('select_icon1');
					  $select_icon2 = get_option('select_icon2');
					   $select_icon3 = get_option('select_icon3');
					  $select_icon4 = get_option('select_icon4');
					   $select_icon5 = get_option('select_icon5');
					  $select_icon6 = get_option('select_icon6');
					?>
					<div class="single_whole_div">
					Icon 1 Image :
				<input id="select_icon1" type="text" size="45" value="<?php echo $select_icon1; ?>" name="select_icon1" />
				<input id="select_icon1_btn" type="button" class="class_for_icon" value="Upload Image" /><label>Enter URL or upload file.</label>
				</div>
				
					<div class="single_whole_div">
					Icon 2 Image :
				<input id="select_icon2" type="text" size="45" value="<?php echo $select_icon2; ?>" name="select_icon2" />
				<input id="select_icon2_btn" type="button" class="class_for_icon" value="Upload Image" /><label>Enter URL or upload file.</label>
                   </div>	
				   
				   
				   <div class="single_whole_div">
					Icon 3 Image :
				<input id="select_icon3" type="text" size="45" value="<?php echo $select_icon3; ?>" name="select_icon3" />
				<input id="select_icon3_btn" type="button" class="class_for_icon" value="Upload Image" /><label>Enter URL or upload file.</label>
				</div>
				
					<div class="single_whole_div">
					Icon 4 Image :
				<input id="select_icon4" type="text" size="45" value="<?php echo $select_icon4; ?>" name="select_icon4" />
				<input id="select_icon4_btn" type="button" class="class_for_icon" value="Upload Image" /><label>Enter URL or upload file.</label>
                   </div>	
				   
				   <div class="single_whole_div">
					Icon 5 Image :
				<input id="select_icon5" type="text" size="45" value="<?php echo $select_icon5; ?>" name="select_icon5" />
				<input id="select_icon5_btn" type="button" class="class_for_icon" value="Upload Image" /><label>Enter URL or upload file.</label>
				</div>
				
					<div class="single_whole_div">
					Icon 6 Image :

				<input id="select_icon6" type="text" size="45" value="<?php echo $select_icon6; ?>" name="select_icon6" />
				<input id="select_icon6_btn" type="button" class="class_for_icon" value="Upload Image" /><label>Enter URL or upload file.</label>
                   </div>	
				   
					<input id="btn" type="submit" value="Save" name="req_submit" />	
					</form>
					</div><!--overview-->
							<div class="overview">
									<h3>Key Features In E-Learning Page</h3>
									<div class="key_fea_sec">
						<?php if ( isset($_POST['update_themeoptions_key_fea_elearing']) == 'true' ) { self::elearning_key_fea_update(); } ?>
							<form method="post" action="" name="homepage_client_logo" id="homepage_client_logo" >
							<input type="hidden" name="update_themeoptions_key_fea_elearing" value="true" />
							<?php
							$elearning_fea_text_array = explode(',',get_option('elearning_fea_text'));
							$video_elearing = get_option('video_elearing');
							
							 for($i=0;$i<6;$i++){ 
									?>
									 <div class="single_whole_div">
							Icon <?php echo $i+1; ?> Text :
										  <input class="key_fea_title" type="text" name="elearning_fea_text[]" value="<?php echo $elearning_fea_text_array[$i];?>" />
										</div><!--single_whole_div-->
										
									<?php } ?>
									
									<div class="single_whole_div">
							<label>Video Section :</label>
							<textarea name="video_elearing" id="video_elearing"><?php echo $video_elearing;?></textarea>
							
						</div>
						<div class="single_whole_div"> 
											 <strong class="font_color_red"><u class="font_color_red">Important Note:</u> The Iframe should be width=710px height=350px.</strong>
											</div>
									<input id="btn" type="submit" value="Save" name="req_submit" />	
							</form>
									</div><!--key_fea_sec-->
									
									</div><!--overview-->
							<!--Home Page Custom H2 Text Start-->
														<div class="overview home_h2_sec">
									<h3>Home Page Custom H2 Texts</h3>
									<div class="key_fea_sec">
						<?php if ( isset($_POST['update_themeoptions_home_h2_texts']) == 'true' ) { self::home_h2_texts_update(); } ?>
							<form method="post" action="" name="home_h2_texts" id="home_h2_texts" >
							<input type="hidden" name="update_themeoptions_home_h2_texts" value="true" />
							<?php
							//$home_page_h2_tetxs_array = maybe_unserialize(get_option('home_page_h2_tetxs'));
							$home_page_h2_tetxs_array = unserialize(base64_decode(get_option('home_page_h2_tetxs')));

							$jump_to_most_popular = $home_page_h2_tetxs_array['jump_to_most_popular'];
							$testimonials_title = $home_page_h2_tetxs_array['testimonials_title'];
							$accredited_courses_title = $home_page_h2_tetxs_array['accredited_courses_title'];
							$training_for_business = $home_page_h2_tetxs_array['training_for_business'];
							?>
									 <div class="single_whole_div">
							<label>Jump To Most Popular Title :</label>
										  <input class="jump_to_most_popular" type="text" name="jump_to_most_popular" value="<?php echo $jump_to_most_popular;?>" />
										</div><!--single_whole_div-->
										
								 <div class="single_whole_div">
							<label>Testimonials Title :</label>
										  <input class="testimonials_title" type="text" name="testimonials_title" value="<?php echo $testimonials_title;?>" />
										</div><!--single_whole_div-->
										
										 <div class="single_whole_div">
							<label>Accredited Courses Title :</label>
										  <input class="accredited_courses_title" type="text" name="accredited_courses_title" value="<?php echo $accredited_courses_title;?>" />
										</div><!--single_whole_div-->
										
										 <div class="single_whole_div">
							<label>Training For Business Title :</label>
										  <input class="training_for_business" type="text" name="training_for_business" value="<?php echo $training_for_business;?>" />
										</div><!--single_whole_div-->
									<input id="btn" type="submit" value="Save" name="req_submit" />	
							</form>
									</div><!--key_fea_sec-->
									
									</div><!--overview-->

														<!--Home Page Custom H2 Text End-->
														
															<!--Home Page Hover Section start-->
														<div class="overview">
									<h3>Home Page Hover Section</h3>	
														<form method="post" action="" name="home_cat" id="home_cat" >
						<?php if ( isset($_POST['update_themeoptions_homepage_hover']) == 'true' ) { self::home_hover_update(); } ?>

					<input type="hidden" name="update_themeoptions_homepage_hover" value="true" />
							<?php		
							 $box1 =  get_option('home_hover');
			  $retrive = explode("," ,$box1);
			  $args = array ( 'exclude' => array(210,211));
			  
			  
										$pages = get_pages($args); 
					$count = count($pages);
					if($count){
		?>
					<select name="home_hover[]" id="fb" multiple> 
		
		<?php
							foreach($pages as $key => $page){
						
						?>
									<option value="<?php echo $page->ID;?>" <?php foreach($retrive as $retrive_ID) { if($page->ID == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $page->post_title;?></option>
						<?php 
						}
						?>
						</select>
						<br />
					<p style="color:#ff0000; font-weight:bolder; font-size:15px; text-decoration:underline;">Important Note:</p>
					<p style="color:#ff0000; font-weight:bold;">1) Please Select Maximum (6) Pages to Display in Home Page Hover Section.</p>
					<p style="color:#ff0000; font-weight:bold;">2) If You'll Select More Than (6) Pages means, It'll Display First (6) Pages Only In HomePage Hover Section</p>
					<p style="color:#ff0000; font-weight:bold;">3) Hold down the Ctrl (windows) / Command (Mac) button to select multiple options In The Select Box.</p>
					
						<?php
						$req_page_order = get_option('home_hover_order');
						if($req_page_order){
					//	$req_val = maybe_unserialize($req_page_order);
					
						//$req_val = maybe_unserialize($req_page_order);
						//echo "check1";
                        $req_val = unserialize(base64_decode($req_page_order));
/*						echo "<pre>";
						print_r($req_val);
						echo "</pre>";
*/						  $retrive = $req_val;
						}else{
						//echo "check2";
						  $retrive = explode("," ,$box1);
						  }	
						  
						/*  echo "<pre>";
						print_r($retrive);
						echo "</pre>";*/
						echo '<div class="list">';
									echo '<div class="response"></div>';
									echo '<ul>';
									$iteration = 0;
						if($retrive[0]!=""){
						foreach($retrive as $retrive_ID) {
							
							if($iteration == 6){
							break;
							}
							?>
							<li id="arrayorder_<?php echo $retrive_ID; ?>"><?php echo ucfirst(get_the_title($retrive_ID)); ?>
										<div class="clear"></div>
									</li>	
							<?php
							++$iteration;
							}
							}
							echo '</ul>';
							echo '</div>';
						?>
						<style>
						ul {
								padding:0px;
								margin: 0px;
							}
							.response {
								padding:10px;
								background-color:#9F9;
								border:2px solid #396;
								margin-bottom:20px;
							}
							.list li {
								margin: 0 0 3px;
								padding:8px;
								background-color:#333;
								color:#fff;
								list-style: none;
							}
							</style>
							<script type="text/javascript">
								var k = jQuery.noConflict();
						k(document).ready(function() {
							/****************************************************************
										 For FAQs Ordering Start
						********************************************************************/
									function slideout(){
								setTimeout(function(){
								k(".response").slideUp("slow", function () {
								});
								
								}, 2000);}
								
								k(".response").hide();
								k(function() {
								k(".list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
									
									var order = k(this).sortable("serialize") + '&update_home_hover=update'; 
									var order = k(this).sortable("serialize") + '&update_home_hover=update'; 
									//alert(order);
									var templateUrl = '<?php echo get_bloginfo("template_url"); ?>';
									k.post(templateUrl + "/update-faqs-general-ajax.php", order, function(theResponse){
										//alert(theResponse);
										k(".response").html(theResponse);
										k(".response").slideDown('slow');
										slideout();
									}); 															 
								}								  
								});
								});
						/****************************************************************
										 For FAQs Ordering End
						********************************************************************/

						
						});
						</script>
						<?php
						}
		?>
		
		

					<input id="btn" type="submit" value="Save" name="req_submit" />	
		
		</form>
         </div><!--overview-->
								
																<!--Home Page Hover Section End-->
																
							<div class="overview" style="display:none;">
						<h3>Location Page</h3>	
														<form method="post" action="" name="location_page" id="location_page" >
						<?php if ( isset($_POST['update_themeoptions_location_page']) == 'true' ) { self::home_location_page_update(); } ?>

					<input type="hidden" name="update_themeoptions_location_page" value="true" />
							
							<select name="location_page">
							<option>Select Locations</option>
							<?php	
							
							$selected_location = get_option('location_page');
							$args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post_type'        => 'course_venues',
	'post_status'      => 'publish'
	); 
										$locations = get_posts($args); 
					$count = count($single_taxonomy);
					if($count){
							foreach($locations as $key => $location){
								?>
							<option value="<?php echo $location->ID ?>" <?php $location_id = $location->ID; if($location_id==$selected_location){echo "selected";} ?>><?php echo $location->post_title;?></option>
								<?php
								}
								 } ?>
							</select>
							
												<input id="btn" type="submit" value="Save" name="req_submit" />	
                               </form>
					         </div><!--overview-->
			
								<!--vertical tab in e learning start-->			
								<div class="overview">
						<h2>Course Categories In Elearning Page</h2>
					<?php   if ( isset($_POST['course_category_in_elearning_page']) == 'true' ) { self::theme_options_elearning_update(); } ?>
					<form method="post" action="" name="elearning_vertical_tab" id="elearning_vertical_tab" >
					<input type="hidden" name="course_category_in_elearning_page" value="true" />
							<?php		
							 $box1 =  get_option('categories_elearning');
			  $retrive = explode("," ,$box1);
										$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
					$count = count($single_taxonomy);
					if($count){
		?>
					<select name="categories_elearning[]" id="fb" multiple> 
		
		<?php
							foreach($single_taxonomy as $key => $single_taxonomy_cat){
						$cat_id = $single_taxonomy_cat->term_id;
						
						?>
									<option value="<?php echo $single_taxonomy_cat->term_id;?>" <?php foreach($retrive as $retrive_ID) { if($single_taxonomy_cat->term_id == $retrive_ID) { ?> selected="selected" <?php } }?>><?php echo $single_taxonomy_cat->name;?></option>
						<?php 
						}
						?>
						</select>
					
						<?php
						}
		?>
		
			<div class="single_whole_div">
	
						<input id="btn" type="submit" value="Save" name="req_submit" />	
			</div><!--single_whole_div-->
		</form>
</div><!--overview-->
				<!--vertical tab in e learning end-->	
				<!--Phone number and email id  customization start-->
			<div class="overview">
			<h2>Header Part Phone and E-Mail Id</h2>
			<form method="post" action="" >
			<?php 
			
			$phone_number = get_option('phone_number');
			$email_id = get_option('email_id');
								
				  if ( isset($_POST['header_theme_options']) == 'true' ) { self::theme_options_header_update(); } ?>

			<input type="hidden" name="header_theme_options" />
						<div class="single_whole_div">
						<label>Phone Number : </label><input type="text" value="<?php echo $phone_number;?>" name="phone_number" />	
						</div><!--single_whole_div-->
						<div class="single_whole_div">
						<label>Email Id :</label> <input type="text" value="<?php echo $email_id;?>" name="email_id" />	
						</div><!--single_whole_div-->

					<input id="btn" type="submit" value="Save" name="req_submit" />	

			</form>
			</div><!--overview-->
				<!--Phone number and email id  customization End-->		
				<!--My Intelli Page need help section content start-->
			<div class="overview">
			<h2>My Intelli Page Need Help Section</h2>
			<form method="post" action="" >
			<?php 
			
			$need_help = get_option('need_help');
								
				  if ( isset($_POST['need_help_theme_options']) == 'true' ) { self::theme_options_need_help_update(); } ?>

			<input type="hidden" name="need_help_theme_options" />
						<div class="single_whole_div">
						<label>Need Help :</label> <textarea name="need_help" id="need_help"><?php echo $need_help;?></textarea>
						</div><!--single_whole_div-->

					<input id="btn" type="submit" value="Save" name="req_submit" />	

			</form>
			</div><!--overview-->
				<!--My Intelli Page need help section content start-->
				
				<!--E-Learning Page description section content start-->
			<div class="overview">
			<h2> E-Learning Page description Section</h2>
			<form method="post" action="" >
			<?php 
			
			$need_help = get_option('elearning_description');
								
				  if ( isset($_POST['elearning_description_theme_options']) == 'true' ) { self::theme_options_elearning_description_update(); } ?>

			<input type="hidden" name="elearning_description_theme_options" />
						<div class="single_whole_div">
						<label>E-Learning Description :</label> <textarea name="elearning_description" id="elearning_description"><?php echo $need_help;?></textarea>
						</div><!--single_whole_div-->

					<input id="btn" type="submit" value="Save" name="req_submit" />	

			</form>
			</div><!--overview-->
				<!--E-Learning Page description section content start-->
				
				<!--My Intelli  Page e-learning section link  start-->
			<div class="overview">
			<h2> My Intelli  Page E-learning section Link and Text   </h2>
			<form method="post" action="" >
			<?php 
			
			$elearning_link = get_option('elearning_link');
			$elearning_link_text = get_option('elearning_link_text');
			
				  if ( isset($_POST['elearning_link_theme_options']) == 'true' ) { self::theme_options_elearning_link_update(); } ?>

			<input type="hidden" name="elearning_link_theme_options" />
						<div class="single_whole_div">
						<label>E-Learning Link :</label> <input type="text" name="elearning_link" id="elearning_link" value="<?php echo $elearning_link;?>" />
						</div><!--single_whole_div-->
						<div class="single_whole_div">
						<label>E-Learning Link Text:</label> <input type="text" name="elearning_link_text" id="elearning_link_text" value="<?php echo $elearning_link_text;?>" />
						</div><!--single_whole_div-->

					<input id="btn" type="submit" value="Save" name="req_submit" />	

			</form>
			</div><!--overview-->
				<!--E-Learning Page description section content start-->
				
						<!--Home Page Latest News,Video,signup form title start-->
			<div class="overview">
			<h2> Home Page Latest News,Video,signup form title Text  </h2>
			<form method="post" action="" >
			<?php 
			
			$latest_news_title = get_option('latest_news_title');
			$video_title = get_option('video_title');
			$sign_up_title = get_option('sign_up_title');
			
				  if ( isset($_POST['latest_news_title_theme_options']) == 'true' ) { self::theme_options_latest_news_title_update(); } ?>

			<input type="hidden" name="latest_news_title_theme_options" />
						<div class="single_whole_div">
						<label>Latest News Section Title :</label> <input type="text" name="latest_news_title" id="latest_news_title" value="<?php echo $latest_news_title;?>" />
						</div><!--single_whole_div-->
						<div class="single_whole_div">
						<label>Video Section Title :</label> <input type="text" name="video_title" id="video_title" value="<?php echo $video_title;?>" />
						</div><!--single_whole_div-->
						<div class="single_whole_div">
						<label>Sign-up form Title:</label> <input type="text" name="sign_up_title" id="sign_up_title" value="<?php echo $sign_up_title;?>" />
						</div><!--single_whole_div-->
					<input id="btn" type="submit" value="Save" name="req_submit" />	

			</form>
			</div><!--overview-->
						<!--Home Page Latest News,Video,signup form title start-->
						
						<!--Log image upload start-->
									<div class="overview">
					<h2> Site Logo </h2>
						<?php   if ( isset($_POST['update_themeoptions_site_logo']) == 'true' ) { self::icon_for_site_logo_update(); } ?>
						<form method="post" action="" name="site_logo_form" id="site_logo_form" >
						<input type="hidden" name="update_themeoptions_site_logo" value="true" />
						<?php
							$site_logo = get_option('site_logo');
						?>
						<div class="single_whole_div">
						Site Logo :
						<input id="site_logo" type="text" size="45" value="<?php echo $site_logo; ?>" name="site_logo" />
						<input id="site_logo_btn" type="button" class="class_for_icon" value="Upload Image" /><label>Enter URL or upload file.</label>
						</div>
						<input id="btn" type="submit" value="Save" name="req_submit" />	
						</form>
						</div><!--overview-->

						<!--Log image upload End-->
						
						<!--For Redirect the url Start-->
							<form method="post" action="" name="url_for_redirect" id="url_for_redirect" >
						<input type="hidden" name="update_themeoptions_redirect_url" value="true" />
														<div class="overview input_fields_wrap url_redirect">
								
								<h3>Url For Redirect</h3>
													<?php   if ( isset($_POST['update_themeoptions_redirect_url']) == 'true' ) { self::icon_for_redirect_url_update(); } ?>
					
								<?php
								
								 $redirect_urls_values = get_option('redirect_urls');
						        $unserialize_redirect_urls_values = unserialize(base64_decode($redirect_urls_values));

								$from_url_array = $unserialize_redirect_urls_values['from_url'];
								$to_url_array = $unserialize_redirect_urls_values['to_url'];
								if($from_url_array) {
								foreach($from_url_array as $key => $values){
								$from_url = $values;
								$to_url = $to_url_array[$key];
								  ?>
								  <div class="for_gap">
									<label>From Url:</label><input type="text" name="from_url[]" value="<?php echo $from_url; ?>"  /><br><br />
									<label>To Url:</label><input type="text" name="to_url[]" value="<?php echo $to_url; ?>"  />
									<?php if($key==0){ ?>
										<a href="#" class="add_field_button" id="url_redirect">Add More Fields</a>
										<?php }else{ ?>
										<a href="#" class="remove_field" id="url_redirect">Remove</a>
										<?php } ?>
									</div>
										
								  <?php
								   }
								  }else{ ?>
								   <div class="for_gap">
									<label>From Url:</label><input type="text" name="from_url[]" value="<?php echo $from_url; ?>"  /><br><br />
									<label>To Url:</label><input type="text" name="to_url[]" value="<?php echo $to_url; ?>"  />
										<a href="#" class="add_field_button" id="url_redirect">Add More Fields</a>
									</div>
								  <?php
								  }
								  ?>
								 
								</div><!--overview-->
						<!--For Redirect the url End-->

 <input id="btn" type="submit" value="Save" name="req_submit" />	
						</form>

			</div>
		</div>
			<script type="text/javascript">
				var k = jQuery.noConflict();
						k(document).ready(function() {
						
						
						/***************************
						Add/Remove Title & Desc Start
						*****************************/
						var max_fields      = 100;
                        var wrapper         = k(".input_fields_wrap"); 
						var add_button      = k(".add_field_button");
						var x = 1; 
						k(add_button).click(function(e){ 
						
						/*var current_id = this.id;
						var part_name = current_id.split("|")[0];
						var id_name = current_id.split("|")[1];*/
						
						var wrapper = k(".url_redirect");
						
						
						e.preventDefault();
						if(x < max_fields){
						x++; 
						k(wrapper).append('<div class="for_gap input_fields_wrap"><br><br><label>From Url:</label><input type="text" name="from_url[]"/><br><br><label>To Url:</label><input type="text" name="to_url[]"/><a href="#" class="remove_field" id="url_redirect">Remove</a></div>'); 
						}
						});
						
						k(wrapper).on("click",".remove_field", function(e){
						e.preventDefault(); k(this).parent('div').remove(); x--;
						})
						
						/*k(".remove_field").click(function() {
						alert('hi');
						alert(this.id);
						e.preventDefault(); k(this).parent('div').remove(); x--;
						});*/
						/***************************
						Add/Remove Title & Desc End
						*****************************/
						
						
						var formfield;
					var textbox_validation;
					var id_name;
					var current_id,part_name;
					k('.class_for_icon').click(function() {
					
					    part_name = this.id;
					   
						textbox_validation = part_name;
						k('html').addClass('Image');
						
						
					if(part_name=='select_icon1_btn'){
						formfield = k('#select_icon1').attr('name');
						}else if(part_name=='select_icon2_btn'){
						formfield = k('#select_icon2').attr('name');
						}else if(part_name=='select_icon3_btn'){
						formfield = k('#select_icon3').attr('name');
						}else if(part_name=='select_icon4_btn'){
						formfield = k('#select_icon4').attr('name');
						}else if(part_name=='select_icon5_btn'){
						formfield = k('#select_icon5').attr('name');
						}else if(part_name=='select_icon6_btn'){
						formfield = k('#select_icon6').attr('name');
						}else if(part_name=='site_logo_btn'){
						formfield = k('#site_logo').attr('name');
						}						
						
					tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
						return false;
					});
		
					// user inserts file into post. only run custom if user started process using the above process
					// window.send_to_editor(html) is how wp would normally handle the received data
					window.original_send_to_editor = window.send_to_editor;
					window.send_to_editor = function(html){
						if (formfield) {
						var string_validation = html.indexOf('"');
						if(string_validation === -1){
							var resulted_url = html.split("'");
						
						} else {
						
						var resulted_url = html.split('"');
						}
							if(textbox_validation == 'select_icon1_btn'){
							
								k('#select_icon1').val(resulted_url[1]);
								
							}else if(textbox_validation == 'select_icon2_btn'){
							
								k('#select_icon2').val(resulted_url[1]);
								
							}else if(textbox_validation == 'select_icon3_btn'){
							
								k('#select_icon3').val(resulted_url[1]);
								
							}else if(textbox_validation == 'select_icon4_btn'){
							
								k('#select_icon4').val(resulted_url[1]);
								
							}else if(textbox_validation == 'select_icon5_btn'){
							
								k('#select_icon5').val(resulted_url[1]);
								
							}else if(textbox_validation == 'select_icon6_btn'){
							
								k('#select_icon6').val(resulted_url[1]);
								
							}else if(textbox_validation == 'site_logo_btn'){
							
								k('#site_logo').val(resulted_url[1]);
								
							}
							
							tb_remove();
							
							k('html').removeClass('Image');
							
						} else {
							window.original_send_to_editor(html);
						}
					};
						
						
						
						
						});
			</script>
						<style>
						.overview.input_fields_wrap.url_redirect input[type='text'] {
						width: 50%;
						float: left;
						}
						.for_gap {
						width: 100%;
						float: left;
						margin: 1% 0;
						}
						.single_whole_div input[type="text"] {
						width:30%;
						}
						textarea#need_help {
						width: 50%;
						min-height: 350px;
						resize:none;
						}
						textarea {
						width: 50%;
						min-height: 150px;
						resize:none;
						}
						.home_h2_sec input[type='text'] {
						width:30%;
						}
						label {
						width: 10%;
						float: left;
						}
						textarea#video_elearing {
						width: 50%;
						min-height: 150px;
						resize:none;
						}
						.key_fea_title {
						width:35%;
						}
						.overview {
						width:100%;
						float:left;
						}
						.key_fea_sec {
						width: 100%;
						float: left;
						}
						.text_part {
						width: 74%;
						float: left;
						margin-left: 10%;
						}
							.single_part {
						width: 100%;
						float: left;
						margin-bottom: 2%;
						}
						.single_whole_div {
						width:100%;
						float:left;
						margin-top:2%;
						margin-bottom:2%;
						}
						.font_color_red {
						color:red;
						}
						.for_extend_width {
						width:60%;
						}
			#social_options{
				width: 50%;
				}
			#social_options label {
			font-size: 15px;
			font-weight: bold;
			padding: 0 0 12px;
			}
			#social_options input {
			margin: 0 0 25px;
			}
			#social_options form {
			margin-left: 25px;
			margin-top:35px;
			}	
			#social_options #btn {
			cursor: pointer;
			width: 100px;
			}

			#fb {
			width: 40%;
			height:auto;
				}
			select#fb {	
			min-height: 246px;
			float: left;
			width: 95%;
			margin-bottom:50px;
			}
			</style>

				<?php	
			
	 }
	 			public static function dynamic_data_single_course_cat_page() {?>
		<div class="wrap">
			<div id="social_options">
				<h2>Course Categories</h2>
					<?php if ( isset($_POST['dynamic_data_single_course_cat_page']) == 'true' ) { self::dynamic_data_single_course_cat_page_update(); }
					$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
					$count = count($single_taxonomy);
					if($count){
					foreach($single_taxonomy as $key => $single_taxonomy_cat){
						 $cat_id = $single_taxonomy_cat->term_id;
						 $checking = get_option('serialized_val'.$cat_id);
						$unserialize_val = unserialize(base64_decode(get_option('serialized_val'.$cat_id)));
								//	$unserialize_val = maybe_unserialize(get_option('serialized_val'.$cat_id));
						?>
						<div class="outer_div">
						<a href="#check<?php echo $single_taxonomy_cat->term_id;?>" class="fancybox"><span class="cat_btn button button-primary button-large"><?php echo $single_taxonomy_cat->name;?></span></a>
						</div>
							<div class="popup_div" id="check<?php echo $single_taxonomy_cat->term_id;?>">
						<form method="post" action="" name="course_cat" id="course_cat" >
						<input type="hidden" name="dynamic_data_single_course_cat_page" value="true" />
						 <input type="hidden" name="term_value" id="cat_id_value" value="<?php echo $cat_id;?>"/>
						<div class="whole_div">
						
						
									<!--for get uploaded image url start-->
									<?php	
									
								/*	echo "<pre>";			
									print_r($unserialize_val);
									echo "</pre>";*/
									wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );

										$course_cat_siebar_image1 = $unserialize_val['course_cat_siebar_image1'];	
											$course_cat_siebar_image1_url = $unserialize_val['course_cat_siebar_image1_url'];	
																			
											$course_cat_siebar_image2 = $unserialize_val['course_cat_siebar_image2'];	
											$course_cat_siebar_image2_url = $unserialize_val['course_cat_siebar_image2_url'];									
									?>
										<div class="overview">
										<h1><?php $term_val = get_term_by('id',$cat_id, 'product_cat'); 
										echo "Category Name: ".$term_val->name;
										
											$cat_id = $single_taxonomy_cat->term_id;
										?>
										</h1>
								<h3>Course Category Sidebar Image1</h3>
								<div class="custom_adjust">
								<?php
										echo '<label for="myplugin_new_field">';
										_e("Upload Only Images :", 'icon_file_textdomain' );
										echo '</label>'; 
$string1 = get_option('siteurl');
$mystring = $course_cat_siebar_image1;
$findme   = 'wp-content';
$pos = strpos($mystring, $findme);
if ($pos === false) {
}else{
$string2 = strstr($mystring, '/wp-content');
$course_cat_siebar_image1_after = $string1.$string2;					
} ?>					
										
										<input id="fetch_url_image1<?php echo $cat_id; ?>" type="text" size="45" value="<?php echo $course_cat_siebar_image1_after; ?>" name="course_cat_siebar_image1" />
										<input id="icon_file_button_image1|<?php echo $cat_id; ?>" type="button" class="differ_class" value="Upload Image" /><label>Enter URL or upload file.</label>
										<div class="single_whole_div"> 
										 <strong class="font_color_red"><u class="font_color_red">Important Note:</u> The images should be in 345x375(width = 345px,Height = 375px) Resolutions.</strong>
										</div>
										<div class="single_whole_div">   
										<div class="link_for_image">Course Category Sidebar Image 1 Link :</div>
				
										<input id="fetch_url_image1_url<?php echo $cat_id; ?>" type="text" size="45" value="<?php echo $course_cat_siebar_image1_url; ?>" name="course_cat_siebar_image1_url" /> 
										</div>
											</div><!--custom_adjust-->
								</div><!--overview-->	
							
								<div class="overview">
								<h3>Course Category Sidebar Image2</h3>
								<div class="custom_adjust">
								<?php
										echo '<label for="myplugin_new_field">';
										_e("Upload Only Images :", 'icon_file_textdomain' );
										echo '</label>';
$mystring2 = $course_cat_siebar_image2;
$pos2 = strpos($mystring2, $findme);
if ($pos2 === false) {
}else{
$string3 = strstr($mystring2, '/wp-content');
$course_cat_siebar_image2_after = $string1.$string3;					
} 
?>	
										<input id="fetch_url_image2<?php echo $cat_id; ?>" type="text" size="45" value="<?php echo $course_cat_siebar_image2_after; ?>" name="course_cat_siebar_image2" />
										<input id="icon_file_button_image2|<?php echo $cat_id; ?>" type="button" class="differ_class" value="Upload Image" /><label>Enter URL or upload file.</label>
										<div class="single_whole_div"> 
										 <strong class="font_color_red"><u class="font_color_red">Important Note:</u> The images should be in 345x375(width = 345px,Height = 375px) Resolutions.</strong>
										</div>
	
										 <div class="single_whole_div">   
										<div class="link_for_image">Course Category Sidebar Image 2 Link :</div>
										<input id="fetch_url_image2_url<?php echo $cat_id; ?>" type="text" size="45" value="<?php echo $course_cat_siebar_image2_url; ?>" name="course_cat_siebar_image2_url" /> 
										</div>
										</div><!--custom_adjust-->
								</div><!--overview-->	
											<div class="overview">
											<h3>Course Category Sidebar Slider</h3>
											<div class="custom_adjust">
											<?php	
										//	$retrive = $unserialize_val['sidebar_cat'];	
											$formed_values = 'cat_sidebar_order'.$cat_id;
											  $retrive = explode(",",get_option($formed_values));
											$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
											$count = count($single_taxonomy);
											if($count){
											?>
											<select name="sidebar_cat[]" id="sidebar_cat-<?php echo $cat_id;?>" class="checking slider_sidebar" multiple> 
											<?php
											foreach($single_taxonomy as $key => $single_taxonomy_cat){
											?>
											<option value="<?php echo $single_taxonomy_cat->term_id;?>" <?php if($retrive){ foreach($retrive as $retrive_ID) { if($single_taxonomy_cat->term_id == $retrive_ID) { ?> selected="selected" <?php } } }?>><?php echo $single_taxonomy_cat->name;?></option>
											<?php 
											}
											?>
											</select>
											<br />
											<p style="color:#ff0000; font-weight:bolder; font-size:15px; text-decoration:underline;">Important Note:</p>
											<p style="color:#ff0000; font-weight:bold;">1) Please Select Maximum (10) Course Categories to Display in Coressponding Single course Category Page.</p>
											<p style="color:#ff0000; font-weight:bold;">2) If You'll Select More Than (10) Course Categories means, It'll Display First (10) Course Categories Only In in Coressponding Single course Category Page.</p>
											<p style="color:#ff0000; font-weight:bold;">3) Hold down the Ctrl (windows) / Command (Mac) button to select multiple options In The Select Box.</p>
											
											<?php
											}
											?>
											</div><!--custom_adjust-->
											<!--<div class="need">
											</div>--><!--need-->
			<?php /*?><?php
			$formed_values = 'cat_sidebar_order'.$cat_id;
			
			$formed_values_after = 'cat_sidebar_slider_after_order'.$cat_id;
			$after_order_values = maybe_unserialize(get_option($formed_values_after));
			echo "<br>===========formed_values================<br>";
			$retrive = explode(",",get_option($formed_values));
			echo "<pre>";
			print_r($retrive);
			echo "</pre>";
			if($after_order_values) {
			echo "<br>===========after_order_values================<br>";
			$retrive = $after_order_values;
			
			echo "check values";
			echo "<pre>";
			print_r($retrive);
			echo "</pre>";
			
			}elseif(get_option($formed_values)) {
			echo "<br>Not Available<br>";
			$retrive = explode(",",get_option($formed_values));
			}	?><?php */?>
			<div class="ordered_part" id="need_to_change<?php echo $cat_id;?>">
										<!--For order the Categories start-->	
											
											<?php
					//	$req_page_order = get_option('home_hover_order');
					
					/*	  
						echo '<div class="list_cat_sidebar">';
									echo '<div class="response_cat_sidebar_slider"></div>';
									echo '<ul>';
									echo '<li id="arrayorder_'.$cat_id.'" style="display:none;"/></li>';
									$iteration = 0;
						if($retrive[0]!=""){
						foreach($retrive as $retrive_ID) {
							
							if($iteration == 10){
							break;
							}
							?>
							<li id="arrayorder_<?php echo $retrive_ID; ?>"><?php  $term_details = get_term_by('id',$retrive_ID,'product_cat'); echo ucfirst($term_details->name); ?>
										<div class="clear"></div>
									</li>	
							<?php
							++$iteration;
							}
							}
							echo '</ul>';
							echo '</div>';*/
						?>
																<!--For order the Categories End-->	
</div><!--ordered_part-->
											</div><!--overview-->	
											
											
							<div class="overview">
							<h3>Custom Category Title</h3>
							<?php
							$h1_tag_content = $unserialize_val['h1_tag_content'];
							$h2_tag_content = $unserialize_val['h2_tag_content'];
							?>
							<input type="text" name="h1_tag_content" value="<?php echo $h1_tag_content; ?>" /><br><br />
							</div><!--overview-->	
							<div class="overview">
							<h3>Custom Category Description </h3>
							<textarea name="h2_tag_content"><?php echo $h2_tag_content; ?></textarea><br><br />
							</div><!--overview-->	
							
							<div class="overview">
							<h3>Key Features</h3>
							<div class="key_fea_sec">
							
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
			//$key_fea_img_array = $unserialize_val['key_fea_img'];
					$key_fea_title_array = $unserialize_val['key_fea_text'];
					/*echo "<pre>";
					print_r($key_fea_img_array);
					echo "</pre>";*/
				 $select_icon1 = get_option('select_icon1');
					  $select_icon2 = get_option('select_icon2');
					   $select_icon3 = get_option('select_icon3');
					    $select_icon4 = get_option('select_icon4');
						 $select_icon5 = get_option('select_icon5');
						  $select_icon6 = get_option('select_icon6');
				  ?>



							<?php for($i=0;$i<6;$i++){ 
							
							 $url = site_url();
							?>
							<div class="single_part">
								<div class="select_part">
								<select name="key_fea_img[]">
								<option value="<?php echo $select_icon6;?>" <?php 
								$value6 = $select_icon6;
								if($key_fea_img_array[$i]==$value6){ echo "selected";} ?>>
								Icon 6
								</option>
								<option value="<?php echo $select_icon1;?>" <?php
								$value1 = $select_icon1;
								if($key_fea_img_array[$i]==$value1){ echo "selected";} ?>>
								Icon 1
								</option>
								<option value="<?php echo $select_icon2;?>" <?php
								$value2 = $select_icon2;
								if($key_fea_img_array[$i]==$value2){ echo "selected";} ?>>
								Icon 2
								</option>
								<option value="<?php echo $select_icon3;?>" <?php 
								$value3 = $select_icon3;
								if($key_fea_img_array[$i]==$value3){ echo "selected";} ?>>
								Icon 3
								</option>
								<option value="<?php echo $select_icon4;?>" <?php 
								$value4 = $select_icon4;
								if($key_fea_img_array[$i]==$value4){ echo "selected";} ?>>
								Icon 4
								  </option>
								<option value="<?php echo $select_icon5;?>" <?php 
								$value5 = $select_icon5;
								if($key_fea_img_array[$i]==$value5){ echo "selected";} ?>>
								Icon 5
								 </option>
								</select>
								</div>
								
								
								<div class="text_part">
								  <input type="text" name="key_fea_text[]" value="<?php echo $key_fea_title_array[$i];?>" />
								</div>
								
							</div><!--single_part-->
							<?php } ?>
							</div>
							
							</div><!--overview-->
							
							
								<div class="overview input_fields_wrap overview<?php echo $cat_id;?>">
								<h3>Overview</h3>
								
										<?php
								$overview_title_array = $unserialize_val['overview_title'];
								$overview_desc_array = $unserialize_val['overview_desc'];
								if($overview_title_array) {
								foreach($overview_title_array as $key => $values){
								$overview_title = $values;
								$overview_desc = $overview_desc_array[$key];
								  ?>
								  <div class="for_gap">
									<input type="text" name="overview_title[]" value="<?php echo $overview_title; ?>"  /><br><br />
									<textarea name="overview_desc[]"><?php echo $overview_desc; ?></textarea>
									<?php if($key==0){ ?>
										<a href="#" class="add_field_button" id="overview|<?php echo $cat_id;?>">Add More Fields</a>
										<?php }else{ ?>
										<a href="#" class="remove_field" id="course_content|<?php echo $cat_id;?>">Remove</a>
										<?php } ?>
									</div>
										
								  <?php
								   }
								  }else{ ?>
								   <div class="for_gap">
									<input type="text" name="overview_title[]"/><br><br />
									<textarea name="overview_desc[]"></textarea>
									<a href="#" class="add_field_button" id="overview|<?php echo $cat_id;?>">Add More Fields</a>
									</div>
								  <?php
								  }
								  ?>
								
								</div><!--overview-->
							
							
							
							<div class="overview input_fields_wrap course_content<?php echo $cat_id;?>">
							
							<h3>Course Content</h3>
							<?php
							$course_content_title_array = $unserialize_val['course_content_title'];
							$course_content_desc_array = $unserialize_val['course_content_desc'];
							$venu_title =  $unserialize_val['venu_title'];
							$venu_desc =  $unserialize_val['venu_desc'];
							if($course_content_title_array) {
							foreach($course_content_title_array as $key => $values){
							$course_content_title = $values;
							$course_content_desc = $course_content_desc_array[$key];
							  ?>
							  <div class="for_gap">
								<input type="text" name="course_content_title[]" value="<?php echo $course_content_title; ?>"  /><br><br />
								<textarea name="course_content_desc[]"><?php echo $course_content_desc; ?></textarea>
								<?php if($key==0){ ?>
									<a href="#" class="add_field_button" id="course_content|<?php echo $cat_id;?>">Add More Fields</a>
									<?php }else{ ?>
									<a href="#" class="remove_field" id="course_content|<?php echo $cat_id;?>">Remove</a>
									<?php } ?>
								</div>
									
							  <?php
							   }
							  }else{ ?>
							   <div class="for_gap">
								<input type="text" name="course_content_title[]"/><br><br />
								<textarea name="course_content_desc[]"></textarea>
									<a href="#" class="add_field_button" id="course_content|<?php echo $cat_id;?>">Add More Fields</a>
								</div>
							  <?php
							  }
							  ?>
							</div><!--overview-->
							
							<div class="overview">
							<h3>Venue</h3>
							<input type="text" name="venu_title" value="<?php echo $venu_title; ?>"  /><br><br />
							<textarea name="venu_desc"><?php echo $venu_desc; ?></textarea>
							</div><!--overview-->
							<!--FAQs order in Single Course Page Start-->
								<div class="overview">
									<h2>FAQs Ordering</h2>
											<?php 		
															
									$taxonomy_name = 'faq_categories';
									$store_categories = get_terms($taxonomy_name); 
									echo '<div class="list">';
									echo '<div class="response"></div>';
									foreach($store_categories as $key => $store_category) {
									$faq_cat_id = $store_category->term_id;
									
									$faq_posts_check = get_posts(array('post_status' => 'publish','post_type' => 'faqs', 'posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $store_category->term_id)))); 
									
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
									$req_count = count($faq_posts_check);
									
									$formed_option_value = 'single_faqs_order'.$cat_id.$faq_cat_id;
									
									
								/*foreach($faq_posts_check as $key => $value){
								$req_array[$key]=$value->ID;
								}*/
								
									$saved_options_value = get_option($formed_option_value);
									
									/*echo "<br>saved option value intellitraining<br>".$req_val = unserialize(base64_decode($saved_options_value));
									echo "<pre>";
									print_r($req_val);
									echo "</pre>";*/
									
								$for_allow_title = 0;
								foreach ( $faq_posts_check as $key => $faqs ) { 
								$faqs_for_cat = get_post_meta( $faqs->ID, 'faq_for_cat', true );
								$current_cat_id = $cat_id;
								$retrieve = explode("," ,$faqs_for_cat);
								
								if(in_array($current_cat_id,$retrieve)){
								++$for_allow_title;
								}
								}
								if($for_allow_title>0){
									echo '<h2>'.$store_category->name.'</h2>'; 
									}
								echo '<ul>';
								echo '<li id="arrayorder_'.$store_category->term_id.'" style="display:none;"/></li>';
							if($saved_options_value){ 
						//	$ordered_post_ids = maybe_unserialize($saved_options_value);
							$ordered_post_ids = unserialize(base64_decode($saved_options_value));


							$req_array_count = count($req_array);
							$ordered_post_ids_count = count($ordered_post_ids);
							
						//	echo "<br>req_array_count= ".$req_array_count;
						//	echo "<br>ordered_post_ids_count= ".$ordered_post_ids_count;
							
								if($req_array_count!=$ordered_post_ids_count){	
								$faq_posts = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $store_category->term_id)))); 
								//echo "check1";
								}else{
								$result=array_diff($req_array,$ordered_post_ids);
									if($result){

									$faq_posts = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $store_category->term_id)))); 
																	//echo "check2";

									}else{
																										//echo "check3";


										foreach($ordered_post_ids as $ordered_post_id){
											if ( get_post_status ( $ordered_post_id ) == 'publish' ) {
											$faq_posts[] = get_post($ordered_post_id);	
											}						
										}
									}
								}
							} else {

							$faq_posts = get_posts(array('post_status' => 'publish','post_type' => 'faqs', 'posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $store_category->term_id)))); 
							}
								
								echo '<li id="arrayorder_'.$cat_id.'" style="display:none;"/></li>';
								foreach($faq_posts as $faq_post){
											$faqs_for_cat = get_post_meta( $faq_post->ID, 'faq_for_cat', true );
					$current_cat_id = $cat_id;
								$retrieve = explode("," ,$faqs_for_cat);
								
					if(in_array($current_cat_id,$retrieve)){
								 ?>
									<li id="arrayorder_<?php echo $faq_post->ID; ?>"><?php echo ucfirst($faq_post->post_title); ?>
										<div class="clear"></div>
									</li>								
									<?php
									}
									 } echo '</ul>'; unset($ordered_post_ids); unset($faq_posts); unset($req_array);} echo '</div>'; ?>
										
									
									</div><!--overview-->
							<!--FAQs order in Single Course Page End-->
							<!--For SEO purpose added fields start-->
															<div class="overview">
								<h3>For SEO purpose added fields </h3>
								<h4>Schema.org/LocalBusiness  </h4>

										<div class="custom_adjust">
										<?php
											$seo_name =  $unserialize_val['seo_name'];
											$seo_streetAddress =  $unserialize_val['seo_streetAddress'];
											$seo_addressLocality =  $unserialize_val['seo_addressLocality'];
											$seo_addressRegion =  $unserialize_val['seo_addressRegion'];
											$seo_postalCode =  $unserialize_val['seo_postalCode'];
											$seo_telephone =  $unserialize_val['seo_telephone'];
												?>
												 <div class="single_whole_div">   
												<div class="link_for_image">name :</div>
												<input id="seo_name" type="text" size="45" value="<?php echo $seo_name; ?>" name="seo_name" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">streetAddress :</div>
												<input id="seo_streetaddress" type="text" size="45" value="<?php echo $seo_streetAddress; ?>" name="seo_streetAddress" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">addressLocality :</div>
												<textarea id="seo_addressLocality" name="seo_addressLocality"><?php echo $seo_addressLocality; ?></textarea>
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">addressRegion :</div>
												<input id="seo_addressRegion" type="text" size="45" value="<?php echo $seo_addressRegion; ?>" name="seo_addressRegion" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">postalCode :</div>
												<input id="seo_postalCode" type="text" size="45" value="<?php echo $seo_postalCode; ?>" name="seo_postalCode" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">telephone :</div>
												<input id="seo_telephone" type="text" size="45" value="<?php echo $seo_telephone; ?>" name="seo_telephone" /> 
												</div><!--single_whole_div-->
												
												</div><!--custom_adjust-->
												<h4>Schema.org/AggregateReview</h4>
											<div class="custom_adjust">
										<?php
											$seo_aggregate_name =  $unserialize_val['seo_aggregate_name'];
											$seo_ratingValue  =  $unserialize_val['seo_ratingValue'];
											$seo_bestRating =  $unserialize_val['seo_bestRating'];
											$seo_reviewCount =  $unserialize_val['seo_reviewCount'];
												?>
												 <div class="single_whole_div">   
												<div class="link_for_image">name :</div>
												<input id="seo_aggregate_name" type="text" size="45" value="<?php echo $seo_aggregate_name; ?>" name="seo_aggregate_name" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">ratingValue  :</div>
												<input id="seo_ratingValue" type="text" size="45" value="<?php echo $seo_ratingValue; ?>" name="seo_ratingValue" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">bestRating :</div>
												<input id="seo_bestRating" type="text" size="45" value="<?php echo $seo_bestRating; ?>" name="seo_bestRating" /> 
												</div><!--single_whole_div-->
												
												 <div class="single_whole_div">   
												<div class="link_for_image">reviewCount :</div>
												<input id="seo_reviewCount" type="text" size="45" value="<?php echo $seo_reviewCount; ?>" name="seo_reviewCount" /> 
												</div><!--single_whole_div-->
												
												</div><!--custom_adjust-->
												
									

											
											
								</div><!--overview-->	
							<!--For SEO purpose added fields End-->
							
												<input id="btn" type="submit" value="Save" name="req_submit" />	
                       </div><!--whole_div-->
		          </form>
							</div><!--popup_div-->
						<?php }	}?>
			</div><!--social_options-->
		</div><!--wrap-->
						<style>
						.outer_div{
						width:100%;
						float:left;
						}
						ul {
								padding:0px;
								margin: 0px;
							}
							.response {
								padding:10px;
								background-color:#9F9;
								border:2px solid #396;
								margin-bottom:20px;
							}
							.response_cat_sidebar_slider {
								padding:10px;
								background-color:#9F9;
								border:2px solid #396;
								margin-bottom:20px;
							}
							.list li {
								margin: 0 0 3px;
								padding:8px;
								background-color:#333;
								color:#fff;
								list-style: none;
							}
							.list_cat_sidebar li {
							margin: 0 0 3px;
								padding:8px;
								background-color:#333;
								color:#fff;
								list-style: none;
							}
						.image_upload_part {
						width: 96%;
						float: left;
						margin: 2% 2% 2% 0%;
						}
						select#sidebar_cat {
						min-height: 365px;
						width: 50%;
						float: left;
						margin-right: 50%;
						}
						.font_color_red {
						color:red;
						}
						.single_whole_div {
						width:100%;
						float:left;
						margin-top:2%;
						margin-bottom:2%;
						}
						.link_for_image {
						float: left;
						width: 22%;
						margin-top: 4px;
						}
						input.differ_class {
						width: 11% !important;
						float: left;
						}
						label {
						width: 14%;
						float: left;
						margin-top:5px;
						}
						input.differ_class {
						width: 4%;
						float: left;
						}
						.key_fea_sec {
						width: 100%;
						float: left;
						}
						.select_part {
						width:30%;
						float:left;
						}
						.text_part {
						width: 74%;
						float: left;
						margin-left: 10%;
						}
						
						.select_part {
						width: 14%;
						float: left;
						}						
						.single_part {
						width: 100%;
						float: left;
						margin-bottom: 2%;
						}
						.select_part select {
						width: 100%;
						float: left;
						}

							.whole_div {
						width:85%;
						float:left;
						padding-left:15%;
						}
						.fancybox-wrap.fancybox-desktop.fancybox-type-inline.fancybox-opened{
						top:50px !important;	
						}
						.overview input {
						width:60%;
						float:left;
						}
						.overview textarea {
						width:80%;
						float:left;
						min-height:200px;
						resize:none;
						}
						.key_features,.overview,.course_content,.venu {
						width:100%;
						float:left;
						/*border:1px solid red;*/
						}
						.single_overview {
						width:100%;
						float:left;
						/*border:1px solid red;*/
						}
						.single_overivew_title {
						width:100%;
						float:left;
						/*border:1px solid red;*/
						}
						.single_overivew_desc {
						width:100%;
						float:left;
						/*border:1px solid red;*/
						}

						.popup_div {
						display:none;
						}
						#social_options{
							width: 100%;
							}
						#social_options label {
						font-size: 15px;
						font-weight: bold;
						padding: 0 0 12px;
						}
						#social_options input {
						margin: 0 0 25px;
						}
						#social_options form {
						margin-left: 25px;
						margin-top:35px;
						}	
						#social_options #btn {
						cursor: pointer;
						width: 100px;
						}
						span.cat_btn {
						padding: 1%;
						margin: 1% !important;
						border: 1px solid red;
						float: left;
						}
						.for_gap {
						margin-top:3%;
						float:left;
						width:100%;
						}
						.slider_sidebar {
						float: left;
						margin-right: 49%;
						min-height: 300px;
						width: 50%;
						}
						.response_cat_sidebar_slider {
						display:none;
						}
						</style>	
						<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
						<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
                         <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.ddslick.min.js"></script>
						<script type="text/javascript">
						//for header js 
						var k = jQuery.noConflict();
						k(document).ready(function() {
						
							/****************************************************************
										 For FAQs Ordering Start
						********************************************************************/
								//	function slideout_sidebar_cat(){
//								setTimeout(function(){
//								k(".response_cat_sidebar_slider").slideUp("slow", function () {
//								});
//								
//								}, 2000);}
//								
//								k(".response_cat_sidebar_slider").hide();
//								k(function() {
//								k(".list_cat_sidebar ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
//									
//									var order = k(this).sortable("serialize") + '&cat_sidebar_slider=update'; 
//									var order = k(this).sortable("serialize") + '&cat_sidebar_slider=update'; 
//									//alert(order);
//									var templateUrl = '<?php echo get_bloginfo("template_url"); ?>';
//									k.post(templateUrl + "/update-faqs-general-ajax.php", order, function(theResponse){
//										//alert(theResponse);
//										k(".response_cat_sidebar_slider").html(theResponse);
//										k(".response_cat_sidebar_slider").slideDown('slow');
//										slideout_sidebar_cat();
//										
//									}); 															 
//								}								  
//								});
//								});
						/****************************************************************
										 For FAQs Ordering End
						********************************************************************/
						
						/**************Select Box Onchange Start ************/
							k( ".checking" )
							.change(function () {
							var req_id = this.id;
							var id_val = req_id.split('-', 2)[1];
							//alert(id_val);
							var str = "";
							k( "#"+req_id+" option:selected" ).each(function() {
						
							str += k( this ).val() + ",";
					   
	
							});
							//var req_val = k( "#"+req_id+" option:selected" ).val();
							//alert(req_val);
							 k( ".need" ).text( str );
							 var a_cat_id = id_val;
					k.post("<?php echo bloginfo('template_url'); ?>/includes/ajax_file.php", { 
					f_cat_id: a_cat_id,
					sel_val: str.slice(0,-1),
					action: 'sidebar_order'},function(responseText) { 
						k("#need_to_change"+id_val).empty().html(responseText);
					});
	
							})
							.change();
							
							
							
						/**************Select Box Onchange End ************/
						/********************
						JQuery Popup Start
						********************/
						k(".fancybox").fancybox();
						/********************
						JQuery Popup End 
						********************/	
						/***************************
						Add/Remove Title & Desc Start
						*****************************/
						var max_fields      = 10;
                        var wrapper         = k(".input_fields_wrap"); 
						var add_button      = k(".add_field_button");
						var x = 1; 
						k(add_button).click(function(e){ 
						
						var current_id = this.id;
						var part_name = current_id.split("|")[0];
						var id_name = current_id.split("|")[1];
						
						var wrapper = k("."+part_name+id_name);
						
						
						e.preventDefault();
						if(x < max_fields){
						x++; 
						k(wrapper).append('<div class="for_gap input_fields_wrap"><br><br><input type="text" name="'+part_name+'_title[]"/><br><br><textarea name="'+part_name+'_desc[]"></textarea><a href="#" class="remove_field" id="'+current_id+'">Remove</a></div>'); 
						}
						});
						
						k(wrapper).on("click",".remove_field", function(e){
						e.preventDefault(); k(this).parent('div').remove(); x--;
						})
						
						/*k(".remove_field").click(function() {
						alert('hi');
						alert(this.id);
						e.preventDefault(); k(this).parent('div').remove(); x--;
						});*/
						/***************************
						Add/Remove Title & Desc End
						*****************************/
						/***************************
						    Image in Select Start
						*****************************/
						k('#myDropdown').ddslick({
							onSelected: function(selectedData){
								//callback function: do something with selectedData;
							}   
						});
						/***************************
						    Image in Select End
						*****************************/
						/****************************************************************
						 For get the uploaded image url for caregory sidbar image start
						********************************************************************/
						
					var formfield;
					var textbox_validation;
					var id_name;
					var current_id,part_name;
					k('.differ_class').click(function() {
					
					    current_id = this.id;
					    part_name = current_id.split("|")[0];
						id_name = current_id.split("|")[1];

						textbox_validation = part_name;
						k('html').addClass('Image');
						
						if(part_name=='icon_file_button_image1'){
						formfield = k('#fetch_url_image1'+id_name).attr('name');
						}else if(part_name=='icon_file_button_image2'){
						formfield = k('#fetch_url_image2'+id_name).attr('name');
						}
						
					
						
					tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
						return false;
					});
		
					// user inserts file into post. only run custom if user started process using the above process
					// window.send_to_editor(html) is how wp would normally handle the received data
					window.original_send_to_editor = window.send_to_editor;
					window.send_to_editor = function(html){
					//alert(html);
						if (formfield) {
						//alert(html);
						var string_validation = html.indexOf('"');
						if(string_validation === -1){
							var resulted_url = html.split("'");
						
						} else {
						
						var resulted_url = html.split('"');
						}
							//alert(resulted_url[1]);
							if(textbox_validation == 'icon_file_button_image1'){
							
								k('#fetch_url_image1'+id_name).val(resulted_url[1]);
								
							}else if(textbox_validation == 'icon_file_button_image2'){
							
								k('#fetch_url_image2'+id_name).val(resulted_url[1]);
								
							}
							
						
							tb_remove();
							
							k('html').removeClass('Image');
							
						} else {
							window.original_send_to_editor(html);
						}
					};


						/****************************************************************
						 For get the uploaded image url for caregory sidbar image end
						********************************************************************/
						
						/****************************************************************
										 For FAQs Ordering Start
						********************************************************************/
									function slideout(){
								setTimeout(function(){
								k(".response").slideUp("slow", function () {
								});
								
								}, 2000);}
								
								k(".response").hide();
								k(function() {
								k(".list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
									
									var order = k(this).sortable("serialize") + '&update_faqs=update'; 
									var order = k(this).sortable("serialize") + '&update_faqs=update'; 
									//alert(order);
									var templateUrl = '<?php echo get_bloginfo("template_url"); ?>';
									k.post(templateUrl + "/update-faqs-general-ajax.php", order, function(theResponse){
										//alert(theResponse);
										k(".response").html(theResponse);
										k(".response").slideDown('slow');
										slideout();
									}); 															 
								}								  
								});
								});
						/****************************************************************
										 For FAQs Ordering End
						********************************************************************/

						
						});
						</script>
					
				<?php	
			
	 }

						
								/************************************
								Update The theme option values
								*************************************/
								
								
								public static function icon_for_redirect_url_update(){
								$redirect_urls = base64_encode(serialize(stripslashes_deep($_POST)));
		                 		update_option('redirect_urls',$redirect_urls);
								}
								
								public static function icon_for_site_logo_update(){
								$site_logo = $_POST['site_logo'];
								update_option('site_logo',$site_logo);
								}
								public static function theme_options_latest_news_title_update() {
								$latest_news_title = $_POST['latest_news_title'];
								update_option('latest_news_title',$latest_news_title);
								
								$video_title = $_POST['video_title'];
								update_option('video_title',$video_title);
								
								$sign_up_title = $_POST['sign_up_title'];
								update_option('sign_up_title',$sign_up_title);

								}
								
								public static function theme_options_elearning_link_update() {
								$elearning_link = $_POST['elearning_link'];
								update_option('elearning_link',$elearning_link);
								
								$elearning_link_text = $_POST['elearning_link_text'];
								update_option('elearning_link_text',$elearning_link_text);

								}
								public static function theme_options_elearning_description_update(){
								$elearning_description = $_POST['elearning_description'];
								update_option('elearning_description',stripslashes_deep($elearning_description));

								}
								public static function theme_options_need_help_update(){
									$need_help = $_POST['need_help'];
								update_option('need_help',stripslashes_deep($need_help));
								}
								public static function theme_options_header_update(){
								$phone_number = $_POST['phone_number'];
								update_option('phone_number',$phone_number);
								$email_id = $_POST['email_id'];
								update_option('email_id',$email_id);
								}
								
								public static function theme_options_elearning_update() {
								 $categories_elearning = implode("," ,$_POST['categories_elearning']);
				update_option('categories_elearning',$categories_elearning);
								}
								
								public static function home_location_page_update(){
								$location_page = $_POST['location_page'];
				update_option('location_page',$location_page);	
								}
							
							public static function home_hover_update(){
							 $home_hover = implode("," ,$_POST['home_hover']);
				update_option('home_hover',$home_hover);	
				$home_hover_order = unserialize(base64_decode(get_option('home_hover_order')));
				$home_hover = explode(',',get_option('home_hover'));
								$result=array_diff($home_hover,$home_hover_order);

				if(count($home_hover_order)!=count($home_hover)){
								$home_hover_serialize_val = base64_encode(serialize($_POST['home_hover']));
				update_option('home_hover_order',$home_hover_serialize_val);

				}else
				if($result){
				$home_hover_serialize_val = base64_encode(serialize($_POST['home_hover']));
				update_option('home_hover_order',$home_hover_serialize_val);
				}

							}
							
							 public static function home_h2_texts_update(){
							// $home_page_h2_tetxs = maybe_serialize($_POST);
							 
							 				$home_page_h2_tetxs = base64_encode(serialize($_POST));


							 update_option('home_page_h2_tetxs',$home_page_h2_tetxs);	
							 }
							 public static function elearning_key_fea_update() {
							 
							 $elearning_fea_text = implode("," ,$_POST['elearning_fea_text']);
				update_option('elearning_fea_text',$elearning_fea_text);	
				
				$video_elearing = stripslashes_deep($_POST['video_elearing']);
				update_option('video_elearing',$video_elearing);	
				
							 }
							 
						 public static function theme_filter_options_update() {
						 
			
				$display_post = implode("," ,$_POST['product_cat']);
				update_option('product_cat',$display_post);	
					
				$display_post1 = implode("," ,$_POST['product_location']);
				update_option('product_location',$display_post1);		
				
				$display_post2 = implode("," ,$_POST['course_periods']);
				update_option('course_periods',$display_post2);		
				
												
							}
							
							
							public static function dynamic_data_single_course_cat_page_update() {
							
				$term_value = $_POST['term_value'];
				//$serialized_val = maybe_serialize(stripslashes_deep($_POST));
				$serialized_val = base64_encode(serialize(stripslashes_deep($_POST)));
				
				update_option('serialized_val'.$term_value,$serialized_val);	
				
							}
	
				 public static function theme_home_options_update(){

				$display_post = implode("," ,$_POST['homebox_1']);
                update_option('homebox_1',$display_post);
				
				$url = $_POST['fetch_url'];
                update_option('product_icon_file_url',$url);

				 
				 }
				 
				  public static function theme_home_options_video_section_update(){
				$homepage_video_section_url = stripslashes($_POST['homepage_video_section_url']);
                update_option('homepage_video_section_url',$homepage_video_section_url);
				 }
				 
				 public static function theme_homepage_client_logo_options_update(){

				$display_post = implode("," ,$_POST['homepage_client_options']);
                update_option('homepage_client_options',$display_post);
				
				 }
				 
				  public static function icons_for_selectbox_update(){

				$select_icon1 = $_POST['select_icon1'];
                update_option('select_icon1',$select_icon1);
				
				$select_icon2 = $_POST['select_icon2'];
                update_option('select_icon2',$select_icon2);
				
				
				$select_icon3 = $_POST['select_icon3'];
                update_option('select_icon3',$select_icon3);
				
				$select_icon4 = $_POST['select_icon4'];
                update_option('select_icon4',$select_icon4);
				
				$select_icon5 = $_POST['select_icon5'];
                update_option('select_icon5',$select_icon5);
				
				$select_icon6 = $_POST['select_icon6'];
                update_option('select_icon6',$select_icon6);
				
				
				
				 }
				 
				 
				 
			 public static function resizeTheImage()
						{ 
							if ( function_exists( 'add_image_size' ) ) { 
							add_image_size( 'feature_img', 179, 159, true ); //(cropped)
							add_image_size( 'single_post_feature_img', 600, 315, true ); //(cropped)
							add_image_size( 'client_logo', 130, 130, true ); //(cropped)
							add_image_size( 'carousel_slider_img', 400, 400, true ); //(cropped)
							}			
						}
								/************************************
								Change The Default Slug Name
								*************************************/
	
			public static function changeDefaultSlug() {
						register_post_type(
							'product',
							array(
								'labels' => array(
									'name' => __('Courses'),
									'singular_name' => __('Course')
								),
								'public' => true,
								'has_archive' => true,
								'rewrite' => array(
									'slug' => 'courses'
								)
							)
						);
					} // end example_register_post_type
					
						/************************************
						Create Taxonomies Post Type(Product)
						*************************************/
		
		public static function registerTaxonomyCoursePeriodForProductsPostType() {
						
						$labels = array(
						'name'              => _x( 'Course Periods', 'taxonomy general name' ),
						'singular_name'     => _x( 'Course Period', 'taxonomy singular name' ),
						'search_items'      => __( 'Search Course Periods' ),
						'all_items'         => __( 'All Course Periods' ),
						'parent_item'       => __( 'Parent Course Periods' ),
						'parent_item_colon' => __( 'Parent Course Period:' ),
						'edit_item'         => __( 'Edit Course Periods' ),
						'update_item'       => __( 'Update Course Periods' ),
						'add_new_item'      => __( 'Add New Course Period' ),
						'new_item_name'     => __( 'New Course Period Name' ),
						'menu_name'         => __( 'Course Period' ),
						);
						
						$args = array(
						'hierarchical'      => true,
						'labels'            => $labels,
						'show_ui'           => true,
						'show_admin_column' => true,
						'query_var'         => true,
						'capabilities'          => array(
						'manage_terms' => 'manage_product_terms',
						'edit_terms'   => 'edit_product_terms',
						'delete_terms' => 'delete_product_terms',
						'assign_terms' => 'assign_product_terms',
					),
						'rewrite'           =>  array('slug' => 'course-periods'),
						);
						
						register_taxonomy( 'course_periods', array( 'product' ), $args );
					} 
					
					public static function registerTaxonomyLocationForProductsPostType() {
						
							$labels = array(
						'name'              => _x( 'Locations', 'taxonomy general name' ),
						'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
						'search_items'      => __( 'Search Locations' ),
						'all_items'         => __( 'All Locations' ),
						'parent_item'       => __( 'Parent Locations' ),
						'parent_item_colon' => __( 'Parent Location:' ),
						'edit_item'         => __( 'Edit Locations' ),
						'update_item'       => __( 'Update Locations' ),
						'add_new_item'      => __( 'Add New Location' ),
						'new_item_name'     => __( 'New Location Name' ),
						'menu_name'         => __( 'Location' ),
						);
						
						$args = array(
						'hierarchical'      => true,
						'labels'            => $labels,
						'show_ui'           => true,
						'show_admin_column' => true,
						'query_var'         => true,
						'rewrite'           => array( 'slug' => 'product' ),
						);
						register_taxonomy( 'product_location', array( 'product' ), $args );
					} 
	
						  
					
			
		}

			       /*************************************************
					Call The functions Thats In Inside The Class
					**************************************************/
							

                add_action( 'init', array( 'ThemeOptions','registerTestimonialsPostType' ) );
				add_action( 'init', array( 'ThemeOptions','registerFaqsPostType' ) );
                add_action( 'init', array( 'ThemeOptions','registerClientsPostType' ) );
                add_action( 'init', array( 'ThemeOptions','registerCourseVenuePostType' ) );
				add_action( 'init', array( 'ThemeOptions','registerTaxonomyForProductsPostType' ) );
				add_action( 'init', array( 'ThemeOptions','registerTaxonomyCoursePeriodForProductsPostType' ) );
                add_action( 'init', array( 'ThemeOptions','registerTaxonomyForFAQs' ) );
				add_action( 'init', array( 'ThemeOptions','registerTaxonomyForCourseVenue' ) );
				
				add_action( 'after_setup_theme', array( 'ThemeOptions','register_my_menu' ));
				
			    add_action( 'add_meta_boxes',array( 'ThemeOptions', 'testimonial_add_custom_box' ));
         		add_action( 'save_post', array( 'ThemeOptions', 'testimonial_save_postdata') );
				
				add_action( 'admin_init', array( 'ThemeOptions','theme_options_init' ));
				add_action( 'admin_menu', array( 'ThemeOptions','theme_options_add_page' )); 
				
				//add_action( 'admin_menu', array( 'ThemeOptions','theme_filter_options_do_page' )); 
				add_action( 'init', array( 'ThemeOptions','resizeTheImage' ) );
				
				




?>