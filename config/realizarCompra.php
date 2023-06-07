<?php 


require_once('../db/database.php');
include_once('../modelo/productoDAO.php');
include_once('../modelo/pedidoDAO.php');
include_once('../modelo/pedidos.php');
include_once('../modelo/productos.php');

include_once('../modelo/bocatas.php');
include_once('../modelo/patatas.php');
include_once('../modelo/bebidas.php');
include_once('../modelo/tapas.php');

session_start();

    $peDAO = new pedidoDAO();
    $listaPeds = array();
    $idUsuario = $_SESSION['id_user'][0];
    $metodoPago = "Visa";
    $totalPedido = $_SESSION['totPed'];
    $fechaPago = date("Y-m-d");
    $ordenPedido = "";
    $productos = $_SESSION['Sel'];

    $peDAO->añadirPedido($idUsuario, $metodoPago, $totalPedido, $fechaPago, $ordenPedido, $productos);

    if (isset($_POST['comp'])) {
    $totProds = json_encode($_SESSION['Sel']);
    setcookie("pedido", $totProds, time() + (86400 * 365), "/");
    }



     $_SESSION['Sel'] = array();  
    header("Location: http://www.primerproyectorecasens.com/"); 


?>