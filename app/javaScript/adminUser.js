$(document).ready(function () {
    $('#usersManage').click(function () {
        $('#modalUsers').css('display', 'flex');
        console.log(1);
        $.ajax({
            url: 'http://localhost:8000/app/controllers/listDonators.php',
            method: 'POST',
            dataType: 'json'
        }).done(function (result) {
            console.log(result);
            for (var i = 0; i < result.length; i++) {
                $('.modalUsersContent').prepend('<section class="cardUser"> <section class="infoUser"> <section class="infoTop"><img class="imgCardUser" src="app/style/img/imgUsers.png"><br> <h5 class="nameCardUser">' + result[i].userName + '</h5> </section> <br> <section class="infoBottom"> <p><b> Email </b>' + result[i].userEmail + ' </p>  <p><b> CPF </b> ' + result[i].CPF + '</p>  <p><b> Tel: </b> (' + result[i].DDD + ') ' + result[i].phoneNumber + '</p></section> <section class="infoUser"> <a href="#"> <img class="imgControlUser deleteUser" src="app/style/img/imgRemove.png"> </a> </section> </section> </section>')
            }
        })
    })

    $('#institutionManage').click(function () {
        $('#modalInstitutions').css('display', 'flex')
        console.log(1);
        $.ajax({
            url: 'http://localhost:8000/app/controllers/approvedInstitution.php',
            method: 'POST',
            dataType: 'json'
        }).done(function (result) {
            console.log(result);

            for (var i = 0; i < result.length; i++) {
                var institutionCard = '<section class="cardUser" id="card' + result[i].ID + '"> <section class="infoUser"><section class="infoTop"><img class="imgCardUser" src="app/style/img/imgUsers.png"><br> <h5 class="nameCardUser">' + result[i].userName + '</h5> </section> <br> <section class="infoBottom">  <p><b> Email </b> ' + result[i].userEmail + ' </p>  <p><b> CNPJ </b>' + result[i].CNPJ + '</p>  <p><b> Diretor </b> ' + result[i].director + '</p>  <p><b> CPF </b> ' + result[i].directorCPF + '</p>  <p><b> Tel </b> (' + result[i].DDD + ') ' + result[i].phoneNumber + '</p></section> <section class="infoUser"> <a href="#"> <img class="imgControlUser deleteUser" src="app/style/img/imgRemove.png"> </a> </section> </section>  </section>';

                $('.modalUsersContent').prepend(institutionCard);
            }
        })
    })

    $('#institutionApprove').click(function () {
        $('#modalApprove').css('display', 'flex');
        console.log(1);
        $.ajax({
            url: 'http://localhost:8000/app/controllers/waitingInstitution.php',
            method: 'POST',
            dataType: 'json'
        }).done(function (result) {
            console.log(result);

            for (var i = 0; i < result.length; i++) {
                var institutionCard = '<section class="cardUser" id="card' + result[i].ID + '"> <section class="infoUser"> <section class="infoTop"><img class="imgCardUser" src="app/style/img/imgUsers.png"><br> <h5 class="nameCardUser">' + result[i].userName + '</h5> </section> <br> <section class="infoBottom">  <p><b> Email </b> ' + result[i].userEmail + ' </p>  <p><b> CNPJ </b>' + result[i].CNPJ + '</p>  <p><b> Diretor </b> ' + result[i].director + '</p>  <p><b> CPF </b> ' + result[i].directorCPF + '</p>  <p><b> Tel </b> (' + result[i].DDD + ') ' + result[i].phoneNumber + '</p></section> <section class="infoUser"> <a href="#" class="accept"> <img class="imgControlUser" src="app/style/img/imgAccept.png" data-id="' + result[i].ID + '"></a><a href="#" class="deleteUser"> <img class="imgControlUser" src="app/style/img/imgDecline.png" data-id="' + result[i].ID + '"> </a> </section> </section> </section>';

                $('.modalUsersContent').prepend(institutionCard);
            }

            $('.accept').off('click').on('click', function () {
                console.log(2);
                var accept = 'approved';
                var institutionId = $(this).find('img').data('id');
                var removeCard = "#card" + institutionId;

                $.ajax({
                    url: 'http://localhost:8000/app/controllers/acceptInstitution.php',
                    method: 'POST',
                    data: { state: accept, id: institutionId }
                }).done(function (result) {
                    console.log(3);
                    $(removeCard).remove();
                });
            });

            $('.deleteUser').off('click').on('click', function () {
                console.log('Código de exclusão está sendo executado.');
                var institutionId = $(this).find('img').data('id');
                var removeCard = "#card" + institutionId;

                $.ajax({
                    url: 'http://localhost:8000/app/controllers/deleteUser.php',
                    method: 'POST',
                    data: { institution: true, idDelete: institutionId }
                }).done(function (result) {
                    console.log('Delete User Result:', result);
                    $(removeCard).remove();
                });
            });
        });
    });

    $('.btnExitIcon').click(function () {
        $('.cardUser').remove();
        $('.modal-container').css('display', 'none');
    });
});
