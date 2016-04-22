<?php 
require_once 'includes/includes.php';
//include("seguridad.php"); 
conexion();
header('Content-Type: text/html; charset=UTF-8');
$cons = mysql_query("SELECT * FROM submenu  where id = 13 and subid = 108");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
$precio2 = $consrow['subPrecio2'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robot" content="index,follow"> 
<title>BOX - Papas Fritas</title>
<link rel="stylesheet" href="css/estructura-s.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen" />

<!--tipografias-->
<link rel="stylesheet" href="tipos/stylesheet.css" type="text/css" charset="iso8859-1">
<link rel="stylesheet" href="tipos/stylesheet-bitter.css" type="text/css" charset="utf-8">

</head>

<body>
<div class="left w-800">
	<div class="left w-372"><img src="images/img-papas-fritas.jpg" width="372" height="548" /></div>
	<div id="precio-fritas" class="left">
    	<span class="f-papas">
        	<div class="inner-precio-e">
            	<div class="w-peso-e">
                            
                                <!-- PRECIO GRANDE-->
                                <div class="right m-l-45">
                                    <div class="pesos"><span class="costo">
                                      <?php 
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                    </span></div>
                                </div>
                                
                                <!-- PRECIO CHICA-->
                                <div class="left">
                                    <div class="pesos"><span class="costo">
                                    <?php 
									$decimales = explode(".",$precio2);
									if ($decimales[1] == '00') {
										echo ((int)$precio2);
									}else{
										echo $precio2;
									}?>
                                    </span></div>
                                </div>
                                
                                <div class="clear"></div>
                            </div>
            </div>
        </span>
        <!-- botonera-->
        <div id="bot-fritas">
                    	<ul id="bot-fritas">
                        	<li><a href="#"><span class="btn1_active">Papas Fritas</span></a></li>
                            <li><a href="fritas-mandibox.php"><span class="btn2">Mandi Box</span></a></li>
                            <li><a href="fritas-smiles.php"><span class="btn3">Smile</span></a></li>
                            <li><a href="fritas-apuai.php"><span class="btn4">Apauí</span></a></li>
              </ul>
            </div>
        <!-- /// botonera-->
        </div>
    <div class="clear"></div>
</div>
</body>
</html>
