<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Meta agregado por Bs-->

    <meta charset="UTF-8">

    <title>Rotiseria "Andel"</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

<?php 
                                
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                
                                // Create connection
                                $conn = new mysqli($servername, $username, $password);
                                
                                // Check connection
                                if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                                }
?>
    <div class="contenedor">

        <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img id="logo" src="css/imagenes/logo.gif" alt="rotiseria ANDEL"></a>
                    <a class="navbar-brand" href="index.html">
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
                                    <li><a class="dropdown-item" href="menu.html#spiedo">Spiedo</a></li>
                                    <li><a class="dropdown-item" href="menu.html#ensaladas">Ensaladas</a></li>
                                    <li><a class="dropdown-item" href="menu.html#pastas">Pastas</a></li>
                                    <li><a class="dropdown-item" href="menu.html#platosCalientes">Platos Calientes</a></li>
                                    <li><a class="dropdown-item" href="menu.html#platosFrios">Platos Frios</a></li>
                                    <li><a class="dropdown-item" href="menu.html#minutas">Minutas</a></li>
                                    <li><a class="dropdown-item" href="menu.html#sandwiches">Sandwiches</a></li>
                                    <li><a class="dropdown-item" href="menu.html#tartas">Tartas</a></li>
                                    <li><a class="dropdown-item" href="menu.html#pizzas">Pizzas</a></li>
                                    <li><a class="dropdown-item" href="menu.html#bebidas">Bebidas</a></li>
                                </ul>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="nosotros.html" target="_blank">Nosotros
                            </li></a>
    
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ubicación
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="menu.html"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1563.852170892682!2d-60.27235873343025!3d-38.37896053943159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1621903586995!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></a></li>
                                </ul>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="#tituloFooter">Contacto
                        </li></a>
                            </li>
    
    
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="compra.html" target="_blank"><svg
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
        </header>
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
                
                <?php  
                $resultado_cat =  $conn->query("select * from prueba.categoria_socio") ;


                while ($categoria = $resultado_cat->fetch_assoc()) {  ?>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button id="ensaladas" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <?php echo $categoria['nombre']; ?>
                            </button></h2>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">

                            <table class="tabla">
                              <?php  $resultado =  $conn->query("select * from prueba.socios where id_categoria =". $categoria['id']) ;


                                while ($socio = $resultado->fetch_assoc()) {  ?>

                                <tr>
                                    <td class="columna1">
                                    <?php echo $socio['nombre']; ?>
                                    </td>
                                    <td> <?php echo $socio['telefono']; ?></td>
                                </tr>
                                <?php } ?>

                            </table>
                        </div>
                    </div>

                    <?php } ?>

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
                
            </div>-->
            
            <p id="creador">Creado por Andrea Verne y Joel Carbonetti</p>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>