<?php 
$idEntrante = $_GET['idE'];
$idSaliente = $_GET['idS'];

$conexion = new mysqli('localhost','root','','chat_apps2017');

$cargarMensajes = "SELECT * FROM mensajes WHERE (idSaliente = $idSaliente AND idEntrante = $idEntrante) OR (idSaliente = $idEntrante AND idEntrante = $idSaliente) ORDER BY idMensaje ASC";

$cargarDatos = "SELECT * FROM contactos WHERE idContacto = $idEntrante";

$mensajes = $conexion->query($cargarMensajes);
$contactos = $conexion->query($cargarDatos);

$contacto = contactos->fetch_object();
$arreglo = array();

while ($mensaje = $mensajes->fetch_object()) {
	
	if ($mensaje->idSaliente == $$idSaliente) {
		$lado ="saliente";

	}else{
		$lado = "entrante";
	}

	array_push($arreglo, array(
		'mensaje'=>$mensaje->mensaje.
		'lado'=>$lado
	));


	}
array_push($arreglo,array(
'nombre'=> $contacto->nombreContacto,
'foto'=>$contacto->fotoContacto
));
echo json_encode($arreglo);

 ?>