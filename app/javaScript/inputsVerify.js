var nome = false;
var cnpj = false;
var phone = false;
var email = false;
var password = false;
var conPassword = false;
var director = false;
var directorCPF = false;

var nameError = document.getElementById("name-error");
var directorError = document.getElementById("director-error");
var directorCPFError = document.getElementById("directorCPF-error");
var CNPJError = document.getElementById("CNPJ-error");
var emailError = document.getElementById("email-error");
var phoneError = document.getElementById("phone-error");


var nextError = document.getElementsByClassName("nextButton");

$(document).ready(function () {
    $('#CNPJ').blur('input', function () {
        lCnpj = $(this).val();

        lCnpj = lCnpj.replace(/[^\d]+/g, '');

        if (lCnpj == '') {
            $(this).css("border-color", "#ff0000");

            cnpj = false;
            return false;
        }

        if (lCnpj.length != 14) {
            $(this).css("border-color", "#ff0000");

            cnpj = false;
            return false;
        }
        // Elimina lCnpjs invalidos conhecidos
        if (lCnpj == "00000000000000" ||
            lCnpj == "11111111111111" ||
            lCnpj == "22222222222222" ||
            lCnpj == "33333333333333" ||
            lCnpj == "44444444444444" ||
            lCnpj == "55555555555555" ||
            lCnpj == "66666666666666" ||
            lCnpj == "77777777777777" ||
            lCnpj == "88888888888888" ||
            lCnpj == "99999999999999") {

            $(this).css("border-color", "#ff0000");

            cnpj = false;
            return false;
        }
        // Valida DVs
        tamanho = lCnpj.length - 2
        numeros = lCnpj.substring(0, tamanho);
        digitos = lCnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0)) {
            $(this).css("border-color", "#ff0000");

            cnpj = false;
            return false;
        }

        tamanho = tamanho + 1;
        numeros = lCnpj.substring(0, tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1)) {
            $(this).css("border-color", "#ff0000");

            cnpj = false;
            return false;
        }

        cnpj = true;
        $(this).css("border-color", "#ccc");
        return true;
    });

    $('#name').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            nome = false;
            return false;
        }

        nome = true;
        $(this).css("border-color", "#ccc");
    })



    $('#phone').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            phone = false;
            return false;
        }

        phone = true;
        $(this).css("border-color", "#ccc");
    })

    $('#email').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            email = false;
            return false;
        }

        email = true;
        $(this).css("border-color", "#ccc");
    })

    $('#director').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            director = false;
            return false;
        }

        director = true;
        $(this).css("border-color", "#ccc");
    })

    $('#directorCPF').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            directorCPF = false;
            return false;
        }

        directorCPF = true;
        $(this).css("border-color", "#ccc");
    })
});

function verifyEmptyInfos(name, cnpj, phone, email, director, directorCPF) {
    if (name == true && cnpj == true && phone == true && email == true && director == true && directorCPF == true) return true
}

var cep = false;
var state = false;
var city = false;
var district = false;
var number = false;
var street = false;

$(document).ready(function () {
    $('#CEP').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            cep = false;
            return false;
        }

        cep = true;
        $(this).css("border-color", "#ccc");
    })

    $('#state').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            state = false;
            return false;
        }

        state = true;
        $(this).css("border-color", "#ccc");
    })

    $('#city').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            city = false;
            return false;
        }

        city = true;
        $(this).css("border-color", "#ccc");
    })

    $('#district').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            district = false;
            return false;
        }

        district = true;
        $(this).css("border-color", "#ccc");
    })

    $('#number').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            number = false;
            return false;
        }

        number = true;
        $(this).css("border-color", "#ccc");
    })

    $('#street').blur('input', function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#ff0000");

            street = false;
            return false;
        }

        street = true;
        $(this).css("border-color", "#ccc");
    })
})

function verifyEmptyAddres(cep, state, city, district, street, number) {
    if (cep == true && state == true && city == true && district == true && street == true && number == true) return true
}


$('#password').blur('input', function () {
    if ($(this).val() == '') {
        $(this).css("border-color", "#ff0000");

        password = false;
        return false;
    }

    password = true;
    $(this).css("border-color", "#ccc");
})

$('#conPassword').blur('input', function () {
    if ($(this).val() == '') {
        $(this).css("border-color", "#ff0000");

        conPassword = false;
        return false;
    }
    if ($(this).val() != $('#password').val()) {
        $(this).css("border-color", "#ff0000");

        conPassword = false;
        return false;
    }

    conPassword = true;
    $(this).css("border-color", "#ccc");
})

function validationNameInstituition() {
    var name = document.getElementById('name').value;

    if (name.length == 0) {
        nameError.innerHTML = "Nome é necessário";
        return false;
    }

    if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
        nameError.innerHTML = "Inválido";
        return false;
    }
    nameError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validationDirector() {
    var director = document.getElementById('director').value;

    if (director.length == 0) {
        directorError.innerHTML = "Name necesário";
        return false;
    }

    if (!director.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
        directorError.innerHTML = "Inválido";
        return false;
    }
    directorError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validationDirectorCPF() {
    var directorCPF = document.getElementById('directorCPF').value;

    if (directorCPF.length == 0) {
        directorCPFError.innerHTML = "CPF é necessário";
        return false;
    }

    if (!directorCPF.match(/^\d{3}\.\d{3}\.\d{3}-\d{2}$/)) {
        directorCPFError.innerHTML = "Inválido";
        return false;
    }
    directorCPFError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validationCNPJ() {
    var CNPJ = document.getElementById('CNPJ').value;

    if (CNPJ.length == 0) {
        CNPJError.innerHTML = "CNPJ é necessário";
        return false;
    }

    if (!CNPJ.match(/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/)) {
        CNPJError.innerHTML = "Inválido";
        return false;
    }
    CNPJError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validationEmail() {
    var email = document.getElementById('email').value;

    if (email.length == 0) {
        emailError.innerHTML = "email necessário";
        return false;
    }

    if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[.][a-z]{2,4}$/)) {
        emailError.innerHTML = "Email inválido";
        return false;
    }
    emailError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validationPhone() {
    var phone = document.getElementById('phone').value;

    if (phone.length == 0) {
        phoneError.innerHTML = "Telefone necessário";
        return false;
    }

    // if (!phone.match(/^(\(\d{2}\))?(\d{10})$/)) {
    //     phoneError.innerHTML = "Inválido";
    //     return false;
    // }
    phoneError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}