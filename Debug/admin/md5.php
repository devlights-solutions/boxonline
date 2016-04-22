<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php 
require_once '../includes/includes.php';
conexionps();


$user='admin';
$password='arabes';
$password=pass_cript($password);//generar pass encriptado
	$stmt= $mysqli ->prepare("SELECT * FROM users WHERE user=? and password=?");
	$stmt->bind_param('ss',$user,$password);
	echo $stmt;
	$stmt->execute();
    $stmt->bind_result($id, $id_groups, $name, $lastname, $user, $password, $email);
	
   
if($stmt->fetch()== true) {
  session_start();
    echo ('usuario');
  echo ($user);
   echo ('pass');
  echo ($password);
 }
else{
echo ('no hay nada');
}
 ?>
</body>
</html>
