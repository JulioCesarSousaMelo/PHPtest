<?php

namespace App\Db;

use \PDO;

class Database{

    const HOST = 'localhost';
    const NAME = 'busca_cep';
    const USER = 'root';
    const PASS = 'root';

    private $table;
    private $connection;

    /**
     * Define a tabela, instancia e conecta
     * @param string $table
     */
    public function __contruct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    /**
     * Método responsável por criar uma conexão com o Banco
     */
    public function setConnection(){
        try{
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }
    

}