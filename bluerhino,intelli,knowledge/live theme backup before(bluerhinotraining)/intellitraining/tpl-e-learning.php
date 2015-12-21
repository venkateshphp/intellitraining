<?php 
/*********

Template Name: New Template For E-Learning


*********/
get_header();

				$details = get_queried_object();
				$post_id = $details->ID;

?>

<h3>
<?php
					$post_title =  get_post_meta( $post->ID, 'page_custom_title', true );
					if($post_title) {
					echo $post_title;
					}else{
					echo $post->post_title;
					}
					?>

</h3>
  <div class="row">
  
  
  <div class="col-md-8">
  
  	<div class="page-content"><p>
	<?php  $my_postid = $post->ID;
	$content_post = get_post($my_postid);
	$content = get_post_field('post_content', $my_postid);
	echo  strip_shortcodes( $content );
	?></p>
	</div><!--page-content-->	
  <hr>

						<h4>Key Features</h4>
						<div class="key_fea_section">
											<?php
											$elearning_fea_text_array =  explode(',',get_option('elearning_fea_text'));
					if($elearning_fea_text_array) {
					foreach($elearning_fea_text_array as $key => $values){
					$key_fea_title = $values;
					if($key==0){?><p style="margin:2% 0;"><div class="col-lg-6"><ul><?php }elseif($key==3){?><div class="col-lg-6"><ul style="border:none;"><?php }
					?>
					
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tick1.png" alt="" height="30" width="30"></span> <?php echo $key_fea_title; ?> </li>
								 <?php
								 if($key==2){?></ul></div><?php }elseif($key==5){?></ul></div></p><?php }
				   }
				  }
				  ?>
						</div>
						<!--video section start-->
						<div class="video_section"><p style="margin:2% 0;">
						<?php 
							$video_elearing = get_option('video_elearing');
						echo $video_elearing;
						 ?>
						</p></div>
						<!--video section end-->
						<!--description section start-->
						<div class="need_help_part" style="border:2px solid #EEEEEE; border-radius:3px; padding:2%"><p style="margin:2% 0;">
						<?php  
						$elearning_description = get_option('elearning_description');
						if($elearning_description){
						echo $elearning_description;
						}
			?>
					</p>	</div>
						<!--description section end-->
						<div class="clearfix"></div>

						<!--online section start-->
<div role="tabpanel" class="tab-part">

<!-- Nav tabs -->
<?php 
$categories_elearning = get_option('categories_elearning');
$categories_values = explode(',',$categories_elearning);

if($categories_elearning) { ?>
<ul class="nav nav-tabs" role="tablist">
<?php 
$req_array_for_tab = array_reverse($categories_values);
foreach($req_array_for_tab as $key => $value) { ?>
<li role="presentation" <?php if($key==0){?>class="active"<?php } ?>><a href="#<?php echo $key;?>" aria-controls="home" role="tab" data-toggle="tab">
<?php $cat_values = get_term_by('id',$value,'product_cat'); echo $cat_values->name;?></a></li>
<?php } ?>
</ul>
<!-- Tab panes -->
<div class="tab-content">
<?php 
$req_array_for_tab1 = array_reverse($categories_values);
foreach($req_array_for_tab1 as $key => $val) { 
?>
		<div role="tabpanel" class="tab-pane <?php if($key==0){?>active<?php }?>" id="<?php echo $key;?>"><div role="tabpanel">
		
<p><?php 
$cat_values = get_term_by('id',$val,'product_cat');
$args = array(
'type'                     => 'product',
'hide_empty'               => 0,
'parent'                  => $cat_values->term_id,
'taxonomy'                 => 'product_cat',
);
$single_taxonomy = get_categories($args); 
/*echo "<pre>";
print_r($single_taxonomy);
echo "</pre>";*/
$check=0;
foreach($single_taxonomy as $key => $value){
if (strpos($value->slug,'online') == true) {
++$check;
?>
<a href="<?php echo get_term_link($value->slug, $value->taxonomy);?>">

<div class="row">
<div class="col-md-12 over-Details">
<div class="row">
<?php $thumbnail_id = get_woocommerce_term_meta( $value->term_id, 'thumbnail_id', true ); $image = wp_get_attachment_url( $thumbnail_id ); ?>

<div class="col-md-2"><img src="<?php echo $image;?>" class="img-responsive" alt="#"></div>
<div class="col-md-10"><strong><?php echo $value->name;?></strong><br>
  <a href="#" class="color-black"><?php $string = wp_trim_words( $value->category_description, 10 ); echo strip_shortcodes( $string ); ?></a>
 <div class="ga10 margin-bottom-20"><a href="<?php echo get_term_link($value->slug, $value->taxonomy);?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/viewcourses-btrn.png" class="img-responsive" alt="#" border="0"></a></div></div>
</div>
</div>
</div>

<div class="clearfix"></div>











</a><!--over-Details-->
<?php } }
if($check==0){?>
<strong>Elearning Course Sub Categories Are Not Found.</strong>
<?php }


 ?>
</p>
		</div>
		</div>
<?php } ?>
</div>
<?php } ?>
</div>

