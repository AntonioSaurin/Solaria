var nome = false;
var cnpj = false;
var phone = false;
var email = false;
var password = false;
var conPassword = false;

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

        conPassword = true;
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
});

function verifyEmpty(name, cnpj, phone, email, password, conPassword) {
    if(name == true && cnpj == true && phone == true && email == true && password == true && conPassword == true) return true
}