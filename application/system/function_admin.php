<?php
// +------------------------------------------------------------------------+
// | @author_email: game123727@gmail.com   
// +------------------------------------------------------------------------+
// | shareplus - The Ultimate PHP Social Networking Platform
// | Copyright (c) 2018 shareplus. All rights reserved.
// +------------------------------------------------------------------------+
/*
Any doubt or failure in the system takes a capture and sends the creator in support
*/
//-->
	 
	function PHP_AdminLoadPage($page_url = '', $data = array(), $set_lang = true) {
		global $load, $lang_text, $lang_admin_text, $config, $CODE, $options_launcher;
		
		$page = './admin-panel/pages/' . $page_url . '.php';
		if (!file_exists($page)) {
			return false;
		}
		$page_content = '';
		ob_start();
		require($page);
		$page_content = ob_get_contents();
		ob_end_clean();
	    if ($set_lang == true) {
			$page_content = preg_replace_callback("/{{LANG (.*?)}}/", function($m) use ($lang_admin_text) {
				return (isset($lang_admin_text[$m[1]])) ? $lang_admin_text[$m[1]] : '';
			}, $page_content);
		}
 
		if (!empty($data) && is_array($data)) {
			foreach ($data as $key => $replace) {
					$object_to_replace = "{{" . $key . "}}";
					@$page_content      = str_replace($object_to_replace, $replace, $page_content);
			}
		}

		#-->
		$page_content = preg_replace("/{{LINK (.*?)}}/", PHP_Link("$1"), $page_content);
		$page_content = preg_replace_callback("/{{CONFIG (.*?)}}/", function($m) use ($config) {
			return (isset($config[$m[1]])) ? $config[$m[1]] : '';
		}, $page_content);
 
		return $page_content;
	}
//--
	function PHP_LoadAdminLinkSettings($link = ''){
		global $site_url;
		return $site_url . '/admin/' . $link;
	}
//--
	function PHP_LoadAdminLink($link = '') {
		global $site_url;
		return $site_url . '/admin-panel/' . $link;
	}
//--
	function PHP_Load_icon($icon_name = '', $type) {
		global $site_url;
		
		switch ($type) {
			//-- here are created the new chats
			case 'device':
				$fo_data = 'icon_device';
				$icon_name = PHP_icon_device($icon_name);
			break;
			case 'browser':
				$fo_data = 'icon_browser';
				$icon_name = PHP_icon_browser($icon_name);
			break;
			case 'flag':
				$fo_data = 'icon_flag';
			break;
		}	
		
		$image = './admin-panel/images/'. $fo_data .'/'.$icon_name.'.png';
		if (file_exists($image)) {
			$return = $site_url . '/admin-panel/images/'. $fo_data .'/' . $icon_name . '.png';
		}else{
			$return = $site_url . '/admin-panel/images/unknown.png';
		}
		
		return $return;
	}
