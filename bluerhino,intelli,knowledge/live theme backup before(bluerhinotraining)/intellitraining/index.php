<?php get_header(); ?>

<h3>
<?php
$cate = get_queried_object();
$post = $cate->ID;
$post_title =  get_post_meta( $post, 'page_custom_title', true );
if($post_title) {
echo $post_title;
}else{
echo 'Blog';
}
?>
</h3>
  <div class="row">
  
  <div class="col-md-4">
  <div class="courses-panel-left">
<!--form-start-here-->
                     									  <?php include(TEMPLATEPATH."/sidebar-new.php");?>
  </div>
  </div>
  
  <div class="col-md-8">
  
						<?php if (have_posts()) { while (have_posts()) { the_post();
					    $dynamic_ID = get_the_ID();
						$fea_url = wp_get_attachment_image_src( get_post_thumbnail_id($dynamic_ID), 'feature_img');
						?>
								<div><strong class="captitalize-title"><?php echo $post->post_title;?></strong></div>
								<div>	
								<?php if($fea_url[0]) { ?>
								<div class="client-fea-img">
								<img src="<?php echo $fea_url[0];?>" width="179" height="159" class="img-responsive" alt="#">
								</div>
								<?php } ?>
								<div>
								<p><?php echo wp_trim_words($post->post_content,100); ?></p>
								<?php /*?><p class="post-date-details"><?php _e("Posted by", 'intellitraining'); ?> <?php the_author_posts_link(); ?> <?php _e("on", 'intellitraining'); ?> <?php the_time('l, F j, Y'); ?> </p><?php */?>
								</div>
								<a class="btn btn-success" style="color:#22B573; font-size:14px;color:white;" href="<?php echo get_permalink();?>">Read More</a>
								</div>
						<?php if($key!=$count-1){ ?>
						<hr>
						<?php } ?>
						<?php } } ?>
  
  
  
  </div>
  
  
  </div>
 
    
    
    
  </div>
    <!--main-content-end-->
    
    
    
<?php get_footer(); ?>