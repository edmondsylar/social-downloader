	<header>
		<!--div class="div_header_onli">
			<p class="div_header_onli_p">user:<span class="div_header_onli_span">2342</span></p>
		</div-->
		<nav>
			<div class="div_user_admin_top">
				<a id="salo_admin_header" href="<?php echo PHP_LoadAdminLinkSettings('logout'); ?>">
					<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out mx-2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg></span>
					<p class="div_user_admin_top_text">{{LANG Logout}}</p>
					<img class="div_user_admin_top_image" src="<?php echo PHP_LoadAdminLink('images/avatar_default.png'); ?>"></img>
				</a>	
			</div>
		</nav>
	</header>
	<!-- menu -->
	<div class="box_menu_panel">
		<img class="logo_dep" src="<?php echo PHP_LoadAdminLink('images/logo.png'); ?>"></img>
		<!---->
		<div id="menu_panel" class="menu_panel">
			<!---->
			<a href="./">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home mx-2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></span>
				<p class="list_le_menu_panel_text">{{LANG Dashboard}}</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div>
			<!---->
			<a href="<?php echo PHP_LoadAdminLinkSettings('plugins'); ?>">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package mx-2"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line><line x1="7" y1="3.5" x2="17" y2="8.5"></line></svg></span>
				<p class="list_le_menu_panel_text">{{LANG Plugins}}</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div>			
			<!---->
			<!--a href="<?php echo PHP_LoadAdminLinkSettings('user'); ?>">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users mx-2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span>
				<p class="list_le_menu_panel_text">lista user</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div-->
			<!---->
			<a href="<?php echo PHP_LoadAdminLinkSettings('urls'); ?>">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link mx-2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg></span>
				<p class="list_le_menu_panel_text">{{LANG List_urls}}</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div>	
			<!---->
			<!--a href="<?php echo PHP_LoadAdminLinkSettings('report'); ?>">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag mx-2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg></span>
				<p class="list_le_menu_panel_text">reportes</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div-->			
			<!---->
			<a href="<?php echo PHP_LoadAdminLinkSettings('ads'); ?>">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign mx-2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg></span>
				<p class="list_le_menu_panel_text">{{LANG Add_ads}}</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div>
			<!---->
			<!--a href="./list_user.php">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders mx-2"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg></span>
				<p class="list_le_menu_panel_text">--config App</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div-->
			<!---->
			<a href="<?php echo PHP_LoadAdminLinkSettings('comments'); ?>">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail mx-2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span>
				<p class="list_le_menu_panel_text">{{LANG Message_menu}}</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div>
			<!---->
			<a href="<?php echo PHP_LoadAdminLinkSettings('blogs'); ?>">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit mx-2"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg></span>
				<p class="list_le_menu_panel_text">{{LANG Articles_blogs}}</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div>				
			<!---->
			<a href="<?php echo PHP_LoadAdminLinkSettings('settings'); ?>">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mx-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></span>
				<p class="list_le_menu_panel_text">{{LANG Settings}}</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div>
			<!---->
			<!--a href="./sitemap.php">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map mx-2"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg></span>
				<p class="list_le_menu_panel_text">Sitemap</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div-->			
			<!---->
			<a href="<?php echo PHP_LoadAdminLinkSettings('server'); ?>">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server mx-2"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></span>
				<p class="list_le_menu_panel_text">{{LANG Settings_info}}</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div>
			<!---->
			<!--a href="<?php echo PHP_LoadAdminLinkSettings('documentation'); ?>">
			<div class="list_le_menu_panel">
				<span class="icon_svg_menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle mx-2"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg></span>
				<p class="list_le_menu_panel_text">{{LANG Documentation_script}}</p>
				<span class="list_le_menu_panel_icon"></span>
			</div>
			</a>
			<div class="line_menu_panel"></div-->
			<!---->
		</div>
		<!---->
		<div id="info_software">			
			<div class="info_upload_boo">
				<p class="info_upload_boo_text"><?php echo $options_launcher['name_script']; ?> <span class="info_upload_boo_data"><?php echo $options_launcher['script_version']; ?></span></p>
			</div>
			<p class="info_panel_name_header"><img class="info_panel_name_header_img" src="<?php echo PHP_LoadAdminLink('images/icon_site.png'); ?>"></img><?php echo $options_launcher['EdenPHP_name']; ?><span class="info_panel_name_header_span">V: <?php echo $options_launcher['EdenPHP_version']; ?></span></p>
		</div>
	</div>
	<div class="other-settings-alert noti_alre_admin" style="display: none;">
		<svg class="noti_alre_admin_span" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle mx-2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
		<p class="noti_alre_admin_text">{{LANG Information_saved_correctly}}</p>
	</div>