<?php

namespace App\Entity;

use \App\Db\Database;

class Cep{
    
    public $cep;

    /**
     * Método responsável por verificar se o cep já existe no banco
     * @param string $cep_form
     * @return boolean
     */
    public function verificarCEP($cep_form){
        $this->cep = $cep_form;

        $obj_database = new Database('cep');
        $array = $obj_database->select($this->cep);

        if($array[cep]){
            return true;
        }
    }

    /**
     * Método responsável por retornar o cep do banco  
     * @return array $array
     */
    public function retornarCepBanco(){
        $obj_database = new Database('cep');
        $array = $obj_database->select($this->cep);

        return $array;
    }

    // }

     /**
     * Método responsável por inserir um cep no banco
     * @param string $values
     */
    public function inserirCEP($values){
        $obj_database = new Database('cep');
        $obj_database->insert($values);
    }
}