<?php 
/*********

Template Name: Slider-testing


*********/

get_header(); ?>

<div class="container">
	<div class="wrapper">
		<div class="whole-outer" style="min-height: 425px;">
		<div id="ChildVerticalTab_1">
			<ul class="resp-tabs-list ver_1">
				<li>Responsive Tab 1</li>
				<li>Responsive Tab 2</li>
				<li>Responsive Tab 3</li>
				<li>Long name Responsive Tab 4</li>
			</ul>
			<div class="resp-tabs-container ver_1">
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
				</div>
				<div>
					<p>Lorem ipsum dolor sit amet, lerisque commodo. Nam porta cursus lectusconsectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales sce. Proin nunc erat, gravida a facilisis quis, ornare id lectus</p>
				</div>
				<div>
					<p>Suspendisse blandit velit Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravid urna gravid eget erat suscipit in malesuada odio venenatis.</p>
				</div>
				<div>
					<p>d ut ornare non, volutpat vel tortor. InLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.t in malesuada odio venenatis.</p>
				</div>
			</div>
		</div>
<?php /*?>			<div class="flipster">
				  	<!--<div id="carousel">-->
					  <?php $clients_posts = get_posts(array('post_type' => 'clients', 'posts_per_page' => -1 ,'order' => 'ASC')); 
					  echo '<ul>';
					  foreach($clients_posts as $key => $clients_post){
							$fea_url = wp_get_attachment_image_src( get_post_thumbnail_id($clients_post->ID), 'carousel_slider_img');?>
							<li><a href="#" class="Button Block"><img src="<?php echo $fea_url[0]; ?>" /></a></li>
						<?php } 
						echo '</ul>';
						 ?>
					
					<!--</div>-->
			</div>
<?php */?>		</div><!--.whole-outer -->
	</div><!--wrapper-->
</div><!--container-->


<?php get_footer(); ?>