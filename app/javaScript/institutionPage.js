$(document).ready(function () {
    console.log('oiiiiiiiiiiiii');
    
    $.ajax({
        url: 'http://localhost:8000/app/controllers/listInstitutions.php',
        method: 'POST',
        data: { status: 1 },
        dataType: 'json'
    }).done(function (result) {
        var html ='';

        result.forEach(function (institution, index) {

            html += '<section class="institutionBox current-item" id="card-institution' + result[index].id+ '">';
            html += '<section class="intitution-images-area">';
            html += '<img src="' + result[index].photoPath+ '" alt="img insti ' +result[index].id + '">';
            html += '</section>';
            html += '<section class="institutionInfo">';
            html += '<a href="#" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>';
            html += '<a href="/perfilInstituicoes" class="donateButton"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></a>';
            html += '<h2 class="institution-Name">' + result[index].userName + '</h2>';
            html += '<p><u>Necessita:</u> ' + result[index].needs.join(', ') + '.</p>';
            html += '</section>';
            html += '<section class="cardFooter">';
            html += '<i class="fa-solid fa-location-crosshairs fa-lg locatioIcon" style="color: #ffffff;"></i>';
            html += '<p>' + result[index].city +'-'+ result[index].state + '</p>';
            html += '</section>';
            html += '</section>';
        });

        
        $('#gallery').html(html);
    });
       
    });
