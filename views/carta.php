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
    <?php require_once('../views/navbar.php');
    require_once('../config/listaProds.php');?>
    <h3>Bebidas</h3>

    <ul>    
    <?php
    foreach($listaProds as $prods){?>
   
    <label name="bebida"><?= $prods->getNProducto()?>
    <?= $prods->getPProd()?>€
    
    <form action="../modelo/añadirProducto.php" method="post">
    <input name="idprod" style="display: none;" value=<?= $prods->getIdProd();?>></input>
    <button type="submit">Añadir</button>
    </form>
    </label>
      
  <?php }?>
    </ul>


</body>
</html>
		