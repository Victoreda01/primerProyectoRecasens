<?php

require_once('../db/database.php');
require_once('../modelo/productoDAO.php');
session_start();
$pDAO = new productoDAO();

if (isset($_POST['addProd'])) {

    $nombreProducto = $_POST['nombre_producto'];
    $tam = $_POST['tam'];
    $descripcion = $_POST['descripcion'];
    $cat = $_POST['cat'];
    $precio = $_POST['precio'];

    $aProd = $pDAO->anadirProducto($nombreProducto, $cat, $precio, $tam, $descripcion);

var_dump($_FILES['imagen']);
    if (isset($_FILES["imagen"])) {
        $nImg = $aProd .".webp";
        $ruta = "../assets/images/webp/" . $nImg;

        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta)) {
            echo "La imagen se ha guardado correctamente.";
          } else {
            echo "Error al guardar la imagen.";
          }
    }
    
  header("Location: http://www.primerproyectorecasens.com/?c=Productos");  
}