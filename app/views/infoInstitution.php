<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app/style/css/infoInstitution.css" rel="stylesheet">
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
                <img src="app/style/img/imgInstitutionAdotar.png" id="imgAccount">
                <section class="infoNameAccount">
                    <label class="nameAccount"> Instituição Adotar</label>
                </section>
                <label class="cnpjAccount"> CNPJ: 12.345.678/0001-00 </label>
            </section>

            
            <?php
                include_once("historicInstitution.php");
            ?>

            <section class="infoAccountTop">
                <section id="labelAccountGeral"> <label class="labelTitleTop"> Geral </label> </section>
                <section id="labelAccountEndereco"> <label class="labelTitleTop"> Endereço </label>  </section>
            </section>

            <section class="tablesFlex">
                <section class="spaceTableGeral">
                    <section class="infoAccountTableGeral">

                        <label id="labelAccountEmail"> E-mail: </label>
                        <input type="text"class="boxEmail" placeholder="insti_doac@gmail.com"></label>
                        
                        <label class="labelAccountGeral"> Telefone: </label>
                        <input class="boxTelefone" placeholder="+55 (11) 4656-2270" name="phone"> </input>
                        
                        <label class="labelAccountGeral"> Senha: </label>
                        <input type="password" class="boxSenha" placeholder="senhaparainstituicaohahaha"> </input>

                        <label class="labelAccountGeral"> Confirma Senha: </label>
                        <input type="password" class="boxConfSenha" placeholder="senhaparainstituicaohahaha"> </input>

                        <section id="spaceBtnExcluir"> <button id="btnExcluir"> Excluir Conta </button> </section>
                    </section>
                </section>
                <section class="spaceTableEndereco">
                    <section class="infoAccountTableEndereco">
                        
                        <label id="labelAccountCEP"> CEP: </label>
                        <input type="text" class="boxCEP" placeholder="07500-000" maxlength="9"></input>

                        <label id="labelState"> Estado: </label>
                        <select class="optionStates">
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

                        <label id="labelCity"> Cidade: </label>
                        <input type="text" class="boxCidade" placeholder="Santa Isabel"> </input>

                        <label class="labelAccountEndereco"> Bairro: </label>
                        <input type="text" class="boxBairro" placeholder="Parque São Benedito"> </input>

                        <label id="labelNumber"> Número: </label>
                        <input type="text" class="boxNum" placeholder="509" maxlength="4"> </input>

                        <label class="labelAccountEndereco"> Logradouro: </label>
                        <input type="text" class="boxLogradouro" placeholder="R. Ver. Luiz Benedito"> </input>

                        <section class="spaceBtnSave"> <button id="btnSalvar"> Salvar </button> </section>
                    </section>
                </section>
            </section>
            <section class="spaceDown"> </section>
            
    </main>
</body>

</html>