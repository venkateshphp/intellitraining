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
<?php // begin code for the javascript which is necessary for the dropdown menu to display properly in IE6 ?>    
<script src="<?php bloginfo('template_url'); ?>/js/dropdown.js" type="text/javascript"></script>
<?php // end code  ?>

<!-----------------------------------
Added For New For Bootstrap Design Start
-------------------------------------->
    <div class="clearfix"></div>

<!--footer-links-start-->
<div class="footer-back">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="footer-heading">Services </div>
<?php dynamic_sidebar( 'Footer #1' ); ?>
</div>



<div class="col-md-3">
<div class="footer-heading">Join us </div>
<?php dynamic_sidebar( 'Footer #2' ); ?>
</div>

<div class="col-md-3">
<div class="footer-heading">Company  </div>
<?php dynamic_sidebar( 'Footer #3' ); ?>
</div>


<div class="col-md-3">
<div class="footer-heading">Contact Us </div>
<?php dynamic_sidebar( 'Footer #4' ); ?>
<div>
<a href="<?php echo get_option('facebook_url'); ?>"><i class="fa fa-facebook-official fa-lg"></i></a>
<a href="<?php echo get_option('google_url'); ?>"><i class="fa fa-google-plus-square fa-lg"></i></a>
<a href="<?php echo get_option('youtube_url'); ?>"><i class="fa fa-youtube-square fa-lg"></i></a>
<a href="<?php echo get_option('twitter_url'); ?>"><i class="fa fa-twitter-square fa-lg"></i></a>
 </div>
 
</div>
</div>
</div>
</div>
<!--footer-links-end-->
<div class="clearfix"></div>
<!--footer-text-back-start-->
<div class="footer-back-text">
<div class="container">
<?php dynamic_sidebar( 'Footer Fullwidth' ); ?>
</div>
</div>
<!--footer-text-back-end-->

<!--copyright-text-start-->
<?php 
$footer_left_content = get_option('Footer_left_content',$Footer_left_content);
$footer_right_content = get_option('Footer_right_content',$Footer_right_content);
?>
<div class="footer-light-back-copyright">
<div class="container">
<div class="row">
<div class="col-md-6"><strong><?php echo $footer_left_content;?></strong></div>
<div class="col-md-6 text-right"><?php echo $footer_right_content;?></div>
</div>

</div>

</div>
<!--copyright-text-end-->

 <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript">
	 var s = jQuery.noConflict();
       s(document).ready(function () {
	   
								s('a.course-filteration[data-toggle="collapse"]').on('click',function(){
						
						var objectID=s(this).attr('href');
						
						if(s(objectID).hasClass('in'))
						{
											s(objectID).collapse('hide');
						}
						
						else{
											s(objectID).collapse('show');
						}
							});

			s('.collapse').on('shown.bs.collapse', function(){
			//alert('addminus');
		//	   this.collapse('toggle');
			s(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
			}).on('hidden.bs.collapse', function(){
			//alert('addplus');
			s(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
			});
		});

</script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-1.9.1.min.js"></script>
   <?php /*?> <script src="<?php bloginfo('template_url'); ?>/owl-carousel/owl.carousel.js"></script><?php */?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/jquery-owl-carousel/owl.carousel.min.js"></script>

	



     <script>
	 var k = jQuery.noConflict();

       k(document).ready(function () {
			
			/************for play the video start **********/
					//	k('#video-section').simpleVideo();

			/*k(".glyphicon").click(function(){
			var req_id = this.id;
			alert(req_id);
			k(".use_toggle_"+req_id).collapse('toggle');
			});*/
	
			            /* Owl carousel */
            k(".owl-carousel").owlCarousel({
                navigation: true,
                pagination: true,
                navigationText: [
                  "<i class='icon-chevron-left icon-white'><</i>",
                  "<i class='icon-chevron-right icon-white'>></i>"
                ],
             /*   slideSpeed: 4000,
                rewindSpeed: 1000,*/
                mouseDrag: true,
                stopOnHover: true
            });
            /* Own navigation */
            k(".owl-nav-prev").click(function () {
                k(this).parent().next(".owl-carousel").trigger('owl.prev');
            });
            k(".owl-nav-next").click(function () {
                k(this).parent().next(".owl-carousel").trigger('owl.next');
            });
			
			
			/*k('.collapse').on('shown.bs.collapse', function(){
			alert('addminus');
			k(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
			}).on('hidden.bs.collapse', function(){
			alert('addplus');
			k(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
			});*/

        });

       
    </script>
<!-----------------------------------
Added For New For Bootstrap Design End
-------------------------------------->

	<script src="//www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
		google.load("jquery", "1");
	</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.simplevideo.js"></script>
	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
				//$('.video-section').simpleVideo();
		$('.video-section').each(function() {
		// var ar = this.id;
			var currentElement_id = this.id;
						//alert(currentElement_id);

		var currentElement = $('#'+currentElement_id);
		currentElement.simpleVideo();
		currentElement[0].load();
		currentElement[0].play();
		/*var caurrent_parent = $(this).parent('.simple-video-overlay');
		
		caurrent_parent.click(function () {
				currentElement[0].pause();

		 });
		 */
		});
		
		});
	</script>

</body>
</html>