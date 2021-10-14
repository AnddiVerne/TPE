{include file="header.tpl"}
{include file="nav.tpl"}

{if $checkSession}
    <div class="botonera">

    </div>
{/if}

<div class="cuerpo">
    <section class=menu>
        <div class="accordion" id="accordionExample">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">

                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">

                        <table class="tabla">
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
</div>
</section>
</div>

{include file="footer.tpl"}