<?php 
require_once 'includes/includes.php';
//include("seguridad.php"); 
conexion();
header('Content-Type: text/html; charset=UTF-8');
$cons = mysql_query("SELECT * FROM submenu  where id = 3 and subid = 30");
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
$precio2 = $consrow['subPrecio2'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/empanadas.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- InstanceBeginEditable name="doctitle" -->
<title>BOX - Empanadas criollas</title>
<!-- InstanceEndEditable -->

<link rel="stylesheet" href="css/estructura-s.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen" />
<!--tipografias-->
<link rel="stylesheet" href="tipos/stylesheet.css" type="text/css" charset="iso8859-1">
<link rel="stylesheet" href="tipos/stylesheet-bitter.css" type="text/css" charset="utf-8">

<!-- ligtbox-->
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript" charset="utf-8">
			google.load("jquery", "1.7");
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


        
<!-- Custom scrollbars -->
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" />
    <link href="css/scroll.css" rel="stylesheet" />
    
		<!-- InstanceBeginEditable name="head" -->
		<link href="css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />
  <!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
	
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
    <link rel="stylesheet" href="css/easyslider.css" type="text/css" media="screen" />
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
            	
                <div class="col560 left"><!-- InstanceBeginEditable name="imagen" --><img src="images/img-empanadas-criollas.png" width="562" height="530" alt="Imagen Empanadas &aacute;rabes" />
				
				<!--ADD THIS-->
                    <div class="left col560">
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
				
				<!-- InstanceEndEditable --></div>
                <div class="col354 left"><!-- InstanceBeginEditable name="texto" -->
				<div id="precio-mark">
                	<span class="e-cri">
                    	<div class="inner-precio-e">
                        	
                            <!-- PRECIOS -->
                            <div class="w-peso-e">
                            
                                <!-- PRECIO UNIDAD-->
                                <div class="left m-l-30">
                                    <div class=" pesos"><span class="costo-decimales">
                                    <?php 
									$decimales = explode(".",$precio1);
									if ($decimales[1] == '00') {
										echo ((int)$precio1);
									}else{
										echo $precio1;
									}?>
                                    </span></div>
                                </div>
                                
                                <!-- PRECIO DOCENA-->
                                <div class="left m-l-30">
                                    <div class=" pesos"><span class="costo-decimales">
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
                </div>
			  <!-- InstanceEndEditable --></div>
                <div class="clear"></div>
                
            </div>
            <!--/// w 950 producto-->
            
            <!-- w 950 botonera-->
            <div class="w-905"><!-- InstanceBeginEditable name="botonera" --> 
            <div class="w-895">
                
                <!-- content block -->
    <div class="content_6 content mCustomScrollbar _mCS_2 toggle_width">
<div class="mCustomScrollBox mCS-light mCSB_horizontal" id="mCSB_2" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container" style="position: relative; left: 0px; width: 4081px;">
		<div class="images_container">
        	
            <!--1-->
            	<a href="empanadas-criollas.php"><img src="images/e-on-criollas.png"  /></a>
                <a href="empanadas-cordobesas.php"><img src="images/e-off-cordobesas.png"  /></a>
				<a href="empanadas-ahumadas.php"><img src="images/e-off-ahumadas.png"  /></a>
                <a href="empanadas-picantes.php"><img src="images/e-off-picantes.png" /></a>
                <a href="empanadas-tucumanas.php"><img src="images/e-off-tucumanas.png" class="left" /></a>
                <a href="empanadas-arabes.php"><img src="images/e-off-arabes.png"  /></a>
                
            <!--2-->
            	<a href="empanadas-pollo.php"><img src="images/e-off-pollo.png"  /></a>
                <a href="empanadas-surubi.php"><img src="images/e-off-surubi.png" class="left" /></a>
                <a href="empanadas-atun.php"><img src="images/e-off-atun.png"  /></a>
                <a href="empanadas-humita.php"><img src="images/e-off-humita.png"  /></a>
                <a href="empanadas-verduras.php"><img src="images/e-off-verduras.png"  /></a>
            <!--3-->
            	<a href="empanadas-queso.php"><img src="images/e-off-queso.png" /></a>
                <a href="empanadas-jamonyqueso.php"><img src="images/e-off-jamosqueso.png" /></a>
                <a href="empanadas-cebollayqueso.php"><img src="images/e-off-cebollaqueso.png" /></a>
            
            <!--4-->
            	<a href="empanadas-roquefort.php"><img src="images/e-off-roquefort.png"/></a>
                <a href="empanadas-fontina.php"><img src="images/e-off-fontinatomate.png" /></a>
                <a href="empanadas-caprese.php"><img src="images/e-off-caprese.png"  /></a>
            
            <!--5-->
            	<a href="empanadas-discos-cebolla.php" target="_self"><img src="images/e-off-discocebolla.png"/></a>
                <a href="empanadas-discos-espanol.php" target="_self"><img src="images/e-off-dicoespanol.png"/></a>
				
		</div>
</div>
<div class="mCSB_scrollTools" style="position: absolute; display: block;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; width: 144px; left: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
	
	<!-- content block -->
                
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
              <div class="p_T_10">
                    
                    	
                    
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

 <!-- Google CDN jQuery with fallback to local -->

	<!-- custom scrollbars plugin -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
		(function($){
			$(window).load(function(){
				/* custom scrollbar fn call */
				
				$(".content_5").mCustomScrollbar({
					horizontalScroll:true,
					scrollButtons:{
						enable:true
					},
					theme:"dark-thin"
				});
				
					$(".content_6").mCustomScrollbar({
					horizontalScroll:true,
					advanced:{
						autoExpandHorizontalScroll:true
					}
				});
				
				/* 
				demo fn 
				functions below are for demo and examples
				*/
				$(".demo_functions a[rel='append-new']").click(function(e){
					e.preventDefault();
					$(".content_6 .images_container").append("<img src='demo_files/mcsThumb1.jpg' class='new' />");
					$(".content_6 .images_container img").load(function(){
						$(".content_6").mCustomScrollbar("update");
					});
				});
				$(".demo_functions a[rel='prepend-new']").click(function(e){
					e.preventDefault();
					$(".content_6 .images_container").prepend("<img src='demo_files/mcsThumb8.jpg' class='new' />");
					$(".content_6 .images_container img").load(function(){
						$(".content_6").mCustomScrollbar("update");
					});
				});
				$(".demo_functions a[rel='append-new-scrollto']").click(function(e){
					e.preventDefault();
					$(".content_6 .images_container").append("<img src='demo_files/mcsThumb1.jpg' class='new' />");
					$(".content_6 .images_container img").load(function(){
						$(".content_6").mCustomScrollbar("update");
						$(".content_6").mCustomScrollbar("scrollTo","right");
					});
				});
				$(".demo_functions a[rel='scrollto']").click(function(e){
					e.preventDefault();
					$(".content_6").mCustomScrollbar("scrollTo","#mcs_t_5");
				});
				$(".demo_functions a[rel='remove-last']").click(function(e){
					e.preventDefault();
					$(".content_6 .images_container img:last").remove();
					$(".content_6").mCustomScrollbar("update");
				});
				$(".demo_functions a[rel='toggle-width']").click(function(e){
					e.preventDefault();
					$(".content_6").toggleClass("toggle_width");
					$(".content_6").mCustomScrollbar("update");
				});
				
			});
		})(jQuery);
	</script>
<!-- lightbox-->
<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$(".gallery a[rel^='prettyPhoto']").prettyPhoto({theme:'light_rounded'});
		});
		</script>
</body>
<!-- InstanceEnd --></html>