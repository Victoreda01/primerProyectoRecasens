<?php 
require_once('productos.php');
require_once('pedidos.php');
require_once('../config/listaProds.php');

    session_start();
    if (!isset($_SESSION['Sel'])) {
        $_SESSION['Sel'] = array(); 
    }

    $prodId = $_POST['idprod'];
    $existe = false;
;
    foreach ($_SESSION['Sel'] as $pedido) {
       if ($pedido->getProducto()->getIdProd() == $prodId){
            $pedido->sumaCantidad(1);
            $existe = 1;
       }
    }

    if(!$existe){
        $prodSel = new pedido($listaProds[$prodId]);
        array_push($_SESSION['Sel'],$prodSel);
    }
    var_dump($_SESSION['Sel']);
    //header("../views/carta.php");

?>