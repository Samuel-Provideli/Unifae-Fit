<?php

namespace App\Enitity;

use \App\Db\Database;

require_once 'index.php';
include __DIR__.'/includes/formulario.php';

class usuario{

    public $nome;
    public $cpf;
    public $data_nasc;
    public $telefone;
    public $endereco;
    public $status;


    public function cadastrar(){
        $obDatabase = new Database('usuario');
        $obDatabase-> insert([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'data_nasc' => $this->data_nasc,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
            'status' => $this->status
        ]);

    }







}


?>