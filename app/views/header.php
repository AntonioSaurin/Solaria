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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="app/style/css/bootstrap.css">

    <script src="app/javaScript/fontAwesome.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/style/css/headerStyle.css">

    
    <title>header</title>
</head>

<body>
    <header id="navBar" >
        <nav class="navbar navbar-expand-sm navbar-light">
            <section class="container">
                <section id="brandImg">
                    <a href="/">
                        <img src="app/style/img/Brand.png" width="60px">
                    </a>
                    <section id="color"><p id="brandText" class="d-inline ml-3">Solaria</p></section>
                </section>

                <button class="navbar-toggler" data-togle="collapse" data-target="#nav-pricipal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <section>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-4">
                            <a href="/admin" class="nav-link" id="color">Admin</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a href="/instituicoes" class="nav-link" id="color">Instituições</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a href="/como-adotar" class="nav-link" id="color">Como adotar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/sobre-nos" class="nav-link" id="color">Sobre nós</a>
                        </li>
                        
                        <li class="nav-item dropdown ml-4" id="accountIcon">
                            <?php
                                
                                if(isset($_SESSION['id'])){  
                                    echo('
                                        <a href="#" id="accountIcon"class="fa-solid fa-user-group fa-xl nav-link  mt-2" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#db628d "></a>

                                        <section id="headerMenu"class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="/infoUser">Conta</a>
                                        </section>  
                                    ');
                                }else if(!isset($_SESSION['id'])){
                                    echo('
                                        <a href="\login" class="nav-link" id="color">Login</a>
                                        
                                    ');

                                      
                                      if(isset($_SESSION['uniqueID'])){
                                        echo($_SESSION['uniqueID']);
                                      }else{
                                        

                                      }
                                    
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>