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


	@$CODE['PAGES_SETTINGS'] = PHP_Secure($_GET['p']);
	if($CODE['PAGES_SETTINGS'] == 'phpmail'){
		$CODE['FILE_TYPE'] = 'phpmail';
	}else if($CODE['PAGES_SETTINGS'] == 'key_link'){
		$CODE['FILE_TYPE'] = 'key_link';
	}else if($CODE['PAGES_SETTINGS'] == 'terms_of_use'){
		$CODE['FILE_TYPE'] = 'terms_of_use';
	}else if($CODE['PAGES_SETTINGS'] == 'privacy_policy'){
		$CODE['FILE_TYPE'] = 'privacy_policy';
	}else if($CODE['PAGES_SETTINGS'] == 'copyright'){
		$CODE['FILE_TYPE'] = 'copyright';
	}else if($CODE['PAGES_SETTINGS'] == 'admin_setting'){
		$CODE['FILE_TYPE'] = 'admin_setting';
	}else{
		$CODE['FILE_TYPE'] = 'general'; 
	}