//--
	function PHP_icon_device($image){
		switch ($image) {
			//-- here are created the new chats
			case 'Windows 10':
				$fo_data = 'windows_10';
			break;
			case 'Windows 8.1':
				$fo_data = 'windows';
			break;
			case 'Windows 8':
				$fo_data = 'windows';
			break;
			case 'Windows 7':
				$fo_data = 'windows';
			break;
			case 'Windows Vista':
				$fo_data = 'windows';
			break;
			case 'Windows XP':
				$fo_data = 'windows';
			break;
			case 'Windows 2003':
				$fo_data = 'windows';
			break;
			case 'Windows 2000':
				$fo_data = 'windows';
			break;
			case 'Windows ME':
				$fo_data = 'windows';
			break;
			case 'Windows 98':
				$fo_data = 'windows';
			break;
			case 'Windows 95':
				$fo_data = 'windows';
			break;
			case 'Windows NT 4.0':
				$fo_data = 'windows';
			break;
			case 'Windows Phone':
				$fo_data = 'windows';
			break;
			case 'Windows':
				$fo_data = 'windows';
			break;
			case 'iPhone':
				$fo_data = 'ipad';
			break;
			case 'iPad':
				$fo_data = 'ipad';
			break;
			case 'Debian':
				$fo_data = 'debian';
			break;
			case 'Ubuntu':
				$fo_data = 'ubuntu';
			break;
			case 'Slackware':
				$fo_data = 'slackware';
			break;
			case 'Linux Mint':
				$fo_data = 'linux';
			break;
			case 'Gentoo':
				$fo_data = 'gentoo';
			break;
			case 'ELementary OS':
				$fo_data = 'unknown';
			break;
			case 'Fedora':
				$fo_data = 'fedora';
			break;	
			case 'Kubuntu':
				$fo_data = 'kubuntu';
			break;	
			case 'Linux':
				$fo_data = 'linux';
			break;	
			case 'FreeBSD':
				$fo_data = 'freebsd';
			break;	
			case 'OpenBSD':
				$fo_data = 'freebsd';
			break;	
			case 'NetBSD':
				$fo_data = 'netbsd';
			break;
			case 'Solaris':
				$fo_data = 'solaris';
			break;	
			case 'BlackBerry':
				$fo_data = 'blackberry';
			break;	
			case 'Android':
				$fo_data = 'android';
			break;	
			case 'Firefox OS':
				$fo_data = 'firefox';
			break;	
			case 'Mac OS X':
				$fo_data = 'mac';
			break;	
			case 'Mac OS Classic':
				$fo_data = 'mac';
			break;	
			case 'Mac OS Classic':
				$fo_data = 'mac';
			break;
			case 'OS/2':
				$fo_data = 'unknown';
			break;	
			case 'BeOS':
				$fo_data = 'unknown';
			break;	
			case 'Nintendo':
				$fo_data = 'unknown';
			break;				
			default: 
				$fo_data = 'unknown';
			break;
		}
		return $fo_data;		
	}	
//--
	function PHP_icon_browser($image){
		switch ($image) {
			//-- here are created the new chats
			case 'Microsoft Edge':
				$fo_data = 'microsoft_edge';
			break;
			case 'Internet Explorer':
				$fo_data = 'internet_explorer';
			break;
			case 'Opera Mini':
				$fo_data = 'opera';
			break;
			case 'Opera':
				$fo_data = 'opera';
			break;
			case 'Mozilla Firefox':
				$fo_data = 'mozilla_firefox';
			break;
			case 'Google Chrome':
				$fo_data = 'google_chrome';
			break;
			case 'Safari':
				$fo_data = 'safari';
			break;
			case 'iTunes':
				$fo_data = 'safari';
			break;
			default: 
				$fo_data = 'unknown';
			break;
		}
		return $fo_data;		
	}
//--
	function PHP_Admin_Data($value,$redir,$info = ''){
		global $con;
		$data= array();
		
		if ($redir == 'SELECT'){ 
		
			$sqli = mysqli_query($con,"SELECT * from config WHERE id = $value") or die ("error en la consulta". mysqli_connect_error()) ;
			$data = mysqli_fetch_array($sqli, MYSQLI_ASSOC);			
			$code = $data['value'];
			
		}else if($redir == 'UPDATE') {
			
			$sqli = "UPDATE config SET value='$info' WHERE id='$value'";
			mysqli_query($con, $sqli);
			$code = '';
		}
		
		return @$code;
	}
//--
	function PHP_File_admin_system($data){
		switch ($data) {
			case 'server':
				$file 	= './admin-panel/system_php/server_data.php';
			break;
			case 'upload_plugin':
				$file 	= './admin-panel/system_php/page_upload.php';
			break;
			case 'plugins':
				$file 	= './admin-panel/system_php/page_plugins.php';
			break;
			case 'user':
				$file 	= './admin-panel/system_php/page_user.php';
			break;
			case 'blogs':
				$file 	= './admin-panel/system_php/page_blog.php';
			break;
			case 'settings':
				$file 	= './admin-panel/system_php/page_settings.php';
			break;
			case 'urls':
				$file 	= './admin-panel/system_php/page_urls.php';
			break;
			case 'dashboard':
				$file 	= './admin-panel/system_php/page_dashboard.php';
			break;
			case 'comments':
				$file 	= './admin-panel/system_php/page_comments.php';
			break;
			case 'logout':
				$file 	= './admin-panel/system_php/logout.php';
			break;			
			default: 
				$file 	= '';
			break;
		}
		return $file;
	}
