<?php       /* tener 1 solo archivo para englobar TODAS las funciones encargadas de la vista, 
                y encapsularlas para no repetir codigo (footer, header, etc) */

function showHead(){
    $salida= '<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta charset="UTF-8">

        <title>Rotiseria "Andel"</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
    </head>';
    echo $salida;
}


function showHeader(){
    $salida= '
    <body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img id="logo" src="css/imagenes/logo.gif" alt="rotiseria ANDEL"></a>
                <a class="navbar-brand" href="index.php">
                    <h1 class="tituloNavegador">ROTISERIA ANDEL</h1>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="menu.php#spiedo">Spiedo</a></li>
                                <li><a class="dropdown-item" href="menu.php#ensaladas">Ensaladas</a></li>
                                <li><a class="dropdown-item" href="menu.php#pastas">Pastas</a></li>
                                <li><a class="dropdown-item" href="menu.php#platosCalientes">Platos Calientes</a></li>
                                <li><a class="dropdown-item" href="menu.php#platosFrios">Platos Frios</a></li>
                                <li><a class="dropdown-item" href="menu.php#minutas">Minutas</a></li>
                                <li><a class="dropdown-item" href="menu.php#sandwiches">Sandwiches</a></li>
                                <li><a class="dropdown-item" href="menu.php#tartas">Tartas</a></li>
                                <li><a class="dropdown-item" href="menu.php#pizzas">Pizzas</a></li>
                                <li><a class="dropdown-item" href="menu.php#bebidas">Bebidas</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php" target="_blank">Nosotros
                        </li></a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ubicación
                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="menu.php"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1563.852170892682!2d-60.27235873343025!3d-38.37896053943159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1621903586995!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#tituloFooter">Contacto
                    </li></a>
                        </li>


                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="compra.php" target="_blank"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart3" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </li></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>';
    echo $salida;
}


function showFooter(){
    $salida= '
    <footer>
        <h1 id="tituloFooter">Contacto</h1>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg><a href="tel:+542983446021" class="link"> 2983-446021</a></p>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
          </svg><a href="mailto:anddi.verne@hotmail.com" class="link">andel@hotmail.com</a></p>
        </div>
        <p id="creador">Creado por Andrea Verne y Joel Carbonetti</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>';
    echo $salida;
}


function showHome(){
    $salida= '
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
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
    </section>';
showHead();
showHeader();
echo $salida;
showFooter();
}


