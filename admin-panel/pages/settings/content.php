<!-- div page -->
<div class="page_div_full">
	<p class="text_top_page_admin">{{LANG Settings}}
		<span class="text_top_page_admin_span">{{LANG General_System_Settings}}</span>
	</p>
	<!---->
	<div class="class_page_config_div">
		<div class="class_page_config_div_2">
			<div class="class_page_config_div_2_menu">
				<a href="<?php echo PHP_LoadAdminLinkSettings('settings'); ?>"><p class="class_page_config_div_2_menu_p">{{LANG General_settings}}</p></a>
				<a href="<?php echo PHP_LoadAdminLinkSettings('settings?p=phpmail'); ?>"><p class="class_page_config_div_2_menu_p">{{LANG Settings_PHPMailer}}</p></a>
				<a href="<?php echo PHP_LoadAdminLinkSettings('settings?p=key_link'); ?>"><p class="class_page_config_div_2_menu_p">{{LANG Encryption_key}}</p></a>
				<a href="<?php echo PHP_LoadAdminLinkSettings('settings?p=admin_setting'); ?>"><p class="class_page_config_div_2_menu_p">{{LANG Settings_admin}}</p></a>
				<a href="<?php echo PHP_LoadAdminLinkSettings('settings?p=terms_of_use'); ?>"><p class="class_page_config_div_2_menu_p">{{LANG Terms_use}}</p></a>
				<a href="<?php echo PHP_LoadAdminLinkSettings('settings?p=privacy_policy'); ?>"><p class="class_page_config_div_2_menu_p">{{LANG Privacy_Policy}}</p></a>
				<a href="<?php echo PHP_LoadAdminLinkSettings('settings?p=copyright'); ?>"><p class="class_page_config_div_2_menu_p">{{LANG DMCA}}</p></a>
				<!--p class="class_page_config_div_2_menu_p">idiomas</p-->
			</div>
		</div>
		<!---->
		<div class="class_page_config_div_1">
			<?php if($CODE['PAGES_SETTINGS'] == 'phpmail'){ ?>
				<!---->
				<!---->
				<!---->
				<!---->			
				<form class="ap-settings" method="POST">
					<p class="text_info_config_p">{{LANG Settings_PHPMailer}}</p>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">Smtp or mail:</p>
						<input type="text" name="smtp_or_mail" id="smtp_or_mail" value="<?php echo $options_launcher['smtp_or_mail']; ?>" class="form__input_config form__input form-control" placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">Smtp host:</p>
						<input type="text" name="smtp_host" id="smtp_host" value="<?php echo $options_launcher['smtp_host']; ?>" class="form__input_config form__input form-control" placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">Smtp username:</p>
						<input type="text" name="smtp_username" id="smtp_username" value="<?php echo $options_launcher['smtp_username']; ?>" class="form__input_config form__input form-control" placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">Smtp password:</p>
						<input type="text" name="smtp_password" id="smtp_password" value="<?php echo $options_launcher['smtp_password']; ?>" class="form__input_config form__input form-control" placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">Smtp encryption:</p>
						<input type="text" name="smtp_encryption" id="smtp_encryption" value="<?php echo $options_launcher['smtp_encryption']; ?>" class="form__input_config form__input form-control" placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">Smtp port:</p>
						<input type="text" name="smtp_port" id="smtp_port" value="<?php echo $options_launcher['smtp_port']; ?>" class="form__input_config form__input form-control" placeholder="{{LANG Writes_data}}"/>
					</div>
					<div class="div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
						<button type="submit" class="button btn_default_buc bor_btn_1 btn-default">
							<span class="btn_default_buc_cer">
								{{LANG Save_data}}
							</span>	
						</button>
					</div>					
				</form>
			<?php }else if($CODE['PAGES_SETTINGS'] == 'key_link'){ ?>
				<!---->
				<!---->
				<!---->
				<!---->			
				<form class="ap-settings" method="POST">
					<p class="text_info_config_p">{{LANG Encryption_key}}</p>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Secret_password}}:</p>
						<input type="text" name="secret_key" id="secret_key" class="form__input_config form__input form-control" value="<?php echo $options_launcher['crypt_secret_key']; ?>" placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Secret_password_key}}:</p>
						<input type="text" name="pass_key" id="pass_key" class="form__input_config form__input form-control"  value="<?php echo $options_launcher['crypt_password']; ?>" placeholder="{{LANG Writes_data}}"/>
					</div>					
					<!---->
					<div class="div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
						<button type="submit" class="button btn_default_buc bor_btn_1 btn-default">
							<span class="btn_default_buc_cer">
								{{LANG Save_data}}
							</span>	
						</button>
					</div>					
				</form>
			<?php }else if($CODE['PAGES_SETTINGS'] == 'admin_setting'){ ?>
				<!---->
				<!---->
				<!---->
				<!---->			
				<form class="ap-settings" method="POST">
					<p class="text_info_config_p">{{LANG Settings_admin}}</p>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Email}}:</p>
						<input type="text" name="mail_admin" id="mail_admin" class="form__input_config form__input form-control" value="<?php echo PHP_Admin_Data('24','SELECT');?>" placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Password}}:</p>
						<input type="text" name="pass_admin" id="pass_admin" class="form__input_config form__input form-control"   placeholder="{{LANG Writes_data}}"/>
					</div>					
					<!---->
					<div class="div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
						<button type="submit" class="button btn_default_buc bor_btn_1 btn-default">
							<span class="btn_default_buc_cer">
								{{LANG Save_data}}
							</span>	
						</button>
					</div>					
				</form>
			<?php }else if($CODE['PAGES_SETTINGS'] == 'terms_of_use'){ ?>
				<!---->
				<!---->
				<!---->
				<!---->			
				<form class="ap-settings" method="POST">
					<p class="text_info_config_p">{{LANG Terms_use}}</p>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Description_data}}:</p>
						<textarea name="text" id="text_textarea"><?php echo PHP_Admin_Data('12','SELECT');?></textarea>
					</div>
					<div class="div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
						<button type="submit" class="button btn_default_buc bor_btn_1 btn-default">
							<span class="btn_default_buc_cer">
								{{LANG Save_data}}
							</span>	
						</button>
					</div>
				</form>
			<?php }else if($CODE['PAGES_SETTINGS'] == 'privacy_policy'){ ?>
				<!---->
				<!---->
				<!---->
				<!---->			
				<form class="ap-settings" method="POST">
					<p class="text_info_config_p">{{LANG Privacy_Policy}}</p>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Description_data}}:</p>
						<textarea name="text" id="text_textarea"><?php echo PHP_Admin_Data('13','SELECT');?></textarea>
					</div>
					<div class="div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
						<button type="submit" class="button btn_default_buc bor_btn_1 btn-default">
							<span class="btn_default_buc_cer">
								{{LANG Save_data}}
							</span>	
						</button>
					</div>
				</form>
			<?php }else if($CODE['PAGES_SETTINGS'] == 'copyright'){ ?>
				<!---->
				<!---->
				<!---->
				<!---->			
				<form class="ap-settings" method="POST">
					<p class="text_info_config_p">{{LANG DMCA}}</p>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Description_data}}:</p>
						<textarea name="text" id="text_textarea"><?php echo PHP_Admin_Data('32','SELECT');?></textarea>
					</div>
					<div class="div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
						<button type="submit" class="button btn_default_buc bor_btn_1 btn-default">
							<span class="btn_default_buc_cer">
								{{LANG Save_data}}
							</span>	
						</button>
					</div>
				</form>				
			<?php }else{ ?>
				<!---->
				<!---->
				<!---->
				<!---->
				<p class="text_info_config_p">{{LANG General_settings}}</p>
				<!---->
				<form class="ap-settings" method="POST">
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Title_site}}:</p>
						<input type="text" name="title_site" id="title_site" class="form__input_config form__input form-control" value="<?php echo PHP_Admin_Data('3','SELECT');?>"  placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Name_site}}:</p>
						<input type="text" name="name_site" id="name_site" class="form__input_config form__input form-control" value="<?php echo PHP_Admin_Data('4','SELECT');?>" placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Description_site}}:</p>
						<textarea type="text" name="description_site" id="description_site" class="form__input_config form__input form-control" placeholder="{{LANG Writes_data}}" rows="4"><?php echo PHP_Admin_Data('7','SELECT');?></textarea>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<br>
						<p class="div_flex_input_config_p">Facebook:</p>
						<input type="text" name="facebook_site" id="facebook_site" class="form__input_config form__input form-control" value="<?php echo PHP_Admin_Data('16','SELECT');?>"  placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">Twitter:</p>
						<input type="text" name="twitter_site" id="twitter_site" class="form__input_config form__input form-control" value="<?php echo PHP_Admin_Data('17','SELECT');?>"  placeholder="{{LANG Writes_data}}"/>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<br>
						<p class="div_flex_input_config_p">{{LANG Activate_post}}:</p>
						<div class="form-group">
                            <input type="radio" name="blogs_site" id="blogs_site-enabled" value="on" <?php echo ($options_launcher['articles_active'] == 'on') ? 'checked': '';?>>
                            <label class="label_ap_ss">{{LANG Enabled}}</label>
                            <input type="radio" name="blogs_site" id="blogs_site-disabled" value="off" <?php echo ($options_launcher['articles_active']== 'off') ? 'checked': '';?>>
                            <label class="label_ap_ss">{{LANG Disabled}}</label>
                        </div>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Activate_blocker}}:</p>
						<div class="form-group">
                            <input type="radio" name="ad_blocker" id="ad_blocker-enabled" value="on" <?php echo ($options_launcher['ad_blocker'] == 'on') ? 'checked': '';?>>
                            <label class="label_ap_ss">{{LANG Enabled}}</label>
                            <input type="radio" name="ad_blocker" id="ad_blocker-disabled" value="off" <?php echo ($options_launcher['ad_blocker']== 'off') ? 'checked': '';?>>
                            <label class="label_ap_ss">{{LANG Disabled}}</label>
                        </div>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Activate_contact_form}}:
							<br>
							<span class="aviso_docume_span">{{LANG info_PHPmailer_admin}}</span>
						</p>
						<div class="form-group">
                            <input type="radio" name="comments_active" id="ad_blocker-enabled" value="on" <?php echo ($options_launcher['comments_active'] == 'on') ? 'checked': '';?>>
                            <label class="label_ap_ss">{{LANG Enabled}}</label>
                            <input type="radio" name="comments_active" id="ad_blocker-disabled" value="off" <?php echo ($options_launcher['comments_active']== 'off') ? 'checked': '';?>>
                            <label class="label_ap_ss">{{LANG Disabled}}</label>
                        </div>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">Google Analytics:</p>
						<input type="text" name="google_analytics" id="google_analytics" class="form__input_config form__input form-control" value="<?php echo $options_launcher['google_analytics']; ?>"  placeholder="{{LANG Writes_data}}"/>
					</div>					
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Site_language}}:</p>
						<select class="form__input_config form__input form-control" name="lang_site" id="lang_site">					
						<!--//== manual to change the language:  en/English - es/Spanish - fr/French - it/Italian - ru/Russian - tr/trick - zh/Chinese - pt/Portuguese - de/German -->
							<option value="<?php echo PHP_Admin_Data('11','SELECT');?>"><?php echo PHP_Admin_Data('11','SELECT');?></option>
							<option value="english">English</option>
							<option value="spanish">Spanish</option>			
							<option value="french">French</option>		
							<option value="italian">Italian</option>		
							<option value="russian">Russian</option>		
							<option value="turkish">Turkish</option>		
							<option value="chinese">Chinese</option>		
							<option value="portuguese">Portuguese</option>			
							<option value="german">German</option>		
						</select>
					</div>						
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Language_admin_panel}}:</p>
						<select class="form__input_config form__input form-control" name="lang_ap_site" id="lang_ap_site">
							<option value="<?php echo $options_launcher['lang_admin']; ?>"><?php echo $options_launcher['lang_admin']; ?></option>
							<option value="english">English</option>
							<!--option value="spanish">spanish</option-->
						</select>
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<p class="div_flex_input_config_p">{{LANG Logo_a}}:</p>
						<br>
						<img class="img_f_ap" src="<?php echo $config['site_url']; ?>/themes/default/img/logo.png"></img>
						<br>
						<br>
						<input type="file" id="image_logo" name="image_logo">	
					</div>
					<!---->
					<div class="div_flex_input_config col-sm-12">
						<br>
						<p class="div_flex_input_config_p">{{LANG Icon_a}}:</p>
						<br>
						<img class="img_f_ap" src="<?php echo $config['site_url']; ?>/themes/default/img/icon.png"></img>
						<br>
						<br>
						<input type="file" id="image_icon" name="image_icon">	
					</div>
					<div class="div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
						<br>
						<br>
						<button type="submit" class="button btn_default_buc bor_btn_1 btn-default">
							<span class="btn_default_buc_cer">
								{{LANG Save_data}}
							</span>	
						</button>
					</div>
				</form>					
			<?php }?>
			<!---->
		</div>
	</div>
