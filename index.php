<?php
session_start()
require "conan.php"
require "auth.php"
$resultado = $conexion -> query("SELECT * FROM usuarios ")
var_dump($_SESSION)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShXfiKDeThA77uwiuNPgGjvJNPDRUpYBwhDVCu_dZ_fQ&s=10" type="image/x-icon">
    <title>rodados del sudeste</title>
</head>
<body>
    <h1>bienvenido a rodados sudeste</h1>
<div class = "body">
<div class ="container">
    <h2>log in</h2>
    <form action="auth.php" method = "POST" <?php guardar_usuarios() ?>>
        <label for="nombre">nombre</label>
        <input type="text" placeholder= "nombre">
        <label for="nombre">contraseña</label>
        <input type="password" placeholder= "contraseña">
        <label for="email">correo electronico</label>
        <input type="email" placeholder= "e-mail">
        <button type ="submit" class ="btn-submit">x</button>
    </form>
</div>

<div class ="container">
     
    <h2> sign in</h2>
    <form action="auth.php" method = "POST"<?php iniciarsesion() ?>>
        <label for="email">correo electronico</label>
        <input type="email"  placeholder="correo electronico">
        <label for="nombre">contraseña</label>
        <input type="text" placeholder ="contraseña">
        <button type="submit" class ="btn-submit">x</button>
    </form>
    
</div>
<!-- lo mas probable es que no funcione pero me veo con fe de que funcione. no me acurdo de como hacer para que la funcion  se ejecute
-->
</div>
</body>
</html>