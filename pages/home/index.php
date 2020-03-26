<?php
	$load->page        = 'home';

	@$url_true 	= PHP_Secure($_GET['media']);
	@$strip_tags = array("-video-downloader", "-music-downloader", "-audio-downloader");	
	@$data 		= str_replace($strip_tags, '', $url_true);

	if (empty($_GET['media'])) {
		@$DATA_MEDIA = '';
	}else{
		if (PHP_URL_MEDIA_DATA($data) == TRUE){
			if ($url_true==NULL){
				@$DATA_MEDIA.= $url_true;
			}else{
				@$DATA_MEDIA.= 'ok';
			}
		}else{
			header("Location:../");
			exit();
		}	
	}

	$load_posts = PHP_list_load_article('5', $data);

	$load_posts_html 	 = '';
	
	foreach ($load_posts as $key => $post_) {
		$load_posts_html.= PHP_LoadPage('template/article_html', array(
			'id' => $post_['id'],
			'image' => $post_['image'],
			'title_url' => F_URLSlug($post_['title']),
			'title' => $post_['title'],
			'time' => @date('m/d/Y', $post_['time']),
			'description' => $post_['description'],
		));
	}


	if (isset($_GET['add'])) {
		//-->
		$data_url = PHP_Secure($_GET['add']);
		
		$og_meta					= PHP_Get_Tags($data_url);
		
		$title_url = (utf8_decode(mb_substr($og_meta['title'], 0, 400, "UTF-8")) == NULL ) ? $load->config->title : utf8_decode(mb_substr($og_meta['title'], 0, 400, "UTF-8"));
		
		
		$CODE['OG_TAG_TITLE']		= $title_url;
		@$CODE['OG_TAG_IMAGE']		= ($og_meta['image'] == null) ? $config['theme_url'].'/img/logo.png' : $og_meta['image'];
			@$load->title       		= $title_url;
			$load->content				= PHP_LoadPage('template/home', array(
			//--> url 
			@$CODE['ACTIVE_SHARE'] 		= ($_GET['add']) ? 'ok' : 'off',
			$CODE['SHARE_EXTENSION'] 	= PHP_LoadPage('template/share_url', array(
											'DATA_URL' => $config['site_url'].'/?add='.@$data_url,	
								)),
			@$CODE['share_data'] 		= PHP_Url('youtube',@$data_url,'return', false),
			$CODE['URL_OG'] 			= @$data_og_meta,
			'CONTAINER_URL_HOME' 		=> $site_url,
			'ICONS_MEDIA' => PHP_LoadPage('template/icons_media',array(
				$CODE['GET_TRENDING_FUNCTION'] 		= PHP_GetMedia(24),
				$CODE['GET_TRENDING_NO_CONTENT'] 	= $PHP_Error->_404,
			)),	
		));	
	}else{
		$load->title       = $load->config->title;
		$load->content = PHP_LoadPage('template/home', array(
			'ICONS_MEDIA' => PHP_LoadPage('template/icons_media',array(
				$CODE['GET_TRENDING_FUNCTION'] 		= PHP_GetMedia(24),
				$CODE['GET_TRENDING_NO_CONTENT'] 	= '404',
				$CODE['ACTIVE_MEDIA'] 	= $DATA_MEDIA,
				$CODE['ACTIVE_MEDIA_NAME'] 	= $data,
			)),
			$CODE['LOAD_POST_BLOGS'] = $load_posts_html,
		));
	}