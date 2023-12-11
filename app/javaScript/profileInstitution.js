$('document').ready(function () {
    const params = new URLSearchParams(window.location.search);
    var id=params.get('user');
    $.ajax({
        url: 'http://localhost:8000/app/controllers/profileInstitution.php',
        method: 'POST',
        data: { id: id},
        dataType: 'json'
    }).done(function (result) {
        console.log(result);
    });
})