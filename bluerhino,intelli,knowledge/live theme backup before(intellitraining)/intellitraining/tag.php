<?php get_header(); ?>
	<div class="container">
		<div class="wrapper">
			<div class="whole-outer">
				<div class="our-clients-outer">
				<?php if (have_posts()) { while (have_posts()) { the_post();?>
				 <h2><?php echo $post->post_title;?></h2>
				 <hr>
				<div class="page-content">
				<?php the_content();?>
					</div>		
					<?php } } ?>
				</div><!--our-clients-outer-->
				  <!--sidebar will come here-->
				  <?php include(TEMPLATEPATH."/sidebar.php");?>
			</div><!--.whole-outer -->
		</div><!--wrapper-->
	</div><!--container-->
<?php get_footer(); ?>
