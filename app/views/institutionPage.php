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
                <input name="search-input" type="text" id="search-input">
                <i class="fa-solid fa-magnifying-glass fa-lg" id="search-icon" style="color: #ffff;"></i>
            </section>
        </section>

        <!--Inicio cards intituicoes-->
        <section class="institutionArea">
            <section class="institutionBox" id="card-institution1">
                <section class="intitution-images-area">
                    <img src="app/style/img/imagem_slide2.jpg" alt="Instituição Coração">
                </section>
                <section class="institutionInfo">
                <a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
                    <a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
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
                    <img src="app/style/img/imagem_slide3.jpg" alt="Instituição Coração">
                </section>
                <section class="institutionInfo">
                    <a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
                    <h2 class="institution-Name">Instituição Adotar</h2>
                    <p><u>Necessita:</u> Brinquedos, Roupas e Dinheiro.</p>
                    <!--<a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>-->
                </section>

                <section class="cardFooter">
                    <i class="fa-solid fa-location-crosshairs fa-lg locatioIcon" style="color: #ffffff;"></i>
                    <p>Santa Isabel-Sp</p>
                </section>
            </section>

            <section class="institutionBox" id="card-institution1">
                <section class="intitution-images-area">
                    <img src="app/style/img/imagem_slide1.jpg" alt="Instituição Coração">
                </section>
                <section class="institutionInfo">
                    <a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
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
        Mais instituicoes >
    </section>
    <!--final area de conteudo-->

    <!--inicio modal estrutura-->
    <section id="modal" class="modal-container">
        <section class="modal1">
            <section id="modalTop">
                <i id="btnExitIncon" class="btnExit fa-solid fa-rectangle-xmark   fa-xl" style="color: #c7c7c7;"></i>
                <h1>Nome da Instituição<h1>
            </section>

            <section id="modalContent">

                <section id="institutionAreaModal">
                    <img class="modalImageInstitution" src="app/style/img/imgInstitutionAdotar.png" alt="Instituição Adotar">
                    Descrição da Instituição
                </section>

                <section id="donationArea">
                    <form>
                        <section id="donationType">
                            <h4>O que deseja doar?</h4><br>
                            <input type="radio" id="dinheiro" name="donationType" value="dinheiro">Dinheiro</input>
                            <input type="radio" id="roupa" name="donationType" value="roupa">Roupas</input>
                            <input type="radio" id="brinquedo" name="donationType" value="brinquedo">Brinquedos</input>
                            <input type="radio" id="alimento" name="donationType" value="alimento">Alimentos</input>
                        </section>
                        <section id="donationAmount">
                            <input type="radio" id="qnt1" name="donationAmount" value="2">R$2,00</input>
                            <input type="radio" id="qnt2" name="donationAmount" value="10">R$10,00</input>
                            <input type="radio" id="qnt3" name="donationAmount" value="25">R$25,00</input>
                            <input type="radio" id="qnt4" name="donationAmount" value="50">R$50,00</input>

                        </section>
                        <section id="custimizeAmount">
                            <h4>Quantia personalizada</h4>
                            <input type="number" name="dntCustimizeAmount" placeholder="R$100" min="0" step="0.01">

                        </section>

                        <input id="btnNext" type="submit" name="avancar" value="Prosseguir"></input>


                    </form>

                </section>
            </section>
        </section>

    </section>
    <!--final modal estrutura-->
    <!--inicio logica modal JS-->
    <script>
        //abrir modal 
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('mostrar');
        }
        const btnOpen = document.querySelectorAll('.donateButton');
        for (let index = 0; index < btnOpen.length; index++) {
            btnOpen[index].addEventListener('click', () => openModal('modal'));
        }
        //fechar modal 
        function closeModal(idModal) {
            const modalClose = document.getElementById(idModal);
            modalClose.classList.remove('mostrar');
        }
        const btnClose = document.querySelectorAll('.btnExit');
        for (let index = 0; index < btnClose.length; index++) {
            btnClose[index].addEventListener('click', () => closeModal('modal'));

        }
    </script>
    <!--final logica modal-->
</body>

</html>