function showMenu(){
    $salida= ' 
    <div class="cuerpo">
    <section class=menu>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button id="spiedo" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Spiedo a las Brasas
                    </button></h2>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                    <table class="tabla">
                       
                      
                        <tr>
                            <td class="columna1">1/2 Pollo </td>
                            <td>$500</td>
                        </tr>
                        <tr>
                            <td class="columna1">Vacio </td>
                            <td>$2000 kg</td>
                        </tr>
                        <tr>
                            <td class="columna1">Colita de Cuadril </td>
                            <td>$2000 kg</td>
                        </tr>
                        <tr>
                            <td class="columna1">Bondiola de Cerdo </td>
                            <td>$2000 kg</td>
                        </tr>
                        <tr>
                            <td class="columna1">Chorizo </td>
                            <td>$200 c/u</td>
                        </tr>
                        <tr>
                            <td class="columna1">Morcilla </td>
                            <td>$200 c/u</td>
                        </tr>
                        <tr>
                            <td class="columna1">Filet de Brotola </td>
                            <td>$350 c/u</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
        

        /* $resultado_cat =  $conn->query("select * from prueba.categoria_socio") ;


        while ($categoria = $resultado_cat->fetch_assoc()) {  */ 

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button id="ensaladas" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    /* echo $categoria['nombre']; */ 
                    </button></h2>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">

                    <table class="tabla">
                      /* $resultado =  $conn->query("select * from prueba.socios where id_categoria =". $categoria['id']) ;


                        while ($socio = $resultado->fetch_assoc()) {  ?>

                        <tr>
                            <td class="columna1">
                            <?php echo $socio['nombre']; ?>
                            </td>
                            <td> <?php echo $socio['telefono']; */ </td>
                        </tr>
                        //} 

                    </table>
                </div>
            </div>

            //}

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button id="pastas" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                               Pastas
                        </button></h2>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">

                        <table class="tabla">
                            <tr>
                                <td class="columna1">
                                    Ravioli
                                </td>
                                <td> $300</td>
                            </tr>
                            <tr>
                                <td class="columna1">
                                    Ñoquis
                                </td>
                                <td> $360</td>
                            </tr>
                            <tr>
                                <td class="columna1">
                                    Tortellini
                                </td>
                                <td> $300</td>
                            </tr>
                            <tr>
                                <td class="columna1">
                                    Tortelloni
                                </td>
                                <td> $360</td>
                            </tr>
                            <tr>
                                <td class="columna1">
                                    Lasagne
                                </td>
                                <td> $600</td>
                            </tr>
                            <tr>
                                <td class="columna1">
                                    Cappelletti
                                </td>
                                <td> $380</td>
                            </tr>
                            <tr>
                                <td class="columna1">
                                    Cannelloni
                                </td>
                                <td> $450</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button id="platosCalientes" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                   Platos Calientes
                            </button></h2>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">

                            <table class="tabla">
                                <tr>
                                    <td class="columna1">Milanesa Carne </td>
                                    <td>$350 - $400 c/u</td>
                                </tr>
                                <tr>
                                    <td class="columna1">Suprema de Pollo </td>
                                    <td>$350 - $400 c/u</td>
                                </tr>
                                <tr>
                                    <td class="columna1">Milanesa Carne o Pollo Napolitana (Jamon, queso y salsa de tomate ) - para compartir
                                    </td>
                                    <td>$600</td>
                                </tr>
                                <tr>
                                    <td class="columna1">Arroz con Pollo (Cebolla, morrón, azafrán con pollo desmenusado y desgrasado) - Aporx. 600gr</td>
                                    <td>$450</td>
                                </tr>
                                <tr>
                                    <td class="columna1">Guiso de Lentejas (Cebolla, zanahoria, verduritas, panceta, chorizo colorado) - Aprox. 600gr</td>
                                    <td>$450</td>
                                </tr>
                                <tr>
                                    <td class="columna1">Guiso de Mondongo (Cebolla, zanahoria, verduritas, panceta, chorizo colorado, cebolla, papas, garbanzo) - Aprox.600gr</td>
                                    <td>$450</td>
                                </tr>
                                <tr>
                                    <td class="columna1">Locro (Fechas patrias)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button id="platosFrios" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                       Platos Frios
                                </button></h2>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">

                                <table class="tabla">
                                    <tr>
                                        <td class="columna1">Lechón </td>
                                        <td>$2000 kg
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="columna1">Lengua a la Vinagreta </td>
                                        <td>$1700 kg</td>
                                    </tr>
                                    <tr>
                                        <td class="columna1">Matambre de Carne </td class="columna1">
                                        <td>$2000 Kg</td>
                                    </tr>
                                    <tr>
                                        <td class="columna1">Matambre de Pollo </td>
                                        <td>$1700 kg</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button id="minutas" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                           Minutas
                                    </button></h2>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#accordionExample">

                                    <table class="tabla">
                                        <tr>
                                            <td class="columna1">Papas Fritas Chicas(Para 3 personas)</td>
                                            <td> $250</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">Papas Fritas Grandes(Para 4 o 5 personas) </td>
                                            <td>$300</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">Papas al Horno Chicas </td>
                                            <td>$250</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">Papas al Horno Grandes </td>
                                            <td>$350</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1"> Verduras Grilladas Chicas (Tomate, cbebolla, calabaza, zapallito y berejena</td>
                                            <td>$250</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">Verduras Grilladas Grande (Tomate, cbebolla, calabaza, zapallito y berejena)</td>
                                            <td>$350</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1"> Tortilla Grande (Papas, Acelga o Zapallito)</td>
                                            <td>$500</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1"> Tortilla Chica (Papas, Acelga o Zapallito </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">
                                                Rusa Chica Zanahoria, papas, arbejas y mayonesa (aprox 700gr)
                                            </td>
                                            <td>$250</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">
                                                Rusa Mediana Zanahoria, papas, arbejas y mayonesa (aprox 900gr)

                                            </td>
                                            <td> $300</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">
                                                Rusa Grande Zanahoria, papas, arbejas y mayonesa (aprox 1,2kg y hay mas grande)
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">
                                                Pure Hay de papa, calabaza o mixto. Aprox 500 gr
                                            </td>
                                            <td>$250</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">
                                                Croquetas Pueden ser de papas o verduras, rellenas de muzzarella y queso rallado
                                            </td>
                                            <td>$130</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">
                                                Empanadas Carne cortada a cuchillo, Pollo y Jamon Queso
                                            </td>
                                            <td>$70 c/u</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button id="sandwiches" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                               Sandwiches
                                        </button></h2>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">

                                        <table class="tabla">
                                            <tr>
                                                <td class="columna1">
                                                    Suprema Completo Tomate, lechuga y mayonesa
                                                </td>
                                                <td> $300</td>
                                            </tr>
                                            <tr>
                                                <td class="columna1">
                                                    Suprema Super Tomate, lechuga, jamon, queso y mayonesa
                                                </td>
                                                <td> $360</td>
                                            </tr>
                                            <tr>
                                                <td class="columna1">
                                                    Milanesa Carne Completo Tomate, lechuga y mayonesa
                                                </td>
                                                <td> $300</td>
                                            </tr>
                                            <tr>
                                                <td class="columna1">
                                                    Milanesa Carne Super Tomate, lechuga, jamon, queso y mayonesa
                                                </td>
                                                <td> $360</td>
                                            </tr>
                                            <tr>
                                                <td class="columna1">
                                                    Vacio o Bondiola o Colita de Cuadril Son 350gr de carne con Tomate, lechuga con salsa a elección (Criolla o Chimi-Churri)
                                                </td>
                                                <td> $600</td>
                                            </tr>
                                            <tr>
                                                <td class="columna1">
                                                    Lomito Tomate, lechuga y mayonesa
                                                </td>
                                                <td> $380</td>
                                            </tr>
                                            <tr>
                                                <td class="columna1">
                                                    Pollo a la brasas Tomate, lechuga y mayonesa
                                                </td>
                                                <td> $300</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEight">
                                            <button id="tartas" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                                   Tartas
                                            </button></h2>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingEight" data-bs-parent="#accordionExample">

                                            <table class="tabla">
                                                <tr>
                                                    <td class="columna1">
                                                        Jamón y queso Tomante, jamón, queso y oregano (Aprox. 500gr)
                                                    </td>
                                                    <td> $350</td>
                                                </tr>
                                                <tr>
                                                    <td class="columna1">
                                                        Pascualina Acelga, huevo, queso rallado y pimienta (Aprox. 500gr)
                                                    </td>
                                                    <td> $350</td>
                                                </tr>
                                                <tr>
                                                    <td class="columna1">
                                                        Atún</tp>
                                                        <tp>Cebolla, morrón, huevo y especies (Aprox. 500gr)

                                                    </td>
                                                    <td> $350</td>
                                                </tr>
                                                <tr>
                                                    <td class="columna1">
                                                        Brócoli-Calabaza Cebolla, queso rallado, choclo, calabaza, brócoli, muzarrela y especies (Aprox. 500gr)
                                                    </td>
                                                    <td> $350</td>
                                                </tr>
                                                <tr>
                                                    <td class="columna1">
                                                        Caprese Queso, tomate y albaca (Aprox. 500gr)
                                                    </td>
                                                    <td> $350</td>
                                                </tr>



                                            </table>
                                        </div>
                                    </div>

                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingNine">
                                                <button id="pizzas" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                                       Pizzas
                                                </button></h2>
                                            </h2>
                                            <div id="collapseNine" class="accordion-collapse collapse show" aria-labelledby="headingNine" data-bs-parent="#accordionExample">

                                                <table class="tabla">
                                                    <tr>
                                                        <td class="columna1">
                                                            Jamón y queso Tomante, jamón, queso y oregano
                                                        </td>
                                                        <td> $450</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="columna1">
                                                            Acelga, huevo, queso rallado y pimienta
                                                        </td>
                                                        <td> $450</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="columna1">
                                                            Atún</tp>
                                                            <tp>Cebolla, morrón, huevo y especies

                                                        </td>
                                                        <td> $450</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="columna1">
                                                            Brócoli-Calabaza Cebolla, queso rallado, choclo, calabaza, brócoli, muzarrela y especies
                                                        </td>
                                                        <td> $450</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="columna1">
                                                            Caprese Queso, tomate y albaca
                                                        </td>
                                                        <td> $450</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="columna1">
                                                            Queso, Huevo frito y panceta
                                                        </td>
                                                        <td> $500</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTen">
                                                    <button id="bebidas" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                                           Bebidas
                                                    </button></h2>
                                                </h2>
                                                <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen" data-bs-parent="#accordionExample">

                                                    <table class="tabla">
                                                        <tr>
                                                            <td class="columna1">Coca Cola 1,5 lts</td>
                                                            <td> $180</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Coca Cola 500 cc</td>
                                                            <td> $80</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Sprite 1,5 lts</td>
                                                            <td> $180</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Sprite 500 cc</td>
                                                            <td> $80</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Fanta 1,5 lts</td>
                                                            <td> $180</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Fanta 500 cc</td>
                                                            <td> $80</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Coca Cola - Sin Azucar 1,5 lts</td>
                                                            <td> $180</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Coca Cola - Sin Azucar 500 cc</td>
                                                            <td> $80</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Pomelo/ Tonica Schweppes 1.5 lts</td>
                                                            <td> $180</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Soda</td>
                                                            <td> $120</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Aguas</td>
                                                            <td> $100</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Cerveza en Latas</td>
                                                            <td> $100</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="columna1">Andes (Rubia y Roja), Quilmes (Rubia y Negra). Stella Artois (Rubia y Negra), Brahma</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <!--<div id="col1">-->
        <h1 id="tituloFooter">Contacto</h1>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg><a href="tel:+542983446021" class="link"> 2983-446021</a></p>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
          </svg><a href="mailto:anddi.verne@hotmail.com" class="link">andel@hotmail.com</a></p>
        </div>

        <!--<div id="col2">
        <h1 class="tituloFooter">Ubicacion</h1>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1563.852170892682!2d-60.27235873343025!3d-38.37896053943159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1621903586995!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        
    </div>-->';
showHead();
showHeader();
echo $salida;
showFooter();
}

