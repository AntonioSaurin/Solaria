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
                        <input type="text" class="signupBox" name="responsible" id="responsible"
                            placeholder="Responsavél"><br>

                        <p>CPF do Responsavél:</p>
                        <input type="text" class="signupBox" name="CPF" id="CPF" placeholder="CPF" maxlength="14"><br>

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
                    <input type="text" class="signupBox" name="CEP1" id="CEP1" placeholder="00000-000"><br>

                    <p>Estado:</p>
                    <select class="signupBox" name="state" id="state">
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

                    <p>Telefone:</p>
                    <input type="text" class="signupBox" name="phone2" id="phone2" placeholder="Telefone"
                        maxlength="12"><br>

                    <span class="backButton" id="text" onclick=changeVisibleInfos()>Voltar</span>
                </span>

                <span class="table2">
                <p>Bairro:</p>
                    <input type="text" class="signupBox" name="neighborhood" id="neighborhood" placeholder="Bairro"><br>

                    <p>Numero:</p>
                    <input type="text" class="signupBox" name="number" id="number" placeholder="Numero"><br>

                    <p>Logradouro:</p>
                    <input type="password" class="signupBox" name="publicPlace" id="publicPlace"
                        placeholder="Logradouro"><br>

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
        $("#CPF").mask("000.000.000-00");
        $("#CNPJ").mask("00.000.000/0000-00");

        function changeVisibleInfos() {

            var box1 = document.getElementById("pt1");
            var box2 = document.getElementById("pt2");
            var box3 = document.getElementById("pt3");

            box1.style.display = "inline";
            box2.style.display = "none";
            box3.style.display = "none";

        }

        function changeVisibleAdress() {
            var empty = verifyEmpty(nome, cnpj, phone, email, password, conPassword);

            if (empty != true) {
                var box1 = document.getElementById("pt1");
                var box2 = document.getElementById("pt2");
                var box3 = document.getElementById("pt3");

                box1.style.display = "none";
                box2.style.display = "inline";
                box3.style.display = "none";
            }
        }

        function changeVisibleOthers() {
            var box1 = document.getElementById("pt1");
            var box2 = document.getElementById("pt2");
            var box3 = document.getElementById("pt3");

            box1.style.display = "none";
            box2.style.display = "none";
            box3.style.display = "inline";
        }
    </script>
</body>

</html>