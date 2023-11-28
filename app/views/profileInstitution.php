<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app\style\css\profileInstitution.css">
    <title>Meu Perfil</title>
</head>
<body>
    <header>
        <?php
         include('header.php');
        ?>
    </header>

    <section class="containerProfile">
        <section class="profile">
            <img src="caminho/para/imagem.jpg" alt="Foto de Perfil" class="photoProfile">
            <section class="profile-info">
                <h2>Nome do Usuário</h2>
                <p>Descrição curta do usuário.</p>
                <p><strong>Necessidades:</strong> Informações sobre as necessidades</p>
            </section>
            <img src="app/style/img/iconAdd.png" class="addProfile" onclick="addPhoto(this)">
        </section>

        <section class="line">
            <hr>
        </section>

        <nav class="simple-nav">
            <a href="#" class="button">Posts</a>
            <a href="/chat" class="button">Chat</a>
            <a href="#" class="button donateButton">Doar</a>
        </nav>

        <section class="posts">

            <section class="post">
                <img src="app/style/img/headerHowToAdopt.png" alt="post" aria-label="Opções" onclick="toggleOptions(this)">
                <section class="post-options" id="postOptions">
                    <button class="edit-button" aria-label="Editar post">
                        <i class="fas fa-edit"></i> Editar
                    </button>
                    <button class="delete-button" aria-label="Excluir post">
                        <i class="fas fa-trash-alt"></i> Excluir
                    </button>
                </section> 
            </section>

            <section class="post">
                <img src="app/style/img/headerHowToAdopt.png" alt="post" aria-label="Opções" onclick="toggleOptions(this)">
                <section class="post-options" id="postOptions">
                    <button class="edit-button" aria-label="Editar post">
                        <i class="fas fa-edit"></i> Editar
                    </button>
                    <button class="delete-button" aria-label="Excluir post">
                        <i class="fas fa-trash-alt"></i> Excluir
                    </button>
                </section> 
            </section>
        </section>

    <section id="modal" class="modal-container">
        <section class="modal1">
            <section id="modalTop"> 
                <i id="btnExitIncon" class="btnExit fa-solid fa-rectangle-xmark  fa-xl" style="color: #fffff;"></i>
                <h2>Nome da Instituição<h2>
            </section>
            
            <section id="modalContent">
                
                <section id="donationArea">
                    <section id="title">
                        <h3>Doe com</h3>
                        <img src="app/style/img/logoPix.png">
                    </section>
                    <section id="qrCode">
                        
                    </section>
                    <section id="guidelines">
                            <p>1. Acesse seu banco</p>
                            <p>2. Selecione pagar com QR CODE</p>
                            <p>3. Aponte a câmera para o código.</p>
                            <p>Ou digite a chave PIX: 45.302.593/0001-89</p>
                    </section>
                    <!-- <form>
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
                    </form>     -->
                </section>
               
            </section>   
        </section>
    
        <script>
            function toggleOptions(button) {
                var postOptions = button.nextElementSibling;
                postOptions.classList.toggle('show-options');
            }

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
    </section>
    <footer id="footerArea">
        <?php
            include_once("footer.php");
        ?>
	</footer>
</body>
</html>