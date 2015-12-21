<?php get_header(); ?>


<div class="row">
  
  <div class="col-md-4">
  <div class="courses-panel-left">

<!--form-start-here-->
                     									  <?php include(TEMPLATEPATH."/sidebar-new.php");?>
  </div>
  </div>
  <div class="col-md-8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $fea_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single_post_feature_img'); ?>
						<div>
						<strong class="captitalize-title"><?php
						$post_title =  get_post_meta( $post->ID, 'page_custom_title', true );
						if($post_title) {
						echo $post_title;
						}else{
						the_title();
						}
						?></strong>
						<?php if($fea_url[0]) { ?>
							<div class="client-fea-img">
							<img src="<?php echo $fea_url[0];?>" class="img-responsive" alt="#">
							</div>
						<?php } ?>
							<div><p>
							<?php
							the_content(__('Read more'));
							?>
							</p>
							</div>
						<?php endwhile; else: ?>
						<?php endif; ?>
						</div><!--our-clients-content-->
  </div>
  
  
  </div>
 
    
    
    
  </div>
    <!--main-content-end-->
    
    
    
<?php get_footer(); ?>