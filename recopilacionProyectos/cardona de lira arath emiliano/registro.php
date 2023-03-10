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
            Introduce tus apellidos.
        </p>
        <input type="text" placeholder="Introduce tus apellidos aqui"> 
        <p>
            Introduce tus nombres.
        </p>
        <input type="text" placeholder="Introduce tus nombres aqui"> 
        <p>
            Marca tu fecha de nacimiento para autorizar el registro.
        </p>
        <input type="date" min="1950-12-31" max="2022-12-31">
        <br><br>
        <!-- Boton para seguir o regresar -->
        <p>
            PRECIONA El BOTON DE ABAJO PARA CAPTURAR TUS DATOS Y CONTINUAR
        </p>
        <a href="registro2.php"><button> PRECIONA AQUI</button></a>
        <br><br>
        <p><a href="index.php">Regresa</a> a la pagina principal.</p>

    </div>



</body>
</html>