<?php 
$usuario = $_GET['u'];
$password = $_GET['p'];

$conexion = new mysqli('localhost','root','','chat_apps2017');
$checklogin = "SELECT * FROM contactos WHERE
				usuarioContacto = '$usuario' AND passwordContacto = '$password'";
$resultados = $conexion->query($checklogin);

if (mysqli_num_rows($resultados)>0) {
	$r = $resultados->fetch_object();
	echo $r->idContacto;
}else{
	echo "0";
}

?>