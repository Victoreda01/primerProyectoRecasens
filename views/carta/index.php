<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../assets/css/hoja_estilo.css">
		<script src="../assets/js/bootstrap.min.js"></script>
    <title>CARTA</title>
</head>
<body>
    <div class="container">
      <div class="container bg-color1 centro">
    <ul>
    <div class="row pt-4 pb-5">    
    <?php


    $titulo = '';
    $pos = 0;

    $pDao = new productoDAO();
    $listaProds = array(); 
    $listaProds = $pDao->CargarProductos();
    foreach($listaProds as $prods){
      
      ?>
    
    
    <?php if ($prods->getTProd() != $titulo) {
       $titulo = $prods->getTProd();?>
       <h3 style="margin-top:2%; margin-left:4%; color:#49111C"><?= $titulo;?></h3>
   <?php } ?>
   
   <div class="prodsCarta col-12 col-xl-3 mt-2 mb-2">
    <label class="imgCarta" style="background-image: url(../assets/images/webp/<?= $prods->getIdProd()?>.webp);">
    <div>
      <p style="font-size: 1rem; padding-top:5%;" >
        <?= $prods->getNProducto()?>
      <p>
        <?= $prods->getDProd()?>
        </p>
    </p>
  </div>
</label>
    
    <div class="prods-tab">
    <form action=<?= base_url('/config/añadirProducto.php')?> method="post">
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
    </div>
    </div>
    
      
  <?php $pos++; }?>
  </div>
    </ul>
    </div>
  </div>
</body>
</html>
		