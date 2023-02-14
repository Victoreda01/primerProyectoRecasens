
<?php 
require_once('../modelo/productos.php');
require_once('../modelo/tapas.php');
require_once('../modelo/bebidas.php');
require_once('../modelo/bocatas.php');
require_once('../modelo/patatas.php');
include_once '../db/database.php';


$conn = Database::conexion();

$stmt = $conn->prepare("SELECT DISTINCT  p.id_producto,p.nombre_producto ,c.nombre_cat ,p.precio_producto ,p.`size` ,p.descripcion_producto  FROM producto p
inner join categorias c where p.cat = c.id_cat 
ORDER BY cat asc");
$stmt->execute();

$result = $stmt->get_result();



$listaProds = array();


while ($prods = $result->fetch_object()) {
    
    switch ($prods->nombre_cat) {
        case 'Patatas':
            $pat = new patata($prods->id_producto,$prods->nombre_producto,$prods->nombre_cat,$prods->precio_producto,$prods->size,$prods->descripcion_producto,Null,null);
            $listaProds[]= $pat;
            break;

        case 'Bocadillos':
            $boc = new bocata($prods->id_producto,$prods->nombre_producto,$prods->nombre_cat,$prods->precio_producto,$prods->size,$prods->descripcion_producto,null);
            $listaProds[]= $boc;            
            break;

        case 'Bebidas':
            $beb = new bebida($prods->id_producto,$prods->nombre_producto,$prods->nombre_cat,$prods->precio_producto,$prods->size,$prods->descripcion_producto,null);
            $listaProds[]= $beb;             
            break;

        case 'Tapas':
            $tap = new tapa($prods->id_producto,$prods->nombre_producto,$prods->nombre_cat,$prods->precio_producto,$prods->size,$prods->descripcion_producto,null);
            $listaProds[]= $tap;             
            break;

        default:
            echo "ERROR DE LECTURA DE OBJETO";
            break;
    }
}



/*  array(
    new patata(0,"Patatas Bravas",1,6.50,"S","Patatas Bravas artesanales con una capa exterior crugiente y un interior suave como un algodón, con una salsa Rosa de la casa, que pica,pero no."),
new patata(1,"Patatas Fritas",1,5.50,"S","Patatas Fritas cortadas en laminas finas para todo tipo de paladar, con textura de patata crugiente."),
new patata(2,"Patatas Delouxe",1,7.50,"S","Patatas Delouxe cuidadas cortadas en laminas para todo tipo de paladar, con una textura de patata suave, con una salsa Delouxe."),
new patata(3,"Patatas Al Horno",1,9.50,"S","Patatas Al Horno cortadas en bloques , con una capa exterior crugiente y un interior suave como un algodón, con una salsa alioli de la casa."),

new bocata(4,"Bocadillo de Jamón",2,5.50,"S","Bocadillo de Jamón Serrano artesanal"),
new bocata(5,"Bocadillo Vegetal",2,7.50,"S","Bocadillo de Jamón Serrano artesanal"),       
new bocata(6,"Bocadillo de Tortilla",2,5.50,"S","Bocadillo de Jamón Serrano artesanal"),
new bocata(7,"Bikini",2,3.50,"S","Bocadillo de Jamón Serrano artesanal"),                 

new bebida(8,"Cocacola",3,2.00,"S","Bebida conocida como CocaCola"),       
new bebida(9,"Sprite",3,2.00,"S","Bebida conocida como Sprite"),          
new bebida(10,"Trina",3,2.00,"S","Bebida conocida como Trina"),           
new bebida(11,"Damm Lemon",3,1.80,"S","Bebida conocida como Damm Lemon"),

new tapa(12,"Tiras de Pollo",4,3.50,"S","Tiras de Pollo Rebozado"),                                                               
new tapa(13,"Calamares a la Romana",4,4.50,"S","Calamares rebozados con limon"),                                                  
new tapa(14,"Ensalada Cesar",4,3.50,"S","Ensalada Clasica Cesar muy buena"),                                                      
new tapa(15,"Croquetas de Jamón",4,8.50,"S","Unas croquetas de receta de la abuela, no vas a probar ningunas mejores que estas.")

); */



?>