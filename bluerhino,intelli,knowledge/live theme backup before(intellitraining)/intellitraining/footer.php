	<div class="ft-bg">
		<div class="container">
			<div class="wrapper">
				<div class="footer">
					<div class="ft-col-1">
					<h4>Contact Us</h4>
					<?php dynamic_sidebar( 'Footer #1' ); ?>
					</div>
					<div class="ft-col-2">
					<h4>Company</h4>
					<?php dynamic_sidebar( 'Footer #2' ); ?>
					</div>
					<div class="ft-col-2">
					<h4>Work with us</h4>
					<?php dynamic_sidebar( 'Footer #3' ); ?>
					</div>
					<div class="ft-col-3">
					<p>Learn On the Go!</p>
					<?php dynamic_sidebar( 'Footer #4' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ft-buttom-bg">
		<div class="container">
			<div class="wrapper">
				<div class="ft-lt">
				<p>&copy; 2015 - Intelli training. All Rights Reserved.</p>
				</div>
				<div class="ft-rt">
				<p>Follow Us On :</p>
				<p><a href="<?php echo get_option('facebook_url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/T-Fb-icon.png" alt=""></a> <a href="<?php echo get_option('twitter_url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/T-Twitter-icon.png" alt=""></a> <a href="<?php echo get_option('google_url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/T-Google+-icon.png" alt=""></a> <a href="<?php echo get_option('youtube_url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/T-Youtube-icon.png" alt=""></a></p>
				</div>
			</div>
		</div>
	</div>
<?php do_action('wp_footer'); ?>
<?php // begin code for the javascript which is necessary for the dropdown menu to display properly in IE6 ?>    
<script src="<?php bloginfo('template_url'); ?>/js/dropdown.js" type="text/javascript"></script>
<?php // end code  ?>
</body>
</html>