<?php
    if (!isset($_GET['c'])) {
    require_once "controller/Inicio.contr.php";
    $cont = new InicioController();
    call_user_func(array($cont, "Inicio"));
	}else{
    $cont = $_GET['c'];
    require_once
    "controller/$cont.contr.php";
    $cont = ucwords($cont)."Controller";
    $cont = new $cont;
    $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
    call_user_func(array($cont,$accion));
}
?>
