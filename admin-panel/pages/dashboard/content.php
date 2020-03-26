<!-- div page -->
<div class="page_div_full">
	<div class="div_box_1_admin">
		<!---->
		<div class="div_wall_admin_1">
			<div class="div_esta_di_web">
				<!---->
				<div class="admin_div_graphics_info_wall">
					<div class="div__Graphics">
					</div>
					<div class="resultados">
						<canvas id="grafico_Visits"></canvas>
					</div>
				</div>
				<!---->
			</div>
			<div class="geo_data_pais">
				<div class="text_titule_div_all"><p class="text_titule_div_all_p">{{LANG Country_admin}}</p></div>
				<?php if(count($CODE['LOAD_LIST_COUNTRIES']) == 0){ ?>
						<div class="_list_plugins_div">
							<div class="img_no_tentent_plugins">
								<img class="img_no_tentent_plugins_icon" src="<?php echo PHP_LoadAdminLink('images/icon_box_null.png'); ?>"></img>
								<p class="img_no_tentent_plugins_text">{{LANG 404_error}}</p>
							</div>
						</div>
					<?php }else{ ?>
						<!---->
						
						<div class="class_div_data_anayt_list_scroll">
						<?php foreach ($CODE['LOAD_LIST_COUNTRIES'] as $key => $data) { ?>
							<div class="class_div_data_anayt_list">
								<img class="ww_a_anayt_1 class_div_data_anayt_img" src="<?php echo PHP_Load_icon($data['Countries'], 'flag'); ?>"></img>
								<p class="ww_a_anayt_2 class_div_data_anayt_list_1"><?php echo $data['Countries']; ?></p>
								<p class="ww_a_anayt_3 class_div_data_anayt_list_2"><?php echo $data['Results']; ?></p>
							</div>
						<?php } ?>
						</div>
				<?php } ?>
			</div>
		</div>
		<!---->
		<!--p class="text_manul_sistem">ver mas estadisticas</p-->
		<!---->
		<!--div class="div_wall_admin_2">
			<!----
			<div class="cass_data_info_admin">
				<div class="img_panel_data_info_div">
					<img class="img_panel_data_info" src="./image/i_1.png"></img>
				</div>
				<p class="admin_esta_info">32423
					<span class="admin_esta_info_name">user</span>
				</p>
			</div>		
		</div-->
		<!---->
		<div class="div_wall_admin_3">
			<!---->
			<div class="platafo_media_info">
				<!---->
				<p class="text_manul_sistem"><span class="incon_admin_est_svg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up mx-2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></span>{{LANG Info_pluguns_Dashboard}}</p>
				<!---->
				<!---->
				<!---->
				<div class="box_info_media_so">
					<!---->
					<?php if(count($CODE['LOAD_LIST_PLUGINS']) == 0){ ?>
						<div class="_list_plugins_div">
							<div class="img_no_tentent_plugins">
								<img class="img_no_tentent_plugins_icon" src="<?php echo PHP_LoadAdminLink('images/icon_box_null.png'); ?>"></img>
								<p class="img_no_tentent_plugins_text">{{LANG 404_error}}</p>
							</div>
						</div>
					<?php }else{ ?>
					<!---->
					<?php foreach ($CODE['LOAD_LIST_PLUGINS'] as $key => $data) { ?>
					<?php
					
					$icon_img = str_replace('./upload/icons/', '{{CONFIG site_url}}/upload/icons/', $data["icon"]);
					 
					?>
					<div class="box_info_media_so_wall">
						<div class="box_info_media_so_wall_icon">
							<img class="box_info_media_so_wall_img" src="<?php echo $icon_img; ?>"></img>
						</div>
						<div class="more_box_mp_23 box_info_media_so_dia_flex">
							<div class="progress my-3 circle" style="height:6px">
								<div class="progress-bar circle gd-primary" data-toggle="tooltip" title="" style="width: <?php echo _round_plugins_use($data["platform"]) ?>%" data-original-title="100%"></div>
							</div>
							<!--p class="box_info_media_so_wall_text">34242</p-->
							<p class="more_box_mp_20 box_info_media_so_wall_p"><?php echo $data["platform"]; ?></p>	
						</div>
						<div class="admin_ba_m more_box_mp_21 size_admin_more_media bor_btn_1">
							<?php echo _round_plugins_use($data["platform"]) ?>%
						</div>
						<!--div class="size_admin_more_media bor_btn_1">
							<a class="bor_btn_1_text_a" href="<?php echo PHP_LoadAdminLinkSettings('plugins?p=more_plugin&l='); ?><?php echo $data["key_plugin"]; ?>"><p class="bor_btn_1_text">more info</p></a>
						</div-->
					</div>
					<?php } ?>					
					<?php } ?>					
				</div>
			</div>
			<!---->
			<div class="data_2_admin_info">
				<div class="text_titule_div_all"><p class="text_titule_div_all_p">{{LANG Dashboard_information_1}}</p></div>
				<!----->
				<div class="nave_and_system_div">
					<div class="class_alias_datos_sit_sy">
						<p class="class_alias_datos_sit_sy_1">{{LANG Server_Space_Use}}</p>
						<p class="class_alias_datos_sit_sy_2"><?php echo ZahlenFormatieren($CODE['BELEGT']); ?></p>
					</div>
					<div class="class_alias_datos_sit_sy">
						<p class="class_alias_datos_sit_sy_1">{{LANG Available_space}}</p>
						<p class="class_alias_datos_sit_sy_2"><?php echo ZahlenFormatieren($CODE['FREI']); ?></p>
					</div>
					<div class="class_alias_datos_sit_sy">
						<p class="class_alias_datos_sit_sy_1">{{LANG Disk_Space}}</p>
						<p class="class_alias_datos_sit_sy_2"><?php echo ZahlenFormatieren($CODE['INSGESAMT']); ?></p>
					</div>
					<?php
						if ($CODE['CPU_STRING'] === -1) {
							echo '';
						}else {
							echo $CODE['CPU_STRING'];
						}
						
					?>
					<div class="class_alias_datos_sit_sy">
						<p class="class_alias_datos_sit_sy_1">{{LANG Server_location}}</p>
						<p class="class_alias_datos_sit_sy_2"><?php echo ($CODE['GEO_SERVER_INFO']['country'] == NULL)?'Error':$CODE['GEO_SERVER_INFO']['country']; ?> / <?php echo (@$CODE['GEO_SERVER_INFO']['continent'] == NULL)? 'Error' :@$CODE['GEO_SERVER_INFO']['continent']; ?></p>
					</div> 
				</div>	
			</div>
			<!---->
			<div class="nave_and_system">
				<!---->
				<div class="na_admin_info">
					<!---->
					<div class="text_titule_div_all"><p class="text_titule_div_all_p">{{LANG Dispositives_admin}}</p></div>
					<!---->
					<?php if(count($CODE['LOAD_LIST_DEVICE']) == 0){ ?>
						<div class="_list_plugins_div">
							<div class="img_no_tentent_plugins">
								<img class="img_no_tentent_plugins_icon" src="<?php echo PHP_LoadAdminLink('images/icon_box_null.png'); ?>"></img>
								<p class="img_no_tentent_plugins_text">{{LANG 404_error}}</p>
							</div>
						</div>
					<?php }else{ ?>
						<!---->
						<div class="scrill_wall_admin_d">
						<?php foreach ($CODE['LOAD_LIST_DEVICE'] as $key => $data) { ?>
							<div class="class_div_data_anayt_list">
								<img class="ww_a_anayt_1 class_div_data_anayt_img" src="<?php echo PHP_Load_icon($data['Device'], 'device'); ?>"></img>
								<p class="ww_a_anayt_2 class_div_data_anayt_list_1"><?php echo $data['Device']; ?></p>
								<p class="ww_a_anayt_3 class_div_data_anayt_list_2"><?php echo $data['Access']; ?></p>
							</div>
						<?php } ?>
						</div>
					<?php } ?>
				</div>
				<!---->
				<BR>
				<div class="si_admin_info">
					<!---->
					<div class="text_titule_div_all"><p class="text_titule_div_all_p">{{LANG Browsers}}</p></div>
					<!---->
					<?php if(count($CODE['LOAD_LIST_BROWSER']) == 0){ ?>
						<div class="_list_plugins_div">
							<div class="img_no_tentent_plugins">
								<img class="img_no_tentent_plugins_icon" src="<?php echo PHP_LoadAdminLink('images/icon_box_null.png'); ?>"></img>
								<p class="img_no_tentent_plugins_text">{{LANG 404_error}}</p>
							</div>
						</div>
					<?php }else{ ?>
						<!---->
						<div class="scrill_wall_admin_d">
						<?php foreach ($CODE['LOAD_LIST_BROWSER'] as $key => $data) { ?>
							<div class="class_div_data_anayt_list">
								<img class="ww_a_anayt_1 class_div_data_anayt_img" src="<?php echo PHP_Load_icon($data['Browser'], 'browser'); ?>"></img>
								<p class="ww_a_anayt_2 class_div_data_anayt_list_1"><?php echo $data['Browser']; ?></p>
								<p class="ww_a_anayt_3 class_div_data_anayt_list_2"><?php echo $data['Access']; ?></p>
							</div>
						<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
 
    <script>
            $(document).ready(mostrarResultados(<?php echo date('Y');?> ));  
                function mostrarResultados(año){
                    $.ajax({
                        type:'POST',
                        url: '{{LINK requests.php?upload=process_graphics}}',
                        data:'año='+año,
                        success:function(data){

                            var valores = eval(data);

                            var e   = valores[0];
                            var f   = valores[1];
                            var m   = valores[2];
                            var a   = valores[3];
                            var ma  = valores[4];
                            var j   = valores[5];
                            var jl  = valores[6];
                            var ag  = valores[7];
                            var s   = valores[8];
                            var o   = valores[9];
                            var n   = valores[10];
                            var d   = valores[11];
                              
                            var Datos = {
                                    labels : ['{{LANG January}}', '{{LANG February}}', '{{LANG March}}', '{{LANG April}}', '{{LANG May}}', '{{LANG June}}', '{{LANG July}}', '{{LANG August}}', '{{LANG September}}', '{{LANG October}}', '{{LANG November}}', '{{LANG December}}'],
                                    datasets : [
                                        {	
                                            fillColor : '#6c82d2', //COLOR DE LAS BARRAS
                                            strokeColor : '#6c82d2', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : '#9bacea', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : '#dddddd', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                            data : [e, f, m, a, ma, j, jl, ag, s, o, n, d]
                                         }
                                    ]
                                }
                                
                            var contexto = document.getElementById('grafico_Visits').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                        }
                    });
                    return false;
                }
    </script>			

