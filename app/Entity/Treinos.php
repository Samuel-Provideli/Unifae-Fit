<?php

namespace app\Entity;

use \app\Db\Database;
use \PDO;

require_once 'app/Db/Database.php';

class Treinos{

    public $idTreinos;

    public $id_usuario;

    public $nome_treinos;

    public $objetivo;

    public $data_treinos;

    public $observacoes;

    public $status_treinos;

    public function realizarPlano(){
        $obDatabase = new Database('treinos');
        $this -> idTreinos = $obDatabase ->insert([

            'id_usuario'=> $this->id_usuario,
            'nome_treinos'=>$this->nome_treinos,
            'objetivo'=>$this->objetivo,
            'data_treinos'=>$this->data_treinos,
            'observacoes'=>$this->observacoes,
            'status_treinos'=> 'ativo'
        ]);
    }

         public static function getTreinos($where = null, $order = null, $limit = null){
                return(new Database('treinos'))->selectTreinos($where,$order,$limit) //erro que faltou é escrever o select correspondente a esta tabela q era o selectTreinos ai ele consegue formar o join e puxar oq se procura na outra tabela
                                            ->fetchAll(PDO::FETCH_CLASS,self::class);

            }


























}






















?>