//--
	function _Load_list_plugins(){
		global $con;
		$data 		 = array();
		$query 		 = "SELECT * from ".T_MEDIA."";
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
				$sql_fetch['data'] 	= $sql_fetch['id'];
				$data[]           	= $sql_fetch;
			}
		}
		return $data;		
	}
//--	
	function _Load_list_user() {
		global $con;
		$data 		 = array();
		$query 		 = "SELECT * from ".T_MEDIA."";
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
				$sql_fetch['data'] 	= $sql_fetch['id'];
				$data[]           	= $sql_fetch;
			}
		}
		return $data;		
	}
//--
	function _Get_search($value){
		global $con;
		$data 	= array();
		$query 	= "SELECT * FROM ". T_SHARE ." WHERE id_url LIKE '%$value%' or platform LIKE '%$value%' ORDER BY id DESC LIMIT 60";
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
				$sql_fetch['data'] 	= $sql_fetch['id'];
				$data[]           	= $sql_fetch;
			}
		}
		return $data;	
	}
//--
	function _load_article_data($id = NULL){
		global $con;
		$data = array();
		if($id == null){
			$query 	= "SELECT * from ".T_POST." ORDER BY id DESC LIMIT 2";
		}else{
			$query 	= "SELECT * from ".T_POST." WHERE id = $id";
		}
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
				$sql_fetch['data'] 	= $sql_fetch['id'];
				$data[]           	= $sql_fetch;
			}
		}
		return $data;
	}	
//--
	function _empty_POST($data){
		global $con;
		
		$sqli = mysqli_query($con,"SELECT * from ".T_POST." WHERE id = '$data'") or die ("error en la consulta". mysqli_connect_error()) ;
		if (mysqli_num_rows($sqli) > 0) {
			$post = '1';	
		}else{
			$post = ' ';	
		}
			
		return $post;
	}	
//--	
	function _load_article_data_list($lower_limit, $page_limit){
		global $con;
		$data = array();
		
		$query = " SELECT * FROM tbl_pagination WHERE 1 limit ". ($lower_limit)." ,  ". ($page_limit). " ";
		
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
				$sql_fetch['data'] 	= $sql_fetch['id'];
				$data[]           	= $sql_fetch;
			}
		}
		return $data;
	}	
//--	
	function _list_category_article(){
		global $con;
		$data 		 = array();
		$query 		 = "SELECT * from ".T_MEDIA."";
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
				$sql_fetch['data'] 	= $sql_fetch['id'];
				$data[]           	= $sql_fetch;
			}
		}
		return $data;		
	}
//--
	function _Decode($text = '') {
		return htmlspecialchars_decode($text);
	}
//--
	function _Get_article_data($data = array(), $type){
		global $con;
		
		$file_info   = array(
            'file' => $_FILES['image']['tmp_name'],
            'size' => $_FILES['image']['size'],
            'name' => $_FILES['image']['name'],
            'type' => $_FILES['image']['type'],
            'crop' => array(
                'width' => 600,
                'height' => 400
            )
        );
		
		 
        $file_upload    = ($data['image_upload']=='no')?'no':F_ShareFile($file_info);
		$id 			= $data['id'];
		$title 			= PHP_Secure(F_ShortText($data['title'],150));
		$description 	= PHP_Secure(F_ShortText($data['description'],200));
		$text 			= htmlspecialchars($data['text']);
		$category 		= PHP_Secure($data['category']);
		$image 			= PHP_Secure($data['image']);
		$time 			= time();
		 
		
		if($type=='insert'){
			#-->
			$sqli		= "INSERT INTO ".T_POST." (title,description,text,image,category,time)VALUES ('$title','$description','$text','$file_upload','$category','$time');";
			$status 	= mysqli_query($con, $sqli);
			$return 	= ($status) ? true : false;
		}else if($type=='update'){
			#-->
			if($file_upload=='no'){
				$sqli 		= "UPDATE ".T_POST." SET title='$title', description='$description', text='$text', category='$category' WHERE id = '$id'";
			}else{
				$sqli 		= "UPDATE ".T_POST." SET title='$title', description='$description', text='$text', image='$file_upload', category='$category' WHERE id = '$id'";
			}
			$status 	= mysqli_query($con, $sqli);
			$return 	= ($status) ? true : false;
		}else if($type=='delate'){
			#-->
			$sqli = "DELETE FROM ".T_POST." WHERE id = '$id'";
			$status 	= mysqli_query($con, $sqli);
			$return 	= ($status) ? true : false;
		}
		return $return;
	}
