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

            $usDAO = new userDAO();
            $objUser = $usDAO->getUserById($_SESSION['id_user'][0]);
            ?>

            <form action="/config/modificar_user.php" method="post">
                <div id="user_id"> ID Usuario: <input type="number" name="user_id" value="<?= $objUser->id_user ?>" style="border: none; width:3rem;" readonly></input></div>
                <table>

                    <tbody>
                        <tr>
                            <td>
                                <label for="nombre_usuario">Nombre:</label>
                                <input class="modifUser" type="text" id="nombre_usuario" name="nombre_usuario" value="<?= $objUser->nombre_user ?>" />
                            </td>

                            <br>
                            <td>
                                <label for="apellidos">Apellidos:</label>
                                <input class="modifUser" type="text" id="apellidos" name="apellidos" value="<?= $objUser->apellidos ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email:</label>
                                <input class="modifUser" type="email" id="email" name="email" value="<?= $objUser->email ?>" />
                            </td>
                            <br>

                            <td>
                                <label for="domicilio">Domicilio:</label>
                                <input class="modifUser" type="text" id="domicilio" name="domicilio" value="<?= $objUser->domicilio ?>" />
                            </td>
                        </tr>
                        <?php if (isset($_SESSION['error_message'])) {
                                    echo "<tr><td><label>" .$_SESSION['error_message']."</label></td></tr>";

                                    unset($_SESSION['error_message']);
                                } ?>
                        <tr>
                            <td>
                                <label for="role">Rol:</label>
                                <input class="modifUser" type="text" name="rol" value="<?= $objUser->rol ?>" readonly />
                            </td>
                            <br>
                            <td>
                                <label for="password">Contraseña:</label>
                                <input class="modifUser" type="password" id="password" name="password" value="" required />
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td colspan="2" style="text-align:center;">
                                <input class="boton" type="submit" value="Guardar cambios" name="saveChang" style="padding:5px;" />
                            <td>
                        </tr>
                    <tbody>
                </table>
            </form>




        </div>
    </div>
</body>