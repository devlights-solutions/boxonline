<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$comentario=$_POST['enquiry'];
$X=$_POST['X'];


$tucorreo = "hola@boxonline.com.ar";

$titulo = "Mensajes desde la web de BOX";

$mensaje = "Nombre y apellido: ".$nombre."\nMensaje : ".$comentario;

$de = "From:" . $email;

session_start();
if ($X == 1) {
if ($_POST['action'] == "checkdata") {
	if($ombre == '') {
            $var = "<p style='color: #ff0000;'><strong>Por favor escribe tu nombre</strong></p>";
		}
		elseif($email == '') {
			$var = "<p style='color: #ff0000;'><strong>Debes dejarnos un e-mail de contacto.</strong></p>";
		}
	    elseif ($_SESSION['tmptxt'] == $_POST['tmptxt']) {
		mail ($tucorreo, $titulo, $mensaje, $de); 
            header("Location: exito.html");
			//$X=2;
	} else {
		$var = "You have entered an incorrect code";
	}
	//exit;
}
}
if ($X != 2) 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/contacto.css" type="text/css" media="screen" />
</head>

<body>
<!--wrapper 800-->
<div class="w-800">
	<div class="w-457 p-top30">
 <form id="form1" name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label class="label"><img src="images/form-nombre.png" />
          <input name="name" type="text" id="name" class="campo" size="25" value="<?php echo $nombre; ?>" />
   </label>
  <p>
            <label class="label"><img src="images/form-email.png" />
              <input name="email" type="text" id="email" class="campo" size="25" value="<?php echo $email; ?>" />
            </label>
          </p>
          
     <p>
            <label class="label"><img src="images/form-mensaje.png" />
              <textarea name="enquiry" id="comentario"  cols="25" rows="5"></textarea>
        </label>
      </p>
   <p>&nbsp;</p>
   
   <br />
          <label>Codigo de seguridad:</label>
		  <img src="captcha.php" width="100" height="30" vspace="3"><br>
		  <input name="tmptxt" type="text" size="30"><br>
   <input name="btget" type="submit" class="boton" value="Enviar">
		  <input name="action" type="hidden" value="checkdata">
		  	<input type=hidden name=X value=1> 
   
      
</form>
<? echo "<br><br>".$var; ?>
<p>&nbsp;<br />&nbsp;</p>
	</div>
</div>
<!--wrapper 800-->
</body>
</html>