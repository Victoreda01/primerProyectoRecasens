
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/hoja_estilo.css">
		<script src="../assets/js/bootstrap.min.js"></script>
    <title>CARRITO</title>
</head>
<?php 
require_once('../modelo/productos.php');
require_once('../modelo/pedidos.php');
require_once('../config/listaProds.php');
session_start();
if (isset($_SESSION['Sel'])) {
  if (isset($_POST['idprod'])) {
    $prodSel = new pedido($productos[$_POST['idprod']]);
    array_push($_SESSION['Sel'], $prodSel);
  }
}else{
  $_SESSION['Sel'] = array(); 
}


?>
<body>
  <!-- Si no Hay nada en el carrito Se Muestra esto -->
<?php 
require_once('../views/navbar.php');
if (count($_SESSION['Sel'])== 0) {?>
  <div class="container bg-color1">
    <div class="container">
    <div class="NoCompra d-lg-flex justify-content-center align-items-center">
      <h2>No Se Ha Realizado Ninguna Compra..</h2>
    </div>
    </div>
  </div>
  <!-- Si Hay cosas en el carrito Se Muestra esto -->
  <?php }else{?>
  <div class="container bg-color1">
<div class="d-flex justify-content-end align-items-center ">
  <button class="mPedidos align-self-right boton mt-4">Mis Pedidos</button>
  </div>
  <div class="container NoCompra">

  <div class="container mb-5 mt-5 tCarrito">
    <?php
    /*Si la session no existe se Crea */
    if (!isset($_SESSION['Sel'])) {
      $_SESSION['Sel'] = array(); 
  }
    /* Mostramos todos los pedidos guardados en la session*/
    $pos = 0;
    $ptot = 0;
    
    foreach ($_SESSION['Sel'] as $pedido) {
        $prods = $pedido->getProducto();
        

        if(($pos == 0)){
        ?>
        
        <div class="row justify-content-center">
          <div class="col-sm-3 col-12">
            <?= $prods->getNProducto();?> 
          </div>
          <div class="col-lg-3 hd">
            <?= "Ingredientes" ?>
          </div>
          <div class="col-lg-3 hd">
          <?=  "Cantidad" ?>
          </div>
          <div class="col-lg-3 hd">
          <?=  "Precio" ?> 
          </div>
        </div>
                    
        <?php }else{
          ?>
          <div class="row">
          <div class="col-lg-3 col-sm-12">
            <?= $prods->getNProducto();?> 
          </div>
          </div>
        <?php }?>
        <div class="row justify-content-center">
          <div class="col-lg-3 col-sm-12">
          <img src="../assets/images/<?=$prods->getIdProd()?>.png" alt="<?=$prods->getNProducto()?>"  width="125px" height="125px">
          </div>
          <div class="col-lg-3 mt-5 col-sm-12">
          <button type="button" class="boton">Modificar Pedido</button>
          </div>
          <div class="col-lg-3 mt-5 col-sm-12">
          <form action="http://localhost/primerProyectoRecasens/modelo/añadirProducto.php" method="post">
                      <input type="hidden" name="idprod" value=<?=$prods->getIdProd()?>>
                      <input type="hidden" name="pos" value=<?=$pos?>>
                      <div class="botonP">
                      <button type="submit" class="boton" name="Del">-</button> 
                      <?= $pedido->getCantidad(); ?> 
                    <button type="submit" class="boton" name="Add">+</button>
                    </div>
                    </form>
          </div>
          <div class="col-lg-3 mt-5 col-sm-12">
          <?php ;  ?>
            <?=  $pedido->calculaPrecio(); ?>€
          </div>
        </div>

        <?php
        $pos++;
        $ptot += $pedido->calculaPrecio();
      }
?>
      <div class="row justify-content-center">
        <div class="col-lg-6">
        </div>
        <div class="col-lg-3 col-sm-6">
        <h4>TOTAL:</h4>
        </div>
        <div class="col-lg-3 col-sm-6">
        <h5><?= $ptot?>€</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
        </div>
        <div class="col-lg-2 col-sm-12">
        <button class="boton mt-3 compra" style="float: right;" >Comprar</button>
        </div>
      </div>

    </div>
    </div>    
  </div>
  <?php } require_once 'footer.php'; ?>
</body>
</html>