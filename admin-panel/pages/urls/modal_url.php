	<div id="sidebar" class="div_table_url_admin_2">
	<!---->
		<div class="load_data_links_more">
		<!---->
			<div class="close_modal_urls" onclick="close_modal();">
				<svg class="close_modal_urls_icon" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
			</div>
			<div class="load_data_links_more_div">
				<img class="load_data_links_more_img" src="{{DATA_ICON}}"></img>
			</div>
				<p class="text_p_load_data_links_more">{{LANG Platform}}<span class="text_p_load_data_links_more_span">{{DATA_PLATFORM}}</span></p>
				<p class="text_p_load_data_links_more">facebook<span class="text_p_load_data_links_more_span">{{DATA_FACEBOOK}}</span></p>
				<p class="text_p_load_data_links_more">twitter<span class="text_p_load_data_links_more_span">{{DATA_TWITTER}}</span></p>
				<p class="text_p_load_data_links_more">whatsapp<span class="text_p_load_data_links_more_span">{{DATA_WHATSAPP}}</span></p>
				<p class="text_p_load_data_links_more">{{LANG Others}}<span class="text_p_load_data_links_more_span">{{DATA_OTHER}}</span></p>
				<p class="text_p_load_data_links_more">{{LANG All_visit}}<span class="text_p_load_data_links_more_span">{{DATA_VIEWS}}</span></p>
			<div class="more_data_links_line"></div>
				<p class="text_p_load_data_links_more">ip<span class="text_p_load_data_links_more_span">{{DATA_IP_USER}}</span></p>
				<!--p class="text_p_load_data_links_more">user<span class="text_p_load_data_links_more_span">1</span></p-->
			<div class="more_data_links_line"></div>
			<div class="link_or_url_load_1">
					<p class="link_or_url_load_1_p">{{LANG Url_text_M}}:<span class="link_or_url_load_1_p_span"><a href="{{CONFIG site_url}}/s/{{DATA_ID_URL}}">{{CONFIG site_url}}/s/{{DATA_ID_URL}}</a></span></p>
			</div>
			<div class="link_or_url_load_1">
				<p class="link_or_url_load_1_p">{{LANG Url_text_M_original}}:<span class="link_or_url_load_1_p_span"><a href="{{DATA_URL}}">{{DATA_URL}}</a></span></p>
			</div>
			<div class="div_more_loade_links div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
				<button type="submit" class="click_load_url_delate btn_delete_color btn_default_buc bor_btn_1 btn-default" data-id="<?php echo $CODE['DATA_ID']; ?>">
					<span class="btn_default_buc_cer">
						{{LANG Delete_link}}
					</span>	
				</button>
			</div>
		</div>
	</div>
<script>
	function close_modal() {
		$("#modal_url_admin").hide();
	}
//--
    $('.click_load_url_delate').on('click', function(){
		var data_id = $(this).data('id');
		$(".delate_url_admin_"+data_id).hide();
		$.ajax({
			url: "{{LINK requests.php?upload=modal_url&type=delate}}",
            type: 'POST',
            data: {id: data_id},   
            success: function(data){
				
			}
		});
    });
</script>