<?php 
require_once '../includes/includes.php';
//include("seguridad.php"); 
conexion();
header('Content-Type: text/html; charset=UTF-8');
$cons = mysql_query("SELECT * FROM submenu  where id = 15 and subid = 146");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
$precio2 = $consrow['subPrecio2'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/estructura-gral.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- InstanceBeginEditable name="doctitle" -->
<title>BOX - Te da el gusto</title>
<!-- InstanceEndEditable -->

<link rel="stylesheet" href="css/estructura.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen" />
<!--tipografias-->
<link rel="stylesheet" href="tipos/stylesheet.css" type="text/css" charset="iso8859-1">
<link rel="stylesheet" href="tipos/stylesheet-bitter.css" type="text/css" charset="utf-8">
<!-- ligtbox-->
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript" charset="utf-8">
			google.load("jquery", "1.3");
		</script>
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<!-- BLOQUE1-->
<div id="1bloque_bg">

	<!-- wrapper centrado-->
<div class="w-960">
    
    	<div id="head">
        	<div id="bot-left-menu" class="left"><a href="ensaladas-marina.php" target="_self"><img src="images/btn-light.png" /></a></div>
            <div id="logo" class="left"><a href="index.php"><img src="images/blank-logo.gif" width="149" height="152" /></a></div>
            <!--menu-->
            <div id="menu" class="left">
            	<div id="barra" >
               	  <div id="barra-inner" class="left bg-barra-inner">
                  	<ul id="barra-inner">
                    	<li><a href="pizzas-muzzarella.php"><span class="btn1">pizzas</span></a></li>
                        <li><a href="empanadas-criollas.php"><span class="btn2">empanadas</span></a></li>
                        <li><a href="hamburguesas-comun.php"><span class="btn3">hambuerguesas y lomos</span></a></li>
                        <li><a href="sandwiches-simple.php"><span class="btn4">sandwiches</span></a></li>
                        <li><a href="calzoncillos-fugazzeta.php"><span class="btn5">calzones</span></a></li>
                        <li><a href="wok-vegetales.php"><span class="btn6">wok</span></a></li>
                        
                    </ul>
                  </div>
                  <div id="barra-cola" class="left"></div>
             <div class="clear"></div>
             
             <!--submenu-->
               <div id="submenu" class="left">
               		<ul id="submenu">
                    	<li><a href="promociones.html"><span class="sub-btn1">promociones</span></a></li>
                        <li><a href="lunch-premium.php"><span class="sub-btn2">promociones</span></a></li>
                        <li><a href="bebidas-a1.php"><span class="sub-btn3">promociones</span></a></li>
                    </ul>
               </div>
               
             </div>
            </div>
            <div class="clear"></div>
            
            <!-- box telefono-->
            <div id="box-lelefono">
            	<div class="right"><img src="images/num-telefono.png" /></div>
                <div class="right"><a href="nosotros.html" target="_self"><img src="images/btn-nosotros.png" /></a></div>
                <div class="clear"></div>
            </div>
        </div>
        <!--/// head-->
        
  </div>
    <!-- /// w centrado-->
</div>
<!-- /// BLOQUE1-->

<!-- BLOQUE4 - que contiene a BODY-->
<div id="4bloque_bg" class="bg-4bloque">
	<div class="w-960">
    	<div id="body">
        	
            
            
            <!-- w 935 contenido-->
            <div class="w-935"><!-- InstanceBeginEditable name="botonera" -->
			
            <!--w 950 producto-->
            <div class="w-916">
            	
                <div class="col560 left p_T_18">
          <img src="images/img-combo5.png" width="564" height="530" alt="Combo5" /></div>
                <div class="col354 left p_T_18">
                
                	<!--PRECIO-->
                    <div id="precio-s">
                	<span class="promo-combo5">
                    	<div class="inner-precio-e">
                        	
                            <!-- PRECIOS -->
                            <div class="w-peso-promo">
                            
                                <!-- PRECIO -->
                                <div class=" pesos"><span class="costo">
                                 <?php 
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                </span></div>
                                
                          </div>
                          <div class="clear"></div>
                          
                        </div>
                    </span>
                </div>
                    <!--/// precio-->
                </div>
                <div class="clear"></div>
                
            </div>
            <!--/// w 950 producto-->
			
			<!-- InstanceEndEditable --></div>
            <!--/// w 950 botonera-->
            
        </div>
    </div>
</div>
<!-- /// BLOQUE4 - que contiene a BODY-->

<!-- BLOQUE2-->
<div id="2bloque_bg" class="foot-bg">

	<!-- wrapper centrado-->
    <div class="w-960">
    	
        <!--foot-->
        <div id="foot">
        
        	<!--visitanos-->
            <div class="w-320 left">&nbsp;</div>
            
            <!--contacto-->
            <div class="w-320 left">
            	<div id="contacto">
                	<span class="txt-corrido-28">Ven� a nuestro local,<br />
               	  te esperamos en D�novan 21.
                  <br />
                    <br />
                    <br />
                    Lunes a Domingos<br />
                    de 10:00 a 14:00 y de 18:30 a 0hs
                  </span>
                    
                </div>
            </div>
            
            <!--socialmedia-->
            <div class="w-320 left">
            	<div id="socialmedia">
                	<span class="txt-corrido-28">Estamos en Facebook y Twitter<br />
                	para escuchar, acercarte novedades y<br />
mejorar d&iacute;a a d&iacute;a tu experiencia.</span>
                    <br />
                    <a href=""><img src="images/blank-socialmedia.png" /></a>
                    <a href=""><img src="images/blank-socialmedia.png" /></a>
                    <div class="p_T_10">
                    
                    	<ul class="gallery">
                            <li>
                                <a href="http://www.brandonlatina.com/box/contacto.php?iframe=true&amp;width=800&amp;height=500" rel="prettyPhoto"><span class="btn">consultas</span>
                                </a>
                            </li>
                         </ul>
                    
                    </div>
                </div>
            </div>
            
            <div class="clear"></div>
        </div>
        <!--/// foot-->
    </div>
    <!-- /// w centrado-->
</div>
<!-- /// BLOQUE2-->

<!-- BLOQUE3-->
<div id="3bloque_bg">

	<!-- wrapper centrado-->
    <div class="w-960"></div>
    <!-- /// w centrado-->
    
</div>
<!-- /// BLOQUE3-->

<!-- LIGHTBOX-->
<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$(".gallery a[rel^='prettyPhoto']").prettyPhoto({theme:'light_rounded'});
		});
		</script>
        
</body>
<!-- InstanceEnd --></html>
