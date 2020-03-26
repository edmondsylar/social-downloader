<?php
//-->
if (@$_COOKIE["_admin_user"]!='') {	
	if (IS_LOGGED_DATA($_COOKIE["_admin_user"])) {
		echo 'EE_NO_ADMIN';
		exit('<meta http-equiv="Refresh" content="15;url=./logged">');
	}
}else{
	//-->
}
/*
	page blogs 
*/
	@$URL_POST 					= PHP_Secure($_GET['b']);
	@$CODE['LIST_CATEGORY'] 	= _list_category_article();
	@$CODE['LOAD_PAGES_BLOG'] 	= PHP_Secure($_GET['p']);
	@$CODE['LOAD_EDIT_DATA'] 	= (PHP_Secure($URL_POST)) ? _load_article_data($URL_POST):NULL;
	@$CODE['LOAD_ALL_BLOG'] 			= _load_article_data();
	
	
	if ($CODE['LOAD_PAGES_BLOG']=='edit') {
		if (empty($CODE['LOAD_EDIT_DATA'][0]['id'])){
			header("Location:./blogs");
			exit();
		}else{
			//-->ok
		}
	}else{
		//-->ok
	}
	