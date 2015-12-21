
				<?php 			
				$cate = get_queried_object();
				$cat_id = $cate->term_id;
				$unserialize_val = maybe_unserialize(get_option('serialized_val'.$cat_id));
				?>
<div class="main-bd-rt">
							<div class="query">
								<h2>Drop us a Query</h2>
								<p><input name="" type="text" placeholder="Full Name"></p>
								<p><input name="" type="text" placeholder="Email Address"></p>
								<div class="fie-row">
									<span><select name="">
									  <option>India</option>
									  <option>USA</option>
									  <option>UK</option>
									</select></span>
									<span><input name="" type="text"  class="mob-no" placeholder="+91"></span>
								</div>
								
								<p><textarea name="" cols="" rows="5"></textarea></p>
								
								<div class="fie-row">
							<label><input name="" type="checkbox" value=""> I agree to the terms of service.</label>
								</div>
								
								<p class="txt-rgt">
								<div class="sidebar-signup-btn"><span>Sign-up</span></div>
								<?php /*?><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Sing-up.png" alt=""><?php */?></p>
							</div>
							<!--first sidebar image start-->
							<div class="rgt-bottom-boxes <?php $taxonomy = 'product_cat'; if(is_tax( $taxonomy)){ ?>
 remove_bg_and_border <?php } ?>">
							<?php $taxonomy = 'product_cat'; if(!is_tax( $taxonomy)){ ?>	<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Blue-icon.png" alt=""> Facts & figures</h3><?php } ?>
								<?php
									$cate = get_queried_object();
									$cat_id = $cate->term_id;

										$course_cat_siebar_image1 = $unserialize_val['course_cat_siebar_image1'];
											$course_cat_siebar_image1_url = $unserialize_val['course_cat_siebar_image1_url'];	
												
											$course_cat_siebar_image2 = $unserialize_val['course_cat_siebar_image2'];	
											$course_cat_siebar_image2_url = $unserialize_val['course_cat_siebar_image2_url'];	
											if($course_cat_siebar_image1) {
											?>
											<p><a href="<?php echo $course_cat_siebar_image1_url;?>"><img src="<?php echo $course_cat_siebar_image1; ?>" /></a></p>
											<?php }else{?>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis sem ac metus tristique maximus. Pellentesque ullamcorper, ligula vitae mattis eleifend, libero nunc bibendum ligula, ac imperdiet ligula felis eget massa. Maecenas neque neque, faucibus non lectus at, consequat euismod nisi. Sed magna nulla, pharetra a enim sed, pretium iaculis purus. Proin eget tincidunt risus. </p>											
											<?php } ?>
							</div>
							<!--first sidebar image end-->
							<div class="rgt-bottom-boxes <?php $taxonomy = 'product_cat'; if(is_tax( $taxonomy)){ ?>remove_bg_and_border<?php } ?>">
								
								<?php $taxonomy = 'product_cat'; if(is_tax( $taxonomy)){ ?>
								<h3>You might also like...</h3>
								
								<h6>
								<b style="float:right;">
								<img class="prev_cat_sidebar" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lt-arrow1.png" alt="">
								<img class="next_cat_sidebar" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rt-arrow1.png" alt="">
								</b>
								</h6>
									<div class="owl-carouse" id="owl-cat-single-sidebar">
										<?php
										/*$iteration = 0;*/
										$box1 =  $unserialize_val['sidebar_cat'];	
										if($box1) {
										$retrive =$unserialize_val['sidebar_cat'];	
										$postid_count = count($retrive);
										
										foreach($retrive as $key => $retrive_ID) { 
										//echo "<br>key = ".$key."<br>";
										if($key==10){ break;}
										$single_taxonomy = get_categories('taxonomy=product_cat&type=product&hide_empty=0'); 
										$count = count($single_taxonomy);
										if($count){
										foreach($single_taxonomy as $key => $single_taxonomy_cat){
										$cat_id = $single_taxonomy_cat->term_id;						
										if($cat_id == $retrive_ID){
										?>
										<a href="<?php echo get_term_link($single_taxonomy_cat->slug, $single_taxonomy_cat->taxonomy);?>">
										<div class="over-Details">
										<div class="product">
										<?php $thumbnail_id = get_woocommerce_term_meta( $single_taxonomy_cat->term_id, 'thumbnail_id', true ); 
										// get the image URL
										$image = wp_get_attachment_url( $thumbnail_id ); 
										?><img src="<?php echo $image;?>"/>
										</div><!--product-->
										<div class="pro-detail">
										<h4><?php echo $single_taxonomy_cat->name/*."slug = ".$single_taxonomy_cat->slug*/;?></h4>
										<p><?php $string = wp_trim_words( $single_taxonomy_cat->category_description, 5 ); //echo $string;
										echo strip_shortcodes( $string );
										?>
										</p>
										<div class="accred_div_card">
										<span class="icon_right"></span>
										<span class="accred_title"> View courses
										</span>
										</div>
										<!--                          <p>Lorem ipsum dolor sit amet, elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.Integer nec odio. Praesent libero.</p>
										-->              </div><!--pro-detail-->
										</div></a><!--over-Details-->
										
										
										<?php }
										}
										}
										}
										}
										?>
									</div><!--owl-carouse-->	

								<?php }else{ ?>
								<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Blue-icon.png" alt=""> You Recently Viewed</h3>
								<ul>
									<li><a href="#">PRINCE2 Foundation London</a></li>
									<li><a href="#">PRINCE2 Foundation London</a></li>
									<li><a href="#">PRINCE2 Foundation London</a></li>
									<li><a href="#">PRINCE2 Foundation London</a></li>
									<li><a href="#">PRINCE2 Foundation London</a></li>
									<li><a href="#">PRINCE2 Foundation London</a></li>
									<li><a href="#">PRINCE2 Foundation London</a></li>
									<li><a href="#">PRINCE2 Foundation London</a></li>
									<li><a href="#">PRINCE2 Foundation London</a></li>
								</ul>
							<?php } ?>	
							</div>
								<!--Second  sidebar image start-->
							<div class="rgt-bottom-boxes  <?php $taxonomy = 'product_cat'; if(is_tax( $taxonomy)){ ?>
 remove_bg_and_border <?php } ?>">
								<?php /*?><h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Blue-icon.png" alt=""> PRINCE2 e-learning</h3><?php */?>
								<?php $taxonomy = 'product_cat'; if(!is_tax( $taxonomy)){ ?>	<h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Blue-icon.png" alt=""> PRINCE2 e-learning</h3><?php } ?>
							<?php	if($course_cat_siebar_image2) {
											?>
											<p><a href="<?php echo $course_cat_siebar_image2_url;?>"><img src="<?php echo $course_cat_siebar_image2; ?>" /></a></p>
											<?php }else{?>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis sem ac metus tristique maximus. Pellentesque ullamcorper, ligula vitae mattis eleifend, libero nunc bibendum ligula, ac imperdiet ligula felis eget massa. Maecenas neque neque, faucibus non lectus at, consequat euismod nisi. Sed magna nulla, pharetra a enim sed, pretium iaculis purus. Proin eget tincidunt risus. </p>											
											<?php } ?>
							</div>
								<!--Second  sidebar image end-->
							
						</div>
						
<?php /*?><div id="sidebar">

	<ul id="sidebarwidgeted">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
    
        <li id="search" class="widget widget_search">
            <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                <label class="hidden" for="s"><?php _e("Search for:", 'intellitraining'); ?></label>
                <div><input type="text" value="" name="s" id="s" />
                <input type="submit" id="searchsubmit" value="Search" />
                </div>
            </form>
        </li>
    
        <li id="quick-search" class="widget">
            <h4><?php _e("Categories", 'intellitraining'); ?></h4>
            <?php wp_dropdown_categories('show_option_none=Select Category&hierarchical=true'); ?>
            <script type="text/javascript"><!--
                var dropdown = document.getElementById("cat");
                function onCatChange() {
                    if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
                        location.href = "<?php echo get_option('home');
            ?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
                    }
                }
                    dropdown.onchange = onCatChange;
            --></script> 
        </li>
        
		<li id="text-widget" class="widget">
            <h4><?php _e("Text Widget", 'intellitraining'); ?></h4>
                <p><?php _e("This is an example of a text widget that you can place to describe a particular product or service. Use it as a way to get your visitors interested, so they can click through and read more about it.", 'intellitraining'); ?>
</p>
		</li>	
            	
		<li id="recent-posts" class="widget">
            <h4><?php _e("Recent Posts", 'intellitraining'); ?></h4>
                <ul>
                    <?php wp_get_archives('type=postbypost&limit=5'); ?> 
                </ul>
		</li>	
        
        <li id="archives" class="widget">
            <h4><?php _e("Archives", 'intellitraining'); ?></h4>
                <ul>
					<?php wp_get_archives('type=monthly'); ?>
                </ul>
        </li>

		<li id="blogroll" class="widget">
            <h4><?php _e("Blogroll", 'intellitraining'); ?></h4>
				<ul>
					<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
				</ul>
		</li>
        
		<li id="meta" class="widget">
            <h4><?php _e("Meta", 'intellitraining'); ?></h4>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <li><a href="http://www.wordpress.org/">WordPress</a></li>
                    <?php wp_meta(); ?>
                    <li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
                </ul>
		</li>  
        		
	<?php endif; ?>
	</ul>
			
</div><?php */?>