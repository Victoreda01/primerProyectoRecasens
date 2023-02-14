
<?php 
require_once('../modelo/productos.php');
require_once('../modelo/pedidos.php');
require_once('listaProds.php');
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
            
            }else{
            $pedido->sumaCantidad(1);
            $existe = true;
            }
        }
       }
       echo "<pre>",var_dump($prodId),"</pre>";
       

    if(!$existe){
        
        $prodSel = new pedido($listaProds[$pos]);
        array_push($_SESSION['Sel'],$prodSel);
        echo "Objeto Inexistente, Se ha Creado";
    }

    if (isset($_POST['addCarta'])) {
        header("Location: http://primerproyectorecasens.com/views/carta.php");
    }else{
        header("Location: http://primerproyectorecasens.com/views/carrito.php");
    }
?>