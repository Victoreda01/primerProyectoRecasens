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
<body>
  <?php session_start(); 
  require_once('../views/navbar.php');
  require_once('../config/listaProds.php');
  
  var_dump($_SESSION['Sel']);

  if (isset($_POST['Del'])) {
    $pedidoSel = $_SESSION['Sel'][$_POST['pos']];
    if ($pedidoSel->getCantidad() == 1) {
      unset($_SESSION["Sel"][$_POST['pos']]);
      $_SESSION['Sel'] = array_values($_SESSION['Sel']);
    }else{
      $pedidoSel->setCantidad($pedidoSel->getCantidad() - 1);
    }
  }else if (isset($_POST['Add'])) {
    $pedidoSel = $_SESSION['Sel'];
    $pedidoSel->setCantidad($pedidoSel->getCantidad() + 1);
  }
  
  ?>  
  <div class="d-flex justify-content-end align-items-right">
  <button class="mPedidos align-self-right">Mis Pedidos</button>
  </div>
  <div class="d-flex justify-content-center align-items-center">
  
  <table>
  <tr>
    <th colspan="4">

      <?php 
        
        $listaIds = $_SESSION['Sel'];?>
        
      <h6>Patatas</h6>
      <hr>
</th>
</tr>
      
      <?php
      $pos = 0; 
      $productos = $_SESSION['Sel'];
      
      
      var_dump($productos);
      foreach ($listaPatatas as $pedido) {
          if (in_array($prods->getIdProd(),$listaIds)) {?>
            <tr>
                  <td>
                    <?=$prods->getNProducto();?>
                  </td>
                  <td>
                    <button type="button" class="botonP">Modificar Pedido</button>
                  </td>
                  <td>
                  <div class="botonP">
                    <form action="http://primerproyectorecasens/views/carrito.php" method="post">
                    <input type="hidden" name="pos" value=<?=$pos++?>>
                      <button type="submit" name="Del">-</button> 
                      <?= $prods->getCantidad();?> 
                    <button type="submit" name="Add">+</button>
                    </form>
                </div>
                </td>
                <td>
                  <?=$prods->getPProd();?>€
                </td>
            </tr>
         <?php }
        }
      ?>
    </table>
    </div>

  <div class="d-flex justify-content-center align-items-center">
      
      <table>
  <tr>
    <th colspan="4">

      <?php 
        
        $listaIds = $_SESSION['Sel'];?>
        
      <h6>Bocatas</h6>
      <hr>
</th>
</tr>
      <?php foreach ($listaBocatas as $prods) {
          if (in_array($prods->getIdProd(),$listaIds)) {?>
            <tr>
                  <td>
                    <?=$prods->getNProducto();?>
                  </td>
                  <td>
                    <button type="button" class="botonP">Modificar Pedido</button>
                  </td>
                  <td>
                  <div class="botonP">
                    <form action="http://localhost/primerProyectoRecasens/views/carrito.php" method="post">
                    <button type="submit" name="Del">-</button> 
                      <?php /* $prods->getCantidad(); */?> 
                    <button type="submit" name="Add">+</button>
                    </form>
                </div>
                </td>
                <td>
                  <?=$prods->getPProd();?>€
                </td>
            </tr>
         <?php }
        }
      ?>
    </table>
    </div>
    <div class="d-flex justify-content-center align-items-right">
  <button class="mPedidos align-self-right">Comprar</button>
  </div>
</body>
</html>
		