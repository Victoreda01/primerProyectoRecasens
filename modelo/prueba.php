
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/hoja_estilo.css">
		<script src="../assets/js/bootstrap.min.js"></script>
    <title>CARTA</title>
</head>
<?php 
require_once('productos.php');
require_once('pedidos.php');
require_once('../config/listaProds.php');

    session_start();

    

    foreach ($_SESSION['Sel'] as $pedido) {
        $prods = $pedido->getProducto();
        ?>
<tr>
                  <td>
                    <?=  $prods->getNProducto(); ?>
                  </td>
                  <td>
                    <button type="button" class="botonP">Modificar Pedido</button>
                  </td>
                  <td>
                  <div class="botonP">
                    <form action="http://primerproyectorecasens.com/modelo/añadirProducto.php" method="post">
                    <input type="hidden" name="pos" value=>
                      <button type="submit" name="Del">-</button> 
                      <?= $pedido->getCantidad(); ?> 
                    <button type="submit" name="Add">+</button>
                    </form>
                </div>
                </td>
                <td>
                  <?=  $prods->getPProd(); ?>€
                </td>
            </tr>

        <?php
        
     }
   
    var_dump($_SESSION['Sel']);
    //header("../views/carta.php");

?>