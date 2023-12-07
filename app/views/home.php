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
	<header>
		<?php
		include('header.php');
		?>

	</header>

	<img src="app/style/img/homeChildren.png" class="teste">

	<section id="contentHome" class="flexContainer">

		<section id="mainHome">
			<section class="contentTextHome">
				<h1> Sua ajuda pode fazer a diferença! </h1>
				<h3> A cada doação um futuro prospero é construído </h3>
				<a href="/cadastro">
					<button type="button" id="btnFirst" class="btn btn-info btnHome">
						Faça parte disso 
						<img class="homeArrow2" src="app/style/img/imgArrowRight.png">
					</button>
				</a>
			</section>
		</section>
		<section id="institutionArea">
			<section id="howToAdopt" class="optionsHomeArea align1">
				<img src="app\style\img\iconhug.png" id="f">
				<section class="contentTextHome">
					<h2 class='a'>Saiba como adotar!</h2>
					<h4 class='a'>Veja informações sobre o assunto</h6>
				</section>
				<section class="btnSecond">
					<a href="/como-adotar">
						<button type="button" id="btnSecond" class="btn btn-info btnHome">
							Saiba aqui
							<img class="homeArrow1" src="app/style/img/imgArrowRight.png">
						</button>
					</a>
				</section>
			</section>
			<section id="signUpInstitution" class="optionsHomeArea align2">
				<img src="app\style\img\houseiconblue.png" id="e">
				<section class="contentTextHome">
					<h2 class='a'>É uma instituição?</h2>
					<h4 class="a">Cadastre-se em nossa plataforma</h6>
				</section>
				<section class="btnThird">
					<a href="/cadastroInstituicao">
						<button type="button" id="btnThird" class="btn btn-info btnHome">
							Cadastre-se 
							<img class="homeArrow1" src="app/style/img/imgArrowRight.png">
						</button>
					</a>
				</section>
			</section>
		</section>
	</section>

	<footer id="footerArea">
		<?php
		include_once("footer.php");
		?>
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