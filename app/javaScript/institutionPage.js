$('document').ready(function () {

    $('#btn-OpenAll').click(function (e) {

        console.log('oi');
        $.ajax({
            url: 'http://localhost:8000/app/controllers/listInstitutions.php',
            method: 'POST',
            data: { status: 1 },
            dataType: 'json'
        }).done(function (result) {
            console.log(result);
        })
    });
})
