<?php 
require_once('productos.php');
require_once('pedidos.php');
require_once('../config/listaProds.php');

    session_start();
    
    if (!isset($_SESSION['Sel'])) {
        $_SESSION['Sel'] = array(); 
    }


        

foreach ($_SESSION['Sel'] as $pedido) {
    
 if (isset($_POST['Del'])) {
    $posi = $_SESSION['Sel'][$_POST['pos']];
    if ($posi->getCantidad() == 1) {
        unset($posi);
        $_SESSION['Sel'] = array_values($_SESSION['Sel']);
    }else{
        $posi->setCantidad($posi->getCantidad()-1);

    }
    
}
}
header("Location: http://localhost/primerProyectoRecasens/views/carrito.php");
 

?>