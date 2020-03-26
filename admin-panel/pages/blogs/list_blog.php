<div class="wall_blogs_div div_delate_{{id_post}}">
	<div class="div_blogs_img">
		<img class="div_blogs_img_src" src="{{CONFIG site_url}}/{{image}}"></img>
	</div>
	<div class="div_blogs_text_admin">
		<h3 class="h_text_1">{{title}}</h3>
		<!--p class="div_blogs_text_admin_p">youtube es una red </p--> 
		<a class="btn_1_{{id_post}} edi_blog_p"  href="<?php echo PHP_LoadAdminLinkSettings('blogs?p=edit&b='); ?>{{id_post}}"><img class="img_i_blog" src="<?php echo PHP_LoadAdminLink('images/edit_blog.png'); ?>"></img>{{LANG Edit_article}}</a>
		<a class="delate_coe btn_2_{{id_post}} edi_blog_p click_load_delate" data-id="{{id_post}}"><img class="img_i_blog" src="<?php echo PHP_LoadAdminLink('images/delate_blog.png'); ?>"></img>{{LANG Delete_link}}</a>
		<!---->
		<a class="delate_btn_{{id_post}} edi_blog_p click_load_delate_no" data-id="{{id_post}}" style="display: none;">{{LANG No_data}}</a>
		<a class="delate_coe_2 delate_coe delate_btn_{{id_post}} edi_blog_p click_load_delate_data" data-id="{{id_post}}" style="display: none;"><img class="img_i_blog" src="<?php echo PHP_LoadAdminLink('images/delate_blog.png'); ?>"></img>{{LANG Confirm}}</a>
		<p class="class_p_delate_info delate_btn_{{id_post}}" style="display: none;">{{LANG Confirm_message}}</p>
	</div>			
</div>
<script>
	//--
	$('.click_load_delate_no').on('click', function(){
		var data_id = $(this).data('id');
		$('.btn_1_'+data_id).show();
		$('.btn_2_'+data_id).show();
		$('.loader_data_delate_'+data_id).hide();
		$('.delate_btn_'+data_id).hide();
    });
	//--
	$('.click_load_delate').on('click', function(){
		var data_id = $(this).data('id');
		$('.btn_1_'+data_id).hide();
		$('.btn_2_'+data_id).hide();
		$('.loader_data_delate_'+data_id).show();
		$('.delate_btn_'+data_id).show();
    });	
	//--
	$('.click_load_delate_data').on('click', function(){
		var data_id = $(this).data('id');
		$('.div_delate_'+data_id).hide();
		
		$.ajax({
			url: '{{LINK requests.php?upload=post&type=delate}}',
            type: 'POST',
            data: 'id='+data_id,
			dataType:"json",
            success: function(data){
				$('.noti_alre_admin').show();
					setTimeout(function () {
						$('.noti_alre_admin').hide();
				}, 2000);
			}
		});
    });
</script>