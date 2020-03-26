<div class="flax_home_index">
	<?php
		if(count($CODE['GET_TRENDING_FUNCTION']) == 0){
			echo $CODE['GET_TRENDING_NO_CONTENT'];
		}else{
			foreach ($CODE['GET_TRENDING_FUNCTION'] as $data) {
				
				$icon_img = str_replace('./upload/icons/', ''.$config['site_url'].'/upload/icons/', $data["icon"]);
				$line = '<div class="div_con_videos">';					
				$line .= '		<div class="div_social">';
				$line .= '		<a href="'.strtolower (''.$config['site_url'].'/'.$data['platform'].'/'.$data['url'].'').'">';	
				$line .= '			<img class="imgs_index_wall_home" src="'.$icon_img.'" alt="'.$data['platform'].' Downloader" title="'.$data['platform'].' Downloader"></img>';
				$line .= '			<p class="p_des_con"></p>';
				$line .= '		</a>';
				$line .= '		</div>';
				$line .= '		<p class="name_social">'.$data['platform'].'</p>';
				$line .= '</div>';
				echo $line;
			}
		}
	?>	
</div>	
<script>
		$("div.div_social").mouseenter(function(){
			$(this).addClass("icon_media_b").delay(1000).queue(function(){
				$(this).removeClass("icon_media_b").dequeue();
			});
			
		});
</script>		