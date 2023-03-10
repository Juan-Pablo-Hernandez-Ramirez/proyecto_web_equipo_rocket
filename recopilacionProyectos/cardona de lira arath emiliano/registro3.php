<!-- tipo html 5-->
<!DOCTYPE html>
<html lang="es">
        <!-- Encabezado -->
<head>
    <!-- RECURSOS Y TITULO -->
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="Styles/Styles.css">

</head>
<!-- Cuerpo -->
<body>
        <!-- Creo un div para crear un espacio para desarrollar el contenido y cargar recursos css -->
    <div class="form">
        <!-- tema de la pagina -->
        <h2>♠ CREA TU PERFIL ♠</h2>
        <!-- Cuestionario de registro-->
        <p>Completa las preguntas para crear tu registro.</p>
        <p>
        Escribe un correo para guardar tu informacion.
        </p>
        <input type="email" placeholder="Introduce tu email aqui">
        <p> 
            Ingrese su numero de telefono para guardar tu informacion.
        </p>
        <input type="text" placeholder="Introdusca su numero de telefono">
        <p>
            Introduce una contraseña de registro.(no te olvides de tu contraseña)
        </p>
        <input type="password" minlength="10" maxlength="10" placeholder="Introduce tu contraseña">
        <p>
            Introduce tu contraseña nuevamente para verificar.
        </p>
        <input type="password" minlength="10" maxlength="10" placeholder="Introduce tu contraseña">
        <br><br>
             <!-- Boton para crear usuario -->
        <p>
            PRECIONA El BOTON DE ABAJO PARA CREAR TU USUARIO
        </p>
        <a href="index.php"><button> CREAR USUARIO</button></a>
        <br><br>
    </div>
</body>
</html>