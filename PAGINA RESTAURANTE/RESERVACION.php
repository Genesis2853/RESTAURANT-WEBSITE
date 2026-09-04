<?php
	//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";


//conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al input de formulario
$fecha = $_POST["FECHA_RESERVA"];
$hora = $_POST["HORA_RESERVA"];
$n_clientes = $_POST["N°_COMENSALES"];
$nombre = $_POST["NOMBRE_CLIENTE"];
$apellido = $_POST["APELLIDO_CLIENTE"];
$email = $_POST["CORREO_CLIENTE"];
$telefono = $_POST["TLF_CLIENTE"];
$comentario = $_POST["COMENTARIO_CLIENTE"];
$condicion = $_POST["ACEPTACION_TERMINOS"];

//verificamos la conexion a base de datos
if(!$connection)
{
	echo "No se ha podido conectar con el servidor" . mysqli_error();
}
else
{
	echo "hemso conectado al servidor";
}
//indicamos el nombre de la base de datos
$datab = "formulario_reservacion";

//indicamos seleccionar a la base de datos
$db =mysqli_select_db ($connection,$datab);

if(!$db)
{
	echo ("No se ha podido encontrar la tabla");
}
else{
	echo("tabla seleccionada");
}
//insertamos datos de registro al mysql xampp, indicamos nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO datos_cliente_reserva(N°_CLIENTE,FECHA_RESERVA,HORA_RESERVA,N°_COMENSALES,NOMBRE_CLIENTE,APELLIDO_CLIENTE,CORREO_CLIENTE,TLF_CLIENTE,COMENTARIO_CLIENTE,ACEPTACION_TERMINOS)
					VALUES ('','$fecha','$hora','$n_clientes','$nombre','$apellido','$email','$telefono','$comentario','$condicion')";


$resultado = mysqli_query($connection, $instruccion_SQL);

$consulta = "SELECT * FROM datos_cliente_reserva";

$result = mysqli_query($connection, $consulta);
if(!$result)
{
	echo("no se ha podido realizar la consulta");
}
echo "<table>";

?>