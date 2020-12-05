<?php

require "Connection.php";

class Produtos
{
      public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT produtos.nome, produtos.descricao, produtos.preco, produtos.preco_promocao, produtos.imagem, categorias.nome categorianome, categorias.slug FROM `produtos` INNER JOIN `categorias` on produtos.categoria_id = categorias.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
