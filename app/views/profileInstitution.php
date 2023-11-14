<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app\style\css\profileInstitution.css">
    <title>Meu Perfil</title>
</head>
<body>
    <header>
        <?php
         include('header.php');
        ?>
    </header>

    <section class="containerProfile">
        <section class="profile">
            <img src="caminho/para/imagem.jpg" alt="Foto de Perfil">
            <section class="profile-info">
                <h2>Nome do Usuário</h2>
                <p>Descrição curta do usuário.</p>
                <ul>
                    <li><strong>Necessidades:</strong> Informações sobre as necessidades</li>
                </ul>
                <a href="#">Link para localização</a>
            </section>
        </section>

        <section class="line">
            <hr>
        </section>

        <nav class="simple-nav">
            <a href="#" class="button">Posts</a>
            <a href="#" class="button">Chat</a>
            <a href="#" class="button">Doar</a>
        </nav>

        <section class="posts">
            <section class="post">
                <section class="headerPost">
                    <button class="options-button" aria-label="Opções" onclick="toggleOptions(this)">
                        Opções
                    </button>
                    <section class="post-options" id="postOptions">
                        <button class="edit-button" aria-label="Editar post">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        <button class="delete-button" aria-label="Excluir post">
                            <i class="fas fa-trash-alt"></i> Excluir
                        </button>
                    </section>
                </section>
                <img src="img/perfil - instagram.jpg" alt="post">
            </section>
        </section>

        <script>
            function toggleOptions(button) {
                var postOptions = button.nextElementSibling;
                postOptions.classList.toggle('show-options');
            }
        </script>
    </section>
</body>
</html>
