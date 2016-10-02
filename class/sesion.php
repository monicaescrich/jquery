<?php
session_start();
if(isset($_GET['idcliente']) && isset($_GET['nombre']) && isset($_GET['correo']))
{
	$_SESSION["idcliente"]=$_GET['idcliente'];
	$_SESSION["nombre"]=$_GET['nombre'];
	$_SESSION["correo"]=$_GET['correo'];
	header("Location:../ecomputer/");
	exit();
}
else
{
	header("Location:../");
	exit();
}
?>