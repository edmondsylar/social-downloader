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

	@$CODE['LOAD_LIST_PLUGINS'] 	= _Load_list_user();
	@$CODE['LOAD_PLUGIN_KEY'] 		= (PHP_Secure($_GET['u'])) ? _info_plugin_load($_GET['u'],true):NULL;
	@$CODE['LOAD_PAGES_PLUGINS']	= PHP_Secure($_GET['p']);
	
