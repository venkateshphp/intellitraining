<?php  
/*********

Template Name: New Course Venue Page


*********/
//Page name : Locations
get_header(); 
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
               <?php   $my_postid = $post->ID;
				$content_post = get_post($my_postid);
				 $content = get_post_field('post_content', $my_postid);
				 if($content){ ?>
				 <p class="lead gap30 dark"><?php
				echo  strip_shortcodes( $content );
				?></p><?php
					}else{
			?>
                        <p class="lead gap30 dark">We offer courses in a variety of physical locations across the UK. Our training facilities are carefully selected and always maintained to the highest standards. We constantly review our venues to ensure you get the most out of your training with us. </p>
                       
                        <p class="lead dark">Navigate to your nearest location on the left to get more details on the venues including photos, features and how to get there. </p>
                    <?php } ?>   
                    </div>
                </div>

            </div>
        </section>
        <!-- End Sidebar Section -->


<?php 
get_footer();
?>
