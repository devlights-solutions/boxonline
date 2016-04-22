<?php 
require_once 'includes/includes.php';
//include("seguridad.php"); 
conexion();
header('Content-Type: text/html; charset=UTF-8');
$cons = mysql_query("SELECT * FROM submenu  where id = 12 and subid = 153");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
$cons = mysql_query("SELECT * FROM submenu  where id = 12 and subid = 154");
$consrow=mysql_fetch_array($cons);
$precio2 = $consrow['subPrecio1'];
$cons = mysql_query("SELECT * FROM submenu  where id = 12 and subid = 155");
$consrow=mysql_fetch_array($cons);
$precio3 = $consrow['subPrecio1'];
$cons = mysql_query("SELECT * FROM submenu  where id = 12 and subid = 156");
$consrow=mysql_fetch_array($cons);
$precio4 = $consrow['subPrecio1'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robot" content="index,follow"> 
<title>BOX - Te da el gusto</title>
<link rel="stylesheet" href="css/estructura-s.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen" />
<!--tipografias-->
<link rel="stylesheet" href="tipos/stylesheet.css" type="text/css" charset="iso8859-1">

<style>
#contenedor
{
    height:561px;
    width:800px;
    position:relative;
}

#imagen
{    
    position:absolute;
    left:0;
    top:0;
}
#texto
{
    z-index:100;
    position:absolute;    
    color:white;
	font: 12px 'PTSansRegular', Arial, sans-serif;
    font-size:12px;
    font-weight:bold;
}
</style>
</head>

<body>
<div id="contenedor">
    <img id="imagen" src="images/opciones-lunch-sin-precios.jpg"/>
    <p id="texto" style="top: 40px; left: 248px">
		<?php 
			$decimales = explode(".",$precio1);
			if ($decimales[1] == '00') {
				echo '$ '.((int)$precio1);
			}else{
				echo '$ '.$precio1;
			}
		?>
    </p>
	
	<p id="texto" style="top: 40px; left: 623px">
		<?php 
			$decimales = explode(".",$precio2);
			if ($decimales[1] == '00') {
				echo '$ '.((int)$precio2);
			}else{
				echo '$ '.$precio2;
			}
		?>
    </p>

	<p id="texto" style="top: 230px; left: 248px">
		<?php 
			$decimales = explode(".",$precio3);
			if ($decimales[1] == '00') {
				echo '$ '.((int)$precio3);
			}else{
				echo '$ '.$precio3;
			}
		?>
    </p>

	<p id="texto" style="top: 230px; left: 623px">
		<?php 
			$decimales = explode(".",$precio4);
			if ($decimales[1] == '00') {
				echo '$ '.((int)$precio4);
			}else{
				echo '$ '.$precio4;
			}
		?>
    </p>
</div>

</body>
</html>
