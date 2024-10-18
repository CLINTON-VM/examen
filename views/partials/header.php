<!-- CREAMOS EL CAROUSEL -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <!-- 1RA IMAGEN DEL CARUSEL -->
        <div class="carousel-item active">
       
            <img src="     <?php echo asset('resources/img/banner.png') ?>" style="width: 100%" alt="...">
        </div>
    </div>
</div>
<!-- CREAMOS EL NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- LOGO DE LA PAGINA -->
    <a class="navbar-brand" href="#"><img src="
    <?php echo asset('resources/img/logoapp.png') ?>"
     width="80" height="80" alt=""></a>
    <!-- MENU DE NAVEGACION -->
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active pt-1 pb-1" href="/examen">Inicio</a>
            <!-- RECORREMOS EL ARRAY DE EJERCICIOS PARA MOSTRARLOS EN EL MENU DE NAVEGACION -->
            <?php foreach ($ejercicios as $key => $ejercicio) { ?>
                <a class="nav-link border rounded-pill border-secondary pt-1 pb-1 mr-1 ml-1" href="<?php echo $ejercicio['link'] ?>"><?php echo $ejercicio['titulo'] ?></a>
            <?php } ?>
        </div>
    </div>
    <span class="navbar-text">
        <h4 class="h4">
            IESTPPJ - Sistemas
        </h4>
    </span>
    <!-- BOTON PARA DESPLEGAR EL MENU CUANDO ES PEQUEÑA LA PAGINA -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>