<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contactanos</title>
<link rel="stylesheet" type="text/css" media="screen" href="contactobox.css" />

<script>

window.onload = function() {
	document.getElementById("myForm").onsubmit = function() {
		var fields = this.getElementsByClassName("ab");
        var sendForm = true;
        var labels = this.getElementsByClassName("required");

		for (var i = 0; i < fields.length; i++) {
			if (!fields[i].value) {
				labels[i].style.color = "#ff0000";
				sendForm = false;
			}
			else {
				labels[i].style.color = "#727272";      
			}
		}
		if (!sendForm) {
			labels[0].focus();
			return false;
		}
    }
}

</script>
</head>

<body>
<?php
$error = "&nbsp;";

if ($_SERVER['REQUEST_METHOD']=="POST"){

	// Setear direccion de correo "To"
    $to = "social@boxonline.com.ar";
    $de = "social@boxonline.com.ar";
    $bc = "info@grupobangher.com";	

    // Capturar el nombre y email para usarlos mas adelante
    // $from = stripslashes($_POST['nombre'])." ".stripslashes($_POST['apellido'])." <".stripslashes($_POST['email']).">";
	
	// Capturar todos los campos
	$fname = $_POST['nombre'];
	$lname = $_POST['apellido'];
	$email = $_POST['email'];
	$telef = $_POST['telefono'];
	$domic = $_POST['domicilio'];
	$ciuda = $_POST['ciudad'];
	$asunt = $_POST['asunto'];
	$comen = $_POST['comentario'];

	// Setear el mensaje propiamente dicho
	$message	= 	"<html><body><table>" . 
					"<tr><td>Nombre:</td><td><b>" . $fname . "</b></td></tr>" .
					"<tr><td>Apellido:</td><td><b>" . $lname . "</b></td></tr>" .
					"<tr><td>E-mail:</td><td><b>" . $email . "</b></td></tr>" .
					"<tr><td>Tel&eacute;fono:</td><td><b>" . $telef . "</b></td></tr>" .
					"<tr><td>Domicilio:</td><td><b>" . $domic . "</b></td></tr>" .
					"<tr><td>Ciudad:</td><td><b>" . $ciuda . "</b></td></tr>" .
					"<tr><td>Comentarios:</td><td><b>" . $comen . "</b></td></tr>" .
					"</table></body></html>";

	$cabec  = "Date: ".date("l j F Y, G:i")."\n";
	$cabec .= "MIME-Version: 1.0\n";
	$cabec .= "From: " .$de. "\r\n";
	$cabec .= "Bcc: " .$bc. "\r\n";
	$cabec .= "X-Mailer: PHP/". phpversion()."\n";
	$cabec .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
  
	// Eso es todo, enviar nomas...
	if (@mail($to, $asunt, $message, $cabec)) {
		$error = "Tu mensaje se envió correctamente";
	} else {
		$error = "Se produjo un error al enviar el mensaje!";
	}
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="myForm" method="post" enctype="multipart/form-data">
	<table border="0" cellpadding="0" cellspacing="0" width="539">
		<tr>
			<td width="539" height="115" colspan="2" valign="top" align="left" background="images/enca.jpg" 
				style="background-repeat:no-repeat;background-position:top left;">&nbsp;
			</td>
		</tr>
		<tr>
			<td height="25" valign="bottom">
				<label class="required" for="nombre" style="padding:10px 0 0 35px;">* Nombre</label>
			</td>
			<td  valign="bottom">
				<label class="required" for="apellido" style="padding:10px 0 0 25px;">* Apellido</label>
			</td>
		</tr>
		<tr>
			<td height="32" align="left">
				<input class="ab" type="text" name="nombre" id="nombre" style="margin:0 0 0 35px;"/>
			</td>
			<td align="right">
				<input class="ab" type="text" name="apellido" id="apellido" style="margin:0 35px 0 0;"/>
        	</td>
		</tr>
        <tr>
			<td height="25" valign="bottom">
				<label class="required" for="email" style="padding:10px 0 0 35px;">* E-mail</label><br>
			</td>
			<td valign="bottom">
				<label class="required" for="telefono" style="padding:10px 0 0 25px;">* Teléfono</label><br>
			</td>
		<tr>
			<td height="32" align="left">
				<input class="ab" type="text" name="email" id="email" style="margin:0 0 0 35px;"/>
        	</td>
			<td align="right">
				<input class="ab" type="text" name="telefono" id="telefono" style="margin:0 35px 0 0;"/>
			</td>
		</tr>
		<tr>
			<td height="25" valign="bottom">
				<label class="required" for="domicilio" style="padding:10px 0 0 35px;">* Domicilio</label>
			</td>
			<td valign="bottom">
				<label class="required" for="ciudad" style="padding:10px 0 0 25px;">* Ciudad</label>
			</td>
		</tr>
        <tr>
			<td height="32" align="left">
				<input class="ab" type="text" name="domicilio" id="domicilio" style="margin:0 0 0 35px;" />
        	</td>
			<td align="right">
				<input class="ab" type="text" name="ciudad" id="ciudad" style="margin:0 35px 0 0;" />
			</td>
		</tr>
		<tr>
			<td height="25" valign="bottom" colspan="2">
				<label class="required" for="asunto" style="padding:10px 0 0 35px;">* Asunto</label>
			</td>
		</tr>
        <tr>
			<td height="32" align="left" colspan="2">
				<input class="ab" type="text" name="asunto" id="asunto" style="margin:0 0 0 35px; width:459px !important;" />
        	</td>
		</tr>
		<tr>
			<td height="25" valign="bottom" colspan="2">
				<label class="required" for="comentario" style="padding:10px 0 0 35px;">* Comentarios</label>
			</td>
		</tr>
        <tr>
			<td colspan=2>
				<textarea class="ab" name="comentario" id="comentario"></textarea>
        	</td>
		</tr>
		
        <tr>
			<td>
					<br/>
					<label style="padding:35px">* Realice su pedido por teléfono</label>
					<br/>
					<label style="padding:35px">* Los precios están publicados en la web</label>
			</td>
		</tr>		
		
		<tr>
			<td>
				<button id="replacement-2" type="submit" value="go"></button>
			</td>
			<td align="right" style="padding:20px 40px 0 0;">
				<label>* Campos obligatorios</label>
			</td>
		</tr>
		<tr><td height="20" colspan=2><label class="errormsj" id="errortexto"><center><b><?php echo $error; ?></b></center></label></td></tr>
	
</form>

</body>
</html>