<?php
require_once('productos.php');
require_once('tapas.php');
require_once('bebidas.php');
require_once('bocatas.php');
require_once('patatas.php');


class productoDAO
{

    private $model;

    public function __construct()
    {
        /* $this->model = new productoDAO; */
    }



    public static function CargarProductos()
    {


        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("SELECT  p.id_producto,p.nombre_producto ,c.nombre_cat ,p.precio_producto ,p.`size` ,p.descripcion_producto  FROM producto p
        inner join categorias c where p.cat = c.id_cat 
        ORDER BY cat asc");
        $stmt->execute();
        $result = $stmt->get_result();
        $listaProds = array();

        while ($prods = $result->fetch_object()) {

            switch ($prods->nombre_cat) {
                case 'Patatas':
                    $pat = new patata($prods->id_producto, $prods->nombre_producto, $prods->nombre_cat, $prods->precio_producto, $prods->size, $prods->descripcion_producto, Null, null);
                    $listaProds[] = $pat;
                    break;

                case 'Bocadillos':
                    $boc = new bocata($prods->id_producto, $prods->nombre_producto, $prods->nombre_cat, $prods->precio_producto, $prods->size, $prods->descripcion_producto, null);
                    $listaProds[] = $boc;
                    break;

                case 'Bebidas':
                    $beb = new bebida($prods->id_producto, $prods->nombre_producto, $prods->nombre_cat, $prods->precio_producto, $prods->size, $prods->descripcion_producto, null);
                    $listaProds[] = $beb;
                    break;

                case 'Tapas':
                    $tap = new tapa($prods->id_producto, $prods->nombre_producto, $prods->nombre_cat, $prods->precio_producto, $prods->size, $prods->descripcion_producto, null);
                    $listaProds[] = $tap;
                    break;

                default:
                    echo "ERROR DE LECTURA DE OBJETO";
                    break;
            }
        }

        return $listaProds;
    }


    public static function getByType($type)
    {
        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("SELECT p.id_producto,p.nombre_producto ,c.nombre_cat ,p.precio_producto ,p.`size` ,p.descripcion_producto FROM producto p 
            inner join categorias c WHERE p.cat = c.id_cat AND c.nombre_cat = $type
            ORDER BY cat ASC");
        $stmt->execute();
        $result = $stmt->get_result();
        $listaProds = array();

        while ($prods = $result->fetch_object()) {

            switch ($prods->nombre_cat) {
                case 'Patatas':
                    $pat = new patata($prods->id_producto, $prods->nombre_producto, $prods->nombre_cat, $prods->precio_producto, $prods->size, $prods->descripcion_producto, Null, null);
                    $listaProds[] = $pat;
                    break;

                case 'Bocadillos':
                    $boc = new bocata($prods->id_producto, $prods->nombre_producto, $prods->nombre_cat, $prods->precio_producto, $prods->size, $prods->descripcion_producto, null);
                    $listaProds[] = $boc;
                    break;

                case 'Bebidas':
                    $beb = new bebida($prods->id_producto, $prods->nombre_producto, $prods->nombre_cat, $prods->precio_producto, $prods->size, $prods->descripcion_producto, null);
                    $listaProds[] = $beb;
                    break;

                case 'Tapas':
                    $tap = new tapa($prods->id_producto, $prods->nombre_producto, $prods->nombre_cat, $prods->precio_producto, $prods->size, $prods->descripcion_producto, null);
                    $listaProds[] = $tap;
                    break;

                default:
                    echo "ERROR DE LECTURA DE OBJETO";
                    break;
            }
        }
        return $listaProds;
    }

    public static function getById($id)
    {
        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("SELECT p.id_producto,p.nombre_producto ,p.cat ,p.precio_producto ,p.`size` ,p.descripcion_producto FROM producto p 
        WHERE p.id_producto = $id");
        $stmt->execute();
        $result = $stmt->get_result();
        $producto = $result->fetch_assoc();

        return $producto;
    }

    public static function modProducto($id_prod, $nom_prod, $cate, $precio_prod, $size, $desc_prod)
    {

        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("UPDATE producto 
        SET nombre_producto = $nom_prod, 
            cat = $cate, 
            precio_producto = $precio_prod, 
            `size` = $size, 
            descripcion_producto = $desc_prod 
        WHERE id_producto = $id_prod;");

        $msg = "";
        if ($stmt->execute()) {
            $msg = "Todo Correcto";
        } else {
            $msg = "Error al modificar";
        }
        return $msg;
    }

    public static function anadirProducto($nom_prod, $cate, $precio_prod, $size, $desc_prod)
    {
        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("INSERT INTO producto (nombre_producto, cat, precio_producto, `size`, descripcion_producto) VALUES (?,?,?,?,?)");
         $stmt->bind_param("sidss", $nom_prod, $cate, $precio_prod, $size, $desc_prod);
        $stmt->execute();

        $lastId = $conn->insert_id;

        return $lastId;
    }

    public static function EliminarProducto($id_prod)
    {
        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("DELETE FROM producto WHERE id_producto = $id_prod;");
        $stmt->execute();

        $msg = "";
        if ($stmt->execute()) {
            $msg = "Todo Correcto";
        } else {
            $msg = "Error al Eliminar";
        }
        return $msg;
    }
}
