<<<<<<< HEAD
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
        echo $pos;
            if (isset($_POST['Add'])) {
                echo "pre";
                var_dump($_SESSION['Sel'][$pos]);
                echo "pre";
                $pedido->sumaCantidad(1);
                $existe = true;
            }else if (isset($_POST['Del'])) {
                if ($pedido->getCantidad() == 1) {
                    unset($_SESSION['Sel'][$pos]);
                    echo "pre";
                    echo $_SESSION['Sel'][$pos];
                    echo "pre";
                    $_SESSION['Sel'] = array_values($_SESSION['Sel']);
                    $existe = true;
                }else{
                    echo "pre";
                    var_dump($_SESSION['Sel'][$pos]);
                    echo "pre";
                    $pedido->sumaCantidad(-1);
                    $existe = true;
                }
            }else if(isset($_POST['comp'])){
                
                setcookie("mispedidos",$_SESSION['Sel'],"/");
                session_destroy();
                header("http://primerproyectorecasens.com");
            }else{
            $pedido->sumaCantidad(1);
            $existe = true;
            }
        }
       }
       

    if(!$existe){
        $prodSel = new pedido($listaProds[$prodId]);
        array_push($_SESSION['Sel'],$prodSel);
        echo "Objeto Inexistente, Se ha Creado";
    }

  if (isset($_POST['addCarta'])) {
        header("Location: http://primerproyectorecasens.com/views/carta.php");
    }else{
        header("Location: http://primerproyectorecasens.com/views/carrito.php");
    } 

=======
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
    

>>>>>>> e64ba5eb38fe53a35b58ad534318d2ad664db78e
?>