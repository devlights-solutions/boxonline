<?php 
require_once '../includes/includes.php';
include("seguridad.php"); 
conexion();
header('Content-Type: text/html; charset=UTF-8');
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
<title>Panel de Administracion</title>
<link rel="stylesheet" href="css/estructura.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/demo/style.css" type="text/css" media="screen" />
   <script src="jquery.js" type="text/javascript"></script> <script src="jquery.validate.js" type="text/javascript"></script>
 <script>
       function validar(e) {
       tecla = e.which || e.keyCode;
       patron = /\d/; // Solo acepta números
       te = String.fromCharCode(tecla);
       return (patron.test(te) || tecla == 9 || tecla == 8 || tecla == 190);  
     }
	 
</script> 


<style type="text/css">

.contactSubmit{cursor: pointer; background-image: url(http://www.boxonline.com.ar/admin/images/icon_edit20.png); width: 20px; height: 20px; border-width: 0; background-repeat:no-repeat; }

</style>
</head>

<body>
<div id="wrapper1" class="centrar bg1">
  <div id="wrapper2" class="centrar bg1">
    	
        
<!----------------------------------------------------------------- HEAD -->   
      <div> 
        
         <div class="p_b_20">
        <div class="left m_l_30 p_t_20"><img src="images/logo_congreso.png" width="263" height="124" /></div>
        <div class="right align-right m_r_30 p_t_30"><br /><br /><br /><br />
          <img src="images/panel.png" width="312" height="36" /> <div id="bienvenido">
Bienvenido <?php echo $_SESSION['usuario']["user"]; ?> |
		
<a href="../index.php" target="_blanck">Ver el Sitio</a>  |  <a href="salir.php">Salir</a>
</div></div>
        <div class="clear"></div></div>
        
    
  
 
    </div>
    
    
<!----------------------------------------------------------------- FIN HEAD -->     
   
   
<img src="images/bg_acordeon.png" width="960" height="2" />
<img src="images/_sombra_.png" width="960" height="26" />
<?
if (isset($_REQUEST['pos']))    //pregunta si la variable pos esta cargada
{
	$inicio=$_REQUEST['pos'];     //comienza desde el valor cargado en pos
}
else{
	$inicio=0;						//else comienza con el ID_noticias en 0
}
?>
<!----------------------------------------------------------------- CONTENIDO -->
<!-----------------------------------------------------------------  FIN CONTENIDO -->
<!-----------------------------------------------------------------  FOOT -->
<!----------------------------------------------------------------- FIN FOOT -->
<div class="clear"></div>
<div class="clear"></div>
  </div>
  <div>
  <div>

	
		<div id="cont_250" class="left">
      
<table width="200" border="0" cellspacing="0" cellpadding="0" class="p_b_10 p_t_10 txt">
<?php 
$id = 1;
$constate=mysql_query("SELECT * FROM menu");
while($rowstate=mysql_fetch_array($constate))
{
$id = $rowstate['id'];
$nombre = $rowstate['menuNombre'];

echo '<tr class= "txt_ins_tit">
    <td  id='.$rowstate['id'].'><a href="panel.php?var='.$id.'">'.$rowstate['menuNombre'].'</a></td>
  </tr>
 <tr>
    <td class="txt_ins_tit" >................................</td>
  </tr> ';

}

?>
  
 
</table>
	  </div>
    
    <div id="cont_710" class="left">
   <?php 
   	$var=sqlint($_GET['var']);
	$result=mysql_query("select * from menu where id=$var");
			if(mysql_num_rows($result) !=0){
			while($row=mysql_fetch_array($result)){
				$id=$row['id'];
				$nombre=$row['menuNombre'];
		    }
			mysql_free_result($result);
			}
			?>
      <table width="200" border="1" cellspacing="0" bordercolor="#FFCC66" class="left" id="cont_710">
        <tr class = " txt_ins_tit">
          <td colspan="4" align="center"><?php  
		  	echo $nombre ?></td>
          </tr>
        <tr>
          <td align = "center" class = "txt_ins_tit">Comida</td>
          <td align = "center" class = "txt_ins_tit">Precio Un/Chica</td>
          <td align = "center" class = "txt_ins_tit">Precio Doc/Grande</td>
          <td align = "center" class = "txt_ins_tit">Modificar</td>
        </tr>
			<?php 
            $const=mysql_query("SELECT * FROM submenu where id = $var");
            while($row=mysql_fetch_array($const))
            {
            $subid = $row['subid'];
			$precio1 = $row['subPrecio1'];
			$precio2 = $row['subPrecio2'];
            $campo = $row['habilito'];
			if ($row['habilito'] == 'N'){
				$disabled = 'disabled = "disabled"';
			}else{
				$disabled = ' ';
		     }
			
            echo '<tr class= "txt_ins_tit">
			<form id="form1" name="form'.$id.'" method="post" action="modificar.php">
			 <input name="id" id="id" type="hidden" value='.$row['id'].'/>
                <td><input name="subid" id="subid" type="hidden" value='.$row['subid'].'>'.$row['subComida'].'</td>
				<td class= "txt_ins_tit">$ <input type="text" name="precio1" id="precio1" onkeypress="return validar(event)"  value="'.$precio1.'"/> </td>
				<td class= "txt_ins_tit">$ <input type="text" name="precio2" id="precio2" onkeypress="return validar(event)" '.$disabled.' value="'.$precio2.'"/> </td> 
    <td class= "txt_ins_tit"> <input  type="submit" class="contactSubmit"  name="sub" id="sub" value="" /></td>
                </form>
              </tr>';
            
            }
            
            ?>

      </table>
      
    </div>



<div class="clear"></div>

</div>
  </div>
</div>

</body>
</html>
