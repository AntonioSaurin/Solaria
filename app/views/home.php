<!DOCTYPE html>

<html lang="pt-br">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="app/style/css/bootstrap.css">
	<link rel="stylesheet" href="app/style/css/home.css">
</head>

<body>
	<header id="header">
		<?php
			include('header.php');
		?>
	</header>

	<section id="contentHome" class="flexContainer">
		<section id="mainHome">
			<figure id="imgHome">
				<img src="app/style/img/homeChildren.png" alt="Crianças sorrindo" title="Bem vindo(a) a solaria!">
			</figure>
			<section class="contentTextHome">
				<h1> Sua ajuda pode fazer a diferença! </h1>
				<h3> A cada doação um futuro prospero é construído </h3>
				<button type="button"  id="btnFirst" class="btn btn-info">Faça parte disso ></button>
			</section>
			
		</section>
		<section id="howToAdopt">
			<section class="contentTextHome">
				<h2>Como adotar?</h2>
				<h4>Veja informações sobre o assunto</h6>
			</section>
			<section class="btnSecond">
				<button type="button" id="btnSecond" class="btn btn-info">Descubra aqui ></button>
			</section>
		</section>
		<section id="signUpInstitution">
			<section class="contentTextHome">
				<h2>É uma instituição?</h2>
				<h4>Adicione-a em nossa plataforma</h6>
			</section>
			<section class="btnThird">
				<button type="button" id="btnThird" class="btn btn-info">Cadastre-se ></button>
			</section>
		</section>
	</section>
	<footer id="footer">

		<p>@solaria |</p>
	</footer>





	<!-- JavaScript (Opcional) -->
	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>

</body>

</html>