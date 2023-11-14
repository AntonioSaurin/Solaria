'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/style/css/login.css">
    <title>Login</title>
</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>
   

    <main>
        <section class="form loginBox">
            <h1 class="text">Login</h1>
            <form action="/login/efetuar" method="post" name="login">
                <span class="table">
                    <label for="email" class="text">Email:</label>
                    <input type="email" class="loginBox" name="email" id="email" placeholder="Email">

                    <label for="password" class="text">Senha:</label>
                    <input type="password" class="loginBox" name="password" id="password" placeholder="Senha">

                    <button type="submit" name="login" class="loginButton">Login</button>
                    <p class="text">Ainda não tem uma conta? 
                
                    <button type="button" class="btnCadastro"
                            id="btnCadastro">Cadastrar</button></p>
                </span>
            </form>
        </section>
        <img class="img" src="app/style/img/brandWithout.png">
    </main>
    

    <section class="modal-container" id="modalRegister">
        <sections class="modal2Register">
        
            <H1>TESTE</H1>
            <button type="button" class="btnExit" id="btnExit">
                sair
            </button>
            <a class="modal-Link" href="/cadastro">Registro Usuario comum</a>
            <a class="modal-Link" href="/cadastroInstituicao">Registro instituicao</a>

        </sections>
    </section>  
    
    <script>
        function openModal(idModal){
            const modal = document.getElementById(idModal);
            modal.classList.add("mostrar");
        }
        const btnOpen = document.querySelector('.btnCadastro');
        btnOpen.addEventListener('click', ()=>openModal('modalRegister'));

         
        function closeModal(idModal){
            const modalClose = document.getElementById(idModal);
            modalClose.classList.remove('mostrar');   
        }
        const btnClose = document.querySelector('.btnExit');
        btnClose.addEventListener('click',()=>closeModal('modalRegister'));   
            
        
        
    </script>
    
</body>

</html>