
<?php

include("conexion_formulario.php");

$nombres = $_POST["nombre"];
$email   = $_POST["email"];
$sugesion= $_POST["sugesion"];
$mensaje = $_POST["mensaje"];


if(isset($_POST["btn-enviar-inquietud"]))
{
	$sqlgrabar = "INSERT INTO formulario (nombre,email,sugesion,mensaje) values ('$nombres','$email','$sugesion','$mensaje')";
	
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('¡gracias por enviarnos su inquietud!: $nombres'); window.location='index1.html' </script>";
	}else 
	{
		echo "Error: ".$sql."<br>".mysql_error($conn);
	}
}


?>