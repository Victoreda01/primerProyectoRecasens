<?php
 
 include_once '../db/database.php';
 session_start();
 
if (isset($_POST['login'])) {

    $conn = Database::conexion();

    $user = $_POST['username'];
    $pass = $_POST['password'];
 
    $query = $conn->prepare("SELECT * FROM users WHERE nombre_user=?");
    $query->bind_param("s",$user);
    $query->execute();
 
    $aaaa = $query->get_result();
    $result = $aaaa->fetch_assoc();

 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($pass, $result['password'])) {
            $_SESSION['id_user'] = $result['id_user'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
            header("Location: http://primerproyectorecasens.com/index.php");
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/hoja_estilo.css">
</head>
<body>
<form method="post" action="" name="signin-form" class="formReg">
    <div class="form-element">
        <label class="lReg">Username</label>
        <input type="text" class="iReg" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label class="lReg">Password</label>
        <input type="password" class="iReg" name="password" required />
    </div>
    <button type="submit" class="bReg" name="login" value="login">Log In</button>
</form>
</body>
</html>
