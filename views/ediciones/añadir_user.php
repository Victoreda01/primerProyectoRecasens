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

                #user_id {
                    text-align: center;
                    position: relative;
                    top: 7rem;
                }

                .modifUser {
                    color: #49111C;
                    border: none;
                    border-bottom: 1px solid #FDE1C8;
                }

                .modifUser:hover {
                    color: #0A0908;
                    border-bottom: 1px solid #49111C;
                }
            </style>
            <?php

            ?>
<h2> Añadir Usuario </h2>

            <form action="/config/add_User.php" method="post">
                <table>

                    <tbody>
                        <tr>
                            <td>
                                <label for="nombre_usuario">Nombre:</label>
                                <input class="modifUser" type="text" id="nombre_usuario" name="nombre_usuario" value="" />
                            </td>

                            <br>
                            <td>
                                <label for="apellidos">Apellidos:</label>
                                <input class="modifUser" type="text" id="apellidos" name="apellidos" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email:</label>
                                <input class="modifUser" type="email" id="email" name="email" value="" />
                            </td>
                            <br>

                            <td>
                                <label for="domicilio">Domicilio:</label>
                                <input class="modifUser" type="text" id="domicilio" name="domicilio" value="" />
                            </td>
                        </tr>
                        <?php if (isset($_SESSION['error_message'])) {
                            echo "<tr><td><label>" . $_SESSION['error_message'] . "</label></td></tr>";

                            unset($_SESSION['error_message']);
                        } ?>
                        <tr>
                            <td>
                            <label>Rol:</label>
                            <select name="rol">
                                    <option value="usuario">Usuario</option>
                                    <option value="admin">Administrador</option>
                                </select>
                            </td>
                            <br>
                            <td>
                                <label for="password">Contraseña:</label>
                                <input class="modifUser" type="password" id="password" name="password" value="" />
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td colspan="2" style="text-align:center;">
                                <input class="boton" type="submit" value="Añadir User" name="addUSR" style="padding:5px;" />
                            <td>
                        </tr>
                    <tbody>
                </table>
            </form>




        </div>
    </div>
</body>