<?php get_header(); ?>


<h3>
<?php
$post_title =  get_post_meta( $post->ID, 'page_custom_title', true );
if($post_title) {
echo $post_title;
}else{
echo $post->post_title;
}?>
</h3>
  <div class="row">
  <div class="col-md-4">
  <div class="courses-panel-left">

<!--form-start-here-->
                     									  <?php include(TEMPLATEPATH."/sidebar-new.php");?>








  
  </div>
  
  
  </div>
  
  <div class="col-md-8">
  
				<?php if (have_posts()) { while (have_posts()) { the_post();?>
				<hr>
					<div class="page-content">
					<?php the_content();?>
					</div>		
				<?php } } ?>
  
  
  </div>
  
  
  </div>
 
    
    
    
  </div>
    <!--main-content-end-->
    
    
    
<?php get_footer(); ?>

