<?php
	$usuario = $_POST['usuario'];
	$pass = $_POST['password'];

//conxetion database
	$conection = mysqli_connect('localhost', 'root', '','bdprueba');
$consulta = "SELECT * FROM usuarios WHERE usuario ='$usuario' and clave='$pass'";
$resul = mysqli_query($conection,$consulta);

$filas = mysqli_num_rows($resul);
if($filas>0){
	header("location:bienvenido.html");
}
else{
	echo "Error en la autenticacion";
}
mysqli_free_result($resul);
mysqli_close($conection);