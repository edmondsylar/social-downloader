        <meta charset="UTF-8">
        <title>SharePlus | Installation</title>
		<link rel="shortcut icon" type="image/jpg" href="../admin-panel/images/favicon.jpg"/>
		<link rel="stylesheet" href="../admin-panel/css/style_i.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../admin-panel/assets/js/script_js.js"></script>
 
	<header class="header_index">
		<!--img class="img_logo" src="./assets/img/logo.png"></img-->
	</header>
 
 
<?php
 
	@$plugin_action = $_GET['action'];
	
				$version = 'Version:1.1.4.0';
				$cURL = true;
				$php = true;
				$gd = true;
				$disabled = false;
				$mysqli = true;
				$is_writable = true;
				$mbstring = true;
				$is_htaccess = true;
				$is_mod_rewrite = true;
				$is_sql = true;
				$zip = true;
				$allow_url_fopen = true;
				$exif_read_data = true;
				if (!function_exists('curl_init')) {
				$cURL = false;
				$disabled = true;
				}
				if (!function_exists('mysqli_connect')) {
				$mysqli = false;
				$disabled = true;
				}
				if (!extension_loaded('mbstring')) {
				$mbstring = false;
				$disabled = true;
				}
				if (!extension_loaded('gd') && !function_exists('gd_info')) {
				$gd = false;
				$disabled = true;
				}
				if (!version_compare(PHP_VERSION, '5.5.0', '>=')) {
				$php = false;
				$disabled = true;
				}
				if (!is_writable('../config.php')) {
				$is_writable = false;
				$disabled = true;
				}
				if (!file_exists('../.htaccess')) {
				$is_htaccess = false;
				$disabled = true;
				}
				if (!file_exists('../SharePlus.sql')) {
				$is_sql = false;
				$disabled = true;
				}
				if (!extension_loaded('zip')) {
				$zip = false;
				$disabled = true;
				}
				if(!ini_get('allow_url_fopen') ) {
				$allow_url_fopen = false;
				$disabled = true;
				}
	
	switch ($plugin_action) {
 
				case 'admin_save':
					
?>
	<center>
		<p class="wall_info_p">the information is being processed</p>
	</center>
<?php						
					break;
				case 'admin':
					//require ("../admin-panel/ConectarDtata.php");
?>						
	<div class="wall_index">
		<div class="wall_index_div">
			<div class="div_top_install">
				<img class="img_zhareiv" src="https://i.imgur.com/W0ImMt2.png"></img>
				<p class="div_top_install_p"><span class="text_copi">creator of</span> Shareplus+ <span class="div_top_install_span"><?php echo $version; ?></span></p>
			</div>	
			<div class="cen_db">
				<p class="wall_info_p">Administration</p>
				<form enctype="multipart/form-data" method="post" action="?action=admin_save" charset="UTF-8" >
				<p class="text_p">Default E-mail</p>
				<input class="input__text_search_home" Value="user@mail.com" type="text" name="email" id="email" placeholder="E-mail">
				<p class="text_p">Default Password</p>
				<input class="input__text_search_home" Value="123456" type="text" name="password" id="password" placeholder="Password">	 				
				</div>
				<a href="../admin/" class="btn_a">Finish installation</a>
				</form> 
			<br>
		</div>  		
	</div> 
			
<?php						 
					break;
	case 'upload':
		if (empty($_POST['host']) || empty($_POST['name']) || empty($_POST['username']) || empty($_POST['web']) || empty($_POST['password'])) {
?>			
	<meta http-equiv="Refresh" content="15;url=?action=installation">
	<center>
		<p class="wall_info_p">Installation error wait 15 seconds to try again</p>
	</center>		
<?php			
		}else{
				
				
				
	$config_file_name 	= '../config.php';
	$host 				= $_POST['host'];
	$name 				= $_POST['name'];
	$username 			= $_POST['username'];
	$password 			= $_POST['password'];
	$web 				= $_POST['web'];
	$text 				= '<?php

// +------------------------------------------------------------------------+
// | @author_email: game123727@gmail.com   
// +------------------------------------------------------------------------+
// | shareplus - The Ultimate PHP Social Networking Platform
// | Copyright (c) 2018 shareplus. All rights reserved.
// +------------------------------------------------------------------------+
/*
Any doubt or failure in the system takes a capture and sends the creator in support
*/

//header("Location:install");

ob_start();
#----> Host name
$dbhost			= \''.$host.'\';
#----> Batabase name
$dbdatabase		= \''.$name.'\'; 
#----> User of the DB
$dbuser			= \''.$username.'\';
#----> Password of the DB
$dbpassword		= \''.$password.'\'; 

// URL web
$site_url = \''.$web.'\';

?>';
				
	$fp = fopen('../config.php', 'w');
	fwrite($fp, $text);
	fclose($fp);
 
	
	$con = @mysqli_connect($host, $username, $password);
	// Check connection

	// ...some PHP code for database "my_db"...

	// check the connection
	if (!$con){
			die(include ("./admin/error_db.php"));
		exit;
	}

	/* User datos */
	// Change database to "test"
	$bdselect = mysqli_select_db($con, $name);

	if (!$bdselect) { 
	// this function is to know if the system is installed
		if (!file_exists('./admin/install.php')) {
			die("ERROR TO BE CONNECTED WITH THE SERVER");
		}else{
			die(include ("./admin/install.php"));
		}
		exit;
	}
	
	
	
	// Name of the file
       $filename = '../SharePlus.sql';
        // Temporary variable, used to store current query
        $templine = '';
        // Read in entire file
        $lines = file($filename);
        // Loop through each line
        foreach ($lines as $line) {
           // Skip it if it's a comment
           if (substr($line, 0, 2) == '--' || $line == '')
              continue;
           // Add this line to the current segment
           $templine .= $line;
           $query = false;
           // If it has a semicolon at the end, it's the end of the query
           if (substr(trim($line), -1, 1) == ';') {
              // Perform the query
              $query = mysqli_query($con, $templine);
              // Reset temp variable to empty
              $templine = ''; 
           }
        }

?>
	<meta http-equiv="Refresh" content="30;url=?action=admin">
	<center>
		<p class="wall_info_p">the information is being processed</p>
	</center>
<?php	
	}
	break;					
	case 'installation':
?>
	<div class="wall_index">
		<div class="wall_index_div">
			<div class="div_top_install">
				<img class="img_zhareiv" src="https://i.imgur.com/W0ImMt2.png"></img>
				<p class="div_top_install_p"><span class="text_copi">creator of</span> Shareplus+ <span class="div_top_install_span"><?php echo $version; ?></span></p>
			</div>	
			<div class="cen_db">
				<p class="wall_info_p">Installation</p>
				<form enctype="multipart/form-data" method="post" action="?action=upload" charset="UTF-8" >
					<p class="text_p">BD host name</p>
					<input class="input__text_search_home" type="text" name="host" id="host" placeholder="host">
					<p class="text_p">BD username</p>
					<input class="input__text_search_home" type="text" name="username" id="username" placeholder="username">
					<p class="text_p">BD password</p>
					<input class="input__text_search_home" type="text" name="password" id="password" placeholder="password">
					<p class="text_p">BD database name</p>
					<input class="input__text_search_home" type="text" name="name" id="name" placeholder="name">
					<p class="text_p">Site url</p>
					<input class="input__text_search_home" type="text" name="web" id="web" placeholder="Http:// od Https://siteurl.com">
					<br>
					<input class="btn_a" type="submit" Value="Save data"></input>
				</form>	 				
			</div>
			<br>
		</div>  		
	</div>  
									
<?php						
					break;
				
?>
<?php			
				case 'info':
?>
	<div class="wall_index">
		<div class="wall_index_div">
			<div class="div_top_install">
				<img class="img_zhareiv" src="https://i.imgur.com/W0ImMt2.png"></img>
				<p class="div_top_install_p"><span class="text_copi">creator of</span> Shareplus+ <span class="div_top_install_span"><?php echo $version; ?></span></p>
			</div>	
			<div class="div_meve_sroll">
				<table class="table">
				<tbody>
				  <tr>
					<td><b>tips</b></td>
					
					<td>server that uses this script is hostinger</td>
					<td><a target="_blank" href="https://www.hostg.xyz/SHi5"><font color="green" class="font_data"><i class="fa fa-check fa-fw"></i> click here</font></a></td>
				  </tr>
				  <tr>
					<td>PHP 5.5+</td>
					<td>Required PHP version 5.5 or more</td>
					<td><?php echo ($php == true) ? '<font color="green"><i class="fa fa-check fa-fw"></i> Installed</font>' : '<font color="red"><i class="fa fa-times fa-fw"></i> Not installed</font>'?></td>
				  </tr>
				  <tr>
					<td>cURL</td>
					<td>Required cURL PHP extension</td>
					<td><?php echo ($cURL == true) ? '<font color="green"><i class="fa fa-check fa-fw"></i> Installed</font>' : '<font color="red"><i class="fa fa-times fa-fw"></i> Not installed</font>'?></td>
				  </tr>
				  <tr>
					<td>MySQLi</td>
					<td>Required MySQLi PHP extension</td>
					<td><?php echo ($mysqli == true) ? '<font color="green"><i class="fa fa-check fa-fw"></i> Installed</font>' : '<font color="red"><i class="fa fa-times fa-fw"></i> Not installed</font>'?></td>
				  </tr>
				  <tr>
					<td>GD Library</td>
					<td>Required GD Library for image cropping</td>
					<td><?php echo ($gd == true) ? '<font color="green"><i class="fa fa-check fa-fw"></i> Installed</font>' : '<font color="red"><i class="fa fa-times fa-fw"></i> Not installed</font>'?></td>
				  </tr>
				  <tr>
					<td>Mbstring</td>
					<td>Required Mbstring extension for UTF-8 Strings</td>
					<td><?php echo ($mbstring == true) ? '<font color="green"><i class="fa fa-check fa-fw"></i> Installed</font>' : '<font color="red"><i class="fa fa-times fa-fw"></i> Not installed</font>'?></td>
				  </tr>
				  <tr>
					<td>ZIP</td>
					<td>Required ZIP extension for backuping data</td>
					<td><?php echo ($zip == true) ? '<font color="green"><i class="fa fa-check fa-fw"></i> Installed</font>' : '<font color="red"><i class="fa fa-times fa-fw"></i> Not installed</font>'?></td>
				  </tr>
				  <tr>
					<td>allow_url_fopen</td>
					<td>Required allow_url_fopen</td>
					<td><?php echo ($allow_url_fopen == true) ? '<font color="green"><i class="fa fa-check fa-fw"></i> Enabled</font>' : '<font color="red"><i class="fa fa-times fa-fw"></i> Disabled</font>'?></td>
				  </tr>
				  <tr>
					<td>.htaccess</td>
					<td>Required .htaccess file for script security </td>
					<td><?php echo ($is_htaccess == true) ? '<font color="green"><i class="fa fa-check fa-fw"></i> Uploaded</font>' : '<font color="red"><i class="fa fa-times fa-fw"></i> Not uploaded</font>'?></td>
				  </tr>
				  <tr>
					<td>SharePlus.sql</td>
					<td>Required SharePlus.sql for the installation  </td>
					<td><?php echo ($is_sql == true) ? '<font color="green"><i class="fa fa-check fa-fw"></i> Uploaded</font>' : '<font color="red"><i class="fa fa-times fa-fw"></i> Not uploaded</font>'?></td>
				  </tr>
				  <tr>
					<td>config.php</td>
					<td>Required config.php to be writable for the installation</td>
					<td><?php echo ($is_writable == true) ? '<font color="green"><i class="fa fa-check fa-fw"></i> Writable</font>' : '<font color="red"><i class="fa fa-times fa-fw"></i> Not writable</font>'?></td>
				  </tr>
				</tbody>
			  </table>
		  </div>
		  <a class="btn_a" href="?action=installation">start installation</a>
	 
		</div>  
	</div> 
<?php				
					break;
				default:
?>				
	<div class="wall_index">
		<div class="wall_index_div">
			<div class="div_top_install">
				<img class="img_zhareiv" src="https://i.imgur.com/W0ImMt2.png"></img>
				<p class="div_top_install_p"><span class="text_copi">creator of</span> Shareplus+ <span class="div_top_install_span"><?php echo $version; ?></span></p>
			</div>	
			<div class="div_meve_sroll">
				<h5>LICENSE AGREEMENT: one (1) Domain (site) Install</h5>
				<br>
				<b>Terms and Conditions:</b>
				<br>
				<br>
				<b>English</b>
				<br>
				Terms and conditions of shareplus are the following:<br>
				- If the buyer wants to change or modify the design or elements either a function and / or image can do it; But if you want the developer to do so, the fee will be $ 20, with the agreement to provide the developer with a previous list of the changes you have made and based only on it. If modifications are required in the future, it will be necessary to contract the service again
				<br>
				<br>
				- All items can be returned within 14 calendar days of purchase.
				To return an item, please contact Customer Service via email, chat or wathsapp and follow the instructions provided. Please note that we may not cover 100% reimbursement for company policies. For more information, please review our Return Policy.
				<br>
				<br>
				- To request a refund, you will be asked for the following information, which you can send by Email, Chat or via wathsapp:
				Order number with which you bought your product. (It is in the option MY ACCOUNT). Description of the item and / or order. Reason why the refund is requested. Payment method with which the purchase was acquired since it will be by this same means that the refund will be applied, in case of bank deposit the client must provide an Interbank Clabe and a photocopy of the account statement, in order to apply the same
				<br>
				<br>
				- Any distribution, publication or commercial or promotional exploitation of the Website, or of any of the contents, codes, data or materials on the Website, is strictly prohibited, unless you have received the prior express written permission of the staff authorized by SHAREPLUS or any other applicable rights holder. Unless as expressly permitted in this contract, you may not download, inform, expose, publish, copy, reproduce, distribute, transmit, modify, execute, disseminate, transfer, create derivative works from, sell or otherwise. exploit any of the contents, codes, data or materials on or available through the Website. You further agree not to alter, edit, delete, remove, or otherwise change the meaning or appearance of, or change the purpose of, any of the content, codes, data or materials in or available through the Website , including, without limitation, the alteration or withdrawal of any trademark, registered trademark, logo, service mark or any other proprietary content or notification of property rights. You acknowledge that you do not acquire any ownership rights by downloading any copyrighted material from or through the Website. If you make other use of the Website, or of the contents, codes, data or materials that are there or that are available through the Website, unless it has been stipulated above, you may violate the rights laws of author and other laws of the United Mexican States ("Mexico") and other countries, as well as applicable state laws, and may be subject to legal liability for such unauthorized use.
				<br>
				<br>
				- These terms and conditions apply if in a case a third party installs the code at the request of the operator so be the developer of this product
				<br>
				<br>
				- You are obliged to indemnify and to bring out Expansion, directors, officers, employees, Expansion agents and their subsidiaries in peace and safe, of any demand, responsibility, costs and expenses, of any nature, including attorneys' fees, that incurred as a result of the use of the Website, its placement or transmission of any message, content, information, software or other materials through the Website, or its breach or violation of the law or these Terms and Conditions. Expansión reserves the right, at its own expense, to assume the exclusive defense and control of any matter otherwise subject to compensation by you, and in that case, you agree to cooperate with Expansión in the defense of said claim.
				<br>
				<br>
				If you do not agree with these terms and conditions, you cannot access the website in any other way.
				<br>
				<br>
				<b>The above terms and conditions were originally written in Spanish, and therefore we are not responsible for any errors that arise when translating into a language other than this.</b>
				<br>
				<br>
				--------------------------------------------------------------------------------------------
				<br>
				<br>
				<b>Español</b>
				<br>
				Términos y condiciones de shareplus son las siguientes:<br>
				- Si el comprador quiere cambiar o modificar el diseño o elementos ya sea una función y/o imagen lo puede hacer; pero si quiere que el desarrollador lo haga la tarifa será de $20 dólares americanos, con el acuerdo de proporcionar al desarrollador una lista previa de los cambios ha hacer y basándose sólo en ella. Si en el futuro se requiere hacer modificaciones será necesario contratar el servício nuevamente 
				<br>
				<br>
				- Todos los artículos pueden ser devueltos dentro de 14 días naturales  siguientes a la compra.
				<br>
				Para devolver un artículo, por favor ponte en contacto con Servicio al Cliente por medio de correo electronico, chat o wathsapp y sigue las indicaciones que se te proporcionaran. Por favor ten en cuenta que  puede que no cubramos el reembolso al 100% por políticas de la empresa. Para más información, por favor revisa nuestra Política de devolución. 
				<br>
				<br>
				- Para solicitar un reembolso, se te pedirá la siguiente información, la cual puedes hacer llegar por Correo Electrónico, Chat o via wathsapp:
				<br>
				Número de pedido con el que compraste tu producto. (Se encuentra en la opción MI CUENTA). Descripción del artículo y/o pedido. Motivo por el cual se solicita el reembolso. Forma de pago con la que se adquirió la compra ya que será por este mismo medio que se aplicará el reembolso, en caso de depósito bancario el cliente deberá proporcionar una Clabe Interbancaria y una fotocopia del estado de cuenta, para poder aplicar el mismo 
				<br>
				<br>
				- Cualquier distribución, publicación o explotación comercial o promocional del Sitio Web, o de cualquiera de los contenidos, códigos, datos o materiales en el Sitio Web, está estrictamente prohibida, a menos de que usted haya recibido el previo permiso expreso por escrito del personal autorizado de SHAREPLUS o de algún otro poseedor de derechos aplicable. A no ser como está expresamente permitido en el presente contrato, usted no puede descargar, informar, exponer, publicar, copiar, reproducir, distribuir, transmitir, modificar, ejecutar, difundir, transferir, crear trabajos derivados de, vender o de cualquier otra manera explotar cualquiera de los contenidos, códigos, datos o materiales en o disponibles a través del Sitio Web. Usted se obliga además a no alterar, editar, borrar, quitar, o de otra manera cambiar el significado o la apariencia de, o cambiar el propósito de, cualquiera de los contenidos, códigos, datos o materiales en o disponibles a través del Sitio Web, incluyendo, sin limitación, la alteración o retiro de cualquier marca comercial, marca registrada, logo, marca de servicios o cualquier otro contenido de propiedad o notificación de derechos de propiedad. Usted reconoce que no adquiere ningún derecho de propiedad al descargar algún material con derechos de autor de o a través del Sitio Web. Si usted hace otro uso del Sitio Web, o de los contenidos, códigos, datos o materiales que ahí se encuentren o que estén disponibles a través del Sitio Web, a no ser como se ha estipulado anteriormente, usted puede violar las leyes de derechos de autor y otras leyes de los Estados Unidos Mexicanos ("México") y de otros países, así como las leyes estatales aplicables, y puede ser sujeto a responsabilidad legal por dicho uso no autorizado.
				<br>
				<br>
				- estos terminos y condicines aplican si en un caso un tercero instala el codigo bajo peticion del oomprador asi sea el desarrollador mismo de este producto 
				<br>
				<br>
				- Usted se obliga a indemnizar y a sacar en paz y a salvo a Expansión, a los directores, funcionarios, empleados, agentes de Expansión y sus sociedades filiales, de cualquier demanda, responsabilidad, costos y gastos, de cualquier naturaleza, incluyendo honorarios de abogados, en que incurriera como resultado del uso del Sitio Web, su colocación o transmisión de cualquier mensaje, contenido, información, software u otros materiales a través del Sitio Web, o su incumplimiento o violación de la ley o de estos Términos y Condiciones. Expansión se reserva el derecho, a su propio costo, de asumir la defensa y control exclusivos de cualquier asunto de otra manera sujeto a indemnización por parte suya, y en dicho caso, usted se obliga a cooperar con Expansión en la defensa de dicha demanda.
				<br>
				<br>
				Si Ud. no esta deacuerdo con estos terminos y condiciones, no puede tener acceso al sitio web  de ninguna otra manera.
				<br>
				<br>
				<b>los anteriores terminos y condiciones fueron escritos originalmente en español, y por lo tanto no nos hacemos resposables por los errores que surjan al traducirlo a algun idioma diferente a este.</b>
				<br>
				<!---->
				<br>
				<br>
				<!---->
				<b>You CAN:</b><br> 1) Use on one (1) domain only, additional license purchase required for each additional domain.<br> 2) Modify or edit as you see fit.<br> 3) Delete sections as you see fit.
				<br> 4) Translate to your choice of language.
				<br>5) Managing plugins you can modify, change as you like, but if you want to create a new plugin you have to contact the creator of the system to get a unique KEY to avoid errors in the system.<br>
				<!---->
				<br><b>You CANNOT:</b> <br>1) Resell, distribute, give away or trade by any means to any third party or individual without permission.<br> 2) Use on more than one (1) domain.
				<br>3) In case you have sold a copy or shared you will be charged $20 US dollars for each copy.
				<br><br>Unlimited Licenses are available.				
			</div>
			<br>
			<input type="checkbox" id="agree" name="agree"> I agree to the terms of use and privacy policy
			<form action="?action=info" method="post">
			<button type="submit" class="btn_a" id="next-terms" disabled>
				<i class="fa fa-arrow-right progress-icon" data-icon="paper-plane-o"></i> Next
			</button>
			</form>
		</div>  
	</div>  
			
<?php					
					break;
			}	
?> 
<style>
    button:disabled {
		color: #fff !important;
		background: #d8d8d8;
		border: 1px solid #949494;
    }
</style>
<script>
function SubmitButton() {
    $('button').attr('disabled', true);
    $('button').text('Please wait..');
    $('form').submit();
}
    $(function() {
        $('#agree').change(function() {
            if($(this).is(":checked")) {
                $('#next-terms').attr('disabled', false);
            } else {
            	$('#next-terms').attr('disabled', true);
            }       
        });
    });
</script>