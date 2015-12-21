<?php
/*
Template Name: template test wp-slide show
*/
		if (class_exists('wpslideshow')) {  
		global $obj; $up = wp_upload_dir(); 
			foreach($obj->show_slider('Homepage') as $key => $slide){
			echo "<br>===========Key =".$key." Start===========<br>";
			if($slide->link) {  echo "<br>link = ".$slide->link."<br>"; }
			 echo "<br>guid = ".$up['baseurl'].'/wpslideshow/'.$slide->guid."<br>";
			if($slide->title){
			 echo "<br>title = ".$slide->title."<br>";
			 }
			if($slide->content){
			 echo "<br>content = ".$slide->content."<br>";
			 }
			 if($slide->uploadFileType){
			 $file_type = $slide->uploadFileType;
			 if($file_type=="video"){
			 ?>
			 <iframe src="<?php echo $up['baseurl'].'/wpslideshow/'.$slide->guid; ?>" height="600px" width="600px">
			 <?php 
			 }
			 echo "<br>uploadFileType = ".$slide->uploadFileType."<br>";
			 }
			 			echo "<br>===========Key =".$key." End===========<br>";

			}
		}
	?>
