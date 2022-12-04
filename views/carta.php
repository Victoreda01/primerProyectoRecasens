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
    <?php 
    require_once('../modelo/pedidos.php');
    require_once('../modelo/productos.php');
    require_once('../config/listaProds.php');
    session_start();
    
    
    

    if (!isset($_SESSION['Sel'])) {
        $_SESSION['Sel'] = array(); 
    
          }
          require_once('../views/navbar.php');
    ?>
    <div class="container">
      <div class="container-sm bg-color1 centro">
        

    
    <ul>
    <div class="row pt-4 pb-5">    
    <?php
    $titulo = '';
    $pos = 0;
    foreach($listaProds as $prods){?>
    
    <?php if ($prods->getTProd() != $titulo) {
       $titulo = $prods->getTProd();?>
       <h3 style="margin-top:2%; margin-left:4%; color:#49111C"><?= $titulo;?></h3>
   <?php } ?>
   
   <div class="prodsCarta col-sm-12 col-lg-4 mt-2 mb-2">
    <label class="imgCarta" style="background-image: url(../assets/images/<?= $prods->getIdProd()?>.png);">
    <div>
      <p style="font-size: 1rem; padding-top:5%;" >
        <?= $prods->getNProducto()?>
      <p>
        <?= $prods->getDProd()?>
        </p>
    </p>
  </div>
</label>
    
    
    <form action="../modelo/añadirProducto.php" method="post">
    <input type="hidden" name="idprod" value=<?= $prods->getIdProd();?>></input>
    <input type="hidden" name="pos" value=<?= $pos;?>></input>
    <div class="subPr pt-1">
    <?= $prods->getNProducto()?> 
    
    <button class="botonCarta"type="submit" name="addCarta"></button>
    <select id="size" class="mt-1">
      <option>S</option>
      <option>M</option>
      <option>XL</option>
    </select>
    </div>
    </form>
    </label>
    </div>
    
      
  <?php $pos++; }?>
  </div>
    </ul>
    </div>
  </div>
    <?php require_once 'footer.php'; ?>
</body>
</html>
		