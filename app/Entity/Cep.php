<?php

namespace App\Entity;

class Cep{
    
    /**
     * Identificador único do cep
     * @var int
     */
    public $id;

    /**
     * Número do cep
     * @var string
     */
    public $cep;

    /**
     * Logradouro do cep
     * @var string
     */
    public $logradouro;

    /**
     * Bairro do cep
     * @var string
     */
    public $bairro;

    /**
     * Localidade do cep
     * @var string
     */
    public $localidade;

    /**
     * UF do cep
     * @var string
     */
    public $uf;

    

}