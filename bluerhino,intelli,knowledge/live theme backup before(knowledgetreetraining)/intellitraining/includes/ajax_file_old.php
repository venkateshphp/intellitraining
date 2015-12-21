<?php
@ob_start();
@session_start();
include_once('../../../../wp-config.php');


global $post,$wpdb,$current_user;
		if($_REQUEST['action']=='chk_values') {
		$chk_values = $_REQUEST['f_checkbox_values'];
		if($chk_values) {
		foreach($chk_values as $key => $values){
			$val = explode('|',$values);
			if($val[0]=='product_cat') {
			$chk_cat_term_id[$key] = $val[1];
			}
			$chk_cat[$key] = $val[0];
			$chk_cat_all_id[$key] = $val[1];
			}
			
	$unique = array_map('unserialize', array_unique(array_map('serialize', $chk_cat)));
		$i=0;
		foreach($unique as $values){
		$filter_array[$i] = $values;
		$i++;
		}
$filter_array_count = count($filter_array);

						foreach($chk_values as $key => $values){
						$val = explode('|',$values);
							if($val[0]!='product_cat') {	
								if (in_array($val[0], $filter_array)){
								$array[$val[0]][]=strtolower($val[1]);
								}
							}
						}


  }

if($chk_cat_term_id){
		foreach($chk_cat_term_id as $key => $req) {
		$args = array(
		'type'                     => 'product',
		'hide_empty'               => 0,
		'parent'                  => $req,
		'taxonomy'                 => 'product_cat',
		);
		$single_taxonomy = get_categories($args); 
		$whole_structure = "";
		$count = count($single_taxonomy);
			if($count){
							foreach($single_taxonomy as $key => $single_taxonomy_cat){
							
		if(count($array)==2){
		$array_periods =$array['course_periods'];
		$count_periods = count($array_periods);
		$count_latest_periods = $count_periods-1;
		$val_list_periods= "";
		foreach($array_periods as $key => $val){
		if($count_periods==1) {
						$val_list_periods.="[".$val."]";
		
		}else
					   if($key == 0){
						$val_list_periods.="[".$val."|";
						}else
						if($key == $count_latest_periods){
						$val_list_periods.=$val."]";
						}else{
							$val_list_periods.=$val."|";
					
						}
		}
		$for_periods= $val_list_periods;
		
		$array_loc =$array['product_location'];
		$count_loc = count($array_loc);
		$count_latest_loc = $count_loc-1;
		$val_list_loc= "";
		foreach($array_loc as $key => $val){
		if($count_loc==1) {
		$val_list_loc.="[".strtolower($val)."]";
		
		}else
		if($key == 0){
		$val_list_loc.="[".strtolower($val)."|";
		}else
		if($key == $count_latest_loc){
		$val_list_loc.=strtolower($val)."]";
		}else{
		$val_list_loc.=strtolower($val)."|";
		
		}
		}
		$for_loc= $val_list_loc;
		
		if((preg_match($for_periods, strtolower($single_taxonomy_cat->slug)) == true)&&(preg_match($for_loc, strtolower($single_taxonomy_cat->slug)) == true))	{
			$whole_structure .='<a class="for_color" href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><div class="over-Details"><div class="product">';
			$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
			$image = wp_get_attachment_url( $thumbnail_id ); 
			$whole_structure .='<img src="'.$image.'"/></div> <div class="pro-detail">
			<h4>'.$single_taxonomy_cat->name.'</h4>';
		    $string = wp_trim_words( $single_taxonomy_cat->category_description, 10 );
			$string = strip_shortcodes( $string );
			$whole_structure .='<p>'.$string.'</p><div class="accred_div_card">	<span class="icon_right vertical_tab_icon"></span><span class="accred_title">View courses</span></div>
			</div></div></a>';
		}
		
		
		
		}elseif(count($array)==1){
		
							if($array['course_periods']){
							$array_periods =$array['course_periods'];
		$count_periods = count($array_periods);
		$count_latest_periods = $count_periods-1;
		$val_list_periods= "";
		foreach($array_periods as $key => $val){
		$val = strtolower($val);
		if($count_periods==1) {
						$val_list_periods.="[".$val."]";
		
		}else
					   if($key == 0){
						$val_list_periods.="[".$val."|";
						}else
						if($key == $count_latest_periods){
						$val_list_periods.=$val."]";
						}else{
							$val_list_periods.=$val."|";
					
						}
		}
		$for_periods= $val_list_periods;
		if(preg_match($for_periods, strtolower($single_taxonomy_cat->slug)) == true)	{
			$whole_structure .='<a class="for_color" href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><div class="over-Details"><div class="product">';
			$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
			$image = wp_get_attachment_url( $thumbnail_id ); 
			$whole_structure .='<img src="'.$image.'"/></div> <div class="pro-detail">
			<h4>'.$single_taxonomy_cat->name.'</h4>';
		    $string = wp_trim_words( $single_taxonomy_cat->category_description, 10 );
			$string = strip_shortcodes( $string );
			$whole_structure .='<p>'.$string.'</p><div class="accred_div_card">	<span class="icon_right vertical_tab_icon"></span><span class="accred_title">View courses</span></div>
			</div></div></a>';
		}
							
							}elseif($array['product_location']){
							$array_loc =$array['product_location'];
		$count_loc = count($array_loc);
		$count_latest_loc = $count_loc-1;
		$val_list_loc= "";
		foreach($array_loc as $key => $val){
		$val = strtolower($val);
		if($count_loc==1) {
						$val_list_loc.="[".$val."]";
		
		}else
					   if($key == 0){
						$val_list_loc.="[".$val."|";
						}else
						if($key == $count_latest_loc){
						$val_list_loc.=$val."]";
						}else{
							$val_list_loc.=$val."|";
					
						}
		}
		$for_loc= $val_list_loc;
		if(preg_match($for_loc, strtolower($single_taxonomy_cat->slug)) == true)	{
			$whole_structure .='<a class="for_color" href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><div class="over-Details"><div class="product">';
			$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
			$image = wp_get_attachment_url( $thumbnail_id ); 
			$whole_structure .='<img src="'.$image.'"/></div> <div class="pro-detail">
			<h4>'.$single_taxonomy_cat->name.'</h4>';
		    $string = wp_trim_words( $single_taxonomy_cat->category_description, 10 );
			$string = strip_shortcodes( $string );
			$whole_structure .='<p>'.$string.'</p><div class="accred_div_card">	<span class="icon_right vertical_tab_icon"></span><span class="accred_title">View courses</span></div>
			</div></div></a>';
		}
							
							}
							}else{
			$whole_structure .='<a class="for_color" href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><div class="over-Details"><div class="product">';
			$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
			$image = wp_get_attachment_url( $thumbnail_id ); 
			$whole_structure .='<img src="'.$image.'"/></div> <div class="pro-detail">
			<h4>'.$single_taxonomy_cat->name.'</h4>';
		    $string = wp_trim_words( $single_taxonomy_cat->category_description, 10 );
			$string = strip_shortcodes( $string );
			$whole_structure .='<p>'.$string.'</p><div class="accred_div_card">	<span class="icon_right vertical_tab_icon"></span><span class="accred_title">View courses</span></div>
			</div></div></a>';
							}
							}//foreach
					 echo $whole_structure;
					//echo $for_periods;

			 }else {
 
echo "<div class='no-course'>No Courses Are Found</div>";
 }
 		
	 
	// echo json_encode($chk_cat_term_id);
//echo json_encode($array);
 
 }//foreach
 }else {
 $args = array(
	'type'                     => 'product',
	'hide_empty'               => 0,
	'taxonomy'                 => 'product_cat',
);
$single_taxonomy = get_categories($args); 
$whole_structure = "";
						$count = count($single_taxonomy);
				if($count){
							foreach($single_taxonomy as $key => $single_taxonomy_cat){
							
		if(count($array)==2){
		$array_periods =$array['course_periods'];
		$count_periods = count($array_periods);
		$count_latest_periods = $count_periods-1;
		$val_list_periods= "";
		foreach($array_periods as $key => $val){
		if($count_periods==1) {
						$val_list_periods.="[".$val."]";
		
		}else
					   if($key == 0){
						$val_list_periods.="[".$val."|";
						}else
						if($key == $count_latest_periods){
						$val_list_periods.=$val."]";
						}else{
							$val_list_periods.=$val."|";
					
						}
		}
		$for_periods= $val_list_periods;
		
		$array_loc =$array['product_location'];
		$count_loc = count($array_loc);
		$count_latest_loc = $count_loc-1;
		$val_list_loc= "";
		foreach($array_loc as $key => $val){
		if($count_loc==1) {
		$val_list_loc.="[".strtolower($val)."]";
		
		}else
		if($key == 0){
		$val_list_loc.="[".strtolower($val)."|";
		}else
		if($key == $count_latest_loc){
		$val_list_loc.=strtolower($val)."]";
		}else{
		$val_list_loc.=strtolower($val)."|";
		
		}
		}
		$for_loc= $val_list_loc;
		
		if((preg_match($for_periods, strtolower($single_taxonomy_cat->slug)) == true)&&(preg_match($for_loc, strtolower($single_taxonomy_cat->slug)) == true))	{
			$whole_structure .='<a class="for_color" href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><div class="over-Details"><div class="product">';
			$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
			$image = wp_get_attachment_url( $thumbnail_id ); 
			$whole_structure .='<img src="'.$image.'"/></div> <div class="pro-detail">
			<h4>'.$single_taxonomy_cat->name.'</h4>';
		    $string = wp_trim_words( $single_taxonomy_cat->category_description, 10 );
			$string = strip_shortcodes( $string );
			$whole_structure .='<p>'.$string.'</p><div class="accred_div_card">	<span class="icon_right vertical_tab_icon"></span><span class="accred_title">View courses</span></div>
			</div></div></a>';
		}
		
		
		
		}elseif(count($array)==1){
		
							if($array['course_periods']){
							$array_periods =$array['course_periods'];
		$count_periods = count($array_periods);
		$count_latest_periods = $count_periods-1;
		$val_list_periods= "";
		foreach($array_periods as $key => $val){
		$val = strtolower($val);
		if($count_periods==1) {
						$val_list_periods.="[".$val."]";
		
		}else
					   if($key == 0){
						$val_list_periods.="[".$val."|";
						}else
						if($key == $count_latest_periods){
						$val_list_periods.=$val."]";
						}else{
							$val_list_periods.=$val."|";
					
						}
		}
		$for_periods= $val_list_periods;
		if(preg_match($for_periods, strtolower($single_taxonomy_cat->slug)) == true)	{
			$whole_structure .='<a class="for_color" href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><div class="over-Details"><div class="product">';
			$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
			$image = wp_get_attachment_url( $thumbnail_id ); 
			$whole_structure .='<img src="'.$image.'"/></div> <div class="pro-detail">
			<h4>'.$single_taxonomy_cat->name.'</h4>';
		    $string = wp_trim_words( $single_taxonomy_cat->category_description, 10 );
			$string = strip_shortcodes( $string );
			$whole_structure .='<p>'.$string.'</p><div class="accred_div_card">	<span class="icon_right vertical_tab_icon"></span><span class="accred_title">View courses</span></div>
			</div></div></a>';
		}
							
							}elseif($array['product_location']){
							$array_loc =$array['product_location'];
		$count_loc = count($array_loc);
		$count_latest_loc = $count_loc-1;
		$val_list_loc= "";
		foreach($array_loc as $key => $val){
		$val = strtolower($val);
		if($count_loc==1) {
						$val_list_loc.="[".$val."]";
		
		}else
					   if($key == 0){
						$val_list_loc.="[".$val."|";
						}else
						if($key == $count_latest_loc){
						$val_list_loc.=$val."]";
						}else{
							$val_list_loc.=$val."|";
					
						}
		}
		$for_loc= $val_list_loc;
		if(preg_match($for_loc, strtolower($single_taxonomy_cat->slug)) == true)	{
			$whole_structure .='<a class="for_color" href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><div class="over-Details"><div class="product">';
			$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
			$image = wp_get_attachment_url( $thumbnail_id ); 
			$whole_structure .='<img src="'.$image.'"/></div> <div class="pro-detail">
			<h4>'.$single_taxonomy_cat->name.'</h4>';
		    $string = wp_trim_words( $single_taxonomy_cat->category_description, 10 );
			$string = strip_shortcodes( $string );
			$whole_structure .='<p>'.$string.'</p><div class="accred_div_card">	<span class="icon_right vertical_tab_icon"></span><span class="accred_title">View courses</span></div>
			</div></div></a>';
		}
							
							}
							}else{
			$whole_structure .='<a class="for_color" href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><div class="over-Details"><div class="product">';
			$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
			$image = wp_get_attachment_url( $thumbnail_id ); 
			$whole_structure .='<img src="'.$image.'"/></div> <div class="pro-detail">
			<h4>'.$single_taxonomy_cat->name.'</h4>';
		    $string = wp_trim_words( $single_taxonomy_cat->category_description, 10 );
			$string = strip_shortcodes( $string );
			$whole_structure .='<p>'.$string.'</p><div class="accred_div_card">	<span class="icon_right vertical_tab_icon"></span><span class="accred_title">View courses</span></div>
			</div></div></a>';
							}
							}//foreach
	// echo json_encode($chk_cat_term_id);
echo $whole_structure;
//echo json_encode($array);
	 }else {
echo "<div class='no-course'>No Courses Are Found</div>";
 }

 
 }//chk_cat_term_id
 }
 
