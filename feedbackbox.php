<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contactanos</title>

<link rel="stylesheet" type="text/css" media="screen" href="feedbackbox.css" />

<script type="text/javascript" src="Jquery-simple-rating-system-with-small-stars_files/jquery.js"></script>
<link href="Jquery-simple-rating-system-with-small-stars_files/rating_simple.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="Jquery-simple-rating-system-with-small-stars_files/rating_simple.js"></script>

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
    //$to = "rodygaleano@gmail.com";
    //$de = "social@boxonline.com.ar";
    //$bc = "rody_galeano@yahoo.com.ar";	

    // Capturar el nombre y email para usarlos mas adelante
    // $from = stripslashes($_POST['nombre'])." ".stripslashes($_POST['apellido'])." <".stripslashes($_POST['email']).">";
	
	// Capturar todos los campos
	$fname = $_POST['nombre'];
	$email = $_POST['email'];
	$attel = $_POST['attelefonica'];
	$atloc = $_POST['atlocal'];
	$rapid = $_POST['rapidez'];
	$calid = $_POST['calidad'];
	$gusta = $_POST['gustaria'];
	$nuevo = $_POST['nuevos'];
	$comen = $_POST['comentario'];
	$asunt = "Feedback enviado desde Boxonline.com.ar";

	// Setear el mensaje propiamente dicho
	$message	= 	"<html><body><table>" . 
					"<tr><td>Nombre:</td><td><b>" . $fname . "</b></td></tr>" .
					"<tr><td>E-mail:</td><td><b>" . $email . "</b></td></tr>" .
					"<tr><td colspan=2>Calificaciones:</td></tr>" .
					"<tr><td>Atenci&oacute;n telef&oacute;nica:</td><td><b>" . $attel . "</b></td></tr>" .
					"<tr><td>Atenci&oacute;n en el local:</td><td><b>" . $atloc . "</b></td></tr>" .
					"<tr><td>Rapidez de la entrega:</td><td><b>" . $rapid . "</b></td></tr>" .
					"<tr><td>Calidad del producto:</td><td><b>" . $calid . "</b></td></tr>" .
					"<tr><td>Me gustar&iacute;an nuevos productos:</td><td><b>" . $nuevo . "</b></td></tr>" .
					"<tr><td colspan=2>Me gustar&iacute;a " . $gusta . ":</td></tr>" .
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
	<table border="0" cellpadding="0" cellspacing="0" width="571">
		<tr>
			<td width="571" height="115" colspan="4" valign="top" align="left" background="images/encafeed.jpg" 
				style="background-repeat:no-repeat;background-position:top left;">&nbsp;
			</td>
		</tr>
		<tr>
			<td height="40" valign="middle" colspan="2" width="285">
				<label style="padding:10px 0 0 35px;"><b>CALIFICACION</b></label>
			</td>
			<td  valign="middle"  width="286" colspan="2">
				<label style="padding:10px 0 0 25px;"><b>SUGERENCIA</b></label>
			</td>
		</tr>
		
		<tr>
			<td height="25" valign="middle">
				<label style="padding:10px 0 0 35px;">Atención telefónica: </label>
			</td>
			<td valign="middle">
				<input name="attelefonica" value="3" id="attelefonica" type="hidden">
			</td>
			<td  valign="middle" colspan="2">
				<label style="padding:10px 0 0 25px;">Me gustaría: </label>
			</td>
		</tr>
		<tr>
			<td height="25" valign="middle">
				<label style="padding:10px 0 0 35px;">Atención en el local: </label>
			</td>
			<td valign="middle">
				<input name="atlocal" value="3" id="atlocal" type="hidden" style="margin:0 35px 0 0;">
			</td>
			<td  align="right" valign="middle" width="40">
				<input checked type="radio" name="gustaria" id="r1" value="hacer una sugerencia"/>
			</td>
			<td valign="middle">
				<label for="r1" >Hacer una sugerencia</label>			
			</td>
		</tr>
		<tr>
			<td height="25" valign="middle">
				<label style="padding:10px 0 0 35px;">Rapidez en la entrega: </label>
			</td>
			<td  valign="middle">
				<input name="rapidez" value="3" id="rapidez" type="hidden" style="margin:0 35px 0 0;">
			</td>
			<td align="right" valign="middle">
				<input type="radio" name="gustaria" id="r2" value="hacer un comentario sobre los productos"/>
			</td>
			<td><label for="r2" >Hacer comentario sobre los productos</label></td>
		</tr>
		<tr>
			<td height="25" valign="middle">
				<label style="padding:10px 0 0 35px;">Calidad del producto: </label>
			</td>
			<td  valign="middle">
				<input name="calidad" value="3" id="calidad" type="hidden" style="margin:0 35px 0 0;">
			</td>
			<td  valign="middle" colspan="2">
				<label class="required" for="comentario" style="padding:10px 0 0 25px;">* Por favor, ingresá tu comentario: </label>
			</td>
		</tr>
		
		<tr>
			<td colspan="2">
				<table border="0" cellpadding="0" cellspacing="0" width="280" style="padding:10px 0 0 35px;">
					<tr>
						<td colspan="6">
							<label>Te gustarían nuevos productos?</label>
						</td>
					</tr>
					<tr>
						<td valign="middle"><input checked type="radio" name="nuevos" id="q1" value="Si"/></td>
						<td><label for="q1" >Sí</label></td>
						<td valign="middle"><input type="radio" name="nuevos" id="q2" value="No"/></td>
						<td><label for="q2" >No</label></td>
						<td valign="middle"><input type="radio" name="nuevos" id="q3" value="No me interesa"/></td>
						<td><label for="q3" >No me interesa</label></td>
					</tr>
				</table>
			</td>
			<td colspan=2>
				<textarea class="ab" name="comentario" id="comentario"></textarea>
        	</td>
		</tr>
		
		<tr>
			<td height="25" valign="bottom" colspan="2">
				<label class="required" for="nombre" style="padding:10px 0 0 35px;">* Nombre</label><br>
			</td>
			<td valign="bottom" colspan="2">
				<label class="required" for="email" style="padding:10px 0 0 25px;">* E-mail</label><br>
			</td>
		</tr>
		
		<tr>
			<td height="32" align="left" colspan="2">
				<input class="ab" type="text" name="nombre" id="nombre" style="width:225px; margin:10px 0 0 35px;"/>
        	</td>
			<td colspan="2">
				<input class="ab" type="text" name="email" id="email" style="width:215px; margin:10px 0 0 25px;"/>
			</td>
		</tr>
		
        <tr>
			<td colspan="4">
				<center>
				<button id="replacement-2" type="submit" value="go"></button>
				</center>
			</td>
		</tr>
		<tr><td height="20" colspan="4"><label class="errormsj" id="errortexto"><center><b><?php echo $error; ?></b></center></label></td></tr>
	
</form>
<script language="javascript" type="text/javascript">
$(function() {
	$("#attelefonica").webwidget_rating_simple({
		rating_star_length: '5',
		rating_initial_value: '3',
		rating_function_name: '',
		directory: 'Jquery-simple-rating-system-with-small-stars_files/'
	});
	$("#atlocal").webwidget_rating_simple({
		rating_star_length: '5',
		rating_initial_value: '3',
		rating_function_name: '',
		directory: 'Jquery-simple-rating-system-with-small-stars_files/'
	});
	$("#rapidez").webwidget_rating_simple({
		rating_star_length: '5',
		rating_initial_value: '3',
		rating_function_name: '',
		directory: 'Jquery-simple-rating-system-with-small-stars_files/'
	});
	$("#calidad").webwidget_rating_simple({
		rating_star_length: '5',
		rating_initial_value: '3',
		rating_function_name: '',
		directory: 'Jquery-simple-rating-system-with-small-stars_files/'
	});
});
</script>

</body>
</html>