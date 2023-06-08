<body>

    <div class="container">
        <div class="NoCompra">

            <?php
            require_once('autoloader.php');
            $cargProd = new productoDAO();
            $listaProd = $cargProd->CargarProductos();
            ?>
            <!-- Tabla de productos -->
            <style>
                .graella {
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 5rem;
                    border: 2px solid #0A0908;
                    margin-bottom: 3rem;
                }

                th,
                td {
                    text-align: center;
                    border: 2px solid #0A0908;
                    padding: 10px 10px 10px 10px;
                }
            </style>


            <div class="row">
                <div class="offset-4 col-4 mt-4">
                    <h2> Graella Productos </h2>
                </div>
                <div class="offset-1 col-1 mt-4" style="margin-left: 10rem;">
                    <form action="?c=Productos&a=Añadir" method="POST">
                        <button class="mPedidos boton" type="submit">Añadir Producto</button>
                    </form>
                </div>
            </div>



            <table class="graella">
                <thead>
                    <tr>
                        <th>ID Producto</th>
                        <th>Nombre Producto</th>
                        <th>Precio Producto</th>
                        <th>Tamaño</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (isset($_POST['del_prod'])) {
                        $cargProd->EliminarProducto($_POST['id_pord']);
                    }
                    
                    foreach ($listaProd as $producto) :?>
                        <tr>
                            <td><?= $producto->getIdProd(); ?></td>
                            <td><?= $producto->getNProducto(); ?></td>
                            <td><?= $producto->getPProd(); ?></td>
                            <td><?= $producto->getSize(); ?></td>
                            <td><?= $producto->getDProd(); ?></td>
                            <td>
                                <form class="m-2" action="?c=Productos&a=Editar" method="POST">
                                    <input type="hidden" name="id_producto" value="<?= $producto->getIdProd(); ?>">
                                    <button class="boton" type="submit" style="background-color: #F2F4F3; color:#0A0908;">Editar</button>
                                </form>
                                <form action="" method="POST">
                                    <input type="hidden" name="id_pord" value="<?= $producto->getIdProd(); ?>">
                                    <button class="boton" type="submit" name="del_prod">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach;
                    
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>