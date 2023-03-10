<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="styles/style.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <title>Registrate</title>

    </head>
    <body>
        <?php
            // Conectarse a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tu_base_de_datos";

            $conn = mysqli_connect($servername, $username, $password, $dbname,3307);
            // Verificar la conexión
            if (!$conn) {
                die("Conexión fallida: " . mysqli_connect_error());
            }
            echo "Conexión exitosa,";
            // Agregar datos a la tabla
            $sql = "INSERT INTO tu_nueva_tabla (apaterno, amaterno, nombre, nacimiento, pais, estado, municipio, telefono, correo, contraseña)
            VALUES (apaterno, amaterno, nombre, nacimiento, pais, estado, municipio, telefono, correo, contraseña)";

            if (mysqli_query($conn, $sql)) {
                echo "Datos agregados correctamente";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        ?>
        <div class="fond">
        <form action="tu_archivo.php">
             <center><h1>Registrate</h1> </center>
             <center><h2>Apellido Paterno</h2> </center>
            <center><input type="text" name="apaterno"></center>
             <center><h2>Apellido Mateno</h2> </center>
             <center><input type="text" name="amaterno" > </center>
             <center><h2>Nombre(s)</h2> </center>
            <center><input type="text" name="nombre"></center>
             <center><h2>Fecha de nacimiento</h2></center> 
             <center><input type="date" name="nacimiento" > </center>
             <center><h2>Pais</h2> </center>
             <center><select class="controls" name="pais"></center>
                 <option  >Alemania</option>
                 <option  >Canadá</option>
                 <option  >Estados Unidos</option>
                 <option  >Japón</option>
                 <option  selected>México</option>
             </select>
 
             <center> <h2>Estado</h2> </center>
             <center><select class="controls" name="estado"></center>
                 <option  selected> Aguascalientes</option>
                 <option  > Baja California</option>
                 <option  >Baja California Sur</option>
                 <option  >Campeche</option>
                 <option  >Coahuila</option>
                 <option  >Colima</option>
                 <option  >Chiapas</option>
                 <option  >Chihuahua</option>
                 <option  >Durango</option>
                 <option  >Distrito Federal</option>
                 <option  >Guanajuato</option>
                 <option  >Guerrero</option>
                 <option  >Hidalgo</option>
                 <option  >Jalisco</option>
                 <option  >México</option>
                 <option  >Michoacán</option>
                 <option  >Morelos</option>
                 <option  >Nayarit</option>
                 <option  >Nuevo León</option>
                 <option  >Oaxaca</option>
                 <option  >Puebla</option>
                 <option  >Querétaro</option>
                 <option  > Quintana Roo</option>
                 <option  >San Luis Potosí</option>
                 <option  >Sinaloa</option>
                 <option  >Sonora</option>
                 <option  >Tabasco</option>
                 <option  >Tamaulipas</option>
                 <option  >Tlaxcala</option>
                 <option  >Veracruz</option>
                 <option  >Yucatán</option>
                 <option>Zacatecas</option>

             </select>
             <center><h2>Municipio</h2> </center>
            <center><input type="text" name="municipio"></center>
             <center><h2>Numero de Telefono</h2> </center>
             <center><input type="tel"  maxlength="10" name="telefono"> </center>
             <center><h2>Correo Electronico</h2> </center>
            <center><input type="email" name="correo"></center>
             <center><h2>Contraseña</h2> </center>
             <center><input type="password" maxlength="10" name="contraseña"> </center>
            <br>
            <div class="izquierda">
               <input type="submit" value="Registrarse" class="bot" onclick="">
            </div>
            <p>    </p>
        </div>             
    </body>
</html>