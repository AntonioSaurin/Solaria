$(document).ready(function () {
    $('#usersManage').click(function () {
        $('#modalUsers').css('display', 'flex');

    })

    $('#institutionManage').click(function () {
        $('#modalInstitutions').css('display', 'flex')

        console.log(1);
        $.ajax({
            url: 'http://localhost:8000/app/controllers/listInstitutions.php',
            method: 'POST',
            dataType: 'json'
        }).done(function (result) {
            console.log(result);
           for (var i = 0; i < result.length; i++){
            $('.modalUsersContent').prepend('<section class="cardUser"> <section class="infoUser"> <img class="imgCardUser" src="app/style/img/imgUsers.png"> <h5 class="nameCardUser">'+ result[i].userName +'</h5> </section> <section class="infoUser"> <a href="#"> <img class="imgControlUser" src="app/style/img/imgAccept.png"></a> <a href="#"> <img class="imgControlUser" src="app/style/img/imgDecline.png"> </a> </section> </section>')
           }
        })
    })

    $('#institutionApprove').click(function () {
        $('#modalApprove').css('display', 'flex');

        console.log(1);
        $.ajax({
            url: 'http://localhost:8000/app/controllers/approveInstitution.php',
            method: 'POST',
            dataType: 'json'
        }).done(function (result) {
            console.log(result);
           for (var i = 0; i < result.length; i++){
            $('.modalUsersContent').prepend('<section class="cardUser"> <section class="infoUser"> <img class="imgCardUser" src="app/style/img/imgUsers.png"> <h5 class="nameCardUser">'+ result[i].userName +'</h5> </section> <section class="infoUser"> <a href="#"> <img class="imgControlUser" src="app/style/img/imgAccept.png"></a> <a href="#"> <img class="imgControlUser" src="app/style/img/imgDecline.png"> </a> </section> </section>')
           }
        })
    })

    $('.btnExitIcon').click(function () {
        $('.cardUser').remove();
        $('.modal-container').css('display', 'none')

    })
})

// document.getElementById('openModalButton').addEventListener('click', function() {
//     document.getElementById('modal').style.display = 'block';
// });

// document.getElementById('closeModal').addEventListener('click', function() {
//     document.getElementById('modal').style.display = 'none';
// });

// document.getElementById('closeConfirmationModal').addEventListener('click', function() {
//     document.getElementById('confirmationModal').style.display = 'none';
// });

// document.querySelector('.make-admin').addEventListener('click', function() {
//     document.getElementById('confirmationModal').style.display = 'block';
//     // Lógica para tornar admin
// });

// document.querySelector('.ban-user').addEventListener('click', function() {
//     document.getElementById('confirmationModal').style.display = 'block';
//     // Lógica para banir usuário
// });

// document.getElementById('confirmAction').addEventListener('click', function() {
//     // Lógica para confirmar a ação
//     document.getElementById('confirmationModal').style.display = 'none';
// });