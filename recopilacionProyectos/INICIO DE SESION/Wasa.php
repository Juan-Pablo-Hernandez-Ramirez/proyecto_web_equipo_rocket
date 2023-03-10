<?php
// Conectarse a la base de datos
$servername = "localhost";
$port = "3307";
$username = "root";
$password = "";
$dbname = "pancho";

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "";
// Agregar datos a la tabla
$sql = "INSERT INTO tu_tabla (campo1, campo2, campo3)
VALUES ('valor1', 'valor2', 'valor3')";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles.css"> <!-- Archivo CSS externo para estilizar la página -->
  </head>
  <body>
    <div class="login-box"> <!-- Div para contener el formulario de inicio de sesión -->
      <h2>Iniciar Sesión</h2> <!-- Encabezado principal -->
      <form> <!-- Formulario de inicio de sesión -->
        <br></br><br></br>
        <label for="usuario">Usuario:</label> <!-- Etiqueta y campo de entrada de texto para el nombre de usuario -->
        <input type="text" id="usuario" name="usuario" required> <!-- Campo de entrada de texto para el nombre de usuario -->
        <label for="contrasena">Contraseña:</label> <!-- Etiqueta y campo de entrada de texto para la contraseña -->
        <input type="password" id="contrasena" name="contrasena" required> <!-- Campo de entrada de texto para la contraseña -->
        <h3 style="text-align:center"><a href="./RECUPERAR CONTRASEÑA/RECUPER.html">¿Se te olvido la contraseña?</a></h3>
        <input type="button" value="Iniciar Sesión" onclick="window.location.href='./HOME/HOME.html'" /> <!-- Botón para enviar el formulario -->
        <h3 style="text-align:center"><a href="./REGISTRO/REGISTRO.html">¿No tienes usuario?</a></h3> <!-- Enlace para dirigirse a la página de registro, centrado mediante estilo en línea -->
      </form>
    </div>
  </body>
</html>