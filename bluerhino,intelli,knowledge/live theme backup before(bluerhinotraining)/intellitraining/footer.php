<?php /*?>	<div class="ft-bg">
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
	</div><?php */?>
<?php do_action('wp_footer'); ?>

<div class="clearfix"></div>
       
    <!--footer-start-here-->
    <footer class="footer clearfix">

                <div class="container">
                    <div class="clearfix">

                        <nav class="pull-right">
																<?php if ( has_nav_menu( 'primary' ) ) { wp_nav_menu(array('menu'=>'primary-menu','menu_class'=> 'secondary-font','container' => '')); } ?>		

						</nav>
                        <div class="pull-left copy">
                            <div class="footer-soc"> 
                                <a href="mailto:<?php  $mail_id = get_option('email_id');	if($mail_id) { echo $mail_id; }else{ echo "support@knowledgetreetraining.com"; } ?>"><i class="fa fa-envelope"></i></a><!--
                                --><a href="<?php echo get_option('facebook_url'); ?>"><i class="fa fa-facebook"></i></a><!--
                                --><a href="<?php echo get_option('twitter_url'); ?>"><i class="ion-social-twitter"></i></a>
                            </div>
<?php 
$terms_and_condition_text = get_option('terms_and_condition_text');
$terms_and_condition_link = get_option('terms_and_condition_link');
$privacy_policy_text = get_option('privacy_policy_text');
$privacy_policy_link = get_option('privacy_policy_link');
$Copyrights_content = get_option('Copyrights_content');
?>
                            <div class="copy-links">
                                <a href="<?php echo $terms_and_condition_link;?>"><?php echo $terms_and_condition_text;?><!--Terms and Conditions--></a> - <a href="<?php echo $privacy_policy_link;?>"><?php echo $privacy_policy_text;?><!--Privacy Policy--></a>
                            </div>
                            <p><span class="copyright text-left"><?php echo $Copyrights_content;?><!--Copyright &copy; 2015 Knowledge Tree Training. All Rights Reserved.--></span></p>
                        </div>
                    </div>

                </div>

            </footer>
    <!--footer-end-here-->
        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
    <!-- Site Wraper End -->


    <!-- JS -->
	
	
	
		

</body>
</html>