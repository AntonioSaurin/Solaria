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
            <section class="signupBox form">
                <form action="cadastro/efetuar" method="post" name="Cadastro">
                    <span class="table1">
                        <h1>Cadastrar</h1><br>
                        <p>Nome Completo:</p>
                        <input type="text" class="signupBox" name="name" id="name" placeholder="Nome" required><br>

                        <p>Data de Nascimento:</p>
                        <input type="text" class="signupBox" name="birthDate" id="birthDate"
                            placeholder="Data de Nascimento" maxlength="8" required><br>

                        <p>CPF:</p>
                        <input type="text" class="signupBox" name="CPF" id="CPF" placeholder="CPF" maxlength="9" required><br>

                        <p>Telefone:</p>
                        <input type="phone" class="signupBox" name="phone" id="phone" placeholder="Telefone"  maxlength="12" required><br>
                    </span>

                    <span class="table2">


                        <p>Email:</p>
                        <input type="email" class="signupBox" name="email" id="email" placeholder="Email" required><br>

                        <p>Senha:</p>
                        <input type="password" class="signupBox" name="password" id="password" placeholder="Senha" required><br>

                        <p>Confirmar Senha:</p>
                        <input type="password" class="signupBox" name="conPassword" id="conPassword"
                            placeholder="Confirmar Senha" required><br>

                        <button type="submit" name="submit" class="registerButton">Cadastrar</button>

                        <p>Você já tem uma conta? <a href="/login" id="btnLogin">Login</a></p>
                    </span>
                </form>

            </section>
            <img class="img" src="app/style/img/brandWithout.png">
        </span>
    </main>
    <script>
        $("#phone").mask("(00) 00000-0000");
        $("#CPF").mask("000.000.000-00");
        $("#birthDate").mask("00/00/0000");
    </script>
</body>

</html>