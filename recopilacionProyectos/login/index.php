<?php
// Conectarse a la base de datos
$mysqli = new mysqli("localhost", $username, $password, $database);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_1";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";

// Agregar datos a la tabla
$sql = "INSERT INTO tu_tabla (campo1, campo2, campo3)
VALUES ('valor1', 'valor2', 'valor3')";

if (mysqli_query($conn, $sql)) {
    echo "Datos agregados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>