<?php
require_once './application/Connection.php';

header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

	error_reporting(0);
	@$search_url  			= PHP_Secure($_POST['search']);
	@$more_stories 			= PHP_Secure($_POST['more_data_url']);
	@$report_link 			= PHP_Secure($_POST['report_link']);
	@$name_media 			= PHP_Secure($_POST['name_media']);
	@$share_data 			= PHP_Secure($_POST['share_modal']);
	@$download_file_modal 	= PHP_Secure($_POST['download_file_modal']);
	@$data_api_url 			= PHP_Secure($_GET['data_api_url']);
	@$requests_json 			= PHP_Secure($_GET['api_media']);
	@$requests_info 			= PHP_Secure($_REQUEST['upload']);
	@$requests_info_data		= PHP_Secure($_REQUEST['data']);

	if ($search_url){
//--	
		echo ($search_url=='260319')? PHP_Url('youtube', $options_launcher['EdenPHP_data_url'], 'echo', true) : PHP_Url('youtube', $search_url, 'echo', true);
		
	}else if($download_file_modal){
//--		
		$load_url = PHP_Crypt_code($download_file_modal,true);
		$load_url = PHP_data_ShareUrl('url',$load_url,'','id');
		echo PHP_Url('youtube',$load_url,'echo', false);

	}else if($report_link){
//--
		$load_data = PHP_Report_link($report_link, $name_media);
		if ($load_data == 200){
			echo $lang->message_link_ok;
		}else{
			echo 'error';
		}
	}else if($requests_info){
//--	Data Ajax
	
		include ('./upload_ajax/'.$requests_info.'.php');
	}else if($share_data){
//--		
		$data_id   = PHP_Crypt_code($share_data,true);
		$load_url  = PHP_data_ShareUrl('id_url',$data_id,'','id');
		$data_url  = PHP_data_ShareUrl('url',$data_id,'','id');
		$load_data = PHP_LoadPage('template/share_url', array(
						$CODE['ACTIVE_DATA_MODAL_OG'] = true,	
						$CODE['DATA_UTL_OG_META'] = $data_url,	
						$CODE['ACTIVE_DATA_MODAL'] = true,	
						'DATA_URL' => $config['site_url'].'/s/'.$load_url,	
						'DATA_URL_SHARE' => $config['site_url'].'/s/'.$load_url,	
						'DATA_URL_ORIGINAL' => $data_url,	
						'INFO_VIEWS_ALL_FACEBOOK' => PHP_data_ShareUrl('facebook',$data_id,'','id'),	
						'INFO_VIEWS_ALL_TWITTER' => PHP_data_ShareUrl('twitter',$data_id,'','id'),	
						'INFO_VIEWS_ALL_WHATSAPP' => PHP_data_ShareUrl('whatsapp',$data_id,'','id'),	
						'INFO_VIEWS_ALL_OTHER' => PHP_data_ShareUrl('other',$data_id,'','id'),	
						'INFO_VIEWS_ALL' => PHP_data_ShareUrl('views',$data_id,'','id'),	
					));
					
		echo $load_data;
	}else if($requests_json){
//---->		
		if ($data_api_url == '1234'){
			 
			$plugins_dir	 = "./admin-panel/files";
			$url_platform	 = base64_decode($requests_json);		
			$url	 		 = base64_decode($requests_json);		
			$urlparts		 = parse_url($url_platform);

			$scheme = $urlparts['scheme'];

			if ($scheme == 'https') {
				$true_url = true;
			} else if($scheme == 'http') {
				$true_url = true;
			} else {
				$true_url = false;
			}
			//--
			if ($true_url == true){
				if(PHP_GetMedia() == NULL){
					return_json('503'); 
				}else{
					$line_url 		= PHP_SYSTEM_url_get_contents($config['site_url'].'/requests.php?data_api_url=1234');
					
					//--> special function only for tumblr
					if(preg_match("/([^&]+)(.+)tumblr.com\/post\/([a-z1-9.-_]+)/", $url)){
						//$plugin_line 	= External_links($url_platform, PHP_key_user_tumblr(username_post_id($url_platform),$line_url));
						$plugin = strtolower('tumblr');
					}else{
						$plugin_line 	= External_links($url_platform, $line_url);
						$plugin = strtolower($plugin_line);
					}
					
					if ('tumblr' == NULL) {
						return_json($lang->not_service_media);
					}else{
						include($plugins_dir . "/krcom/functions.php");
						
						$Data_media_Json = Data_media_Json($url);
						
						if (empty($Data_media_Json['data'][0]['url'])){
							return_json('503w');
						}else{
							return_json(Data_media_Json($url_platform));
						}
						
					}	
				}	
			}else{
				return_json('503');
			}
			
		}else{
			@header("Location:./404");
			exit('<meta http-equiv="Refresh" content="0;url=./404">');
		}
	}else if($data_api_url){
		if ($data_api_url == '1234'){
			PHP_Get_url_line();
		}else{
			@header("Location:./404");
			exit('<meta http-equiv="Refresh" content="0;url=./404">');
		}	
	}else{
		@header("Location:./404");
		exit('<meta http-equiv="Refresh" content="0;url=./404">');
	}
?>	