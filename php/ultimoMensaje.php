<?php 

$idEntrante = $_GET['idE'];
$idSaliente = $_GET['idS'];
$ultimo = $_GET['ultimo'];

$conexion = new mysqli('localhost','root','','chat_apps2017');

$verificarUltimo = "SELECT * FROM mensajes WHERE (idEntrante = $idEntrante AND idSaliente = $idSaliente) OR (idEntrante = $idSaliente AND idSaliente= $idSaliente)";


$mensajes = $conexion->query($verificarUltimo);
$cantidad = mysqli_num_rows($mensajes);
if ($cantidad>ultimo) {
	mensaje = mensajes->fetch_object();
	if ($mensaje->idSaliente == $idSaliente) {
		$lado = "saliente";
	}else{
		$lado = "entrante";
	}
	$arreglo = array(
			'nuevo'=> 'si',
			 'lado'=>'')
}
 ?>