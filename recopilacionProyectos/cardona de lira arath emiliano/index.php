<!-- tipo html 5-->
<!DOCTYPE html>
<html lang="es">
        <!-- Encabezado -->
<head>
    <!-- RECURSOS Y TITULO -->
    <meta charset="UTF-8">
    <title>incio de sesion</title>
    <link rel="stylesheet" href="Styles/Styles.css">
</head>
<!-- Cuerpo -->
<body>
    <!-- Creo un div para crear un espacio para desarrollar el contenido y cargar recursos css -->
    <div class="form">
        <!-- tema de la pagina -->
        <h2>♠ Pagina de inicio ♠</h2>
        <!-- pagina de inicio -->
        <!-- toma el nombre y contraseña del usuario e inicia sesion -->
        <p>
            Nombre de usuario
        </p>
        <input type="text" placeholder="Introduce tu nombre de usuario">
        <p>
            Contraseña
        </p>
        <input type="password" minlength="10" maxlength="10"  placeholder="Introduce tu contraseña">
        <br>
        <br>
        <a href="inicio.php"><button>Iniciar sesion</button></a>
        <br>
        <br>
        <!-- registro y recupera cuenta -->
        <p>
            ¿Perdiste tu cuenta? Recuperala <a href="recupera.php">aqui</a>.<br>
            Registrate en la pagina <a href="registro.php">aqui</a>.
            
        </p>
        <br>
    </div>
</body>
</html>