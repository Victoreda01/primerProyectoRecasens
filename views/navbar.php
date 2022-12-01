<header>
        <div class="container">
            <div class="row align-items-center">
            <div class="col-5"></div>
                <div class="col-1" id="titulo">
                    <h2> <!-- <a href="http://localhost/primerProyectoRecasens/index.php"> --> <a href="http://primerproyectorecasens.com/">BOCATAPAS </a></h2>
                </div>
                <div class="col-3"></div>
                <div class="col-2">
<!--                     <a href="http://localhost/primerProyectoRecasens/views/carrito.php"> -->
                    <a href="http://primerproyectorecasens.com/views/carrito.php">
                        <div id="carro">
                            <?= count($_SESSION['Sel'])?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <nav class=" navbar-expand-lg barra">
    <div class="container">
    <div class="row barra ">
        <div class="col-3 abarra">
            NOVEDADES
        </div>
        <div class="col-2 abarra">
           <?= "OFERTA"?>
        </div>
        <div class="col-2 abarra">
        <!-- <a href="http://localhost/primerProyectoRecasens/views/carta.php"> -->
        <a href="http://primerproyectorecasens.com/views/carta.php">
            CARTA
            </a>
        </div>
        
        <div class="col-2 abarra">
           <?= "OFERTA"?>
        </div>
        <div class="col-3 abarra">
           <?= "OFERTA"?>
        </div>
    </div>
</div>
  </nav>