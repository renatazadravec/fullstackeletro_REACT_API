<?php

class Connection
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=127.0.0.1;dbname=loja_fullstackphp;charset=utf8",
            "renata",
            "902590"
        );

        if ($conn) {
            return $conn;
        } else {
            echo "<h1>Erro ao realizar conexão</h1>";
        }
    }
}