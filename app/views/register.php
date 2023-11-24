<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/style/css/register.css">
    <script src="app/javaScript/jQuery.js"></script>
    <script src="app/javaScript/jMask.js"></script>
    <title>Cadastrar</title>
</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>
    <main>
        <span id="gradient">
            <section class="signupBox form" id="pt1">
                <form action="cadastro/efetuar" method="post" name="Cadastro">
                    <span class="table1">
                        <h1>Cadastrar</h1><br>
                        <p>Nome Completo:</p>
                        <input type="text" class="signupBox" name="name" id="name" placeholder="Nome" required><br>

                        <p>Data de Nascimento:</p>
                        <input type="text" class="signupBox" name="birthDate" id="birthDate"
                            placeholder="Data de Nascimento" maxlength="8" required><br>

                        <p>CPF:</p>
                        <input type="text" class="signupBox" name="CPF" id="CPF" placeholder="CPF" maxlength="9"
                            required><br>

                        <p>Telefone:</p>
                        <input type="phone" class="signupBox" name="phone" id="phone" placeholder="Telefone"
                            maxlength="12" required><br>
                    </span>

                    <span class="table2">


                        <p>Email:</p>
                        <input type="email" class="signupBox" name="email" id="email" placeholder="Email" required><br>

                        <p>Senha:</p>
                        <input type="password" class="signupBox" name="password" id="password" placeholder="Senha"
                            required><br>

                        <p>Confirmar Senha:</p>
                        <input type="password" class="signupBox" name="conPassword" id="conPassword"
                            placeholder="Confirmar Senha" required><br>

                        <button type="submit" name="submit" class="registerButton">Cadastrar</button>

                        <p>Você já tem uma conta? <a href="/login" id="btnLogin">Login</a></p>
                    </span>
                </form>

            </section>

            <section class="signupBox form" id="pt2">
                <h1>Cadastrar Endereço</h1>
                <span class="table1">
                    <label>CEP:</label>
                    <section class="input-group">
                        <input type="text" class="signupBox" name="CEP" id="CEP" onkeyup="validationCEP()">
                        <span id="CEP-error"></span>
                    </section>

                    <label>Estado:</label>
                    <section class=" input-group">
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
                            <option value="TO"> Tocantinsa </option>
                        </select>
                    </section>

                    <label>Cidade:</label>
                    <section class="input-group">
                        <input type="text" class="signupBox" name="city" id="city" onkeyup="validationCity()">
                        <span id="city-error"></span>
                    </section>

                    <span class=" backButton" id="text" onclick=changeVisibleInfos()>Voltar
                    </span>
                </span>

                <span class="table2">
                    <label>Bairro:</label>
                    <section class="input-group">
                        <input type="text" class="signupBox" name="district" id="district"
                            onkeyup="validationDistrict()">
                        <span id="district-error"></span>
                    </section>

                    <label>Numero:</label>
                    <section class=" input-group">
                        <input type="text" class="signupBox" name="number" id="number" onkeyup="validationNumber()">
                        <span id="number-error"></span>
                    </section>

                    <label>Rua:</label>
                    <section class=" input-group">
                        <input type="text" class="signupBox" name="street" id="street" onkeyup="validationStreet()">
                        <span id="street-error"></span>
                    </section>

                    <span class="nextButton" id="text" onclick=changeVisibleOthers()>Próximo
                    </span>

                    <p class="link text">Você já tem uma conta? <a href="/login" id="btnLogin">Login</a></label>
                </span>


            </section>

            <img class="img" src="app/style/img/brandWithout.png">
        </span>
    </main>
    <script>
        $("#phone").mask("(00) 00000-0000");
        $("#CPF").mask("000.000.000-00");
        $("#birthDate").mask("00/00/0000");
        $("#CEP").mask("00000-000");

        function changeVisibleInfos() {

            var box1 = document.getElementById("pt1");
            var box2 = document.getElementById("pt2");

            box1.style.display = "inline";
            box2.style.display = "none";

        }

        function changeVisibleAdress() {

            if (empty == true) {
                var box1 = document.getElementById("pt1");
                var box2 = document.getElementById("pt2");

                box1.style.display = "none";
                box2.style.display = "inline";

            }
        }
    </script>
</body>

</html>