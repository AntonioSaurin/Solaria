<!DOCTYPE html>

<html lang="pt-br">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="app/style/css/home.css">
	<script src="app/javaScript/jQuery.js"></script>
	<script src="app/javaScript/fontAwesome.js"></script>
</head>

<body>
	<header>
		<?php
		include('header.php');
		?>
	</header>

	<section id="contentHome" class="flexContainer">
		<section id="mainHome">
			<section id="imgTop">
				<img src="app/style/img/homeChildren.png" class="imgTop">
			</section>
			<section id="contentTop">
				<h1> Sua ajuda pode fazer a diferença! </h1>
				<p> A cada doação um futuro prospero é construído </p>
				<a href="/cadastro">
					<button type="button" id="buttonTop" class="btn btn-info btnHome">
						Faça parte disso
						<img class="arrow" src="app/style/img/imgArrowRight.png">
					</button>
				</a>
			</section>
			<section id="scrollInstitution"><a href="#institutionArea">
					<p>Ler mais</p><i class="fa-solid fa-arrow-down arrowDown" style="color: #ffffff;"></i>
				</a></section>
		</section>
		<section id="institutionArea">
			<section id="howToAdopt" class="optionsHomeArea">
				<img src="app\style\img\iconhug.png" class="imgInstitutionArea">
				<section class="contentTextHome">
					<h2 class='a'>Saiba como adotar!</h2>
					<h4 class='a'>Veja informações sobre o assunto</h6>
				</section>
				<a href="/como-adotar">
					<button type="button" id="btnHowToAdopt" class="btn btn-info btnHome">
						ver
						<img class="arrow" src="app/style/img/imgArrowRight.png">
					</button>
				</a>
			</section>
			<section id="signUpInstitution" class="optionsHomeArea">
				<img src="app\style\img\houseiconblue.png" class="imgInstitutionArea">
				<section class="contentTextHome">
					<h2 class='a'>É uma instituição?</h2>
					<h4 class="a">Cadastre-se em nossa plataforma</h6>
				</section>
				<a href="/cadastroInstituicao">
					<button type="button" id="btnInstitution" class="btn btn-info btnHome">
						cadastrar
						<img class="arrow" src="app/style/img/imgArrowRight.png">
					</button>
				</a>
			</section>
		</section>
	</section>

	<button onclick="topFunction()" id="goUpButton" title="Voltar ao topo">
		<img class="goUpArrow" src="app/style/img/imgArrowRight.png"></button>
	<script src="../app/javaScript/blogArrow.js"></script>

	<footer id="footerArea">
		<?php
		include_once("footer.php");
		?>
	</footer>
</body>

</html>