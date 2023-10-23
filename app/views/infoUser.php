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
            //include_once("header.php");
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
                        
                        <label class="labelAccountGeral"> Telefone: </label>
                        <label class="boxTelefone">+55 (11) 93212-9875 </label>
                        
                        <label class="labelAccountGeral"> Senha: </label>
                        <section class="boxSenha"> <label class="AccountSenha"> THESENHA </label> </section>

                        <label class="labelAccountGeral"> Confirma: </label>
                        <label class="boxConfSenha"> THESENHA </label>

                        <section class="spaceBtn"> <button id="btnExcluir"> EXCLUIR CONTA </button> </section>
                    </section>
                </section>
                <section class="spaceTableEndereco">
                    <section class="infoAccountTableEndereco">
                    
                        <label id="labelAccountCEP"> CEP: </label>
                        <label class="boxCEP"> 07500-000</label>

                        <label class="labelAccountEndereco"> Estado: </label>
                        <select id="optionStates">
                            <option value="1"> AC </option>
                            <option value="2"> Al </option>
                            <option value="3"> AP </option>
                            <option value="4"> AM </option>
                            <option value="5"> BA </option>
                            <option value="6"> CE </option>
                            <option value="7"> DF </option>
                            <option value="8"> ES </option>
                            <option value="9"> GO </option>
                            <option value="10"> MA </option>
                            <option value="11"> MT </option>
                            <option value="12"> MS </option>
                            <option value="13"> MG </option>
                            <option value="14"> PA </option>
                            <option value="15"> PB </option>
                            <option value="16"> PE </option>
                            <option value="17"> PI </option>
                            <option value="18"> RJ </option>
                            <option value="19"> RN </option>
                            <option value="20"> RS </option>
                            <option value="21"> RO </option>
                            <option value="22"> RR </option>
                            <option value="23"> SC </option>
                            <option value="24"> SP </option>
                            <option value="25"> SE </option>
                            <option value="26"> TO </option>
                        </select>

                        <label class="labelAccountEndereco"> Cidade: </label>
                        <label class="boxCidade"> Santa Isabel </label>

                        <label class="labelAccountEndereco"> Bairro: </label>
                        <label class="boxBairro"> Parque São Benedito </label>

                        <label class="labelAccountEndereco"> Número: </label>
                        <label class="boxNum"> 509 </label>

                        <label class="labelAccountEndereco"> Logradouro: </label>
                        <label class="boxLogradouro"> R. Ver. Luiz Benedito </label>

                        <section class="spaceBtnSave"> <button id="btnSalvar"> SALVAR </button> </section>
                    </section>
                </section>
            </section>

    </main>
</body>

</html>