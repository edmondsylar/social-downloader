<!-- div page -->
<div class="page_div_full">
	<p class="text_top_page_admin">{{LANG Message_5}}
		<span class="text_top_page_admin_span">{{LANG Message_6}}</span>
	</p>
	<!-- search -->
	<!--div class="div_search col-sm-8">
		<form id="search_user_form">
			<div id="div_search_flex">
				<input type="text" name="search_user" id="search_user" class="form__input form-control" placeholder="Search_url"/>
				<button id="search_btn" type="submit" class="bor_btn_1 btn-default">
					<span id="loader_btn_no_mm">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search mx-2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
					</span>
				</button>
			</div>
		</form>
	</div-->
	<!---->
	<?php if($CODE['LOAD_SEND_MESSAGE']=='send_message'){ ?>
		<div class="box_send_message">
			<form class="send_message" method="POST">
				<!---->
				<div class="Message_1">
					<p class="div_flex_input_config_p">{{LANG Message_1}}:</p>
					<br>
					<?php echo $CODE['LOAD_EDIT_MESSAGE'][0]['comments']; ?>
					<br>
					<br>
				</div>
				<div class="div_flex_input_config col-sm-12">
					<p class="div_flex_input_config_p">{{LANG Message_2}}:</p>
					<input type="text" name="form_email" id="form_email" class="form__input_config form__input form-control" value="<?php echo $CODE['LOAD_EDIT_MESSAGE'][0]['email']; ?>"  placeholder="{{LANG Writes_data}}"/>
				</div>
				<!---->
				<div class="div_flex_input_config col-sm-12">
					<p class="div_flex_input_config_p">{{LANG Message_3}}:</p>
					<textarea type="text" name="text_message" id="text_textarea" class="textarea_size form__input_config form__input form-control" placeholder="{{LANG Writes_data}}" rows="4"></textarea>
				</div>
				<!---->
				<div class="div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
					<button type="submit" class="button btn_default_buc bor_btn_1 btn-default">
						<span class="btn_default_buc_cer">
							{{LANG Answer_c}}
						</span>	
					</button>
				</div>
			</form>	
		</div>
	<script>
		//-->
		jQuery(document).ready(function($) {
			tinymce.init({
			  selector: '#text_textarea',  // change this value according to your HTML
			  auto_focus: 'element1',
			  relative_urls: false,
			  remove_script_host: false,
			  height:300,
			  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image  uploadImages |  preview media fullpage | forecolor backcolor emoticons',
			  plugins: [
				  'advlist autolink link image  lists charmap  preview hr anchor pagebreak spellchecker',
				  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
				  'save table contextmenu directionality emoticons template paste textcolor'
			  ]
			});
		});
		//-->
		$(function() {
			var form_ap_settings = $('form.send_message');

			form_ap_settings.ajaxForm({
				url: '{{LINK requests.php?upload=send_message&id=<?php echo $CODE['LOAD_EDIT_MESSAGE'][0]['id']; ?>}}',
				beforeSend: function() {
					form_ap_settings.find('.btn_default_buc_cer').text("{{LANG Processing_data}}");
				},
				success: function(data) {
					if (data.status == 200) {
						form_ap_settings.find('.btn_default_buc_cer').text("OK");
						$('.noti_alre_admin').show();
						setTimeout(function () {
							$('.noti_alre_admin').hide();
						}, 2000);
						Delay_f5(function(){
							window.location.href = data.url;
						},1000);
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
	<?php }else{ ?>
		<div class="div_table_user_admin">
			<!----->
			<div class="table_text_info_user">
				<div class="table_text_info_user_1">
					<p class="text_por_dea_table_user_top">#</p>
				</div>
				<div class="table_text_info_user_2">
					<p class="text_por_dea_table_user_top"><!--User--></p>
				</div>
				<div class="table_text_info_user_3">
					<p class="text_por_dea_table_user_top"><!--Information	Num--></p>
				</div>
			</div>
			<!----->
			<div class="div_table_data_users_all">
				<!---->
				<?php if(count($CODE['LOAD_LIST_MESSAGES']) == 0){ ?>
					<div class="_list_plugins_div">
						<div class="img_no_tentent_plugins">
							<img class="img_no_tentent_plugins_icon" src="<?php echo PHP_LoadAdminLink('images/icon_box_null.png'); ?>"></img>
							<p class="img_no_tentent_plugins_text">{{LANG no_pending_messages}}</p>
						</div>
					</div>
				<?php }else{ ?>
					<?php foreach ($CODE['LOAD_LIST_MESSAGES'] as $key => $data) { ?>
					<div class="div_table_data_users">
						<!----->
						<div class="class_list_user_flex_id">
							<p class="text_por_dea_table_user"><?php echo $data['id']; ?></p>
						</div>
						<!----->
						<div class="class_list_user_flex">
							<div class="image_user_list_admin_div">
								<img class="image_user_list_admin" src="<?php echo PHP_LoadAdminLink('images/avatar_default.png'); ?>"></img>
							</div>
							<div class="class_list_user_flex_name">
								<p class="text_name_admin_user"><?php echo $data['email']; ?>
								<?php if($data['active'] == 1){ ?>
									<span class="info_ass_user_ok">{{LANG ok_1}}</span>
								<?php }else{ ?>	
									<span class="info_no_aausr_2 info_ass_user_ok">{{LANG ok_2}}</span>
								<?php } ?>
								</p>
							</div>
						</div>
						<!----->
						<div class="class_list_user_flex_edit">
							<div class="size_btn_user size_admin_more_media bor_btn_1">
								<a class="bor_btn_1_text_a" href="<?php echo PHP_LoadAdminLinkSettings('comments?p=send_message&l='); ?><?php echo $data["id"]; ?>"><p class="bor_btn_1_text">{{LANG Answer_c}}</p></a>
							</div>
						</div>
					</div>
					<?php } ?>	
				<?php } ?>	


			</div>
		</div>
	<?php } ?>
</div>
