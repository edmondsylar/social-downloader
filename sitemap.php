<?php
header('Content-type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
		
<?php

    require_once './application/Connection.php';
?>
<?php
	$blog		 = PHP_Load_post_sitemap();
    foreach ($blog as $key => $data_blog) {
        echo "<url>";
		echo "<loc>".$config['site_url'].'/articles/'.F_URLSlug($data_blog['title']).'/post/'.$data_blog['id']."</loc>";
		echo "<priority>1.00</priority>";
        echo "</url>";
    }
?>	
<?php
	$links		 = PHP_GetMedia('');
    foreach ($links as $data) {
        echo "<url>";
		echo "<loc>".$config['site_url'].'/'.$data['platform']."/".$data['url']."</loc>";
		echo "<priority>1.00</priority>";
        echo "</url>";
    }
?>
	<url>
		<loc><?php echo $config['site_url']; ?>/es/</loc>
		<priority>1.00</priority>
	</url>
	<url>
		<loc><?php echo $config['site_url']; ?>/en/</loc>
		<priority>1.00</priority>
	</url>
	<url>
		<loc><?php echo $config['site_url']; ?>/de/</loc>
		<priority>1.00</priority>
	</url>
	<url>
		<loc><?php echo $config['site_url']; ?>/fr/</loc>
		<priority>1.00</priority>
	</url>
	<url>
		<loc><?php echo $config['site_url']; ?>/it/</loc>
		<priority>1.00</priority>
	</url>
	<url>
		<loc><?php echo $config['site_url']; ?>/pt/</loc>
		<priority>1.00</priority>
	</url>
	<url>
		<loc><?php echo $config['site_url']; ?>/ru/</loc>
		<priority>1.00</priority>
	</url>
	<url>
		<loc><?php echo $config['site_url']; ?>/tr/</loc>
		<priority>1.00</priority>
	</url>	
	<url>
		<loc><?php echo $config['site_url']; ?>/zh/</loc>
		<priority>1.00</priority>
	</url>
</urlset>