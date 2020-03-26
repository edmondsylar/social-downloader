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
$data		= array();
$id		 	= $_REQUEST['type'];
$value 		= $_POST['url_plugin'];

$sqli 	= mysqli_query($con,"SELECT * from ".T_MEDIA." WHERE id = '$id'");
if (mysqli_num_rows($sqli) > 0) {
	$sqli = "UPDATE ".T_MEDIA." SET url='".F_URLSlug($value)."' WHERE id = '$id'";
	mysqli_query($con, $sqli);
	$data['status'] = 200;
}else{
	$data['status'] = 400;
} 	
//-->			
header('Content-Type: application/json');
echo json_encode($data);
exit(); 


