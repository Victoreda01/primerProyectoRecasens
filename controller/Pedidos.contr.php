<?php 

class PedidosController {

    private $model;

    public function __construct()
    {
        //$this->model=new producto();
    }
    public function Inicio() {


        session_start();
        if (!$_SESSION['id_user']) {
            header("Location: views/login.php");
            exit();
        }else{

            include_once('db/database.php');
            include_once('base_url.php');
            include_once('modelo/productos.php');
            include_once('modelo/pedidos.php');
            include_once('modelo/productoDAO.php');
            include_once('modelo/pedidoDAO.php');

            require_once 'views/navbar.php';
            require_once 'views/pedidos/index.php';  
            require_once 'views/footer.php';
            


        }
    }


}
?>