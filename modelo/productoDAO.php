<?php 


include_once '../db/database.php';
include_once 'productos.php';

class productoDAO{


    public static function getByType($type)
    {
            $conn = Database::conexion();
            $stmt = $conn->prepare()
    }
}


?>