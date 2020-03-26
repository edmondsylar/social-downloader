<!DOCTYPE html>
<html>
	<head>
    {{EXTRA_TOP}}
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<?php if($CODE['URL_OG'] == '200'){ ?>
			<title>{{CONTAINER_TITLE}} {{CONFIG name_site}}</title> 
			<meta name="title" content="<?php echo $CODE['OG_TAG_TITLE']; ?>">
			<meta name="description" content="{{CONTAINER_DESC}}">
			<meta name="image" content="<?php echo $CODE['OG_TAG_IMAGE']; ?>">
			<meta name="url" content="{{CONTAINER_URL}}">
			<meta property="og:title" content="<?php echo $CODE['OG_TAG_TITLE']; ?>" />
			<meta property="og:type" content="website" />
			<meta property="og:url" content="{{CONTAINER_URL}}" />
			<meta property="og:image" content="<?php echo $CODE['OG_TAG_IMAGE']; ?>" />
			<meta property="og:description" content="{{CONTAINER_DESC}}" />
			<meta property="og:site_name" content="{{CONTAINER_NAME}}" />
	<?php }else{ ?>
			<?php if(@$CODE['ACTIVE_MEDIA'] == 'ok'){ ?>	
			<title>{{CONTAINER_TITLE}} <?php echo $text_media; ?></title> 
			<meta name="title" content="{{CONTAINER_TITLE}} | <?php echo $text_media; ?>">
			<meta name="description" content="{{CONTAINER_DESC}} | <?php echo $text_media_two; ?>">
			<meta name="image" content="{{CONFIG theme_url}}/img/image_meta.png">
			<meta property="og:title" content="{{CONTAINER_TITLE}} | <?php echo $text_media; ?>" />
			<meta property="og:type" content="website" />
			<meta property="og:url" content="{{CONTAINER_URL}}" />
			<meta property="og:image" content="{{CONFIG theme_url}}/img/image_meta.png" />
			<meta property="og:description" content="{{CONTAINER_DESC}} | <?php echo $text_media_two; ?>" />
			<meta property="og:site_name" content="{{CONTAINER_NAME}}" />
			<?php }else if(@$CODE['ACTIVE_BLOG_OG'] == 'ok'){ ?>
			<title>{{CONTAINER_TITLE}}</title> 
			<meta name="title" content="<?php echo $CODE['ACTIVE_BLOG_OG_TITLE']; ?>">
			<meta name="description" content="<?php echo $CODE['ACTIVE_BLOG_OG_DESCRIPTION']; ?>">
			<meta name="image" content="<?php echo $config['site_url']; ?>/<?php echo $CODE['ACTIVE_BLOG_OG_IMAGE']; ?>">
			<meta property="og:title" content="<?php echo $CODE['ACTIVE_BLOG_OG_TITLE']; ?>" />
			<meta property="og:type" content="website" />
			<meta property="og:url" content="{{CONTAINER_URL}}" />
			<meta property="og:image" content="<?php echo $config['site_url']; ?>/<?php echo $CODE['ACTIVE_BLOG_OG_IMAGE']; ?>" />
			<meta property="og:description" content="<?php echo $CODE['ACTIVE_BLOG_OG_DESCRIPTION']; ?>" />
			<meta property="og:site_name" content="{{CONTAINER_NAME}}" />
			<?php }else{ ?>	
			<title>{{CONTAINER_TITLE}} {{CONFIG name_site}}</title> 
			<meta name="title" content="{{CONTAINER_TITLE}}">
			<meta name="description" content="{{CONTAINER_DESC}}">
			<meta name="image" content="{{CONFIG theme_url}}/img/image_meta.png">
			<meta property="og:title" content="{{CONTAINER_TITLE}}" />
			<meta property="og:type" content="website" />
			<meta property="og:url" content="{{CONTAINER_URL}}" />
			<meta property="og:image" content="{{CONFIG theme_url}}/img/image_meta.png" />
			<meta property="og:description" content="{{CONTAINER_DESC}}" />
			<meta property="og:site_name" content="{{CONTAINER_NAME}}" />
			<?php } ?>	
	<?php } ?>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', '<?php echo $options_launcher["google_analytics"]; ?>', 'auto');
      ga('send', 'pageview');
    </script> 
	<?php echo $options_launcher['add_tag_ad_1']; ?>
    <link rel="shortcut icon" type="image/jpg" href="{{CONFIG theme_url}}/img/favicon.jpg"/>
	</head>
	<?php echo $options_launcher['add_tag_ad_2']; ?>
<body>
	<?php echo $options_launcher['add_tag_ad_3']; ?>
	<script type="text/javascript">
        function Ajax_Requests_File(){
            return "<?php echo $config['site_url']; ?>/requests.php"
		}
	</script>
	<input type="hidden" class="main_session" value="{{MAIN_URL}}">
	{{CONTAINER_CONTENT}}
    {{EXTRA_BOTTOM}}
	<?php echo $options_launcher['add_tag_ad_4']; ?>
</body>
	<?php echo $options_launcher['add_tag_ad_5']; ?>
</html>