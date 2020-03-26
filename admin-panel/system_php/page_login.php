<?php
/*
	login admin 
*/
@session_start();

		if (@$_COOKIE["_admin_user"]!='') {
			@header("Location:./");
			exit('<meta http-equiv="Refresh" content="0;url=./">');
		}
		
			$errors   		= array();
			$erros_final	= '';
			$username 		= '';
			$email    		= '';	
			$success		= '';
		if (!empty($_POST)) {
			if(PHP_matchToken('mailer')) {
			// do stuff
				if (empty($_POST['login_data_admin_pass']) || empty($_POST['login_data_admin_mail'])) {
					$errors[] = $lang->please_check_details;
				} else {
					
					$email        	 = PHP_Secure($_POST['login_data_admin_mail']);	
					$password        = md5(PHP_Secure($_POST['login_data_admin_pass']));
					
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$errors[] = $lang->email_invalid_characters;
					}

					if ($email == PHP_Admin_Data('24','SELECT') && $password == PHP_Admin_Data('25','SELECT')){
						
						$verfiti_login = PHP_Crypt_code(PHP_GetKey(15,15,false,false,true,false));
						//PHP_Admin_Data('31','UPDATE',$verfiti_login);
						$launcher_data = array(
							'is_logged_data'=> $verfiti_login
						);
						ADMIN_Launcher_Options($launcher_data);
						$s = 360000; // seconds in a year
						setcookie("_admin_user", trim($verfiti_login), time() + $s, '/', null, null, true);
						@header("Location: " . PHP_Link('admin'));
						//exit('<meta http-equiv="Refresh" content="0;url=./admin">');
						
					}else{
						$errors[] = $lang->incorrect_information;
					}
				}
			}
		}	
		
		if (!empty($errors)) {
			foreach ($errors as $key => $error) {
				$erros_final .= $error . "<br>";
			}
		}
		
		@$CODE['ERROR_LOGIN_ADMIN'] = $erros_final;
		@$CODE['EMAIL'] 			= @$email;
				
		