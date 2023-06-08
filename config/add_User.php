<?php

require_once('../db/database.php');
require_once('../modelo/userDAO.php');
session_start();
$uDAO = new userDAO();

if (isset($_POST['addUSR'])) {

    $nombreUsuario = $_POST['nombre_usuario'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $domicilio = $_POST['domicilio'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $fecha = date('Y-m-d');

    $conn = Database::conexion();
    $query = $conn->prepare("SELECT count(*) FROM users WHERE email=? and id_user != ?");
    $query->bind_param("si", $email, $idUsuario);
    $query->execute();
    $resultado = $query->get_result();
    $res = $resultado->fetch_assoc();
    if ($res["count(*)"] > 0) {
        $_SESSION['error_message'] = "El correo electrónico no es válido";
        header("Location: http://www.primerproyectorecasens.com/?c=Users&a=Añadir");
        exit();
    } else {
        var_dump("holi");
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $aUsr = $uDAO->añadirUser($nombreUsuario, $apellidos, $email, $password_hash, $fecha, $domicilio, $rol);
    }
    header("Location: http://www.primerproyectorecasens.com/?c=Users");
}
