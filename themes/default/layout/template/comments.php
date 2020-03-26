<style>
 #load_post_blogs, h1, h2, h3, h4, h5, h6{
	color: #000;
}

header {
    background: transparent;
    background: #555;
    /* background-image: -webkit-linear-gradient(0deg, #415dbd 0%, #748cde 100%); */
    idth: 100%;
    height: 3rem;
    display: flex;
    /* border-bottom: 1px solid #798fe0; */
    /* box-shadow: rgba(184, 185, 193, 0.45) 0px 1px; */
    width: 100%;
    height: 4rem;
    padding-top: .5%;
    display: flex;
    z-index: 9999;
} 
</style>
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
	<!-- END OF THE  header -->	
	<!-- section -->
	<section class="section_home_blog section_home">
	<!---->
		<div id="rotation_m"></div>
		<!-- background: linear-gradient(to right, #3d2fae, #6984d1); -->
	<!---->
		<div id="content_page_home_b">
	<!-- input of the search engine of videos and urls -->
			<div class="box_page_home">
				 
				<!---->
				<div class="ccc_ma_0 content_video">
					 
						<div id="load_post_blogs">
							<div class="text_div_comments">
								<h3>comentarios</h3>
								<br>
								<p class="text_p_comments">escribeun comentario:</p>
								<textarea name="text" class="text_textarea_comments form__input form-control" placeholder="------------"></textarea>
								<p class="text_p_comments">E-mail:</p>
								<input type="text" name="pass_admin" id="pass_admin" class="text_input_comments form__input form-control"   placeholder="-----------"/>
								<button id="brn_comments" type="submit">
									<span class="btn_default_buc_cer">
										Save
									</span>	
								</button>
							</div>
						</div>
					 
				<!-- in the id="resultados" is to show in the content of the search engine -->	
					<div class="wall_two_div">
						<!---->
						<div class="box_site_supported_top_home">
							<div class="div_data_download_videos_home">
								<!---->
								<div class="div_data_download_videos_home_two">
									<p class="data_home_text_p">{{LANG Online_Video_Downloader}}</p>
									<img class="data_home_icon" src="{{CONFIG theme_url}}/img/ico_in_1.png"></img>
									<p class="data_home_text">{{LANG info_plataforma_2}}</p>
								</div>
								<!---->
								<div class="div_data_download_videos_home_two">
									<p class="data_home_text_p">{{LANG Any_Video_ite}}</p>
									<img class="data_home_icon" src="{{CONFIG theme_url}}/img/ico_in_2.png"></img>
									<p class="data_home_text">{{LANG info_plataforma}}</p>
								</div>
								<!---->
								<div class="div_data_download_videos_home_two">
									<p class="data_home_text_p">{{LANG Download_Audios}}</p>
									<img class="data_home_icon" src="{{CONFIG theme_url}}/img/ico_in_3.png"></img>
									<p class="data_home_text">{{LANG info_plataforma_3}}</p>
								</div>								
							</div>
							<br>
							<br>
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
<script type="text/javascript">
    // fetching records
    function displayRecords(numRecords, pageNum) {
        $.ajax({
            type: "GET",
            url: '{{LINK requests.php?upload=post_list_load}}',
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
		displayRecords(15, 1);
	});
</script>
