<?php



class userDAO
{

    private $model;

    public function __construct()
    {
        /* $this->model = new userDAO; */
    }



    public static function CargarUsers()
    {

        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("SELECT id_user, nombre_user , apellidos , email , domicilio,rol ,password  
        from users;");
        $stmt->execute();
        $result = $stmt->get_result();
        $listaUsers = array();

        while ($peds = $result->fetch_object()) {

            $listaUsers[] = $peds;
        }

        return $listaUsers;
    }
    public static function getUserById($id)
    {

        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("SELECT id_user, nombre_user , apellidos , email ,password,fecha_registro, domicilio,rol
        from users
        WHERE id_user = $id;");
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();

        return $user;
    }
    public static function ModUserById($id,$nombreUsuario, $apellidos,$email, $domicilio, $password_hash)
    {
        
        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("UPDATE users SET nombre_user = ?, apellidos = ?, email = ? ,domicilio = ?, password = ? WHERE id_user = $id");

        $stmt->bind_param("sssss", $nombreUsuario, $apellidos, $email, $domicilio, $password_hash);
        $stmt->execute();

        $msg = "";
        if ($stmt->execute()) {
            $msg = "Todo Correcto";
        }else{
            $msg = "Error al Modificar";
        }
        return $msg;
    
    }

    public static function añadirUser($nombre_user, $apellidos, $email, $password_hash, $fechaReg, $dom,$rol )
    {

        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("INSERT INTO users (nombre_user, apellidos, email, password, fecha_registro, domicilio, rol) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssdss", $nombre_user, $apellidos, $email, $password_hash, $fechaReg,$dom,$rol);
        $stmt->execute();

        $msg = "";
        if ($stmt->execute()) {
            $msg = "Todo Correcto";
        }else{
            $msg = "Error al Añadir";
        }
        return $msg;

    }
}