<div class="online_sec course-mid filtered_product_part" id="ChildVerticalTab_1">
<?php 
$categories_elearning = get_option('categories_elearning');
$categories_values = explode(',',$categories_elearning);

if($categories_elearning) { ?>
<div id="tabs">
<ul class="resp-tabs-list ver_1">
<?php 
$req_array_for_tab = array_reverse($categories_values);
foreach($req_array_for_tab as $key => $value) { ?>
<li><a href="#tabs-<?php echo $key;?>">
<?php 
$cat_values = get_term_by('id',$value,'product_cat');
echo $cat_values->name;?></a></li>
<?php } ?>
</ul>
<div class="resp-tabs-container ver_1">
<?php 
$req_array_for_tab1 = array_reverse($categories_values);

foreach($req_array_for_tab1 as $key => $val) { 


?>
<div id="tabs-<?php echo $key;?>">
<p><?php 
$cat_values = get_term_by('id',$val,'product_cat');
$args = array(
'type'                     => 'product',
'hide_empty'               => 0,
'parent'                  => $cat_values->term_id,
'taxonomy'                 => 'product_cat',
);
$single_taxonomy = get_categories($args); 
foreach($single_taxonomy as $key => $value){
if (strpos($value->slug,'online') !== false) {
?>
<a href="<?php echo get_term_link($value->slug, $value->taxonomy);?>"><div class="over-Details">
<div class="product">
<?php $thumbnail_id = get_woocommerce_term_meta( $value->term_id, 'thumbnail_id', true ); 
// get the image URL
$image = wp_get_attachment_url( $thumbnail_id ); 
?><img src="<?php echo $image;?>"/>
</div><!--product-->
<div class="pro-detail">
<h4><?php echo $value->name;?></h4>
<p><?php $string = wp_trim_words( $value->category_description, 10 ); //echo $string;
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
<?php } } ?>
</p>
</div>
<?php } ?>

</div><!--resp-tabs-container ver_1-->
</div>

<?php } ?>					
</div><!--online_sec-->
						<!--online section end-->
						
  
  
  </div>
  
  <div class="col-md-4">
  <div class="courses-panel-left">

<!--form-start-here-->
                     									  <?php include(TEMPLATEPATH."/sidebar-new.php");?>








  
  </div>
  
  
  </div>
  </div>
 
    
    
    
  </div>
    <!--main-content-end-->
    
    
    
    
<?php get_footer(); ?>


