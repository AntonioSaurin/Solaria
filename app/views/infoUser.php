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
                    <label class="nameAccount"> André Varíola do Nascimento Souza</label>
                </section>
                <label class="CpfAccount"> CPF: 287.778.748.62 </label>
                <label class="DtNascAccount"> Data de Nascimento: 05/06/1995 </label>
            </section>

            <section class="infoAccountTop">
                <section id="labelAccountGeral"> <label class="labelTitleTop"> Geral </label> </section>
                <section id="labelAccountEndereco"> <label class="labelTitleTop"> Endereço </label>  </section>
            </section>

            <section class="tablesFlex">
                <section class="spaceTableGeral">
                    <section class="infoAccountTableGeral">

                        <label id="labelAccountEmail"> E-mail: </label>
                        <section class="boxLimit"> <section class="boxLimitador"> <label class="boxEmail"> Andre_varnascimento@gmail.com </label></section></section>
                        
                        <label id="labelAccounTelefone"> Telefone: </label>
                        <label class="boxTelefone"> +55 (11) 93212-9875 </label>
                        
                        <label id="labelAccountSenha"> Senha: </label>
                        <section class="boxSenha"> <label class="AccountSenha"> THESENHA </label> </section>

                        <label id="labelAccountConfsenha"> Confirma: </label>
                        <label class="boxConfSenha"> THESENHA </label>

                        <button id="btnExcluir"> Excluir Conta</button>
                    </section>
                </section>
                <section class="spaceTableEndereco">
                    <section class="infoAccountTableEndereco">
                    
                        <label id="labelAccountCEP"> CEP: </label>
                        <label class="boxCEP"> 07500-000</label>

                        <label id="labelAccountEstado"> Estado: </label>
                        <button class="boxEstado"> SP </button>

                        <label id="labelAccountCidade"> Cidade: </label>
                        <label class="boxCidade"> Santa Isabel </label>

                        <label id="labelAccountBairro"> Bairro: </label>
                        <label class="boxBairro"> Parque São Benedito </label>
                    </section>
                </section>
            </section>

    </main>
</body>

</html>