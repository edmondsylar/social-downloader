<!-- div page -->
<div class="page_div_full">
	<div class="div_documen">
		<!---->
		<p class="p_size_1">Documentation</p>
		<br>
		<p class="p_size_2">System documentation and functions for better handling, follow the installation steps to avoid installation errors.
		<br>
		If you have problems or questions you can communicate through
		<br>
		<br><b>WhatsApp: +528941020713</b>
		<br>or
		<br><b>E-mail: Game123727@gmail.com</b>
		</p>
		<!---->
		<br>
		<p class="p_size_1">Installation</p>
		<br>
		<p>To make an installation correctly follow these steps</p>
		<p class="p_size_3">Steps 1</p>
		<p class="p_size_2">Step 1 is very easy since the installation is executed systematically after loading the "Script" folder in your Hosting / Server after the indications have to be followed
		<br>
		do the same as they appear in the images
		</p>
		<p class="p_size_2"><b>1. First you have to read and accept the terms and conditions of the script.</b></p>
		<p class="p_size_2"><b>2. You have to verify that the system requirements are correct.</b></p>
		<img class="img_size_1" src="<?php echo PHP_LoadAdminLink('img/img_2.png'); ?>"></img>
		<br>
		<br>
		<p class="p_size_2"><b>3. Fill in all the fields with the correct information to avoid error with the installation,<br> after that you have to wait for the information to be processed.</b></p>
		<br>
		<img class="img_size_1" src="<?php echo PHP_LoadAdminLink('img/img_3.png'); ?>"></img>
		<br>
		<br>
		<p>
		SQL Host name: Your MySQL host name, e.g: localhost
		<br>SQL Username: Your MySQL username.
		<br>SQL Password: Your MySQL user password.
		<br>SQL Database: Your MySQL database name.
		<br>Site URL: Your website URL where you will install the script, examples:
		<br>http://siteurl.com
		<br>http://www.siteurl.com
		<br>http://subdomain.siteurl.com
		<br>http://siteurl.com/subfolder
		<br>http://localhost
		</p>
		<br>
		<p class="p_size_2"><b>4. Once the processing is finished we have finished.</b></p>
		<br>
		<img class="img_size_1" src="<?php echo PHP_LoadAdminLink('img/img_4.png'); ?>"></img>
		<br>
		<br>
		<p class="p_size_2"><b>- admin panel information is.</b></p>
		<br>
		<p class="p_size_2">
		Default Information:
		<br>
		<p>You have to copy this information and you can not change the data during installation.</p>
		<br>E-mail: user@mail.com
		<br>Password: 123456
		</p>
		<br>
		<br>
		<p class="p_size_1">Installation issues</p>
		<br>
		<p class="p_size_2">if you get an installation error for example:</p>
		<p class="p_size_2">- Error 500 if you have this error it is because the database is not correctly<br> connected and you have to verify that the password, user or database is correct.</p>
		<p class="p_size_2">- Multiple redirect error.
		This error stops when the open_basedir / fopen function is not activated on your server and the .SQL file cannot be uploaded to your database.
		so you have to do the manual installation but first you have to remove the following line to not have this error</p>
		<br>
		<br>
		<img class="img_size_1" src="<?php echo PHP_LoadAdminLink('img/img_6.png'); ?>"></img>
		<br>
		
		<br>
		<p class="p_size_1">Link encryption</p>
		<br>
		<p class="p_size_2">This function is very important in the script, this function is for encryption of video download urls on your site.
		<br>It is to prevent theft of information and that other sites or people use it without your permission</p>
		<br>
		<p class="p_size_2">the steps to configure this function is very easy in the 2 steps
		<br>
		<b>this is the address:</b>
		</p>
		<br>
		<p class="code_p_1">https://site.com/admin/settings?p=key_link</p>
		<br>
		<p>Step 1. you have to insert a secret key of preference that is a word without spaces</p>
		<p>Step 2. in field 2 you have a password</p>
		<br>
		<p class="p_size_1">SSL</p>
		<br>
		<p class="p_size_2">If you cannot activate this function in your cPanel, you must do it manually, you have to use this code line in the config.php file as in the image and everything will work out</p>
		<br>
		<p class="code_p_1">$_SERVER["HTTPS"] = 'on';</p>
		<p class="p_size_2">you have to place this code under the <b>ob_start()</b> function</p>
		<br>
		<br>
		<img class="img_size_1" src="<?php echo PHP_LoadAdminLink('img/img_7.png'); ?>"></img>
		<br>
		<br>
		<p class="p_size_1">What's next?</p>
		<br>
		<p class="p_size_2">If you follow the steps above carefully, the script should be installed on your site, and you are ready to use it!
			However if your server is using Nginx, please follow the last step below:
		<br>
		<br>- Open your server's root nginx.conf file, most of the time It's located it in: /etc/nginx/nginx.conf
		<br>- Open the home directory of the script, you should be able to find this file (nginx.conf):</p>
		<br>
		<br>
		<img src="<?php echo PHP_LoadAdminLink('img/img_1.png'); ?>"></img>
		<br>
		<br>
		<p class="p_size_2">- Open the located file, and copy its content to your root nginx.conf file: /etc/nginx/nginx.conf
		<br>- If you find it something difficult to do, please contact your hosting provider, and they will do it for you easily.</p>
		<br>
		<!---->
		<!---->
		<!---->
		<!---->
		<!---->
		<!---->
		<!---->
		<!---->
		<!---->
		<!---->
		<!---->
		<!---->
		
	</div>
</div>
 