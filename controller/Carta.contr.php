<?php 

class CartaController {

    private $model;

    public function __construct()
    {
        //$this->model=new producto();
    }
    public function Inicio() {
        include_once('modelo/productos.php');
        include_once('modelo/pedidos.php');
        include_once('modelo/productoDAO.php');
        include_once('modelo/bocatas.php');
        include_once('modelo/patatas.php');
        include_once('modelo/bebidas.php');
        include_once('modelo/tapas.php');

        session_start();
        if (!$_SESSION['id_user']) {
            header("Location: views/login.php");
            exit();
        }else{
            include_once('db/database.php');
            include_once('base_url.php');
            
            require_once 'views/navbar.php';
            require_once 'views/carta/index.php';  
            require_once 'views/footer.php';
            


        }
    }


}
?>