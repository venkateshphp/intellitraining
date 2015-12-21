<?php 
/*********

Template Name: Template For Category Filteration


*********/

get_header(); ?>

<?php /*?><div class="submenu-bg"> 
    <div class="container">
        <div class="wrapper">
            <div class="submenu">
			 <ul>
			<?php $child_pages = get_pages( array( 'parent' => 23, 'child_of' => 23, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) ); 
								foreach($child_pages as $key => $child_page){ ?>
           
            <li><a class="<?php if($child_page->ID==307) {echo 'first_sub_menu';}?>" href="<?php echo get_permalink($child_page->ID);?>"><?php echo $child_page->post_title;?></a>
			<?php $child_pages1 = get_pages( array( 'child_of' => $child_page->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );
			$sub_pages_count = count($child_pages1);
			if($sub_pages_count) {
			 ?>
<ul class="inner_submenu">
<?php 
foreach($child_pages1 as $key => $child_page1){ ?>
<li><a href="<?php echo get_permalink($child_page1->ID);?>"><?php echo $child_page1->post_title;?></a></li> <?php } ?>
</ul>
								<?php } ?>
								</li>
			
			<?php } ?>
            <ul>
            </div>
        </div>
    </div>
</div><?php */?>

<div class=" container">
             <div class="wrapper">
<?php
			/* $single_taxonomy1 = get_categories('taxonomy=product_cat&type=product&parent=10&hide_empty=0'); 
			 echo "<pre>";
			 print_r($single_taxonomy1);
			 echo "</pre>";*/
			 ?>
                 <div class="course-inner-bd">
			<!--For add the content start-->	 
			<?php if (have_posts()) { while (have_posts()) { the_post();
			 ?>
			 <h2><?php echo $post->post_title;?></h2>
			 <hr>
				<div class="page-content">
			<?php the_content();?>
				</div>		
				<?php } } ?>
			<!--For add the content end-->	 
                     <div class="lt-categories">
                     <h3>Filters <span class="for_float_right"> <div class="clear_btn" id="clear_all"> Clear all</div></span></h3>
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
		
		if(($value=='product_cat')||($value=='product_location')||($value=='course_periods')) {
		?>
                     <h4><?php $term = get_taxonomy( $value);echo $term->labels->menu_name;?><span id="<?php echo $key;?>" <?php /*?>href="#collapse<?php echo $key;?>"<?php */?> class="nav-toggle toggle_icon">-</span></h4>
                     
                      <ul id="collapse<?php echo $key;?>" class="category-listing">
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
				 <li><input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".$single_taxonomy_cat->term_id;?>" /><?php echo $single_taxonomy_cat->name." (".++$cat_count.")";?></li><br>
<?php }
				//For custom values End

				 }else{
				
				
				if(($cat_id==10)||($cat_id==34)){
				?>
<li><input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".$single_taxonomy_cat->term_id;?>" /><?php echo $single_taxonomy_cat->name." (".++$cat_count.")";?></li><br>
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
<li><input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|online";?>" /><?php echo $single_taxonomy_cat->name;?></li><br><br>
				<?php
					}else { ?>
<li><input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".strtolower($single_taxonomy_cat->slug);?>" /><?php echo $single_taxonomy_cat->name;?></li><br>
<?php
	 }
				}
				
				}else {
				if($cat_id==20){ ?>
<li><input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|online";?>" /><?php echo $single_taxonomy_cat->name;?></li><br><br>
				<?php
					}else { ?>
<li><input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".strtolower($single_taxonomy_cat->slug);?>" /><?php echo $single_taxonomy_cat->name;?></li><br>
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
<li><input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".strtolower($single_taxonomy_cat->slug);?>" /><?php echo $single_taxonomy_cat->name;?></li><br>
					<?php 
				}
				}else{

?>
<li><input type="checkbox" id="<?php echo $value;?>" value="<?php echo $value."|".strtolower($single_taxonomy_cat->slug);?>" /><?php echo $single_taxonomy_cat->name;?></li><br>
					<?php 
					
					}
					}
	
					}
				}	 ?>
                        
                       </ul>
        	<?php
		}
    }
?>          
                              									  <span class="margin_top"><?php include(TEMPLATEPATH."/sidebar-in-courses-page.php");?></span>
  
                     </div><!--lt-categories-->
            
                     <div class="course-mid">
                     <h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-led.png" alt=""> Courses</h3>
					 <!--added new  for gridlist start-->
<div class="gridlist">
	<a href="#" id="list" class="list_btn"><span class="glyphicon glyphicon-th-list"></span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/list_icon.png" height="20" width="20" alt=""/></a>
	<a href="#" id="grid" class="grid_btn"><span class="glyphicon glyphicon-th"></span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/grid_icon.png" width="20" height="20" alt=""/></a>
</div>
					 <!--added new  for gridlist start-->
					 
			<div class="filtered_product_part">
			<?php
			$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
			$count = count($single_taxonomy);
			if($count){
				foreach($single_taxonomy as $key => $single_taxonomy_cat){
				$cat_id = $single_taxonomy_cat->term_id;
				/*if(($cat_id==63)||($cat_id==64)||($cat_id==65)||($cat_id==66)||($cat_id==41)||($cat_id==42)||($cat_id==43)||($cat_id==44)||($cat_id==45)||($cat_id==46)||($cat_id==47)||($cat_id==48)||($cat_id==49)||($cat_id==38)||($cat_id==39)||($cat_id==40)||($cat_id==46)||($cat_id==50)||($cat_id==51)||($cat_id==52)||($cat_id==53)||($cat_id==54)||($cat_id==55)||($cat_id==56)||($cat_id==57)||($cat_id==58)){*/
				?>
						<a href="<?php echo get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy);?>"><div class="over-Details">
						<div class="product">
						<?php $thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
						// get the image URL
						$image = wp_get_attachment_url( $thumbnail_id ); 
						/*echo "check medium size ="*/$array_val[0] = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img' ); 
						//$img = $array_val[0];
						/*echo "<pre>";
						print_r($array_val);
						echo "</pre>";*/
						
						$url = wp_get_attachment_image_src( $thumbnail_id, 'course_cat_img');


						?><img src="<?php echo $url[0];?>"/>
						</div><!--product-->
						<div class="pro-detail">
						<h4><?php echo $single_taxonomy_cat->name/*."slug = ".$single_taxonomy_cat->slug*/;?></h4>
						<p><?php $string = wp_trim_words( $single_taxonomy_cat->category_description, 10 ); //echo $string;
						echo strip_shortcodes( $string );
						?>
						</p>
						<div class="accred_div_card">
						<span class="icon_right vertical_tab_icon"></span>
						<span class="accred_title"> View courses
						</span>
						</div>
						<!--                          <p>Lorem ipsum dolor sit amet, elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.Integer nec odio. Praesent libero.</p>
						-->              </div><!--pro-detail-->
						</div></a><!--over-Details-->
				
				<?php 
				//}
				}
			}else{
			echo "<div class='no-course'>No Courses Are Found</div>";
			}
			?>					
			</div><!--filtered_product_part-->
                     </div><!--course-mid-->
                     
                     									  <?php //include(TEMPLATEPATH."/sidebar-in-courses-page.php");?>

                    
                    
                    
                 </div>
             </div>
        </div><!-- container -->
	
	
	
<?php get_footer(); ?>