//--		
	function _Get_icon_plugins($value){
		global $con;
		$sql = mysqli_query($con,"SELECT * from ". T_MEDIA ." WHERE platform = '$value'");
		$data = mysqli_fetch_array($sql, MYSQLI_ASSOC);
		return $data['icon'];
	}
//--
	function _Get_dataUrl($id, $value){
		global $con;
		$data= array();
		$sql = mysqli_query($con,"SELECT * from ".T_SHARE." WHERE id = '$id'");
		$data = mysqli_fetch_array($sql, MYSQLI_ASSOC);
		return @$data[$value];
	}
//-- 
	function _Get_load_Messages($id = NULL){
		global $con;
		$data 		 = array();
		if($id == NULL){
			$query 	= "SELECT * from ".T_COMMENTS." WHERE active='1' ORDER BY id ASC LIMIT 100";
		}else{
			$query 	= "SELECT * from ".T_COMMENTS." WHERE id = $id";
		}
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
					$sql_fetch['data'] 	= $sql_fetch['id'];
					$data[]           	= $sql_fetch;
			}
		}
		return $data;	
	}
//--	
	function _Load_list_urls($LIMIT) {
		global $con;
		$data 		 = array();
		$query 		 = "SELECT * from ".T_SHARE." ORDER BY views ASC LIMIT ".$LIMIT."";
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
				$sql_fetch['data'] 	= $sql_fetch['id'];
				$data[]           	= $sql_fetch;
			}
		}
		return $data;		
	}	
//--
	function _info_plugin_load($info){
		global $con;
		$data = array();
		$info = PHP_Secure($info);
		$query = "SELECT * from ".T_MEDIA." WHERE key_plugin = '$info'";
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
				$sql_fetch['key_plugin'] 	= $sql_fetch['key_plugin'];
				$data[]           	= $sql_fetch;
			}
		}
		return $data;
	}
//--
	function _round_plugins_use($info){
		global $con;
		$pedir 			= mysqli_query($con,"SELECT count(*) as cuenta from ".T_SHARE."");
		$sql_query		= mysqli_fetch_assoc($pedir);
		$pedir_info		= mysqli_query($con,"SELECT count(*) as cuenta from ".T_SHARE." WHERE platform='".strtolower($info)."'");
		$sql_query_info	= mysqli_fetch_assoc($pedir_info);
		$platform_info 	= (string)$sql_query_info["cuenta"];
		$platform_all 	= (string)$sql_query["cuenta"];
		return ($platform_info==0)?'0':round(($platform_info/$platform_all)*100);	
		
	}
//--
	function _round_more_share($info, $type = 'facebook'){
		global $con;
		$query 	= mysqli_query($con,"SELECT sum(". $type .") FROM ". T_SHARE ." WHERE platform='$info'"); 
		$data 	= mysqli_fetch_row($query);
		echo $data[0];
	}
//--
	function PHP_GetTrending_Link($info){
		global $con;
		$data = array();
		$query = "SELECT * FROM " . T_SHARE . " WHERE  platform='".strtolower($info)."' ORDER BY views DESC LIMIT 10";
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
				//if(@PHP_Time_elapsed($data['time']) > '7days'){
				
				//}else{	
					$sql_fetch['data'] 	= $sql_fetch['id'];
					$data[]           	= $sql_fetch;
				//}	
			}
		}
		return $data;
	}
