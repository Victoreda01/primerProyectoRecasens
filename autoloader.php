<?php
function iniAuto($clase) {
    
    // Convertir el nombre de la clase en una ruta de archivo
    $ruta = '../modelo/' . $clase . '.php';

    // Verificar si el archivo existe y cargarlo si es así
    if (file_exists($ruta)) {
        require_once $ruta;
    }

}
// Registrar la función de autoloading
spl_autoload_register('iniAuto');

?>