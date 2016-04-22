<?php 
require_once 'includes/includes.php';
//include("seguridad.php"); 
conexion();
header('Content-Type: text/html; charset=UTF-8');
$cons = mysql_query("SELECT * FROM submenu  where id = 16 and subid = 124"); //villavicencio grande 1500cm3
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

<link rel="stylesheet" href="css/estructura-s.css" type="text/css" media="screen" />
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

<style type="text/css">
*{margin:0px;padding:0px;}
#feedbackPost
{
background:transparent url(images/pestagna.png) no-repeat scroll 0px 0px;
height:170px;
left:0;
position:fixed;
top:200px;
width:45px;
z-index:100;
}
div#feedbackPost:hover
{
background-position:-45px 0px;
}
#feedbackPost a
{
display:block;
height:170px;
width:45px;
}
</style>


<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="feedbackPost"><ul class="gallery"><li><a href="feedbackbox.php?iframe=true&amp;width=582&amp;height=480" rel="prettyPhoto"></a></li></ul></div>
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
						<li><a href="sandwiches-pack24.php"><span class="sub-btn4">promociones</span></a></li>
						<li><a href="sandwiches-pack48.php"><span class="sub-btn5">promociones</span></a></li>
                    </ul>
               </div>
               
             </div>
            </div>
            <div class="clear"></div>
            
            <!-- box telefono-->
            <div id="box-lelefono">
            	<div class="right"><img src="images/num-telefono.png" /></div>
                <div class="right"><a href="nosotros.html" target="_self"><img src="images/btn-nosotros.png" /></a></div>
                <div class="right">
                <ul class="gallery">
                            <li>
                <a href="contactoboxcv.php?iframe=true&amp;width=582&amp;height=510" rel="prettyPhoto"><img src="images/btn-mandacv.png" /></a></li></ul></div>
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
			<!--BEBIDAS-->
            <div id="bebidas" class="bg-bebidas">
            	<!-- IMAGEN-->
                <div class="left w-372">
                	<div id="img-aguas">
                    	<span class="a4"></span>
                    </div>
                </div>
                
                <!--TEXTO + PRECIO + BOTONERA-->
                <div class="left w-541">
                	
                    <!--INFO-->
                    <div id="precio-a">
                    
                    <!-- wrapper precio-->
                    <div class="w-precio-bebidas">
                    	<!--txt-->
                    	<span class="a4"></span>
                        <!--precio-->
                        <div class="inner-precio-bebidas p_T_18">
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
                     <!--/// wrapper precio-->
                        
                        <!--BOTONERA A-->
                        <div id="bot-aguas">
                        	<ul id="bot-aguas">
                            	<li><a href="bebidas-a1.php" target="_self"><span class="btn1"></span></a></li>
                                <li><a href="bebidas-a2.php" target="_self"><span class="btn2"></span></a></li>
                                <li><a href="bebidas-a3.php" target="_self"><span class="btn3"></span></a></li>
                                <li><a href="bebidas-a4.php" target="_self"><span class="btn4_active"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="clear"></div>
            </div>
            <!--///BEBIDAS-->
            
            <!--BORONERA-->
            <div class="w-740">
                	<div id="bot-bebidas" class="p_T_18 p_B_18">
                    	<ul id="bot-wok">
                        	<li><a href="bebidas-g1.php" target="_self"><span class="btn1">Gaseosas</span></a></li>
                            <li><a href="bebidas-a1.php" target="_self"><span class="btn2_active">Aguas</span></a></li>
                            <li><a href="bebidas-c1.php" target="_self"><span class="btn3">Cervezas</span></a></li>
                            <li><a href="bebidas-v1.php" target="_self"><span class="btn4">Vino</span></a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            <!--///BORONERA-->
            
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
        <div id="foot3">
        
        	<!--visitanos-->
            <div class="w-320 left">
            	<div id="contacto">
                	<span class="txt-corrido-28">Ven&iacute; a nuestro local,<br />
               	  te esperamos en D&oacute;novan 21<br />
               	  Resistencia - Chaco               	  <br />
                    <br />
                    <br />
                    <br />
                    Lunes a Domingos<br />
                    de 10:00 a 14:00 y de 18:30 a 0hs
                  </span>
                    
                </div>
            </div>
            
            <!--contacto-->
            <div class="w-320 left">
            	<div id="telefono">
                <ul class="gallery">
                    <li>
                	<a href="contactoboxcv.php?iframe=true&amp;width=582&amp;height=510" rel="prettyPhoto"><img src="images/blank-btn-foot.png" /></a></li>
                    <li>
                    <a href="contactobox.php?iframe=true&amp;width=550&amp;height=560" rel="prettyPhoto"><img src="images/blank-btn-foot.png" /></a>
                    </li>
                 </ul>
                	<span class="txt-corrido-28"><a href="http://qr.afip.gob.ar/?qr=CLwfcpydv_RxVZa_PzobwQ,,"
target="_F960AFIPInfo"><br />
                	Formulario 960 MN</a></span>
                    
                </div>
            </div>
            
            <!--socialmedia-->
            <div class="w-320 left">
            	<div id="socialmedia">
                	<span class="txt-corrido-28">Estamos en Facebook y Twitter<br />
                	para escuchar, acercarte novedades y<br />
mejorar d&iacute;a a d&iacute;a tu experiencia.</span>
                    <br />
                    <a href="https://www.facebook.com/pages/BOX-Online/229569183840240" target="_blank"><img src="images/blank-socialmedia.png" /></a>
                    <a href="https://twitter.com/boxtedaelgusto" target="_blank"><img src="images/blank-socialmedia.png" /></a>
              	
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
