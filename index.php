<?php 
    header('Content-Type: application/json; chartset=utf-8');
    
    $json = json_encode([
        "response" => '200',
        "mensaje" => 'Recibiendo respuesta del backend de LibertyCommerce :)'

    ]);

    echo $json;