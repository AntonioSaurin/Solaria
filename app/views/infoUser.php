<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="app/javaScript/jQuery.js"></script>
    <script src="app/javaScript/jMask.js"></script>
    <script src="app/javaScript/jmodal.js"></script>
    <link href="app/style/css/infoUser.css" rel="stylesheet">
    <title> Conta </title>
    <script>
        function excluir() {
            window.location.href = "/excluir-doador"; 
        }
    </script>
</head>

<body>
    <header>
        <?php
        use app\models\User;
        include_once("header.php");

        $user = (new User)->fullFind($_SESSION['id']);
        ?>
    </header>

    <section class="centerModal">
        <section id="myModal" class="modalContainer">
            <section id="modal">
                <section class="block">
                    <section class="modalShow">
                        <h3 class="h3modal"> Deseja excluir a sua conta? </h3>

                        <button class="btnmodal" id="Excluir" onclick="excluir()"> Excluir </button>
                        <button id="btncancelmodal" class="close"
                            onclick="document.getElementById('myModal').style.display='none'">Cancelar</button>
                        
                    </section>
                </section>

            </section>
        </section>
    </section>

    <section class="center">
        <section class="infoAccount">
            <section class="userImg">
                <img src="app/style/img/imgUsers.png" id="userImg" alt="Alterar Imagem">
             
                <section class="organInfo">
                    <h3 id="infoUsername"> <?= $user['userName'] ?> </h3>
                    <label class="basicInfo"> CPF: <?= $user['CPF'] ?> </label>
                    <label class="basicInfo"> Data de Nascimento: <?= $user['birthDate'] ?> </label>
                </section>
            </section>
            <section class="userInfo">
            </section>
        </section>
    </section>

    <?php
    /*include_once("historicUser.php");*/
    ?>

    <section class="center" id="modifyFooter">
        <section class="borderForm">
            <section class="spaceForm">
                <form name="formEditar" class="formSave">
                    <section class="organForm">
                        <label class="infoForm"> Email: </label>
                        <input type="text" class="inputEdit" value="<?= $user['userEmail'] ?>"> </input>
                        <label class="infoForm"> Telefone: </label>
                        <input type="text" name="phone" id="phone" maxlength="12" class="inputEdit" value="<?=  $user['DDD'].' '.$user['phoneNumber'] ?>"> </input>
                        <label class="infoForm"> Senha: </label>
                        <input type="password" class="inputEdit"> </input>
                        <label class="infoForm"> Confirmar Senha: </label>
                        <input type="password" class="inputEdit"> </input>
                </form>
                <button type="button" id="btnExcluir"
                onclick="document.getElementById('myModal').style.display='block'"> Excluir Conta </input>
            </section>

            <form name="formEditar" class="formSave">
                <section class="organForm">
                    <label class="infoForm"> CEP: </label>
                    <input type="text" class="inputCEP" value="<?= $user['CEP'] ?>"> </input>
                    <label class="infoFormState"> Estado: </label>
                    <select class="signupBox" name="state" id="state" selected="<?= $user['state'] ?>">
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
                        <option value="SP" selected> São Paulo </option>
                        <option value="SE"> Sergipe </option>
                        <option value="TO"> Tocantins </option>
                    </select>
                    <label class="infoCity"> Cidade: </label>
                    <input type="text" class="inputCity" value="<?= $user['city'] ?>"> </input>
                    <label class="infoForm"> Bairro: </label>
                    <input type="text" class="inputEdit" value="<?= $user['district'] ?>"> </input>
                    <label class="infoNum"> Número: </label>
                    <input type="number" class="inputNum" value="<?= $user['AdressNumber'] ?>"> </input>
                    <label class="infoForm"> Logradouro: </label>
                    <input type="text" class="inputLogradouro" value="<?= $user['street'] ?>"> </input>

                    <input type="submit" value="Salvar" name="Salvar" id="btnSalvar"> </input>
            </form>
        </section>
    </section>
    </section>
    </section>

    <script>
        $("#phone").mask("+55 (00) 00000-0000");

        window.onclick = function (event) {
            var modal = document.getElementById('modalContainer');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var botao = document.getElementById("btnExcluir");
        var sair = document.getElementById("btncancelmodal");
        var body = document.body;

        botao.addEventListener("click", function () {
            body.classList.toggle("no-scroll");

        })
        
        sair.addEventListener("click", function (){
            body.classList.toggle("no-scroll");
        }
        );

    </script>


<section id="space"> </section>

    <footer id="footerArea">
        <?php
        include_once("footer.php");
        ?>
    </footer>
    
</body>

</html>