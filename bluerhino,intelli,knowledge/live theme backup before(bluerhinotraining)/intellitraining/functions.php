<?php
/*****************************Include The Theme opions File*******************************/
require_once ( get_template_directory() .'/includes/class_file.php' );

load_theme_textdomain('intellitraining', TEMPLATEPATH.'/languages/');
if ( function_exists('register_sidebars') )
	register_sidebar(array('name'=>'Sidebar','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Footer #1','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Footer #2','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Footer #3','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Footer #4','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Sidebar In Courses Page Image-One','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Sidebar In Courses Page Image-Two','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Footer Fullwidth','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Twitter Feeds','before_title'=>'<h4>','after_title'=>'</h4>'));

add_filter('comments_template', 'legacy_comments');
if(!function_exists('legacy_comments')) {
function legacy_comments($file) {
	if(!function_exists('wp_list_comments')) : // WP 2.7-only check
		$file = TEMPLATEPATH . '/legacy.comments.php';
	endif;
	return $file;
}
}
		/*************************************************For Auto Login**************************************************/
		if(!function_exists('auto_login')) {

	function auto_login( $user ) {
					$username   = $user;
					if ( !is_user_logged_in() ) {
						$user = get_user_by('login', $username );
						$user_id = $user->ID;
						wp_set_current_user( $user_id, $user_login );
						wp_set_auth_cookie( $user_id );
						do_action( 'wp_login', $user_login );
					}     
				}
}				
/**************************************Add Additional Fields In Category single Page Backend start*********************************/
// the option name
define('MY_CATEGORY_FIELDS', 'my_category_fields_option');
// your fields (the form)
//add_filter('edit_category_form', 'my_category_fields');
		if(!function_exists('my_category_fields')) {
function my_category_fields($tag) {
    $tag_extra_fields = get_option(MY_CATEGORY_FIELDS);
    ?>
<table class="form-table">
        <tr class="form-field">
            <th scope="row" valign="top"><label for="_ce4-categoryTitle">Full Category Title</label></th>
            <td><input name="_ce4-categoryTitle" id="_ce4-categoryTitle" type="text" size="40" aria-required="false" value="<?php echo $tag_extra_fields[$tag->term_id]['my_title']; ?>" />
            <p class="description">The title is optional but will be used in place of the name on the home page category index.</p></td>
        </tr>
        <tr class="form-field">
            <th scope="row" valign="top"><label for="_ce4_fullDescription">Full Category Text for Landing Page</label></th>
            <td><textarea style="height:70px; width:100%;margin-left:-5px;" name="_ce4_fullDescription" id="_ce4_fullDescription"><?php  echo $tag_extra_fields[$tag->term_id]['my_description']; ?></textarea>
            <p class="description">This text will appear on the category landing page when viewing all articles in a category. The image, you supply above, if any, will be used here and this content will wrap around it.</p></td>
        </tr>
</table>
    <?php
}
}
// when the form gets submitted, and the category gets updated (in your case the option will get updated with the values of your custom fields above
add_filter('edited_terms', 'update_my_category_fields');
if(!function_exists('update_my_category_fields')) {
	function update_my_category_fields($term_id) {	
	  if($_POST['taxonomy'] == 'category'):
		$tag_extra_fields = get_option(MY_CATEGORY_FIELDS);
		$tag_extra_fields[$term_id]['my_title'] = strip_tags($_POST['_ce4-categoryTitle']);
		$tag_extra_fields[$term_id]['my_description'] = strip_tags($_POST['_ce4_fullDescription']);
		update_option(MY_CATEGORY_FIELDS, $tag_extra_fields);
	  endif;
	}
}
// when a category is removed
add_filter('deleted_term_taxonomy', 'remove_my_category_fields');
if(!function_exists('remove_my_category_fields')) {
	function remove_my_category_fields($term_id) {
	  if($_POST['taxonomy'] == 'category'):
		$tag_extra_fields = get_option(MY_CATEGORY_FIELDS);
		unset($tag_extra_fields[$term_id]);
		update_option(MY_CATEGORY_FIELDS, $tag_extra_fields);
	  endif;
	}
}	
/******************************************    Add Additional Fields In Category single Page Backend start new  ************************************************************/
/** Add Custom Field To Category Form */
if(!function_exists('category_form_custom_field_add')) {
	function category_form_custom_field_add( $taxonomy ) {?>
	<div class="form-field">
	  <label for="category_custom_order">Custom Order</label>
	  <input name="category_custom_order" id="category_custom_order" type="text" value="" size="40" aria-required="true" />
	  <p class="description">Enter a custom order value.</p>
	</div>
	<?php }
}
if(!function_exists('category_form_custom_field_edit')) {
	function category_form_custom_field_edit( $tag, $taxonomy ) {
		$option_name = 'category_custom_order_' . $tag->term_id;
		$category_custom_order = get_option( $option_name );
	?>
	<tr class="form-field">
	  <th scope="row" valign="top"><label for="category_custom_order">Custom Order</label></th>
	  <td>
		<input type="text" name="category_custom_order" id="category_custom_order" value="<?php echo esc_attr( $category_custom_order ) ? esc_attr( $category_custom_order ) : ''; ?>" size="40" aria-required="true" />
		<p class="description">Enter a custom order value.</p>
	  </td>
	</tr>
	<?php
	}
}
/** Save Custom Field Of Category Form */
add_action( 'created_category', 'category_form_custom_field_save', 10, 2 );	
add_action( 'edited_category', 'category_form_custom_field_save', 10, 2 );
if(!function_exists('category_form_custom_field_save')) {
	function category_form_custom_field_save( $term_id, $tt_id ) {
		if ( isset( $_POST['category_custom_order'] ) ) {			
			$option_name = 'category_custom_order_' . $term_id;
			update_option( $option_name, $_POST['category_custom_order'] );
		}
	}
}
define('WYSIWYG_META_BOX_ID', 'my-editor');
define('WYSIWYG_EDITOR_ID', 'myeditor'); //Important for CSS that this is different
define('WYSIWYG_META_KEY', 'by_rail');
define('WYSIWYG_META_BOX_ID1', 'my-editor1');
define('WYSIWYG_EDITOR_ID1', 'myeditor1'); //Important for CSS that this is different
define('WYSIWYG_META_KEY1', 'by_car');
add_action('admin_init', 'wysiwyg_register_meta_box');
add_action('admin_init', 'wysiwyg_register_meta_box1');

