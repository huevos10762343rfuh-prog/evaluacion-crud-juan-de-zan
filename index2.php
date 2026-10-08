<?php 
require "conan.php"
require "guardar, actualizar, y eliminar.php"
 $resultado = $conexion ->query("SELECT * FROM productos")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShXfiKDeThA77uwiuNPgGjvJNPDRUpYBwhDVCu_dZ_fQ&s=10" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>productos rodados sudeste</title>
</head>
<body>
    <h1>ingreso de mas productos</h1>
    <form action="" method="post" <?php guardar()?> >
        <label for="nombre">ingrese el nombre del auto</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="stock">ingrese el modelo</label>
        <input type="text" name="modelo" id="modelo" required>             
        <label for="precio">ingrese el precio de su producto</label>
        <input type="number"  name="precio" id="precio" required>
        <label for="añoz">ingrese el año de su auto</label>
        <input type="number"  name="año" id="año" required>
        <label for="descripcion">ingrese la descripcion</label>
        <input type="text"  name="descripcion" id="descripcion" required>
        <label for="precio">ingrese la imagen del auto</label>
        <input type="text"  name="imagen" id="imagen" required>
        <button class="btn-submit"type="submit">enviar</button>                
    </form>
<!-- no me acuerdo como asignarle los botones a el elemento en php-->
</body>
</html>