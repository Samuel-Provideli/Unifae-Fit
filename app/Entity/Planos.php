<?php

namespace app\Entity;

use \app\Db\Database;
use \PDO;

require_once 'app/Db/Database.php';

//erro estava no p minusculo o correto foi deixar maiusculo P, resolveu o erro de ficar quebrando a pagina.
    class Planos{

        public $idPlanos;

        public $nome_plano;

        public $desc_plano;

        public $duracao_plano;

        public $valor_plano;

        public $qnt_aulas;

        public $status_plano;


        public function cadastrarPlanos(){
           $obDatabase = new Database('planos');
            $this -> idPlanos = $obDatabase -> insert([

                'nome_plano'=> $this->nome_plano,
                'desc_plano'=> $this->desc_plano,
                'duracao_plano'=> $this->duracao_plano,
                'valor_plano'=> $this->valor_plano,
                'qnt_aulas'=> $this->qnt_aulas,
                'status_plano'=> 'ativo'


            ]);
        
        }
        public static function getPlanos($where = null, $order = null, $limit = null){
                return(new Database('planos'))->select($where,$order,$limit)
                                            ->fetchAll(PDO::FETCH_CLASS,self::class);

            }

        //  Configuraçao de um botao de editar para adminstradores:

        public static function getPlano($idPlanos){
            return(new Database('planos'))->select('idPlanos = '. $idPlanos)
                                        ->fetchObject(self::class);
     }


    }






?>