<?php
/*
Script for: facebook.com
Author: Zhareiv
Update date: 18-06-2019
Copyright (c) 2018 shareplus. All rights reserved.
*/

	function Data_media_Json($url){
		
		$data = array();
		
		$curl_content = PHP_SYSTEM_url_get_contents($url);
         
		$data["source"]		= "facebook";
        $data["title"] 		= getTitle_facebook($curl_content);
        $data["thumbnail"] 	= get_thumbnail($curl_content);
		$sd_link = sd_finallink($curl_content);
		$data["data"]["0"]["url"] 		= $sd_link;
		$data["data"]["0"]["format"] 	= "mp4";
		$data["data"]["0"]["quality"] 	= 'SD';
		$data["data"]["0"]["size"] 		= PHP_file_size($data["data"][0]["url"]);
		$hd_link = hd_finallink($curl_content);
		if(!empty($hd_link)){
			$data["data"]["1"]["url"] 		= $hd_link;
			$data["data"]["1"]["format"] 	= "mp4";
			$data["data"]["1"]["quality"] 	= 'HD';
			$data["data"]["1"]["size"] 		= PHP_file_size($data["data"][1]["url"]);
		}
        return $data;
    }

    function get_thumbnail($curl_content){
        if (preg_match('/twitter:image"\s*content="([^"]+)"/', $curl_content, $match)) {
            return $match[1];
        }
    }	
///===== this function is to check if there are special characters	
	function cleanStr($str){
		return html_entity_decode(strip_tags($str), ENT_QUOTES, 'UTF-8');
	}
///===== with these functions are to read the data of facebook videos
///-----facebook more url
    function mobil_link($curl_content){
        $regex = '@&quot;https:(.*?)&quot;,&quot;@si';
        if (preg_match_all($regex, $curl_content, $match)) {
            return $match[1][0];
        }
    }
///-----facebook HD videos link
	function hd_finallink($curl_content){
        if (preg_match('/hd_src_no_ratelimit:"([^"]+)"/', $curl_content, $match)) {
            return $match[1];
        } else if (preg_match('/hd_src:"([^"]+)"/', $curl_content, $match)) {
            return $match[1];
        }
	}
///----- facebook SD videos link
	function sd_finallink($curl_content){
		$regex = '/sd_src_no_ratelimit:"([^"]+)"/';
		if (preg_match($regex, $curl_content, $match1)) {
			return $match1[1];

		} else {
			$mobil_link = mobil_link($curl_content);
            if (!empty($mobil_link)) {
                return $mobil_link;
            }
		}
	}
///----- title of the facebook video
    function getTitle_facebook($curl_content){
    
			preg_match('~<title id="pageTitle"[^>]*>(.*?)</title>~si', $curl_content, $match);
			return $match[1];
	 
    }	
?>