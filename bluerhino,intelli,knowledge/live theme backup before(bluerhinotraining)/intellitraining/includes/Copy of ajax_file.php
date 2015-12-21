<?php
@ob_start();
@session_start();
include_once('../../../../wp-config.php');


global $post,$wpdb,$current_user;
		if($_REQUEST['action']=='chk_values') {
		$chk_values = $_REQUEST['f_checkbox_values'];
			foreach($chk_values  as $key => $values){
			$val = explode('|',$values);
			$chk_cat[$key] = $val[0];
			/*$chk_id[$key] = $val[1];*/
			}
$unique = array_map('unserialize', array_unique(array_map('serialize', $chk_cat)));
$unique_count = count($unique);
$i=0;
foreach($unique as $values){
$filter_array[$i] = $values;
$i++;
}

		//$chk_new = array_unique($chk_cat);
			foreach($filter_array as $key1 => $val){
			$array1[$key1]["taxonomy"] = $val;
			}
		$i=0;
			foreach($chk_values  as $key => $values){
			$val = explode('|',$values);
			
			if (in_array($val[0], $filter_array)){
			$index = array_search($val[0],$filter_array);
			$array[$index]["term"][]=$val[1];
			}
			}
		echo json_encode(array('one'=>$array,'two'=>$array1));
	} 
?>