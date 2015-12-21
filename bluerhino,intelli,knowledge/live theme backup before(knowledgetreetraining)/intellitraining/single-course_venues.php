<?php get_header(); ?>
  <?php 
  	$home_url =  get_site_url();
	$current_page_url = get_permalink($post->ID);
?>

<h3 class="text-center gap30">London</h3>

<hr>
    
    <div class="clearfix"></div>
 <div class="row">
 <div class="col-md-3">
	<?php 
	$args = array(
	'type'                     => 'course_venues',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'taxonomy'                 => 'course_venue_categories',
	'hide_empty'               => 0,
	); 
	
	$categories = get_categories( $args );
	foreach($categories as $key => $category){
	$term_id_req = $category->term_id;
	?>
	<h6><strong><?php echo $category->name;	?></strong></h6>
		<?php
		$all_course_venues=get_posts(array(
		'post_type' => 'course_venues',
		'tax_query' => array(
		array(
		'taxonomy' => 'course_venue_categories',
		'field' => 'term_id',
		'terms' => $term_id_req)//taxonomy name id
		))
		);
		?>
		<ul class="nav nav-pills nav-stacked">
				<?php
				foreach ( $all_course_venues as $key => $course_venue ) { 
				?>
			<li><a href="<?php echo get_permalink($course_venue->ID)?>" class="navmenu-back"><i class="fa fa-check-square-o"></i> <?php echo $course_venue->post_title; ?></a></li>
				<?php }
				?>
				</ul>
				<?php
				 }
				 
				 ?>

	</div>
  <div class="col-md-9">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  	<?php  
	$content = get_post_field('post_content', $my_postid);
	$test = explode('"',$content);
	$galids = explode(',',$test[1]);
	if (strpos($content,'[gallery') === false){
	$count_val = 0;
	}else{
	$count_val = count($galids);
	}
	if($count_val>1) {
	?>
			<?php $clients_posts = get_posts(array('post_type' => 'clients', 'posts_per_page' => -1 ,'order' => 'ASC')); 
?>
  <ol class="carousel-indicators">
  <?php foreach($galids as $key => $galid){?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $key;?>" class="<?php if($key==0){?>active<?php } ?>"></li>
	<?php } ?>
  </ol>

  <!-- Wrapper for slides -->

  <div class="carousel-inner" role="listbox">
		<?php foreach($galids as $key => $galid){
		$fea_url = wp_get_attachment_image_src($galid, 'gallery_image_pages');?>
		    <div class="item <?php if($key==0){?>active<?php } ?>">
		<img src="<?php echo $fea_url[0]; ?>" />
		</div>
		<?php
		} 
		?>
  </div>
	<?php }else {?>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_venues.png" alt="">
	<?php }?>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<hr>
<p>
<?php   $my_postid = $post->ID;
$content_post = get_post($my_postid);
$content = get_post_field('post_content', $my_postid);
echo  strip_shortcodes( $content );
$test = explode('"',$content);
$galids = explode(',',$test[1]);
?>
</p>
<div class="clearfix"></div>

	<h4 class="gap30">
	<?php   $box1_title = get_post_meta( $post->ID, 'box1_title', true ); 
	if($box1_title){
	echo $box1_title; 
	}else{
	echo "Hotel Discount";
	}
	?><!--Hotel Discount-->
	</h4>
	<hr>
	<p>
	<?php
	echo $hotel_discount = get_post_meta( $post->ID, 'hotel_discount', true );
	?>
	<!--As many of our delegates travel from all over the UK & Ireland we have negotiated a special discount if you would like to stay in the hotel while the course is on. Please call us and we can help arrange this for you.-->
	</p>
<div class="clearfix"></div>

<div class="address-back">
<div class="row">
<div class="col-md-6">
<h4>
<?php   $box2_title = get_post_meta( $post->ID, 'box2_title', true );
if($box2_title){
echo $box2_title; 
}else{
echo "Address";
}
?>
<!--Address-->
</h4>
					<?php  echo $address = get_post_meta( $post->ID, 'address', true ); ?>

<!--Hilton Hyde Park<br>

129 Bayswater Road<br>

London<br>

W2 4RJ-->
</div>
<div class="col-md-6">
<?php
$map = get_post_meta( $post->ID, 'map', true );
if($map){
echo $map; 
}else{?>
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.156323539948!2d-0.18752300000000002!3d51.510348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760555f0b3e881%3A0x45acaf66879cfed9!2sHilton+London+Hyde+Park+Hotel!5e0!3m2!1sen!2s!4v1431081513955" width="100%" height="250" frameborder="0" style="border:0"></iframe><?php
}?>
</div>

</div>


</div>

<div class="clearfix"></div>

<div class="locations-back">

<h3 class="margintop45">Getting here</h3>

<div class="row">
<div class="col-md-6">
<div class="bg-white-rounded col-trend">
<div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rail_icon.png"  alt="Rail" class="img-responsive"></div>
<h5>
<?php $rail_title = get_post_meta($post->ID, 'rail_title', true);
				if($rail_title){
				echo $rail_title;
				}else{
				echo "By Rail";
				}
				?>
				<!--By Rail-->
				</h5>
<hr>
				<?php echo get_post_meta($post->ID, 'by_rail', true);  ?>

<!--<p><strong>Mainline </strong></p>
<p>London Paddington station is approximately 0.8 miles (15 minute walk) from the hotel. </p>
<p><strong>Underground (Tube) </strong></p>
<p><strong>Option 1:</strong> Take the Central line to Queensway. When you leave the station, turn tight onto Bayswater Road and you will see the hotel immediately.</p>
<p><strong>Option 2:</strong> Take the Circle or Disctrict Line to Bayswater station. Take a right when you leave the station and walk to Bayswater Road. Take a right at the junction and you will see the hotel on your right. </p>
<P>If you are planning to travel by public transport you should check the Transport for London (TFL) website a few days before the course, for planned engineering works and track closures. </P>-->
</div>
</div>


<div class="col-md-6">
<div class="bg-white-rounded col-trend">
<div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car-icon.png"  alt="Rail" class="img-responsive"></div>
<h5><?php $car_title = get_post_meta($post->ID, 'car_title', true);
				if($car_title){
				echo $car_title;
				}else{
				echo "By Car";
				}
				?><!--By Car-->
				</h5>
<hr>
				<?php echo get_post_meta($post->ID, 'by_car', true);  ?>

<!--<p>Parking is limited around the hotel but Q-Park Queensway do offer discounted rates on weekends. Roughly £24 for 2 days (weekend only) parking when booked in advance. </p>
<p>Simply Enter the Postcode into your SatNav and it should bring you straight to the venue - W2 4RJ, no. 129. </p>
<p><strong>Note:</strong> You can park for free on Sundays on Baywater Road on single yellow lines. NOT Saturdays though. Please check with Westminster Council for further details as restrictions can vary. </p>-->
</div></div>

</div>
  
  
  </div>
 
 </div>
  </div>
  </div>
    <!--main-content-end-->
    
    
    
    <div class="clearfix"></div>
	<?php get_footer(); ?>