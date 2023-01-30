<?php

    class Pais
    {
        public static function listarPais()
        {
            $sql = "SELECT * FROM paises";
            $conect = DataBase::conectar();
            $load = $conect->prepare($sql);

            if ($load->execute()) {
                return array([
                    "STR" => 1,
                    "data" => $load->fetchAll(PDO::FETCH_ASSOC)
                ]);
            } else {
                return array([
                    "STR" => 0,
                    "mensaje" => 'Error al procesar los datos en la BD'
                ]);
            }
        }
    }