<?php
function  conexion(){
	global $conexion;
	$conexion = mysql_connect("localhost","root","");
	mysql_select_db("boxonline",$conexion) OR die ("error". mysql_errno());
	mysql_query("SET NAMES 'utf8'");
	if(!$conexion)
	{
		echo "Error en la conexion";
	}
}

function conexionps(){
global $mysqli;
$mysqli = new mysqli("localhost","root","", 'boxonline');
	    if (mysqli_connect_errno()) 
		{
		echo "Error connect's Prepared Statements";
		exit;
		}	
}