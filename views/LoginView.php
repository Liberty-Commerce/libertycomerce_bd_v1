<?php 
    
    include 'controllers/SelectController.php';

    class LoginView
    {
        public static function validarCredenciales()
        {
            
        }

        public static function listarPais()
        {
            $list = SelectController::listarPais();
            return json_encode([
                "STR" => 1,
                "response" => $list
            ]);
        }
    }