</div>
<?php if($CODE['PAGES_SETTINGS']=='terms_of_use' || $CODE['PAGES_SETTINGS']=='privacy_policy' || $CODE['PAGES_SETTINGS']=='copyright'){ ?>
<script>
//-->
    jQuery(document).ready(function($) {
        tinymce.init({
          selector: '#text_textarea',  // change this value according to your HTML
          auto_focus: 'element1',
          relative_urls: false,
          remove_script_host: false,
          height:500,
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
    var form_ap_settings = $('form.ap-settings');

	var form = $(".ap-settings");
		 
        form.submit(function(event) {
            var text    = tinymce.activeEditor.getContent({format: 'raw'});
            var message = $(".create-article-alert");
            if (!text){
                return false;
            }else{
                $("#text_textarea").val(text);
            }
        });

    form_ap_settings.ajaxForm({
        url: '{{LINK requests.php?upload=ap_settings&type=<?php echo $CODE['FILE_TYPE']; ?>}}',
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
<?php }else{ ?>
<script>
//-->
$(function() {
    var form_ap_settings = $('form.ap-settings');

    form_ap_settings.ajaxForm({
        url: '{{LINK requests.php?upload=ap_settings&type=<?php echo $CODE['FILE_TYPE']; ?>}}',
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
<?php } ?>