function showNosotros(){
    $salida= '
    <article class="main">
        <section class="introduccion">
            <h1>Quiénes somos</h1>
            <p>Andel nace en abril de 2021 como idea de dos compañeros decididos a crear un concepto innovador para brindar la más exquisita, única e inolvidable experiencia mediante la prestación de una variedad de servicios y productos alimenticios al
                mejor estilo y con la más alta calidad.</p>
            <p>Somos una rotisería en la que preparamos comida para llevar. Contamos con gran prestigio en la zona, Tres Arroyos, Buenos Aires.</p>
            <p>Tenemos una experiencia de más de 45 años en el rubro, ofreciendo pollos a la brasa, ensaladas y toda clase de comidas.</p>
            <p>Elaboramos nuestros platos con los más selectos ingredientes para así conservar el auténtico sabor que tanto gusta a los comensales que nos visitan.</p>
            <p> Contamos con personal especializado y cocineros.</p>
        </section>


        <section class="contenido-box">
            <div id="mision">
                <h1>Misión</h1>
                <p>La empresa Andael tendrá como misión única y exclusivamente velar por el bienestar de sus clientes dándoles a conocer la mejor variedad en comidaque ellos jamás se podrían llegar a imaginar.</p>
                <p>Seremos una empresa con un alto control de calidad para crecer cada día mas y mas en el sector comercial y llegar a ser reconocidos a nivel nacional e internacional.</p>
            </div>

            <div id="vision">
                <h1>Visión</h1>
                <p>Conociendo nuestro entorno comercial y sabiendo hacia donde va encaminado veremos mas allá de este y llegaremos a distintas partes del mundo para que nos conozcan y reconozcan como una de las mejores empresas dedicadas a la fabricación
                    y venta de empanadas en el mundo.</p>
            </div>

            <div id="objetivos">
                <h1>Objetivos</h1>
                <ul>
                    <li>Atraer la atención de nuestros clientes con la mejor variedad de empanadas a muy buenos precios.</li>
                    <li>Ser reconocidos a nivel nacional e internacional.</li>
                    <li>Tener siempre presente que el cliente es lo principal pues gracias a ellos creceremos según lo esperado.</li>
                    <li>Mejorar la calidad de vida de muchas personas a nivel alimenticio.</li>
                    <li>Pensar siempre en el futuro e ir mejorando y evolucionando cada día mas y mas.</li>
                </ul>
            </div>
        </section>
    </article>';
showHead();
showHeader();
echo $salida;
showFooter();
}


