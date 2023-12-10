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
                        <img src="app/style/img/solariaQrCode.png" class="qrCodeImage">
                    </section>
                    <section id="guidelines">
                            <p>1. Acesse seu banco</p>
                            <p>2. Selecione pagar com QR CODE</p>
                            <p>3. Aponte a câmera para o código.</p>
                            <!-- <p>Ou digite a chave PIX: 45.302.593/0001-89</p> -->
                    </section>
                    <p style="border-top:1px solid;">Em caso de doações materiais como alimentos, roupas ou brinquedos, entre em contato com a instituição para agendar sua visita! <a href="/chat">
					<button type="button" id="buttonTop" class="btn btn-info btnHome">
						Chat
						<img class="arrow" src="app/style/img/imgArrowRight.png">
					</button>
				</a>  </p>
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