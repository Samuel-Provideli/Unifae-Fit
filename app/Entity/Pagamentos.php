<?php
namespace app\Entity;

use \app\Db\Database;
use \PDO;

require_once 'app/Db/Database.php';

class Pagamento{

    public $idPagamentos;

    public $id_usuario; //id adicionado assim como esta no banco de dados pois precisa estar igual e escrito da mesma forma em todos os lugares que ira usar!!

    public $data_venc;
    
    public $data_pag;
    
    public $valor_pag;
    
    public $forma_pag;
    
    public $status_pago;


    public function realizarPagamento(){
        $obDatabase = new Database('pagamento');
        $this->idPagamentos = $obDatabase -> insert([

            'id_usuario'=>$this->id_usuario,
            'data_venc'=>$this->data_venc,
            'data_pag'=>$this->data_pag,
            'valor_pag'=>$this->valor_pag,
            'forma_pag'=>$this->forma_pag,
            'status_pago'=> 'pendente' //basicamente erro de status novamente, pois ele estava em lugares que nao deveriam estar


        ]);
    }

    public static function getPagamentos($where = null, $order = null, $limit = null){
        return(new Database('pagamento'))->selectPagamentos($where,$order,$limit)
                            ->fetchAll(PDO::FETCH_CLASS, self::class);



    }





}

























?>