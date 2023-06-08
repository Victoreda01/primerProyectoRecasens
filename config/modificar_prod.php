<?php
include_once('../db/database.php');
require_once '../modelo/userDAO.php';
session_start();
$modUser = new userDAO();


if (isset($_POST['saveChang'])) {

    $idUsuario = $_POST['user_id'];
    $nombreUsuario = $_POST['nombre_usuario'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $domicilio = $_POST['domicilio'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $conn = Database::conexion();
    $query = $conn->prepare("SELECT count(*) FROM users WHERE email=? and id_user != ?");
    $query->bind_param("si", $email, $idUsuario);
    $query->execute();
    $resultado = $query->get_result();
    $res = $resultado->fetch_assoc();
    if ($res["count(*)"] > 0) {
        $_SESSION['error_message'] = "El correo electrónico no es válido";
        header("Location: http://www.primerproyectorecasens.com/?c=EditPerfil");
        exit();
    } else {

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $updt = $modUser->ModUserById($idUsuario, $nombreUsuario, $apellidos, $email, $domicilio, $password_hash, $rol);
    }


    header("Location: http://www.primerproyectorecasens.com/");
}
