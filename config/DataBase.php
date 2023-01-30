<?php 

    class DataBase
    {
        public static function conectar()
        {
            if ($_SERVER['SERVER_NAME'] == 'localhost') {
                $conect = new PDO(
                    "mysql:host=localhost;dbname=libertycommerce;",
                    'root',
                    ''
                );
    
                return $conect;
            } else {
                $conect = new PDO(
                    "mysql:host=localhost;dbname=id20216574_libertycommerce;",
                    'id20216574_liberty',
                    '^b}E|?FX$7{|]7Rs'
                );
    
                return $conect;
            }
        }
    }