<?php 
require_once('productos.php');
require_once('pedidos.php');
require_once('../config/listaProds.php');
session_start();


    
    if (!isset($_SESSION['Sel'])) {
        $_SESSION['Sel'] = array(); 
    }

    if (isset($_POST['comp'])) {
    $totProds = json_encode($_SESSION['Sel']);
    setcookie("pedido", $totProds, time() + (86400 * 365), "/");
    }

    session_destroy();
    header("Location: http://primerproyectorecasens.com");


?>