<?php

namespace App\Enitity;

use \App\Db\Database;
use \PDO;

require_once 'index.php';
include __DIR__.'/includes/formulario.php';

class usuario{

    public $id;
    public $nome;
    public $cpf;
    public $data_nasc;
    public $telefone;
    public $endereco;
    public $status;


    public function cadastrar(){
        $obDatabase = new Database('usuario');
        $this->id = $obDatabase-> insert([



            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'data_nasc' => $this->data_nasc,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
            'status' => $this->status

            
        ]);
        
    }

    public static function getUsuario($where = null, $order = null, $limit = null){
        return(new Database('vagas'))->select($where,$order,$limit)
                                    ->fetchAll(PDO::FETCH_CLASS,self::class);

    }





}


?>