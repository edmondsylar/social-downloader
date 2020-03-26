<?php
/*
Script for: mobile.like-video.com
Author: Zhareiv
Update date: 07-06-2019
Copyright (c) 2018 shareplus. All rights reserved.
*/

	function Data_media_Json($url){
		
		$data = array();
		
		$curl_content = PHP_SYSTEM_url_get_contents(ExtractVideoId($url));
        //$meta  = PHP_Get_Tags($url);
		$data["source"] 			= "Like";
        $data["title"] 				= get_title($curl_content);
        //$data["thumbnail"] 			= $meta['image'];
        $data["thumbnail"] 			= get_thumbnail($curl_content);
		$data["data"][0]["url"] 	= get_url_video($curl_content);
		$data["data"][0]["format"] 	= "mp4";
		$data["data"][0]["quality"] = "HD";
		$data["data"][0]["size"] 	= PHP_file_size($data["data"][0]["url"]);
        
        return $data;
    }
	
	function get_url_video($curl_content){
		preg_match('@"video_url":"(.*?)"@si', $curl_content, $match);
        $url = str_replace('\/', '/', $match[1]);		
        return $url;		
	}
	
	function get_title($curl_content){
		preg_match_all('@<title>(.*?)</title>@si', $curl_content, $match);
        return $match[1][0];
    }

	function get_thumbnail($curl_content){
        preg_match('@"image2":"(.*?)"@si', $curl_content, $match);
        return $match[1];
        
    }
	
	function ExtractVideoId($url){
        $domain = str_ireplace("www.", "", parse_url($url, PHP_URL_HOST));
        switch ($domain) {
            case "mobile.like-video.com":
                $path = parse_url($url, PHP_URL_PATH);
                $path_fragments = explode("/", $path);
                $video_id = end($path_fragments);
                return 'https://mobile.like-video.com/s/'.$video_id;
                break;
            case "likee.video":
                $path = parse_url($url, PHP_URL_PATH);
                $path_fragments = explode("/", $path);
                $video_id = end($path_fragments);
                return 'https://mobile.like-video.com/s/'.$video_id;
                break;
			case "like.video":
                $path = parse_url($url, PHP_URL_PATH);
                $path_fragments = explode("/", $path);
                $video_id = end($path_fragments);
                return 'https://mobile.like-video.com/s/'.$video_id;
                break;				
            default:
                return "";
                break;
        }
    }

?> 