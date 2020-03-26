		<header>
			<a class="link_logo" href="{{CONFIG site_url}}">
				<img class="header__logo" src="{{CONFIG theme_url}}/img/logo.png" alt="{{CONFIG name_site}}"></img>
			</a>
			<!---->
			<div tabindex="0" class="onclick-menu onclick-menu-page">
				<span class="text_topbar_span text_topbar_span_page dp_page">{{LANG Menu_header}} <i class="fas fa-chevron-down"></i></span>
				<!--div class="dropdown-caret">
					<div class="caret-outer"></div>
					<div class="caret-inner"></div>
				</div-->
				<ul class="onclick-menu-content close-menu-content-page on_pages">
				
					<a href="{{CONFIG site_url}}/page/useterms"><li><span>{{LANG Terms_of_Use}}</span></li></a>
					<a href="{{CONFIG site_url}}/page/privacy"><li><span>{{LANG Privacy_Policy}}</span></li></a>
					<?php if ($options_launcher['articles_active'] == 'on') { ?>
					<a href="{{CONFIG site_url}}/articles"><li><span>{{LANG article_text_4}}</span></li></a>
					<?php }?>
					{{DATA_FACEBOOK}}
					{{DATA_TWITTER}}
					<?php if ($options_launcher['comments_active'] == 'on') { ?>
					<li onclick="open_modal_comments();"><span><i class="icon_red_i_mail fas fa-envelope-square"></i> {{LANG text_header_comments}}</span></li>
					<?php }?>
				</ul>
			</div>			 
			<!---->
			<div tabindex="0" class="class_lags_div onclick-menu">
				<span class="text_topbar_span dp_lang">{{LANG languages_header}} <i class="fas fa-chevron-down"></i></span>
				<!--div class="dropdown-caret">
					<div class="caret-outer"></div>
					<div class="caret-inner"></div>
				</div-->
				<ul class="class_list_lang onclick-menu-content on_lang">
					<?php  echo displayLangSelect(''); ?>
				</ul>
			</div>
			<!---->
		</header>
		<!-- modal -->
		<div class="modal_comments_home">
			<form class="ap-comments" method="POST">
				<div class="box_modal_comments">
					<div class="close_modal_c">
						<svg onclick="close_modal_comments();" id="close_modal_c_icon" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
					</div>
					<div id="ok_200_status">
						<h3 class="text_modal_comments_home">{{LANG text_header_comments}}</h3>
						 
						<h2 class="text_rega_contem text_p_comments">
							{{LANG text_modal_comments}}
						</h2>
										
						<p class="text_p_comments">{{LANG Write_comment}}</p>
						<textarea name="textarea_comments" id="textarea_comments" class="text_textarea_comments form__input form-control" required placeholder="{{LANG Write_comment}}"></textarea>
						<p class="text_p_comments">{{LANG Enter_your_email}}</p>
						<input type="email" name="email_comments" id="email_comments" class="text_input_comments form__input form-control" required placeholder="@"/>
						<button id="brn_comments" type="submit">
							<span class="btn_default_buc_cer">
								{{LANG Send_comment}}
							</span>	
						</button>
					</div>	
					<h2 id="ok_200" class="text_rega_contem text_p_comments" style=" display: none; ">
						{{LANG Thank_contact}}
					</h2>
				</div>
			</form>
		</div>
		<script>
			$(function() {
				var form_ap_settings = $('form.ap-comments');

				form_ap_settings.ajaxForm({
					url: '{{LINK requests.php?upload=comments_site}}',
					beforeSend: function() {
						form_ap_settings.find('.btn_default_buc_cer').text("...");
					},
					success: function(data) {
						if (data.status == 200) {
							form_ap_settings.find('.btn_default_buc_cer').text("ok");
							$('#ok_200').show();
							$('#ok_200_status').hide();
							
						}else if(data.status == 400){
							form_ap_settings.find('.btn_default_buc_cer').text("Error");
							 
							
						}
					}
				});
			});
		</script>