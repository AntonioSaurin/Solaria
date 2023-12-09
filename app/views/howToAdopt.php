<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/style/css/howToAdopt.css">
    <title>Como Adotar</title>
</head>
<body>
    <header id="header">
		<?php
			include('header.php');
		?>
	</header>

    <button onclick="topFunction()" id="goUpButton" title="Voltar ao topo"> <img class="goUpArrow" src="app/style/img/imgArrowRight.png"></button>

	<section id="contentAdopt" class="flexContainer">
		<section id="mainAdopt">
            <section id="imgTop">
                <img src="app/style/img/headerHowToAdopt.png" alt="Mãe com criança" title="Header Adoção" class="imgTop">
            </section>
            <section id="contentTop">
                <h1>Como Adotar?</h1>
                <p>Dê a uma criança o amor, a segurança e o carinho que ela merece!</p>
                <a href="https://www.cnj.jus.br/programas-e-acoes/adocao/passo-a-passo-da-adocao/">
					<button type="button" id="buttonTop" class="btn btn-info btnAdopt">
						Saiba mais
						<img class="arrow" src="app/style/img/imgArrowRight.png">
					</button>
				</a> 
            </section>
            <section id="scrollAdopt"><a href="#howToAdoptArea"><p>Ler mais</p><i class="fa-solid fa-arrow-down arrowDown" style="color: #ffffff;"></i></a></section>
        </section>
        <section id="howToADopt">
            <h2>Qual o passo a passo para adotar uma criança ou um adolescente?</h2>
            


        </section>
            <!-- <section class="containerOrganizer">
                <p>A adoção é o procedimento legal pelo qual alguém assume como filho, de modo definitivo e irrevogável, uma criança ou adolescente nascido de outra pessoa. Ela é regulamentada pelo Estatuto da Criança e do Adolescente (ECA).
                No Brasil, não há custo algum para adotar. Podem ser adotados crianças ou adolescentes com, no máximo, 18 anos de idade à data do pedido de adoção e que estejam com situação jurídica definida, ou seja, pais biológicos desconhecidos, falecidos ou quando os pais foram destituídos do poder familiar e esgotadas todas as alternativas de permanência na família de origem.Qualquer pessoa maior de 18 (dezoito) anos pode adotar, independentemente do estado civil, orientação sexual ou classe social. O pretendente deverá apresentar uma diferença mínima de 16 (dezesseis) anos em relação à idade da criança ou adolescente que for adotado.
                O interessado em adotar deverá procurar a Vara de Infância e da Juventude do município/região em que reside, onde serão fornecidas todas as orientações necessárias.</p><hr>
                <section class="containerInfo" id="stepOne">
                    <h2>Passo a Passo</h2>
                    <h3>1. Eu posso adotar?</h3>
                        <p>Qualquer pessoa maior de 18 anos de idade pode adotar, independentemente de sexo, estado civil ou classe social.</p>
            
                        <h3>2. Por onde começo?</h3>
                        <p>O primeiro passo é ir pessoalmente à Vara da Infância e da Juventude da sua região. Lá, você será orientado quanto à documentação que deve apresentar para dar entrada ao seu pedido. <a href="#" class="link">Documentos</a>
                        <p>Agora também é possível fazer um pré-cadastro, antes de comparecer à Vara da Infância. Após o preenchimento do pré cadastro e munido do número de protocolo e dos documentos necessários, procure a Vara da Infância e Juventude da sua região. <a href="https://www.cnj.jus.br/sna/" class="link">Fazer o pré-cadastro</a></p>
        
                        <h3>3. Depois de entregar a documentação, o que acontece?</h3>
                        <P>Apresentada toda a documentação, seu pedido será registrado e receberá uma numeração. A partir daí, você precisa aguardar o cartório ou setor técnico entrar em contato para fornecer o número de seu processo de habilitação e agendar data para seu comparecimento à Vara para uma entrevista inicial</p>
                   
                        <h3>4. O que acontece na entrevista?</h3>
                        <p>A entrevista dará início as avaliações técnicas (estudo social e psicológico) e as orientações quanto ao curso preparatório obrigatório.</p>
                   
                        <h3>5. Como funciona o curso preparatório obrigatório?</h3>
                        <p>Esse curso objetiva esclarecer dúvidas sobre a adoção, a expectativa que ela pode gerar, entre outros assuntos. Vale lembrar que algumas Comarcas optam por realizar esse curso antes mesmo da apresentação da documentação, para que o pretendente possa amadurecer a ideia da adoção e certificar-se de que, de fato, deseja adotar. É possível que as Comarcas encaminhem o pretendente para realizar o curso em outra localidade, podendo, inclusive, haver mais de um encontro.<p>
                   
                        <h3>6. O que acontece após?</h3>
                        <p>Concluídos os estudos, seu processo será remetido ao Ministério Público para apreciação e, depois, para decisão do juiz, que irá proferir a sentença.<p>
                    
                        <h3>7. Com a sentença favorável do juiz, já estarei apto a adotar?</h3>
                        <p>Com essa sentença favorável, parabéns! Você já estará apto para adotar, em todo o território nacional.<p>
                   
                        <h3>8. Como será efetuada a busca para que eu possa adotar?</h3>
                        <p>Não se preocupe como a criança/adolescente irá chegar até você, pois o SNA (Sistema Nacional de Adoção e Acolhimento) cruzará as informações lá inseridas (perfil dos pretendentes com o perfil das crianças) e a Vara da Infância e Juventude entrará em contato para informar sobre a possibilidade de aproximação com o adotando para iniciar o estágio de convivência.<p>
                    
                        <h3>9. O que é estágio de convivência?</h3>
                        <p>O Estágio de Convivência é o período em que o pretendente assume a guarda provisória da criança/adolescente e finalmente pode levá-lo(a) para casa! Mas vale frisar que se trata de guarda provisória. O Estágio de Convivência terá duração até a decisão judicial (sentença) de adoção definitiva. Esse período é variável, sendo definido caso a caso pelo juiz.<p>
                   
                        <h3>10. Quando acaba o estágio de convivência, o que acontece?</h3>
                        <p>Decorrido o período do estágio de convivência, o setor técnico apresentará relatório conclusivo que será apreciado pelo Ministério Público e irá ao juiz para a decisão final (sentença de adoção). Com a sentença de adoção proferida, após decorrer o prazo para o recurso, você já poderá providenciar a nova documentação e registrar seu filho. Lembrando que toda a documentação e o trâmite da adoção serão gratuitos. Oficialmente, uma família!<p>
                </section> -->
    </section>
  
    <footer id="footerArea">
        <?php
            include_once("footer.php");
        ?>
	</footer>

    <script src="../app/javaScript/blogArrow.js"></script>
</body>
</html>