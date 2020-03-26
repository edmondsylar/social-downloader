<!-- div page -->
<div class="page_div_full">
	<p class="text_top_page_admin">{{LANG Articles_blogs}}
		<span class="text_top_page_admin_span">{{LANG Item_manager}}</span>
	</p>
	<?php if($CODE['LOAD_PAGES_BLOG']=='new' || $CODE['LOAD_PAGES_BLOG']=='edit'){ ?>
	<!---->
	<!---->
	<!---->
	<div class="wall_new_blog">
		<div class="create-article-alert"></div>
		<!---->
		<form class="post-settings" method="POST">
		<div class="col-md-12">
			<!---->
            <div class="form-line">
               <input type="text" class="form__input_config form__input form-control" name="title" placeholder="{{LANG Title_blog}}" value="<?php echo ($CODE['LOAD_EDIT_DATA'][0]['title']==NULL)?'':$CODE['LOAD_EDIT_DATA'][0]['title'];?>" style="width: 100%;">
            </div>
			<!---->
            <div class="form-line">
                <textarea name="description" class="form__input_config form__input form-control" placeholder="{{LANG Description_blog}}" style="width: 100%;"><?php echo ($CODE['LOAD_EDIT_DATA'][0]['description']==NULL)?'':$CODE['LOAD_EDIT_DATA'][0]['description'];?></textarea>
            </div>
			<!---->
            <div class="form_textarea_box form-line">
                <textarea name="text" id="new-article"><?php echo ($CODE['LOAD_EDIT_DATA'][0]['text']==NULL)?'':_Decode($CODE['LOAD_EDIT_DATA'][0]['text']);?></textarea>
            </div> 
			<!---->
			<div class="dix_fl form-line">
				<div class="box_1_more_blog">
					<p class="text_p_blo_t">{{LANG Select_img}}</p>
					<div class="form-line">
                        <div class="preview-article-image">
                            <div class="preview-article-image-icon-upload">
								<?php echo ($CODE['LOAD_EDIT_DATA'][0]['image']==NULL)?'':'<img src="'.$config['site_url'].'/'.$CODE['LOAD_EDIT_DATA'][0]['image'].'" alt="Post Image">';?>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="box_2_more_blog">
					<p class="text_p_blo_t">{{LANG Category_blog}}</p>
					<select name="category" class="form__input_config form__input form-control">
						<!---->
						<?php if($CODE['LOAD_EDIT_DATA'][0]['category']){ ?>
						<option value="<?php echo $CODE['LOAD_EDIT_DATA'][0]['category']; ?>">
							<?php echo $CODE['LOAD_EDIT_DATA'][0]['category']; ?>
						</option>
						<?php } ?>
						<!---->
						<option value="blog">
							{{LANG Article_blog}}
						</option>
						<!---->
						<?php foreach ($CODE['LIST_CATEGORY'] as $cat_id => $category): ?>
							<option value="<?php echo $category['platform'];?>">
								<?php echo $category['platform'];?>
							</option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="div_flex_input_config_btn_admin div_flex_input_config col-sm-11">
				<button type="submit" class="button btn_default_buc bor_btn_1 btn-default">
					<span class="btn_default_buc_cer">
						{{LANG Save_data}}
					</span>	
				</button>
			</div>
        </div>
		<input type="file" class="hidden" id="article-image" name="image">
		<!---->
		</form>
		<!---->
	</div>
	 
	<?php }else{ ?>
	<!---->
	
	<div id="box_blogs_one">
	<?php if(count($CODE['LOAD_ALL_BLOG']) == 0){ ?>
						<div class="_list_plugins_div">
							<div class="img_no_tentent_plugins">
								<img class="img_no_tentent_plugins_icon" src="<?php echo PHP_LoadAdminLink('images/icon_box_null.png'); ?>"></img>
								<p class="img_no_tentent_plugins_text">{{LANG 404_error}}</p>
							</div>
						</div>
					<?php }else{ ?>
		<!---->	 
		<div id="results"></div>
		<div class="loader"></div>
		<!--div class="show_more class_load_div" data-id="<?php echo $CODE['LOAD_LIST_DATA_MORE']; ?>">
			<div id="show_more_main<?php echo $CODE['LOAD_LIST_DATA_MORE']; ?>">
				<p class="class_load_div_p">load data</p>
			</div>
		</div-->
		<?php } ?>
	</div>
	
	<!---->
	<a href="<?php echo PHP_LoadAdminLinkSettings('blogs?p=new'); ?>">						 
		<div class="new_blog_btn size_admin_more_media bor_btn_1">
			<p class="new_blog_btn_p">{{LANG Add_article}}</p>
		</div>
	</a>	
	<?php } ?>
