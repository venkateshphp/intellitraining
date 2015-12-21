<?php 
/*********

Template Name: New Course Category Filteration


*********/

get_header(); ?>

<div class="container">
        <div class="row gap30">
        <div class="col-md-4">
  <div class="courses-panel-left">
  <h3 class="pull-left  blackcolor">Filters </h3>
  <a href="#" class="btn btn-md btn-black-line pull-right" id="clear_all">
Clear all</a>
<div class="clearfix"></div>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php	
		$taxonomy_names = get_object_taxonomies( 'product' );
		foreach($taxonomy_names as $key => $value) {
		$single_taxonomy = get_categories('taxonomy='.$value.'&type=product&hide_empty=0'); 
		$count = count($single_taxonomy);
		if($value=='product_location'){
		$val0 = $single_taxonomy[0];
		$val1 = $single_taxonomy[1];
		$val2 = $single_taxonomy[2];
		$val3 = $single_taxonomy[3];
		if($val3){
		$single_taxonomy[0] = $val3;
		}
		if($val0){
		$single_taxonomy[1] = $val0;
		}
		if($val1){
		$single_taxonomy[2] = $val1;
		}
		if($val2){
		$single_taxonomy[3] = $val2;
		}
		}
		?>
		<?php
		if(($value=='product_cat')||($value=='product_location')||($value=='course_periods')) {
		?>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading<?php echo $key;?>">
      <h4 class="panel-title">
        <a class="course-filteration" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key;?>" aria-expanded="true" aria-controls="collapse<?php echo $key;?>">
         <span class="glyphicon glyphicon-minus pull-right"></span>
          <!--Categories-->
		  <?php $term = get_taxonomy( $value);
		  $course_category_name = $term->labels->menu_name;
		  if($course_category_name == 'Categories'){
		  echo 'Course Categories';
		  }else{
		  echo $term->labels->menu_name;
		  }?>
        </a>
      </h4>
    </div>
    <div id="collapse<?php echo $key;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $key;?>">
      <div class="panel-body">
      	  <?php
				if($count){
				foreach($single_taxonomy as $key => $single_taxonomy_cat){
				if($value=='product_cat') {
				
				//For custom values Start
				
				 $box1 =  get_option('product_cat');
	             $retrive_box1 = explode("," ,$box1);
				 $cat_id = $single_taxonomy_cat->term_id;
				 				 				$single_taxonomy1 = get_categories('taxonomy=product_cat&type=product&parent='.$cat_id.'&hide_empty=0'); 
				$cat_count = count($single_taxonomy1);
				 if($box1) {
				 
				if (in_array($cat_id, $retrive_box1)) {
				 
				  ?>
      <label class="checkbox metro-checkbox">
                <input type="checkbox" value="<?php echo $value."|".$single_taxonomy_cat->term_id;?>" id="<?php echo $value;?>"/><span class='check'></span> <?php echo $single_taxonomy_cat->name." (".++$cat_count.")";?>
            </label>
            				  
<?php }
				//For custom values End

				 }else{
				
				
				if(($cat_id==10)||($cat_id==34)){
				?>
<label class="checkbox metro-checkbox">
<input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".$single_taxonomy_cat->term_id;?>" /><span class='check'></span><?php echo $single_taxonomy_cat->name." (".++$cat_count.")";?>	</label>
				
				<?php } 
				}
				
				}elseif($value=='product_location') {
				$cat_id = $single_taxonomy_cat->term_id;
				
				
				//For custom values Start
				
				 $box2 =  get_option('product_location');
	             $retrive_box2 = explode("," ,$box2);
				 $cat_id = $single_taxonomy_cat->term_id;
				 				 				$single_taxonomy1 = get_categories('taxonomy=product_cat&type=product&parent='.$cat_id.'&hide_empty=0'); 
				$cat_count = count($single_taxonomy1);
				 if($box2) {
				 
				if (in_array($cat_id, $retrive_box2)) {
				if($cat_id==20){ ?>
<label class="checkbox metro-checkbox">
<input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|online";?>" /><span class='check'></span><?php echo $single_taxonomy_cat->name;?>
</label>

				<?php
					}else { ?>
					
<label class="checkbox metro-checkbox">
<input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".strtolower($single_taxonomy_cat->slug);?>" /><span class='check'></span><?php echo $single_taxonomy_cat->name;?>
</label>

<?php
	 }
				}
				
				}else {
				if($cat_id==20){ ?>
<label class="checkbox metro-checkbox">
<input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|online";?>" /><span class='check'></span><?php echo $single_taxonomy_cat->name;?>
</label>
				<?php
					}else { ?>
<label class="checkbox metro-checkbox">
<input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".strtolower($single_taxonomy_cat->slug);?>" /><span class='check'></span><?php echo $single_taxonomy_cat->name;?>
</label>

<?php
	 }
	}
}elseif($value=='course_periods') {	

//For custom values Start
				
				 $box3 =  get_option('course_periods');
	             $retrive_box3 = explode("," ,$box3);
				 $cat_id = $single_taxonomy_cat->term_id;
				 				 				$single_taxonomy1 = get_categories('taxonomy=product_cat&type=product&parent='.$cat_id.'&hide_empty=0'); 
				$cat_count = count($single_taxonomy1);
				 if($box2) {
				 
				if (in_array($cat_id, $retrive_box3)) {
				?>
<label class="checkbox metro-checkbox">
<input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".strtolower($single_taxonomy_cat->slug);?>" /><span class='check'></span><?php echo $single_taxonomy_cat->name;?>
</label>

					<?php 
				}
				}else{

?>
<label class="checkbox metro-checkbox">
<input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".strtolower($single_taxonomy_cat->slug);?>" /><span class='check'></span><?php echo $single_taxonomy_cat->name;?>
</label>

					<?php 
					
					}
					}
	
					}
				}	 ?>
            
            
     
      </div>
    </div>
  </div>
  <?php } } ?>
  
  
