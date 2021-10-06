"use strict"

let inputproducto = document.querySelector("#producto");
let inputcantidad = document.querySelector("#cantidad");
let inputprecio = document.querySelector("#precio");

let DESCUENTO = 0.9;

const selectElement = document.querySelector('#producto');
selectElement.addEventListener('change', (event) => {

    let precio = 0;

    switch (inputproducto.value) {

        case "EmpanadasCarne":
        case "EmpanadasPollo":
        case "EmpanadasJamonyQueso":
            document.querySelector('#precio').value = 70;

            break;
        case "Coca500cc":
        case "Sprite500cc":
        case "Fanta500cc":
        case "CocaLight500cc":
            document.querySelector('#precio').value = 80;
            break;
        case "Agua":
        case "AndesRubia":
        case "AndesRoja":
        case "QuilmesRubia":
        case "QuilmesNegra":
        case "StellaRubia":
        case "StellaNegra":
        case "Brahma":
            document.querySelector('#precio').value = 100;
            break;
        case "Soda":
            document.querySelector('#precio').value = 120;
            break;
        case "CroquetasPapa":
        case "CroquetasVerdura":
            document.querySelector('#precio').value = 130;
            break;
        case "Coca1.5lts":
        case "Sprite1.5lts":
        case "Fanta1.5lts":
        case "CocaLight1.5lts":
        case "SchweppesPomelo1.5lts":
        case "SchweppesTonica1.5lts":
            document.querySelector('#precio').value = 180;
            break;
        case "EnsaladaChica":
        case "Morcilla":
        case "Chorizo":
            document.querySelector('#precio').value = 200;
            break;
        case "PapasFritasChicas":
        case "PapasHornoChicas":
        case "VerdurasGrilladasChicas":
        case "RusaChica":
        case "PurePapa":
        case "PureCalabaza":
        case "PureMixto":
            document.querySelector('#precio').value = 250;
            break;
        case "EnsaladaMedia":
        case "Ravioli":
        case "Tortellini":
        case "PapasFritasGrandes":
        case "RusaMediana":
        case "SandwichSuprema":
        case "SandwichMilanesaCarneCompleta":
        case "SandwichMilanesaCarneSuper":
        case "SandwichPollo":
            document.querySelector('#precio').value = 300;
            break;

        case "FiletBrotola":
        case "MilanesaCarne":
        case "SupremaPollo":
        case "PapasHornoGrandes":
        case "VerdurasGrilladasGrandes":
        case "TartaJamonyQueso":
        case "TartaAcelga":
        case "TartaAtun":
        case "TartaBrocoliCalabaza":
        case "TartaCapresse":
            document.querySelector('#precio').value = 350;
            break;
        case "Promo1":
            document.querySelector('#precio').value = 350;

            break;
        case "Tortelloni":
        case "Ñoquis":
        case "SandwichSupremaSuper":
        case "SandwichMilanesaCarneSuper":
            document.querySelector('#precio').value = 360;
            break;
        case "Cappelletti":
        case "SandwichLomito":
            document.querySelector('#precio').value = 380;
            break;
        case "EnsaladaGrande":
        case "RusaGrande":
        case "TortillaChica":
            document.querySelector('#precio').value = 400;
            break;
        case "GuisoMondongo":
        case "GuisoLentejas":
        case "ArrozPollo":
        case "Cannelloni":
        case "PizzaJamonyQueso":
        case "PizzaAcelga":
        case "PizzaAtun":
        case "PizzaBrocoliCalabaza":
        case "PizzaCapresse":
            document.querySelector('#precio').value = 450;
            break;
        case "PizzaPancetaHuevo":
        case "TortillaGrande":
        case "1/2Pollo":
            document.querySelector('#precio').value = 500;
            break;
        case "Lasagne":
        case "MilanesaCarneNapolitana":
        case "MilanesaPolloNapolitana":
        case "SandwichVacio":
        case "SandwichColaCuadril":
        case "SandwichBondiola":
            document.querySelector('#precio').value = 600;
            break;
        case "PolloEntero":
            document.querySelector('#precio').value = 950;
            break;
        case "Promo3":
            document.querySelector('#precio').value = 1100;
            break;
        case "LenguaVinagreta":
        case "MatambrePollo":
            document.querySelector('#precio').value = 1700;
            break;
        case "Vacio":
        case "ColitaCuadril":
        case "BondiolaCerdo":
        case "Lechón":
        case "MatambreCarne":
            document.querySelector('#precio').value = 2000;
            break;
    }
});
let btnAgregar = document.querySelector("#btn-agregar");
btnAgregar.addEventListener("click", agregar);