<?php /*?>	<div class="container">
				<div class="wrapper">
				
					<div class="main-bd">
					<!--For add the content start-->	 
					<?php 
					$details = get_queried_object();
					$post_id = $details->ID;
					?>
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
						<div class="page-content">
					<?php  $my_postid = $post->ID;
					$content_post = get_post($my_postid);
					 $content = get_post_field('post_content', $my_postid);
					echo  strip_shortcodes( $content );
					?>
						</div><!--page-content-->		
						<?php  ?>
					<!--For add the content end-->	 
						<div class="main-bd-lt">
							<h4>Key Features</h4>
							<div class="listkeayf">
												<?php
												$elearning_fea_text_array =  explode(',',get_option('elearning_fea_text'));
						if($elearning_fea_text_array) {
						foreach($elearning_fea_text_array as $key => $values){
						$key_fea_title = $values;
						if($key==0){?><ul><?php }elseif($key==3){?><ul style="border:none;"><?php }
						?>
						
									<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tick1.png" alt="" height="30" width="30"></span> <?php echo $key_fea_title; ?> </li>
									 <?php
									 if($key==2){?></ul><?php }elseif($key==5){?></ul><?php }
					   }
					  }
					  ?>
							</div>
							<!--video section start-->
							<div class="video_section">
							<?php 
								$video_elearing = get_option('video_elearing');
							echo $video_elearing;
							 ?>
							</div>
							<!--video section end-->
							<!--description section start-->
							<div class="need_help_part">
							<?php  
							$elearning_description = get_option('elearning_description');
							if($elearning_description){
							echo $elearning_description;
							}
				?>
							</div>
							<!--description section end-->
							<!--online section start-->
							<div class="online_sec course-mid filtered_product_part" id="ChildVerticalTab_1">
							<?php 
															 $categories_elearning = get_option('categories_elearning');
															 $categories_values = explode(',',$categories_elearning);
															 
	 if($categories_elearning) { ?>
							<div id="tabs">
	  <ul class="resp-tabs-list ver_1">
	  <?php 
	 $req_array_for_tab = array_reverse($categories_values);
	  foreach($req_array_for_tab as $key => $value) { ?>
		<li><a href="#tabs-<?php echo $key;?>">
		<?php 
		$cat_values = get_term_by('id',$value,'product_cat');
		echo $cat_values->name;?></a></li>
		<?php } ?>
	  </ul>
				<div class="resp-tabs-container ver_1">
	   <?php 
		$req_array_for_tab1 = array_reverse($categories_values);
	
	   foreach($req_array_for_tab1 as $key => $val) { 
	   
	   
	   ?>
	  <div id="tabs-<?php echo $key;?>">
		<p><?php 
			$cat_values = get_term_by('id',$val,'product_cat');
							$args = array(
							'type'                     => 'product',
							'hide_empty'               => 0,
							'parent'                  => $cat_values->term_id,
							'taxonomy'                 => 'product_cat',
							);
							$single_taxonomy = get_categories($args); 
							foreach($single_taxonomy as $key => $value){
					if (strpos($value->slug,'online') !== false) {
					?>
											<a href="<?php echo get_term_link($value->slug, $value->taxonomy);?>"><div class="over-Details">
							<div class="product">
							<?php $thumbnail_id = get_woocommerce_term_meta( $value->term_id, 'thumbnail_id', true ); 
							// get the image URL
							$image = wp_get_attachment_url( $thumbnail_id ); 
							?><img src="<?php echo $image;?>"/>
							</div><!--product-->
							<div class="pro-detail">
							<h4><?php echo $value->name;?></h4>
							<p><?php $string = wp_trim_words( $value->category_description, 10 ); //echo $string;
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
							<?php } } ?>
							</p>
	  </div>
	  <?php } ?>
	  
	  </div><!--resp-tabs-container ver_1-->
	</div>
							
		<?php } ?>					
							</div><!--online_sec-->
							<!--online section end-->
							
						</div><!--main-bd-lt-->
										  <?php include(TEMPLATEPATH."/sidebar.php");?>
	
					</div><!--main-bd-->
				</div><!--wrapper-->
			</div><!--container-->
<?php */?><?php 
get_footer();
?>
