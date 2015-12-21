jQuery(document).ready(function() {
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
	 
jQuery('#username').addClass('input-sm form-full');
jQuery('#password').addClass('input-sm form-full');
jQuery('#wp-submit').addClass('btn btn-md btn-color-b form-full');

	 
	 
	 
        });