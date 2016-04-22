<?php 

function titulo(){
	echo "Direc";
}

function titulopanel(){
	
	echo "Panel de Administracion - Direccion de Estadistica y Censo";
}

function sqlinsert($tabla,$campos,$valores){
   $sql='INSERT INTO '.$tabla.'('.$campos.')'.'VALUES'.'('.$valores.')';
   mysql_query($sql);
   #echo $sql;
   echo mysql_error();
  // echo $sql;
}

function sqlupdate($tabla,$campos,$where){
  $sql='update '.$tabla.' set '.$campos.' where '.$where;
  
  mysql_query($sql);
  echo mysql_error();

 }

function sqldelete($tabla,$campo,$clave){
   $sql="DELETE from  ".$tabla." WHERE ".$campo." ='".$clave."'";
   mysql_query($sql);
   //echo $sql;
   echo mysql_error();
  // echo $sql;
}

 function existe($campo,$tabla,$clave)
{
	global $conexion;
	mysql_select_db("direc",$conexion);	
	$result = mysql_query ("SELECT * FROM $tabla WHERE $campo='$clave'") or die (mysql_error());
	return mysql_fetch_array($result);
}


 ################################################FUNCION CARGAR Apunte publico ##########################################################
function cargar_apunte_p($nom,$tam,$folder,$postnombre,$rutatemp){

	if ($nom == ""){
		$url="";
		return $url;

	}

	$file_extension = strtolower(substr(strrchr($nom,"."),1));	//compruebo si las características del archivo son las que deseo
	$url =$postnombre."_".str_replace(' ','.',$nom);
        // creo el nombre del archivo en base al nombre del usuario
	$folder=$folder;

	if(preg_match('/(pdf|doc|docx|ppt|pps|ppsx|pptx)/',$file_extension)){
		#echo "Estoy dentro de extensiones esta es laruta".$ruta;

		$ruta=$folder.$url;
		if(move_uploaded_file($rutatemp,$ruta))
		{
                    //$tamano = GetImageSize($ruta);
                    return $url;
		}  else {
                    $_SESSION["errorcargarnoticia"] = "error en la carga";

                }


	}
	else {
		$_SESSION["errorcargarnoticia"] = "extensiones";
		}
}

################################################FUNCION CARGAR Apunte ##########################################################
function upload_file($nom,$tam,$folder,$postnombre,$rutatemp){

	if ($nom == ""){
		$url="";
		return $url;

	}
        
	$file_extension = strtolower(substr(strrchr($nom,"."),1));	//compruebo si las características del archivo son las que deseo
	
	//$url = $postnombre."_".str_replace(' ','.',$nom);
	$url = $postnombre.'.'.$file_extension;
    // creo el nombre del archivo en base al nombre del usuario
	
	$folder=$folder;

	if(preg_match('/(xls|xlsx|pdf|jpg|png|jpeg)/',$file_extension)){
		
		$ruta= '../'.$folder.$url;
		if(move_uploaded_file($rutatemp,$ruta)){
            return $url;
		}
		else{
            $_SESSION["errorcargarnoticia"] = "error en la carga";
        }
		
	}
	else{
		$_SESSION["errorcargarnoticia"] = "extensiones";
	}
}
//************************ CARGAR FLASH ******************************/
function cargar_flash($nom,$tam,$folder,$postnombre,$rutatemp){

	if ($nom == ""){
		$url="";
		return $url;
	}
        
        $file_extension = strtolower(substr(strrchr($nom,"."),1));
        
	$url =$postnombre.'.'.$file_extension; 		// creo el nombre del archivo en base al nombre del usuario
	$folder="../".$folder;
        
        
        
	if($file_extension=="swf"){		

        
		$ruta=$folder.$url;
		if(move_uploaded_file($rutatemp,$ruta))
		{
                    return $url;
		}
        }
	else {
		$_SESSION["cargarpublicidad"] = "extensiones";
		}
}