/**************************************
Home Page Course Finder Section Start
**************************************/
		if($_REQUEST['action']=='course_id') {
		$course_id = $_REQUEST['f_course_id'];
$post_id = $course_id;
$post_link = get_permalink($post_id);
$terms = wp_get_post_terms($post_id,'product_location');

	$whole_structure.='<select class="location_selection" id="location_selection" name="location_selection"><option value="">Location</option>';
		foreach($terms as $key => $val){ 
		$whole_structure.='<option value="'.$val->term_id.'">'.$val->name.'</option>';
	}
	$whole_structure.='</select>';
	$array['select_box']=$whole_structure;
	$array['course_link']=$post_link;
//	echo json_encode($array);
$array1 = $post_id;
json_encode($array1);

}
/**************************************
Home Page Course Finder Section End
**************************************/
/***************************************************
Single Course Category Sidebar Slider ordering Start
****************************************************/
		if($_REQUEST['action']=='sidebar_order') {
		?>
		<script type="text/javascript">
						//for header js 
						var k = jQuery.noConflict();
						k(document).ready(function() {
						
							/****************************************************************
										 For FAQs Ordering Start
						********************************************************************/
									function slideout_sidebar_cat(){
								setTimeout(function(){
								k(".response_cat_sidebar_slider").slideUp("slow", function () {
								});
								
								}, 2000);}
								
								k(".response_cat_sidebar_slider").hide();
								k(function() {
								k(".list_cat_sidebar ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
									
									var order = k(this).sortable("serialize") + '&cat_sidebar_slider=update'; 
									var order = k(this).sortable("serialize") + '&cat_sidebar_slider=update'; 
									//alert(order);
									var templateUrl = '<?php echo get_bloginfo("template_url"); ?>';
									k.post(templateUrl + "/update-faqs-general-ajax.php", order, function(theResponse){
										//alert(theResponse);
										k(".response_cat_sidebar_slider").html(theResponse);
										k(".response_cat_sidebar_slider").slideDown('slow');
										slideout_sidebar_cat();
										
									}); 															 
								}								  
								});
								});
									});
								</script>
								<?php
		$cat_id = $_REQUEST['f_cat_id'];
		$sel_val = $_REQUEST['sel_val'];
		$formed_name = 'cat_sidebar_order'.$cat_id;
		update_option($formed_name,$sel_val);
		
					$formed_values_after = 'cat_sidebar_slider_after_order'.$cat_id;
			//$after_order_values = maybe_unserialize(get_option($formed_values_after));
