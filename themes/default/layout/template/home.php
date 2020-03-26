	<!---->
 	<div id="bg_anali_search">
		<div id="loader_noti_search_url">
			<div class="mas_div_anali">
				<img class="img_search_loader_anali" src="{{CONFIG theme_url}}/img/loader_search.gif"></img>
				<br>
				<p class="text_anali_search">{{LANG Analyzing_video_links}}</p>
			</div>
		</div>
	</div>
	<!---->
	<div id="page" class="page">
	<!-- these are the files to generate the manners to download the videos --> 
	<!-- header -->	
	{{INCLUDE_HEADER}}
	<?php echo @$CODE['code_ww']; ?>
	<!-- END OF THE  header -->	
	<!-- section -->
	<section class="section_home">
	<!---->
		<div id="rotation_m"></div>
		<!-- background: linear-gradient(to right, #3d2fae, #6984d1); -->
		<div id="text_top_home">
			<p><br>
			<?php if (@$CODE['ACTIVE_MEDIA']=='ok'){
				include ('admin-panel/files/'.$CODE['ACTIVE_MEDIA_NAME'].'/lang.php');
				echo '	<h1>'.$text_media.'</h1>
						<h5>'.$text_media_two.'</h5>
				';
			?>
			<?php }else{ ?>
				<h1>{{LANG Text_1}}</h1>
				<!--h5>{{LANG Text_2}}</h5-->
			<?php } ?>	
			</p>
		</div>
	<!---->
		<div id="content_page_home">
	<!-- input of the search engine of videos and urls -->
			<div class="box_page_home">
				<!---->
				<div id="ads_one_home" class="class_ads_css">
					<?php echo $options_launcher['ads_one']; ?>
				</div>
				<div class="wall_seach_home">
					<div class="class_modal_home_url">
						<div class="class_back_search_btn" onclick="close_share();">
							<!--i class="class_back_search_btn_icon fas fa-chevron-left"></i>{{LANG Back_search}}-->
						</div>
						<div id="searcherror"></div>
						<div id="blo_div_ads_men">
							<div class="class_ads_blo">
								<svg class="class_ads_blo_icon" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
								<p class="class_ads_blo_text">{{LANG Ad_Blocker_text}}
								</p>
							</div>
						</div>
						<div id="blo_div_ads">
							<div id="resultados"></div>
						</div>	
					</div>
					<?php if (@$CODE['ACTIVE_SHARE']=='ok'){ ?>	
					<!---->
					<div class="class_ads_css">
						<?php echo $options_launcher['ads_one']; ?>
					</div>
					<div class="class_share_data class_modal_home_url">
						<a href="{{CONTAINER_URL_HOME}}">
							<div class="back_search_btn_on class_back_search_btn" onclick="close_share();">
								<!--i class="class_back_search_btn_icon fas fa-chevron-left"></i>{{LANG Back_search}}-->
							</div>
						</a>
						<div id="resultados">
							<?php echo @$CODE['share_data']; ?>					
						</div>	
					</div>	
					<?php }else if (@$CODE['ACTIVE_WATCH']=='ok'){ ?>						
					<!---->
					<div class="class_ads_css">
						<?php echo $options_launcher['ads_one']; ?>
					</div>
					<div class="class_share_data class_modal_home_url">
						<a href="{{CONTAINER_URL_HOME}}">
							<div class="back_search_btn_on class_back_search_btn" onclick="close_share();">
								<!--i class="class_back_search_btn_icon fas fa-chevron-left"></i>{{LANG Back_search}}-->
							</div>
						</a>
						<div id="resultados">
							<?php echo @$CODE['watch_data']; ?>					
						</div>	
					</div>	
					<?php }else{ ?>
					<form id="liveSearch" method="POST">
						<div class="class_search_div_d">
							<div class="class_icon_search_ii">
							</div>
							<input class="input_seach_home" type="text" placeholder="{{LANG Enter_url}}" name="search" id="search" value="">
							<button id="searchbtn" type="submit">
								<!--span id="loader_btn_no_mm">
									<span id="loader_btn_no">{{LANG Download_file}}</span>
									<span id="loader_btn"><i class="fa fa-spinner fa-spin"></i> {{LANG Get_link_btn_load}}</span>
								</span-->
								<svg class="searchbtn_icon" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline>
								</svg>
							</button>
						</div>	
						<!--div class="spinner mb-8"></div-->						
						<br>
						<br>
						<!--a href="./page/help">
						<p class="class_help_home_p">
							<i class="icon_help fas fa-question-circle"></i> <span class="text_help_span">{{LANG help_home}}</span>
						</p>
						</a-->
					</form>
					<?php } ?>
				</div>
				<div class="class_ads_css">
					<?php echo $options_launcher['ads_two']; ?>
				</div>
				<!---->
				<div class="content_video">
					<?php if (@$CODE['ACTIVE_MEDIA']=='ok'){ ?>
					<?php if($CODE['LOAD_POST_BLOGS'] == ''){ ?>
						<!-- NULL -->
					<?php }else{ ?>
								
						<div id="load_post_blogs">
							<h2 class="text_blog text_align_bb_h2 h2_home">{{LANG article_text_1}}</h2>
							<?php echo $CODE['LOAD_POST_BLOGS']; ?>
							<br>
							<a href="<?php echo $config['site_url']; ?>/articles" class="btn_blog btn_all_more_media">{{LANG article_text_2}}</a>
							<br>
							<br>
						</div>
					<?php } ?>	
					<?php }else{ ?>	
						<div class="wall_one_div">
							<!---->
							<center class="advertising">
								<img class="banner1_img" src="{{CONFIG theme_url}}/img/banner1.png" alt="{{CONFIG name_site}}"></img>
							</center>
						</div>
					<?php } ?>	
				<!-- in the id="resultados" is to show in the content of the search engine -->	
					<div class="wall_two_div">
						<!---->
						<div class="box_site_supported_top_home">
							<div class="box_site_supported_top_home_div_1">
								<h2 class="text_align_bb_h2 h2_home">{{LANG site_Supported}}</h2>
								<!--p class="text_site_supported_home">
								{{LANG info_plataforma}}
								</p-->
							</div>
							<div class="div_data_download_videos_home">
								<!---->
								<div class="div_data_download_videos_home_two">
									<p class="data_home_text_p">{{LANG Online_Video_Downloader}}</p>
									<img class="data_home_icon" src="{{CONFIG theme_url}}/img/ico_in_1.png" alt="{{LANG Online_Video_Downloader}}"></img>
									<p class="data_home_text">{{LANG info_plataforma_2}}</p>
								</div>
								<!---->
								<div class="div_data_download_videos_home_two">
									<p class="data_home_text_p">{{LANG Any_Video_ite}}</p>
									<img class="data_home_icon" src="{{CONFIG theme_url}}/img/ico_in_2.png" alt="{{LANG Any_Video_ite}}"></></img>
									<p class="data_home_text">{{LANG info_plataforma}}</p>
								</div>
								<!---->
								<div class="div_data_download_videos_home_two">
									<p class="data_home_text_p">{{LANG Download_Audios}}</p>
									<img class="data_home_icon" src="{{CONFIG theme_url}}/img/ico_in_3.png" alt="{{LANG Download_Audios}}"></></img>
									<p class="data_home_text">{{LANG info_plataforma_3}}</p>
								</div>								
							</div>
							<div class="box_site_supported_top_home_div_2">	
								{{ICONS_MEDIA}}
								<br>
								<div class="div_all_more_media">
									<a href="{{CONFIG site_url}}/page/all-media" class="btn_all_more_media">{{LANG click_more_home}}</a>
								</div>
								<br><br>
							</div>
						</div>						
					</div>
				</div>
				<!-- footer -->
				{{INCLUDE_FOOTER}}
			</div>
		</div>
	</section>
	<!-- END OF THE section -->
	<!--div id="class_footer">
	</div-->
	</div>
	<!-- js.js file with ajax system functions -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/blockadblock/3.2.1/blockadblock.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
    function ValidURL(userInput) {
        var res = userInput.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
        if(res == null)
            return false;
        else
            return true;
    }

    function adBlockDetected() {
		$("#blo_div_ads").hide();
		$("#blo_div_ads_men").show();
    }
    function adBlockNotDetected() {
        var form = $("#download-form");
		
        form.submit();
    }
</script>
<?php if ($options_launcher['ad_blocker'] == 'on') { ?>
<script>
    function checkAgain() {
        setTimeout(function() {
            if(typeof blockAdBlock === 'undefined') {
                adBlockDetected();
				$("#blo_div_ads_men").hide(); 
            } else {
                blockAdBlock.onDetected(adBlockDetected).onNotDetected(adBlockNotDetected);
                blockAdBlock.check();
            }
        }, 300);
    }
</script>
<?php }else{ ?>
<script>
    function checkAgain() {
    }
</script>
<?php } ?> 
<script>
	function close_modal_comments() {
		$(".modal_comments_home").hide();
	}
	
	function open_modal_comments() {
		$(".modal_comments_home").show();
	}	
</script>
<script>		
		/*$('.text_topbar_span').on('click', function(){
		   $('.onclick-menu-content').css('display','block');
		})
		*/
		
			function close_share() {
				$("#resultados").hide();
				$("#resultados_url").hide();
				$(".class_back_search_btn").hide();
				$(".class_modal_home_url").hide();
				$("#ads_one_home").hide();
				$("#liveSearch").show();
				$('#loader_btn_no').show();
				$('#loader_btn').hide();
				$('#bg_anali_search').hide();
			}
		// search of index
			$(document).ready(function () {
			  
				$('body').on('submit', '#liveSearch', function (e) {


					e.preventDefault();

					var DataString = new FormData($(this)[0]);
					var search = $("#search").val();
					 
					if (search == "") {
						swal ( "{{LANG Invalid_URL}}" ,  "{{LANG Invalid_URL_text}}" ,  "error" )
						$("#searcherror").html('<div class="error_div_data"><p class="error_div_data_p">{{LANG Error_1}}<br><span class="error_div_data_span">{{LANG Error_2}}</span></p></div>');
						$("#content_video").show();
						$("#resultados").hide();
					
					} else {
		
						checkAgain();
						
						$('#loader_btn_no').hide();
						$('#loader_btn').show();
						$('#bg_anali_search').show();
						$("#searcherror").html("");
						$.ajax({
							url: Ajax_Requests_File(),
							// url: 'lib/module/search_MYSQL.php', only for mysql or mysqlite connection
							type: 'POST',
							data: DataString,
							cache: false,
							contentType: false,
							processData: false,
							beforeSend: function () {

								$('#searcbtn').attr('disabled', 'disabled');
							},
							success: function (data) {

								$("#content_video").hide();
								$("#resultados").html(data).show();
								$(".class_back_search_btn").show();
								$(".class_modal_home_url").show();
								$("#ads_one_home").show();
								$("#liveSearch").hide();
								$('#bg_anali_search').hide();
								$('#searcbtn').removeAttr('disabled', 'disabled');
							},
							error: function(){
							   $("#searcherror").html('<center><br><br><img src="./assets/img/wifi_off.png"/><br><br></center>');
							   $("#resultados").hide();
							   $("#ads_one_home").hide();
						 
							}
						});
						 
					}

				});
			   
			});
		</script>