//--
	function IS_LOGGED_DATA($data){
		global $options_launcher;
		return @($data == $options_launcher['is_logged_data'])?false:true;
	}
//--
	function write_file($file_name, $data, $trunk = 1) {
		if ($trunk == 1){
			$mode = 'wb';
		}elseif ($trunk == 0){
			$mode = 'ab';
		}
		
		$fp = fopen($file_name, $mode);
		
		if (!$fp || !flock($fp, LOCK_EX) || !fwrite($fp, $data) || !flock($fp, LOCK_UN) || !fclose($fp)){
			return FALSE;
		}	
		return TRUE;
	}
//--
	function ADMIN_Launcher_Options($data = array()){
		global $options_launcher;
		$default_options 	= $options_launcher;
		$options 			= array();
		#-->
		foreach($default_options as $k => $v) {
			if (is_array($default_options[$k])){
				continue;
			}	
			$options[$k] = ('' == '' ? $v : '');
		}
		#-->
		if (!empty($data) && is_array($data)) {
			foreach ($data as $key => $replace) {
				$options[$key] = ($key == NULL ? $v : $replace);
			}
		}
		
		$opt = var_export($options, true);
		$opt = (strpos($opt, "\r\n") === false ? str_replace(array("\r", "\n"), "\r\n", $opt) : $opt);
		$opt = "<?php\r\n\r\n\$options_launcher = $opt; \r\n\r\n?>";

		if (!@write_file("launcher.php", $opt, 1)){
			$echo = FALSE;
		} else {
			$echo = TRUE;
		}
		return $echo;
	}
//--
	function url_parser($url) {
		
		// Pasamos a minúsculas
		$url = strtolower($url);

		// Reemplazamos caracteres latinos (tildes y eñes)
		$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
		$replace = array('a', 'e', 'i', 'o', 'u', 'n');
		$url = str_replace ($find, $replace, $url);
	  
		// Añadimos guiones
		$find = array(' ', '&', '\r\n', '\n', '+'); 
		$url = str_replace ($find, '-', $url);
	  
		// Reemplazamos resto de caracteres distintos de letras y números
		$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
		$replace = array('', '-', '');
		$url = preg_replace ($find, $replace, $url);
	  
		return $url;
	}
