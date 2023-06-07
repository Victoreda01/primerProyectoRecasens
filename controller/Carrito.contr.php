<?php 

class CarritoController {

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

            if (isset($_SESSION['Sel'])) {
                if (isset($_POST['idprod'])) {
                  var_dump($_POST['idprod']);
              
                  $prodSel = new pedido($productos[$_POST['idprod']]);
                  array_push($_SESSION['Sel'], $prodSel);
                }
              }else{
                $_SESSION['Sel'] = array(); 
              }
            require_once 'views/navbar.php';
            require_once 'views/carrito/index.php';  
            require_once 'views/footer.php';
            


        }
    }


}
?>