$after_order_values = unserialize(base64_decode(get_option($formed_values_after)));
		
					$default_array = explode(",",get_option($formed_name));

/*		$default_array_count = count($default_array);
		$ordered_array_count = count($after_order_values);
				if($after_order_values[0]==""){
							$retrive = $default_array;
		}else
		if(!$after_order_values){
							$retrive = $default_array;
		}else
		if($default_array_count == $ordered_array_count){
					$retrive = $after_order_values;
		}else{
					$retrive = $default_array;
		}
		*/
		
		$default_array_count = count($default_array);
		$ordered_array_count = count($after_order_values);
		
		if($after_order_values){
		$result=array_diff($default_array,$after_order_values);
		}
		
		if($after_order_values[0]==""){
							$retrive = $default_array;
		}else
		if(!$after_order_values){
							$retrive = $default_array;
		}elseif($default_array_count!=$ordered_array_count){
							$retrive = $default_array;
		}elseif($result){
					$retrive = $default_array;
		}else{
					$retrive = $after_order_values;
		}
		
			/*if($after_order_values) {
			$retrive = $after_order_values;
			}elseif(get_option($formed_name)) {
					$retrive = explode(",",get_option($formed_name));
			}*/
						  
				$whole_structure.='<div class="list_cat_sidebar"><div class="response_cat_sidebar_slider"></div><ul class="ui-sortable"><li class="ui-sortable-handle" id="arrayorder_'.$cat_id.'" style="display:none;"/></li>';
						$iteration = 0;
						if($retrive[0]!=""){
						foreach($retrive as $retrive_ID) {
						$term_details = get_term_by('id',$retrive_ID,'product_cat');
							if($iteration == 10){
							break;
							}
							$whole_structure.='<li class="ui-sortable-handle" id="arrayorder_'.$retrive_ID.'">'.ucfirst($term_details->name).'<div class="clear"></div></li>';	
							++$iteration;
							}
							}
							$whole_structure.='</ul></div>';
		echo $whole_structure;

}
/***************************************************
Single Course Category Sidebar Slider ordering End
**************************************************/


