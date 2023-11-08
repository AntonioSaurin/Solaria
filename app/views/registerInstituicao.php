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
                <form action="cadastro/efetuar" method="post" name="Cadastro" class="row g-3 needs-validation"
                    novalidate>
                    <h1>Cadastrar</h1><br>
                    <span class="table1">
                        <label for="validationNameInstituition" class="form-label">Nome da Instituição:</label>
                        <section class="col-md-4">
                            <input type="text" class="signupBox form-control" name="name" id="name"
                                placeholder="Nome da Instituição"><br>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </section>

                        <label for="validationDirector" class="form-label">Responsável:</label>
                        <section class="col-md-4">
                            <input type="text" class="signupBox" name="director" id="director"
                                placeholder="Responsavél"><br>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </section>

                        <label for="validationDirectorCPF" class="form-label">CPF do Responsavél:</label>
                        <section class="col-md-4">
                            <input type="text" class="signupBox" name="directorCPF" id="directorCPF" placeholder="CPF"
                                maxlength="14"><br>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </section>
                    </span>

                    <span class="table2">
                        <label for="validationCNPJ" class="form-label">CNPJ:</label>
                        <section class="col-md-4">
                            <input type="text" class="signupBox" name="CNPJ" id="CNPJ" placeholder="CNPJ"
                                maxlength="14"><br>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </section>

                        <label for="validationEmail" class="form-label">Email:</label>
                        <section class="col-md-4">
                            <input type="text" class="signupBox" name="email" id="email" placeholder="Email"><br>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </section>

                        <label>Telefone:</label>
                        <section class="col-md-4">
                            <input type="text" class="signupBox" name="phone" id="phone" placeholder="Telefone"
                                maxlength="12"><br>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </section>

                        <span name="next" class="nextButton" id="text" onclick=changeVisibleAdress()>Próximo</span>

                        <p class="link text">Você já tem uma conta? <a href="/login" id="btnLogin">Login</a></label>
                    </span>

            </section>

            <section class="signupBox form" id="pt2">
                <h1>Cadastrar Endereço</h1><br>
                <span class="table1">
                    <label for="validationCEP" class="form-label">CEP:</label>
                    <section class="col-md-4">
                        <input type="text" class="signupBox" name="CEP" id="CEP" placeholder="00000-000"><br>
                        <div class="invalid-feedback">
        Please choose a username.
      </div>
                    </section>

                    <label>Estado:</label>
                    <section class="col-md-4">
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
                    </section>

                    <label>Cidade:</label>
                    <section class="col-md-4">
                        <input type="text" class="signupBox" name="city" id="city" placeholder="Telefone"
                            maxlength="12"><br>
                            <div class="invalid-feedback">
        Please choose a username.
      </div>
                    </section>

                    <span class="backButton" id="text" onclick=changeVisibleInfos()>Voltar</span>
                </span>

                <span class="table2">
                    <label>Bairro:</label>
                    <section class="col-md-4">
                        <input type="text" class="signupBox" name="district" id="district" placeholder="Bairro"><br>
                        <div class="invalid-feedback">
        Please choose a username.
      </div>
                    </section>

                    <label>Numero:</label>
                    <section class="col-md-4">
                        <input type="text" class="signupBox" name="number" id="number" placeholder="Numero"><br>
                        <div class="invalid-feedback">
        Please choose a username.
      </div>
                    </section>

                    <label>Rua:</label>
                    <section class="col-md-4">
                        <input type="text" class="signupBox" name="street" id="street" placeholder="Rua"><br>
                        <div class="invalid-feedback">
        Please choose a username.
      </div>
                    </section>

                    <span class="nextButton" id="text" onclick=changeVisibleOthers()>Próximo</span>

                    <p class="link text">Você já tem uma conta? <a href="/login" id="btnLogin">Login</a></label>
                </span>


            </section>

            <section class="signupBox form" id="pt3">
                <h1>Cadastrar Senhas</h1><br>
                <span class="table1">


                    <span class="backButton align" id="text" onclick=changeVisibleAdress()>Voltar</span>
                </span>

                <span class="table2 test">
                    <span class="table3">
                        <label for="validationCustom01" class="form-label">Senha:</label>
                        <section class="col-md-4">
                            <input type="password" class="signupBox" name="password3" id="password3"
                                placeholder="Senha"><br>
                        </section>
                        <label for="validationCustom01" class="form-label">Confirmar Senha:</label>
                        <section class="col-md-4">
                            <input type="password" class="signupBox" name="conPassword3" id="conPassword3"
                                placeholder="Confirmar Senha"><br>
                        </section>
                    </span>

                    <button type="submit" name="submit" class="registerButton align" id="text">Cadastrar</button>

                    <p class="link text align2">Você já tem uma conta? <a href="/login" id="btnLogin">Login</a></label>
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
            var empty = verifyEmptyAddres(cep, state, city, district, street, number);

            if (empty != true) {
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