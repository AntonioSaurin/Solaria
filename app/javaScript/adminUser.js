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
           for (var i = 0; i < result.length; i++){
            $('.modalUsersContent').prepend('<section class="cardUser"> <section class="infoUser"> <img class="imgCardUser" src="app/style/img/imgUsers.png"> <h5 class="nameCardUser">'+ result[i].userName +'</h5> </section> <section class="infoUser"> <a href="#"> <img class="imgControlUser" src="app/style/img/imgRemove.png"> </a> </section> </section>')
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
           for (var i = 0; i < result.length; i++){
            $('.modalUsersContent').prepend('<section class="cardUser"> <section class="infoUser"> <img class="imgCardUser" src="app/style/img/imgUsers.png"> <h5 class="nameCardUser">'+ result[i].userName +'</h5> </section> <section class="infoUser"> <a href="#"> <img class="imgControlUser" src="app/style/img/imgRemove.png"> </a> </section> </section>')
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
                $('.modalUsersContent').prepend('<section class="cardUser" id="card' + result[i].ID + '"> <section class="infoUser"> <img class="imgCardUser" src="app/style/img/imgUsers.png"> <h5 class="nameCardUser">' + result[i].userName + '</h5> </section> <section class="infoUser"> <a href="#" class="accept"> <img class="imgControlUser" src="app/style/img/imgAccept.png" data-id="' + result[i].ID + '"></a> <a href="#"> <img class="imgControlUser" src="app/style/img/imgDecline.png"> </a> </section> </section>');
            }

            $('.accept').off('click').on('click', function () {
                console.log(2);
                var accept = 'approved';
                var institutionId = $(this).data('id');
                var removeCard = "#card" + institutionId;
    
                $.ajax({
                    url: 'http://localhost:8000/app/controllers/acceptInstitution.php',
                    method: 'POST',
                    data: { state: accept, id: institutionId }
                }).done(function (result) {
                    $(removeCard).remove();
                });
            });
        });
    });
    
    


    $('.btnExitIcon').click(function () {
        $('.cardUser').remove();
        $('.modal-container').css('display', 'none')

    })
})