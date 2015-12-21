<?php get_header(); ?>


<div class="container">
        <div class="row gap30">
        <div class="col-md-4">
  <div class="courses-panel-left">

<!--sidebar-start-here-->
                     									  <?php include(TEMPLATEPATH."/sidebar-new.php");?>

<!--sidebar-end-here-->

  
  </div><!--courses-panel-left-->
  
  
  </div>
        
        
        
        <div class="col-md-8">
		
<?php if (have_posts()) { while (have_posts()) { the_post();?>
				<hr>
					<div class="page-content">
					<?php the_content();?>
					</div>		
				<?php } } ?>
  
  </div><!--col-md-8-->
        
        
        </div>
        
        
        
        
        </div>
    
    
    
<?php get_footer(); ?>

