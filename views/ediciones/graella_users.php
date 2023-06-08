<body>

    <div class="container">
        <div class="NoCompra">

            <?php
            $cargUser = new userDAO();
            $listaUsr = $cargUser->CargarUsers();
            ?>
            <!-- Tabla de usuarios -->
            <style>
                .graella {
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 5rem;
                    border: 2px solid #0A0908;
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
                    <h2> Graella Usuarios </h2>
                </div>
                <div class="offset-1 col-1 mt-4" style="margin-left: 10rem;">
                    <form action="?c=Users&a=Añadir" method="POST">
                        <button class="mPedidos boton" type="submit">Añadir Usuario</button>
                    </form>
                </div>
            </div>



            <table class="graella">
                <thead>
                    <tr>
                        <th>ID Usuario</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        <th>Domicilio</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (isset($_POST['del_usr'])) {
                        $cargUser->delUser($_POST['id_usuario']);
                    }
                    
                    foreach ($listaUsr as $usuario) : ?>
                        <tr>
                            <td><?= $usuario->id_user; ?></td>
                            <td><?= $usuario->nombre_user; ?></td>
                            <td><?= $usuario->apellidos; ?></td>
                            <td><?= $usuario->email; ?></td>
                            <td><?= substr($usuario->password, 0, 2) . '·············'; ?></td>
                            <td><?= $usuario->domicilio; ?></td>
                            <td><?= $usuario->rol; ?></td>
                            <td>
                                <form class="m-2" action="?c=Users&a=Editar" method="POST">
                                    <input type="hidden" name="id_usuario" value="<?= $usuario->id_user; ?>">
                                    <button class="boton" type="submit" style="background-color: #F2F4F3; color:#0A0908;">Editar</button>
                                </form>
                                <form action="" method="POST">
                                    <input type="hidden" name="id_usuario" value="<?= $usuario->id_user; ?>">
                                    <button class="boton" type="submit" name="del_usr">Eliminar</button>
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