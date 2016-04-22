<?php
function  conexion(){
	global $conexion;
	$conexion = mysql_connect("localhost","w1600328_guido","Bco94Factoria");
	mysql_select_db("w1600328_boxfood",$conexion) OR die ("error". mysql_errno());
	mysql_query("SET NAMES 'utf8'");
	if(!$conexion)
	{
		echo "Error en la conexion";
	}
}

function conexionps(){
global $mysqli;
$mysqli = new mysqli("localhost","w1600328_guido","Bco94Factoria", 'w1600328_boxfood');
	    if (mysqli_connect_errno()) 
		{
		echo "Error connect's Prepared Statements";
		exit;
		}	
}