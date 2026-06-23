<?php

namespace app\Db;

use \PDO;
use \PDOException;

class Database{


     /**
     * @var string
     * 
     */
    const HOST = 'localhost';

     /**
     * @var string
     * 
     */
    const NAME = 'academia_banco';

     /**
     * @var string
     * 
     */
    const USER = 'root';

     /**
     * @var string
     * 
     */
    const PASS = '1234';

     /**
     * @var string
     * 
     */
    const MENSAGEM = 'Erro no sistema';

    /**
     * @var string
     * 
     */
    private $table;

    /**
     * @var PDO
     * 
     */
    private $connection;
    



    
    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();

    }

    private function setConnection(){
        try{
            $this->connection = new PDO(
                'mysql:host='.self::HOST.';dbname='.self::NAME,
                self::USER,
                self::PASS
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function execute($query,$params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }



    public function insert($values){
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');


        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        $this->execute($query,array_values($values));

        return $this->connection->lastInsertId();
    }


    public function select($where = null, $order = null, $limit = null, $fields = '*'){

        $where = strlen($where) ? 'WHERE '.$where: '';
        $order = strlen($order) ? 'ORDER BY '.$order: '';
        $limit = strlen($limit) ? 'LIMIT '.$limit: '';


        $query = 'SELECT '.$fields. ' FROM '.$this->table.' '.$where.''.$order.''.$limit;
        return $this->execute($query);
    }

    public function selectPagamentos($where = null, $order = null, $limit = null){

        $fields = 'p.idPagamento, u.nome , p.data_pag, p.data_venc, p.valor_pag, p.forma_pag, p.status_pago'; //basicamnete pegou o valor de filds e setou o codg usado no banco de dados do join
        $table = 'pagamento AS p JOIN usuario AS u ON p.id_usuario = u.idUsuario';//onde ja esta setado from no comando dividiu em dois, por isso o uso de uma var chamada table com o restante dos dados
        
        $where = strlen($where) ? 'WHERE '.$where: '';
        $order = strlen($order) ? 'ORDER BY '.$order: '';
        $limit = strlen($limit) ? 'LIMIT '.$limit: '';


        $query = 'SELECT '.$fields. ' FROM '.$table.' '.$where.''.$order.''.$limit; //o programa vai ler e intepretar como se estivesse digitando no proprio banco de dados, realizando oq este select quer, basicamente Select e From sao comandos basicos do banco o resto é guardado por variaveis e complementados neste codg
        return $this->execute($query);

        
    }













}





?>