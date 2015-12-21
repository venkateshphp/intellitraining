<?php get_header(); ?>
	<div class="container">
		<div class="wrapper">
			<div class="whole-outer">
				<div class="our-clients-outer">
				<?php if (have_posts()) { while (have_posts()) { the_post();?>
					<div class="main-bd">
					<h1><?php
					$post_title =  get_post_meta( $post->ID, 'page_custom_title', true );
					if($post_title) {
					echo $post_title;
					}else{
					echo $post->post_title;
					}
					?></h1>
					</div><!--main-bd-->
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
