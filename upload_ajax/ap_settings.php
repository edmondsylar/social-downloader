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
	if($_REQUEST['type']=='general'){ 
		if (empty($_POST['title_site']) || empty($_POST['name_site']) || empty($_POST['description_site'])) {
			$data['status']  = 400; 
		}else{
			PHP_Admin_Data('3','UPDATE',$_POST['title_site']);
			PHP_Admin_Data('4','UPDATE',$_POST['name_site']);
			PHP_Admin_Data('7','UPDATE',$_POST['description_site']);
			PHP_Admin_Data('16','UPDATE',$_POST['facebook_site']);
			PHP_Admin_Data('17','UPDATE',$_POST['twitter_site']);
			PHP_Admin_Data('11','UPDATE',$_POST['lang_site']);
			$launcher_data = array(
				'articles_active'	=> $_POST['blogs_site'],
				'ad_blocker'		=> $_POST['ad_blocker'],
				'lang_admin'		=> $_POST['lang_site'],
				'google_analytics'	=> $_POST['google_analytics'],
			);
			ADMIN_Launcher_Options($launcher_data);
			#-->
			if (isset($_FILES['image_logo']['name'])) {
				$fileInfo = array(
					'file' => $_FILES["image_logo"]["tmp_name"],
					'name' => $_FILES['image_logo']['name'],
					'size' => $_FILES["image_logo"]["size"],
					'light-logo' => true
				);
				$media    = F_UploadLogo($fileInfo);
			}
			#-->
			if (isset($_FILES['image_icon']['name'])) {
				$fileInfo = array(
					'file' => $_FILES["image_icon"]["tmp_name"],
					'name' => $_FILES['image_icon']['name'],
					'size' => $_FILES["image_icon"]["size"],
					'favicon' => true
				);
				$media    = F_UploadLogo($fileInfo);
			}
			$data['status']  = 200;
		}	
	}else if($_REQUEST['type']=='phpmail'){
			if (empty($_POST['smtp_or_mail']) || empty($_POST['smtp_host']) || empty($_POST['smtp_username']) || empty($_POST['smtp_password']) || empty($_POST['smtp_encryption'])|| empty($_POST['smtp_port'])) {
				$data['status']  = 400; 
			}else{
				$launcher_data = array(
					'smtp_or_mail'		=> PHP_Secure($_POST['smtp_or_mail']),
					'smtp_host'			=> PHP_Secure($_POST['smtp_host']),
					'smtp_username'		=> PHP_Secure($_POST['smtp_username']),
					'smtp_password'		=> PHP_Secure($_POST['smtp_password']),
					'smtp_encryption'	=> PHP_Secure($_POST['smtp_encryption']),
					'smtp_port'			=> PHP_Secure($_POST['smtp_port']),
				);
				ADMIN_Launcher_Options($launcher_data);
				$data['status']  = 200;
			}
	}else if($_REQUEST['type']=='admin_setting'){
		if (empty($_POST['mail_admin']) || empty($_POST['pass_admin'])) {
			$data['status']  = 400; 
		}else{
			PHP_Admin_Data('24','UPDATE',PHP_Secure($_POST['mail_admin']));
			PHP_Admin_Data('25','UPDATE',md5(PHP_Secure($_POST['pass_admin'])));
			$data['status']  = 200;
		}		
	}else if($_REQUEST['type']=='terms_of_use'){
		if (empty($_POST['text'])) {
			$data['status']  = 400; 
		}else{
			PHP_Admin_Data('12','UPDATE',htmlspecialchars($_POST['text']));
			$data['status']  = 200;
		}
	}else if($_REQUEST['type']=='privacy_policy'){
		if (empty($_POST['text'])) {
			$data['status']  = 400; 
		}else{
			PHP_Admin_Data('13','UPDATE',htmlspecialchars($_POST['text']));
			$data['status']  = 200;
		}
	}else if($_REQUEST['type']=='copyright'){
		if (empty($_POST['text'])) {
			$data['status']  = 400; 
		}else{
			PHP_Admin_Data('32','UPDATE',htmlspecialchars($_POST['text']));
			$data['status']  = 200;
		}		
	}else if($_REQUEST['type']=='key_link'){
		if (empty($_POST['secret_key']) || empty($_POST['pass_key'])) {
			$data['status']  = 400; 
		}else{
			$launcher_data = array(
				'crypt_secret_key'	=> PHP_Secure($_POST['secret_key']),
				'crypt_password'	=> PHP_Secure($_POST['pass_key']),
			);
			ADMIN_Launcher_Options($launcher_data);
			$data['status']  = 200;
		}		
	}else{
		
	}
//-->			
header('Content-Type: application/json');
echo json_encode($data);
exit(); 

