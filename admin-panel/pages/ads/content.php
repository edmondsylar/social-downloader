<!-- div page -->
<div class="page_div_full">
	<p class="text_top_page_admin">{{LANG Ads_text}}
		<span class="text_top_page_admin_span">{{LANG Ads_text_info}}</span>
	</p>
	<div class="page_ads_admin">
		<div class="page_ads_admin_1">
			<p class="text_info_config_p">{{LANG Ad_banners}}</p>
			<!---->
			<form class="ads-settings" method="POST">
				<div class="page_ads_admin_div">
					<p class="page_ads_admin_text_p">{{LANG Ads_1}}:</p>
					<textarea type="text" name="ads_text_1" id="ads_text_1" class="form__input_config form__input form-control" placeholder="{{LANG Ads_1}}" rows="6"><?php echo $options_launcher['ads_one'] ?></textarea>
				</div>
				<!---->
				<div class="page_ads_admin_div">
					<p class="page_ads_admin_text_p">{{LANG Ads_2}}:</p>
					<textarea type="text" name="ads_text_2" id="ads_text_2" class="form__input_config form__input form-control" placeholder="{{LANG Ads_2}}" rows="6"><?php echo $options_launcher['ads_two'] ?></textarea>
				</div>
				<!---->
				<div class="page_ads_admin_div">
					<p class="page_ads_admin_text_p">{{LANG Ads_3}}:</p>
					<textarea type="text" name="ads_text_3" id="ads_text_3" class="form__input_config form__input form-control" placeholder="{{LANG Ads_3}}" rows="6"><?php echo $options_launcher['ads_three'] ?></textarea>
				</div>
				<div class="no_painn div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
					<button type="submit" class="btn_default_buc bor_btn_1 btn-default">
						<span class="btn_default_buc_cer">
							{{LANG Save_data}}
						</span>	
					</button>
				</div>
			</form>
		</div>
		<div class="page_ads_admin_2">
			<form class="add-tags-settings" method="POST">
				<p class="text_info_config_p">{{LANG Ads_script}}</p>
				<!---->
				<div class="page_ads_admin_div">
					<p class="page_ads_admin_text_p">{{LANG metas_ads}}:</p>
					<textarea type="text" name="add_text_1" id="add_text_1" class="form__input_config form__input form-control" placeholder="</>" rows="4"><?php echo $options_launcher['add_tag_ad_1'] ?></textarea>
				</div>
				<!---->
				<div class="page_ads_admin_div">
					<p class="page_ads_admin_text_p">{{LANG Body_ads}}:</p>
					<textarea type="text" name="add_text_2" id="add_text_2" class="form__input_config form__input form-control" placeholder="</>" rows="4"><?php echo $options_launcher['add_tag_ad_2'] ?></textarea>
				</div>
				<!---->
				<div class="page_ads_admin_div">
					<p class="page_ads_admin_text_p">{{LANG Body_ads_2}}:</p>
					<textarea type="text" name="add_text_3" id="add_text_3" class="form__input_config form__input form-control" placeholder="</>" rows="4"><?php echo $options_launcher['add_tag_ad_3'] ?></textarea>
				</div>
				<!---->
				<div class="page_ads_admin_div">
					<p class="page_ads_admin_text_p">{{LANG Body_ads_3}}:</p>
					<textarea type="text" name="add_text_4" id="add_text_4" class="form__input_config form__input form-control" placeholder="</>" rows="4"><?php echo $options_launcher['add_tag_ad_4'] ?></textarea>
				</div>
				<!---->
				<div class="page_ads_admin_div">
					<p class="page_ads_admin_text_p">{{LANG Body_Down}}:</p>
					<textarea type="text" name="add_text_5" id="add_text_5" class="form__input_config form__input form-control" placeholder="</>" rows="4"><?php echo $options_launcher['add_tag_ad_5'] ?></textarea>
				</div>
				<!---->
				<div class="no_painn div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
					<button type="submit" class="btn_default_buc bor_btn_1 btn-default">
						<span class="btn_default_buc_cer">
							{{LANG Save_data}}
						</span>	
					</button>
				</div>
			</form>			
		</div>
	</div>
</div>
 
<script>
$(function() {
    var form_ads_settings = $('form.ads-settings');
    var form_add_tags_settings = $('form.add-tags-settings');

    form_ads_settings.ajaxForm({
        url: '{{LINK requests.php?upload=add_ads&type=ads}}',
        beforeSend: function() {
            form_ads_settings.find('.btn_default_buc_cer').text("{{LANG Processing_data}}");
        },
        success: function(data) {
            if (data.status == 200) {
				form_ads_settings.find('.btn_default_buc_cer').text("{{LANG Saved_data}}");
				$('.noti_alre_admin').show();
            	setTimeout(function () {
            		$('.noti_alre_admin').hide();
            	}, 2000);
            }else if(data.status == 400){
				form_ads_settings.find('.btn_default_buc_cer').text("{{LANG Error_data}}");
				$('.noti_alre_admin').show();
            	setTimeout(function () {
            		$('.noti_alre_admin').hide();
            	}, 2000);
			}
        }
    });

    form_add_tags_settings.ajaxForm({
        url: '{{LINK requests.php?upload=add_ads&type=ads_tags}}',
        beforeSend: function() {
            form_add_tags_settings.find('.btn_default_buc_cer').text("{{LANG Processing_data}}");
        },
        success: function(data) {
            if (data.status == 200) {
                form_add_tags_settings.find('.btn_default_buc_cer').text("{{LANG Saved_data}}");
                $('.noti_alre_admin').show();
                setTimeout(function () {
                    $('.noti_alre_admin').hide();
                }, 2000);
            }else if(data.status == 400){
				form_ads_settings.find('.btn_default_buc_cer').text("{{LANG Error_data}}");
				$('.noti_alre_admin').show();
            	setTimeout(function () {
            		$('.noti_alre_admin').hide();
            	}, 2000);
			}
        }
    });
});
</script>