<?php

class Conexion {

    static function Connect() {

        $db = new mysqli('Localhost', 'root', '', 'pedidos');
        return $db;
    }
}