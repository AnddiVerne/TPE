{include file="header.tpl"}
{include file="nav.tpl"}
<section class="promociones">
    <h1> PROMOCIONES DE LA SEMANA</h1>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img class="promo" src="css/imagenes/combo1.gif" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img class="promo" src="css/imagenes/combo2.gif" alt="...">
            </div>
            <div class="carousel-item">
                <img class="promo" src="css/imagenes/combo3.gif" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</section>

<section class="producto">
    <div id="box1">

        <div class="box">
            <img class="producto" src="css/imagenes/pizza.png" alt="pizzas">

            <h2 class="tituloProductos">PIZZAS</h2>
        </div>

    </div>
    <div id="box2">

        <div class="box">
            <img class="producto" src="css/imagenes/empanadas.png" alt="empanadas">
            <h2 class="tituloProductos">EMPANADAS</h2>
        </div>

    </div>

    <div id="box3">

        <div class="box">
            <img class="producto" src="css/imagenes/tarta.png" alt="tartas">
            <h2 class="tituloProductos">TARTAS</h2>
        </div>

    </div>
    <div id="box4">

        <div class="box">
            <img class="producto" src="css/imagenes/postres.png" alt="postres">

            <h2 class="tituloProductos">POSTRES</h2>
        </div>

    </div>
    <div id="box5">

        <div class="box">
            <img class="producto" src="css/imagenes/comidaRapida.png" alt="Comida rapida">
            <h2 class="tituloProductos">COMIDA RÁPIDA</h2>
        </div>

    </div>
    <div id="box6">

        <div class="box">
            <img class="producto" src="css/imagenes/spiedo.png" alt="spiedo">
            <h2 class="tituloProductos">SPIEDO</h2>
        </div>

    </div>
</section>
{include file="footer.tpl"}