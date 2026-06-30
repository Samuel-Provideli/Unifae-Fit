<?php

namespace app\Entity;

use \app\Db\Database;
use \PDO;

require_once 'app/Db/Database.php';

class Matricula{

    public $idMatricula;

    public $id_usuario;

    public $id_planos;

    public $status;

    


    public function realizarMatricula(){
        $obDatabase = new Database('matricula');
        $this-> idMatricula = $obDatabase -> insert([

            'idMatricula'=>$this->idMatricula,
            'id_usuario'=>$this->id_usuario,
            'id_planos'=>$this->id_planos,
     
            'status'=> 'ativo'



        ]);
  
    }
    
    
    public static function getMatricula($where = null, $order = null, $limit = null){
        return(new Database('matricula'))->selectMatricula($where,$order,$limit)
                            ->fetchAll(PDO::FETCH_CLASS, self::class);

    }










}








?>