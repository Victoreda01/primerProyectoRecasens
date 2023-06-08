<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/hoja_estilo.css">
  <script src="../assets/js/bootstrap.min.js"></script>
  <title>PEDIDOS</title>
</head>

<body>
  <?php

  $peDAO = new pedidoDAO();
  $listaPeds = array();
  $listaPeds = $peDAO->CargarPedidos($_SESSION['id_user'][0]);

  if (count($listaPeds) == 0) {

  ?>
    <div class="container bg-color1">
      <div class="container">
        <div class="d-flex justify-content-end align-items-center ">
        </div>
        <div class="NoCompra d-lg-flex justify-content-center align-items-center">

          <h2>No hay registro de Pedidos en tu cuenta...</h2>
        </div>
      </div>

    <?php } else {
    ?>
      <style>
        .graella {
          margin-left: auto;
          margin-right: auto;
          margin-top: 5rem;
          border: 2px solid #0A0908;
          margin-bottom: 3rem;
          width: 100%;
          font-size: 1rem;
        }

        th,
        td {
          text-align: center;
          border: 2px solid #0A0908;
          padding: 10px 10px 10px 10px;

        }

        td p {
          padding-top: 3px;
        }
        #tit{
          text-align: center;
          margin-top: 2rem;
        }
      </style>
      <h2 id="tit"> PEDIDOS </h2>
      <div class="container">
        <div class="NoCompra">
          <table class="graella">

            <thead style="border: 2px solid #0A0908">
              <tr>
                <th>ID Pedido</th>
                <th>Nombre Usuario</th>
                <th>Método Pago</th>
                <th>Productos</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total Pedido</th>
              </tr>
            </thead>
            <tbody>
              <?php


              // Iterar sobre los resultados y mostrarlos en la tabla
              foreach ($listaPeds as $pedidos) {

                $prodsep1 = explode(",", $pedidos->productos);
                $precsep1 = explode("-", $pedidos->precios);
                $cantsep1 = explode("-", $pedidos->cantidad);


                echo "<tr>";
                echo "<td>" . $pedidos->id_pedido . "</td>";
                echo "<td>" . $pedidos->nombre_user . "</td>";
                echo "<td>" . $pedidos->metodo_pago . "</td>";
                echo "<td style='vertical-align: middle;'>";
                for ($i = 0; $i < count($prodsep1); $i++) {
                  echo "<p>" . $prodsep1[$i] . "</p>";
                }
                echo "</td>";
                echo "<td style='vertical-align: middle;'>";
                for ($i = 0; $i < count($cantsep1); $i++) {
                  echo "<p>" . $cantsep1[$i] . "</p>";
                }
                echo "</td>";
                echo "<td style='vertical-align: middle;'>";
                for ($i = 0; $i < count($precsep1); $i++) {
                  echo "<p>" . $precsep1[$i] . "€</p>";
                }
                echo "</td>";

                echo "<td>" . $pedidos->total_pedido . "€</td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>


    <?php } ?>
    </div>
</body>

</html>