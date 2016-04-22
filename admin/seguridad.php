<?php
if(!isset($_SESSION)){
session_start();
}
require_once '../includes/funciones.php';
conexion();

$club_row = existe( "user", "users", $_SESSION['usuario']["user"] );
    if ( !$club_row || $club_row["user"] != $_SESSION['usuario']["user"] || $club_row["password"] != $_SESSION['usuario']["password"] || empty($_SESSION['usuario']["user"]))
		{
		$_SESSION["login"]= false;
		header( "Location: ../admin/" );
		exit;
		}
?>