<?php 
require_once 'includes/includes.php';
//include("seguridad.php"); 
conexion();
header('Content-Type: text/html; charset=UTF-8');
$cons = mysql_query("SELECT * FROM submenu  where id = 8 and subid = 69");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
$precio2 = $consrow['subPrecio2'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/wok.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- InstanceBeginEditable name="doctitle" -->
<title>BOX - Wok de vegetales con fideos de arroz</title>
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

<!-- GOOGLE ANALYTICS-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15063728-23', 'boxonline.com.ar');
  ga('send', 'pageview');

</script>

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
            <?php
			include ("menu.php");
			?>
             
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
        	
            <!--w 950 producto-->
            <div class="w-916">
            	
                <div class="col560 left"><!-- InstanceBeginEditable name="imagen" --><img src="images/img-wok-vegetales-fideos.png" alt="Imagen Calzoncillo Fugaceta" width="562" height="530" border="0" usemap="#Map" />
                    <map name="Map" id="Map">
                      <area shape="rect" coords="37,379,246,489" href="wok-vegetales-arroz.php" target="_self" />
                      <area shape="rect" coords="317,376,528,490" href="wok-vegetales-arroz.php" target="_self" />
                    </map>
                    
                       <!--ADD THIS-->
                    <div class="left col484">
                    	<!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style ">
                        <a class="addthis_button_preferred_1"></a>
                        <a class="addthis_button_preferred_2"></a>
                        <a class="addthis_button_preferred_3"></a>
                        <a class="addthis_button_preferred_4"></a>
                        <a class="addthis_button_compact"></a>
                        <a class="addthis_counter addthis_bubble_style"></a>
                        </div>
                        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5112a5c95cfb8507"></script>
                        <!-- AddThis Button END -->
                    </div>
            <!--/// ADD THIS-->
            <div class="clear"></div>
                    
<!-- InstanceEndEditable --></div>
                <div class="col354 left"><!-- InstanceBeginEditable name="texto" -->
				<div id="precio-w">
                	<span class="w-vegetales-fi">
                    	<div class="inner-precio-e">
                        	
                            <!-- PRECIOS -->
                            <div class="w-peso-c">
                            
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
                        </div>
                       
                        <!-- Agregado-->
                        <div class="agregados-veg">
                        <ul class="gallery">
                            <li>
                                <a href="agregados-wok.php?iframe=true&amp;width=680&amp;height=451" rel="prettyPhoto[iframe]">
                        <img src="images/btn-wok-agregados.gif" width="192" height="38" />
                      </a></li></ul>
                        </div>
                    </span>
                </div>
				<!-- InstanceEndEditable --></div>
                <div class="clear"></div>
                
            </div>
            <!--/// w 950 producto-->
            
            <!-- w 950 botonera-->
            <div class="w-905"><!-- InstanceBeginEditable name="botonera" -->
			
            	<!-- centra botonera-->
                <div class="w-895">
                	<div id="bot-wok" class="p_T_18 p_B_18">
                    	<ul id="bot-wok">
                        	<li><a href="wok-vegetales.php" target="_self"><span class="btn1_active">Wok de vegetales</span></a></li>
                            <li><a href="wok-lomo-veg.php" target="_self"><span class="btn2">Wok de lomo</span></a></li>
                            <li><a href="wok-pollo-veg.php" target="_self"><span class="btn3">Wok de pollo</span></a></li>
                            <li><a href="wok-camarones-veg.php" target="_self"><span class="btn4">Wok de camarones</span></a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
			
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
               	  te esperamos en D&oacute;novan 21 <br />
               	  Resistencia - Chaco <br />
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

<!-- lightbox-->
<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$(".gallery a[rel^='prettyPhoto']").prettyPhoto({theme:'light_rounded'});
		});
		</script>
</body>
<!-- InstanceEnd --></html>
