 <header>
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
                  <a href=<?= base_url('?c=carrito');?>>
                        <div id="carro">
                            <?= count($_SESSION['Sel']) ?>
                        </div>
                    </a>
                </div>
                <div class="offset-lg-1 col-lg-1 col-1" >
                  <div>
                  <?php
                            if (isset($_POST['StopSession'])) {
                              echo "HOLA";
                              session_destroy();
                              header("Location: http://www.primerproyectorecasens.com/views/login.php");
                              exit;
                            }
                            ?>
                            <form action="" method="post">
                        <button class="botonCarta"type="submit" name="StopSession"></button>
                        </form>
                            
                     </div>       

                </div>
                <div class="col-lg-1 col-2" >
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
    <a href="#">SUGERENCIAS</a><hr>
    <a href="#">NOVEDADES</a><hr>
    <a href="#">CONTACTO</a><hr>
    <a href="#">OFERTAS</a><hr>
    <a href=<?= base_url('?c=carta'); ?>>CARTA</a><hr>
    
  </div>
</div>

        </div>
    </header>
    