################################################FUNCION CARGAR IMAGENES ##########################################################
function cargar_archivo($nom,$tam,$folder,$postnombre,$rutatemp,$width,$height,$salto){
	
	if ($nom == ""){
		$url="";
		return $url;
		}
        
        
	$file_extension = strtolower(substr(strrchr($nom,"."),1));	//compruebo si las características del archivo son las que deseo
	$url =$postnombre.".".$file_extension; 		// creo el nombre del archivo en base al nombre del usuario
	$folder=$salto.$folder;
	
                        
        if(preg_match('/(gif|png|jpg|jpeg)/',$file_extension)){
		#echo "Estoy dentro de extensiones esta es laruta".$ruta;
  		
		
		$ruta=$folder.$url;
		if(move_uploaded_file($rutatemp,$ruta))
		{
			$tamano = GetImageSize($ruta);

    		   		if($tamano[0]> $width){

      		 			if($tamano[1]> $height){
    	    			/*begin: dimensionar imagen*/

							
							switch( $file_extension ) {

							case 'gif':
							$imagen_src = imagecreatefromgif("$ruta");
							break;

							case 'jpg':
							$imagen_src = imagecreatefromjpeg("$ruta");
							break;
							
							case 'png':
							$imagen_src=imagecreatefrompng("$ruta");
							break; 	

				  			}
		  					//Con imagecreatefrom* lo que hacemos es crear una nueva imagen desde la url absoluta de la imagen que queremos y nos devuelve el identificador a esa nueva imagen creada.

							$imagen_dst = @imagecreatetruecolor($width,$height);
							//creamos una nueva imagen con tru color

							if ( empty($imagen_dst) ) {
						 		//esto es por si no esta definida la true color
								$imagen_dst = imagecreate($width,$height);
							}


							imagealphablending($imagen_dst, false);
							//le seteamos el modo de blending a la imagen
							//(para mejorar la calidad de la imagen que vamos a crear)


							imagecopyresampled($imagen_dst,$imagen_src,0,0,0,0,$width,$height,imagesx($imagen_src),imagesy($imagen_src));


							imagejpeg($imagen_dst,$ruta);   //creamos la imagen nueva
							imagedestroy($imagen_src);    //liberamos las imagenes viejas
							imagedestroy($imagen_dst);

    		 		   } //fin del if del tamaño
  	    			}//fin del if de tamaño
			
		$_SESSION["errorcargararchivo"] = "cargo";
	    return $url;
		} 
		else {
			$_SESSION["errorcargararchivo"] = "permiso";
			$url=0;
			return $url;
		}
		
	
	}
	else {
		$_SESSION["errorcargararchivo"] = "extensiones";
		$url=0;
		return $url;
		}
}

###################################################/FUNCION CARGAR IMAGENES#####################################################



###########ALimpia el tag <p> Generado por el Editor tinymce###########################################
#esta funcion es para colocar la noticia en portada y sacar el salto de linea que genera el tag <p>
function limpiar_parr($var){
			$var = str_replace("<p>", "", $var);
			$var = str_replace("</p>", "", $var);
			return $var;
						
}
#######################################################################################################


#########################################SEGURIDAD####################################################
function cleanxss($tag){
$tag=str_replace("nbsp;", "", $tag);	
$tag=strip_tags($tag,'<strong><em><p>');	
return $tag;	
	
}

function sqlint($var){
	$var = (int)$var;
	return $var;
}

function sqlstring($var){
	$var = mysql_real_escape_string($var);	
	return $var;
}

function pass_cript($pass){#hash seguro donde genero 3 veces el mismo
  for($i=0;$i <3;$i++){
  $pass=md5($pass);
  }
  return $pass;
 }
 
 
 function make_token() { #Funcion generadora de Token para impedir crsf
	return sha1( md5 ( microtime() . "ZamBonetSistemas" ) );
}
 

 

##############################/SEGURIDAD###############################################################

######------------        PUBLICIDADES      ------------########

 function getAdvertisement($ubicacion,$w,$h){

$conpub = mysql_query("SELECT * FROM `advertisement` where id='$ubicacion'");


if( mysql_num_rows($conpub) != 0){

$publicidad = mysql_fetch_array($conpub);

    $vec=explode('.',$publicidad[url]);
    $ext = $vec[1];
    
    if($ext == 'swf'){

        echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="'.$w.'px" height="'.$h.'px">
  <param name="movie" value="'.$publicidad[folder].$publicidad[url].'" />
  <param name="quality" value="high" />
  <embed src="'.$publicidad[folder].$publicidad[url].'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'.$w.'px" height="'.$h.'px"></embed>
</object>';
        
        
    }else{
        if($publicidad['href']==' '){
            $return= '<img width="'.$w.'px" height="'.$h.'px" src="'.$publicidad[folder].$publicidad[url].'">';
        }else{
            $return= '<a href="http://'.$publicidad[href].'" target="_blank" ><img width="'.$w.'px" height="'.$h.'px" src="'.$publicidad[folder].$publicidad[url].'"></a>';
        }//fin de pregunta si hay enlace
    }
}
else{
$return= '<img width="'.$w.'px" height="'.$h.'px" src="images_advertisement/generic.png">';
}


return $return;

}

//Fechasssssssssssss

function cambiarFechaBase($fecha){ 
    list($anio,$mes,$dia)=explode("-",$fecha); 
    return $dia."/".$mes."/".$anio; 
}  

function cambiarFechaMostrar($fecha){ 
    list($dia,$mes,$anio)=explode("/",$fecha); 
    return $anio."-".$mes."-".$dia; 
}  


function sqlselect($tabla,$where){
  	$sql='SELECT * FROM '.$tabla.' WHERE '.$where;
  	$res=mysql_query($sql);
  	$data=mysql_fetch_array($res);
	if(mysql_num_rows($res)>0){
	    $yes=1;
	}else{
		$yes=2;
	}

    return array ($yes,$data);
}

function sqlselect2($tabla,$where){
	if($where==''){
	   $where=1;
	}
	
	$sql='SELECT * FROM '.$tabla.' WHERE '.$where;  	
	$res=mysql_query($sql);

	if(mysql_num_rows($res)>0){
		if(mysql_num_rows($res)==1){
			//echo "es igual a una fila";
			$data=mysql_fetch_array($res);
		}
		else{
			//echo "es igual a n fila";
			while($r=mysql_fetch_array($res)){
				$data[]=$r;
			}
		}
	}
	else{
		$data=null;
	}

    return $data;
}

?>