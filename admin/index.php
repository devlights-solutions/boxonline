<?php 
require_once '../includes/includes.php';
  

$conectar= mysql_connect("localhost","w1600328_guido","Bco94Factoria")or die('Imposible conectar DB');
mysql_select_db("w1600328_boxfood",$conectar) or die('Imposible seleccionar DB');
function quitar($mensaje)
{
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}

?>
<?php


if(isset($_POST['user']) && isset($_POST['password'])){

$user=$_POST['user'];
$password=$_POST['password'];
//$password=pass_cript($password);//generar pass encriptado
	//$stmt= $mysqli ->prepare("SELECT * FROM users WHERE user=? and password=?");
	//$stmt->bind_param('ss', $user, $password);
	//$stmt->execute();
    //$stmt->bind_result($id, $id_groups, $name, $lastname, $user, $password, $email);
	$result = mysql_query('SELECT * FROM users WHERE user=\''.$user.'\'');
if($row = mysql_fetch_array($result)){
	if($row["password"] == $password){
		if($id_groups!=99){ #pregunta el grupo 99, que es publico si intenta patea	   
			  session_start();
    	$_SESSION['usuario']["idusuario"]=$id;
    	$_SESSION['usuario']["group"]=$id_groups;
    	$_SESSION['usuario']["name"]=$name;
    	$_SESSION['usuario']["lastname"]=$lastname;
    	$_SESSION['usuario']["user"]=$user;
    	$_SESSION['usuario']["password"]=$password;
    	$_SESSION['usuario']["email"]=$email;
    	$_SESSION['usuario']["token"]=make_token();
    	$_SESSION["login"]= true;
		if($_SESSION['usuario']["group"] == 1){
			header ("Location: panel.php?var=1");
		}else{
			header ("Location: panel.php?var=1");
			}
    
		}	#if del grupo 99
	else 
	{
    //si no existe le mando otra vez a la portada
    header("Location:index.php?errorusuario=si");
	}

	}
  else 
	{
    //si no existe le mando otra vez a la portada
    header("Location:index.php?errorusuario=si");
	}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robot" content="index,follow"> 
<title>PANEL DE ADMINISTRACI&Oacute;N</title>
<link rel="stylesheet" href="css/estructura.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/demo/style.css" type="text/css" media="screen" />
   


</head>

<body>
<div id="wrapper1" class="centrar body" >
	<div class="sombra left"></div>
    
    <div  id="wrapper2" class="left body ">
    	
        
<!----------------------------------------------------------------- HEAD -->
<!----------------------------------------------------------------- FIN HEAD -->
<img src="images/bg_acordeon.png" width="960" height="2" /> <img src="images/_sombra_.png" width="960" height="26" />
<!----------------------------------------------------------------- CONTENIDO -->
<div class=" centrar">

    
    <div id="cont_710" class="centrar">
    
    		
            
             <div id="bg_resumen" class="p_b_40 centrar txt m_l_20 m_r_20 m_t_20">
             
             <div><img src="images/logo_congreso.png" width="263" height="124" /></div>
               <div class=" p_t_20 txt"><img src="images/tit_datosdeacceso.png"  /></div>
                
         	   <?php
		if(isset($_GET["errorusuario"])){
					if ($_GET["errorusuario"]=="si"){
					echo '<div class="errora mensajes" style="margin-left:7px">Datos incorrectos</div>';

					}
		}
		?>
         	   <form action="#" method="post">
             <div class=" p_b_10"><img src="images/bg_acordeon.png" width="667" height="2" /> 
             <img src="images/_sombra_.png" width="667" height="10" /></div>
            
            
           <div class="centrar w_300"> <div class="align-right w_100 left"> 	USUARIOS: </div><input class="left m_l_10 " name="user" type="text" /><div class="clear"></div></div>
              
              
            <div class="centrar p_t_10 w_300"> <div class="align-right w_100 left">CONTRASEÑA:</div>  <input class="left m_l_10 " name="password" type="password" /><div class="clear"></div></div>
           
            <div class="p_t_10"><input name="" type="submit" value="Ingresar"/></div>
            
            </form>
            
      

          
          
            
</div>
            

    
    </div>




</div>


<!-----------------------------------------------------------------  FIN CONTENIDO -->   

<!-----------------------------------------------------------------  FOOT -->
<!----------------------------------------------------------------- FIN FOOT -->
  </div>
<div class="sombra left"></div> 

</div>


  <script type="text/javascript" src="nivo-slider/demo/scripts/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>
