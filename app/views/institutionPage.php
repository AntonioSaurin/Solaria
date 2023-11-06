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

    <section class="filterArea">
        <label for="filtroTipo" class="filterText"><img class="filterImage" src="app/style/img/filterImage.png">Filtrar:</label>
        <select class="selectFilter" id="filtroTipo">
            <option value="">Todos</option>
            <option value="dinheiro">Dinheiro</option>
            <option value="roupas">Roupas</option>
            <option value="alimentos">Alimentos</option>
            <option value="brinquedos">Brinquedos</option>
        </select>
    </section>

    <section class="institutionArea">
        <section class="institutionBox" style="background-color:#FFA12D;">
            <img src="app/style/img/imgInstitutionAdotar.png" alt="Instituição Adotar">
                <section class="institutionInfo">
                    <h2>Instituição Adotar</h2>
                    <p>A Adotar é uma instituição de adoção dedicada a encontrar lares amorosos e seguros para crianças vulneráveis. Nossa equipe oferece cuidados de qualidade, apoio emocional e recursos para famílias adotivas. </p>
                    <p><b>Necessita:</b> Brinquedos, Roupas e Dinheiro.</p>
                </section>
                <button class="donateButton"><b>Doar ></b></button>
        </section>

        <section class="institutionBox" style="background-color:#129BAB;">
            <img src="app/style/img/imgInstitutionCoracao.png" alt="Instituição Adotar">
                <section class="institutionInfo">
                    <h2>Instituição Coração</h2>
                    <p>Nossa instituição de adoção comprometida em encontrar lares amorosos para crianças vulneráveis. Nossa equipe qualificada oferece cuidados dedicados e apoio emocional para famílias adotivas.</p>
                    <p><b>Necessita:</b> Brinquedos e Roupas.</p>
                </section>
                <button class="donateButton"><b>Doar ></b></button>
        </section>

    </section>
   
    
    <section id="modal" class="modal-container">
        <section class="modal1">
            <section id="modalTop"> 
                <i id="btnExitIncon"class="btnExit fa-solid fa-rectangle-xmark   fa-xl" style="color: #c7c7c7;"></i>
                <h1>teste<h1>
            </section>
            
            <section id="modalContent">
                <section id="institutionAreaModal">
                    informacoes instituicao 
                </section>

                <section id="donationArea">
                    <form>
                        <div id="donationType">
                            <h4>o que deseja doar?</h4>
                            <input type="radio" id="dinheiro" name="donationType" value="dinheiro">Dinheiro</input>
                            <input type="radio" id="roupa" name="donationType" value="roupa">Roupa</input>
                            <input type="radio" id="brinquedo" name="donationType" value="brinquedo">Brinquedo</input>
                            <input type="radio" id="alimento" name="donationType" value="alimento">alimento</input>
                        </div>
                        <div id="donationAmount">
                            <input type="radio" id="qnt1" name="donationAmount" value="2">R$2,00</input>
                            <input type="radio" id="qnt2" name="donationAmount" value="10">R$10,00</input>
                            <input type="radio" id="qnt3" name="donationAmount" value="25">R$25,00</input>
                            <input type="radio" id="qnt4" name="donationAmount" value="50">R$50,00</input>
                        </div>
                        <div id="custimizeAmount">
                            <h4>Quantidade Personalizada</h4>
                            <input type="number" name="dntCustimizeAmount" placeholder="R$250,000" >
                           
                        </div>
                        
                        <input id="btnNext"type="submit" name="avancar" value="avancar"></input>
                        
                        
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
            modal.classList.remove('mostrar');   
        }
        const btnClose = document.querySelectorAll('.btnExit');
        for (let index = 0; index < btnClose.length; index++) {
            btnClose[index].addEventListener('click',()=>closeModal('modal'));   
            
        }
       
        
    </script>    
</body>
</html>
