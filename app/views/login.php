'<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/style/css/login.css">
    <title>Login</title>
</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>   
    <main class="gradient">
        <section class="form loginBox">
            <h1>Login</h1><br>
            <form action="/login/efetuar" method="post" name="login">
                <span class="table">
                    <h3>Email:</h3>
                    <input type="email" class="loginBox" name="email" id="email" placeholder="Email"><br>

                    <h3>Senha:</h3>
                    <input type="password" class="loginBox" name="password" id="password" placeholder="Senha"><br>

                    <button type="submit" name="login" class="loginButton">Login</button>
                    <p>Ainda não tem uma conta? <a href="/cadastro">Cadastrar</a></p>
                </span>
            </form>
        </section>
        <img class="img" src="app/style/img/brandWithout.png">
    </main>

</body>

</html>