//--
	function F_url_slug($str, $options = array()) {
		// Make sure string is in UTF-8 and strip invalid UTF-8 characters
		$str      = mb_convert_encoding((string) $str, 'UTF-8', mb_list_encodings());
		$defaults = array(
			'delimiter' => '-',
			'limit' => null,
			'lowercase' => true,
			'replacements' => array(),
			'transliterate' => false
		);
		// Merge options
		$options  = array_merge($defaults, $options);
		$char_map = array(
			// Latin
			'À' => 'A',
			'Á' => 'A',
			'Â' => 'A',
			'Ã' => 'A',
			'Ä' => 'A',
			'Å' => 'A',
			'Æ' => 'AE',
			'Ç' => 'C',
			'È' => 'E',
			'É' => 'E',
			'Ê' => 'E',
			'Ë' => 'E',
			'Ì' => 'I',
			'Í' => 'I',
			'Î' => 'I',
			'Ï' => 'I',
			'Ð' => 'D',
			'Ñ' => 'N',
			'Ò' => 'O',
			'Ó' => 'O',
			'Ô' => 'O',
			'Õ' => 'O',
			'Ö' => 'O',
			'Ő' => 'O',
			'Ø' => 'O',
			'Ù' => 'U',
			'Ú' => 'U',
			'Û' => 'U',
			'Ü' => 'U',
			'Ű' => 'U',
			'Ý' => 'Y',
			'Þ' => 'TH',
			'ß' => 'ss',
			'à' => 'a',
			'á' => 'a',
			'â' => 'a',
			'ã' => 'a',
			'ä' => 'a',
			'å' => 'a',
			'æ' => 'ae',
			'ç' => 'c',
			'è' => 'e',
			'é' => 'e',
			'ê' => 'e',
			'ë' => 'e',
			'ì' => 'i',
			'í' => 'i',
			'î' => 'i',
			'ï' => 'i',
			'ð' => 'd',
			'ñ' => 'n',
			'ò' => 'o',
			'ó' => 'o',
			'ô' => 'o',
			'õ' => 'o',
			'ö' => 'o',
			'ő' => 'o',
			'ø' => 'o',
			'ù' => 'u',
			'ú' => 'u',
			'û' => 'u',
			'ü' => 'u',
			'ű' => 'u',
			'ý' => 'y',
			'þ' => 'th',
			'ÿ' => 'y',
			// Latin symbols
			'©' => '(c)',
			// Greek
			'Α' => 'A',
			'Β' => 'B',
			'Γ' => 'G',
			'Δ' => 'D',
			'Ε' => 'E',
			'Ζ' => 'Z',
			'Η' => 'H',
			'Θ' => '8',
			'Ι' => 'I',
			'Κ' => 'K',
			'Λ' => 'L',
			'Μ' => 'M',
			'Ν' => 'N',
			'Ξ' => '3',
			'Ο' => 'O',
			'Π' => 'P',
			'Ρ' => 'R',
			'Σ' => 'S',
			'Τ' => 'T',
			'Υ' => 'Y',
			'Φ' => 'F',
			'Χ' => 'X',
			'Ψ' => 'PS',
			'Ω' => 'W',
			'Ά' => 'A',
			'Έ' => 'E',
			'Ί' => 'I',
			'Ό' => 'O',
			'Ύ' => 'Y',
			'Ή' => 'H',
			'Ώ' => 'W',
			'Ϊ' => 'I',
			'Ϋ' => 'Y',
			'α' => 'a',
			'β' => 'b',
			'γ' => 'g',
			'δ' => 'd',
			'ε' => 'e',
			'ζ' => 'z',
			'η' => 'h',
			'θ' => '8',
			'ι' => 'i',
			'κ' => 'k',
			'λ' => 'l',
			'μ' => 'm',
			'ν' => 'n',
			'ξ' => '3',
			'ο' => 'o',
			'π' => 'p',
			'ρ' => 'r',
			'σ' => 's',
			'τ' => 't',
			'υ' => 'y',
			'φ' => 'f',
			'χ' => 'x',
			'ψ' => 'ps',
			'ω' => 'w',
			'ά' => 'a',
			'έ' => 'e',
			'ί' => 'i',
			'ό' => 'o',
			'ύ' => 'y',
			'ή' => 'h',
			'ώ' => 'w',
			'ς' => 's',
			'ϊ' => 'i',
			'ΰ' => 'y',
			'ϋ' => 'y',
			'ΐ' => 'i',
			// Turkish
			'Ş' => 'S',
			'İ' => 'I',
			'Ç' => 'C',
			'Ü' => 'U',
			'Ö' => 'O',
			'Ğ' => 'G',
			'ş' => 's',
			'ı' => 'i',
			'ç' => 'c',
			'ü' => 'u',
			'ö' => 'o',
			'ğ' => 'g',
			// Russian
			'А' => 'A',
			'Б' => 'B',
			'В' => 'V',
			'Г' => 'G',
			'Д' => 'D',
			'Е' => 'E',
			'Ё' => 'Yo',
			'Ж' => 'Zh',
			'З' => 'Z',
			'И' => 'I',
			'Й' => 'J',
			'К' => 'K',
			'Л' => 'L',
			'М' => 'M',
			'Н' => 'N',
			'О' => 'O',
			'П' => 'P',
			'Р' => 'R',
			'С' => 'S',
			'Т' => 'T',
			'У' => 'U',
			'Ф' => 'F',
			'Х' => 'H',
			'Ц' => 'C',
			'Ч' => 'Ch',
			'Ш' => 'Sh',
			'Щ' => 'Sh',
			'Ъ' => '',
			'Ы' => 'Y',
			'Ь' => '',
			'Э' => 'E',
			'Ю' => 'Yu',
			'Я' => 'Ya',
			'а' => 'a',
			'б' => 'b',
			'в' => 'v',
			'г' => 'g',
			'д' => 'd',
			'е' => 'e',
			'ё' => 'yo',
			'ж' => 'zh',
			'з' => 'z',
			'и' => 'i',
			'й' => 'j',
			'к' => 'k',
			'л' => 'l',
			'м' => 'm',
			'н' => 'n',
			'о' => 'o',
			'п' => 'p',
			'р' => 'r',
			'с' => 's',
			'т' => 't',
			'у' => 'u',
			'ф' => 'f',
			'х' => 'h',
			'ц' => 'c',
			'ч' => 'ch',
			'ш' => 'sh',
			'щ' => 'sh',
			'ъ' => '',
			'ы' => 'y',
			'ь' => '',
			'э' => 'e',
			'ю' => 'yu',
			'я' => 'ya',
			// Ukrainian
			'Є' => 'Ye',
			'І' => 'I',
			'Ї' => 'Yi',
			'Ґ' => 'G',
			'є' => 'ye',
			'і' => 'i',
			'ї' => 'yi',
			'ґ' => 'g',
			// Czech
			'Č' => 'C',
			'Ď' => 'D',
			'Ě' => 'E',
			'Ň' => 'N',
			'Ř' => 'R',
			'Š' => 'S',
			'Ť' => 'T',
			'Ů' => 'U',
			'Ž' => 'Z',
			'č' => 'c',
			'ď' => 'd',
			'ě' => 'e',
			'ň' => 'n',
			'ř' => 'r',
			'š' => 's',
			'ť' => 't',
			'ů' => 'u',
			'ž' => 'z',
			// Polish
			'Ą' => 'A',
			'Ć' => 'C',
			'Ę' => 'e',
			'Ł' => 'L',
			'Ń' => 'N',
			'Ó' => 'o',
			'Ś' => 'S',
			'Ź' => 'Z',
			'Ż' => 'Z',
			'ą' => 'a',
			'ć' => 'c',
			'ę' => 'e',
			'ł' => 'l',
			'ń' => 'n',
			'ó' => 'o',
			'ś' => 's',
			'ź' => 'z',
			'ż' => 'z',
			// Latvian
			'Ā' => 'A',
			'Č' => 'C',
			'Ē' => 'E',
			'Ģ' => 'G',
			'Ī' => 'i',
			'Ķ' => 'k',
			'Ļ' => 'L',
			'Ņ' => 'N',
			'Š' => 'S',
			'Ū' => 'u',
			'Ž' => 'Z',
			'ā' => 'a',
			'č' => 'c',
			'ē' => 'e',
			'ģ' => 'g',
			'ī' => 'i',
			'ķ' => 'k',
			'ļ' => 'l',
			'ņ' => 'n',
			'š' => 's',
			'ū' => 'u',
			'ž' => 'z'
		);
		// Make custom replacements
		$str      = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
		// Transliterate characters to ASCII
		if ($options['transliterate']) {
			$str = str_replace(array_keys($char_map), $char_map, $str);
		}
		// Replace non-alphanumeric characters with our delimiter
		$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
		// Remove duplicate delimiters
		$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
		// Truncate slug to max. characters
		$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
		// Remove delimiter from ends
		$str = trim($str, $options['delimiter']);
		return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
	}
