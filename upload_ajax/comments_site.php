<?php
#CODE
	$data = array();
	$data['status']  = 400; 
	if (empty($_POST['textarea_comments']) || empty($_POST['email_comments'])) {
		$data['status']  = 400; 
	}else{
		
		if (!filter_var($_POST['email_comments'], FILTER_VALIDATE_EMAIL)) {
            $status  = 400; 
        }
		if($status == 400){
			$data['status']  = 400; 
		}else{	
			$status = PHP_add_comments($_POST['textarea_comments'], $_POST['email_comments']);
			if($status == 200){
				$data['status']  = 200;
			}else{
				$data['status']  = 400;
			}
		}
			
	}		
//-->			
header('Content-Type: application/json');
echo json_encode($data);
exit(); 

