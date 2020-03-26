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
function active_media ($data){
	global $con;
	 
	$sqli = mysqli_query($con,"Select * From platform_media WHERE id=".$data."");

	if (mysqli_num_rows($sqli) > 0){
		$data = mysqli_fetch_array($sqli, MYSQLI_ASSOC);
			
		if($data["active"] > 0){
			$data_return = '0';
		}else{
		$data_return = '1';
		}
	}
	return $data_return;
}
	//--
$data 			= mysqli_query($con,"Select * From platform_media WHERE id=".$_REQUEST['id']."");
$check_result 	= @mysqli_num_rows(@$data);
				
if($check_result){
	$sqli = "UPDATE platform_media SET active=".active_media($_REQUEST['id'])." WHERE id=".$_REQUEST['id']."";
	@mysqli_query($con, $sqli);
	$data['status']  = 200;
}
$data['status']  = 400; 			
header('Content-Type: application/json');
echo json_encode($data);
exit(); 
 