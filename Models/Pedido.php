<?php

require "Connection.php";

class Pedido
{
    public $id;
    public $nome_cliente;
    public $endereco;
    public $telefone;
    public $id_produto;
    public $valor_unitario;
    public $quantidade;
    public $valor_total;

    public function registerPedido()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("INSERT INTO pedidos (
            nome_cliente,
            endereco,
            telefone,
            id_produto,
            valor_unitario,
            quantidade,
            valor_total
            ) values (
            '$this->nome_cliente',
            '$this->endereco',
            '$this->telefone',
            '$this->id_produto',
            '$this->valor_unitario',
            '$this->quantidade',
            '$this->valor_total')
        ");
        
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
