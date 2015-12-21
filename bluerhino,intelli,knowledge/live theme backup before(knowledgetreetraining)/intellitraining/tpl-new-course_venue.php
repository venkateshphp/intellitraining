<?php  
/*********

Template Name: New Course Venue Page


*********/
//Page name : Locations
get_header(); 
?> 

<h3 class="text-center gap30"><!--Locations--><?php echo get_the_title();?></h3>

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
  <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/locations.gif" alt="Locations" class="img-responsive img-thumbnail"></div>
  <p class="margintop20"><!--We offer courses in a variety of physical locations across the UK. Our training facilities are carefully selected and always maintained to the highest standards. We constantly review our venues to ensure you get the most out of your training with us. </p>
 <p>Navigate to your nearest location on the left to get more details on the venues including photos, features and how to get there. -->
 <?php   $my_postid = $post->ID;
				$content_post = get_post($my_postid);
				 $content = get_post_field('post_content', $my_postid);
				 if($content){
				echo  strip_shortcodes( $content );
					}
			?>
 </p>
  </div>
 
 </div>
  
  </div>
    <!--main-content-end-->
    
    
    
    <div class="clearfix"></div>
   
<?php 
get_footer();
?>
