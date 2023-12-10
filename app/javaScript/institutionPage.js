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
            $('#gallery').prepend('<section class="institutionBox current-item" id="card-institution' + result[i].id+ '"> <section class="intitution-images-area"> <img src="' + result[i].photoPath+ '" alt="img insti ' +result[i].id + '"> </section> <section class="institutionInfo"> <a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a> <a href="/perfilInstituicoes" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a> <h2 class="institution-Name">' + result[i].userName + '</h2> <p><u>Necessita:</u> ' + result[i].needs + '.</p> </section> <section class="cardFooter"> <i class="fa-solid fa-location-crosshairs fa-lg locatioIcon" style="color: #ffffff;"></i> <p>' + result[i].city +' - '+ result[i].state + '</p> </section> </section>');
        }
    });
       
    });
