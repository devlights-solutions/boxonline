<head>
<link rel="stylesheet" href="/css/estructura-s.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/estilos.css" type="text/css" media="screen" />
<!--tipografias-->
<link rel="stylesheet" href="/tipos/stylesheet.css" type="text/css" charset="iso8859-1">
<link rel="stylesheet" href="/tipos/stylesheet-bitter.css" type="text/css" charset="utf-8">

</head>
<?php
include 'conexion.php';
conexion();



if(isset($_POST['email'])) 
{
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "novedades@boxonlines.com.ar";
 
    $email_subject = "Gracias por suscribirte a Boxonline";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "Lo sentimos, pero se encontraron errores en el envío del formulario. ";
 
        echo "Estos errores se encontraron.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Presione la tecla de retroceso y vuelva a intentarlo.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['email'])) {
 
        died('Lo sentimos, pero se encontraron errores en el envío del formulario..');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $email_from = $_POST['email']; // required
 
         
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'La dirección de mail no es válida.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'Su nombre no es válido.<br />';
 
  }
 
 
 
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Detalles del formulario de suscripción.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
	$email_message .= "Bienvenido a Box. Su formulario de contacto se completo correctamente con los siguientes datos: \n";
    
	$email_message .= "Nombre: ".clean_string($first_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
          
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  


$query="select count(*) as contador from maillist where Email = '".$email_from."'";
$query=mysql_query ($query);
$querys=mysql_fetch_array($query);

if ($querys['contador']== 0)
	{
	mysql_query("INSERT INTO maillist(Nombre, Email) VALUES ('".$first_name."','".$email_from."')");
	echo"<br/>";
	echo"<br/>";
	echo "Gracias por suscribirte a las novedades de Box. ";
	echo"<br/>";
	echo"<br/>";
	echo "Nos contactaremos por mail pronto!.";
	}
else 
	echo "Usted ya se encuentra suscripto a nuestras novedades. Muchas gracias!";
 
?>
 
 
 
<!-- include your own success html here -->
 
 
<div class="w-960">

</div>
 
 
<?php
 
}
 
?>