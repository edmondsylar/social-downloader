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
//-->
$page = 'dashboard';
if (!empty($_GET['page'])) {
    $page = PHP_Secure($_GET['page']);
}
//-->
$load_header = '';
$page_loaded = '';
$pages = array(
    'logout', 
    'dashboard', 
    'plugins', 
    'upload_plugin', 
    'ads', 
    'server', 
    'settings', 
    'urls',
    'report',
    'comments',
    'blogs',
    'documentation',
    'user'
);

//-->
if (@$_COOKIE["_admin_user"]!='') {	
	if (in_array($page, $pages)) {
		
		$fichero_sistem = PHP_File_admin_system($page);

		if (file_exists($fichero_sistem)) {
			require_once $fichero_sistem;
		} else {
			
		}
//--> Header
		$load_header = PHP_AdminLoadPage("header/content");
		$page_loaded = PHP_AdminLoadPage("$page/content");
	}else{
		$page_loaded = PHP_AdminLoadPage("error/content");
	} 
}else{
	require_once 'system_php/page_login.php';
	$page_loaded = PHP_AdminLoadPage("login/content");
}	
?> 
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel | <?php echo $load->config->title; ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/upload.css'); ?>">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/style_one.css?n=1'); ?>">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/style_user.css?n=1'); ?>">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/style_url.css?n=1'); ?>">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/style_reportes.css?n=1'); ?>">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/style_plugins.css?n=1'); ?>">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/server.css?n=1'); ?>">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/style_login.css?n=1'); ?>">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/style_blogs.css?n=1'); ?>">
		<link rel="stylesheet" href="<?php echo PHP_LoadAdminLink('css/style_documentation.css?n=1'); ?>">
		<link rel="shortcut icon" type="image/png" href="<?php echo PHP_LoadAdminLink('images/icon_site.png'); ?>"/>
		<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->
		<script src="<?php echo PHP_LoadAdminLink('plugins/jquery/jquery.min.js?n=1'); ?>"></script>
		<script src="<?php echo PHP_LoadAdminLink('js/jquery.form.min.js?n=1'); ?>"></script>
		<script src="<?php echo PHP_LoadAdminLink('plugins/chartJS/Chart.min.js?n=1'); ?>"></script>
		<script type="text/javascript">
        function Ajax_Requests_File(){
            return "<?php echo $config['site_url']; ?>/requests.php"
		}
	</script>
	</head>
	<body id="body" class="full_page_html"> 
		<section>
			<!----->
			<?php echo $load_header; ?>
			<!----->
			<?php echo $page_loaded; ?>
		</section>
	</body>
		<script>
			var Delay_f5 = (function(){
			var timer = 0;
			return function(callback, ms){
				clearTimeout (timer);
				timer = setTimeout(callback, ms);
			  };
			})();
		</script>

		<!-- plugin tinymce -->
		<script src="<?php echo PHP_LoadAdminLink('plugins/tinymce/js/tinymce/tinymce.min.js?n=1'); ?>"></script>
		<!--script src="<?php echo PHP_LoadAdminLink('plugins/bootstrap-tagsinput/src/bootstrap-tagsinput.js?n=1'); ?>"></script-->
		<script src="<?php echo PHP_LoadAdminLink('plugins/upload/jquery.knob.js?n=1'); ?>"></script>
		<!-- jQuery File Upload Dependencies -->
		<script src="<?php echo PHP_LoadAdminLink('plugins/upload/jquery.ui.widget.js?n=1'); ?>"></script>
		<script src="<?php echo PHP_LoadAdminLink('plugins/upload/jquery.iframe-transport.js?n=1'); ?>"></script>
		<script src="<?php echo PHP_LoadAdminLink('plugins/upload/jquery.fileupload.js?n=1'); ?>"></script>
		<!-- Our main JS file -->
		<script src="<?php echo PHP_LoadAdminLink('plugins/upload/script.js?n=1'); ?>"></script>
</html> 