<?php

namespace app\Entity;

use \app\Db\Database;
use \PDO;

require_once 'app/Db/Database.php';


class Usuario{
    /**
     * @var string
     * 
     */
    public $idUsuario;
    
    
    /**
     * @var string
     * 
     */
    public $nome;


    /**
     * @var string
     * 
     */
    public $cpf;
    
    
    /**
     * @var string
     * 
     */
    public $data_nasc;
    

    /**
     * @var string
     * 
     */
    public $telef;


    /**
     * @var string
     * 
     */
    public $endereco;


    /**
     * @var string
     * 
     */
    public $status;
   


    /**
     * @return boolean
     * 
     */
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





}


?>