function showCompra(){
    $salida= '<div class="cuerpo">

    <form>
        <h1>ARMA TU PEDIDO</h1>

        <section class="datosPersonales">
            <form class="row g-3 needs-validation" novalidate>
                <div id="nombre">
                    <label for="validationCustom01" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="validationCustom01">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div id="dni">
                    <label for="validationCustom02" class="form-label">D.N.I:</label>
                    <input type="number" class="form-control" id="validationCustom02">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div id="direccion">
                    <label for="validationCustom03" class="form-label">Direccion:</label>
                    <input type="text" class="form-control" id="validationCustom03">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
        </section>
        <section class="pedido">

            <div id="seleccion">
                <p id="seleccione">Seleccione un producto</p>
                <select id="producto" class="form-select form-select-sm" aria-label="Default select example">
                    <option selected disabled>Elija una opcion</option>
                    <option value="SandwichMilanesaCarneSuper">(Promo 2) Sandwich Milanesa Carne Super</option>
                    <option value="Promo3">(Promo 3) Spiedo a las brasas + Papas fritas</option>
                    <option value="PolloEntero">Pollo Entero</option>
                    <option value="1/2Pollo">1/2 Pollo</option>
                    <option value="Vacio">Vacio</option>
                    <option value="ColitaCuadril">Colita de Cuadril</option>
                    <option value="BondiolaCerdo">Bondiola de Cerdo</option>
                    <option value="Chorizo">Chorizo</option>
                    <option value="Morcilla">Morcilla</option>
                    <option value="FiletBrotola">Filet de Brotola</option>
                    <option value="EnsaladaChica">Ensalada Chica</option>
                    <option value="EnsaladaMedia">Ensalada Media</option>
                    <option value="EnsaladaGrande">Ensalada Grande</option>
                    <option value="Ravioli">Ravioli</option>
                    <option value="Ñoquis">Ñoquis</option>
                    <option value="Tortellini">Tortellini</option>
                    <option value="Tortelloni">Tortelloni</option>
                    <option value="Lasagne">Lasagne</option>
                    <option value="Cappelletti">Cappelletti</option>
                    <option value="Cannelloni">Cannelloni</option>
                    <option value="MilanesaCarne">Milanesa Carne</option>
                    <option value="SupremaPollo">Suprema de Pollo	</option>
                    <option value="MilanesaCarneNapolitana">Milanesa de Carne Napolitana</option>
                    <option value="MilanesaPolloNapolitana">Milanesa de Pollo Napolitana</option>
                    <option value="ArrozPollo">Arroz con Pollo</option>
                    <option value="GuisoLentejas">Guiso de Lentejas</option>
                    <option value="GuisoMondongo">Guiso de Mondongo</option>
                    <option value="Locro">Locro </option>
                    <option value="Lechón">Lechón</option>
                    <option value="LenguaVinagreta">Lengua a la Vinagreta</option>
                    <option value="MatambreCarne">Matambre de Carne</option>
                    <option value="MatambrePollo">Matambre de Pollo</option>
                    <option value="PapasFritasChicas">Papas Fritas Chicas</option>
                    <option value="PapasFritasGrandes">Papas Fritas Grandes</option>
                    <option value="PapasHornoChicas">Papas al Horno Chicas</option>
                    <option value="PapasHornoGrandes">Papas al Horno Grandes</option>
                    <option value="VerdurasGrilladasChicas">Verduras Grilladas Chicas</option>
                    <option value="VerdurasGrilladasGrandes">Verduras Grilladas Grandes</option>
                    <option value="TortillaGrande">Tortilla Grande</option>
                    <option value="TortillaChica">Tortilla Chica</option>
                    <option value="RusaChica">Rusa Chica</option>
                    <option value="RusaMediana">Rusa Mediana</option>
                    <option value="RusaGrande">Rusa Grande</option>
                    <option value="PurePapa">Pure de papa</option>
                    <option value="PureCalabaza">Pure de calabaza </option>
                    <option value="PureMixto">Pure de mixto</option>
                    <option value="CroquetasPapa">Croquetas de papas</option>
                    <option value="CroquetasVerdura">Croquetas de verduras</option>
                    <option value="EmpanadasCarne">Empanadas de carne</option>
                    <option value="EmpanadasPollo">Empanadas de pollo</option>
                    <option value="EmpanadasJamonyQueso">Empanadas de Jamon y Queso</option>
                    <option value="SandwichSuprema">Sandwich Suprema Completo</option>
                    <option value="SandwichSupremaSuper">Sandwich Suprema Super</option>
                    <option value="SandwichMilanesaCarneCompleta">Sandwich Milanesa Carne Completo</option>
                    
                    <option value="SandwichVacio">Sandwich de vacio</option>
                    <option value="SandwichBondiola">Sandwich de bondiola</option>
                    <option value="SandwichColaCuadril">Sandwich colita de cuadril</option>
                    <option value="SandwichLomito">Sandwich de lomito</option>
                    <option value="SandwichPollo">Sandwich de pollo</option>
                    <option value="TartaJamonyQueso">Tarta de jamon y queso</option>
                    <option value="TartaAcelga">Tartade de acelga</option>
                    <option value="TartaAtun">Tarta de atun</option>
                    <option value="TartaBrocoliCalabaza">Tarta de brocoli y calabaza</option>
                    <option value="TartaCapresse">Tarta Capresse</option>
                    <option value="PizzaJamonyQueso">Pizza de jamon y queso</option>
                    <option value="PizzaAcelga">Pizza de de acelga</option>
                    <option value="PizzaAtun">Pizza de atun</option>
                    <option value="PizzaBrocoliCalabaza">Pizza de brocoli y calabaza</option>
                    <option value="PizzaCapresse">Pizza Capresse</option>
                    <option value="PizzaPancetaHuevo">Pizza de panceta y huevo</option>
                    <option value="Coca1.5lts">Coca Cola 1,5 lts </option>
                    <option value="Coca500cc">Coca Cola 500 cc</option>
                    <option value="Sprite1.5lts">Sprite 1,5 lts </option>
                    <option value="Sprite500cc">Sprite 500 cc</option>
                    <option value="Fantaa1.5lts">Fanta 1,5 lts </option>
                    <option value="Fanta500cc">Fanta 500 cc</option>
                    <option value="CocaLight1.5lts">Coca Cola - Sin Azucar 1,5 lts </option>
                    <option value="CocaLight500cc">Coca Cola - Sin Azucar 500 cc</option>
                    <option value="SchweppesPomelo1.5lts">Schweppes de pomelo 1,5</option>
                    <option value="SchweppesTonica1.5lts">Schweppes de tonica 1,5</option>
                    <option value="Soda">Soda </option>
                    <option value="Agua">Agua</option>
                    <option value="AndesRubia">Andes Rubia </option>
                    <option value="AndesRoja">Andes Roja</option>
                    <option value="QuilmesRubia">Quilmes Rubia </option>
                    <option value="QuilmesNegra">Quilmes Negra</option>
                    <option value="StellaRubia">Stella Rubia </option>
                    <option value="StellaNegra">Stella Negra</option>
                    <option value="Brahma">Brahma </option>
                 </select>
            </div>
            <div id="precios">
                <label for="precio" class="form-label">Precio ($)</label>
                <input type="number" id="precio" class="form-control" disabled>
            </div>
            <div id="cantidades">
                <label for="cantidad" class="form-label">cantidad</label>
                <input type="number" id="cantidad" class="form-control">
            </div>

            <div id="botones">
                <button id="btn-agregar" class="btn btn-dark">Agregar</button>
                <button id="btn-Promo1" class="btn btn-dark">Promo1</button>
                <button id="btn-borrar" class="btn btn-dark" type="reset">Borrar</button>
            </div>
        </section>
        <table id="tabla">

        </table>

        <p id="total">
        </p>
        </section>

        <div class="pedido2">
            <p class="encabezado"> Qué preferís? </p>

            <p class="pref">
                <input class="check" type="radio" name="retiro" value="delivery" disabled/>Delivery ($80)
                <input class="check" type="radio" name="retiro" value="sucursal" disabled/> Retiro en sucursal
            </p>
            <p class="desabilitado">Debido al DNU presidencial solo se hacen envíos a domicilio, no se permite el retiro en sucursal</p>

            <p class="pref"> Descripción del lugar para mayor precisión a la hora de la entrega:</p>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div id="captcha">
            <p class="pref">Ingrese el captcha:</p>

            <div id="recuadro">
                <p id="mainCaptcha"> </p>
            </div>
            <div class="contenidoCaptcha">
                <button class="btn btn-dark" id="refresh" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                        <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                      </svg></button>
            </div>
            <div class="contenidoCaptcha">
                <p class="pref"><input id="txtInput" type="text"></p>

                <button class="btn btn-dark" id="btn-enviar" type="submit">Registrarse</button>
            </div>
        </div>

        <p id="validacion"></p>
        </form>
        <script src="js/carrito1.js"></script>';
showHead();
showHeader();
echo $salida;
showFooter();
}

?>