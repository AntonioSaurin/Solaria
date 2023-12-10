<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app/style/css/institutionPage.css" rel="stylesheet">
    <!-- <script src="app/javaScript/fontAwesome.js"></script> -->
    <script src="app/javaScript/jQuery.js"></script>
    <script src="app\javaScript\institutionPage.js"></script>
    <title>Solaria/Instituições</title> 
</head>

<body>
    <header id="header">
        <?php
        include_once("header.php");
        ?>
    </header>
    <!--inicio area de coteudo-->
   

    <section id="content">
        <section id="top_main">
            <section id="img_top">
                <img src="../app/style/img/bgInstituitio2.jpg" alt="">
            </section>
           
            <section id="content-top">
                
                <H1>Deseja doar?</H1>
                <p>Veja a baixo as instituições que mais necessitam de auxilio, pesquise e filtre com base em suas necessidades</p>
            </section>
            <section id="scroll-institution"><a href="#institutionArea"><p>Ver as instituições<i class="fa-solid fa-arrow-down arrow-down" style="color: #ffffff;"></i></p></a></section>
        </section>
        <!--inicio area de pesquisa-->
        <section class="SearchArea">
            <section class="search-box">
                <section class="search" id="search-bar">
                    <input name="search-input" type="text" class="search-input" id="search-text" placeholder="Pesquisar...">
                    <a href="" id="search-btn">
                        <img class="filter" id="filter-icon"src="../app/style/img/filter.png" alt="icone filtro">
                        <img class="loupe" id="loupe"src="../app/style/img/loupe.png" alt="lupa">
                    </a>
                </section>
                
           </section>
           <img class="teste" src="../app/style/img/bannerAbout.png" alt="" width="200px" >
        </section>

        <div id="testeresult">

        </div>

        <!--Inicio cards intituicoes-->
        <section class="institutionArea" id="institutionArea">
            <section class="gallery-wrapper">
                <button type="button" class="arrow right control" id="right-arrow"><img src="app/style/img/right-arrow.png" alt="right-arrow" width="50px"></button>
                <button type="button" class="arrow left control" id="left-arrow"> <img  src="app/style/img/left-arrow.png" alt="left-arrow" width="50px"></button>
                <section class="gallery" id="gallery">

                    <section class="institutionBox current-item" id="card-institution1">
                            <section class="intitution-images-area">
                                <img src="app/style/img/imagem_slide2.jpg" alt="img insti 1">
                            </section>
                            <section class="institutionInfo">
                                <a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
                                <a href="/perfilInstituicoes" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>
                                <h2 class="institution-Name">Instituição Adotar</h2>
                                <p><u>Necessita:</u> Brinquedos, Roupas e Dinheiro.</p>
                            </section>
                    </section>

                </section>    
            </section>    
        </section>
        <!--final cards intituicoes-->
        <button onclick="topFunction()" id="goUpButton" title="Voltar ao topo"> <img class="goUpArrow" src="app/style/img/imgArrowRight.png"></button>
	    <script src="../app/javaScript/blogArrow.js"></script>

        <footer id="footerArea">
		    <?php
			    include_once("footer.php");
		    ?>
	    </footer>

    </section>
    <!--final area de conteudo-->

    <script>
        /*script mover slider */
        const controls = document.querySelectorAll('.control');
        let currentItem = 0;
        const items = document.querySelectorAll('.institutionBox');
        const maxItems = items.length;
        controls.forEach(control =>{
            control.addEventListener('click', ()=>{
                const isLeft = control.classList.contains('left');
                
                if(isLeft){
                    currentItem -= 1;
                }else{
                    currentItem += 1;
                }
                if(currentItem >= maxItems){
                    currentItem = 0;
                }
                if(currentItem<0){
                    currentItem = maxItems -1;
                }
                items.forEach(items => items.classList.remove('current-item'));
                
                items[currentItem].scrollIntoView({
                    left:"scrollAmount", behavior:"smooth",
                })
                items[currentItem].classList.add("currentItem");
               
            });
        });/*final slider*/

        const filterElement = document.querySelector('#search-text');
        const cards = document.querySelectorAll('.institutionBox');
        filterElement.addEventListener('input', filterCards);

        function filterCards(){
            if(filterElement.textContent =! ''){
                for(let card of cards){
                    let title = card.querySelector('h2');
                    title = title.textContent.toLowerCase();
                    let filterText = filterElement.value.toLowerCase();
                    if(!title.includes(filterText)){
                        card.style.display = "none";
                    }
                    else{
                        card.style.display ="flex";
                    }
                    
                }
                
            }else{
                for(let card of cards){
                    card.style.display="flex";
                }
            }
        }

        



        function toggle() {
            const openAll = document.querySelector('#btn-OpenAll');
            const hideAll = document.querySelector('#btn-hideAll');
            openAll.classList.toggle('hide');
            hideAll.classList.toggle('hide');
        }

        function showAll(pageId) {
            const showAll = document.getElementById(pageId);
            showAll.classList.add('mostrar');
        }
        const btnOpenAll = document.querySelector('.btn-OpenAll');
        btnOpenAll.addEventListener('click', () => showAll('show-All-Institution'));

        function hideAll(pageId) {
            const hideAll = document.getElementById(pageId);
            hideAll.classList.remove('mostrar');
        }
        const btnHideAll = document.querySelector('.btn-hideAll');
        btnHideAll.addEventListener('click', () => hideAll('show-All-Institution'));


        
    </script>
</body>

</html>