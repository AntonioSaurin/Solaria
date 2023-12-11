$('document').ready(function () {
    const params = new URLSearchParams(window.location.search);
    var id=params.get('user');
    $.ajax({
        url: 'http://localhost:8000/app/controllers/profileInstitution.php',
        method: 'POST',
        data: { id: id},
        dataType: 'json'
    }).done(function (result) {
        $('h2').prepend(result.userName);
        $('.descUser').prepend('CNPJ: ' +result.CNPJ+ '<BR>Telefone: (' +result.DDD + ')' + result.phoneNumber+ '<BR>Cidade: ' +result.city+', ' + result.state);
        $('.needsUser').prepend('<strong>Necessidades:</strong> ' + result.needs);
        $('.donateModal').prepend('Doar para: ' + result.userName);


       
       
      


        console.log(result);
    });
})