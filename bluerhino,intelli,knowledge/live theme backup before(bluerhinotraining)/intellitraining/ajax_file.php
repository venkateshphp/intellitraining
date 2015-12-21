<?php
@ob_start();
@session_start();
include_once('../../../wp-config.php');

global $post,$wpdb;

 

 if($_REQUEST['action']=='login_check') {

$user_name = $_POST['f_email'];
$password_login = $_POST['f_pass'];
$user_ID = username_exists( $user_name );
//$email = "john.doe@example.com";
//
//if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//  echo("$email is a valid email address");
//} else {
//  echo("$email is not a valid email address");
//}
//
//if(!wp_check_password($password, $user->user_pass, $user->ID)){ //bad password

if (!filter_var($user_name, FILTER_VALIDATE_EMAIL) === false) {

$email=$user_name;
//Check if user exists in WordPress database
    $user = get_user_by('email', $email);

    //bad email
    if(!$user){
    echo 'Please Check Your Login Details';
    }
    else{ //check password
        if(!wp_check_password($password_login, $user->user_pass, $user->ID)){ //bad password
      echo 'Please Check Your Login Details';
        }else{
       echo "success";
        }
 }
 }else{

$check = wp_authenticate_username_password( NULL, $user_name, $password_login );
if(is_wp_error( $check )){
echo 'Please Check Your Login Details';
 } else { 
 wp_set_current_user($user_ID, $user_name);
 	wp_set_auth_cookie($user_ID);
	do_action('wp_login', $user_name);
echo "success";

 	}
}



}
?>