{include file="header.tpl"}
{include file="nav.tpl"}

<div class="cuerpo">
    <section class=menu>
        <div class="accordion" id="accordionExample">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">

                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">

                        <table class="tabla">
                            <tr>
                                <th>Nombre</th>
                                <th>Costo</th>
                                <th>Categoria</th>
                                <th>Descripcion</th>
                            </tr>
                            {foreach from=$foods item=plato}

                                <tr class="platos">
                                    <td>
                                        {$plato->id_plato}
                                    </td>
                                    <td>
                                        {$plato->nombre_plato}
                                    </td>
                                    <td>
                                        {$plato->precio}
                                    </td>
                                    <td>
                                        {$plato->nombre_categoria}
                                    </td>
                                    <td>
                                        {$plato->detalle}
                                    </td>
                                </tr>
                            {/foreach}
                        </table>
                    </div>
                </div>
            </div>
        </div>


        {if !$checkSession}
            <div class="botonera">
                <div id="crearPlato" class="ocultar">
                    <h1>crear plato</h1>
                    <form action="addFood" method="post">
                        <div class=" ">
                            <label>ingrese el nombre</label>
                            <input type="text" name="nombre" required>
                        </div>
                        <div class=" ">
                            <label>ingrese el precio</label>
                            <input type="int" name="precio" required>
                        </div>
                        <div class=" ">
                            <label>ingrese descripcion</label>
                            <input type="text" name="descripcion" required></label>
                        </div>
                        <div class=" ">
                            <label>seleccione categoria</label>
                            <select name='id_categoria'>
                                {foreach from=$categorias item=categoria}
                                    <option value="{$categoria->id_categoria}">{$categoria->nombre_categoria}</option>
                                {/foreach}
                            </select>
                        </div>
                        <button type="submit">crear</button>
                    </form>
                </div>

                <div id="actualizarPlato" class="ocultar">
                    <h1>actualizar plato</h1>
                    <form action="actualizarPlato" method="post">
                        <div class=" ">
                            <label>seleccione el nombre</label>
                            <select name='id'>
                                {foreach from=$Platos item=Plato}
                                    <option value="{$producto->id_producto}">{$producto->nombre_producto}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class=" ">
                            <label>ingrese el nombre</label>
                            <input type="text" name="nombre" required>
                        </div>
                        <div class=" ">
                            <label>ingrese el precio</label>
                            <input type="int" name="precio" required>
                        </div>
                        <div class=" ">
                            <label>ingrese descripcion</label>
                            <input type="text" name="descripcion" required></label>
                        </div>
                        <div class=" ">
                            <label>seleccione categoria</label>
                            <select name='categoria'>
                                {foreach from=$categorias item=categoria}

                                {/foreach}
                            </select>
                        </div>
                        <button type="submit">actualizar</button>
                    </form>
                </div>

                <div id="borrarPlato" class="ocultar">
                    <h1>borrar plato</h1>
                    <form action="borrarPlato" method="post">
                        <div class=" ">
                            <label>seleccione el nombre</label>
                            <select name='nombre'>
                                {foreach from=$Platos item=Plato}

                                {/foreach}
                            </select>
                        </div>
                        <button type="submit" >borrar</button>
                    </form>
                </div>

                <div class="ocultar">
                    <h1>crear categoria</h1>
                    <form action="crearcategoria" method="post">
                        <div class=" ">
                            <label>ingrese el nombre de la nueva categoria</label>
                            <input type="text" name="nombre" required>
                        </div>
                        <div class=" ">
                            <label>ingrese la sucursal de la nueva categoria</label>
                            <input type="text" name="sucursal" required>
                        </div>
                        <button type="submit">crear</button>
                    </form>
                </div>

                <div class="ocultar">
                    <h1>actualizar categoria</h1>
                    <form action="actualizarcategoria" method="post">
                        <div class=" ">
                            <label>seleccione la categoria</label>
                            <select name='id'>
                                {foreach from=$categorias item=categoria}

                                {/foreach}
                            </select>
                            <label>ingrese el nuevo nombre</label>
                            <input type="text" name="nuevo" required>
                            <div class=" ">
                                <label>ingrese la sucursal de la categoria</label>
                                <input type="text" name="sucursal" required>
                            </div>
                        </div>
                        <button type="submit">actualizar</button>
                    </form>
                </div>

                <div class="ocultar">
                    <h1>borrar categoria</h1>
                    <form action="borrarcategoria" method="post">
                        <div class=" ">
                            <label>seleccione categoria</label>
                            <select name='id'>
                                {foreach from=$categorias item=categoria}

                                {/foreach}
                            </select>
                        </div>
                        <button type="submit">borrar</button>
                    </form>
                </div>
            </div>

        {/if}
    </section>
</div>

{include file="footer.tpl"}