if(!function_exists('wysiwyg_register_meta_box')) {
	function wysiwyg_register_meta_box(){
			add_meta_box(WYSIWYG_META_BOX_ID, __('By Rail Box', 'wysiwyg'), 'wysiwyg_render_meta_box', 'course_venues');
	}
}
if(!function_exists('wysiwyg_register_meta_box1')) {
	function wysiwyg_register_meta_box1(){
			add_meta_box(WYSIWYG_META_BOX_ID1, __('By Car Box', 'wysiwyg'), 'wysiwyg_render_meta_box1', 'course_venues');
	}
}		
if(!function_exists('wysiwyg_render_meta_box')) {
	function wysiwyg_render_meta_box(){	
						global $post;
						$meta_box_id = WYSIWYG_META_BOX_ID;
						$editor_id = WYSIWYG_EDITOR_ID;
						$value= get_post_meta($post->ID, 'rail_title', true);
						//Add CSS & jQuery goodness to make this work like the original WYSIWYG
						echo "Title : <input type='text' name='rail_title' value='".$value."'>
								<style type='text/css'>
										#$meta_box_id #edButtonHTML, #$meta_box_id #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
										#$editor_id{width:100%;}
										#$meta_box_id #editorcontainer{background:#fff !important;}
										#$meta_box_id #editor_id_fullscreen{display:none;}
										input{margin:2% 0 2% 0;}
								</style>
								<script type='text/javascript'>
										jQuery(function($){
												$('#$meta_box_id #editor-toolbar > a').click(function(){
														$('#$meta_box_id #editor-toolbar > a').removeClass('active');
														$(this).addClass('active');
												});
												
												if($('#$meta_box_id #edButtonPreview').hasClass('active')){
														$('#$meta_box_id #ed_toolbar').hide();
												}
												
												$('#$meta_box_id #edButtonPreview').click(function(){
														$('#$meta_box_id #ed_toolbar').hide();
												});
												
												$('#$meta_box_id #edButtonHTML').click(function(){
														$('#$meta_box_id #ed_toolbar').show();
												});
				
					//Tell the uploader to insert content into the correct WYSIWYG editor
					$('#media-buttons a').bind('click', function(){
					 var customEditor = $(this).parents('#$meta_box_id');
					 if(customEditor.length > 0){
					  edCanvas = document.getElementById('$editor_id');
					 }
					 else{
					  edCanvas = document.getElementById('content');
					 }
					});
										});
								</script>
						";
						//Create The Editor
						$content = get_post_meta($post->ID, WYSIWYG_META_KEY, true);
						the_editor($content, $editor_id);
						//Clear The Room!
						echo "<div style='clear:both; display:block;'></div>";
			 }
	}
	
	if(!function_exists('wysiwyg_render_meta_box1')) {
			function wysiwyg_render_meta_box1(){	
					global $post;
					$meta_box_id1 = WYSIWYG_META_BOX_ID1;
					$editor_id1 = WYSIWYG_EDITOR_ID1;
					$value= get_post_meta($post->ID, 'car_title', true);
					//Add CSS & jQuery goodness to make this work like the original WYSIWYG
					echo "Title : <input type='text' name='car_title' value='".$value."'>
							<style type='text/css'>
									#$meta_box_id1 #edButtonHTML, #$meta_box_id1 #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
									#$editor_id1{width:100%;}
									#$meta_box_id1 #editorcontainer{background:#fff !important;}
									#$meta_box_id1 #editor_id1_fullscreen{display:none;}
									input{margin:2% 0 2% 0;}
							</style>
							<script type='text/javascript'>
									jQuery(function($){
											$('#$meta_box_id1 #editor-toolbar > a').click(function(){
													$('#$meta_box_id1 #editor-toolbar > a').removeClass('active');
													$(this).addClass('active');
											});
											
											if($('#$meta_box_id1 #edButtonPreview').hasClass('active')){
													$('#$meta_box_id1 #ed_toolbar').hide();
											}
											
											$('#$meta_box_id1 #edButtonPreview').click(function(){
													$('#$meta_box_id1 #ed_toolbar').hide();
											});
											
											$('#$meta_box_id1 #edButtonHTML').click(function(){
													$('#$meta_box_id1 #ed_toolbar').show();
											});
			
				//Tell the uploader to insert content into the correct WYSIWYG editor
				$('#media-buttons a').bind('click', function(){
				 var customEditor = $(this).parents('#$meta_box_id1');
				 if(customEditor.length > 0){
				  edCanvas = document.getElementById('$editor_id1');
				 }
				 else{
				  edCanvas = document.getElementById('content');
				 }
				});
									});
							</script>
					";
					//Create The Editor
					$content = get_post_meta($post->ID, WYSIWYG_META_KEY1, true);
					the_editor($content, $editor_id1);
					//Clear The Room!
					echo "<div style='clear:both; display:block;'></div>";
		 }
	}
