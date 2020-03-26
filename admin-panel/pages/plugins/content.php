<!-- div page -->
<div class="page_div_full">
	<?php if($CODE['LOAD_PAGES_PLUGINS']=='more_plugin'){ ?>
	<p class="text_top_page_admin">{{LANG Plugins}}
		<span class="text_top_page_admin_span">{{LANG Usage_information}}</span>
	</p>
	<div class="more_info_media_page_flex">
		<?php foreach ($CODE['LOAD_PLUGIN_KEY'] as $key => $data) { ?>
		<?php
			$id 			= $data["id"];
			$platform 		= $data["platform"];
			$active 		= $data["active"];
			$version 		= $data["version"];
			$Data_Update 	= $data["Data_Update"];
			$key_plugin 	= $data["key_plugin"];
			$Author 		= $data["Author"];
			$Url 			= $data["url"];
		
		?>
		<div class="more_info_media_page">
			<!---->
			<div class="more_box_mp_22 box_info_media_so_wall">
				<div class="box_info_media_so_wall_icon">
					<img class="box_info_media_so_wall_img" src="<?php echo $data["icon"]; ?>"></img>
				</div>
				<div class="more_box_mp_23 box_info_media_so_dia_flex">
					<div class="progress my-3 circle" style="height:6px">
						<div class="progress-bar circle gd-primary" data-toggle="tooltip" title="" style="width: <?php echo _round_plugins_use($data["platform"]) ?>%" data-original-title="100%"></div>
					</div>
					<!--p class="box_info_media_so_wall_text">34242</p-->
					<p class="more_box_mp_20 box_info_media_so_wall_p"><?php echo $data["platform"]; ?></p>	
				</div>
				<div class="more_box_mp_21 size_admin_more_media bor_btn_1">
					<?php echo _round_plugins_use($data["platform"]) ?>%
				</div>
			</div>
			<!---->
			<!--div class="wall_data_more_info_media_page">
				<div class="wall_data_more_info_media_page_1">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle mx-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
					<p class="">reportes</p>
				</div>
				<div class="wall_data_more_info_media_page_2">
					<p class="">----</p>
				</div>
			</div-->
			<!-- facebook -->
			<div class="wall_data_more_info_media_page">
				<div class="wall_data_more_info_media_page_1">
					<img src="<?php echo PHP_LoadAdminLink('images/icon_red_2.png'); ?>"></img>
					<p class="">Facebook</p>
				</div>
				<div class="wall_data_more_info_media_page_2">
					<p class=""><?php echo _round_more_share($data["platform"], 'facebook'); ?></p>
				</div>
			</div>
			<!-- twitter -->
			<div class="wall_data_more_info_media_page">
				<div class="wall_data_more_info_media_page_1">
					<img src="<?php echo PHP_LoadAdminLink('images/icon_red_3.png'); ?>"></img>
					<p class="">Twitter</p>
				</div>
				<div class="wall_data_more_info_media_page_2">
					<p class=""><?php echo _round_more_share($data["platform"], 'twitter'); ?></p>
				</div>
			</div>
			<!-- whatsapp -->
			<div class="wall_data_more_info_media_page">
				<div class="wall_data_more_info_media_page_1">
					<img src="<?php echo PHP_LoadAdminLink('images/icon_red_1.png'); ?>"></img>
					<p class="">Whatsapp</p>
				</div>
				<div class="wall_data_more_info_media_page_2">
					<p class=""><?php echo _round_more_share($data["platform"], 'whatsapp'); ?></p>
				</div>
			</div>
			<!-- otros -->
			<div class="wall_data_more_info_media_page">
				<div class="wall_data_more_info_media_page_1">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle mx-2"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>
					<p class="">{{LANG Others}}</p>
				</div>
				<div class="wall_data_more_info_media_page_2">
					<p class=""><?php echo _round_more_share($data["platform"], 'other'); ?></p>
				</div>
			</div>
			<!-- download -->
			<!--div class="wall_data_more_info_media_page">
				<div class="wall_data_more_info_media_page_1">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download-cloud mx-2"><polyline points="8 17 12 21 16 17"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path></svg>
					<p class="">Download</p>
				</div>
				<div class="wall_data_more_info_media_page_2">
					<p class=""><?php echo _round_more_share($data["platform"], 'downloads	'); ?></p>
				</div>
			</div-->
			<!-- top link -->
			<p class="text_media_p_top">{{LANG Top_10_links}}</p>
			<!---->
			<div class="class_div_top_links">
			<?php if(count(PHP_GetTrending_Link($data["platform"])) == 0){ ?>
				<div class="no_data_links_tende">
					<img class="no_data_links_tende_img" src="<?php echo PHP_LoadAdminLink('images/sin_data_img.png'); ?>"></img>
					<p class="no_data_links_tende_p">{{LANG 404_error}}</p>
				</div>
			<?php }else{ ?>
				<?php foreach (PHP_GetTrending_Link($data["platform"]) as $data) { ?>
					<!---->
					<?php if(PHP_Time_elapsed($data['time'])>'7days' | PHP_Time_elapsed($data['time'])>'6days' | PHP_Time_elapsed($data['time'])>'5days' | PHP_Time_elapsed($data['time'])>'4days' | PHP_Time_elapsed($data['time'])>'3days' | PHP_Time_elapsed($data['time'])>'2days' | PHP_Time_elapsed($data['time'])>'1day'){ ?>
						<div class="class_div_top_links_data">
							<div class="class_div_top_links_data_1">
								<span class="class_div_top_links_data_url"><?php echo $data['url']; ?></span>
								<!--span>views <?php echo $data['views']; ?></span-->
							</div>
							<div class="class_div_top_links_data_2">
								<a target="_blank" href="<?php echo $data['url']; ?>">
								<span class="class_div_top_links_data_icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link mx-2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
								</span>	
								</a>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
			<?php } ?>	
			<!-- end links -->				
			</div>
			<!---->
		</div>
		
		<!---->
		<div class="_plugins_see_cog">
			<p class="_plugins_see_cog_text">
				<svg class="icon_config_plugins" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mx-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
				<span class="text_p_sss">{{LANG Settings}}</span>
			</p>
			<!---->
			<div class="wall__plugins_see_cog_0">
				<form class="ap-settings" method="POST">
					<p class="wall__plugins_see_cog_2_text">{{LANG Url_Plugin}}:<span class="text_url_plugins wall__plugins_see_cog_2_text_2">{{CONFIG site_url}}/<?php echo strtolower($platform); ?>/<?php echo strtolower($Url); ?></span></p>
					<div class="wall__plugins_see_cog_1_box_w">
						<p class="wall__plugins_see_cog_1_box_w_p">{{LANG writable_url}}:</p>
					</div>
					<input type="text" name="url_plugin" id="url_plugin" class="form__input_config form__input form-control" value="<?php echo $Url;?>"  placeholder="{{LANG Writes_data}}"/>
					<br>
					<button type="submit" class="button btn_default_buc bor_btn_1 btn-default">
						<span class="btn_default_buc_cer">
							{{LANG Save_data}}
						</span>	
					</button>
				</form>	
			</div>
			<!---->
			<div class="wall__plugins_see_cog_1">
				<!---->
				<div class="wall__plugins_see_cog_1_box">
					<!---->
					<div class="wall__plugins_see_cog_1_box_w">
						<p class="wall__plugins_see_cog_1_box_w_p">{{LANG Settings_plugin}}</p>
					</div>					
					<?php if ($active==0){ ?>		
							<div id="media_yes<?php echo $id; ?>" class="wall__no_acvi wall__plugins_see_cog_1_box_btn size_admin_more_media bor_btn_1">
								<a class="bor_btn_1_text_a media_yes" id="<?php echo $id; ?>" href="more_media.php">
									<p class="bor_btn_1_text">{{LANG Disabled}}</p>
								</a>
							</div>
							<!---->
							<div id="media_no<?php echo $id; ?>" class="wall__yes_acvi wall__plugins_see_cog_1_box_btn size_admin_more_media bor_btn_1" style="display:none">
								<a class="bor_btn_1_text_a media_no" id="<?php echo $id; ?>" href="more_media.php">
									<p class="bor_btn_1_text">{{LANG Enabled}}</p>
								</a>
							</div>
					<?php }else{ ?>				
							<div id="media_yes<?php echo $id; ?>" class="wall__no_acvi wall__plugins_see_cog_1_box_btn size_admin_more_media bor_btn_1" style="display:none">
								<a class="bor_btn_1_text_a media_yes" id="<?php echo $id; ?>" href="more_media.php">
									<p class="bor_btn_1_text">{{LANG Disabled}}</p>
								</a>
							</div>
							<!---->
							<div id="media_no<?php echo $id; ?>" class="wall__yes_acvi wall__plugins_see_cog_1_box_btn size_admin_more_media bor_btn_1">
								<a class="bor_btn_1_text_a media_no" id="<?php echo $id; ?>" href="more_media.php">
									<p class="bor_btn_1_text">{{LANG Enabled}}</p>
								</a>
							</div>
					<?php } ?>
					
				</div>	
			</div>
			<!---->
			<div class="wall__plugins_see_cog_2">
				<p class="wall__plugins_see_cog_2_text">{{LANG Name_plugin}}<span class="wall__plugins_see_cog_2_text_2"><?php echo $platform; ?></span></p>
				<p class="wall__plugins_see_cog_2_text">{{LANG Version_plugin}}<span class="wall__plugins_see_cog_2_text_2"><?php echo $version; ?></span></p>
				<p class="wall__plugins_see_cog_2_text">{{LANG Last_update_plugin}}<span class="wall__plugins_see_cog_2_text_2"><?php echo $Data_Update; ?></span></p>
				<p class="wall__plugins_see_cog_2_text">{{LANG Key_plugin}}<span class="wall__plugins_see_cog_2_text_2"><?php echo $key_plugin; ?></span></p>
				<p class="wall__plugins_see_cog_2_text">{{LANG Developed_by}}<span class="wall__plugins_see_cog_2_text_2"><?php echo $Author; ?></span></p>
			</div>
		</div>
		<?php } ?>
	</div>
	
	<script>
		//-->
		$(function() {
			var form_ap_settings = $('form.ap-settings');

			form_ap_settings.ajaxForm({
				url: '{{LINK requests.php?upload=add_url_plugins&type=<?php echo $id; ?>}}',
				beforeSend: function() {
					form_ap_settings.find('.btn_default_buc_cer').text("{{LANG Processing_data}}");
				},
				success: function(data) {
					if (data.status == 200) {
						form_ap_settings.find('.btn_default_buc_cer').text("{{LANG Saved_data}}");
						$('.noti_alre_admin').show();
						setTimeout(function () {
							$('.noti_alre_admin').hide();
						}, 2000);
					}else if(data.status == 400){
						form_ap_settings.find('.btn_default_buc_cer').text("{{LANG Error_data}}");
						$('.noti_alre_admin').show();
						setTimeout(function () {
							$('.noti_alre_admin').hide();
						}, 2000);
					}
				}
			});
		});
	</script>
	
	<?php }else if($CODE['LOAD_PAGES_PLUGINS']=='upload_plugin'){ ?>
	<!---->
	<div class="page_upload_plugin_get_two">
		<div class="div_upload_file_page">
			<div class="_men_i_div_upload_file_page_ok_div">
				<svg class="nito_upload_file_plugin noti_alre_admin_span" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle mx-2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
				<p class="_men_i_div_upload_file_page_ok">se a subido corretamente</p>
			</div>
			<div class="info_plugin_more_reqw">
				<div class="class_img_upluad_plugin">
					<img class="div_upload_file_page_img" src="./image/media_icon_demo.png"></img>
				</div>
				<div class="info_plugin_more_reqw_wall">
					<p class="info_plugin_more_reqw_wall_p">Name:<span class="info_plugin_more_reqw_wall_span">fef</span></p>
					<p class="info_plugin_more_reqw_wall_p">Version:<span class="info_plugin_more_reqw_wall_span">ee</span></p>
					<p class="info_plugin_more_reqw_wall_p">Key:<span class="info_plugin_more_reqw_wall_span">de</span></p>
					<p class="info_plugin_more_reqw_wall_p">Developed:<span class="info_plugin_more_reqw_wall_span">ewe</span></p>
				</div>
			</div>
			<button type="submit" class="btn_plugin_ba_go bor_btn_1 btn-default">
				<span class="class_go_plugn_btnn">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left mx-2"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
				bal Go
				</span>
			</button>
		</div>
	<div>	
	<?php }else{ ?>
	<p class="text_top_page_admin">{{LANG Plugins}}
		<span class="text_top_page_admin_span">{{LANG Plugin_manager}}</span>
	</p>
	<!---->
	<div class="page_list_plugins">
		<!---->
		<div class="page_list_plugins_1">
			<!---->
			<?php if(count($CODE['LOAD_LIST_PLUGINS']) == 0){ ?>
			<?php }else{ ?>
			<!--div class="_menu_plugins_top">
				<div class="_menu_plugins_top_1">
					<span class="_menu_plugins_top_span">
						analizar plugins del sistema
					</span>
				</div>
				<div class="_menu_plugins_top_2 bor_btn_1">
					<svg class="activity_all_plugins_icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mx-2"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
					<span class="activity_all_plugins">analizar</span>
				</div>
			</div-->
			<?php } ?>
			<!---->
			<?php if(count($CODE['LOAD_LIST_PLUGINS']) == 0){ ?>
				<div class="_list_plugins_div">
					<div class="img_no_tentent_plugins">
						<img class="img_no_tentent_plugins_icon" src="<?php echo PHP_LoadAdminLink('images/icon_box_null.png'); ?>"></img>
						<p class="img_no_tentent_plugins_text">{{LANG 404_error_plugun}}</p>
					</div>
				</div>
			<?php }else{ ?>
			<div class="_list_plugins_div">
			
			
			<?php foreach ($CODE['LOAD_LIST_PLUGINS'] as $key => $data) { ?>
				<?php
					
					$icon_img = str_replace('./upload/icons/', '{{CONFIG site_url}}/upload/icons/', $data["icon"]);
					 
				?>
				<div class="list_plugin_1">
					<img class="list_plugin_1_img" src="<?php echo $icon_img; ?>"></img>
					<div class="list_plugin_1_div">
							<p class="list_plugin_1_span_1">
								<?php echo $data["platform"]; ?>
							</p>
							<p class="list_plugin_1_span_2">
								<?php echo $data["version"]; ?>
							</p>
							<?php if ($data["active"]==0){ ?>
							<svg class="list_plugin_1_span_3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle mx-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
							<?php }else{ ?>
								<svg class="list_plugin_1_span_3_ok list_plugin_1_span_3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check mx-2"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php } ?>
							
					</div>
					<div class="list_plugin_1_div_2 bor_btn_1">
						<a class="bor_btn_1_text_a" href="<?php echo PHP_LoadAdminLinkSettings('plugins?p=more_plugin&l='); ?><?php echo $data["key_plugin"]; ?>"><p class="bor_btn_1_text">{{LANG More_info}}</p></a>
					</div>
				</div>
				
			<?php } ?>	
			</div>
			<?php } ?>
		</div>
		<!---->
		<div class="page_list_plugins_2">
			<!---->
			<div class="page_list_plugins_2w">
				<!-- The plugins file -->
				<form id="upload" method="post" action="{{LINK requests.php?upload=upload_plugins}}" enctype="multipart/form-data">
					<div id="drop" class="drop_class_plugins">
						{{LANG Drop_Here}}
						<a>{{LANG Click_here}}</a>
						<input type="file" name="upl" multiple accept="zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed" />
					</div>
					<ul>
							<!-- The file uploads will be shown here -->
					</ul>
				</form>
			</div>
			<!---->
			<!--div class="page_list_plugins_2wb">
				<p class="text_plugin_p_info_1w">fewfwe eff</p>
				<label for="upload_system" class="label_plugin_text">Upload Idioma</label>
				<div class="form-group">
                    <input type="radio" name="lang_plugin" id="lang_plugin-enabled" value="on" checked="">
                    <label for="lang_plugin-enabled" class="label_plugin_text">Enabled</label>
                    <input type="radio" name="lang_plugin" id="lang_plugin-disabled" value="off">
                    <label for="lang_plugin-disabled" class="m-l-20">Disabled</label>
                </div>
				<label for="upload_system" class="label_plugin_text">Upload icon</label>
				<div class="form-group">
                    <input type="radio" name="icon_plugin" id="icon_plugin-enabled" value="on" checked="">
                    <label for="icon_plugin-enabled">Enabled</label>
                    <input type="radio" name="icon_plugin" id="icon_plugin-disabled" value="off">
                    <label for="icon_plugin-disabled" class="m-l-20">Disabled</label>
                </div>	
			</div-->
		</div>
	</div>
	<?php } ?>
</div>
<script>
	$(function(){
		$(".media_yes").click(function(){

			var user_id = $(this).attr("id");
			var datastring = 'id='+ user_id ;

			$.ajax({
				type: "POST",
				url: "{{LINK requests.php?upload=active_plugins}}",
				data: datastring,
				success: function(data) {
				if (data.status == 200) {
					form_other_settings.find('.waves-effect').text('Save');
						$('.other-settings-alert').html('<i class="fa fa-check"></i> Settings updated successfully');
						setTimeout(function () {
							$('.other-settings-alert').empty();
						}, 2000);
					}
				}
			});
			$("#media_yes"+user_id).hide();
			$("#media_no"+user_id).show();
			return false;
		});
	});

	$(function(){
		$(".media_no").click(function(){

			var user_id = $(this).attr("id");
			var datastring = 'id='+ user_id ;

			$.ajax({
				type: "POST",
				url: "{{LINK requests.php?upload=active_plugins}}",
				data: datastring,
				success: function(data) {
				if (data.status == 200) {
					form_other_settings.find('.waves-effect').text('Save');
						$('.other-settings-alert').html('<i class="fa fa-check"></i> Settings updated successfully');
						setTimeout(function () {
							$('.other-settings-alert').empty();
						}, 2000);
					}
				}
			});
		   $("#media_no"+user_id).hide();
		   $("#media_yes"+user_id).show();
			return false;
		});
	});

</script>
