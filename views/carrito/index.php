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

<body>
  <!-- Si no Hay nada en el carrito Se Muestra esto -->
  <?php

  $pos = 0;
  if (count($_SESSION['Sel']) == 0) { ?>
    <div class="container bg-color1">

      <div class="container">
        <div class="d-flex justify-content-around ">

          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>

          <a href=<?= base_url('?c=Pedidos') ?>><button class="mPedidos boton mt-4 hd ">Mis Pedidos</button></a>
        </div>

        <div class="NoCompra d-lg-flex justify-content-center align-items-center">

          <h2>No Se Ha Realizado Ninguna Compra..</h2>
        </div>
      </div>
    </div>
    <!-- Si Hay cosas en el carrito Se Muestra esto -->
  <?php } else { ?>
    <div class="container bg-color1">
      <div class="d-flex justify-content-around ">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>


        <a href=<?= base_url('?c=Pedidos') ?>><button class="mPedidos boton mt-4 hd ">Mis Pedidos</button><a>
      </div>
      <div class="container NoCompra">

        <div class="container mb-5 mt-5 tCarrito">
          <?php

          /* Mostramos todos los pedidos guardados en la session*/

          $ptot = 0;
          foreach ($_SESSION['Sel'] as $pedido) {
            $prods = $pedido->getProducto();


            if ($pos == 0) {
          ?>

              <div class="row nom-mob">
                <div class="col-sm-3 col-12">
                  <b> <?= $prods->getNProducto(); ?> </b>
                </div>
                <div class="col-lg-3 hd">
                  <b> Ingredientes </b>
                </div>
                <div class="col-lg-3 hd">
                  <b> Cantidad </b>
                </div>
                <div class="col-lg-3 hd">
                  <b> Precio </b>
                </div>

              </div>

            <?php } else {
            ?>
              <div class="row nom-mob">
                <div class="col-lg-3 col-12 ">
                  <b><?= $prods->getNProducto(); ?> </b>
                </div>
              </div>
            <?php } ?>
            <div class="row justify-content-center tab-mob">
              <div class="col-lg-3 col-8">
                <img src="../assets/images/webp/<?= $prods->getIdProd() ?>.webp" alt="<?= $prods->getNProducto() ?>" width="125px" height="125px">
              </div>
              <div class="col-lg-3 mt-5 col-6 hd">
                <button type="button" class="boton ">Modificar Pedido</button>
              </div>
              <div class="col-lg-3 mt-5 col-12 add-mob">
                <form action=<?= base_url('config/añadirProducto.php') ?> method="post">
                  <input type="hidden" name="idprod" value=<?= $prods->getIdProd() ?>>
                  <input type="hidden" name="pos" value=<?= $pos ?>>
                  <div class="botonP">
                      <button id="minus" type="submit" class="boton" name="Del">-</button>
                    
                      <?= $pedido->getCantidad(); ?>

                      <button id="plus" type="submit" class="boton" name="Add">+</button>
                  </div>
                </form>

              </div>
              <div class="col-lg-3 mt-5 col-12 ">
                <b><?= $pedido->calculaPrecio(); ?>€</b>
              </div>
            </div>
          <?php
            $pos++;
            $ptot += $pedido->calculaPrecio();
            $_SESSION['totPed'] = $ptot;
          }
          ?>
          <div class="row justify-content-center tot-mob">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-3 col-3 ">
              <h4>TOTAL:</h4>
            </div>
            <div class="col-lg-3 col-6 pre-mob">
              <h5><b><?= $ptot ?>€</b></h5>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
            </div>
            <div class="col-lg-2 col-8 compra-mob">
              <form action=<?= base_url('config/realizarCompra.php') ?> method="post">
                <button class="boton boton-mob mt-3 compra" type="Submit" name="comp">Comprar</button>
              </form>
            </div>
          </div>


        </div>
      </div>
    </div>
  <?php } ?>
</body>

</html>