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
$new_key_value = 0;
$check = 0;

		foreach($chk_cat_term_id as $key => $req) {
		$args = array(
		'type'                     => 'product',
		'hide_empty'               => 0,
		'parent'                  => $req,
		'taxonomy'                 => 'product_cat',
		);
		$single_taxonomy = get_categories($args); 
		$whole_structure = "";
		$whole_structure_list = "";

		$count = count($single_taxonomy);
			if($count){
							foreach($single_taxonomy as $key => $single_taxonomy_cat){
							

	if($new_key_value!=0){
											$class = " gap30";
											 } 
//++$check;

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
		
		if(((($new_key_value%3)==0)&&($new_key_value>=3))||($new_key_value==0)){
//$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.' ">';
$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.'">';

}

		

		 $whole_structure.='<div class="checking1 new_key_value = '.$new_key_value.' col-md-4 over-Details-new"><div align="center">';

		$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
		$image = wp_get_attachment_url( $thumbnail_id ); 
		$array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
		$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');
		
    $name = preg_replace('/[\[{\(].*[\]}\)]/U' , '', $single_taxonomy_cat->name);

		$whole_structure.='<img src="'.$url[0].'" class="img-responsive" alt="#"></div><div align="center"><h6 class="text-center"><strong>'.$name.'</strong></h6>';
		

		$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
		$whole_structure.='<a href="#" class="text-center color-black">'.strip_shortcodes($string).'</a><div align="center" class="ga10"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div>';
		
		if(((($new_key_value+1)%3)==0)&&($new_key_value>=2)){
													//$whole_structure .='<br>new_key_value ='.$new_key_value;
								$whole_structure .='</div><div class="clearfix"></div>';
								if($new_key_value>0){
																$whole_structure .='<hr>';
																}

}
															

		//For list start
		    $name = preg_replace('/[\[{\(].*[\]}\)]/U' , '', $single_taxonomy_cat->name);

$whole_structure_list.='<div class="row"><div class="col-md-12 over-Details"><div class="row"><div class="col-md-2"><img src="'.$url[0].'" class="img-responsive" alt="#"></div>
<div class="col-md-10"><strong>'.$name.'</strong><br>';
$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
$whole_structure_list.='<a href="#" class="color-black">'.strip_shortcodes($string).'</a>
<div class="ga10 margin-bottom-20"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div></div></div><div class="clearfix"></div>';
		//For list End

								++$new_key_value;
		
		
			
			
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
		
		
		
if(((($new_key_value%3)==0)&&($new_key_value>=3))||($new_key_value==0)){
//$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.' ">';
$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.'">';

}

		$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
		$image = wp_get_attachment_url( $thumbnail_id ); 
		$array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
		$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');
		
    $name = preg_replace('/[\[{\(].*[\]}\)]/U' , '', $single_taxonomy_cat->name);

		$whole_structure.='<div class="checking2 new_key_value = '.$new_key_value.' col-md-4 over-Details-new"><div align="center"><img src="'.$url[0].'" class="img-responsive" alt="#"></div><div align="center"><h6 class="text-center"><strong>'.$name.'</strong></h6>';
		$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
		$whole_structure.='<a href="#" class="text-center color-black">'.strip_shortcodes($string).'</a><div align="center" class="ga10"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div>';
		
if(((($new_key_value+1)%3)==0)&&($new_key_value>=2)){
													//$whole_structure .='<br>new_key_value ='.$new_key_value;
								$whole_structure .='</div><div class="clearfix"></div>';
								if($new_key_value>0){
																$whole_structure .='<hr>';
																}

}
															
++$new_key_value;

		//For list start
		    $name = preg_replace('/[\[{\(].*[\]}\)]/U' , '', $single_taxonomy_cat->name);

$whole_structure_list.='<div class="row"><div class="col-md-12 over-Details"><div class="row"><div class="col-md-2"><img src="'.$url[0].'" class="img-responsive" alt="#"></div>
<div class="col-md-10"><strong>'.$name.'</strong><br>';
$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
$whole_structure_list.='<a href="#" class="color-black">'.strip_shortcodes($string).'</a>
<div class="ga10 margin-bottom-20"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div></div></div><div class="clearfix"></div>';
		//For list End
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
		

if(((($new_key_value%3)==0)&&($new_key_value>=3))||($new_key_value==0)){
//$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.' ">';
$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.'">';

}

	$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
		$image = wp_get_attachment_url( $thumbnail_id ); 
		$array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
		$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');
		
		    $name = preg_replace('/[\[{\(].*[\]}\)]/U' , '', $single_taxonomy_cat->name);

		$whole_structure.='<div class="checking3 new_key_value = '.$new_key_value.' col-md-4 over-Details-new"><div align="center"><img src="'.$url[0].'" class="img-responsive" alt="#"></div><div align="center"><h6 class="text-center"><strong>'.$name.'</strong></h6>';
		$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
		$whole_structure.='<a href="#" class="text-center color-black">'.strip_shortcodes($string).'</a><div align="center" class="ga10"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div>';
		
		if(((($new_key_value+1)%3)==0)&&($new_key_value>=2)){
													//$whole_structure .='<br>new_key_value ='.$new_key_value;
								$whole_structure .='</div><div class="clearfix"></div>';
								if($new_key_value>0){
																$whole_structure .='<hr>';
																}

}
															
		
								++$new_key_value;

		//For list start
$whole_structure_list.='<div class="row"><div class="col-md-12 over-Details"><div class="row"><div class="col-md-2"><img src="'.$url[0].'" class="img-responsive" alt="#"></div>
<div class="col-md-10"><strong>'.$name.'</strong><br>';
$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
$whole_structure_list.='<a href="#" class="color-black">'.strip_shortcodes($string).'</a>
<div class="ga10 margin-bottom-20"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div></div></div><div class="clearfix"></div>';
		//For list End
			
		}
							
							}
							}else{
							

if(((($new_key_value%3)==0)&&($new_key_value>=3))||($new_key_value==0)){
//$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.' ">';
$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.'">';

}

		$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
		$image = wp_get_attachment_url( $thumbnail_id ); 
		$array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
		$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');
		    $name = preg_replace('/[\[{\(].*[\]}\)]/U' , '', $single_taxonomy_cat->name);

		$whole_structure.='<div class="checking4 new_key_value = '.$new_key_value.' col-md-4 over-Details-new"><div align="center"><img src="'.$url[0].'" class="img-responsive" alt="#"></div><div align="center"><h6 class="text-center"><strong>'.$name.'</strong></h6>';
		$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
		$whole_structure.='<a href="#" class="text-center color-black">'.strip_shortcodes($string).'</a><div align="center" class="ga10"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div>';
		
		if(((($new_key_value+1)%3)==0)&&($new_key_value>=2)){
													//$whole_structure .='<br>new_key_value ='.$new_key_value;
								$whole_structure .='</div><div class="clearfix"></div>';
								if($new_key_value>0){
																$whole_structure .='<hr>';
																}

}
															
		
		
								++$new_key_value;

		//For list start
$whole_structure_list.='<div class="row"><div class="col-md-12 over-Details"><div class="row"><div class="col-md-2"><img src="'.$url[0].'" class="img-responsive" alt="#"></div>
<div class="col-md-10"><strong>'.$name.'</strong><br>';
$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
$whole_structure_list.='<a href="#" class="color-black">'.strip_shortcodes($string).'</a>
<div class="ga10 margin-bottom-20"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div></div></div><div class="clearfix"></div>';
		//For list End
							}
							
							++$check;
													


							}//foreach//(single taxonomy foreach end)
					// echo $whole_structure;
					// $whole_structure_list = "check";
					 		$div_content['grid']=$whole_structure;
		$div_content['list']=$whole_structure_list;
		//$form_content['val_req'] = $value_req;
		echo json_encode($div_content);

					//echo $for_periods;

			 }else {
 
echo "<div class='no-course'>No Courses Are Found</div>";
 }
 
 }//foreach
 }else {
 
 $new_key_value = 0;
 
 $check = 0;

 $args = array(
	'type'                     => 'product',
	'hide_empty'               => 0,
	'taxonomy'                 => 'product_cat',
);
$single_taxonomy = get_categories($args); 
$whole_structure = "";
$whole_structure_list = "";
						$count = count($single_taxonomy);
				if($count){
							foreach($single_taxonomy as $key => $single_taxonomy_cat){

	if($new_key_value!=0){
											$class = " gap30";
											 } 
//++$check;

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
				
if(((($new_key_value%3)==0)&&($new_key_value>=3))||($new_key_value==0)){
//$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.' ">';
$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.'">';


}


		$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
		$image = wp_get_attachment_url( $thumbnail_id ); 
		$array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
		$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');
		    $name = preg_replace('/[\[{\(].*[\]}\)]/U' , '', $single_taxonomy_cat->name);

		$whole_structure.='<div class="checking5 new_key_value = '.$new_key_value.' col-md-4 over-Details-new"><div align="center"><img src="'.$url[0].'" class="img-responsive" alt="#"></div><div align="center"><h6 class="text-center"><strong>'.$name.'</strong></h6>';
		$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
		$whole_structure.='<a href="#" class="text-center color-black">'.strip_shortcodes($string).'</a><div align="center" class="ga10"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div>';
		
		if(((($new_key_value+1)%3)==0)&&($new_key_value>=2)){
													//$whole_structure .='<br>new_key_value ='.$new_key_value;
								$whole_structure .='</div><div class="clearfix"></div>';
								if($new_key_value>0){
																$whole_structure .='<hr>';
																}

}
		
		++$new_key_value;

		//For list start
$whole_structure_list.='<div class="row"><div class="col-md-12 over-Details"><div class="row"><div class="col-md-2"><img src="'.$url[0].'" class="img-responsive" alt="#"></div>
<div class="col-md-10"><strong>'.$name.'</strong><br>';
$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
$whole_structure_list.='<a href="#" class="color-black">'.strip_shortcodes($string).'</a>
<div class="ga10 margin-bottom-20"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div></div></div><div class="clearfix"></div>';
		//For list End

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

		if(((($new_key_value%3)==0)&&($new_key_value>=3))||($new_key_value==0)){
//$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.' ">';
$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.'">';

}


		$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
		$image = wp_get_attachment_url( $thumbnail_id ); 
		$array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
		$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');
		    $name = preg_replace('/[\[{\(].*[\]}\)]/U' , '', $single_taxonomy_cat->name);

		$whole_structure.='<div class="checking6 new_key_value = '.$new_key_value.' col-md-4 over-Details-new"><div align="center"><img src="'.$url[0].'" class="img-responsive" alt="#"></div><div align="center"><h6 class="text-center"><strong>'.$name.'</strong></h6>';
		$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
		$whole_structure.='<a href="#" class="text-center color-black">'.strip_shortcodes($string).'</a><div align="center" class="ga10"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div>';
		
if(((($new_key_value+1)%3)==0)&&($new_key_value>=2)){
													//$whole_structure .='<br>new_key_value ='.$new_key_value;
								$whole_structure .='</div><div class="clearfix"></div>';
								if($new_key_value>0){
																$whole_structure .='<hr>';
																}

}
		++$new_key_value;

		//For list start
$whole_structure_list.='<div class="row"><div class="col-md-12 over-Details"><div class="row"><div class="col-md-2"><img src="'.$url[0].'" class="img-responsive" alt="#"></div>
<div class="col-md-10"><strong>'.$name.'</strong><br>';
$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
$whole_structure_list.='<a href="#" class="color-black">'.strip_shortcodes($string).'</a>
<div class="ga10 margin-bottom-20"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div></div></div><div class="clearfix"></div>';
		//For list End
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
		
		if(((($new_key_value%3)==0)&&($new_key_value>=3))||($new_key_value==0)){
//$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.' ">';
$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.'">';

}



		$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
		$image = wp_get_attachment_url( $thumbnail_id ); 
		$array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
		$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');
		
		    $name = preg_replace('/[\[{\(].*[\]}\)]/U' , '', $single_taxonomy_cat->name);


		$whole_structure.='<div class="checking7 new_key_value = '.$new_key_value.' col-md-4 over-Details-new"><div align="center"><img src="'.$url[0].'" class="img-responsive" alt="#"></div><div align="center"><h6 class="text-center"><strong>'.$name.'</strong></h6>';
		$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
		$whole_structure.='<a href="#" class="text-center color-black">'.strip_shortcodes($string).'</a><div align="center" class="ga10"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div>';
		
		if(((($new_key_value+1)%3)==0)&&($new_key_value>=2)){
													//$whole_structure .='<br>new_key_value ='.$new_key_value;
								$whole_structure .='</div><div class="clearfix"></div>';
								if($new_key_value>0){
																$whole_structure .='<hr>';
																}

}
		
		++$new_key_value;
		
		//For list start
$whole_structure_list.='<div class="row"><div class="col-md-12 over-Details"><div class="row"><div class="col-md-2"><img src="'.$url[0].'" class="img-responsive" alt="#"></div>
<div class="col-md-10"><strong>'.$name.'</strong><br>';
$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
$whole_structure_list.='<a href="#" class="color-black">'.strip_shortcodes($string).'</a>
<div class="ga10 margin-bottom-20"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div></div></div><div class="clearfix"></div>';
		//For list End
		}
							
							}
							}else{
							
		
if(((($new_key_value%3)==0)&&($new_key_value>=3))||($new_key_value==0)){
//$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.' ">';
$whole_structure.='<div class="row'.$class.' new_key_value ='.$new_key_value.'">';

}

		$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
		$image = wp_get_attachment_url( $thumbnail_id ); 
		$array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
		$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');
		    $name = preg_replace('/[\[{\(].*[\]}\)]/U' , '', $single_taxonomy_cat->name);

		$whole_structure.='<div class="checking8 new_key_value = '.$new_key_value.' col-md-4 over-Details-new"><div align="center"><img src="'.$url[0].'" class="img-responsive" alt="#"></div><div align="center"><h6 class="text-center"><strong>'.$name.'</strong></h6>';
		$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
		$whole_structure.='<a href="#" class="text-center color-black">'.strip_shortcodes($string).'</a><div align="center" class="ga10"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div>';
		
if(((($new_key_value+1)%3)==0)&&($new_key_value>=2)){
													//$whole_structure .='<br>new_key_value ='.$new_key_value;
								$whole_structure .='</div><div class="clearfix"></div>';
								if($new_key_value>0){
																$whole_structure .='<hr>';
																}

}
		++$new_key_value;

		//For list start
$whole_structure_list.='<div class="row"><div class="col-md-12 over-Details"><div class="row"><div class="col-md-2"><img src="'.$url[0].'" class="img-responsive" alt="#"></div>
<div class="col-md-10"><strong>'.$name.'</strong><br>';
$string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); 
$whole_structure_list.='<a href="#" class="color-black">'.strip_shortcodes($string).'</a>
<div class="ga10 margin-bottom-20"><a href="'.get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy).'"><img src="'.get_stylesheet_directory_uri().'/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div></div></div></div><div class="clearfix"></div>';
		//For list End
							}
							
																						
													++$check;


							}//foreach//(single taxonomy foreach end)
	
	
					// echo $whole_structure;
					// $whole_structure_list = "check";
					 		$div_content['grid']=$whole_structure;
		$div_content['list']=$whole_structure_list;
		//$form_content['val_req'] = $value_req;
		echo json_encode($div_content);
	 }else {
echo "<div class='no-course'>No Courses Are Found</div>";
 }

 
 }//chk_cat_term_id
 }
// 
///**************************************
//Home Page Course Finder Section Start
//**************************************/
//		if($_REQUEST['action']=='course_id') {
//		$course_id = $_REQUEST['f_course_id'];
//$post_id = $course_id;
//$post_link = get_permalink($post_id);
//$terms = wp_get_post_terms($post_id,'product_location');
//
//	$whole_structure.='<select class="location_selection" id="location_selection" name="location_selection"><option value="">Location</option>';
//		foreach($terms as $key => $val){ 
//		$whole_structure.='<option value="'.$val->term_id.'">'.$val->name.'</option>';
//	}
//	$whole_structure.='</select>';
//	$array['select_box']=$whole_structure;
//	$array['course_link']=$post_link;
////	echo json_encode($array);
//$array1 = $post_id;
//json_encode($array1);
//
//}
///**************************************
//Home Page Course Finder Section End
//**************************************/
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
				
				

