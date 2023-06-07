<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/hoja_estilo.css">
<header >
  <div class="container">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5"></div>
        <div class="col-lg-3 col-8" id="titulo">
          <h2>
            <a href=<?= base_url(''); ?>>
              BOCATAPAS
            </a>
          </h2>
        </div>
        <div class="offset-lg-1 col-lg-1 col-1" >
                  <a href=<?= base_url('?c=carrito'); ?>>
                        <div id="carro">
                            <?= count($_SESSION['Sel']) ?>
                        </div>
                    </a>
                </div> 
        <div class="col-lg-1 col-1">
          <div class="dropdown">
            <a class="dropdown-toggle" id="myDropdownButton">
              <div id="Session"></div>
            </a>
            <div class="dropdown-menu" id="myDropdown">
              <a href=<?= base_url('?c=EditPerfil'); ?>>Editar Mi Perfil</a>
              <a href=<?= base_url('?c=carrito'); ?>>Carrito <p><?= count($_SESSION['Sel']) ?></p></a>
              <a href=<?= base_url('?c=Pedidos'); ?>>Mis Pedidos</a>
              <a href="../config/cerrar_session.php">Cerrar Session</a>

            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-1 col-2">
        <nav class="navbar navbar-dark bg-dark d-sm-none">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="navbar-toggler-icon"></i>
            </button>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <nav class="d-none d-sm-block barra">
    <div class="container barrasm">
      <div class="container">
        <div class="row barra">
          <div class="col-lg-3 col-3 abarra">
            SUGERENCIAS
          </div>
          <div class="col-lg-2 col-2 abarra">
            OFERTAS
          </div>
          <div class="col-lg-2 col-2 abarra">
            <a href=<?= base_url('?c=carta'); ?>>
              CARTA
            </a>
          </div>

          <div class="col-lg-2 col-3 abarra">
            NOVEDADES
          </div>
          <div class="col-lg-3 col-2 abarra">
            CONTACTO
          </div>
        </div>
      </div>
    </div>
  </nav>


  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <a href="#">SUGERENCIAS</a>
      <hr>
      <a href="#">NOVEDADES</a>
      <hr>
      <a href="#">CONTACTO</a>
      <hr>
      <a href="#">OFERTAS</a>
      <hr>
      <a href=<?= base_url('?c=carta'); ?>>CARTA</a>
      <hr>

    </div>
  </div>

  </div>
</header>
</script>