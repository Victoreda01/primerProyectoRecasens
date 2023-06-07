
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



$pDAO = new productoDAO();
$listaProds = array();
$listaProds = $pDAO->CargarProductos();
session_start();

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
        var_dump($listaProds[$pos]);
    }
    

    if (isset($_POST['addCarta'])) {
        header("Location: http://www.primerproyectorecasens.com/?c=carta");
    }else{
        header("Location: http://www.primerproyectorecasens.com/?c=carrito");
    }
?>