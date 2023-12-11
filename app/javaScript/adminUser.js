$(document).ready(function () {
    var institutionIdApproved;
    var donatorsId;
    var idUser;
    var institution = '';

    $('#usersManage').click(function () {
        $('#modalUsers').css('display', 'flex');

        $.ajax({
            url: 'http://localhost:8000/app/controllers/listDonators.php',
            method: 'POST',
            dataType: 'json'
        }).done(function (result) {
           for (var i = 0; i < result.length; i++){
            $('.modalUsersContent').prepend('<section class="cardUser"> <section class="infoUser"> <section class="infoTop"><img class="imgCardUser" src="app/style/img/imgUsers.png"><br> <input type="text" id="user'+result[i].ID+'" style="display:none" value="' + result[i].ID + '"> <h5 class="nameCardUser">'+ result[i].userName +'</h5> </section> <br> <section class="infoBottom"> <p><b> Email </b>'+ result[i].userEmail +' </p>  <p><b> CPF </b> '+ result[i].CPF +'</p>  <p><b> Tel: </b> ('+ result[i].DDD +') '+ result[i].phoneNumber +'</p></section> <section class="infoUser"> <a href="#"> <img class="imgControlUser deleteUser"  data-id="' + result[i].ID +'" src="app/style/img/imgRemove.png"> </a> </section> </section> </section>')
            donatorsId = $('#user'+result[i].ID).val();
           }
        })
    })

    $('#institutionManage').click(function () {
        $('#modalInstitutions').css('display', 'flex')

        $.ajax({
            url: 'http://localhost:8000/app/controllers/approvedInstitution.php',
            method: 'POST',
            dataType: 'json'
        }).done(function (result) {
           for (var i = 0; i < result.length; i++){
            $('.modalUsersContent').prepend('<section class="cardUser"> <section class="infoUser"> <section class="infoTop"><img class="imgCardUser" src="app/style/img/imgUsers.png"><br><input type="text" id="institution'+result[i].ID+'" style="display:none" value="' + result[i].ID + '"> <h5 class="nameCardUser">'+ result[i].userName +'</h5> </section> <br> <section class="infoBottom">  <p><b> Email </b> '+ result[i].userEmail +' </p>  <p><b> CNPJ </b>'+ result[i].CNPJ +'</p>  <p><b> Diretor </b> '+ result[i].director +'</p>  <p><b> CPF </b> '+ result[i].directorCPF +'</p>  <p><b> Tel </b> ('+ result[i].DDD +') '+ result[i].phoneNumber +'</p></section> <section class="infoUser"> <a href="#"> <img class="imgControlUser deleteUser" data-id="' + result[i].ID +'" src="app/style/img/imgRemove.png"> </a> </section> </section>  </section>')
            institutionIdApproved = $('#institution'+result[i].ID).val();
           }
        })
    })

    $('#institutionApprove').click(function () {
        $('#modalApprove').css('display', 'flex');
    
        $.ajax({
            url: 'http://localhost:8000/app/controllers/waitingInstitution.php',
            method: 'POST',
            dataType: 'json'
        }).done(function (result) {
    
            for (var i = 0; i < result.length; i++) {
                $('.modalUsersContent').prepend('<section class="cardUser"> <section class="infoUser"> <section class="infoTop"><img class="imgCardUser" src="app/style/img/imgUsers.png"><br> <h5 class="nameCardUser">'+ result[i].userName +'</h5> </section> <br> <section class="infoBottom">  <p><b> Email </b> '+ result[i].userEmail +' </p>  <p><b> CNPJ </b>'+ result[i].CNPJ +'</p>  <p><b> Diretor </b> '+ result[i].director +'</p>  <p><b> CPF </b> '+ result[i].directorCPF +'</p>  <p><b> Tel </b> ('+ result[i].DDD +') '+ result[i].phoneNumber +'</p></section> <section class="infoUser"> <a href="#" class="accept"> <img class="imgControlUser" src="app/style/img/imgAccept.png" data-id="' + result[i].ID + '"></a><a href="#" class="deleteUser"> <img class="imgControlUser" src="app/style/img/imgDecline.png"> </a> </section> </section> </section>');
            }

            $('.accept').off('click').on('click', function () {
                var accept = 'approved';
                var institutionId = $(this).find('img').data('id');
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

    $(document).on('click', '.deleteUser', function () {
            $('.modalUsersContent').prepend('<section id="modalDelete" class="modal-container"><section class="modal1"><section class="modalTop" id="topDelete"><i class="btnExitDelete fa-solid fa-rectangle-xmark fa-xl"></i><h4>Deseja mesmo excluir esta conta??</h4></section><section class="modalUsersContent deleteContent"><button class="btnmodal btnDeleteUser" id="Delete"> Excluir </button><button class="btnExitDelete btnmodal btnCancel">Cancelar</button></section></section></section>');

            $('#modalDelete').css('display', 'flex');

        $('.btnDeleteUser').click(function (){

            if(institutionIdApproved != null){
                institution = 'true';
                idUser = institutionIdApproved;
            }else if(donatorsId != null){
                institution = 'false';
                idUser = donatorsId;
            }else{
                alert('Erro!');
            }
        
            $.ajax({
                url: 'http://localhost:8000/app/controllers/deleteUser.php',
                method: 'POST',
                data: { institution: institution, idUser : idUser }
            }).done(function (result) {
            })
        })
        

        $('.btnExitDelete').click(function () {
            $('#modalDelete').remove(); 
        });
    })
    

    $('.btnExitIcon').click(function () {
        $('.cardUser').remove();
        $('.modal-container').css('display', 'none');
    })

})