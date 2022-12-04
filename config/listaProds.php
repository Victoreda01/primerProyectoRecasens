<?php 
require_once('../modelo/productos.php');
require_once('../modelo/tapas.php');
require_once('../modelo/bebidas.php');
require_once('../modelo/bocatas.php');
require_once('../modelo/patatas.php');

$listaProds = array(
    new patata(0,"Patatas Bravas","Patatas",6.50,"Patatas Bravas","Salsa Rosa","S","Patatas Bravas artesanales con una capa exterior crugiente y un interior suave como un algodón, con una salsa Rosa de la casa, que pica,pero no."),
new patata(1,"Patatas Fritas","Patatas",5.50,"Patatas Fritas","Ketchup","S","Patatas Fritas cortadas en laminas finas para todo tipo de paladar, con textura de patata crugiente."),
new patata(2,"Patatas Delouxe","Patatas",7.50,"Patatas Delouxe","Salsa Delouxe","S","Patatas Delouxe cuidadas cortadas en laminas para todo tipo de paladar, con una textura de patata suave, con una salsa Delouxe."),
new patata(3,"Patatas Al Horno","Patatas",9.50,"Patatas Al Horno","Alioli","S","Patatas Al Horno cortadas en bloques , con una capa exterior crugiente y un interior suave como un algodón, con una salsa alioli de la casa."),

new bocata(4,"Bocadillo de Jamón","Bocadillo",5.50,"Pan,Jamon,Aceite, Salsa de Tomate","S","Bocadillo de Jamón Serrano artesanal"),
new bocata(5,"Bocadillo Vegetal","Bocadillo",7.50,"Aguacate, Tomate, Ensalada, Cebolla, Aceite","S","Bocadillo de Jamón Serrano artesanal"),
new bocata(6,"Bocadillo de Tortilla","Bocadillo",5.50,"Pan,Tortilla,Salsa de Tomate","S","Bocadillo de Jamón Serrano artesanal"),
new bocata(7,"Bikini","Bocadillo",3.50,"Pan Bimbo,Queso,Jamon Dulce","S","Bocadillo de Jamón Serrano artesanal"),

new bebida(8,"Cocacola","Bebida",2.00,"CocaCola","S","Bebida conocida como CocaCola"),
new bebida(9,"Sprite","Bebida",2.00,"Sprite","S","Bebida conocida como Sprite"),
new bebida(10,"Trina","Bebida",2.00,"Trina","S","Bebida conocida como Trina"),
new bebida(11,"Damm Lemon","Bebida",1.80,"DAMM","S","Bebida conocida como Damm Lemon"),

new tapa(12,"Tiras de Pollo","Tapa",3.50,"Aros de Ceboolla, Ensalada, Tomate","S","Bebida conocida como CocaCola"),
new tapa(13,"Calamares a la Romana","Tapa",5.50,"Calamares, Patatas, Limón","S","Bebida conocida como CocaCola"),
new tapa(14,"Ensalada Cesar","Tapa",3.50,"Ensalada, Olivas, Tomate","S","Bebida conocida como CocaCola"),
new tapa(15,"Croquetas de Jamón","Tapa",8.50,"Croquetas de Jamon, ensaladilla","S","Bebida conocida como CocaCola")

);

?>