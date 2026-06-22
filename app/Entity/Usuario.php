<?php

namespace app\Entity;

use \app\Db\Database;
use \PDO;

require_once 'app/Db/Database.php';


class Usuario{
  
    public $idUsuario;
    
    public $nome;

    public $cpf;

    public $data_nasc;

    public $telef;

    public $endereco;

    public $status;

    public function cadastrar(){
        $obDatabase = new Database('usuario');
        $this->idUsuario = $obDatabase-> insert([

            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'data_nasc' => $this->data_nasc,
            'telef' => $this->telef,
            'endereco' => $this->endereco,
            'status' => 'ativo'

            
        ]);
        
    }

    public static function getUsuarios($where = null, $order = null, $limit = null){
        return(new Database('usuario'))->select($where,$order,$limit)
                                    ->fetchAll(PDO::FETCH_CLASS,self::class);

    }

    //  Configuraçao de um antigo botao de editar desnecessario para adminstradores:

    //  public static function getUsuario($idUsuario){
    //     return(new Database('usuario'))->select('idUsuario = '. $idUsuario)
    //                                     ->fetchObject(self::class);
    //  }


}


?>