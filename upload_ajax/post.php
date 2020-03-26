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
//--
	$data = array();
	$error = false;
	$data['status']  = 400; 
 
	if($_REQUEST['type']=='load'){
		#-->
		$data_id   		= $_REQUEST['more_data_url'];
		echo 'yyy';
		$data['status']  = 200; 
	}else if($_REQUEST['type']=='new'){
		if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['text']) || empty($_FILES["image"])) {
			$error = 400; 
		}else{
			#-->
			$data_text = array(
				'title'			=>$_POST['title'],
				'description'	=>$_POST['description'],
				'text'			=>$_POST['text'],
				'category'		=>$_POST['category'],
				'image'			=>$_POST['image'],
				'image_upload'	=>'yes',
			);
			$status = _Get_article_data($data_text, 'insert');
			$data['status']  	= ($status==true) ? 200 : 400;
			$data['url']    	= './blogs';
		}
	}else if($_REQUEST['type']=='edit'){
		if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['text'])) {
			$error = 400; 
		}else{
			#-->
			$data_text = array(
				'id'			=>$_REQUEST['id'],
				'title'			=>$_POST['title'],
				'description'	=>$_POST['description'],
				'text'			=>$_POST['text'],
				'category'		=>$_POST['category'],
				'image'			=>$_REQUEST['image'],
				'image_upload'	=>(empty($_FILES["image"]))?'no':'yes',
			);
			$status = _Get_article_data($data_text, 'update');
			$data['status']  	= ($status==true) ? 200 : 400;
			$data['url']    	= './blogs';
		}	
	}else if($_REQUEST['type']=='delate'){
		#-->
		$data_text = array(
				'id'			=>$_REQUEST['id'],
			);
		$status = _Get_article_data($data_text, 'delate');
		$data['status']  	= ($status==true) ? 200 : 400;
	}
	 
//-->			
header('Content-Type: application/json');
echo json_encode($data);
exit(); 


