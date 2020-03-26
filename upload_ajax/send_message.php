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
 
	if (empty($_REQUEST['form_email']) || empty($_REQUEST['text_message'])) {
		$data['status']  = 400; 
	}else{
		$_REQUEST_ID 		= $_REQUEST['id'];
		$username 			= $_REQUEST['form_email'];
		preg_match('/^[_a-z0-9-]+/', $username, $resultado);
		$data['EMAIL_CODE'] = '';
		$data['USERNAME'] 	= $resultado[0];
		$data['MESSAGE'] 	= $_REQUEST['text_message'];
	
		$send_email_data = array(
			'from_name' => $load->config->name . ' - message',
			'to_email' => $_REQUEST['form_email'],
			'to_name' => $_REQUEST['form_email'],
			'subject' => 'message - ' . $load->config->name,
			'charSet' => 'UTF-8',
			'message_body' => PHP_LoadPage('template/email',$data),
			'is_html' => true
		);
		
		$send_message = PHP_Message_EMAIL($send_email_data);
		
		$sqli 		= "UPDATE ".T_COMMENTS." SET active='0',text='$_REQUEST['text_message']' WHERE id = '$_REQUEST_ID'";
		$status 	= mysqli_query($con, $sqli);
		$data['url']    	= './comments';
		$data['status']  = 200; 
	}	
//-->			
header('Content-Type: application/json');
echo json_encode($data);
exit(); 


