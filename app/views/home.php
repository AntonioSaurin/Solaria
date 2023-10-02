<!DOCTYPE html>
<?php
require_once 'vendor/autoload.php';

use app\classes\Logged;

session_start();

$logged = (new Logged)->verify($_SESSION);

// if ($logged != 1) {
// 	header('Location: app/views/login.html');
// 	die;
// }
?>
<html lang="pt-br">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="app/style/css/home.css">
</head>

<body>
	<header id="header">
		<p>O amanhecer novo</p>
	</header>

	<section id="contentHome" class="flex-container">
		<section id="main-home">
			<p>Doe para um Futuro melhor</p>
			<button type="button" class="btn btn-info">Olhar instituicoes</button>

		</section>
		<section id="about-us">
			<h2>Sobre nos</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
				dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
				ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
				fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
				deserunt mollit anim id est laborum</p>

		</section>
		<section id="how-to-adopt">
			<h2>Como adotar</h2>
			<h6>clique aqui para saber como adotar uma criança</h6>
			<button type="button" class="btn btn-info">Como Adotar</button>

		</section>
		<section id="sign-up-institution">
			<h2>É uma istituição?</h2>
			<h6>clique aqui para adicionar sua instituicao ao nosso site</h6>
			<button type="button" class="btn btn-info">Adicionar</button>
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