/**************************************
Home Page Course Finder Section Start
**************************************/
		if($_REQUEST['action']=='course_id') {
		$course_id = $_REQUEST['f_course_id'];
$post_id = $course_id;
$post_link = get_permalink($post_id);
$terms = wp_get_post_terms($post_id,'product_location');

	$whole_structure.='<select class="location_selection" id="location_selection" name="location_selection"><option value="">Location</option>';
		foreach($terms as $key => $val){ 
		$whole_structure.='<option value="'.$val->term_id.'">'.$val->name.'</option>';
	}
	$whole_structure.='</select>';
	$array['select_box']=$whole_structure;
	$array['course_link']=$post_link;
//	echo json_encode($array);
$array1 = $post_id;
json_encode($array1);

}
/**************************************
Home Page Course Finder Section End
**************************************/
/***************************************************
Single Page Sidebar Slider ordering Start
****************************************************/
		if($_REQUEST['action']=='sidebar_order_in_page') {
		?>
		<script type="text/javascript">
						//for header js 
						var k = jQuery.noConflict();
						k(document).ready(function() {
						
							/****************************************************************
										 For FAQs Ordering Start
						********************************************************************/
									function slideout_sidebar_cat(){
								setTimeout(function(){
								k(".response_cat_sidebar_slider").slideUp("slow", function () {
								});
								
								}, 2000);}
								
								k(".response_cat_sidebar_slider").hide();
								k(function() {
								k(".list_cat_sidebar ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
									
									var order = k(this).sortable("serialize") + '&sidebar_slider_page=update'; 
									var order = k(this).sortable("serialize") + '&sidebar_slider_page=update'; 
									//alert(order);
									var templateUrl = '<?php echo get_bloginfo("template_url"); ?>';
									k.post(templateUrl + "/update-faqs-general-ajax.php", order, function(theResponse){
										//alert(theResponse);
										k(".response_cat_sidebar_slider").html(theResponse);
										k(".response_cat_sidebar_slider").slideDown('slow');
										slideout_sidebar_cat();
										
									}); 															 
								}								  
								});
								});
									});
								</script>
								<?php
		$page_id = $_REQUEST['f_post_id'];
		$sel_val = $_REQUEST['sel_val'];
		$formed_name = 'sidebar_order_page'.$page_id;
		update_option($formed_name,$sel_val);
		
					$formed_values_after = 'sidebar_slider_after_order_page'.$page_id;
			//$after_order_values = maybe_unserialize(get_option($formed_values_after));
