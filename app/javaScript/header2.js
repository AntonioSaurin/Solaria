$('document').ready(function () {

    $.ajax({
        url: 'http://localhost:8000/app/controllers/verifyLogin.php',
        method: 'POST',
        data: {action: 'veirfy', id: 1},
        dataType: 'json'
    }).done(function (result) {
        console.log(result);
        switch (result) {
            case 'admin':
                $('#headerNav').append('<a href="#" id="accountIcon" class="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: var(--color-white)"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"> <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/> <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/> </svg></a> <section id="headerMenu" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(744px, 44px, 0px); top: 0px; left: 0px; will-change: transform;" aria-labelledby="navbarDropdownMenuLink"> <a href="/admin" class="dropdown-item userMenu">Admin</a> <a class="dropdown-item userMenu" href="/chat" >Chat</a> <a class="dropdown-item userMenu" href="../app/views/logout.php">Sair</a> </section>');
                break;
            case 'institution':
                $('#headerNav').append('<a href="#" id="accountIcon" class="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: var(--color-white)"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"> <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/> <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/> </svg></a> <section id="headerMenu" class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink"> <a href="/infoInstituicoes" class="dropdown-item userMenu">Conta</a> <a class="dropdown-item userMenu" href="/chat">Chat</a> <a class="dropdown-item userMenu" href="../app/views/logout.php">Sair</a> </section>')
                break;
            default:
                $('#headerNav').append('<a href="/login">Login</a>')
                break;
        }
    });
})

var header = document.getElementById('header');
var headerNav = document.getElementById('headerNav');
var showSideBar = false;

function changeSideBar() {
    showSideBar = !showSideBar;
    console.log(showSideBar)
    if(showSideBar){
        headerNav.style.marginLeft ='-5vw';
        headerNav.style.animationName = 'showSideBar';
    }else{
        headerNav.style.marginLeft ='-100vw';
        headerNav.style.animationName = '';
    }
}

window.addEventListener('resize', function(event){
    if(this.window.innerWidth>768 && showSideBar){
        changeSideBar();
    }
})
