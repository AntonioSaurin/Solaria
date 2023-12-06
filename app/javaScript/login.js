$('document').ready(function () {
    $('#login').submit(function (e) {
        e.preventDefault();

        var data = {
            email: $('#email').val(),
            password: $('#password').val()
        };
console.log(data);
        $.ajax({
            url: 'localhost:6969/app/controllers/login.php',
            method: 'POST',
            data: data,
            dataType: 'json'
        }).done(function (result) {
            console.log(result);

            if(result == true){
                window.location.href = "/";
            }else if(result == false) {
                $('#email').val('');
                $('#password').val('');

                alert('Não foi possivel efetuar o login!');
            }
        })
    })
});