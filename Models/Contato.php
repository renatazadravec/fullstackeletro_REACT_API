<?php

require "Connection.php";

class Contato
{
    public $id;
    public $nome;
    public $mensagem;
    
    public function registerContato()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("INSERT INTO contato (nome, mensagem) values ('$this->nome', '$this->mensagem')");
        
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
