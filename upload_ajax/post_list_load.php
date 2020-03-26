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

	if (!(isset($_GET['pagenum']))) { 
		 $pagenum = 1; 
	} else {
		$pagenum = intval($_GET['pagenum']); 		
	}
	 
	$page_limit 		=  ($_GET["show"] <> "" && is_numeric($_GET["show"]) ) ? intval($_GET["show"]) : 1;
	$sql 				= "SELECT count(*) as count FROM ". T_POST ."  WHERE 1" ;
	$result				= mysqli_query($con,$sql);
	$tresults 			= mysqli_fetch_all($result,MYSQLI_ASSOC);
	$cnt 				= $tresults[0]["count"];
	$last 				= ceil($cnt/$page_limit);
	
	if ($pagenum < 1) { 
		$pagenum = 1; 
	} elseif ($pagenum > $last)  { 
		$pagenum = $last; 
	}
	$lower_limit 		= ($pagenum - 1) * $page_limit;
	$sql2 				= " SELECT * FROM ". T_POST ." WHERE 1 ORDER BY id DESC limit ". ($lower_limit)." ,  ". ($page_limit). " ";
	$result 			= mysqli_query($con,$sql2);
	$results 			= mysqli_fetch_all($result,MYSQLI_ASSOC);
	#-->
	foreach ($results as $key => $data) {
		$load_list .= PHP_LoadPage('template/article_html', array(
			'id' => $data['id'],
			'image' => $data['image'],
			'title_url' => F_URLSlug($data['title']),
			'title' => $data['title'],
			'time' => date('m/d/Y', $data['time']),
			'description' => $data['description'],
		));
	}
	#-->
	echo $load_list;
?>
<div class="class_wall_more_pages">
	<div class="m_div_list_2"> 
	<?php
	 
	//Show page links
	for($i=1; $i<=$last; $i++) {
		if ($i == $pagenum ) {
	?>
		<a href="javascript:void(0);" class="selected_list" ><?php echo $i ?></a>
	<?php }else{ ?>
		<a href="javascript:void(0);" class="links_list_btn"  onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $i; ?>');" ><?php echo $i ?></a>
		<?php 
		}
	} 
	?>
	</div>
</div>