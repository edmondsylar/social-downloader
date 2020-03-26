<?php
if ($options_launcher['articles_active'] != 'on') {
    header('Location: ./404');
    exit();
}

$load->page        = 'articles';



 
	@$Id 			= PHP_Secure($_GET['id']);
	@$Id_post 		= PHP_Secure($_GET['post']);
if(!empty($Id_post)){	
		$data_url 			= PHP_empty_POST($Id_post);
	if($data_url == 0){
		//-- 404
	}else{	
		$load_posts = PHP_list_load_article();

		$load_posts_html 	 = '';
		
		foreach ($load_posts as $key => $post_) {
			$load_posts_html.= PHP_LoadPage('template/article_html', array(
				'id' => $post_['id'],
				'image' => $post_['image'],
				'title_url' => F_URLSlug($post_['title']),
				'title' => $post_['title'],
				'description' => $post_['description'],
				'time' => date('m/d/Y', $post_['time']),
			));
		}
		
		$post = PHP_articles_load($Id_post);
		$load->title       = $post['title'] .' | '. $load->config->title;
		
		$load->content = PHP_LoadPage('template/articles', array(
			'LOAD_POST_BLOGS' => $load_posts_html,
			'LOAD_TITLE' => $post['title'],
			'LOAD_TEXT' => _Decode($post['text']),
			$CODE['NONE'] = 'off',
			$CODE['NONE_LIST'] = 'on',
			$CODE['ADS'] = 'off',
		));
		$CODE['ACTIVE_BLOG_OG'] 				= 'ok';
		$CODE['ACTIVE_BLOG_OG_TITLE'] 			= $post['title'].' - '. $load->config->title;
		$CODE['ACTIVE_BLOG_OG_DESCRIPTION'] 	= $post['description'].' - '. $load->config->title;
		$CODE['ACTIVE_BLOG_OG_IMAGE'] 			= $post['image'];
	}
}else{ 
	$load->title       = $lang->article_text_4 .' | '. $load->config->title;
	$load->content = PHP_LoadPage('template/articles', array(
		'LOAD_POST_BLOGS' => '',
		'LOAD_TITLE' => '',
		'LOAD_TEXT' => '',
		$CODE['NONE'] = 'on',
		$CODE['NONE_LIST'] = 'off',
		$CODE['ADS'] = 'on',
	));
	
}
