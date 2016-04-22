<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contactanos</title>
<link rel="stylesheet" type="text/css" media="screen" href="contactoboxcv.css" />

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
    // $from  = stripslashes($_POST['nombre'])." ".stripslashes($_POST['apellido'])."<".stripslashes($_POST['email']).">";
	$asunt = "CV enviado desde Boxonline.com.ar";
	
	// Capturar todos los campos
	$fname = $_POST['nombre'];
	$lname = $_POST['apellido'];
	$email = $_POST['email'];
	$telef = $_POST['telefono'];
	$domic = $_POST['domicilio'];
	$ciuda = $_POST['ciudad'];
	$cargo = $_POST['cargo'];

	// Setear el mensaje propiamente dicho
	$message	= 	"<html><body><table>" . 
					"<tr><td>Nombre:</td><td><b>" . $fname . "</b></td></tr>" .
					"<tr><td>Apellido:</td><td><b>" . $lname . "</b></td></tr>" .
					"<tr><td>E-mail:</td><td><b>" . $email . "</b></td></tr>" .
					"<tr><td>Tel&eacute;fono:</td><td><b>" . $telef . "</b></td></tr>" .
					"<tr><td>Domicilio:</td><td><b>" . $domic . "</b></td></tr>" .
					"<tr><td>Ciudad:</td><td><b>" . $ciuda . "</b></td></tr>" .
					"<tr><td>Cargo:</td><td><b>" . $cargo . "</b></td></tr>" .
					"</table></body></html>";
					
	//$message  = "\n\n Nombre: $fname $lname \n\n Email: $email \n\n Teléfono: $telef \n\n Domicilio: $domic \n\n Ciudad: $ciuda \n\n";

	// Generar string random para usarla como marca limite
	$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

	// Almacenar in info en una variable para acceso mas simple
	$tmp_name	= $_FILES['filename']['tmp_name'];
	$type		= $_FILES['filename']['type'];
	$file_name	= $_FILES['filename']['name'];
	$size		= $_FILES['filename']['size'];

	// Setear el mensaje propiamente dicho
	// $message = "\n\n Name: $lname \n\n Email: $email_address \n\nMessage: \n\n $message \n\nHere is your file: $file_name";

	// Chequear si el upload funcionó
	if (file_exists($tmp_name)){

		// Chequear que es verdaderamente el archivo cargado y no un archivo de sistema
		if(is_uploaded_file($tmp_name)){

			// Abrirlo como Read-Binary
			$file = fopen($tmp_name,'rb');

			// Leer el contenido en una variable
			$data = fread($file,filesize($tmp_name));

			// Cerrar el archivo
			fclose($file);

			// Codificarlo y partirlo en pedacitos
			$data = chunk_split(base64_encode($data));
		}

		// Armar el header del mensaje
		$headers = "From: ". $de ."\r\n" .
			"Bcc: ". $bc. "\r\n" .
			"MIME-Version: 1.0\r\n" .
			"Content-Type: multipart/mixed;\r\n" .
			" boundary=\"{$mime_boundary}\"";

		// Armar el cuerpo del mensaje e insertar dos barras delante del MIME
		$message = "This is a multi-part message in MIME format.\n\n" .
			"--{$mime_boundary}\n" .
			"Content-Type: text/html; charset=\"iso-8859-1\"\n" .
			"Content-Transfer-Encoding: 7bit\n\n" .
			$message . "\n\n";

		// Insertar limites del contenido MIME
		$message .= "--{$mime_boundary}\n" .
			"Content-Type: {$type};\n" .
			" name=\"{$file_name}\"\n" .
			//"Content-Disposition: attachment;\n" .
			//" filename=\"{$fileatt_name}\"\n" .
			"Content-Transfer-Encoding: base64\n\n" .
			$data . "\n\n" .
			"--{$mime_boundary}--\n";

		// Eso es todo, enviar nomas...
		if (@mail($to, $asunt, $message, $headers)) {
			$error = "Tu mensaje se envió correctamente";
		} else {
			$error = "Se produjo un error al enviar el mensaje!";
		}
	}
	
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="myForm" method="post" enctype="multipart/form-data">
	<table border="0" width="571" cellspacing="0" cellpadding="0">
		<tr>
			<td width="571" height="115" colspan="2" valign="top" align="left" background="images/encacv.jpg" 
				style="background-repeat:no-repeat;background-position:top left;">&nbsp;
			</td>
		</tr>
		<tr>
			<td valign="bottom" colspan="2" style="font:11px Georgia, 'Times New Roman', Times, serif; text-align:justify; padding:10px 25px 10px 25px;" >
				Si te interesa la propuesta de unirte a un equipo de trabajo donde se estimula tu desarrollo integral, promoviendo tu autonomía y proactividad en un espacio de mutuo entendimiento, podés considerar que BOX es para vos.
			</td>
		</tr>
		<tr>
			<td height="25" valign="bottom">
				<label class="required" for="nombre" style="padding:10px 0 0 35px;">* Nombre</label>
			</td>
			<td  valign="bottom">
				<label class="required" for="apellido" style="padding:10px 0 0 35px;">* Apellido</label>
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
				<label class="required" for="telefono" style="padding:10px 0 0 35px;">* Teléfono</label><br>
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
				<label class="required" for="ciudad" style="padding:10px 0 0 35px;">* Ciudad</label>
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
			<td height="25" valign="bottom">
				<label for="adjunto" style="padding:10px 0 0 35px;">Adjuntar CV</label>
			</td>
			<td valign="bottom">
				<label class="required" for="cargo" style="padding:10px 0 0 35px;">Cargo</label>
			</td>
		</tr>
        <tr>
			<td height="32" align="left">
				<input type="file" name="filename" id="adjunto" style="margin:0 0 0 35px;" />
        	</td>
			<td align="right">
				<select name="cargo" id="cargo" style="margin:0 35px 0 0;" >
					<option value="Seleccionar cargo">Seleccionar cargo</option>
					<option value="Vendedora de salon/Telefonista">Vendedora de salón/Telefonista</option>
					<option value="Gerente">Gerente</option>
					<option value="Ayudante de Cocina">Ayudante de Cocina</option>
					<option value="Sandwichero">Sandwichero</option>
					<option value="Pizzero">Pizzero</option>
					<option value="Cocinero">Cocinero</option>
					<option value="Carnicero">Carnicero</option>
					<option value="Chef Ejecutivo">Chef Ejecutivo</option>
					<option value="Panadero">Panadero</option>
					<option value="Mantenimiento">Mantenimiento</option>
				</select>
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