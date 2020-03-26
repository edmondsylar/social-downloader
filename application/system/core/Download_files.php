<?php
// +------------------------------------------------------------------------+
// | @author Deen Zhareiv
// | @author_url : http://codecanyon.net/user/doughouzforest 
// +------------------------------------------------------------------------+
// | EdenPHP - Data and information management system
// | Copyright (c) 2019 EdenPHP. All rights reserved.
// +------------------------------------------------------------------------+
// This function is part of the EdenPHP system
// This function is for image management and editing


 

function EdenPHP_Read_File($location, $filename, $mimeType = 'application/octet-stream', $purchase = false)
{
 
	
	$size	= PHP_file_size($location, false);
	$time	= @date('r', filemtime($location));
	$fm		= @fopen($location, 'rb');
 
	if ($purchase == true) {
		$size = intval($size / 3);
	}
	
	$begin	= 0;
	$end	= $size - 1;

	if (isset($_SERVER['HTTP_RANGE']))
	{
		if (preg_match('/bytes=\h*(\d+)-(\d*)[\D.*]?/i', $_SERVER['HTTP_RANGE'], $matches))
		{
			$begin	= intval($matches[1]);
			if (!empty($matches[2]))
			{
				$end	= intval($matches[2]);
				if ($purchase == true) {
					//$end	= intval($matches[2] / 2);
				}
			}
		}
	} 

	$context_options = array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
    );

	header("Content-Type: $mimeType"); 
	header('Cache-Control: public, must-revalidate, max-age=0');
	header('Pragma: no-cache');
	header('Accept-Ranges: bytes');
	//header("Content-Description: File Transfer");
 	header('Content-Length:' . (($end - $begin) + 1));
	header("Content-Encoding: none");
	header("Content-Disposition: attachment; filename=".$filename."");
	header("Content-Transfer-Encoding: binary");
	
	if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
	}	

	$cur	= $begin;
	fseek($fm, $begin, 0);
	
	while(!feof($fm) && $cur <= $end && (connection_status() == 0))
	{
		print fread($fm, min(2024 * 16, ($end - $cur) + 1));
		ob_flush();
		flush();
		 
		$cur += 2024 * 16;

	}
	 
}








/* 




require_once './application/Connection.php';
set_time_limit(0);
error_reporting(0);
	$_1 = 'NElwTFlXN09jcDdwdXMxWTdsUW1Db2twRGpXaFV3eFhyaHlNaFRnTTNFRzN6T2NUQWhnbXAzdlRsY3R4bjVGdkRFd0dwNnhrc29BOTlRY2pzQTYrU2tXY294Y3RiN1F0SHo0NWNJTVZLa3dEcVVzRlFYWlJnOHIvSERBWnp2dWxTazJQS2tEZ05SeW9mZDl0QVkyWTlKOWRYVERBWE1PQ1BzcG5nVHpTMnRDVjU0aExaWnVtaTNOQmsxbGRSS3Brbm5IUE1XcHlGY2ZFVDZicTkyZS9DUytsblBSd2FiQnBNbXdGT2tpRGxTY2ZSNEFmZ1pXZ2xlcVdwSHlTTVROd3FmUG15WFpSRzU5UmtXa2t4SjNKSmtHZ2R2REY5ZFY5ZFhoUFMwWXFZVTA9';



	$File_Url 		= PHP_DatesCrypt('decrypt', $_1);//-- id with the video link
	$File_Title 	= str_replace(" ", "_", "ww");//-- id with the name of the video	
	$File_Formats 	= 'jpg';
 
 
/* 	$File_Url 		= PHP_DatesCrypt('decrypt', $_GET["url_video"]);//-- id with the video link
	$File_Title 	= str_replace(" ", "_", $_GET["title"]);//-- id with the name of the video	
	$File_Formats 	= $_GET["type_format"]; *
//audio/mpeg

 


	switch ($File_Formats) {
		case 'mp3':
			$type = 'audio/mpeg';
			break;
		case 'ogg':
			$type = 'audio/ogg';
			break;
		case 'oga':
			$type = 'audio/ogg';
			break;
		case 'm4a':
			$type = 'audio/mp4';
			break;
		case 'm4v':
			$type = 'video/mp4';
			break;
		case 'mp4':
			$type = 'video/mp4';
			break;
		case 'webm':
			$type = 'video/webm';
			break;
		case 'ogv':
			$type = 'video/ogg';
		case 'jpg':
			$type = 'image/jpeg';
			break;
		case 'jpeg':
			$type = 'image/jpeg';
			break;
		case 'png':
			$type = 'image/png';
			break;
		case 'gif':
			$type = 'image/gif';
			break;
		case '--':
			$type = '--';
			break;
	}
	
	EdenPHP_Read_File($File_Url, html_entity_decode($File_Title, ENT_QUOTES) . '.' . $File_Formats, $type);
	exit();

 */