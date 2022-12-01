<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/hoja_estilo.css">
		<script src="../assets/js/bootstrap.min.js"></script>
    <title>CARTA</title>
</head>
<body>
    <?php session_start();?>
    <?php require_once('../views/navbar.php');
    require_once('../config/listaProds.php');?>
    <h3>Patatas</h3>
    
    <ul>    
    <?php
    foreach($listaPatatas as $patatas){?>
    <label name="patatas"><?= $patatas->getNProducto()?>
    <?= $patatas->getPProd()?>€
      <form action="" method="POST">
      <input name="idpat" style="display: none;" value=<?= $patatas->getIdProd();?>></input>
      <button type="submit" name="Submit">Añadir</button>
      </form>
    </label>
  <?php }

      
    if (isset($_POST['Submit'])) {
      var_dump($_SESSION['Sel']);
       if (!in_array($_POST['idpat'], $_SESSION['Sel']) ) {
      $idProducto = $_POST['idpat'];
      array_push($_SESSION['Sel'],$idProducto);
      }
    }
  ?>
    </ul>
    

    <h3>Nuestros Bocadillos</h3>
    
    <ul>    
    <?php
    foreach($listaBocatas as $bocata){?>
    
    <label name="bocatas"><?= $bocata->getNProducto()?>
    <?= $bocata->getPProd()?>€    
    <form action="carta.php" method="post">
    <input name="idboc" style="display: none;" value=<?= $bocata->getIdProd();?>></input>
    <button type="submit" name="SubmitBoc">Añadir</button>
    </form>
    </label>
      
  <?php }
  if (isset($_POST['SubmitBoc'])) {
    if (!in_array($_POST['idboc'], $_SESSION['Sel']) ) {
      $idProducto = $_POST['idboc'];
      array_push($_SESSION['Sel'],$idProducto);
      }
  }?>
    </ul>

    <h3>Bebidas</h3>

    <ul>    
    <?php
    foreach($listaBebidas as $bebidas){?>
   
    <label name="bebida"><?= $bebidas->getNProducto()?>
    <?= $bebidas->getPProd()?>€
    
    <form action="carta.php" method="post">
    <input name="idbeb" style="display: none;" value=<?= $bebidas->getIdProd();?>></input>
    <button type="submit">Añadir</button>
    </form>
    </label>
      
  <?php }?>
    </ul>

    <h3>Tapas</h3>
   

    <ul>    
    <?php
    foreach($listaTapas as $tapas){?>
    <label name="tapa"><?= $tapas->getNProducto()?>
    <?= $tapas->getPProd()?>€
    <form action="carta.php" method="post">
    <input name="idtap" style="display: none;" value=<?= $patatas->getIdProd();?>></input>
    <button type="submit">Añadir</button>
    </form>
    </label>
      
  <?php }?>
    </ul>

</body>
</html>
		