<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app/style/css/institutionPage.css" rel="stylesheet">
    <title>Solaria/Instituições</title>
</head>
<body>
    <div class="container">
        <!-- Botões de filtro -->
        <div class="filterArea">
            <label for="filtroNome">Filtrar por Nome:</label>
            <input type="text" id="filtroNome">
            <label for="filtroTipo">Filtrar por Tipo:</label>
            <select id="filtroTipo">
                <option value="">Todos</option>
                <option value="dinheiro">Dinheiro</option>
                <option value="roupas">Roupas</option>
                <option value="alimentos">Alimentos</option>
                <option value="brinquedos">Brinquedos</option>
            </select>
        </div>

        <!-- Caixas de doação -->
        <div class="caixa" onclick="mostrarModal(1)" color: #FFA12D>
            <img src="app/style/img/imgInstitutionPageTest.png" alt="Imagem 1">
            <div class="caixa-info">
                <h2>Instituição Adotar</h2>
                <p class="institutionDescription">A Adotar é uma instituição de adoção dedicada a encontrar lares amorosos e seguros para crianças vulneráveis. Nossa equipe oferece cuidados de qualidade, apoio emocional e recursos para famílias adotivas. </p>
                <p><b>Necessita:</b> Brinquedos, Roupas e Dinheiro.</p>
            </div>
            <section class="buttonArea">
            <button class="doar-button">Doar ></button>
            </section>
        </div>

        

        <!-- Modal de detalhes da causa -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <span class="close-button" onclick="fecharModal(1)">&times;</span>
                <img src="app/style/img/imgInstitutionPageTest.png" alt="Imagem 1">
                <h2>Nome da Causa 1</h2>
                <p>Descrição da causa 1</p>
                <p>Descrição secundária da causa 1</p>
                <button class="doar-button">Doar ➡</button>
                <button onclick="abrirFaleConosco()">Fale Conosco</button>

                <!-- Botões de doação -->
                <div class="doacao-buttons">
                    <button class="doacao-button">Dinheiro</button>
                    <button class="doacao-button">Roupas</button>
                    <button class="doacao-button">Alimentos</button>
                    <button class="doacao-button">Brinquedos</button>
                </div>

                <!-- Opções de doação em dinheiro -->
                <div>
                    <label for="valorDinheiro">Escolha o valor:</label>
                    <select id="valorDinheiro">
                        <option value="10">R$ 10,00</option>
                        <option value="25">R$ 25,00</option>
                        <option value="50">R$ 50,00</option>
                        <option value="100">R$ 100,00</option>
                        <option value="personalizado">Outro Valor</option>
                    </select>
                    <input type="text" id="custom-valor" class="custom-valor" placeholder="Digite o valor personalizado">
                </div>

                <button onclick="prosseguir()">Prosseguir</button>
            </div>
        </div>

        <!-- Adicione mais caixas conforme necessário -->

    </div>

    <script>
        function mostrarModal(id) {
            var modal = document.getElementById("modal" + id);
            modal.style.display = "block";
        }

        function fecharModal(id) {
            var modal = document.getElementById("modal" + id);
            modal.style.display = "none";
        }

        function abrirFaleConosco() {
            // Implemente a lógica para abrir a página de "Fale Conosco" aqui
        }

        function prosseguir() {
            // Implemente a lógica para prosseguir após a doação aqui
        }
    </script>
</body>
</html>
