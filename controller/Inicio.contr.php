<?php 
require_once 'autoloader.php';
class InicioController {

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
            include_once('base_url.php');
            if (isset($_SESSION['Sel'])) {
                if (isset($_POST['idprod'])) {
                    $prodSel = new pedido($productos[$_POST['idprod']]);
                    array_push($_SESSION['Sel'], $prodSel);
                }
            }else{
                $_SESSION['Sel'] = array(); 
            }          
            require_once 'views/navbar.php';
            require_once 'views/cabecera.php';
            require_once 'views/inicio/Inicio.php';  
            require_once 'views/footer.php'; 
        }

        
    }
}
?>