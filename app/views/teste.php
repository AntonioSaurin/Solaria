<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#cnpj').blur('input', function () {
                cnpj = $(this).val();

                cnpj = cnpj.replace(/[^\d]+/g, '');

                if (cnpj == '') {
                    $(this).css("border-width", "4px")
                    $(this).css("border-color", "#ff0000");

                    return false;
                }

                if (cnpj.length != 14) {
                    $(this).css("border-width", "4px")
                    $(this).css("border-color", "#ff0000");

                    return false;
                }
                // Elimina CNPJs invalidos conhecidos
                if (cnpj == "00000000000000" ||
                    cnpj == "11111111111111" ||
                    cnpj == "22222222222222" ||
                    cnpj == "33333333333333" ||
                    cnpj == "44444444444444" ||
                    cnpj == "55555555555555" ||
                    cnpj == "66666666666666" ||
                    cnpj == "77777777777777" ||
                    cnpj == "88888888888888" ||
                    cnpj == "99999999999999") {
                    $(this).css("border-width", "4px")
                    $(this).css("border-color", "#ff0000");
                }
                // Valida DVs
                tamanho = cnpj.length - 2
                numeros = cnpj.substring(0, tamanho);
                digitos = cnpj.substring(tamanho);
                soma = 0;
                pos = tamanho - 7;
                for (i = tamanho; i >= 1; i--) {
                    soma += numeros.charAt(tamanho - i) * pos--;
                    if (pos < 2)
                        pos = 9;
                }
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(0)) {
                    $(this).css("border-width", "4px")
                    $(this).css("border-color", "#ff0000");

                    return false;
                }

                tamanho = tamanho + 1;
                numeros = cnpj.substring(0, tamanho);
                soma = 0;
                pos = tamanho - 7;
                for (i = tamanho; i >= 1; i--) {
                    soma += numeros.charAt(tamanho - i) * pos--;
                    if (pos < 2)
                        pos = 9;
                }
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(1)) {
                    $(this).css("border-width", "4px")
                    $(this).css("border-color", "#ff0000");
                    
                    return false;
                }

                $(this).css("border-width", "1px")
                $(this).css("border-color", "#000");
            });
        });
    </script>
</head>

<body>

    Name: <input type="text" name="cnpj" id="cnpj"><br>
    Email: <input type="text" name="email">

</body>

</html>