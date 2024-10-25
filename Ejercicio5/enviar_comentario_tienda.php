
<?php

include("conexion_comentario.php");

$email   = $_POST["email"];



if(isset($_POST["submit"]))
{
	$sqlgrabar = "INSERT INTO comentario (email) values ('$email')";
	
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('¡gracias por inscribirte'); window.location='tienda.html' </script>";
	}else 
	{
		echo "Error: ".$sql."<br>".mysql_error($conn);
	}
}


?>