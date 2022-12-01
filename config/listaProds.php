<?php 
require_once('../modelo/productos.php');
require_once('../modelo/tapas.php');
require_once('../modelo/bebidas.php');
require_once('../modelo/bocatas.php');
require_once('../modelo/patatas.php');

$listaProds = array(new tapa(0,"Aros de Cebolla","Tapa",3.50,"Aros de Ceboolla, Ensalada, Tomate",null,"S"),
new tapa(1,"Calamares a la Romana","Tapa",5.50,"Calamares, Patatas, Limón",null,"S"),
new tapa(2,"Ensalada Cesar","Tapa",3.50,"Ensalada, Olivas, Tomate",null,"S"),
new bocata(3,"Bocadillo de Jamón","Bocadillo",5.50,"Pan,Jamon,Aceite, Salsa de Tomate","S"),
new bocata(4,"Bocadillo Vegetal","Bocadillo",7.50,"Aguacate, Tomate, Ensalada, Cebolla, Aceite","S"),
new bocata(5,"Bocadillo de Tortilla","Bocadillo",5.50,"Pan,Tortilla,Salsa de Tomate","S"),
new bebida(6,"Cocacola","Bebida",2.00,"CocaCola","S"),
new bebida(7,"Sprite","Bebida",2.00,"Sprite","S"),
new bebida(8,"Damm Lemon","Bebida",1.80,"DAMM","S"),
new patata(9,"Patatas Bravas","Patatas",6.50,"Patatas Bravas","Salsa Rosa","S"),
new patata(10,"Patatas Fritas","Patatas",5.50,"Patatas Fritas","Ketchup","S"),
new patata(11,"Patatas Delouxe","Patatas",7.50,"Patatas Delouxe","Salsa Delouxe","S")
);

?>