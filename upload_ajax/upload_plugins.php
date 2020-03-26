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
require_once './application/system/core/plugins.php';
$folder 		= 'files';
$name_Folders 	= "./admin-panel/". $folder ."/"; 
 
// code upload plugins
$zip = new ZipArchive;
// A list of permitted file extensions
$allowed = array('zip', 'ZIP');

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}
	//-- info of file
	$name = $_FILES['upl']['name'];
	$type = $_FILES['upl']['type'];
	$size = $_FILES['upl']['size'];
	$file_name = preg_replace("/\..*$/", "", $name);		
	if(strlen($name)){
		//--
		list($txt, $ext) = explode(".", $name);
		if(in_array($ext,$allowed)){
			
			if($size<(1024*5120)){
				$actual_file_name 	= $name.".".$ext;
				$tmp 				= $_FILES['upl']['tmp_name'];

				if(move_uploaded_file($tmp, $name_Folders.$actual_file_name)){
					$true_zip = $zip->open('./admin-panel/'.$folder.'/'.$name.'.zip');
					if ($true_zip === TRUE) {
						$zip->extractTo('./admin-panel/'.$folder.'/');
						$zip->close();
						unlink('./admin-panel/'.$folder.'/'.$name.'.zip');
						$default_headers = array(
									'Name' 			=> 'Plugin Name',
									'Key' 			=> 'Plugin Key',
									'Icon' 			=> 'Plugin Icon',
									'Update_date' 	=> 'Update date',
									'Version' 		=> 'Version',
									'Author' 		=> 'Author',
									'Url_line'		=> 'Url_line',
									'Url' 			=> 'Url',
								);
									
						$plugin_data = PHP_get_file_data( './admin-panel/'.$folder.'/'.$file_name.'/install.php', $default_headers, 'plugin' );
						
						$Data_name 		= $plugin_data['Name'];
						$Data_key 		= $plugin_data['Key'];
						$Data_icon		= _grab_image($plugin_data['Icon'], './upload/icons/'.strtolower($Data_name).'_icon.png');
						$Data_Update	= $plugin_data['Update_date'];
						$Data_Version	= $plugin_data['Version'];
						$Data_Author	= $plugin_data['Author'];
						$Data_url_line	= $plugin_data['Url_line'];
						$Data_url		= $plugin_data['Url'];
								
						if (PHP_Data_Key_Plugin($Data_key) == false){
							$sql = "UPDATE platform_media SET platform='$Data_name',key_plugin='$Data_key',Data_Update='$Data_Update',version='$Data_Version',icon='$Data_icon',Author='$Data_Author',url_line='$Data_url_line',url='$Data_url' WHERE key_plugin='$Data_key'";
							$pedido = mysqli_query($con, $sql);
							 
						}else{
							mysqli_query($con,"insert into platform_media (key_plugin,platform,Data_Update,url,version,Author,icon,active,url_line) values ('$Data_key','$Data_name','$Data_Update','$Data_url','$Data_Version','$Data_Author','$Data_icon','1','$Data_url_line')");
							echo '{"status":"success"}';
							exit;
						}
						//--
						echo '{"status":"success"}';
						exit;
					}else{
						//--> error zip
						echo '{"status":"error"}';
						exit;
					}	
				}
			}else{
				//-- video file size max 
				echo '{"status":"error"}';
				exit;
			}
		}else{
			//-- Invalid file format..
			echo '{"status":"error"}';
			exit;
		}
	}
}
echo '{"status":"error"}';
exit;