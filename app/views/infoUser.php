<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app/style/css/infoUser.css" rel="stylesheet">
    <title> Conta </title>
</head>

<body>
    <header>
        <?php
           // include_once("header.php");
        ?>
    </header>


    <main class="infoAccountUser">
        
        <section class="infoAccount">
            <section class="spaceImgAccount">
                <img src="app/style/img/images.jpg" id="imgAccount">
                <section class="infoNameAccount">
                    <label class="nameAccount"> André Varíola do Nascimento Souza </label>
                </section>
                <label class="CpfAccount"> CPF: 287.778.748.62 </label>
                <label class="DtNascAccount"> Data de Nascimento: 05/06/1995 </label>
            </section>

            <section class="infoAccountTop">
                <section id="labelAccountGeral"> <label class="labelTitleTop"> Geral  </label> </section>
                <section id="labelAccountEndereco"> <label class="labelTitleTop"> Endereço </label>  </section>
            </section>

            <section class="space">
                <section class="infoAccountTableGeral">
                    
                    <label id="labelAccountEmail"> E-mail: </label>
                    <label class="boxEmail"> Andre_varnasc@gmail.com </label>
                    
                    <label id="labelAccounTelefone"> Telefone: </label>
                    <label class="boxTelefone"> +55 (11) 93212-9875 </label>
                    
                    <label id="labelAccountSenha"> Senha: </label>
                    <section class="boxSenha"> <label class="AccountSenha"> THESENHA </label> </section>

                    <label id="labelAccountConfsenha"> Confirma: </label>
                    <label class="boxConfSenha"> THESENHA </label>
                </section>

                <section class="infoAccountTableEndereco">
                    <label class="info_account"> kjmn </label>
                </section>
            </section>


    </main>
</body>

</html>