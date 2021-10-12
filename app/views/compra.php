<?php 
function showCompra(){
    $salida= '<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">

    <title>Rotiseria "Andel"</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="contenedor">

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
    </header>

        <div class="cuerpo">

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

        <script src="js/carrito1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>';
echo $salida;
}

?>