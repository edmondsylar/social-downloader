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
/*
	page urls -> modal 
*/
$type = PHP_Secure($_REQUEST['type']);
if($type == 'delate'){
	
	$data = PHP_Secure($_POST['id']);
	$sql = "DELETE FROM ".T_SHARE." WHERE id = '$data'";   //chat
	mysqli_query($con, $sql);
}else{
	
	$data = PHP_Secure($_POST['id']);
	$page_loaded = PHP_AdminLoadPage("urls/modal_url",array(
			$CODE['DATA_ID'] = $data,
			'DATA_ICON' => _Get_icon_plugins(_Get_dataUrl($data,'platform')),
			'DATA_ID_URL' => _Get_dataUrl($data,'id_url'),
			'DATA_URL' => _Get_dataUrl($data,'url'),
			'DATA_PLATFORM' => _Get_dataUrl($data,'platform'),
			'DATA_FACEBOOK' => _Get_dataUrl($data,'facebook'),
			'DATA_TWITTER' => _Get_dataUrl($data,'twitter'),
			'DATA_WHATSAPP' => _Get_dataUrl($data,'whatsapp'),
			'DATA_OTHER' => _Get_dataUrl($data,'other'),
			'DATA_VIEWS' => _Get_dataUrl($data,'views'),
			'DATA_IP_USER' => _Get_dataUrl($data,'ip_user'),
		)
	);
	echo $page_loaded;
}