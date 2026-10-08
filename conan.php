<?php
$servidor ="localhost";
$usuarios = "root";
$clave = "";
$db = "rodados sudeste";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$db;charset=utf8",
    $usuarios,
    $clave
    );
    $conexion ->setAttribute(PDO ::ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
    $conexion ->setAttribute(PDO :: ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    }catch(PDOException $a){
        die("error de conexion". $a -> getMessage());
    }
?>
<!--profe ayuda -->