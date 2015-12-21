<?php 
/*********

Template Name: Owl Slider-testing


*********/

get_header(); ?>

<div class="container">
	<div class="wrapper">
		<div class="whole-outer" style="min-height: 425px;">



<section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel">
            <div class="item">
              <h4>1</h4>
            </div>
            <div class="item">
              <h4>2</h4>
            </div>
            <div class="item">
              <h4>3</h4>
            </div>
            <div class="item">
              <h4>4</h4>
            </div>
            <div class="item">
              <h4>5</h4>
            </div>
            <div class="item">
              <h4>6</h4>
            </div>
            <div class="item">
              <h4>7</h4>
            </div>
            <div class="item">
              <h4>8</h4>
            </div>
            <div class="item">
              <h4>9</h4>
            </div>
            <div class="item">
              <h4>10</h4>
            </div>
            <div class="item">
              <h4>11</h4>
            </div>
            <div class="item">
              <h4>12</h4>
            </div>
          </div>
          
        </div>
      </div>
    </section>
	
	<div class="testmonial-bg">
  <div class="container">
    <div class="wrapper">
	
	  			  	<a class="prev" id="test_next"></a>		
          <div class="owl-carousel">
		<?php 
		$testi_args = array('posts_per_page' => -1,'post_type' => 'testimonials','post_status' => 'publish',);
		$testimonials_posts = get_posts( $testi_args ); 
		foreach($testimonials_posts as $testimonials_post){	
		$come_under_home = get_post_meta( $testimonials_post->ID, 'come_under_home', true );
		if($come_under_home=="Yes"){
		?>
			<div class="cols">
				<div class="test-col">
				<h3>"<?php echo $testimonials_post->post_title; ?>"</h3>
				<p><?php echo wp_trim_words($testimonials_post->post_content, 40); ?></p>
				</div>
				<div class="athor">
				<p><?php echo get_post_meta( $testimonials_post->ID, 'testimonial_name', true );?>, <span><?php echo get_post_meta( $testimonials_post->ID, 'designation', true );?></span></p>
				</div>
			</div>
		<?php
			}
		 }	?>
		</div><!--owl-carouse-->
					  	<a class="next1" id="test_next"></a>		
    </div>
  </div>
</div>
					</div><!--.whole-outer -->
	</div><!--wrapper-->
</div><!--container-->


<?php get_footer(); ?>