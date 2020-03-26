<!-- div page -->
<div class="page_div_full">
	<p class="text_top_page_admin">{{LANG Server_Sys}}
		<span class="text_top_page_admin_span">{{LANG Server_info}}</span>
	</p>
	<!---->
	<div class="page_server_div">
		<!---->
		<div class="info_data_server_w1">
			<p class="text_info_config_p">{{LANG Server_text_1}}</p>
			<!---->
			<div class="div_list_server_datas_1">
				<p class="list_datas_text_p_ico_1">PHP 7.0+</p>
				<p class="list_datas_text_p_ico_2">Required PHP version 7.0 or more</p>
				<p class="list_datas_text_p_ico_3"><?php echo ($CODE['SERVER_FUNC_PHP'] == true) ? 'Installed' : 'Not installed'?></p>
			</div>
			<!---->
			<div class="div_list_server_datas_1">
				<p class="list_datas_text_p_ico_1">cURL</p>
				<p class="list_datas_text_p_ico_2">Required cURL PHP extension</p>
				<p class="list_datas_text_p_ico_3"><?php echo ($CODE['SERVER_FUNC_CURL'] == true) ? 'Installed' : 'Not installed'?></p>
			</div>
			<!---->
			<div class="div_list_server_datas_1">
				<p class="list_datas_text_p_ico_1">MySQLi</p>
				<p class="list_datas_text_p_ico_2">Required MySQLi PHP extension</p>
				<p class="list_datas_text_p_ico_3"><?php echo ($CODE['SERVER_FUNC_MYSQLI'] == true) ? 'Installed' : 'Not installed'?></p>
			</div>
			<!---->
			<div class="div_list_server_datas_1">
				<p class="list_datas_text_p_ico_1">GD Library</p>
				<p class="list_datas_text_p_ico_2">Required GD Library for image cropping</p>
				<p class="list_datas_text_p_ico_3"><?php echo ($CODE['SERVER_FUNC_GD'] == true) ? 'Installed' : 'Not installed'?></p>
			</div>
			<!---->
			<div class="div_list_server_datas_1">
				<p class="list_datas_text_p_ico_1">Mbstring</p>
				<p class="list_datas_text_p_ico_2">Required Mbstring extension for UTF-8 Strings</p>
				<p class="list_datas_text_p_ico_3"><?php echo ($CODE['SERVER_FUNC_MBSTRING'] == true) ? 'Installed' : 'Not installed'?></p>
			</div>
			<!---->
			<div class="div_list_server_datas_1">
				<p class="list_datas_text_p_ico_1">ZIP</p>
				<p class="list_datas_text_p_ico_2">Required ZIP extension for backuping data</p>
				<p class="list_datas_text_p_ico_3"><?php echo ($CODE['SERVER_FUNC_ZIP'] == true) ? 'Installed' : 'Not installed'?></p>
			</div>	
			<!---->
			<div class="div_list_server_datas_1">
				<p class="list_datas_text_p_ico_1">allow_url_fopen</p>
				<p class="list_datas_text_p_ico_2">Required allow_url_fopen</p>
				<p class="list_datas_text_p_ico_3"><?php echo ($CODE['SERVER_FUNC_ALLOW_URL_FOPEN'] == true) ? 'Installed' : 'Not installed'?></p>
			</div>				
		</div>
		<!---->
		<div class="info_data_server_w2">
			<p class="text_info_config_p">{{LANG Server_text_2}}</p>
			<!---->
			<div class="text__t_info_server">
				<p class="text__t_info_server_1">{{LANG Server_text_3}}</p>
				<p class="text__t_info_server_2">{{LANG Server_text_4}}</p>
				<p class="text__t_info_server_3">{{LANG Server_text_5}}</p>
				<p class="text__t_info_server_4">{{LANG Server_text_6}}</p>
			</div>
			<!---->
			<?php foreach ($CODE['INFO_SERVER_ADMIN'] as $key => $value): ?>
			<div class="div_list_server_datas__w_1">
				<p class="list_datas_text_p_ico_1_2"><?php echo $key; ?></p>
				<p class="list_datas_text_p_ico_2_2">
				<?php 
                    if ((ini_get($key) != $value['recommended'])) {
                        if ((($value['recommended']) == "Off" ) and (ini_get($key) == 0))
                        {
							$CODE['SUCCESS_SERVER'] = 'success';
                        } elseif ((($value['recommended']) == "On" ) and (ini_get($key) == 1)) {
							$CODE['SUCCESS_SERVER'] = 'success';
                        } else {
                            if ($value['check']) {

                                if (($key == 'session.name') ) {
                                    if (ini_get($key) != "PHPSESSID") {
                                        $CODE['SUCCESS_SERVER'] = 'success';
                                    }else{
                                        $CODE['SUCCESS_SERVER'] = 'danger';
                                    }
                                    
                                } else {
                                    $CODE['SUCCESS_SERVER'] = 'danger';  
                                }
                                
                            } else {
                                if (($key == 'session.cookie_domain') ) {
                                    if (ini_get($key)) {
                                        $CODE['SUCCESS_SERVER'] = 'success';
                                    } else{
                                        $CODE['SUCCESS_SERVER'] = 'danger';  
                                    }
                                    
                                }else{
                                    $CODE['SUCCESS_SERVER'] = 'success';    
                                }
                            }
                        }
                    }else {
						$CODE['SUCCESS_SERVER'] = 'success';
                    }
                    ?>
				
					<?php 	
						if($CODE['SUCCESS_SERVER']=='success'){
							echo 'installed';
							echo '<span class="success_server_admin">'.ini_get($key).'</span>';
						}elseif($CODE['SUCCESS_SERVER']=='danger'){
							echo '<span class="ssa_ok_not success_server_admin">not installed</span>';
							echo '<span class="success_server_admin">'.ini_get($key).'</span>';
						}
					?>
				</p>
				<p class="list_datas_text_p_ico_3_2"><?php echo $value['recommended']; ?></p>
				<div class="list_datas_text_p_ico_4_2">
					<p class="info_list_datas_text_p_ico_4_2">info</p>
					<p class="list_datas_text_p_ico_4_2_box"><?php echo $value['info']; ?></p>
				</div>
			</div>
			<?php endforeach ?>
			<!---->
		</div>
	</div>
</div>    

 

