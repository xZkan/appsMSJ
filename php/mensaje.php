<?php
$idSaliente = $_GET['idS'];
$idEntrante = $_GET['idE'];
$mensaje = $_GET['msj'];

$conexion = new mysqli('localhost','root','','chat_apps2017');
$insertarMensaje = "INSERT INTO mensajes (idSaliente, idEntrante, mensaje)
					VALUES ($idSaliente, $idEntrante, '$mensaje')";

$conexion->query($insertarMensaje);

?>