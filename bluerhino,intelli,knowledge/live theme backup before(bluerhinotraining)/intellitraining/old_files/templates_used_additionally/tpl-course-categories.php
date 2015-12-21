<?php 
@ob_start();
@session_start();
/*********

Template Name: Template For Course Categories


*********/

get_header(); ?>
<div class="submenu-bg"> 
    <div class="container">
        <div class="wrapper">
        <?php /*?>   <p><a  href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Browse-btn.png" alt=""></a></p><?php */?>
            <div class="submenu">
			 <ul>
			<?php $child_pages = get_pages( array( 'parent' => 23, 'child_of' => 23, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) ); 
								foreach($child_pages as $key => $child_page){ ?>
           
            <li><a class="<?php if($child_page->ID==307) {echo 'first_sub_menu';}?>" href="<?php echo get_permalink($child_page->ID);?>"><?php echo $child_page->post_title;?></a>
			<?php $child_pages1 = get_pages( array( 'child_of' => $child_page->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );
			$sub_pages_count = count($child_pages1);
			if($sub_pages_count) {
			 ?>
<ul class="inner_submenu">
<?php 
foreach($child_pages1 as $key => $child_page1){ ?>
<li><a href="<?php echo get_permalink($child_page1->ID);?>"><?php echo $child_page1->post_title;?></a></li> <?php } ?>
</ul>
								<?php } ?>
								</li>
			
			<?php } ?>
            <ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
			<div class="wrapper">
				<div class="main-bd">
					<h2>PRINCE2 Foundation</h2>	
					<div class="main-bd-lt">
						<h4>Key Features</h4>
						<div class="listkeayf">
							<ul>
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon1.png" alt=""></span> 29 Hrs of High Quality e-Learning content</li>
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon2.png" alt=""></span> 5 PMP&reg; Simulation exams</li>
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon3.png" alt=""></span>Retain PMP Certification for 6 years</li>
							</ul>
							
							<ul style="border:none;">
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon4.png" alt=""></span> 83 Chapter-end Quizzes</li>
							    <li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon5.png" alt=""></span>105 PDUs Offered</li>
								<li> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon6.png" alt=""></span>15 end of chapter reference slides for terms & acronyms</li>
							</ul>
						
						</div>
						
						<div class="course-table">
							<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#06CBCB">
  <tr>
    <td height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table">Course Categories</td>
    <td height="49" align="center" valign="middle" bgcolor="#06cbcb" class="tt-table"> View Courses </td>
  </tr>
  						<?php 
							$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
							/*echo "<pre>";
							print_r($single_taxonomy);
							echo "</pre>";*/
							foreach($single_taxonomy as $val){
							//echo $val->name;
							///echo "<br>";
							//echo get_term_link($val->slug, $val->taxonomy);

?>

   <tr>
    <td height="50" align="center" valign="middle" class="row-col-wht"><?php echo $val->name; ?></td>
    <td height="50" align="center" valign="middle" class="row-col-wht"><a href="<?php echo get_term_link($val->slug, $val->taxonomy); ?>">View Courses</a></td>
  </tr>
  <?php } ?>
</table>
							
							<p>
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pagina-arr-lft.png" alt="" border="0"></a> 
							<a href="#">1</a> 
							<a href="#">2</a> 
							<a href="#">3</a> 
							<a href="#">4</a> 
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pagina-arr-rgt.png" alt="" border="0"></a>
							</p>

						</div>
						
						<h4>Quick Jump Menu</h4>
						<div class="qjmenu">
							<ul>
								<li><a href="#">Overview</a> | </li>         
								<li><a href="#">Course Content</a> |</li>         
								<li><a href="#">>Testimonials</a> |</li>          
								<li><a href="#">Venue</a> |</li>          
								<li><a href="#">FAQs</a></li>
							</ul>
						</div>	
						
						<div class="over-data">
							<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span>Overview</span></h6>
							
							<p>This two day course is the entry level PRINCE2 qualification. It is widely regarded as essential for anyone involved in PRINCE2 projects.</p>

							<hr>

<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span>Course Content</span></h6>

<h5>Are you Accredited?</h5>
							<p>
Yes, we are accredited by PeopleCert, one of the fastest growing and technologically advanced examination Institutes in the world. Our accreditation lets you know that our trainers, courseware and company have passed the most stringent checks, as required by Axelos.</p>

<h5>Should I do the combined PRINCE2 Foundation & Practitioner Course?</h5>
<p>A five day combined course is a great way to get both the foundation and Practitioner certifications in one go. You will be fully immersed in PRINCE2, really absorbing and internalising the PRINCE2 terminology and methodology. This option will also save you money, as it's sold as a discounted course package.</p>
<hr>

<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span>Testimonials</span><b style="float:right;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lt-arrow1.png" alt="">  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rt-arrow1.png" alt=""></b></h6>

<div class="testi-row"><strong class="testi-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image-srq.png" alt=""></strong>
<p class="testi"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lt-comment.png" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce suscipit tortor ac sapien blandit sodales. Integer egestas interdum est. In malesuada sapien ac odio imperdiet, quis gravida velit faucibus. Vivamus suscipit lorem ac lectus rutrum, sit amet euismod purus vulputate.<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rt-comment.png" alt=""></p>
<strong style="float:right;">- kelly Jones</strong>
</div>

<hr>


<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span>Venue</span></h6>

<div class="testi-row">
	<p class="venue">Hilton Hyde Park<br>
129 Bayswater Road<br>
London<br>
W2 4RJ<br>
Phone: 020 7221 2217<br>
E: info@intellitraining.co.uk  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-readmorew.png" alt="" border="0"></a></p>

<div class="venue-img">
	<ul>
		<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.png" alt=""></li>
		<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image2.png" alt=""></li>
		<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image3.png" alt=""></li>
		<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image4.png" alt=""></li>
	</ul>
</div>
</div>


<hr>

<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Green-icon.png" alt=""> <span>Faqs</span></h6>

<p>
1. Are your accredited?<br>
2. Are your instractors good?<br>
3. whats the pass rate?
</p>



						</div>	
				
					</div>
					
					
					
					
					
					
									  <?php include(TEMPLATEPATH."/sidebar.php");?>

				</div>

			</div>
		</div>


<?php get_footer(); ?>