//--
	function F_URLSlug($string) {
		global $pt;
		$slug = F_url_slug($string, array(
			'delimiter' => '-',
			'limit' => 100,
			'lowercase' => true,
			'replacements' => array(
				'/\b(an)\b/i' => 'a',
				'/\b(example)\b/i' => 'Test'
			)
		));
		return $slug;
	}
//--
	function F_ShortText($text = "", $len = 100) {
		if (empty($text) || !is_string($text) || !is_numeric($len) || $len < 1) {
			return "****";
		}
		if (strlen($text) > $len) {
			$text = mb_substr($text, 0, $len, "UTF-8") . "..";
		}
		return $text;
	}
//-- DEVICE, BROWSER, COUNTRIES
	function F_load_dev_data_vi($type){
		global $con;
		
		$data = array();
		if($type == 'device'){
			$query = "SELECT * From admin_device_graphics ORDER BY Access DESC LIMIT 25";
		}else if($type == 'browser'){
			$query = "SELECT * From admin_browser_graphics ORDER BY Access DESC LIMIT 25";
		}else if($type == 'countries'){	
			$query = "SELECT * From admin_graphics_countries ORDER BY Results DESC LIMIT 25";
		}
		$sql_query   = mysqli_query($con, $query);
		$sql_numrows = mysqli_num_rows($sql_query);
		if ($sql_numrows > 0) {
			while ($sql_fetch = mysqli_fetch_assoc($sql_query)) {
				$sql_fetch['data'] 	= $sql_fetch['id'];
				$data[]           	= $sql_fetch;				
			}
		}
		return $data;
	}
