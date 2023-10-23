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
            <section class="signupBox form">
                <form action="cadastro/efetuar" method="post" name="Cadastro">
                    <span class="table1">
                        <h1>Cadastrar</h1><br>
                        <p>Nome da Instituição:</p>
                        <input type="text" class="signupBox" name="name" id="name" placeholder="Nome da Instituição"><br>

                        <p>CNPJ:</p>
                        <input type="text" class="signupBox" name="CNPJ" id="CNPJ" placeholder="CNPJ" maxlength="14"><br>

                        <p>Telefone:</p>
                        <input type="text" class="signupBox" name="phone" id="phone" placeholder="Telefone"maxlength="12"><br>
                      
                    </span>

                    <span class="table2">
                        <p>Email:</p>
                        <input type="text" class="signupBox" name="email" id="email" placeholder="Email"><br>

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
    </script>
</body>

</html>