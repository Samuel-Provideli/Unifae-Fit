<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{

    const HOST = 'localhost';
    const NAME = 'academia_banco';
    const USER = 'root';
    const PASS = '1234';
    const MENSAGEM = 'Erro no sistema';

    private $table;
    private $connection;
    

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();

    }

    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST. ';dbnmame='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        }catch(PDOException $e){
            die('ERROR:'. self::MENSAGEM);
        }
    }


    public function insert($values){
        $query = 'INSERT INTO usuario (nome,cpf,data_nasc,telef,endereco,status) VALUES ("jose","12345678910","11092007","551912345-1234","vila saojorge")';
    }


}













?>