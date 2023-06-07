<?php 

class PoliticasController {

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


            require_once 'views/navbar.php';
            require_once 'views/politicas/index.php';  
            require_once 'views/footer.php';
            


        }
    }


}
?>