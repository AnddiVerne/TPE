<?php
/* Smarty version 3.1.39, created on 2021-10-13 09:27:09
  from 'C:\xampp\htdocs\Proyectos\TPE\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61668a4df1b910_61155004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a866b106e32094eeabc45f2a3c9e055c0b7af1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPE\\templates\\nav.tpl',
      1 => 1634105388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61668a4df1b910_61155004 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home"><img id="logo" src="css/imagenes/logo.gif"
                    alt="rotiseria ANDEL"></a>
            <a class="navbar-brand" href="home">
                <h1 class="tituloNavegador">ROTISERIA ANDEL</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="menu#spiedo">Spiedo</a></li>
                            <li><a class="dropdown-item" href="menu#ensaladas">Ensaladas</a></li>
                            <li><a class="dropdown-item" href="menu#pastas">Pastas</a></li>
                            <li><a class="dropdown-item" href="menu#platosCalientes">Platos Calientes</a></li>
                            <li><a class="dropdown-item" href="menu#platosFrios">Platos Frios</a></li>
                            <li><a class="dropdown-item" href="menu#minutas">Minutas</a></li>
                            <li><a class="dropdown-item" href="menu#sandwiches">Sandwiches</a></li>
                            <li><a class="dropdown-item" href="menu#tartas">Tartas</a></li>
                            <li><a class="dropdown-item" href="menu#pizzas">Pizzas</a></li>
                            <li><a class="dropdown-item" href="menu#bebidas">Bebidas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="nosotros" target="_blank">Nosotros
                    </li></a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ubicación
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="menu"><iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1563.852170892682!2d-60.27235873343025!3d-38.37896053943159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1621903586995!5m2!1ses!2sar"
                                        width="400" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe></a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#tituloFooter">Contacto
                    </li></a>
                    </li>


                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="compra" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                    </li></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header><?php }
}
