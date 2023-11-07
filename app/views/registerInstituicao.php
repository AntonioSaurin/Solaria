<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app\style\css\registerInstituicao.css">
    <script src="app/javaScript/jQuery.js"></script>
    <script src="app/javaScript/jMask.js"></script>
    <script src="app/javaScript/inputsVerify.js"></script>
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
                    <h1>Cadastrar</h1><br>
                    <span class="table1">
                        <p>Nome da Instituição:</p>
                        <input type="text" class="signupBox" name="name" id="name"
                            placeholder="Nome da Instituição"><br>

                        <p>Responsável:</p>
                        <input type="text" class="signupBox" name="director" id="director"
                            placeholder="Responsavél"><br>

                        <p>CPF do Responsavél:</p>
                        <input type="text" class="signupBox" name="directorCPF" id="directorCPF" placeholder="CPF"
                            maxlength="14"><br>

                    </span>

                    <span class="table2">
                        <p>CNPJ:</p>
                        <input type="text" class="signupBox" name="CNPJ" id="CNPJ" placeholder="CNPJ"
                            maxlength="14"><br>

                        <p>Email:</p>
                        <input type="text" class="signupBox" name="email" id="email" placeholder="Email"><br>

                        <p>Telefone:</p>
                        <input type="text" class="signupBox" name="phone" id="phone" placeholder="Telefone"
                            maxlength="12"><br>

                        <span name="next" class="nextButton" id="text" onclick=changeVisibleAdress()>Próximo</span>

                        <p class="link">Você já tem uma conta? <a href="/login" id="btnLogin">Login</a></p>
                    </span>

            </section>

            <section class="signupBox form" id="pt2">
                <h1>Cadastrar Endereço</h1><br>
                <span class="table1">
                    <p>CEP:</p>
                    <input type="text" class="signupBox" name="CEP" id="CEP" placeholder="00000-000"><br>

                    <p>Estado:</p>
                    <select class="signupBox" name="state" id="state">
                        <option value="AC"> AC </option>
                        <option value="AL"> Al </option>
                        <option value="AP"> AP </option>
                        <option value="AM"> AM </option>
                        <option value="BA"> BA </option>
                        <option value="CE"> CE </option>
                        <option value="DF"> DF </option>
                        <option value="ES"> ES </option>
                        <option value="GO"> GO </option>
                        <option value="MA"> MA </option>
                        <option value="MT"> MT </option>
                        <option value="MS"> MS </option>
                        <option value="MG"> MG </option>
                        <option value="PA"> PA </option>
                        <option value="PB"> PB </option>
                        <option value="PE"> PE </option>
                        <option value="PI"> PI </option>
                        <option value="RJ"> RJ </option>
                        <option value="RN"> RN </option>
                        <option value="RS"> RS </option>
                        <option value="RO"> RO </option>
                        <option value="RR"> RR </option>
                        <option value="SC"> SC </option>
                        <option value="SP"> SP </option>
                        <option value="SE"> SE </option>
                        <option value="TO"> TO </option>
                    </select>

                    <p>Cidade:</p>
                    <input type="text" class="signupBox" name="city" id="city" placeholder="Telefone"
                        maxlength="12"><br>

                    <span class="backButton" id="text" onclick=changeVisibleInfos()>Voltar</span>
                </span>

                <span class="table2">
                    <p>Bairro:</p>
                    <input type="text" class="signupBox" name="district" id="district" placeholder="Bairro"><br>

                    <p>Numero:</p>
                    <input type="text" class="signupBox" name="number" id="number" placeholder="Numero"><br>

                    <p>Rua:</p>
                    <input type="text" class="signupBox" name="street" id="street" placeholder="Rua"><br>

                    <span class="nextButton" id="text" onclick=changeVisibleOthers()>Próximo</span>

                    <p class="link text">Você já tem uma conta? <a href="/login" id="btnLogin">Login</a></p>
                </span>


            </section>

            <section class="signupBox form" id="pt3">
                <h1>Outras Informações</h1><br>
                <span class="table1">


                    <span class="backButton" id="text" onclick=changeVisibleAdress()>Voltar</span>
                </span>

                <span class="table2">
                    <p>Senha:</p>
                    <input type="password" class="signupBox" name="password3" id="password3" placeholder="Senha"><br>

                    <p>Confirmar Senha:</p>
                    <input type="password" class="signupBox" name="conPassword3" id="conPassword3"
                        placeholder="Confirmar Senha"><br>

                    <button type="submit" name="submit" class="registerButton" id="text">Cadastrar</button>

                    <p class="link text">Você já tem uma conta? <a href="/login" id="btnLogin">Login</a></p>
                </span>
                </form>

            </section>

            <img class="img" src="app/style/img/brandWithout.png">
        </span>
    </main>
    <script>
        $("#phone").mask("(00) 00000-0000");
        $("#directorCPF").mask("000.000.000-00");
        $("#CNPJ").mask("00.000.000/0000-00");
        $("#CEP").mask("00000-000");

        function changeVisibleInfos() {

            var box1 = document.getElementById("pt1");
            var box2 = document.getElementById("pt2");
            var box3 = document.getElementById("pt3");

            box1.style.display = "inline";
            box2.style.display = "none";
            box3.style.display = "none";

        }

        function changeVisibleAdress() {
            var empty = verifyEmptyInfos(nome, cnpj, phone, email, director, directorCPF);

            if (empty == true) {
                var box1 = document.getElementById("pt1");
                var box2 = document.getElementById("pt2");
                var box3 = document.getElementById("pt3");

                box1.style.display = "none";
                box2.style.display = "inline";
                box3.style.display = "none";
            }
        }

        function changeVisibleOthers() {
            var empty = verifyEmptyAddres(cep, state, city, district, street, number);

            if (empty == true) {
                var box1 = document.getElementById("pt1");
                var box2 = document.getElementById("pt2");
                var box3 = document.getElementById("pt3");

                box1.style.display = "none";
                box2.style.display = "none";
                box3.style.display = "inline";
            }

        }
    </script>
</body>

</html>