<?php 


class Database{
    
    public static function conexion($metodo="localhost",$usr="root",$pwd="",$nombre="bocatapas"){

        $conn =  new mysqli($metodo,$usr,$pwd,$nombre);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    
}

?>