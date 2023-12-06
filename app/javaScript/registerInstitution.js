$('document').ready(function () {
    $('#register').submit(function (e) {
        e.preventDefault();

        var data = {
            name: $('#name').val(),
            director: $('#director').val(),
            directorCPF: $('#directorCPF').val(),
            CNPJ: $('#CNPJ').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            password: $('#password').val(),
            conPassword: $('#conPassword').val(),
            CEP: $('#CEP').val(),
            state: $('#state').val(),
            city: $('#city').val(),
            district: $('#district').val(),
            number: $('#number').val(),
            street: $('#street').val(),
        };

        $.ajax({
            url: 'http://localhost:6969/app/controllers/createInstitution.php',
            method: 'POST',
            data: data,
            dataType: 'json'
        }).done(function (result) {
            console.log(result);

            if (result == true) {
                window.location.href = "/";
            } else if (result == false) {
                $('#name').val();
                $('#director').val();
                $('#directorCPF').val();
                $('#CNPJ').val();
                $('#email').val();
                $('#phone').val();
                $('#password').val();
                $('#conPassword').val();
                $('#CEP').val();
                $('#state').val();
                $('#city').val();
                $('#district').val();
                $('#number').val();
                $('#street').val();

                alert('Não foi possivel efetuar o cadastro!');
            }
        })
    })
});