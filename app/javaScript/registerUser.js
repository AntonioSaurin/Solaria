$('document').ready(function () {
    $('#register').submit(function (e) {
        e.preventDefault();

        var data = {
            name: $('#name').val(),
            birthDate: $('#birthDate').val(),
            CPF: $('#CPF').val(),
            phone: $('#phone').val(),
            email: $('#email').val(),
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
            url: 'http://localhost:8000/app/controllers/createUser.php',
            method: 'POST',
            data: data,
            dataType: 'json'
        }).done(function (result) {
            console.log(result);

            if (result == true) {
                window.location.href = "/";
            } else if (result == false) {
                $('#name').val('');
                $('#birthDate').val('');
                $('#CPF').val('');
                $('#phone').val('');
                $('#email').val('');
                $('#password').val('');
                $('#conPassword').val('');
                $('#CEP').val('');
                $('#state').val('');
                $('#city').val('');
                $('#district').val('');
                $('#number').val('');
                $('#street').val('');

                alert('Não foi possivel efetuar o cadastro!');
            }
        })
    })
    $('#email').blur('input', function () {
        var validate = validateEmail($('#email').val())
        if(!validate) {
            console.log('invalid');
            return;
        }

        var data = {
            action: 'email',
            email: $('#email').val()
        }

        $.ajax({
            url: 'http://localhost:8000/app/controllers/createUser.php',
            method: 'POST',
            data: data,
            dataType: 'json'
        }).done(function (result) {
            console.log(result);
        })

    })
});

function validateEmail(email) {
    var re = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    return re.test(email);
}
