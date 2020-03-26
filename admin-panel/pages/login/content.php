<div class="page_div_full_login page_div_full">
	<div class="page_login_user_admin">
		<!---->
		<div class="page_login_user_admin_1">
			<div class="image_div_login_admin">
				<img class="img_login_admin_1" src="<?php echo PHP_LoadAdminLink('images/img_login.png'); ?>"></img>
			</div>
			<p class="text_home_box_login_admin">{{LANG Text_login_1}}</p>
			<form method="post">
				<!---->
				<?php if ($CODE['ERROR_LOGIN_ADMIN'] == ''){?>
				<?php }else{?>
					
					<div id="error_login_admin">
					<p class="error_login_admin_text"><?php echo $CODE['ERROR_LOGIN_ADMIN']; ?></p>
				</div>
				<?php } ?>
				<input type="hidden" name="token[mailer]" value="<?php echo PHP_fetchToken('mailer'); ?>">
				<!---->
				<div class="div_imput_login_admin">
					<input type="mail" name="login_data_admin_mail" id="login_admin_e" class="form__input_config_login form__input_config form__input form-control" value="<?php echo $CODE['EMAIL']; ?>" placeholder="{{LANG Email}}"/>
				</div>
				<!---->
				<div class="div_imput_login_admin">
				<input type="password" name="login_data_admin_pass" id="login_admin_p" class="form__input_config_login form__input_config form__input form-control" placeholder="{{LANG Password}}"/>
				</div>	
				<!---->	
				<div class="div_info_login_admin_bom">
					<div class="login-admim div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
						<button type="submit" class="login-admim-btn btn_default_buc bor_btn_1 btn-default">
							<span class="btn_default_buc_cer">
								{{LANG login_admin_btn}}
							</span>	
						</button>
					</div>
					<div class="text_help_login_admin">
						{{LANG Text_login_2}}
					</div>
				</div>
			</form>	
		</div>
		<!---->
		<div class="page_login_user_admin_2">
			<p class="_text_p_box_2_login_1">
			<img class="info_panel_name_header_img" src="<?php echo PHP_LoadAdminLink('images/icon_site.png'); ?>"></img>
			EdenPHP<span class="_text_p_box_2_login_1_span"><?php echo $options_launcher['EdenPHP_version']; ?></span></p>
			<p class="_text_p_box_2_login_2">{{LANG Copyright_code}} <span class="_text_p_box_2_login_2_span"><?php echo $options_launcher['developer']; ?></span></p>
		</div>
		<div class="page_login_user_admin_3">
			<!--a class="page_login_user_admin_3_text_langs_a" href="./server.php"><p class="page_login_user_admin_3_text_langs">Español</p></a-->
			<!--a class="page_login_user_admin_3_text_langs_a" href="./server.php"><p class="page_login_user_admin_3_text_langs">English</p></a-->
		</div>
	</div>
</div>
	<style>
		.page_div_full_login {
			background: -webkit-gradient(linear, left top, left bottom, from(#ebf0ff), to(#ffffff));
			background: linear-gradient(to bottom, #ebf0ff, #ffffff);
			width: 100vw;
			height: 100vh;
		}
	</style>