<?php get_header(); ?>
<div class=" container">
	<div class="wrapper">
		<div class="main-bd">
			<div class="main-bd-lt">
			<h1><?php _e("We're sorry, that page was not found - Error 404", 'intellitraining'); ?></h1>
			<p><?php _e("The page you are looking for no longer exists.", 'intellitraining'); ?></p>
			</div>
		 <?php include(TEMPLATEPATH."/sidebar.php");?>
		</div>
	</div>
</div>
<?php get_footer(); ?>