<?php

namespace app\Entity;

use \app\Db\Database;
use \app\Entity\Planos;
use \PDO;

require_once 'app/Entity/Planos.php';
require_once 'app/Db/Database.php';

class Matricula{

    public $idMatricula;

    public $id_usuario;

    public $id_planos;

    public $data_inic;

    public $data_term;

    public $status;

    
    
    public function realizarMatricula(){
        $plano = Planos::getPlano($this-> id_planos);
        $data_final = date('Y-m-d', strtotime('+'.$plano->duracao_plano.'days',strtotime(date('Y-m-d'))));


        $obDatabase = new Database('matricula');
        $this-> idMatricula = $obDatabase -> insert([

            'id_usuario'=>$this->id_usuario,
            'id_planos'=>$this->id_planos,
            'data_inic'=> date("Y-m-d"),
            'data_term'=> $data_final,
            'status'=> 'ativo'



        ]);
  
    }
    public function atualizar(){
            return(new Database('matricula'))->update('idMatricula = '.$this->idMatricula,[
            'idMatricula'=>$this->idMatricula,
            'id_usuario'=>$this->id_usuario,
            'id_planos'=>$this->id_planos,
            'status'=>$this->status

            ]);}
    
    
    public static function getMatricula($where = null, $order = null, $limit = null){
        return(new Database('matricula'))->selectMatricula($where,$order,$limit)
                            ->fetchAll(PDO::FETCH_CLASS, self::class);

    }

    public static function getMatriculas($idMatricula){
        return(new Database('matricula'))->select('idMatricula = '.$idMatricula)
                                                    ->fetchObject(self::class);
    }

    //puxa apenas o nome da tabela Usuario VVV
    public static function getMatriculasNome($idMatricula){
    return(new Database('matricula'))->selectMatricula('p.idMatricula = '.$idMatricula)
                                                ->fetchObject(self::class);
}








}








?>