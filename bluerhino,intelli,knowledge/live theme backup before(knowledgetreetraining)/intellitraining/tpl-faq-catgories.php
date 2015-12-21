<?php
 /*********

Template Name: New Template FAQs general

*********/ 
get_header(); ?> 


<h3>					<?php
$post_title =  get_post_meta( $post->ID, 'page_custom_title', true );
if($post_title) {
echo $post_title;
}else{
echo $post->post_title;
}
?>
</h3>


  
  <div class="row">
  <div class="col-md-4">
          <div class="courses-panel-left">
                     									  <?php include(TEMPLATEPATH."/sidebar-new.php");?>

  </div>
  
  </div>
  
  <div class="col-md-8 faq-section">
  
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
												$key1 = $key;

				$term_id_req = $category->term_id;
				?>
					<p><strong><?php
					echo $category->name;
					?></strong></p>
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
                   <div class="panel-group" id="accordion">
					<?php
					foreach ( $all_faqs as $key => $faqs ) { 
													$key2 = $key;

					?>
					<div class="panel panel-default">
					<div class="panel-heading">
					<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key1.$key2;?>"><?php echo /*"Faqs Title : ".*/$faqs->post_title; ?></a>
					</h4>
					</div>
					<div id="collapse<?php echo $key1.$key2;?>" class="panel-collapse collapse <?php if($key2==0){?>in<?php } ?>">
					<div class="panel-body">
					<p><?php echo /*"<br> Faqs Title : ".*/wp_trim_words($faqs->post_content, 40); ?></p>
					</div>
					</div>
					</div>

					<?php }
					?>
					</div><!--faqs-accordion-section-->
				<?php
				unset($all_faqs);
				unset($req_array);
				}
				?>
				<!--newly added fqs end-->
  
  
  
  
  </div>
  
  
  </div>
 
    
    
    
  </div>
    <!--main-content-end-->
    

<?php  get_footer(); ?>
