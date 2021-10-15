{include file="header.tpl"}
{include file="nav.tpl"}

<article class="main">
    <form method="POST" action="{BASE_URL}verificar">

        <h2>Registro</h2>
        <form method="POST">
            <label><input class="form-control" type="text" name="email" placeholder="Ingrese su email..." /></label>
            <label><input class="form-control" type="password" name="pass"
                    placeholder="Ingrese su password..." /></label>
            <button class="btn btn-dark">Entrar</button>
        </form>

        {if $mensaje}
            <div class="alert alert-danger" role="alert">
                {$mensaje}
            </div>
        {/if}
        
</article>

{include file="footer.tpl"}