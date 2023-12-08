<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <script src="app/javaScript/fontAwesome.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/style/css/bootstrap.css">
    <link rel="stylesheet" href="app/style/css/headerStyle.css">
    <title>header</title>
</head>

<body>
    <header id="navBar">
        <nav class="navbar navbar-expand-sm navbar-light">
            <section class="container">
                <section id="brandImg">
                    <a href="/">
                        <img src="app/style/img/Brand.png" width="10%">

                        <section id="color">
                            <p id="brandText" class="d-inline ml-3 ">Solaria</p>
                        </section>
                    </a>
                </section>

                <button class="navbar-toggler" data-togle="collapse" data-target="#nav-pricipal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <section class="link-Area">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item mr-4">
                            <a href="/" class="  nav-link link-Header aling" id="color">Home</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a href="/instituicoes" class="nav-link link-Header aling2" id="color">Instituições</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a href="/como-adotar" class="nav-link link-Header aling2" id="color">Como adotar</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a href="/sobre-nos" class="nav-link link-Header aling3" id="color">Sobre nós</a>
                        </li>


                        <li class="nav-item dropdown ml-4 " id="accountIcon">
                            <?php

                            if (isset($_SESSION['id'])) {
                                echo ('
                                        <a href="#" id="accountIcon"class="fa-solid fa-user-group fa-xl nav-link  mt-2" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#db628d "></a>

                                        <section id="headerMenu"class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">');
                                if (!isset($_SESSION['institution'])) {
                                    echo ('<a class="dropdown-item" href="/infoUser">Conta</a>');
                                } else if (isset($_SESSION['institution'])) {
                                    echo ('<a class="dropdown-item" href="/infoInstituicoes">Conta</a>');
                                }


                                echo ('<a class="dropdown-item" href="/chat">Chat</a>');

                                if (isset($_SESSION['admin'])) {
                                    echo ('<a href="/admin" class="dropdown-item">Admin</a>');
                                }
                                echo ('<a class="dropdown-item" href="../app/views/logout.php">Sair</a>
                                    </section>  ');
                            } else if (!isset($_SESSION['id'])) {
                                echo ('
                                        <a href="\login" class="nav-link mr-6" id="color">Login</a>
                                    ');
                            }

                            ?>

                        </li>
                    </ul>
                </section>
            </section>
        </nav>
    </header>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script> -->
</body>

</html>