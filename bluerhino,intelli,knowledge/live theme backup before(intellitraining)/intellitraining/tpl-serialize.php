<?php 
/*********

Template Name: Template For serialize


*********/
get_header();
?>
<div class="container">
			<div class="wrapper">
			
				<div class="main-bd">

<?php

		
echo "siteurl= ".$string1 = get_option('siteurl');
echo "<br>";
$string2 = "https://www.intellitraining.co.uk/wp-content/uploads/2015/01/testi1.jpg";


$mystring = 'https://www.intellitraining.co.uk/wp-content/uploads/2015/01/testi1.jpg';
$findme   = 'wp-content';
echo $pos = strpos($mystring, $findme);

if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
					 
		echo "<br>======================================<br>";	
			
			$email  = 'name@example.com';
$domain = strstr($mystring, '/wp-content');
echo $domain; // prints @example.com
		echo "<br>======================================<br>";	
						
	echo $string1.$domain;					
						

?>
				</div><!--main-bd-->
			</div><!--wrapper-->
		</div><!--container-->

<?php
get_footer();
?>