add_action('save_post', 'wysiwyg_save_meta');
	if(!function_exists('wysiwyg_save_meta')) {
     	function wysiwyg_save_meta(){
			$editor_id = WYSIWYG_EDITOR_ID;
			$meta_key = WYSIWYG_META_KEY;
			if(isset($_REQUEST[$editor_id]))
					update_post_meta($_REQUEST['post_ID'], WYSIWYG_META_KEY, $_REQUEST[$editor_id]);
					 update_post_meta($_REQUEST['post_ID'], 'rail_title', $_REQUEST['rail_title']);
					 $editor_id1 = WYSIWYG_EDITOR_ID1;
			$meta_key1 = WYSIWYG_META_KEY1;
			if(isset($_REQUEST[$editor_id1]))
					update_post_meta($_REQUEST['post_ID'], WYSIWYG_META_KEY1, $_REQUEST[$editor_id1]);
					
									 update_post_meta($_REQUEST['post_ID'], 'car_title', $_REQUEST['car_title']);
     }
}	 
/*********************************  Avoid update in Woocommerce Start ************************************************/
/*function filter_plugin_updates( $value ) {
 unset( $value->response['woocommerce/woocommerce.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );*/
/***********************************  Avoid update in Woocommerce End************************************************/
/*********************************************    Redirect Empty Cart Page Start  ************************************************/
 if(!function_exists('skyverge_change_empty_cart_button_url')) {
	function skyverge_change_empty_cart_button_url() {
	$redirect_url = get_site_url()."/courses";
		return $redirect_url;
		//Can use any page instead, like return '/sample-page/';
     }
  }	 
