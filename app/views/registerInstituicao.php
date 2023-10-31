<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app\style\css\registerInstituicao.css">
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
                    <h1>Cadastrar</h1><br>
                    <span class="table1">
                        <p>Nome da Instituição:</p>
                        <input type="text" class="signupBox" name="name" id="name"
                            placeholder="Nome da Instituição"><br>

                        <p>CNPJ:</p>
                        <input type="text" class="signupBox" name="CNPJ" id="CNPJ" placeholder="CNPJ"
                            maxlength="14"><br>

                        <p>Telefone:</p>
                        <input type="text" class="signupBox" name="phone" id="phone" placeholder="Telefone"
                            maxlength="12"><br>

                    </span>

                    <span class="table2">
                        <p>Email:</p>
                        <input type="text" class="signupBox" name="email" id="email" placeholder="Email"><br>

                        <p>Senha:</p>
                        <input type="password" class="signupBox" name="password" id="password" placeholder="Senha"><br>

                        <p>Confirmar Senha:</p>
                        <input type="password" class="signupBox" name="conPassword" id="conPassword"
                            placeholder="Confirmar Senha"><br>

                        <span name="next" class="nextButton" onclick=changeVisibleAdress()>Próximo</span>

                        <p class="link">Você já tem uma conta? <a href="/login">Login</a></p>
                    </span>

            </section>

            <section class="signupBox form" id="pt2">
                <h1>Cadastrar Endereço</h1><br>
                <span class="table1">
                    <p>CEP:</p>
                    <input type="text" class="signupBox" name="CEP" id="CEP" placeholder="00000-000"><br>

                    <p>CNPJ:</p>
                    <input type="text" class="signupBox" name="CNPJ" id="CNPJ" placeholder="CNPJ" maxlength="14"><br>

                    <p>Telefone:</p>
                    <input type="text" class="signupBox" name="phone" id="phone" placeholder="Telefone"
                        maxlength="12"><br>

                    <span class="backButton" onclick=changeVisibleInfos()>Voltar</span>
                </span>

                <span class="table2">
                    <p>CEP:</p>
                    <input type="text" class="signupBox" name="CEP" id="CEP" placeholder="00000-000"><br>

                    <p>Senha:</p>
                    <input type="password" class="signupBox" name="password" id="password" placeholder="Senha"><br>

                    <p>Confirmar Senha:</p>
                    <input type="password" class="signupBox" name="conPassword" id="conPassword"
                        placeholder="Confirmar Senha"><br>

                    <span class="nextButton" onclick=changeVisibleOthers()>Próximo</span>

                    <p class="link">Você já tem uma conta? <a href="/login">Login</a></p>
                </span>


            </section>

            <section class="signupBox form" id="pt3">
                <h1>Outras Informações</h1><br>
                <span class="table1">
                    <p>CEP:</p>
                    <input type="text" class="signupBox" name="CEP" id="CEP" placeholder="00000-000"><br>

                    <p>CNPJ:</p>
                    <input type="text" class="signupBox" name="CNPJ" id="CNPJ" placeholder="CNPJ" maxlength="14"><br>

                    <p>Telefone:</p>
                    <input type="text" class="signupBox" name="phone" id="phone" placeholder="Telefone"
                        maxlength="12"><br>

                    <span class="backButton" onclick=changeVisibleAdress()>Voltar</span>
                </span>

                <span class="table2">
                    <p>CEP:</p>
                    <input type="text" class="signupBox" name="CEP" id="CEP" placeholder="00000-000"><br>

                    <p>Senha:</p>
                    <input type="password" class="signupBox" name="password" id="password" placeholder="Senha"><br>

                    <p>Confirmar Senha:</p>
                    <input type="password" class="signupBox" name="conPassword" id="conPassword"
                        placeholder="Confirmar Senha"><br>

                    <button type="submit" name="submit" class="registerButton">Cadastrar</button>

                    <p class="link">Você já tem uma conta? <a href="/login">Login</a></p>
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
            var box1 = document.getElementById("pt1");
            var box2 = document.getElementById("pt2");
            var box3 = document.getElementById("pt3");

            box1.style.display = "none";
            box2.style.display = "inline";
            box3.style.display = "none";
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