$after_order_values = unserialize(base64_decode(get_option($formed_values_after)));

		
					$default_array = explode(",",get_option($formed_name));

/*echo "<br>=======default_array=====<br>";
echo "<pre>";
print_r($default_array);
echo "</pre>";
echo "<br>=======after_order_values=====<br>";
echo "<pre>";
print_r($after_order_values);
echo "</pre>"*/;

		$default_array_count = count($default_array);
		$ordered_array_count = count($after_order_values);
		if($after_order_values){
		$result=array_diff($default_array,$after_order_values);
		}
		if($after_order_values[0]==""){
							$retrive = $default_array;
		}else
		if(!$after_order_values){
							$retrive = $default_array;
		}elseif($default_array_count!=$ordered_array_count){
							$retrive = $default_array;
		}elseif($result){
					$retrive = $default_array;
		}else{
					$retrive = $after_order_values;
		}
		
			/*if($after_order_values) {
			$retrive = $after_order_values;
			}elseif(get_option($formed_name)) {
					$retrive = explode(",",get_option($formed_name));
			}*/
						  
				$whole_structure.='<div class="list_cat_sidebar"><div class="response_cat_sidebar_slider"></div><ul class="ui-sortable"><li class="ui-sortable-handle" id="arrayorder_'.$page_id.'" style="display:none;"/></li>';
						$iteration = 0;
						if($retrive[0]!=""){
						foreach($retrive as $retrive_ID) {
						$term_details = get_term_by('id',$retrive_ID,'product_cat');
							if($iteration == 10){
							break;
							}
							$whole_structure.='<li class="ui-sortable-handle" id="arrayorder_'.$retrive_ID.'">'.ucfirst($term_details->name).'<div class="clear"></div></li>';	
							++$iteration;
							}
							}
							$whole_structure.='</ul></div>';
		echo $whole_structure;

}
/***************************************************
Single Page Sidebar Slider ordering End
**************************************************/



  ?>					
				
				

