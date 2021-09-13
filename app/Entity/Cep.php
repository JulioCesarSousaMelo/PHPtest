<?php

namespace App\Entity;

use \App\Db\Database;

class Cep{
    
    public $id;
    public $cep;
    public $logradouro;
    public $bairro;
    public $localidade;
    public $uf;

    

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
     * Método responsável por armazenar campos do banco em atributos da classe
     * 
     */
    public function armazenarAtributos(){
        $obj_database = new Database('cep');
        $array = $obj_database->select($this->cep);

        $this->logradouro = $array['logradouro'];
        $this->bairro = $array['bairro'];
        $this->localidade = $array['localidade'];
        $this->uf = $array['uf'];
    }

    /**
     * Método responsável por exibir os atributos do cep
     * 
     */
    public function exibirCEP(){
        echo $this->cep;
        echo $this->logradouro;
        echo $this->bairro;
        echo $this->localidade;
        echo $this->uf;
    }

     /**
     * Método responsável por inserir um cep no banco
     * @param string $values
     */
    public function inserirCEP($values){
        $obj_database = new Database('cep');
        $obj_database->insert($values);
    }
}