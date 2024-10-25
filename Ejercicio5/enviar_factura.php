
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "factura";
// Creo conexión
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

// Verifico la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$primer_nombre = $_POST['primer-nombre'];
$segundo_nombre = $_POST['segundo-nombre'];
$primer_apellido = $_POST['primer-apellido'];
$segundo_apellido = $_POST['segundo-apellido'];
$direccion = $_POST['direccion'];
$genero = $_POST['genero'];
$ciudad = $_POST['ciudad'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Preparar la consulta SQL para la inserción de datos
if(isset($_POST["btn-enviar-factura"]))	
$sql = "INSERT INTO tu_tabla (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, direccion, genero, ciudad, cedula, telefono, correo, contraseña)
VALUES ('$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$direccion', '$genero', '$ciudad', '$cedula', '$telefono', '$correo', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
