<?php

require "Connection.php";

class Categorias
{
      public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM `categorias`");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
