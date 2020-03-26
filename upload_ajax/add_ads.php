<?php 
//-->
if (@$_COOKIE["_admin_user"]!='') {	
	if (IS_LOGGED_DATA($_COOKIE["_admin_user"])) {
		echo 'EE_NO_ADMIN';
		@header("Location:./logout");
	}
}else{
	//-->
}
#CODE
$data = array();
$data['status']  = 400; 
if($_REQUEST['type']=='ads'){ 
	$launcher_data = array(
		'ads_one'=> str_replace("'", '"', $_POST['ads_text_1']),
		'ads_two'=> str_replace("'", '"', $_POST['ads_text_2']),
		'ads_three'=> str_replace("'", '"', $_POST['ads_text_3']),
	);
	ADMIN_Launcher_Options($launcher_data);
	$data['status']  = 200; 
}else if($_REQUEST['type']=='ads_tags'){
	$launcher_data = array(
		'add_tag_ad_1'=> str_replace("'", '"', $_POST['add_text_1']),
		'add_tag_ad_2'=> str_replace("'", '"', $_POST['add_text_2']),
		'add_tag_ad_3'=> str_replace("'", '"', $_POST['add_text_3']),
		'add_tag_ad_4'=> str_replace("'", '"', $_POST['add_text_4']),
		'add_tag_ad_5'=> str_replace("'", '"', $_POST['add_text_5']),
	);
	ADMIN_Launcher_Options($launcher_data);
	$data['status']  = 200; 
}
//-->			
header('Content-Type: application/json');
echo json_encode($data);
exit(); 


