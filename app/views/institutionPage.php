<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app/style/css/institutionPage.css" rel="stylesheet">
    <title>Solaria/Instituições</title>
</head>
<body>
    <header id="header">
		<?php
			include('header.php');
		?>
	</header>

    <section class="container">
        <section class="filterArea">
            <label for="filtroTipo" class="filterText"><img class="filterImage" src="app/style/img/filterImage.png">Filtrar:</label>
            <select class="selectFilter" id="filtroTipo">
                <option value="">Todos</option>
                <option value="dinheiro">Dinheiro</option>
                <option value="roupas">Roupas</option>
                <option value="alimentos">Alimentos</option>
                <option value="brinquedos">Brinquedos</option>
            </select>
        </section>

        <section id="institution-area">
            
        </section>
    </section>
     


    
</body>
</html>
