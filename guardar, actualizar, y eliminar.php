<?php
require "conan.php"
function actualizar(){
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $precio = (float)$_POST['precio'];
    $descripcion = $_POST['descripcion']
    $añoz = (int)$_POST['añoz']
    $imagen = $_POST['imagen']


    if(empty($nombre)|| empty($modelo) || empty($precio) || empty($añoz) || empty($descripcion) || empty($imagen)){
    die("todos los campos son obligatorios");
    }


    $consulta = $conexion->prepare("INSERT INTO productos (nombre, modelo, precio, descripcion, añoz, imagen) VALUES (:nombre, :modelo, :precio, :añoz, :descripcion, :imgen)");
    $consulta -> execute([
        ':nombre' => $nombre,
        ':modelo' => $modelo,
        ':precio' => $precio,
        ':descripcion' => $descripcion,
        'añoz' => $añoz,
        'imagen' => $imagen

    ]);
    header("Location: index2.php?lol=datosactualizados");
}
function guardar(){
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $precio = (float)$_POST['precio'];
    $descripcion = $_POST['descripcion']
    $añoz = (int)$_POST['añoz']
    $imagen = $_POST['imagen']


    if(empty($nombre)|| empty($modelo) || empty($precio) || empty($añoz) || empty($descripcion) || empty($imagen)){
    die("todos los campos son obligatorios");
    }


    $consulta = $conexion->prepare("INSERT INTO productos (nombre, modelo, precio, descripcion, añoz, imagen) VALUES (:nombre, :modelo, :precio, :añoz, :descripcion, :imgen)");
    $consulta -> execute([
        ':nombre' => $nombre,
        ':modelo' => $modelo,
        ':precio' => $precio,
        ':descripcion' => $descripcion,
        'añoz' => $añoz,
        'imagen' => $imagen

    ]);
    header("Location: index2.php?pol=datosactualizados");
}
function eliminar(){
    $id = $_GET["id"] ?? null;

$consulta = $conexion ->prepare("DELETE FROM productos WHERE id = :id ");
$consulta -> execute ([
   ':id' => $id 
]);

header("Location: index2.php?pos=dato eliminado ");
}
?>