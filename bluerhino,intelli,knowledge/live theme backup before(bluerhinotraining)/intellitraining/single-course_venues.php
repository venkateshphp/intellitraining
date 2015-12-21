<?php get_header(); ?>
  <?php 
  	$home_url =  get_site_url();
	$current_page_url = get_permalink($post->ID);
?>


<div class="clearfix"></div>
        <!-- End Intro Section -->


        <!-- Sidebar Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">
                <div class="row gap30">
                    <div class="col-md-3 col-sm-4 mt-xs-30">

                        <div class="sidebar-widget">
						<?php 
	$args = array(
	'type'                     => 'course_venues',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'taxonomy'                 => 'course_venue_categories',
	'hide_empty'               => 0,
	); 
	
	$categories = get_categories( $args );
	$iteration = 0;
	foreach($categories as $key => $category){
	$term_id_req = $category->term_id;
	?>
						
                            <h5 class="<?php if($iteration!=0){?>gap30<?php } ?>"><?php echo $category->name;	?></h5>
	
							<?php
								++$iteration;
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
                            <hr>
                            <ul>
							
							<?php
				foreach ( $all_course_venues as $key => $course_venue ) { 
				?>
			<li><a href="<?php echo get_permalink($course_venue->ID)?>"><i class="fa fa-check-square-o"></i> <?php echo $course_venue->post_title; ?></a></li>
				<?php }
				?>
				</ul>
				<?php
				 }
				 
				 ?>
                        </div>
                    </div>
					
					
                    <div class="col-md-9 col-sm-8">
                   <!--Image Slider-->
        <section class="ptb ptb-sm-80">
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
			$clients_posts = get_posts(array('post_type' => 'clients', 'posts_per_page' => -1 ,'order' => 'ASC')); 
			?>
			<div class="owl-carousel image-slider o-flow-hidden">
			
			
			<?php foreach($galids as $key => $galid){
		$fea_url = wp_get_attachment_image_src($galid, 'gallery_image_pages');?>
		    <div class="item">
		<img src="<?php echo $fea_url[0]; ?>" />
		</div>
		<?php
		} 
		?>
			<?php }else{ ?>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_venues.png" alt="">
            <?php } ?>
			            </div>

        </section>
        <!-- End Image Slider-->
        
        
        <div class="clearfix"></div>
        
        <h5>
		<?php   $box1_title = get_post_meta( $post->ID, 'box1_title', true ); 
		if($box1_title){
		echo $box1_title; 
		}else{
		echo "Hotel Discount";
		}
		?>
	</h5>
        <hr>
        <p>
		<?php
	 $hotel_discount = get_post_meta( $post->ID, 'hotel_discount', true );
	if($hotel_discount) {
		echo $hotel_discount;
      }else{
	?>
		As many of our delegates travel from all over the UK & Ireland we have negotiated a special discount if you would like to stay in the hotel while the course is on. Please call us and we can help arrange this for you.
		<?php } ?>
		</p>
        
        <div class="clearfix"></div>
        
        <div class="address-back">
<div class="row">
<div class="col-md-6">
<h5>
<?php   $box2_title = get_post_meta( $post->ID, 'box2_title', true );
if($box2_title){
echo $box2_title; 
}else{
echo "Address";
}
?>
</h5>

					<?php   $address = get_post_meta( $post->ID, 'address', true );
					
					if($address){
					echo $address;
					}else{
					 ?>

Hilton Hyde Park<br>

129 Bayswater Road<br>

London<br>

W2 4RJ
<?php } ?>

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

<div class="lightbacknew">
<h5>Getting here</h5>

<div class="clearfix"></div>

  <div class="tabs">
                            <ul>
                                <li><a href="#tabs-1"><i class="fa fa-train fa-2x"></i>
					<?php $rail_title = get_post_meta($post->ID, 'rail_title', true);
					if($rail_title){
					echo $rail_title;
					}else{
					echo "By Rail";
					}
					?>		
				</a></li>
                                <li><a href="#tabs-2"><i class="fa fa-car fa-2x"></i>
					<?php $car_title = get_post_meta($post->ID, 'car_title', true);
					if($car_title){
					echo $car_title;
					}else{
					echo "By Car";
					}
					?><!--By Car-->
				</a></li>
                            </ul>
                            <div class="ui-tab-content">
                                <div id="tabs-1">
						<?php echo $by_rail_content = get_post_meta($post->ID, 'by_rail', true);
						if($by_rail_content) {
						echo $by_rail_content;
						}else{
						?>
								
                                <h5>Mainline </h5>
                                    <p>London Paddington station is approximately 0.8 miles (15 minute walk) from the hotel. </p>
                                  <h5>Underground (Tube) </h5>
                                    <p><strong>Option 1: </strong>Take the Central line to Queensway. When you leave the station, turn tight onto Bayswater Road and you will see the hotel immediately.</p>
                                    <p><strong>Option 2:</strong> Take the Circle or Disctrict Line to Bayswater station. Take a right when you leave the station and walk to Bayswater Road. Take a right at the junction and you will see the hotel on your right. </p>
                                    <p>If you are planning to travel by public transport you should check the Transport for London (TFL) website a few days before the course, for planned engineering works and track closures. </p>
					<?php } ?>				
									
                                </div>
                                <div id="tabs-2">
             <?php $by_car_content =  get_post_meta($post->ID, 'by_car', true);  
			 if($by_car_content) {
			 echo $by_car_content;
			 }else{
			 ?>                   
                                    <p>Parking is limited around the hotel but Q-Park Queensway do offer discounted rates on weekends. Roughly £24 for 2 days (weekend only) parking when booked in advance. </p>
                                    <p>Simply Enter the Postcode into your SatNav and it should bring you straight to the venue - W2 4RJ, no. 129. </p>
                                    <P><strong>Note:</strong> You can park for free on Sundays on Baywater Road on single yellow lines. NOT Saturdays though. Please check with Westminster Council for further details as restrictions can vary. </P>
				<?php } ?>
                                </div>
                            </div>
                        </div>

</div>
                    </div>
                </div>

            </div>
        
        <!-- End Sidebar Section -->
		
		
	
	<?php get_footer(); ?>