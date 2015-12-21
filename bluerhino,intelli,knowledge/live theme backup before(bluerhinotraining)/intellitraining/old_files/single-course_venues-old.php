<?php get_header(); ?>
	<div class="container">
		<div class="wrapper">
			<div class="venues_inner_bd">
				<h1><?php echo get_the_title();?></h1>
				<div class="lt-menu">
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
				$term_id_req = $category->term_id;?>
				<h2><?php echo $category->name; ?></h2>
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
					<ul>
					<?php foreach ( $all_course_venues as $key => $course_venue ) { ?>
					<li><a href="<?php echo get_permalink($course_venue->ID)?>"><?php echo $course_venue->post_title; ?></a></li>
					<?php } ?>
					</ul>
				<?php }  ?>
				<!--newly added fqs end--> 
				</div>
				<div class="rt-slider">
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
					<div class="flipster">
					<!--<div id="carousel">-->
					<?php $clients_posts = get_posts(array('post_type' => 'clients', 'posts_per_page' => -1 ,'order' => 'ASC')); 
					echo '<ul>';
					foreach($galids as $key => $galid){
					$fea_url = wp_get_attachment_image_src($galid, 'carousel_slider_img');?>
					<li><a href="#" class="Button Block"><img src="<?php echo $fea_url[0]; ?>" /></a></li>
					<?php } 
					echo '</ul>';
					?>
					<!--</div>-->
					</div><!--flipster-->
				<?php }else {?>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_venues.png" alt="">
				<?php }?>
				<p><?php   $my_postid = $post->ID;
				$content_post = get_post($my_postid);
				$content = get_post_field('post_content', $my_postid);
				echo  strip_shortcodes( $content );
				$test = explode('"',$content);
				$galids = explode(',',$test[1]);
				?>
				</p>
				<h3><!--Hotel Discount--> <?php   $box1_title = get_post_meta( $post->ID, 'box1_title', true ); 
				if($box1_title){
				echo $box1_title; 
				}else{
				echo "Hotel Discount";
				}
				?></h3>
				<p><?php
				echo $hotel_discount = get_post_meta( $post->ID, 'hotel_discount', true );
				?></p>
					<div class="address">
					<h3><!--Address-->	<?php   $box2_title = get_post_meta( $post->ID, 'box2_title', true );
					if($box2_title){
					echo $box2_title; 
					}else{
					echo "Address";
					}
					?></h3>
					<?php  echo $address = get_post_meta( $post->ID, 'address', true ); ?>
					</div>
					<div class="mapping">
					<p><?php
					$map = get_post_meta( $post->ID, 'map', true );
					if($map){
					echo $map; 
					}else{?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map-image.png" alt="">
					<?php
					}?></p>
					</div>
				</div>
				<div class="getting_here">
				<h1>Getting here</h1>
				<div class="by_rail">
				<div class="rail-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rail_icon.png" alt=""></div>
				<h3><?php $rail_title = get_post_meta($post->ID, 'rail_title', true);
				if($rail_title){
				echo $rail_title;
				}else{
				echo "By Rail";
				}
				?></h3>
				</div>
				<?php echo get_post_meta($post->ID, 'by_rail', true);  ?>
				</div>
				<div class="by_car getting_here">
				<div class="by_rail">
				<h3><?php $car_title = get_post_meta($post->ID, 'car_title', true);
				if($car_title){
				echo $car_title;
				}else{
				echo "By Car";
				}
				?></h3>
				<div class="car-icon rail-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car-icon.png" alt=""></div>
				</div>
				<?php echo get_post_meta($post->ID, 'by_car', true);  ?>
				</div>
			</div>
		</div><!--wrapper-->
	</div><!--container-->
<?php get_footer(); ?>