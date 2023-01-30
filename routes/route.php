<?php
//  Obtenemos el la direccion url y tomamos el ultimo /
$url = explode('/',URL);

$hosting = $_SERVER['SERVER_NAME'] == 'localhost' ? $url[2] : $url[2];

// Incluimos las vistas 
require 'views/LoginView.php';

// Aqui coloca las rutas que sea  tipo GET
if ($hosting == 'listCountry' && METHOD == 'GET') {
   $list = LoginView::listarPais();
   echo $list;
}
// FIN ruta GET

// Aqui coloca las rutas que sea tipo POST

//FIN ruta POST