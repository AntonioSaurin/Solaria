<?php
namespace app\classes;


class Hour
{
    public static function getHour()
    {
        date_default_timezone_set('America/Sao_Paulo');

        $hourGet = date('G');
        $msgDay = "";

        if ($hourGet >= 5 && $hourGet <= 11) {
            $msgDay = "Bom-dia";

        } else if ($hourGet >= 12 && $hourGet <= 18) {
            $msgDay = "Boa-tarde";
        } else if ($hourGet >= 19 || $hourGet <= 4) {
            $msgDay = "Boa-noite";
        }
        return $msgDay;
    }
}