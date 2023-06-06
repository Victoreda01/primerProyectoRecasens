<?php
 
include_once '../db/database.php';
session_start();

$hoy = date("Y-m-d");
 
if (isset($_POST['register'])) {
 
    $conn = Database::conexion();

    $nUser = $_POST['nombre_user'];
    $aUser = $_POST['Apellidos'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $dom = $_POST['domicilio'];
    $fechaReg = $_POST['fecha'];
 
    $query = $conn->prepare("SELECT count(*) FROM users WHERE email=?");
    $query->bind_param("s", $email);
    $query->execute();
    $resultado = $query->get_result();
    $res = $resultado->fetch_assoc();
    if ($res["count(*)"] > 0) {
        echo '<script>alert("Este mail ya existe. Prueba a loggearte!");</script>';
        header("Location: http://primerproyectorecasens.com/views/login.php");

    }else{
        $conn2 = Database::conexion();

        $query2 = $conn2->prepare("INSERT INTO users(nombre_user,apellidos,password,email,domicilio,rol,fecha_registro,last_login) VALUES (?, ?, ?, ?, ?, 'usuario', ?, NULL)");
    
        // Crear variables adicionales por cada parámetro
        $rol = "usuario";
        $last_login = NULL;

        // Pasar las variables por referencia a bind_param
        $query2->bind_param("ssssss", $nUser, $aUser, $password_hash, $email, $dom, $fechaReg);
    
        $result = $query2->execute();

       
 
        if ($result) {
            echo '<p class="success">Te has registrado Correctamente!</p>';
             header("Location: http://primerproyectorecasens.com/views/login.php");
        } else {
            echo '<p class="error">Algo ha ido Mal!</p>';
            header("Location: http://primerproyectorecasens.com/views/register.php");
        }
    }

}
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/hoja_estilo.css">

</head>
<style>

</style>
<body>
    <div class="container">
<form method="post" action="" name="signup-form" class="formReg">
        <div class="form-element">
            <label class="lReg">Nombre Usuario</label>
            <input type="text" name="nombre_user" pattern="[a-zA-Z0-9]+" required class="iReg" />
        </div>
        <div class="form-element">
            <label class="lReg">Apellidos</label>
            <input type="text" name="Apellidos" pattern="[a-zA-Z ]+" required class="iReg" />
        </div>
        <div class="form-element">
            <label class="lReg">Password</label>
            <input type="password" name="password" required class="iReg" />
        </div>
        <div class="form-element">
            <label class="lReg">Email</label>
            <input type="email" name="email" required class="iReg" />
        </div>
        <div class="form-element">
            <label class="lReg">Domicilio</label>
            <input type="text" name="domicilio" required class="iReg" />
        </div>
        <input type="hidden" name="fecha" value="<?= $hoy; ?>">

        <button type="submit" name="register" class="bReg">Register</button>
    </form>
    </div>
</body>
</html>
