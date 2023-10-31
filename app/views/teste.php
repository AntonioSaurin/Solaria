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
                    <span class="table1">
                        <h1>Cadastrar</h1><br>
                        <label>Nome da Instituição:</label>
                        <input type="text" class="signupBox" name="name" id="name" placeholder="Nome da Instituição"><br>

                        <label>CNPJ:</label>
                        <input type="text" class="signupBox" name="CNPJ" id="CNPJ" placeholder="CNPJ" maxlength="14"><br>

                        <label>Telefone:</label>
                        <input type="text" class="signupBox" name="phone" id="phone" placeholder="Telefone"maxlength="12"><br>
                      
                    </span>

                    <span class="table2">
                        <label>Email:</label>
                        <input type="text" class="signupBox" name="email" id="email" placeholder="Email"><br>

                        <label>Senha:</label>
                        <input type="password" class="signupBox" name="password" id="password" placeholder="Senha"><br>

                        <label>Confirmar Senha:</label>
                        <input type="password" class="signupBox" name="conPassword" id="conPassword" placeholder="Confirmar Senha"><br>

                        <span name="next" class="nextButton" onclick=changeVisibleAdress()>Proximo</span>

                        <p class="link">Você já tem uma conta? <a href="/login">Login</a></p>
                    </span>

            </section>

            <section class="signupBox form" id="pt2">
                    <span class="table1">
                        <h1>Cadastrar Endereço</h1><br>
                        <label>CEP:</label>
                        <input type="text" class="signupBox" name="CEP" id="CEP" placeholder="00000-000"><br>

                        <label>CNPJ:</label>
                        <input type="text" class="signupBox" name="CNPJ" id="CNPJ" placeholder="CNPJ" maxlength="14"><br>

                        <label>Telefone:</label>
                        <input type="text" class="signupBox" name="phone" id="phone" placeholder="Telefone"maxlength="12"><br>
                      
                    </span>

                    <span class="table2">
                        <label>CEP:</label>
                        <input type="text" class="signupBox" name="CEP" id="CEP" placeholder="00000-000"><br>

                        <label>Senha:</label>
                        <input type="password" class="signupBox" name="password" id="password" placeholder="Senha"><br>

                        <label>Confirmar Senha:</label>
                        <input type="password" class="signupBox" name="conPassword" id="conPassword" placeholder="Confirmar Senha"><br>

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

        function changeVisibleAdress() {
            var box1 = document.getElementById("pt1");
            var box2 = document.getElementById("pt2");
            
            box1.style.display = "none";
            box2.style.display = "inline";
        }
    </script>
</body>

</html>