<?php
require_once 'autoloader.php';
class UsersController
{

    private $model;

    public function __construct()
    {
        //$this->model=new producto();
    }
    public function Inicio()
    {

        session_start();
        if (!$_SESSION['id_user']) {
            header("Location: views/login.php");
            exit();
        } else {
            header('Content-Type: text/html; charset=utf-8');

            include_once('base_url.php');
            include_once('db/database.php');
            require_once 'modelo/userDAO.php';

            if ($_SESSION['id_user'][2] == "admin") {
                require_once 'views/navbar.php';
                require_once 'views/ediciones/graella_users.php';
                require_once 'views/footer.php';
            } else {
                header("Location: index.php");
            }
        }
    }
    public function Editar()
    {

        session_start();
        if (!$_SESSION['id_user']) {
            header("Location: views/login.php");
            exit();
        } else {
            header('Content-Type: text/html; charset=utf-8');

            include_once('base_url.php');
            include_once('db/database.php');
            require_once 'modelo/userDAO.php';
            if ($_SESSION['id_user'][2] == "admin") {
                require_once 'views/navbar.php';
                require_once 'views/ediciones/modif_user.php';
                require_once 'views/footer.php';
            } else {
                require_once 'views/navbar.php';
                require_once 'views/ediciones/modif_perfil.php';
                require_once 'views/footer.php';
            }
        }
    }

    public function Añadir()
    {

        session_start();
        if (!$_SESSION['id_user']) {
            header("Location: views/login.php");
            exit();
        } else {
            header('Content-Type: text/html; charset=utf-8');

            include_once('base_url.php');
            include_once('db/database.php');
            require_once 'modelo/userDAO.php';
            if ($_SESSION['id_user'][2] == "admin") {
                require_once 'views/navbar.php';
                require_once 'views/ediciones/añadir_user.php';
                require_once 'views/footer.php';
            } else {
                header("Location: index.php");
            }
        }
    }
}
