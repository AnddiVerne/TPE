{include file="header.tpl"}
{include file="nav.tpl"}

<table class="tabla">
    {foreach from=$foods item=plato}

        <tr>
            <td id="idPlato">
                {$plato->id_plato}
            </td>
            <td>
                {$plato->nombre_plato}
            </td>
            <td>
                {$plato->precio}
            </td>
            <td>
                {$plato->id_categoria}
            </td>
            <td>
                {$plato->detalle}
            </td>
        </tr>
    {/foreach}
</table>

{* $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } *}


<div class="cuerpo">
    <section class=menu>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button id="spiedo" class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Spiedo a las Brasas
                    </button>
                </h2>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">

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

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button id="pastas" class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Pastas
                    </button>
                </h2>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">

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
                        <button id="platosCalientes" class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Platos Calientes
                        </button>
                    </h2>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">

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
                                <td class="columna1">Milanesa Carne o Pollo Napolitana (Jamon, queso y salsa
                                    de tomate ) - para compartir
                                </td>
                                <td>$600</td>
                            </tr>
                            <tr>
                                <td class="columna1">Arroz con Pollo (Cebolla, morrón, azafrán con pollo
                                    desmenusado y desgrasado) - Aporx. 600gr</td>
                                <td>$450</td>
                            </tr>
                            <tr>
                                <td class="columna1">Guiso de Lentejas (Cebolla, zanahoria, verduritas,
                                    panceta, chorizo colorado) - Aprox. 600gr</td>
                                <td>$450</td>
                            </tr>
                            <tr>
                                <td class="columna1">Guiso de Mondongo (Cebolla, zanahoria, verduritas,
                                    panceta, chorizo colorado, cebolla, papas, garbanzo) - Aprox.600gr</td>
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
                            <button id="platosFrios" class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                Platos Frios
                            </button>
                        </h2>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">

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
                                <button id="minutas" class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    Minutas
                                </button>
                            </h2>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">

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
                                        <td class="columna1"> Verduras Grilladas Chicas (Tomate, cbebolla,
                                            calabaza, zapallito y berejena</td>
                                        <td>$250</td>
                                    </tr>
                                    <tr>
                                        <td class="columna1">Verduras Grilladas Grande (Tomate, cbebolla,
                                            calabaza, zapallito y berejena)</td>
                                        <td>$350</td>
                                    </tr>
                                    <tr>
                                        <td class="columna1"> Tortilla Grande (Papas, Acelga o Zapallito)
                                        </td>
                                        <td>$500</td>
                                    </tr>
                                    <tr>
                                        <td class="columna1"> Tortilla Chica (Papas, Acelga o Zapallito
                                        </td>
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
                                            Rusa Grande Zanahoria, papas, arbejas y mayonesa (aprox 1,2kg y
                                            hay mas grande)
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
                                            Croquetas Pueden ser de papas o verduras, rellenas de muzzarella
                                            y queso rallado
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
                                    <button id="sandwiches" class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true"
                                        aria-controls="collapseSeven">
                                        Sandwiches
                                    </button>
                                </h2>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse show"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">

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
                                                Milanesa Carne Super Tomate, lechuga, jamon, queso y
                                                mayonesa
                                            </td>
                                            <td> $360</td>
                                        </tr>
                                        <tr>
                                            <td class="columna1">
                                                Vacio o Bondiola o Colita de Cuadril Son 350gr de carne con
                                                Tomate, lechuga con salsa a elección (Criolla o
                                                Chimi-Churri)
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
                                        <button id="tartas" class="accordion-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="true" aria-controls="collapseEight">
                                            Tartas
                                        </button>
                                    </h2>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse show"
                                        aria-labelledby="headingEight" data-bs-parent="#accordionExample">

                                        <table class="tabla">
                                            <tr>
                                                <td class="columna1">
                                                    Jamón y queso Tomante, jamón, queso y oregano (Aprox.
                                                    500gr)
                                                </td>
                                                <td> $350</td>
                                            </tr>
                                            <tr>
                                                <td class="columna1">
                                                    Pascualina Acelga, huevo, queso rallado y pimienta
                                                    (Aprox. 500gr)
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
                                                    Brócoli-Calabaza Cebolla, queso rallado, choclo,
                                                    calabaza, brócoli, muzarrela y especies (Aprox. 500gr)
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
                                            <button id="pizzas" class="accordion-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                aria-expanded="true" aria-controls="collapseNine">
                                                Pizzas
                                            </button>
                                        </h2>
                                        </h2>
                                        <div id="collapseNine" class="accordion-collapse collapse show"
                                            aria-labelledby="headingNine" data-bs-parent="#accordionExample">

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
                                                        Brócoli-Calabaza Cebolla, queso rallado, choclo,
                                                        calabaza, brócoli, muzarrela y especies
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
                                                <button id="bebidas" class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                    aria-expanded="true" aria-controls="collapseTen">
                                                    Bebidas
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseTen" class="accordion-collapse collapse show"
                                                aria-labelledby="headingTen" data-bs-parent="#accordionExample">

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
                                                        <td class="columna1">Coca Cola - Sin Azucar 1,5 lts
                                                        </td>
                                                        <td> $180</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="columna1">Coca Cola - Sin Azucar 500 cc
                                                        </td>
                                                        <td> $80</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="columna1">Pomelo/ Tonica Schweppes 1.5
                                                            lts</td>
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
                                                        <td class="columna1">Andes (Rubia y Roja), Quilmes
                                                            (Rubia y Negra). Stella Artois (Rubia y Negra),
                                                            Brahma</td>
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
</div>

{include file="footer.tpl"}