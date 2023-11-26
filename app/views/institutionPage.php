<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app/style/css/institutionPage.css" rel="stylesheet">
    <script src="app/javaScript/fontAwesome.js" crossorigin="anonymous"></script>
    <title>Solaria/Instituições</title>
</head>

<body>
    <header id="header">
        <?php
        include_once("header.php");
        ?>
    </header>
    <!--inicio area de coteudo-->
    <section id="content">
        <section class="SearchArea">
            <section class="search" id="search-bar">
                <input name="search-input" type="text" id="search-input" placeholder="Pesquisar">
                <i class="fa-solid fa-magnifying-glass fa-lg" id="search-icon" style="color: #ffff;"></i>
            </section>
           <img src="../app/style/img/filtro.png" alt="filtro" class="filterImage">
        </section>

        <!--Inicio cards intituicoes-->
        <section class="institutionArea">
            <section class="institutionBox" id="card-institution1">
                <section class="intitution-images-area">
                    <img src="app/style/img/imagem_slide2.jpg" alt="img insti 1">
                </section>
                <section class="institutionInfo">
                    <a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
                    <a href="/perfilInstituicoes" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
                    <h2 class="institution-Name">Instituição Adotar</h2>
                    <p><u>Necessita:</u> Brinquedos, Roupas e Dinheiro.</p>
                </section>

                <section class="cardFooter">
                    <i class="fa-solid fa-location-crosshairs fa-lg locatioIcon" style="color: #ffffff;"></i>
                    <p>Santa Isabel-Sp</p>
                </section>
            </section>

            <section class="institutionBox" id="card-institution2">
                <section class="intitution-images-area">
                    <img src="app/style/img/imagem_slide3.jpg" alt="img insti 2">
                </section>
                <section class="institutionInfo">
                    <a href="/perfilInstituicoes" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
                    <h2 class="institution-Name">Instituição Adotar</h2>
                    <p><u>Necessita:</u> Brinquedos, Roupas e Dinheiro.</p>
                </section>
                <section class="cardFooter">
                    <i class="fa-solid fa-location-crosshairs fa-lg locatioIcon" style="color: #ffffff;"></i>
                    <p>Santa Isabel-Sp</p>
                </section>
            </section>

            <section class="institutionBox" id="card-institution3">
                <section class="intitution-images-area">
                    <img src="app/style/img/imagem_slide1.jpg" alt="img insti 3">
                </section>
                <section class="institutionInfo">
                    <a href="/perfilInstituicoes" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
                    <h2 class="institution-Name">Instituição Adotar</h2>
                    <p><u>Necessita:</u> Brinquedos, Roupas e Dinheiro.</p>
                    <!--<a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>-->
                </section>

                <section class="cardFooter">
                    <i class="fa-solid fa-location-crosshairs fa-lg locatioIcon" style="color: #ffffff;"></i>
                    <p>Santa Isabel-Sp</p>
                </section>
            </section>
        </section>
        <!--final cards intituicoes-->
        <!--inicio pagina mais insituicoes-->
        <div class="btn-more-institution">
            <a href="#show-All-Institution"><button onclick="toggle()" type="button" class="btn-OpenAll" id="btn-OpenAll"> Mais instituicoes ></button></a>
            <a href="#header"> <button onclick="toggle()" type="button" class="hide btn-hideAll" id="btn-hideAll"> Ocultar Institui. < </button></a>
        </div>

        <section class="all-institution" id="show-All-Institution">
        
            <div class="institutionArea" id="allInsitutionArea">
                <section class="institutionBox" id="card-institution3">
                    <section class="intitution-images-area">
                        <img src="app/style/img/imagem_slide1.jpg" alt="img insti 3">
                    </section>
                    <section class="institutionInfo">
                        <a href="/perfilInstituicoes" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
                        <h2 class="institution-Name">Instituição Adotar</h2>
                        <p><u>Necessita:</u> Brinquedos, Roupas e Dinheiro.</p>
                    </section>
                    <section class="cardFooter">
                        <i class="fa-solid fa-location-crosshairs fa-lg locatioIcon" style="color: #ffffff;"></i>
                        <p>Santa Isabel-Sp</p>
                    </section>
                </section>
            </div>  
        </section>
    </section>
    <!--final area de conteudo-->

    <script>
        function toggle() {
            const openAll = document.querySelector('#btn-OpenAll');
            const hideAll = document.querySelector('#btn-hideAll');
            openAll.classList.toggle('hide');
            hideAll.classList.toggle('hide');
        }

        function showAll(pageId) {
            const showAll = document.getElementById(pageId);
            showAll.classList.add('mostrar');
        }
        const btnOpenAll = document.querySelector('.btn-OpenAll');
        btnOpenAll.addEventListener('click', () => showAll('show-All-Institution'));

        function hideAll(pageId) {
            const hideAll = document.getElementById(pageId);
            hideAll.classList.remove('mostrar');
        }
        const btnHideAll = document.querySelector('.btn-hideAll');
        btnHideAll.addEventListener('click', () => hideAll('show-All-Institution'));
    </script>

    <footer id="footer">
        <?php
            include_once("footer.php");
        ?>
    </footer>
</body>

</html>