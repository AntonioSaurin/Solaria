<?php

return [
    '/' => 'views/home.php',
    
    '/login' => 'views/login.php',
    '/cadastro' => 'views/register.php',
    '/cadastroInstituicao' => 'views/registerInstituicao.php',
    '/sobre-nos' => 'views/aboutUs.php',
    '/como-adotar' => 'views/howToAdopt.php',
    '/cadastro/efetuar' => 'controllers/createUser.php',
    '/cadastro/efetuarInstituicao' => 'controllers/createInstitution.php',
    '/login/efetuar' => 'controllers/login.php',
    '/teste' => 'views/teste.php',
    '/header' => 'views/header.php',

    '/admin' => 'views/adminMenu.php',

    '/chat' => 'views/chat/chatUsers.php',
    '/chat/login' => 'views/chat/chatLogin.php',
    '/chat/registrar' => 'views/chat/chatSignup.php',
    '/chat/conversar' => 'views/chat/chatMain.php',

    '/usuario/editar' => 'controllers/updateUser.php',
    '/instituicoes' => 'views/institutionPage.php',
    '/perfilInstituicoes' => 'views/profileInstitution.php',
    '/infoUser' => 'views/infoUser.php',
    '/doacao' => 'views/institutionPage.php',
    '/infoInstituicoes' => 'views/infoInstitution.php',
    '/historicoInst' => 'views/historicInstitution.php',
    '/historicoUser' => 'views/historicUser.php',
    '/annualPlan' => 'views/annualPlan.php'
];