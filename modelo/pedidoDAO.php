<?php 



class pedidoDAO{

    private $model;

	public function __construct(){
        /* $this->model = new productoDAO; */
    }



    public static function CargarPedidos($id){


        $conn = Database::conexion();
        mysqli_set_charset($conn, "utf8");
        $stmt = $conn->prepare("SELECT ped.id_pedido, u.nombre_user, ped.metodo_pago,group_concat(prod.nombre_producto SEPARATOR ',') as productos ,group_concat(pp.cantidad SEPARATOR '-') as cantidad, group_concat( pp.precio_unidad separator '-') as precios, ped.total_pedido 
        from pedidos ped 
        inner join users u on ped.id_user = u.id_user 
        inner join pedido_producto pp on pp.id_pedido = ped.id_pedido 
        inner join producto prod on prod.id_producto = pp.id_producto
        WHERE ped.id_user = $id
        group by ped.id_pedido;");
        $stmt->execute();
        $result = $stmt->get_result();
        $listaPeds = array();

        while ($peds = $result->fetch_object()) {

            $listaPeds []= $peds;
            
        }
        
        return $listaPeds;
    }


        public static function añadirPedido($idUsuario, $metodoPago, $totalPedido, $fechaPago, $ordenPedido, $productos) {

            $conn = Database::conexion();
            mysqli_set_charset($conn, "utf8");
            $stmt = $conn->prepare("INSERT INTO pedidos (id_user, metodo_pago, total_pedido, fecha_pago, orden_pedido) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("isdss", $idUsuario, $metodoPago, $totalPedido, $fechaPago, $ordenPedido);
            $stmt->execute();
        
            $lastid = $conn->insert_id;
        
            $stmt = $conn->prepare("INSERT INTO pedido_producto (id_pedido, id_producto, linea, cantidad, precio_unidad) VALUES (?, ?, ?, ?, ?)");
            $i = 0;
            foreach ($productos as $producto) {
                
                $idProducto = $producto->producto->idProd;
                $linea = $i++;
                $cantidad = $producto->cantidad;
                $precioUnitario = $producto->producto->pProd;
        
                $stmt->bind_param("iiiid", $lastid, $idProducto, $linea, $cantidad, $precioUnitario);
                $stmt->execute();
            }
        
            $stmt->close();
            $conn->close();
        }
    

    
}


?>