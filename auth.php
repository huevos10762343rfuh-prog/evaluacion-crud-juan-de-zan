<?php
//autenticador de contraseñas y usuarios
require "conn.php"

function esadmin(){
    if (isset($_SESSION['rango'] === true)){
        return true
    }else{
        return false
        header("location index2.php? error = 'no tenes autorizacion'")
    }
}
function guardar_usuarios(){
    $nombre = $_POST['nombre']
    $email = $_POST['email'];
    $password = $_POST['password'];

if(empty($email)|| empty($password) ||  empty($nombre)){
    die("todos los campos son obligatorios");
}

$passwordhash = password_hash($password, PASSWORD_DEFAULT);

$consulta = $conexion->prepare("INSERT INTO usuarios (nombre, email, password,) VALUES (:nombre,:email ,:password)");
$consulta -> execute([
    ':nombre' => $nombre,
    ':password' => $password,
    ':email' => $email
]);
header("Location: index2? lol= se subio correctamente ");
}

function iniciarsesion(){
    session_start();

$email= trim($_POST['nombre'] ?? '');
$password = $_POST['password'] ?? '';

if(empty($email) || empty($password)){
    die("todos los campos son obligatorios");
}

$estd = $conexion->prepare('SELECT * FROM usuarios WHERE email = ?');
$estd->execute([$email]);
$user = $estd->fetch();

if (!$user) {
    die("Usuario o contraseña incorrectos");
}

if (password_verify($password, $user["contraseña"])){
    $_SESSION["email"] = $nombre;
    $_SESSION["rank"] = $user['rank'];
    header("Location: pagina.php");
    exit;
} else {
    header("Location: index2.php?error=1");
    exit();
}
}
?>