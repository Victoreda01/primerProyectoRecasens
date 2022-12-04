<?php 
require_once('productos.php');
require_once('pedidos.php');
require_once('../config/listaProds.php');
session_start();


    
    if (!isset($_SESSION['Sel'])) {
        $_SESSION['Sel'] = array(); 
    }

    $prodId = $_POST['idprod'];
    $pos = $_POST['pos'];
    $existe = false;

    foreach ($_SESSION['Sel'] as $pedido) {
       if ($pedido->getProducto()->getIdProd() == $prodId){
            if (isset($_POST['Add'])) {
                $pedido->sumaCantidad(1);
                $existe = 1;
            }else if (isset($_POST['Del'])) {
                if ($pedido->getCantidad() == 1) {
                    unset($_SESSION['Sel'][$pos]);
                    echo "pre";
                    echo $_SESSION['Sel'][$pos];
                    echo "pre";
                    $_SESSION['Sel'] = array_values($_SESSION['Sel']);
                    $existe = 1;
                }else{
                    $pedido->sumaCantidad(-1);
                    $existe = 1;
                }
            }else{
            $pedido->sumaCantidad(1);
            $existe = 1;
        }
       }
       
    }

    if(!$existe){
        $prodSel = new pedido($listaProds[$prodId]);
        array_push($_SESSION['Sel'],$prodSel);
        echo "Objeto Inexistente, Se ha Creado";
    }


   if (isset($_POST['addCarta'])) {
        header("Location: http://localhost/primerProyectoRecasens/views/carta.php");
    }else{
        header("Location: http://localhost/primerProyectoRecasens/views/carrito.php");
    }
    

?>