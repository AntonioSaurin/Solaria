<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solario | Header</title>

    <link rel="stylesheet" href="app/style/css/bootstrap.css">
    <link rel="stylesheet" href="app/style/css/header2.css">
    
</head>

<body>
    <header class="header" id="header">
        <button class="btnIconHeader" onclick="changeSideBar()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
        </button>
        <section class="headerIcon">
            <img src="app/style/img/Brand.png" alt="Logo da Solaria" id="brand">
        </section>
        <nav class="headerNav" id="headerNav">
            <button class="btnIconHeader" onclick="changeSideBar()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x"
                    viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                </svg>
            </button>
            <a href="/">Home</a>
            <a href="/instituicoes">Intitutições</a>
            <a href="/como-adotar">Como adotar</a>
            <a href="/sobre-nos">Sobre nós</a>
        </nav>
    </header>
</body>
<script src="app/javaScript/popper.min.js"></script>
<script src="app/javaScript/bootstrap.min.js"></script>
<script src="app/javaScript/header2.js"></script>


</html>