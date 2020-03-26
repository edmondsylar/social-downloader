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
	page plugins 
*/
	@$URL_POST 					 = PHP_Secure($_GET['l']);
	@$CODE['LOAD_LIST_MESSAGES'] = _Get_load_Messages();
	@$CODE['LOAD_SEND_MESSAGE']	 = PHP_Secure($_GET['p']);
	@$CODE['LOAD_EDIT_MESSAGE']  = (PHP_Secure($URL_POST)) ? _Get_load_Messages($URL_POST):NULL;
	
	if ($CODE['LOAD_SEND_MESSAGE']=='send_message') {
		if (empty($CODE['LOAD_EDIT_MESSAGE'][0]['id'])){
			header("Location:./comments");
			exit();
		}else{
			//-->ok
		}
	}else{
		//-->ok
	}