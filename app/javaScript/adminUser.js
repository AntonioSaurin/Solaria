$(document).ready(function () {
    $('#usersManage').click(function () {
        $('#modalUsers').css('display', 'flex');
    })

    $('#institutionManage').click(function () {
        $('#modalInstitutions').css('display', 'flex')
    })

    $('#institutionApprove').click(function () {
        $('#modalApprove').css('display', 'flex');

        console.log(1);
        $.ajax({
            url: 'http://localhost:6969/app/controllers/approveInstitution.php',
            method: 'POST',
            dataType: 'json'
        }).done(function (result) {
            console.log(result);
        })
    })

    $('.btnExitIcon').click(function () {
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