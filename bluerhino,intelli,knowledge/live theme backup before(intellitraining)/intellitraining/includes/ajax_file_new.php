<?php
@ob_start();
@session_start();
include_once('../../../../wp-config.php');


global $post,$wpdb,$current_user;
		if($_REQUEST['action']=='chk_values') {
		$chk_values = $_REQUEST['f_checkbox_values'];
			foreach($chk_values  as $key => $values){
			$val = explode('|',$values);
			$chk_cat[$key] = $val[0];
			}
$unique = array_map('unserialize', array_unique(array_map('serialize', $chk_cat)));
		$i=0;
		foreach($unique as $values){
		$filter_array[$i] = $values;
		$i++;
		}
$filter_array_count = count($filter_array);

			foreach($filter_array as $key1 => $val){
			$array[$key1]["taxonomy"] = $val;
			}
			foreach($chk_values  as $key => $values){
			$val = explode('|',$values);
			
			if (in_array($val[0], $filter_array)){
			$index = array_search($val[0],$filter_array);
			$array[$index]["term"][]=$val[1];
			}
			}
			$final_count = count($array);
		/********************************************
		added for dynamic loop for filteration start	
		********************************************/
			$query = array('post_type' => 'product','posts_per_page' => -1,

    'tax_query' => array()
);
	if($filter_array_count==1){
	$query['tax_query'] = array(
		'relation' => 'OR',
	);
	}else {
	$query['tax_query'] = array(
		'relation' => 'AND',
	);
	}
foreach($array as $param){
     $query['tax_query'][] = array(
            'taxonomy' => $param["taxonomy"],
            'terms' => $param["term"],
            'field' => 'id'
        );
    }

?>
				<?php
				

			$products =  get_posts($query);
			//$count = count($products);
			/*if($count) {*/
			 $whole_structure="hello";
			 echo $whole_structure;
			 exit;
					foreach($products as $key => $product){
			       $whole_structure .='<div class="single-client border-margin">
						<div class="client-title">'.$product->post_title.'</div>
						<div class="client-content">	
							<div class="client-content-text">
							'.$product->post_content;
							global $post;
							$args = array( 'taxonomy' => 'product_cat',);
							$terms = wp_get_post_terms($product->ID,'product_cat', $args);
							$count = count($terms); 
							if ($count > 0) {
							
							foreach ($terms as $term) {
							$whole_structure .='<div style="direction:ltl;">Categories :'
							.$term->name.'
							</div>';
							}
							} 
							$args = array( 'taxonomy' => 'product_location',);
							$terms = wp_get_post_terms($product->ID,'product_location', $args);
							$count = count($terms); 
							if ($count > 0) {
							foreach ($terms as $term) {
							  $whole_structure .='<div style="direction:ltl;">Locations :'.$term->name.'</div>';
							}
							}
							
					$whole_structure .='</div>
						</div>
					</div>';
 } 
 			echo $whole_structure;

/* }else {
 echo "No Courses Are Found";
 }*/?>					
				
				
				<?php


		/********************************************
		added for dynamic loop for filteration end	
		********************************************/

?>