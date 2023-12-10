<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="app/style/css/aboutUs.css" rel="stylesheet">
  <title> Sobre nós </title>
  
</head>

<body>
  <?php
    include_once("header.php");
  ?>

  <button onclick="topFunction()" id="goUpButton" title="Voltar ao topo"> <img class="goUpArrow" src="app/style/img/imgArrowRight.png"></button>

	<section id="contentHome" class="flexContainer">
    <section id="mainAboutUs">
			<section id="imgTop">
				<img src="app/style/img/donation.png" class="imgTop">
			</section>
			<section id="contentTop">
				<h1> Solaria </h1>
				<p> Sistema de doações e voluntariado para serviços de acolhimento institucional</p>
			</section>
			<section id="scrollAboutUs"><a href="#aboutUsArea"><p>Ler mais</p><i class="fa-solid fa-arrow-down arrowDown" style="color: #ffffff;"></i></a></section>
		</section>
    <section id="aboutUsArea">
      <section id="video">
        <iframe
            src="https://www.youtube.com/embed/xXOJ_5PZv0k?autoplay=1&rel=0"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
            class="video"
        ></iframe>
      </section>
      <section id="brand">
          <img src="app/style/img/Brand.png">
          <section id="description">
            <h2>Solaria</h2>
            <p>Tem o intuito de aumentar a visibilidade de lares de acolhimento institucional, por meio da interação direta e facilitada entre o doador e a instituição.</p>
            <section id="gifts">
            <p>Seu nome significa <span>Mudança vital</span>, o qual a palavra <span>sol</span> é atribuida aos significados como luz, amor, <span>vitalidade</span> e juventude. E a palavra <span>aria</span> remete ao ar, representando a liberdade, a respiração e a <span> mudança</span>.
            <p>Solaria é uma personificação baseada na deusa egípcia da maternidade Isís. O fundo rosa representa o sol, demostrando o amor que leva consigo, seus cabelos azuis trazem tranquilidade e confiança, sua pele alaranjada, transmite a sensação de calor e conforto, e seus olhos verdes espalham a vida e lembram a família, deste modo representando uma mãe calorosa.</p>
            <section id="order">
              <h3>Faça parte disso. Doe hoje com a Solaria!</h3>
              <p>Seja parte desta jornada, onde a genesosidade encontra propósito e cada doação se transforma em um novo amanhecer para as crianças e jovens em instituições de acolhimento. Doe hoje para fazer parte da construção de um futuro mais brilhante e significativo. Sua doação faz a diferença!</p> 
              <a href="/instituicoes">
					      <button type="button" id="buttonTop" class="btn btn-info btnHome">
						      Doar
					      </button>
				      </a>  
            </section>
          </section>
      </section>
    </section>
  </section>

  <footer id="footerArea">
		<?php
			include_once("footer.php");
		?>
	</footer>

  <script src="../app/javaScript/blogArrow.js"></script>

</body>
</html>