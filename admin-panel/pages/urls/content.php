<!-- div page -->
<div class="page_div_full">
	<p class="text_top_page_admin">{{LANG Url_text}}
		<span class="text_top_page_admin_span">{{LANG Url_text_info}}</span>
	</p>
	<!-- search -->
	<div class="div_search col-sm-8">
		<form id="search_user_form" method="POST">
			<div id="div_search_flex">
				<!---->
				<input type="text" name="search_url" id="search_url" class="form__input form-control" placeholder="{{LANG Search_url}}"/>
				<!---->
				<button id="search_btn" type="submit" class="bor_btn_1 btn-default">
					<span id="loader_btn_no_mm">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search mx-2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
					</span>
				</button>
			</div>
		</form>
	</div>
	<!-- ajax resul_search -->
	<div id="resul_search"></div>
	<!---->
	<div class="div_table div_table_url_admin">
		<!---->
		<div class="div_table_url_admin_1">
			<div class="class_menu_div_table_url_admin_1">
				<div class="text_menu_table_url_1">
					#
				</div>
				<div class="text_menu_table_url_2">
					{{LANG Url_text}}
				</div>	
				<div class="text_menu_table_url_3">
					<svg class="icon_text_menu_table_url_3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mx-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
				</div>					
			</div>
			<!---->
			<div class="div_table_url_admin_1_data_urls">
				<!---->
				<?php foreach ($CODE['LOAD_LIST_URLS'] as $key => $data) { ?>
				<div class="delate_url_admin_<?php echo $data['id'] ?> div_table_list_urls">
					<!---->
					<div class="div_table_list_urls_span">
						<span><?php echo $data['id'] ?></span>
					</div>
					<!---->
					<div class="div_table_list_urls_data">
						<p class="div_table_list_urls_data_p">{{CONFIG site_url}}/s/<?php echo $data['id_url'] ?></p>
					</div>
					<!---->
					<div class="div_table_list__fucn_info">
						<div class="btn_more_url_admin size_admin_more_media bor_btn_1 click_load_url" data-id="<?php echo $data['id'] ?>">
							<span class="bor_btn_1_text_a" href="#"><p class="btn_more_url_admin_p bor_btn_1_text">{{LANG More_info}}</p></span>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	<!---->
	</div>
</div>
<div id="modal_url_admin">
	<!-- ajax_data_load -->
</div>
<!---->
<script>
//--
    $('.click_load_url').on('click', function(){
		var data_id = $(this).data('id');

		$.ajax({
			url: "{{LINK requests.php?upload=modal_url}}",
            type: 'POST',
            data: {id: data_id},   
            success: function(data){
                $("#modal_url_admin").html(data);//$('#more-info').html(data.html);
				$("#modal_url_admin").show();
			}
		});
    });
</script>
<!-- SEARCH -->
<script>
			$(document).ready(function () {
			  
				$('body').on('submit', '#search_user_form', function (e) {
					e.preventDefault();
					var DataString = new FormData($(this)[0]);
					var search = $("#search_url").val();
					
					if (search == "") {
						//-- error
						$(".div_table").show();
						$("#resul_search").hide();
					} else {
						$.ajax({
							url: "{{LINK requests.php?upload=search_url}}",
							type: 'POST',
							data: DataString,
							cache: false,
							contentType: false,
							processData: false,
							beforeSend: function () {
								
							},
							success: function (data) {
								$("#resul_search").html(data).show();
								$(".div_table").hide();
							}
						});
						 
					}

				});
			   
			});
</script>