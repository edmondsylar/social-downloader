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
	page urls or links 
*/

	@$CODE['LOAD_LIST_URLS'] 	= _Load_list_urls('100');

	
