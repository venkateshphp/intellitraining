<?php get_header(); ?>
	<div class="container">
		<div class="wrapper">
			<div class="whole-outer">
				<div class="our-clients-outer">
					<div class="our-clients-content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $fea_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single_post_feature_img'); ?>
						<div class="main-bd">
						<h1><?php
						$post_title =  get_post_meta( $post->ID, 'page_custom_title', true );
						if($post_title) {
						echo $post_title;
						}else{
						the_title();
						}
						?></h1>
						<?php /*?><p><?php _e("Posted by", 'intellitraining'); ?> <?php the_author_posts_link(); ?> <?php _e("on", 'intellitraining'); ?> <?php the_time('l, F j, Y'); ?> </p><?php */?>
						<?php if($fea_url[0]) { ?>
							<div class="single-post-fea-img">
							<img src="<?php echo $fea_url[0];?>" >
							</div>
						<?php } ?>
							<div class="single-post-content">
							<?php
							the_content(__('Read more'));
							?>
							</div>
						<?php endwhile; else: ?>
						<?php endif; ?>
						</div><!--our-clients-content-->
					</div>
				</div><!--our-clients-outer-->
			<?php include(TEMPLATEPATH."/sidebar.php");?>
			</div><!--.whole-outer -->
		</div><!--wrapper-->
	</div><!--container-->
<?php get_footer(); ?>