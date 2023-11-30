<?php

namespace app\models;

class Institution extends Model {
    protected $table = "institution";

    protected function findList(){

    }

    public function list() {
        echo("<section class='institutionBox' id='card-institution1'>
        <section class='intitution-images-area'>
            <img src='app/style/img/imagem_slide2.jpg' alt='img insti 1'>
        </section>
        <section class='institutionInfo'>
            <a href='#' class='donateButton'><img class='arrowImage' src='app/style/img/imgArrowRight.png'></a>
            <a href='/perfilInstituicoes' class='donateButton'><img class='arrowImage' src='app/style/img/imgArrowRight.png'></a>
            <h2 class='institution-Name'>Instituição Adotar</h2>
            <p><u>Necessita:</u> Brinquedos, Roupas e Dinheiro.</p>
        </section>

        <section class='cardFooter'>
            <i class='fa-solid fa-location-crosshairs fa-lg locatioIcon' style='color: #ffffff;'></i>
            <p>Santa Isabel-Sp</p>
        </section>
    </section>");
    }
}