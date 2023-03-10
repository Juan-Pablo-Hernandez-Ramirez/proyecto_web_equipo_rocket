<!-- tipo html 5-->
<!DOCTYPE html>
<html lang="es">
    <!-- Encabezado -->
<head>
    <!-- RECURSOS Y TITULO -->
    <meta charset="UTF-8">
    <title>Pagina de inicio</title>
    <link rel="stylesheet" href="Styles/Styles.css">

</head>
<!-- Cuerpo -->
<body class="consumo"> 
    
    <!-- Creo un div para crear un espacio para guardar la seccion de articulos y -->
    <div class="producto">
        <!-- Titulo y carro de compras -->
        <h1>♠Lista de productos en venta♠</h1>
        <div class="carrito">
            <a href="carrito.php"><img src="images/car.png" alt=""></a>
        </div>

        <!-- Creo un menu interactivo para una rapida seleccion de producto -->
        <!-- la informacion se ordena de la siguiente forma (imagen, nombre del producto,descripcion y precio) -->
        <br>
        <!-- Clasificacion -->
        <h2>♠Tortas♠</h2>
        <br>
        <!-- Productos -->
        <button class="comida"><img src="images/menu/jam.jpg" alt=""><p>Torta de jamon.</p> <p> Bolillo con jamon, queso, cebolla y jitomate.</p> <p>Precio $25.</p></button>
        <button class="comida"><img src="images/menu/bis.jpg" alt=""><p>Torta de bistec.</p> <p>Torta de bistec con silantro(con o sin cebolla).</p> <p>Precio $35.</p></button>
        <button class="comida"><img src="images/menu/ado.jpg" alt=""><p>Torta de adobada.</p> <p>Torta de adobada(con o sin cebolla).</p> <p>Precio $35</p></button>
        <button class="comida"><img src="images/menu/bol.jpg" alt=""><p>Bolillo cun gisos .</p> <p>Bolillo con guiso a eleccion de la persona.</p> <p>Precio $28</p></button>
        <br><br>
        <!-- Clasificacion -->
        <h2>♠Tacos y más♠</h2>
        <br>
        <!-- Productos -->
        <button class="comida"><img src="images/menu/des.jpg" alt=""><p>Tacos de deshebrada.</p> <p>Taco de guisado(deshebrada).</p> <p>Precio $10</p></button>
        <button class="comida"><img src="images/menu/sal.jpg" alt=""><p>Tacos de salchicha.</p> <p>Taco de guisado(salchicha).</p> <p>Precio $10</p></button>
        <button class="comida"><img src="images/menu/dog.jpg" alt=""><p>Hot Dogs.</p> <p>Pan de hot dog con salchicha y extras.</p> <p>Precio $15</p></button>
        <button class="comida"><img src="images/menu/ham.jpg" alt=""><p>Hamburgesas.</p>Pan con carne, cebolla, tomate, lechuga, queso,etc.<p> </p> <p>Precio $35</p></button>
        <br><br>
        <!-- Clasificacion -->
        <h2>♠Bebidas♠</h2>
        <br>
        <!-- Productos -->
        <button class="comida"><img src="images/menu/lec.jpg" alt=""><p>Lechitas Santa Clara.</p> <p>Variedad de lechitas Santa Clara.</p> <p>Precio $13</p></button>
        <button class="comida"><img src="images/menu/ari.jpg" alt=""><p>Arizona.</p><p>Variedad de sabor de Arizona.</p> <p>Precio $20</p></button>
        <button class="comida"><img src="images/menu/coc.png" alt=""><p>Coca-Cola 600.</p> <p>Refesco de la marca coca-cola</p> <p>Precio $20</p></button>
        <button class="comida"><img src="images/menu/spr.jpg" alt=""><p>Sprite 600.</p><p>Refresco sprite de 600ml</p> <p>Precio $20</p></button>
        <br><br>
        <!-- Clasificacion -->
        <h2>♠Dulces♠</h2>
        <br>
        <!-- Productos -->
        <button class="comida"><img src="images/menu/pic.jpg" alt=""><p>Picafresa.</p>Goma de fresa cubierta con chile.<p> </p> <p>Precio $1</p></button>
        <button class="comida"><img src="images/menu/maz.jpg" alt=""><p>Mazapan de chocolate.</p>Mazapan con una capa de chocolate.<p> </p> <p>Precio $7</p></button>
        <button class="comida"><img src="images/menu/pri.png" alt=""><p>Galletas principe.</p>Galletas principe de la marca Marinela.<p> </p> <p>Precio $18</p></button>
        <button class="comida"><img src="images/menu/pan.jpg" alt=""><p>Pan.</p><p>Varieda de panes dulces.</p> <p>Precio $10</p></button>
        <br>
        <!-- Regreso a la pagina principal -->
        <p><a href="index.php">Regresa</a> a la pagina principal.</p>
    </div>

</body>
</html>