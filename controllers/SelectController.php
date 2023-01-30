<?php
    include 'model/Pais.php';

    class SelectController
    {
        public static function listarPais()
        {
            $list = Pais::listarPais();
            return $list;
        }
    }