</div>

<script type="text/javascript">
    // fetching records
    function displayRecords(numRecords, pageNum) {
        $.ajax({
            type: "GET",
            url: '{{LINK requests.php?upload=post_list}}',
            data: "show=" + numRecords + "&pagenum=" + pageNum,
            cache: false,
            beforeSend: function() {
                $('.loader').html('<img src="loader.gif" alt="" width="24" height="24" style="padding-left: 400px; margin-top:10px;" >');
            },
            success: function(html) {
                $("#results").html(html);
                $('.loader').html('');
            }
        });
    }

	// used when user change row limit
	function changeDisplayRowCount(numRecords) {
		displayRecords(numRecords, 1);
	}

	$(document).ready(function() {
		displayRecords(10, 1);
	});
</script>
<script>
 
//-->
    jQuery(document).ready(function($) {
        tinymce.init({
          selector: '#new-article',  // change this value according to your HTML
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
		
		$(".preview-article-image").click(function(event) {
            $("#article-image").trigger('click');
        });

        $("#article-image").change(function(event) {
            var self       = $(this);
            var image_blob = false;

            if (window.URL !== undefined) {
                image_blob = window.URL.createObjectURL(self.prop('files')[0]);
            } 

            else if (window.webkitURL !== undefined) {
                image_blob = window.webkitURL.createObjectURL(self.prop('files')[0]);
            } 

            if (image_blob) {
              $(".preview-article-image").html("<img src='" + image_blob + "' alt='Picture'>");  
            }
            
        });
		
    });
<?php
	if($CODE['LOAD_EDIT_DATA'][0]['id']==NULL){
		$type = 'new';
	}else{
		$type = 'edit&id='.$CODE['LOAD_EDIT_DATA'][0]['id'];
	}
?>
//-->
$(function() {
    var form_post_settings = $('form.post-settings');

	var form = $(".post-settings");
		 
    form.submit(function(event) {
        var text    = tinymce.activeEditor.getContent({format: 'raw'});
        var message = $(".create-article-alert");
        if (!text){
            return false;
        }else{
            $("#new-article").val(text);
        }
    });

    form_post_settings.ajaxForm({
        url: '{{LINK requests.php?upload=post&type=<?php echo $type; ?>}}',
		type:"POST",
		dataType:"json",
        beforeSend: function() {
            form_post_settings.find('.btn_default_buc_cer').text("{{LANG Processing_data}}");
        },
        success: function(data) {
			var message = $(".create-article-alert");
            if (data.status == 200) {
				form_post_settings.find('.btn_default_buc_cer').text("{{LANG Saved_data}}");
				$('.noti_alre_admin').show();
            	setTimeout(function () {
            		$('.noti_alre_admin').hide();
            	}, 2000); 
                Delay_f5(function(){
                    window.location.href = data.url;
                },1000);
            }else if(data.status == 400){
				form_post_settings.find('.btn_default_buc_cer').text("{{LANG Error_data}}");
				$('.noti_alre_admin').show();
            	setTimeout(function () {
            		$('.noti_alre_admin').hide();
            	}, 2000);
				
			}
 
        }
    });
});	 
</script>
