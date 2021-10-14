{include file="header.tpl"}
{include file="nav.tpl"}

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
                    <option value="SupremaPollo">Suprema de Pollo </option>
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
                <input class="check" type="radio" name="retiro" value="delivery" disabled />Delivery ($80)
                <input class="check" type="radio" name="retiro" value="sucursal" disabled /> Retiro en sucursal
            </p>
            <p class="desabilitado">Debido al DNU presidencial solo se hacen envíos a domicilio, no se permite el retiro
                en sucursal</p>

            <p class="pref"> Descripción del lugar para mayor precisión a la hora de la entrega:</p>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div id="captcha">
            <p class="pref">Ingrese el captcha:</p>

            <div id="recuadro">
                <p id="mainCaptcha"> </p>
            </div>
            <div class="contenidoCaptcha">
                <button class="btn btn-dark" id="refresh" type="button"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z" />
                        <path
                            d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z" />
                    </svg></button>
            </div>
            <div class="contenidoCaptcha">
                <p class="pref"><input id="txtInput" type="text"></p>

                <button class="btn btn-dark" id="btn-enviar" type="submit">Registrarse</button>
            </div>
        </div>

        <p id="validacion"></p>
    </form>
    <script src="js/carrito1.js"></script>
{include file="footer.tpl"}