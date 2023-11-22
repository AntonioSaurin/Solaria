<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="app/javaScript/jQuery.js"></script>
    <script src="app/javaScript/jMask.js"></script>
    <link href="app/style/css/infoUser.css" rel="stylesheet">
    <title> Conta </title>
</head>

<body>
    <header>
        <?php
        include_once("header.php");
        ?>
    </header>

    <section class="center">
        <section class="infoAccount">
            <section class="userImg">
                <img src="app/style/img/images.jpg" id="userImg">
                <section class="organInfo">
                    <h3 id="infoUsername"> André Nascimento </h3>
                    <label class="basicInfo"> CPF: 287.778.748.62 </label>
                    <label class="basicInfo"> Data de Nascimento: 05/06/1995 </label>
                </section>
            </section>
            <section class="userInfo">
                <label></label>
            </section>
        </section>
    </section>

    <!--<main class="infoAccountUser">
        
        <section class="infoAccount">
            <section class="spaceImgAccount">
                <img src="app/style/img/images.jpg" id="imgAccount">
                <section class="infoNameAccount">
                    <label class="nameAccount"> André Varíola do Nascimento Souza</label>
                </section>
                <label class="CpfAccount"> CPF: 287.778.748.62 </label>
                <label class="DtNascAccount"> Data de Nascimento: 05/06/1995 </label>
            </section>-->

    <?php
    /*include_once("historicUser.php");*/
    ?>

    <section class="center" id="modifyFooter">
        <section class="borderForm">
            <section class="spaceForm">
                <form name="formEditar" method="POST" class="formSave">
                    <section class="organForm">
                        <label class="infoForm"> Email: </label>
                        <input type="text" class="inputEdit"> </input>
                        <label class="infoForm"> Telefone: </label>
                        <input type="text" name="phone" id="phone" maxlength="12" class="inputEdit"> </input>
                        <label class="infoForm"> Senha: </label>
                        <input type="password" class="inputEdit"> </input>
                        <label class="infoForm"> Confirmar Senha: </label>
                        <input type="password" class="inputEdit"> </input>

                        <button id="btnExcluir"> Excluir Conta </button>

                    </section>
                </form>

                <form name="formEditar" method="POST" class="formSave">
                    <section class="organForm">
                        <label class="infoForm"> CEP: </label>
                        <input type="text" class=""> </input>
                        <label class="infoFormState"> Estado: </label>
                        <select class="signupBox" name="state" id="state">
                            <option value="AC"> Acre </option>
                            <option value="AL"> Alagoas </option>
                            <option value="AP"> Amapá </option>
                            <option value="AM"> Amazonas </option>
                            <option value="BA"> Bahia </option>
                            <option value="CE"> Ceará </option>
                            <option value="DF"> Distrito Federal </option>
                            <option value="ES"> Espírito Santo </option>
                            <option value="GO"> Goiás </option>
                            <option value="MA"> Maranhão </option>
                            <option value="MT"> Mato Grosso </option>
                            <option value="MS"> Mato Grosso do Sul </option>
                            <option value="MG"> Minas Gerais </option>
                            <option value="PA"> Pará </option>
                            <option value="PB"> Paraíba </option>
                            <option value="PR"> Paraná </option>
                            <option value="PE"> Pernambuco </option>
                            <option value="PI"> Piauí </option>
                            <option value="RJ"> Rio de Janeiro </option>
                            <option value="RN"> Rio Grande do Norte </option>
                            <option value="RS"> Rio Grande do Sul </option>
                            <option value="RO"> Rondônia </option>
                            <option value="RR"> Roraima </option>
                            <option value="SC"> Santa Catarina </option>
                            <option value="SP"> São Paulo </option>
                            <option value="SE"> Sergipe </option>
                            <option value="TO"> Tocantins </option>
                        </select>
                        <label class="infoCity"> Cidade: </label>
                        <input type="text" class="inputCity"> </input>
                        <label class="infoForm"> Bairro: </label>
                        <input type="text" class="inputEdit"> </input>
                        <label class="infoNum"> Número: </label>
                        <input type="number" class="inputNum"> </input>
                        <label class="infoForm"> Logradouro: </label>
                        <input type="text" class="inputBairro"> </input>

                        <input type="submit" value="Salvar" name="Salvar" id="btnSalvar"> </input>
                </form>
            </section>
        </section>
    </section>
    </section>



    <script>
        $("#phone").mask("+55 (00) 00000-0000");
    </script>
    <section class="center">
        <section class="modalContainer">
            <section id="modal">
                <section class="block">
                <h3 class="h3modal"> Deseja Excluir a sua conta? </h3>
                <button class="btnmodal"> Excluir </button>
                </section>
            </section>
        </section>
    </section>

    <footer id="footerArea">
		<?php
			include_once("footer.php");
		?>
	</footer>


</body>

</html>