</div>


<!--form-start-here-->
<!--sidebar-start-here-->
                     									  <?php include(TEMPLATEPATH."/sidebar-in-courses-page-new.php");?>

<!--sidebar-end-here-->


  
  </div>
  
  
  </div>
        
        
        
        <div class="col-md-8">
  <h3 class="pull-left blackcolor"> <i class="fa fa-desktop"></i> Courses
 </h3>
 <div class="pull-right ga10"><a href="#"><i id="list" class="fa fa-list fa-lg"></i>
</a> <a href="#"><i id="grid" class="fa fa-th fa-lg"></i>
</a></div>
<div class="clearfix"></div>
<hr>

<div class="clearfix"></div>
  
  <div class="filtered_product_part_grid">
  		<?php
			$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
			$count = count($single_taxonomy);
			if($count){
			/*	foreach($single_taxonomy as $key => $single_taxonomy_cat){*/
				$newArray = array_chunk($single_taxonomy, 3, false);
foreach($newArray as $key => $single_taxonomy_cat) {
?>
				  <div class="row <?php if($key!=0){ ?>gap30<?php } ?>">

<?php
while (list($key, $value_new) = each($single_taxonomy_cat)) {
/*echo "<pre>";
print_r($single_taxonomy_cat);
echo "</pre>";
*/
				$cat_id = $single_taxonomy_cat[$key]->term_id;
				?>

  <div class="col-md-4 over-Details-new">
  <div align="center">
  <?php $thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat[$key]->term_id, 'thumbnail_id', true ); 
						// get the image URL
						$image = wp_get_attachment_url( $thumbnail_id ); 
				        $array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
						$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');
						?>
  <img src="<?php echo $url[0];?>" class="img-responsive" alt="#"></div>
  <div align="center">
  <h6 class="text-center"><strong><?php
 
  $name = $single_taxonomy_cat[$key]->name;
  echo preg_replace('/[\[{\(].*[\]}\)]/U' , '', $name);

  ?><!--PRINCE2--></strong></h6>
	<a href="#" class="text-center color-black">
	<?php $string = wp_trim_words( $single_taxonomy_cat[$key]->category_description, 10 ); //echo $string;
	echo strip_shortcodes( $string );
	?>
	<!--All Locations & Dates--> 
	</a>
 <div align="center" class="ga10"><a class="btn btn-md btn-black-line" href="<?php echo get_term_link($single_taxonomy_cat[$key]->slug, $single_taxonomy_cat[$key]->taxonomy);?>"> <i class="fa fa-check-square-o"></i>View More</a></div>
  
  </div>
  </div>
  <?php 
				}
				?>
				</div>
				<div class="clearfix"></div>
  <hr>
				<?php 
				}
				?>
				  
				<?php
			}else{
			echo "<div class='no-course'>No Courses Are Found</div>";
			}
			?>			
			
  </div><!--row--><!--filtered_product_part_grid-->
  				  <div class="filtered_product_part_list">
	
	<?php
				$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
				$count = count($single_taxonomy);
				if($count){
					foreach($single_taxonomy as $key => $single_taxonomy_cat){
									$cat_id = $single_taxonomy_cat->term_id;
									
	$thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
	// get the image URL
	$image = wp_get_attachment_url( $thumbnail_id ); 
	$array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
	$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');
							?>
	<div class="row">
	<div class="col-md-12 over-Details">
	<div class="row">
	<div class="col-md-2"><img src="<?php echo $url[0];?>" class="img-responsive" alt="#"></div>
	<div class="col-md-10"><strong><?php
	  $name = $single_taxonomy_cat->name;
	  echo preg_replace('/[\[{\(].*[\]}\)]/U' , '', $name);
	 
	 ?><!--PRINCE2 Foundation & Practitioner--></strong><br>
	<a href="#" class="color-black"><?php $string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); //echo $string;
		echo strip_shortcodes( $string );
		?><!--All Locations & Dates --></a>
	<div class="ga10 margin-bottom-20"><a class="btn btn-md btn-black-line" href="<?php echo get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy);?>"> <i class="fa fa-check-square-o"></i>
 View More</a></div></div>
	</div>
	</div>
	</div>
	
	<div class="clearfix"></div>
		<?php } }?>
	  </div><!--filtered_product_part_list-->

  
  
  
  </div>
        
        
        </div>
        
        
        
        
        </div>
	
<?php get_footer(); ?>