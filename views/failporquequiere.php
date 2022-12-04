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
  <?php require_once('../modelo/pedidos.php');
  require_once('../modelo/productos.php');
  session_start(); 
  require_once('../views/navbar.php');
  
  
  ?>  
  <div class="d-flex justify-content-end align-items-right">
  <button class="mPedidos align-self-right">Mis Pedidos</button>
  </div>
  <div class="d-flex justify-content-center align-items-center">
  
  <table>
  <tr>
    <th colspan="4">
        
      <h6>Patatas</h6>
      <hr>
</th>
</tr>
      
      <?php
      
      foreach ($_SESSION['Sel'] as $pedido) {
       var_dump($_SESSION['Sel'] );
            
             $existe = 1;
        
     }
     
      
      foreach ($_SESSION['Sel'] as $pedido) {

        //$prods = $pedido->getProducto();
        
          ?>
            <tr>
                  <td>
                    <?php /* $prods->getNProducto(); */?>
                  </td>
                  <td>
                    <button type="button" class="botonP">Modificar Pedido</button>
                  </td>
                  <td>
                  <div class="botonP">
                    <form action="http://primerproyectorecasens/views/carrito.php" method="post">
                    <input type="hidden" name="pos" value=<?=$pos++?>>
                      <button type="submit" name="Del">-</button> 
                      <?php $pedido->getCantidad(); ?> 
                    <button type="submit" name="Add">+</button>
                    </form>
                </div>
                </td>
                <td>
                  <?php /* prods->getPProd(); */?>€
                </td>
            </tr>
         <?php 
        }
      ?>
    </table>
    </div>

  <div class="d-flex justify-content-center align-items-center">
      
      <table>
  <tr>
    <th colspan="4">
        
    </table>
    </div>
    <div class="d-flex justify-content-center align-items-right">
  <button class="mPedidos align-self-right">Comprar</button>
  </div>
</body>
</html>
		