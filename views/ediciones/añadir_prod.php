<body>
    <div class="container">
        <div class="NoCompra">
            <style>
                table {
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 5rem;
                    border: 2px solid #0A0908;
                }

                td {
                    text-align: left;
                    padding: 10px 10px 10px 10px;

                }

                td p {
                    padding-top: 3px;
                }

                #Producto_id {
                    text-align: center;
                    position: relative;
                    top: 7rem;
                }

                .modifProducto {
                    color: #49111C;
                    border: none;
                    border-bottom: 1px solid #FDE1C8;
                }

                .modifProducto:hover {
                    color: #0A0908;
                    border-bottom: 1px solid #49111C;
                }
            </style>
            <?php

            ?>
<h2> Añadir Producto </h2>
            <form action="/config/add_Prod.php" method="post" enctype="multipart/form-data">
                <table>

                    <tbody>
                        <tr>
                        <td>
                                <label for="imagen">Imagen (250x250 px):</label>
                                <input class="modifProducto" type="file" id="imagen" name="imagen" value="" />
                            </td>
                            <td>
                                <label for="nombre_producto">Nombre Producto:</label>
                                <input class="modifProducto" type="text" id="nombre_producto" name="nombre_producto" value="" />
                            </td>

                            <br>

                        </tr>
                        <tr>
                            <td>
                            <label>Tamaño:</label>
                            <select name="tam">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="XL">XL</option>
                                </select>
                            </td>
                            <br>

                            <td>
                                <label for="descripcion">Descripcion:</label>
                                <input class="modifProducto" type="text" id="descripcion" name="descripcion" value="" />
                            </td>
                        
                        <tr>
                            <td>
                                <label>Categoria:</label>
                                <select name="cat">Categoria:
                                    <option value="1">Patatas</option>
                                    <option value="2">Bocatas</option>
                                    <option value="3">Bebidas</option>
                                    <option value="4">Tapas</option>
                                </select>
                            </td>
                            <br>
                            <td>
                                <label for="precio">Precio:</label>
                                <input class="modifProducto" type="text" id="precio" name="precio" value="" />
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td colspan="2" style="text-align:center;">
                                <input class="boton" type="submit" value="Añadir Producto" name="addProd" style="padding:5px;" />
                            <td>
                        </tr>
                    <tbody>
                </table>
            </form>




        </div>
    </div>
</body>