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
    <section>
    <section id="content">
        <section class="SearchArea">
            <div class="search" id="search-bar">
                <input name="search-input" type="text" id="search-input">
                <i class="fa-solid fa-magnifying-glass fa-lg" id="search-icon" style="color: #ffff;"></i>   
            </div>
            
            
        </section>
        <h1 id="title-Page">Selecione uma Instituicao</h1>
        <section class="institutionArea">
        
            <section class="institutionBox">
            
                <img src="app/style/img/imgInstitutionAdotar.png" alt="Instituição Adotar">
                    <section class="institutionInfo">
                        <h2>Instituição Adotar</h2>
                    
                        <p><b>Necessita:</b> Brinquedos, Roupas e Dinheiro.</p>
                    </section>
                    <a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
            </section>

            <section class="institutionBox" >
                <img src="app/style/img/imgInstitutionCoracao.png" alt="Instituição Coração">
                    <section class="institutionInfo">
                        <h2>Instituição Coração</h2>
                       <!--
                         <p>Nossa instituição de adoção comprometida em encontrar lares amorosos para crianças vulneráveis. Nossa equipe qualificada oferece cuidados dedicados e apoio emocional para famílias adotivas.</p>-->
                        <p><b>Necessita:</b> Brinquedos e Roupas.</p>
                    </section>
                    <a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
            </section>

        </section>
    </section>
    
    <section id="modal" class="modal-container">
        <section class="modal1">
            <section id="modalTop"> 
                <i id="btnExitIncon"class="btnExit fa-solid fa-rectangle-xmark   fa-xl" style="color: #c7c7c7;"></i>
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
                        
                        <input id="btnNext"type="submit" name="avancar" value="Prosseguir"></input>
                        
                        
                    </form>    

                </section>
            </section>   
        </section>
        
    </section> 
    <script>
        function openModal(modalId){
            const modal =  document.getElementById(modalId);
            modal.classList.add('mostrar');
        }
        const btnOpen = document.querySelectorAll('.donateButton');
        for (let index = 0; index < btnOpen.length; index++) {
            btnOpen[index].addEventListener('click', ()=> openModal('modal'));   
        }





        
        function closeModal(idModal){
            const modalClose = document.getElementById(idModal);
            modalClose.classList.remove('mostrar');   
        }
        const btnClose = document.querySelectorAll('.btnExit');
        for (let index = 0; index < btnClose.length; index++) {
            btnClose[index].addEventListener('click',()=>closeModal('modal'));   
            
        }
       
        
    </script>    
</body>
</html>