add_filter( 'woocommerce_return_to_shop_redirect', 'skyverge_change_empty_cart_button_url' );
/*********************************************     Redirect Empty Cart Page End   ************************************************/
/*********************************************    Login With Email Address Start  ************************************************/
 if(!function_exists('login_with_email_address')) {
	 function login_with_email_address($username) {
			$user = get_user_by('email',$username);
			if(!empty($user->user_login))
					$username = $user->user_login;
			return $username;
	}
}	
add_action('wp_authenticate','login_with_email_address');
/*********************************************    Login With Email Address End ************************************************/
/*********************************************   Redirect after login validation failed Start************************************************/
/*-------------------------------------------------------------------------------------*/
/* Login Hooks and Filters
/*-------------------------------------------------------------------------------------*/
if( ! function_exists( 'custom_login_fail' ) ) {
    function custom_login_fail( $username ) {
        $referrer = $_SERVER['HTTP_REFERER']; // where did the post submission come from?
        // if there's a valid referrer, and it's not the default log-in screen
        if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
            if ( !strstr($referrer,'?login=failed') ) { // make sure we don’t append twice
                wp_redirect( $referrer . '?login=failed' ); // append some information (login=failed) to the URL for the theme to use
            } else {
                wp_redirect( $referrer );
            }
            exit;
        }
    }
}
add_action( 'wp_login_failed', 'custom_login_fail' ); // hook failed login
if( ! function_exists( 'custom_login_empty' ) ) {
    function custom_login_empty(){
        $referrer = $_SERVER['HTTP_REFERER'];
        if ( strstr($referrer,get_home_url()) && $user==null ) { // mylogin is the name of the loginpage.
            if ( !strstr($referrer,'?login=empty') ) { // prevent appending twice
                wp_redirect( $referrer . '?login=empty' );
            } else {
                wp_redirect( $referrer );
            }
        }
    }
}
add_action( 'authenticate', 'custom_login_empty');
/********************************************  Redirect after login validation failed End ************************************************/
/********************************************  Custon trim words to allow HTML Tags like anchor tag Start ************************************************/
// Custom Excerpt
 if(!function_exists('custom_trim_words')) {
	function custom_trim_words( $text, $num_words = 55, $more = null ) {
		if ( null === $more )
			$more = __( '&hellip;' );
	
		$original_text = $text;
		$text = strip_shortcodes( $text );
		// Add tags that you don't want stripped
		$text = strip_tags( $text, '<strong>, <b>, <em>, <i>, <a>' );
	
		if ( 'characters' == _x( 'words', 'word count: words or characters?' ) && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) {
			$text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
			preg_match_all( '/./u', $text, $words_array );
			$words_array = array_slice( $words_array[0], 0, $num_words + 1 );
			$sep = '';
		} else {
			$words_array = preg_split( "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY );
			$sep = ' ';
		}
	
		if ( count( $words_array ) > $num_words ) {
			array_pop( $words_array );
			$text = implode( $sep, $words_array );
			$text = $text . $more;
		} else {
			$text = implode( $sep, $words_array );
		}
	
		return apply_filters( 'custom_trim_words', $text, $num_words, $more, $original_text );
 }
} 
/********************************************  Custon trim words to allow HTML Tags like anchor tag end ************************************************/
add_filter( 'woocommerce_create_account_default_checked', function( $isChecked) { return true; } );
/**********************************************
      For check is blog page or not Start
 *********************************************/
function is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}
/**********************************************
      For check is blog page or not end
 *********************************************/
/**********************************************
      For Remove html margin top start
 *********************************************/
  add_action('get_header', 'my_filter_head');

  function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
/**********************************************
      For Remove html margin top end
 *********************************************/
?>