let btnBorrar = document.querySelector("#btn-borrar");
btnBorrar.addEventListener("click", borrar);

let btnPromo1 = document.querySelector("#btn-Promo1");
btnPromo1.addEventListener("click", promo1);

/*let btnPromo1 = document.querySelector("#btn-promo1");
btnPromo1.addEventListener("click", promo1);

let btnPromo2 = document.querySelector("#btn-promo2");
btnPromo2.addEventListener("click", promo2);

let btnPromo3 = document.querySelector("#btn-promo3");
btnPromo3.addEventListener("click", promo3);*/

let productos = [{
    "producto": "Delivery",
    "cantidad": 1,
    "precio": 80,
    "subtotal": 80,
}];

mostrar();

function agregar(evento) {
    evento.preventDefault();
    //console.log("Entra en funcion Agregar");
    let producto = inputproducto.value;
    let cantidad = inputcantidad.value;
    let precio = parseFloat(parseFloat(inputprecio.value).toFixed(2));
    let subtotal = inputcantidad.value * inputprecio.value;

    let renglon = {
        "producto": producto,
        "cantidad": cantidad,
        "precio": precio,
        "subtotal": subtotal
    }
    if (cantidad > 0) {
        productos.push(renglon);
        inputproducto.value = "";
        inputcantidad.value = "";
        inputprecio.value = "";
        mostrar();
    }

    total();
}

function promo1(event) {
    event.preventDefault();
    productos.push({
        "producto": "Papas Fritas",
        "cantidad": 1,
        "precio": 100,
        "subtotal": 100
    }, {
        "producto": "Gaseosa 500ml",
        "cantidad": 1,
        "precio": 100,
        "subtotal": 100
    }, {
        "producto": "Sandwich de milanesa",
        "cantidad": 1,
        "precio": 200,
        "subtotal": 200
    });
    mostrar();
    total();
}


function borrar() {

    let total = document.querySelector("#total");

    let borrar = productos.length;

    if (borrar > 1) {
        for (let i = 1; i < borrar; i++) {
            productos.pop();
        }
        mostrar();
        total.innerHTML = `Total: $80`;

    }
}

function mostrar() {
    let tabla = document.querySelector("#tabla");

    tabla.innerHTML = `<thead>
    <tr class="tituloTabla">
        <td class="producto1">Producto</td>
        <td class="columna">Precio</td>
        <td class="columna">Cantidad</td>
        <td class="columna">Subtotal</td>
    </tr>
</thead>`;

    for (let i = 0; i < productos.length; i++) {

        if (productos[i].producto == 'SandwichMilanesaCarneSuper') {

            tabla.innerHTML += `<tr class="resaltado">
            <td class="producto1"> Super Sandwich -----> ${100-(DESCUENTO.toFixed(1))*100}% DESCUENTO!!</td>
            <td class="columna">$ ${productos[i].precio*DESCUENTO}</td>
            <td class="columna">${productos[i].cantidad}</td>
            <td class="columna"> $ ${productos[i].precio*DESCUENTO*productos[i].cantidad}</td>
            </tr>`;
        } else if (productos[i].producto == 'Promo3') {
            tabla.innerHTML += `<tr class="resaltado">
            <td class="producto1">"Papas Fritas + Spiedo a las brasas"</td>
            <td class="columna">$ ${productos[i].precio}</td>
            <td class="columna">${productos[i].cantidad}</td>
            <td class="columna"> $ ${productos[i].subtotal}</td>
            </tr>`;

        } else {
            tabla.innerHTML += `
        <td class="producto1" >${productos[i].producto} </td>
        <td class="columna"> $ ${productos[i].precio} </td>
        <td class="columna">${productos[i].cantidad}</td>
        <td class="columna"> $ ${productos[i].subtotal}</td>
        `;
        }
    }

}
/*
let totalprecio = 0;
let totalFinal = document.querySelector("#total");
totalFinal.innerHTML = total(totalprecio);*/

