<?php
require_once 'includes/includes.php';
//include("seguridad.php");
conexion();
header('Content-Type: text/html; charset=UTF-8');
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
<link rel="stylesheet" href="tipos/stylesheet-bitter.css" type="text/css" charset="utf-8">

</head>

<body>

<div class="w-800 bg-agregados-ensal">
	<div id="agregados">
    	<div class="col-162-fisrt">
        	
            <!--agregado-->
            <div class="agregados-alto">
            <span class="ensalada1">
            	<div class="inner-agregado">
                	<div class="w-peso-agre">
                    <!-- PRECIO -->
                                <div class="pesos-verde2"><span class="costo-verde2">
                                 <?php 
								  $cons = mysql_query("SELECT * FROM submenu  where id = 11 and subid = 96");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                </span></div>
                    </div>
                </div>
            </span>
            </div>
            <!--///agregado-->
            
            <!--agregado-->
            <div class="agregados-alto">
            <span class="ensalada4">
            	<div class="inner-agregado">
                	<div class="w-peso-agre">
                    <!-- PRECIO -->
                                <div class="pesos-verde2"><span class="costo-verde2">
                                 <?php 
								  $cons = mysql_query("SELECT * FROM submenu  where id = 11 and subid = 99");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                </span></div>
                    </div>
                </div>
            </span>
            </div>
            <!--///agregado-->
            
            
            <!--agregado-->
            <div class="agregados-alto">
            <span class="ensalada7">
            	<div class="inner-agregado">
                	<div class="w-peso-agre">
                    <!-- PRECIO -->
                                <div class="pesos-verde2"><span class="costo-verde2">
                                 <?php 
								  $cons = mysql_query("SELECT * FROM submenu  where id = 11 and subid = 102");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                </span></div>
                    </div>
                </div>
            </span>
            </div>
            <!--///agregado-->
            
            <div class="clear"></div>
            
        </div>
        <div class="col-162">
        
        <!--agregado-->
        <div class="agregados-alto">
            <span class="ensalada2">
            	<div class="inner-agregado">
                	<div class="w-peso-agre">
                    <!-- PRECIO -->
                                <div class="pesos-verde2"><span class="costo-verde2">
                                 <?php 
								  $cons = mysql_query("SELECT * FROM submenu  where id = 11 and subid = 97");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                </span></div>
                    </div>
                </div>
            </span>
            </div>
            <!--///agregado-->
        
        <!--agregado-->
        <div class="agregados-alto">
            <span class="ensalada5">
            	<div class="inner-agregado">
                	<div class="w-peso-agre">
                    <!-- PRECIO -->
                                <div class="pesos-verde2"><span class="costo-verde2">
                                 <?php 
								  $cons = mysql_query("SELECT * FROM submenu  where id = 11 and subid = 100");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                </span></div>
                    </div>
                </div>
            </span>
            </div>
            <!--///agregado-->
            
        <!--agregado-->
        <div class="agregados-alto">
            <span class="ensalada8">
            	<div class="inner-agregado">
                	<div class="w-peso-agre">
                    <!-- PRECIO -->
                                <div class="pesos-verde2"><span class="costo-verde2">
                                 <?php 
								  $cons = mysql_query("SELECT * FROM submenu  where id = 11 and subid = 103");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                </span></div>
                    </div>
                </div>
            </span>
            </div>
            <!--///agregado-->
            
            <div class="clear"></div>
        </div>
        <div class="col-162-last">
        
        <!--agregado-->
        <div class="agregados-alto">
            <span class="ensalada3">
            	<div class="inner-agregado">
                	<div class="w-peso-agre">
                    <!-- PRECIO -->
                                <div class="pesos-verde2"><span class="costo-verde2">
                                 <?php 
								  $cons = mysql_query("SELECT * FROM submenu  where id = 11 and subid = 98");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                </span></div>
                    </div>
                </div>
            </span>
            </div>
            <!--///agregado-->
            
         <!--agregado-->
         <div class="agregados-alto">
            <span class="ensalada6">
            	<div class="inner-agregado">
                	<div class="w-peso-agre">
                    <!-- PRECIO -->
                                <div class="pesos-verde2"><span class="costo-verde2">
                                 <?php 
								  $cons = mysql_query("SELECT * FROM submenu  where id = 11 and subid = 101");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                </span></div>
                    </div>
                </div>
            </span>
            </div>
            <!--///agregado-->
            
         <!--agregado-->
         <div class="agregados-alto">
            <span class="ensalada9">
            	<div class="inner-agregado">
                	<div class="w-peso-agre">
                    <!-- PRECIO -->
                                <div class="pesos-verde2"><span class="costo-verde2">
                                 <?php 
								  $cons = mysql_query("SELECT * FROM submenu  where id = 11 and subid = 104");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                </span></div>
                    </div>
                </div>
            </span>
            </div>
            <!--///agregado-->
        
        	<div class="clear"></div>
        
        </div>
        <div class="clear"></div>
  </div>
</div>
</body>
</html>
