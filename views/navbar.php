<header>
        <div class="container">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-8" id="titulo">
                    <h2>  
                        <a href="http://localhost/primerProyectoRecasens/index.php">
                        <!-- <a href="http://primerproyectorecasens.com/"> -->
                            BOCATAPAS 
                        </a>
                    </h2>
                </div>
                <div class="offset-lg-1 col-lg-1 col-2" >
                    <a href="http://localhost/primerProyectoRecasens/views/carrito.php">
                    <!-- <a href="http://primerproyectorecasens.com/views/carrito.php"> -->
                        <div id="carro">
                            <?= count($_SESSION['Sel'])?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </header>
    <nav class=" navbar-expand-lg barra">
    <div class="container barrasm">
    <div class="container">
    <div class="row barra">
        <div class="col-lg-3 col-3 abarra">
            SUGERENCIAS
        </div>
        <div class="col-lg-2 col-2 abarra">
           <?= "OFERTAS"?>
        </div>
        <div class="col-lg-2 col-2 abarra">
        <a href="http://localhost/primerProyectoRecasens/views/carta.php">
        <!-- <a href="http://primerproyectorecasens.com/views/carta.php"> -->
            CARTA
            </a>
        </div>
        
        <div class="col-lg-2 col-3 abarra">
           <?= " NOVEDADES"?>
        </div>
        <div class="col-lg-3 col-2 abarra">
           <?= "CONTACTO"?>
        </div>
    </div>
    </div>
</div>
  </nav>
  <!-- <div class="col-sm-12 col-2">
                    <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon custom-toggler"></span>
                        </button>
                        <div class="collapse navbar-collapse"  id="navbarSupportedContent">

                            <ul class="navbar-nav mb-2 mb-lg-2" style="background-color: black; border-radius:5px;">
                                <li class="nav-item col-lg-6">
                                <a class="nav-link abarra" href="#">SUGERENCIAS</a>
                                </li>
                                <li class="nav-item col-lg-8">
                                <a class="nav-link abarra" href="#">OFERTAS</a>
                                </li>
                                <li class="nav-item col-lg-8">
                                 <a href="http://localhost/primerProyectoRecasens/views/carta.php">
                                 <a class="nav-link abarra" href="http://primerproyectorecasens.com/views/carta.php">CARTA</a>
                                </li>
                                <li class="nav-item col-lg-8">
                                <a class="nav-link abarra" href="#">NOVEDADES</a>
                                </li>
                                <li class="nav-item col-lg-6">
                                <a class="nav-link abarra" href="#">CONTACTO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --> 