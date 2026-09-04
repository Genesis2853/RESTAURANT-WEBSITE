<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "formulario_reservacion";

$connection = mysqli_connect($host,$user,$pass,$bd);


	if(isset($_POST['boton_sumit'])){
		
		$fecha = $_POST['FECHA_RESERVA'];
$hora = $_POST["HORA_RESERVA"];
$n_clientes = $_POST["N°_COMENSALES"];
$nombre = $_POST["NOMBRE_CLIENTE"];
$apellido = $_POST["APELLIDO_CLIENTE"];
$email = $_POST["CORREO_CLIENTE"];
$telefono = $_POST["TLF_CLIENTE"];
$comentario = $_POST["COMENTARIO_CLIENTE"];
$condicion = $_POST["ACEPTACION_TERMINOS"];
		
		$insertarDatos= "INSERT INTO datos_cliente_reserva VALUES ('','$fecha','$hora','$n_clientes','$nombre','$apellido','$email','$telefono','$comentario','$condicion')";
		
		$ejecutarInsertar= mysqli_query($connection,$insertarDatos);
	}

?>