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
			
		?>
	</header>

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

    <section class="institutionArea">
        <section class="institutionBox" style="background-color:#FFA12D;">
            <img src="app/style/img/imgInstitutionAdotar.png" alt="Instituição Adotar">
                <section class="institutionInfo">
                    <h2>Instituição Adotar</h2>
                    <p>A Adotar é uma instituição de adoção dedicada a encontrar lares amorosos e seguros para crianças vulneráveis. Nossa equipe oferece cuidados de qualidade, apoio emocional e recursos para famílias adotivas. </p>
                    <p><b>Necessita:</b> Brinquedos, Roupas e Dinheiro.</p>
                </section>
                <button class="donateButton"><b>Doar ></b></button>
        </section>

        <section class="institutionBox" style="background-color:#129BAB;">
            <img src="app/style/img/imgInstitutionCoracao.png" alt="Instituição Adotar">
                <section class="institutionInfo">
                    <h2>Instituição Coração</h2>
                    <p>Nossa instituição de adoção comprometida em encontrar lares amorosos para crianças vulneráveis. Nossa equipe qualificada oferece cuidados dedicados e apoio emocional para famílias adotivas.</p>
                    <p><b>Necessita:</b> Brinquedos e Roupas.</p>
                </section>
                <button class="donateButton"><b>Doar ></b></button>
        </section>

    </section>
   

    <section id="modal" class="modal-container">
        <section class="modal1">
            <h1>teste<h1>
            <form>
                <input type="text">
            </form>    
        </section>
        
    </section>     
</body>
</html>
