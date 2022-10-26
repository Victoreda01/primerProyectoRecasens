<?php 
$apellido = $_GET['apellido'];
function saluda($nombre){
    global $apellido;
    $apellido2 = "Garcia";
    echo "Hola ". $nombre.' '.$apellido.' '.$apellido2;
}

$nombre = $_GET['nombre'];

echo date("d-m-Y");
echo "<br>";
echo rand(20,100);
echo "<br>";
if(is_string($nombre)){
    saluda($nombre);
    echo "<br>";
}
$frase = "hago daw por tonto";
echo isset($nombre);
echo "<br>";
echo strlen($nombre);
echo "<br>";
echo strpos($frase, "tonto");
unset($nombre);
saluda($nombre);


?>