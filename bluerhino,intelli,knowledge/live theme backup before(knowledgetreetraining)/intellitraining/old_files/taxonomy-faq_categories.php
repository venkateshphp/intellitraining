<?php /*********Template Name: Template FAQs general*********/ get_header(); ?> 
	<div class="container">
		<div class="wrapper">
			<div class="whole-outer">
				<div class="our-clients-outer">
					<div class="main-bd">
					<h1><?php
					$post_title =  get_post_meta( $post->ID, 'page_custom_title', true );
					if($post_title) {
					echo $post_title;
					}else{
					echo $post->post_title;
					}
					?></h1>
					</div><!--main-bd-->
				<hr>
				<!--newly added fqs start-->
				<?php 
				$args = array(
				'type'                     => 'faqs',
				'orderby'                  => 'name',
				'order'                    => 'ASC',
				'taxonomy'                 => 'faq_categories',
				'hide_empty'               => 1,
				); 
				$taxonomy_name = 'faq_categories';
				$categories = get_categories( $args );
				foreach($categories as $key => $category){
				$term_id_req = $category->term_id;
				?>
					<div class="faq_cat_title"><?php
					echo $category->name;
					?></div>
				<?php
				$saved_options_value = get_option('category_faq_data_'.$term_id_req);
				$faq_posts_check = get_posts(array('post_status' => 'publish','post_type' => 'faqs','posts_per_page' => -1 ,'order' => 'ASC' ,'tax_query' => array( array( 'taxonomy' => $taxonomy_name, 'field' => 'term_id', 'terms' => $term_id_req)))); 
							
								
								foreach($faq_posts_check as $key => $value){
								$req_array[$key]=$value->ID;
								}
									/*echo "<pre>";
								print_r($req_array);
								echo "<pre>";*/
								
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

				//echo "<br>Not Available";
				$all_faqs=get_posts(array('post_status' => 'publish','post_type' => 'faqs','tax_query' => array(array('taxonomy' => 'faq_categories','field' => 'term_id','terms' => $term_id_req))));
				}
				//echo "<br>count =".count($all_faqs);
				?>
					<div class="faqs-accordion-section">
					<div class="accordion">
					<?php
					foreach ( $all_faqs as $key => $faqs ) { 
					?>
					<h3 class="for_add_font"><?php echo /*"Faqs Title : ".*/$faqs->post_title; ?></h3>
					<div><p><?php echo /*"<br> Faqs Title : ".*/wp_trim_words($faqs->post_content, 40); ?></p></div>
					<?php }
					?>
					</div><!--accordion end-->
					</div><!--faqs-accordion-section-->
				<?php
				unset($all_faqs);
				unset($req_array);
				}
				?>
				<!--newly added fqs end-->
				</div><!--our-clients-outer-->
				<!--sidebar will come here-->
				<?php include(TEMPLATEPATH."/sidebar.php");?>
			</div><!--.whole-outer -->
		</div><!--wrapper-->
	</div><!--container-->
<?php  get_footer(); ?>
