<?php
require_once '../includes/includes.php';
conexion();
require_once 'seguridad.php';

	$id = (int)$_POST['id'];
	$subid = (int)$_POST['subid'];
	$precio = $_POST['precio1'];
	$precio2 = $_POST['precio2'];
			


	mysql_query("UPDATE submenu SET  subPrecio1='$precio',subPrecio2 = '$precio2'
	WHERE id=$id and subid ='$subid'") or die (mysql_error()); 

	
	$_SESSION["errormodificarnoticia"] = "correcto";
	header("Location: panel.php?var=$id");
	
?>
