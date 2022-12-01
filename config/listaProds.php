<?php 
require_once('../modelo/productos.php');
require_once('../modelo/tapas.php');
require_once('../modelo/bebidas.php');
require_once('../modelo/bocatas.php');
require_once('../modelo/patatas.php');

$listaTapas = array(new tapa(1,"Aros de Cebolla","Tapa",3.50,"Aros de Ceboolla, Ensalada, Tomate",null,"S"),
new tapa(2,"Calamares a la Romana","Tapa",5.50,"Calamares, Patatas, Limón",null,"S"),
new tapa(3,"Ensalada Cesar","Tapa",3.50,"Ensalada, Olivas, Tomate",null,"S")
);

$listaBocatas = array(new bocata(4,"Bocadillo de Jamón","Bocadillo",5.50,"Pan,Jamon,Aceite, Salsa de Tomate","S"),
new bocata(5,"Bocadillo Vegetal","Bocadillo",7.50,"Aguacate, Tomate, Ensalada, Cebolla, Aceite","S"),
new bocata(6,"Bocadillo de Tortilla","Bocadillo",5.50,"Pan,Tortilla,Salsa de Tomate","S")
);

$listaBebidas = array(new bebida(7,"Cocacola","Bebida",2.00,"CocaCola","S"),
new bebida(8,"Sprite","Bebida",2.00,"Sprite","S"),
new bebida(9,"Damm Lemon","Bebida",1.80,"DAMM","S")
);

$listaPatatas = array(new patata(10,"Patatas Bravas","Patatas",6.50,"Patatas Bravas","Salsa Rosa","S"),
new patata(11,"Patatas Fritas","Patatas",5.50,"Patatas Fritas","Ketchup","S"),
new patata(12,"Patatas Delouxe","Patatas",7.50,"Patatas Delouxe","Salsa Delouxe","S")
);

?>