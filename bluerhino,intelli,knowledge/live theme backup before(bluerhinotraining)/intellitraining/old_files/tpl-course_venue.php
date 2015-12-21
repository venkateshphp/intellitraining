<?php  
/*********

Template Name: Template Course Venue


*********/
get_header(); 
?> 
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
				 $term_id_req = $category->term_id;
				 ?>
				<h2><?php
				echo $category->name;
				?></h2>
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
				/*echo "<pre>";
				print_r($all_course_venues);
				echo "</pre>";*/
				?>
				<ul>
				<?php
				foreach ( $all_course_venues as $key => $course_venue ) { 
				?>
				<li><a href="<?php echo get_permalink($course_venue->ID)?>"><?php echo $course_venue->post_title; ?></a></li>
				<?php }
				?>
				</ul>
				<?php
				 }
				 
				 ?>
				
				 
				 <!--newly added fqs end--> 
				 
				
					</div><!--lt-menu-->
				
					<div class="rt-slider">

			<div class="flipster">

			<p><?php   $my_postid = $post->ID;
				$content_post = get_post($my_postid);
				 $content = get_post_field('post_content', $my_postid);
				 if($content){
				echo  strip_shortcodes( $content );
					}
			?>
				</p>
					 </div><!--flipster-->
				      </div><!--rt-slider-->
				 </div><!--venues_inner_bd-->
			</div><!--wrapper-->
		</div><!--container-->

<?php 
get_footer();
?>
