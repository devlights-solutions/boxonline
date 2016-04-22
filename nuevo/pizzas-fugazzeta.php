<?php require_once '../includes/includes.php';
//include("seguridad.php"); 
conexion();
header('Content-Type: text/html; charset=UTF-8');
$cons = mysql_query("SELECT * FROM submenu  where id = 1 and subid = 10");//pizza fugazzeta
$consrow=mysql_fetch_array($cons);
$precio1 = $consrow['subPrecio1'];
$precio2 = $consrow['subPrecio2'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/pizzas.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- InstanceBeginEditable name="doctitle" -->
<title>BOX - Pizza fugazzeta</title>
<script type="text/javascript" src="js/easySlider1.5.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider();
		});	
	</script>
    <link rel="stylesheet" href="css/easyslider.css" type="text/css" media="screen" />
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
		<script src="scripts/swfobject_modified.js" type="text/javascript"></script>
		<!-- InstanceEndEditable -->

<!-- GOOGLE ANALYTICS-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33674117-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

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
                    	<li><a href="pizzas-muzzarella.php"><span class="btn1_active">pizzas</span></a></li>
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
        	
            <!--w 950 producto-->
            <div class="w-916">
            	
                <div class="col560 left"><!-- InstanceBeginEditable name="imagen" --><img src="images/img-pizzas-fuga.png" width="562" height="339" alt="Imagen Empanadas &aacute;rabes" />
				<div class="opciones-pizzaslight">
   	  <div class="left">
                    	<a href="pizzetas-light-muzzarella.php"><img src="images/blank-opciones.gif" /></a>
                  </div>
                    <div class="left">
                    	<a href="pizzetas-light-especial.php"><img src="images/blank-opciones.gif" /></a>
                  </div><div class="left">
                    	<a href="pizzetas-light-rucula.php"><img src="images/blank-opciones.gif" /></a>
                  </div><div class="left">
                    	<a href="pizzetas-light-atun.php"><img src="images/blank-opciones.gif" /></a>
                    </div>
                    <div class="clear"></div>
                    
                    <!--ADD THIS-->
                    <div class="left col560 p_T_10">
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
                    
              </div><!-- InstanceEndEditable --></div>
                <div class="col354 left"><!-- InstanceBeginEditable name="texto" -->
				<div id="precio">
                	<span class="p-fuga">
                    	<div class="inner-precio-p">
                        	
                            <!-- PRECIOS -->
                            <div class="w-peso">
                            
                                <!-- PRECIO GRANDE-->
                                <div class="left">
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
                                
                                <!-- PRECIO PIZZETA-->
                                <div class="right">
                                    <div class=" pesos"><span class="costo">
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
            
            <div id="wrapper-easyslider">
            	<div id="container-slider">
    				<div id="content-slider">
	
					<div id="slider">
                        <ul>
                        				
                            <li>
                            	<!--PAG 1 - 3 gustos-->
                                <a href="pizzas-muzzarella.php"><img src="images/p-off-muzzarella.png" class="left" /></a>
                                <a href="pizzas-fugazzeta.php"><img src="images/p-off-fugaceta.png" class="left" /></a>
                                <a href="pizzas-fugazzeta-panceta.php"><img src="images/p-off-fugacetapanceta.png" class="left" /></a>
                        <div class="clear"></div>
                                <img src="images/paginado1.png" />
                            </li>
                            
                            <li>
                            	<!--PAG 2 - 4 gustos-->
                                <a href="pizzas-humita.php"><img src="images/p-off-humita.png" class="left" /></a>
                                <a href="pizzas-napolitana.php"><img src="images/p-off-napolitana.png" class="left" /></a>
                                <a href="pizzas-roquefort.php"><img src="images/p-off-roquefort.png" class="left" /></a>
                                <a href="pizzas-calabresa.php"><img src="images/p-off-calabresa.png" class="left" /></a>
                                <div class="clear"></div>
                                <img src="images/paginado2.png" />
                            </li>
                            <li>
                            
                            <!--PAG 3 - 4 gustos-->
                                <a href="pizzas-anchoa.php"><img src="images/p-off-anchoa.png" class="left" /></a>
                                <a href="pizzas-caprese.php"><img src="images/p-off-caprese.png" class="left" /></a>
                                <a href="pizzas-tomate-provolone.php"><img src="images/p-off-tomateprovolone.png" class="left" /></a>
                                <a href="pizzas-primavera.php"><img src="images/p-off-primavera.png" class="left" /></a>
                              <div class="clear"></div>
                                <img src="images/paginado3.png" />
                            
                            </li>
                            
                            <li>
                            <!--PAG 4 - 4 gustos-->
                              	<a href="pizzas-tropical.php"><img src="images/p-off-tropical.png"class="left" /></a>
                              	<a href="pizzas-atun.php"><img src="images/p-off-atun.png" class="left" /></a>
                              	<a href="pizzas-rucula.php"><img src="images/p-off-ruculajamon.png" class="left" /></a>
                              	<a href="pizzas-especial.php"><img src="images/p-off-especial.png" class="left" /></a>
                              	<div class="clear"></div>
                            	<img src="images/paginado4.png" />
                            </li>
                            
<li>
                            
                            	<!--PAG 5 - 2 gustos-->
                                <a href="pizzas-camarones.php"><img src="images/p-off-camarones.png" class="left" /></a>
                                <a href="pizzas-granbox.php"><img src="images/p-off-granbox.png" class="left" /></a>
                    <div class="clear"></div>
                   	<img src="images/paginado5.png" />
                          </li>
                        </ul>
					</div>
			
		
					</div>

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
        <div id="foot">
        
        	<!--visitanos-->
            <div class="w-320 left">&nbsp;</div>
            
            <!--contacto-->
            <div class="w-320 left">
            	<div id="contacto">
                	<span class="txt-corrido-28">Vení a nuestro local,<br />
               	  te esperamos en Dónovan 21.
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

<!-- lightbox-->
<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$(".gallery a[rel^='prettyPhoto']").prettyPhoto({theme:'light_rounded'});
		});
		</script>
</body>
<!-- InstanceEnd --></html>
