<?php
//$line_url 		= PHP_SYSTEM_url_get_contents($config['site_url'].'/requests.php?data_api_url=1234'); 
//--> special function only for tumblr
	if(preg_match("/([^&]+)(.+)tumblr.com\/post\/([^&]+)/", $url)){
//$plugin_line 	= External_links($url_platform, PHP_key_user_tumblr(username_post_id($url_platform),$line_url));
		$plugin = strtolower('tumblr');
//--> special function only for pornhub					
	}else if(preg_match("/([^&]+)(.+)pornhub.com\/([^&]+)/", $url)){
		$plugin = strtolower('pornhub');		
//--> special function only for facebook					
	}else if(preg_match("/facebook.com\/([^&]+)/", $url)){
		$plugin = strtolower('facebook');
		$PHP_Url_refresh = PHP_Url_refresh_facebook(PHP_SYSTEM_url_get_contents($url), 'facebook');
		$url = ($PHP_Url_refresh==null)? $url : $PHP_Url_refresh; 
//--> special function only for bandcamp			
	}else if(preg_match("/([^&]+)(.+)bandcamp.com\/([^&]+)/", $url)){
		$plugin = strtolower('bandcamp');
//--> special function only for quanmin			
	}else if(preg_match("/quanmin(.+)([^&]+).com\/([^&]+)/", $url)){
		$plugin = strtolower('quanmin');
//--> special function only for sina			
	}else if(preg_match("/video.sina(.+)([^&]+)\/([^&]+)/", $url)){
		$plugin = strtolower('sina');
//--> special function only for krcom			
	}else if(preg_match("/krcom.cn\/([^&]+)/", $url)){
		$plugin = strtolower('krcom');	
	}else{
		$plugin_line 	= External_links($url_platform);
		$plugin = strtolower($plugin_line);
	}
//--// 
//--// 
//--// 
	function PHP_Url_refresh_facebook($curl_content, $name_platform) {
		if($name_platform == 'facebook'){
			if (preg_match('@<meta http-equiv="refresh" content="(.*?)" />@si', $curl_content, $match)) {
				if(preg_match("/facebook.com\/([a-z1-9.-_]+)/", $match[1])){
					$return = str_replace('0;url=', "", $match[1]);
				}else{
					$return = '';
				}
			}
		}else{
			$return = '';
		}
		return $return;
    }
//--//	
//--//	
//--//	
//-- tumblr
/*	function PHP_key_user_tumblr($text = null, $url_line){

		if($text == null){
			$data = $text;
		}else{
			$data = str_replace( 'line_tumblr', $text, $url_line );
			if ($data == true){
				$data = str_replace( $text.'.tumblr.com', 'tumblr.com', $data );
			}else{
				$data = str_replace( $text.'.tumblr.com', 'tumblr.com', $data );
			}
		}	
		return $data;		
	}
*/	