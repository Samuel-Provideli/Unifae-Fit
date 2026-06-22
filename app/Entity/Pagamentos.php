<?php
namespace app\Entity;

use \app\Db\Database;
use \PDO;

require_once 'app/Db/Database.php';

class Pagamentos{

    public $idPagamentos;

    public $data_venc;
    
    public $data_pag;
    
    public $valor_pag;
    
    public $forma_pag;
    
    public $status_pag;


    public function realizarPagamento(){
        $obDatabase = new Database('pagamentos');
        $this->idPagamentos = $obDatabase -> insert([

            'data_venc'=>$this->data_venc,
            'data_pag'=>$this->data_pag,
            'valor_pag'=>$this->valor_pag,
            'forma_pag'=>$this->forma_pag,
            'status_pag'=> 'pendente'


        ]);
    }

    public static function getPagamentos($where = null, $order = null, $limit = null){
        return(new Database('pagamentos'))->select($where,$order,$limit)
                            ->fetchAll(PDO::FETCH_CLASS, self::class);



    }





}

























?>