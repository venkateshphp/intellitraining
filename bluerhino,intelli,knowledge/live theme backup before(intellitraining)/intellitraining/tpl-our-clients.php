<?php 
/*********

Template Name: Template Our Clients


*********/

get_header(); ?>

<div class="container">
	<div class="wrapper">
		<div class="whole-outer">
			<div class="our-clients-outer">
			
				<div class="our-clients-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
						 <div class="main-bd">
					<h1><?php
					$post_title =  get_post_meta( $post->ID, 'page_custom_title', true );
					if($post_title) {
					echo $post_title;
					}else{
					 echo get_the_title();
					}
					?></h1>
				</div><!--main-bd-->
				
				<?php the_content(__('Read more'));?>
				<?php endwhile; else: ?>
				<?php endif; ?>
				</div><!--our-clients-content-->
				
				<div class="clients-list">
				<?php
				global $post;
				$args = array(
				'posts_per_page'   => -1,
				'orderby'          => 'post_date',
				'order'            => 'DESC',
				'post_type'        => 'clients',
				'post_status'      => 'publish',
				); 
				$myposts = get_posts( $args );
				$count = count($myposts);
				foreach ( $myposts as $key => $post ) {
				$fea_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'feature_img');
				?>
					<div class="single-client">
						<div class="client-title"><?php echo $post->post_title;?></div>
						<div class="client-content">	
						<?php if($fea_url[0]) { ?>
							<div class="client-fea-img">
							 <img src="<?php echo $fea_url[0];?>" width="179" height="159">
							 </div>
						<?php } ?>
							<div class="client-content-text">
							
							<?php echo wp_trim_words($post->post_content,100); ?>
						<?php /*?><p class="post-date-details"><?php _e("Posted by", 'intellitraining'); ?> <?php the_author_posts_link(); ?> <?php _e("on", 'intellitraining'); ?> <?php the_time('l, F j, Y'); ?> </p><?php */?>

							</div>
						<a class="read-more" href="<?php echo get_permalink();?>">Read More</a>
						</div>
					</div><!--single-client-->
					<?php if($key!=$count-1){ ?>
					<hr>
					<?php } ?>
				<?php } ?>
				</div><!--clients-list-->
			</div><!--our-clients-outer-->
							  <?php include(TEMPLATEPATH."/sidebar.php");?>

		</div><!--.whole-outer -->
	</div><!--wrapper-->
</div><!--container-->


<?php get_footer(); ?>