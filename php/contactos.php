<?php
	//OBTENER CONTACTOS DE LA BD
	//CREAR CADENA DE CONEXIÓN
	$conexion = new mysqli('localhost','root','','chat_apps2017');
	//CREAR LA PETICIÓN
	$playeras = "SELECT * FROM contactos WHERE idCategoria = 1";
	//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
	$respuesta = $conexion->query($playeras);
	//HACER ARREGLO Y VOLVERLO JSON
	$arreglo = array();
	while ($playera = $respuesta->fetch_object()) {
		array_push($arreglo, array(
			"foto"=>$playera->fotoContacto,
			"nombre"=>utf8_decode($playera->nombreContacto),
			"estado"=>$playera->estadoContacto,
			"id"=>$playera->idContacto
		));
	}
	//IMPRIMIR LA RESPUESTA EN JSON
	echo json_encode($arreglo);
?>