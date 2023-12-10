$(document).ready(function () {
    console.log('oiiiiiiiiiiiii');
    
    $.ajax({
        url: 'http://localhost:8000/app/controllers/listInstitutions.php',
        method: 'POST',
        data: { status: 1 },
        dataType: 'json'
    }).done(function (result) {
        console.log('oi');

        for (var i = 0; i < result.length; i++){
            $('#gallery').prepend('<section class="institutionBox current-item" id="card-institution' + result[i].ID+ '"> <section class="intitution-images-area"><img src="app/style/img/imagem_slide2.jpg" alt="img insti 1"> </section> <section class="institutionInfo"> <a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a> <a href="/perfilInstituicoes?user='  + result[i].ID+ '" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a> <h2 class="institution-Name">' + result[i].userName + '</h2> <p><u>Necessita:</u> ' + result[i].needs + '.</p> </section> <section class="cardFooter"> <i class="fa-solid fa-location-crosshairs fa-lg locatioIcon" style="color: #ffffff;"></i> <p>' + result[i].city +' - '+ result[i].state + '</p> </section> </section>');
        }
    });
       
    });
