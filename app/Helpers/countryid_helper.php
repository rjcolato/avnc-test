<?php

namespace App\Helpers;
//consumo de servicio web para seleccion de pais 

$data = json_decode(file_get_contents("https://avnc.net/modules/wpcf_avnc/services/countries"), true);
print_r($data);
?>
