jQuery(document).ready(function() {

var ajax_file_path = file_path_object.file_path; 
var home_url_path = home_url_object.home_url; 
			 jQuery("#owl-demo").owlCarousel({
				items : 3,
				lazyLoad : true,
				navigation : true,
				pagination: false,
			  navigationText: [
						  "<i class='fa fa-caret-left fa-lg'></i>",
						  "<i class='fa fa-caret-right fa-lg'></i>"
						],
					});
/********** Login Form Start***************/	 
jQuery('#username').addClass('input-sm form-full');
jQuery('#password').addClass('input-sm form-full');
jQuery('#wp-submit').addClass('btn btn-md btn-color-b form-full');
jQuery('p.login-username #username').attr("placeholder", "Email");
jQuery('p.login-password #password').attr("placeholder", "Password");
/********** Login Form End***************/	 
	 
				jQuery('#login_sub').click(function(event) {
										//	   alert('check');
	         	var email_val = jQuery('#email').val();
	         	var pass_val = jQuery('#password').val();

				jQuery.post(ajax_file_path+"/ajax_file.php", { 
				f_email: email_val,
				f_pass: pass_val,
				action: 'login_check'},function(responseText) { 
			//	alert(responseText);
			if(responseText=='success'){
				jQuery("div.success_msg").empty().html('You Logged In Successfully');
                jQuery(location).attr('href',home_url_path);
			}else{
				jQuery("div.error1").empty().html(responseText);
			}
				});						
		});
				
				
									jQuery('.login_sub').click(function(event) {
												 //  alert('check');
					var email_val = jQuery('.email').val();
					var pass_val = jQuery('.password').val();
					jQuery.post(ajax_file_path+"/ajax_file.php", { 
					f_email: email_val,
					f_pass: pass_val,
					action: 'login_check'},function(responseText) { 
				//	alert(responseText);
				if(responseText=='success'){
					jQuery("div.error1").empty();
					jQuery("div.success_msg").empty().html('You Logged In Successfully');
					jQuery(location).attr('href',home_url_path);
				}else{
					jQuery("div.error1").empty().html(responseText);
				}
					});						
			});
									
									/************************************ 		For Product Filter Options Start 	**************************************/
    //j(':checkbox:checked').prop('checked',false); //For remove the check box checked on page load
	jQuery(".panel-body input:checkbox").change(function() {
	
	jQuery(".filtered_product_part_grid").empty();
	 jQuery('.filtered_product_part_grid').html('<div id="mydiv"><img src="'+ajax_file_path+'/images/ajax-loader.gif" class="ajax-loader"></div>');
	 
	 	jQuery(".filtered_product_part_list").empty();
	 jQuery('.filtered_product_part_list').html('<div id="mydiv"><img src='+ajax_file_path+'/images/ajax-loader.gif" class="ajax-loader"></div>');

	var someObj = {};
	someObj.fruitsGranted = [];
	someObj.fruitsDenied = [];
	jQuery(".panel-body input:checkbox").each(function() {
	if (jQuery(this).is(":checked")) {
	someObj.fruitsGranted.push(jQuery(this).attr("value"));
	} else {
	someObj.fruitsDenied.push(jQuery(this).attr("value"));
	}
	});
	var a_checkbox_values = someObj.fruitsGranted;
		jQuery.post(ajax_file_path+"/includes/ajax_file.php", { 
			f_checkbox_values: a_checkbox_values,
			action: 'chk_values'},function(responseText) { 
			
						var data = jQuery.parseJSON(responseText);
						//alert(data);
						var grid_content = data.grid;
						var list_content = data.list;
					//	alert(grid_content);
					//	alert(list_content);


             var str_grid = grid_content;
			//var str = j.trim(responseText);
			   var n_grid = str_grid.indexOf("over-Details-new");
			 if(n_grid==-1) {
			
			 						jQuery(".filtered_product_part_grid").empty().html("<div class='no-course'>No Courses Are Found</div>");
			 }else {
			 			
						jQuery(".filtered_product_part_grid").empty().html(grid_content);
						 }
						 
			 if(jQuery.trim(list_content).length == 0 ) {
			 			 						jQuery(".filtered_product_part_list").empty().html("<div class='no-course'>No Courses Are Found</div>");

						 }else{
						 						jQuery(".filtered_product_part_list").empty().html(list_content);

						 }

			});
});
		jQuery('#clear_all').click(function() {
			jQuery('.panel-body input:checkbox').prop('checked', false);
				jQuery(".filtered_product_part_grid").empty();
	 jQuery('.filtered_product_part_grid').html('<div id="mydiv"><img src='+ajax_file_path+'/images/ajax-loader.gif" class="ajax-loader"></div>');
	 
	 				jQuery(".filtered_product_part_list").empty();
	 jQuery('.filtered_product_part_list').html('<div id="mydiv"><img src=='+ajax_file_path+'/images/ajax-loader.gif" class="ajax-loader"></div>');

			var a_checkbox_values = "";
				jQuery.post(ajax_file_path+"/includes/ajax_file.php", { 
			f_checkbox_values: a_checkbox_values,
			action: 'chk_values'},function(responseText) {
			
				var data = jQuery.parseJSON(responseText);
						//alert(data);
						var grid_content = data.grid;
						var list_content = data.list;
						
						jQuery(".filtered_product_part_grid").empty().html(grid_content);
						jQuery(".filtered_product_part_list").empty().html(list_content);
			});
		});
	/************************************		For Product Filter Options End  	**************************************/
	
		  jQuery('.filtered_product_part_grid').hide();

	 jQuery('#list').click(function(){
	  jQuery('.filtered_product_part_grid').hide();
	  jQuery('.filtered_product_part_list').show();
	 });
	 jQuery('#grid').click(function(){
	  jQuery('.filtered_product_part_grid').show();
	  jQuery('.filtered_product_part_list').hide();
	 });
	 
		
		jQuery('a.course-filteration[data-toggle="collapse"]').on('click',function(){
																				 //  alert('hi to all');
		var objectID=jQuery(this).attr('href');
		if(jQuery(objectID).hasClass('in'))
		{
		jQuery(objectID).collapse('hide');
		}
		else{
		jQuery(objectID).collapse('show');
		}
		});jQuery('.collapse').on('shown.bs.collapse', function(){
		jQuery(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
		}).on('hidden.bs.collapse', function(){
		jQuery(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
		});
		

	/************************************ 		For Data Table Start  	**************************************/
		jQuery('#reorder').dataTable({ 
		responsive: true,
		/*"sDom": 't<plf>',*/
			"aaSorting": [[ 4, "asc" ]], 
			"columnDefs": [ { "targets": 5, "orderable": false } ]
			});
	/************************************  		For Data Table End  	**************************************/
    jQuery('.shop_table').parent().addClass('table-responsive');

	 
        });