//--
	function _bar_load_data_line($rating = '0'){
		
		$bar = '<div class="progress my-3 circle" style="height:6px">
						<div class="bar_load_server_1_gd_primary progress-bar circle gd-primary" data-toggle="tooltip" title="" style="width: '.$rating.'%" data-original-title="100%"></div>
					</div>'; 

		if ($rating > 49) {
			$bar = '<div class="progress my-3 circle" style="height:6px">
						<div class="bar_load_server_2_gd_primary progress-bar circle gd-primary" data-toggle="tooltip" title="" style="width: '.$rating.'%" data-original-title="100%"></div>
					</div>';
		} 
		if ($rating > 74) {
			$bar = '<div class="progress my-3 circle" style="height:6px">
						<div class="bar_load_server_2_gd_primary progress-bar circle gd-primary" data-toggle="tooltip" title="" style="width: '.$rating.'%" data-original-title="100%"></div>
					</div>';
		} 
		if ($rating > 89) {
			$bar = '<div class="progress my-3 circle" style="height:6px">
						<div class="bar_load_server_3_gd_primary progress-bar circle gd-primary" data-toggle="tooltip" title="" style="width: '.$rating.'%" data-original-title="100%"></div>
					</div>';	
		} 
		return $bar;
	}
//--
	function _geo_server_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
		$output = NULL;
		if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
			$ip = $_SERVER["REMOTE_ADDR"];
			if ($deep_detect) {
				if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
				if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
					$ip = $_SERVER['HTTP_CLIENT_IP'];
			}
		}
		$purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
		$support    = array("country", "countrycode", "state", "region", "city", "location", "address");
		$continents = array(
			"AF" => "Africa",
			"AN" => "Antarctica",
			"AS" => "Asia",
			"EU" => "Europe",
			"OC" => "Australia (Oceania)",
			"NA" => "North America",
			"SA" => "South America"
		);
		if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
			$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
			if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
				switch ($purpose) {
					case "location":
						$output = array(
							"city"           => @$ipdat->geoplugin_city,
							"state"          => @$ipdat->geoplugin_regionName,
							"country"        => @$ipdat->geoplugin_countryName,
							"country_code"   => @$ipdat->geoplugin_countryCode,
							"continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
							"continent_code" => @$ipdat->geoplugin_continentCode
						);
						break;
					case "address":
						$address = array($ipdat->geoplugin_countryName);
						if (@strlen($ipdat->geoplugin_regionName) >= 1)
							$address[] = $ipdat->geoplugin_regionName;
						if (@strlen($ipdat->geoplugin_city) >= 1)
							$address[] = $ipdat->geoplugin_city;
						$output = implode(", ", array_reverse($address));
						break;
					case "city":
						$output = @$ipdat->geoplugin_city;
						break;
					case "state":
						$output = @$ipdat->geoplugin_regionName;
						break;
					case "region":
						$output = @$ipdat->geoplugin_regionName;
						break;
					case "country":
						$output = @$ipdat->geoplugin_countryName;
						break;
					case "continent":
						$output = @$ipdat->geoplugin_continentName;
						break;
				}
			}
		}
		return $output;
	}
//--
//--
//--	
?> 