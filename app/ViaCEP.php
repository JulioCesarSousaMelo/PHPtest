<?php

namespace App;

class ViaCEP{

    /** 
     * Método responsável por consultar um CEP na API da viaCep
     * @param string $cep
     * @return array 
    */
    public static function consultarCEP($cep){

        //INICIAR O CURL 
        $curl = curl_init();

        //CONFIGURAÇÕES DO CURL
        //ARRAY DE CONFIGURAÇÕES
        curl_setopt_array($curl,[
            CURLOPT_URL => 'viacep.com.br/ws/'.$cep.'/xml/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        //EXECUTAR
        $response = curl_exec($curl);

        //FECHAR A CONEXÃO
        curl_close($curl);

        //CONVERTER O XML PARA ARRAY
        $array = simplexml_load_string($response);

        //RETORNAR O CONTEÚDO EM ARRAY
        return isset($array->cep) ? $array : null;
          
    }
}