function total() {
    let total = document.querySelector("#total");
    total.innerHTML = "";

    let totalprecio = 0;

    for (let i = 0; i < productos.length; i++) {

        if (productos[i].producto == 'SandwichMilanesaCarneSuper') {


            productos[i].subtotal = productos[i].precio * DESCUENTO * productos[i].cantidad;

        }
        totalprecio += productos[i].subtotal;

    }

    total.innerHTML += `Total: $${totalprecio}`;

}




/*genera capcha aleatorio */

let captcha_fijo = 0;
let a = ' ';
let b = ' ';
let c = ' ';
let captcha;

function refresh_captcha(evento) { /*genera capcha aleatorio */

    let operacion = '-*+';
    c = operacion.charAt(Math.floor(Math.random() * 3));
    a = Math.floor((Math.random() * 9) + 1);
    b = Math.floor((Math.random() * 9) + 1);
    captcha_fijo = a + c + b;
    document.getElementById("mainCaptcha").innerHTML = captcha_fijo;
    return captcha_fijo;
}

function verificar_captcha(evento) {
    evento.preventDefault();
    switch (c) {
        case '+':
            captcha = a + b
            break;
        case '-':
            captcha = a - b
            break;
        default:
            captcha = a * b
            break;
    }
    let input = document.getElementById("txtInput").value;
    if (input == captcha) {
        console.log(captcha + " = " + input + " captcha correcto");
        document.getElementById("validacion").innerHTML = "Su pedido a sido recibido!";
        personaNueva();
        borrarCampos();
        refresh_captcha();
    } else {
        console.log(captcha + " != " + input + " captcha incorrecto");
        document.getElementById("validacion").innerHTML = "Captcha incorrecto";
    }
}
let btn = document.getElementById("btn-enviar").addEventListener("click", verificar_captcha);
let recargar = document.getElementById("refresh").addEventListener("click", refresh_captcha);

refresh_captcha();

let persona = [];



function personaNueva() {

    let nombre = document.querySelector("#validationCustom01").value;
    let dni = document.querySelector("#validationCustom02").value;
    let domicilio = document.querySelector("#validationCustom03").value;
    let total = document.querySelector("#total").textContent;

    persona.push({
        "nombre": nombre,
        "dni": dni,
        "domicilio": domicilio,
        "total": total
    });

    console.table(persona);
    console.table(productos);

}

function borrarCampos() {

    document.querySelector("#validationCustom01").value = ""
    document.querySelector("#validationCustom02").value = ""
    document.querySelector("#validationCustom03").value = ""

    borrar();

    tabla.innerHTML = `<thead>
    <tr class="tituloTabla">
        <td class="producto1">Producto</td>
        <td class="columna">Precio</td>
        <td class="columna">Cantidad</td>
        <td class="columna">Subtotal</td>
    </tr>
</thead>
<tr class="tituloTabla">
        <td class="producto1">Delivery</td>
        <td class="columna">1</td>
        <td class="columna">80</td>
        <td class="columna">80</td>
    </tr>`


}




/*
function promo3(event) {
    event.preventDefault();
    productos.push({
        "producto": "Papas Fritas + Spiedo a las brasas",
        "cantidad": 1,
        "precio": 1100,
        "subtotal": 1100
    });
    mostrar();
}

function promo1(event) {
    event.preventDefault();
    productos.push({
        "producto": "Papas Fritas + Sandwich de milanesa",
        "cantidad": 1,
        "precio": 350,
        "subtotal": 350
    });
    mostrar();
}

function promo2(event) {
    event.preventDefault();
    productos.push({
        "producto": "Super Sandwich",
        "cantidad": 1,
        "precio": 270,
        "subtotal": 270
    });
    mostrar();
}
*/