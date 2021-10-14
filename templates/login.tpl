{include file="header.tpl"}
{include file="nav.tpl"} 

<article class="main">
    <form method="POST" action="verificar">
    
        <label for="email">
            Email <input type="text" name="email" />
        </label>
        <label for="password">
            Contraseña <input type="password" name="pass" />
        </label>
        <button type="submit">Entrar</button>
        
    </form>
</article>

{include file="footer.tpl"}