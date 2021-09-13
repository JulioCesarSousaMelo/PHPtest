<?php

    //AUTO-LOAD
    require __DIR__ .'/vendor/autoload.php';

    use \App\Entity\Cep;
    use \App\WebService\ViaCEP;

    //VALIDAÇÃO DO POST
    if(isset($_POST['cep'])){
        $cep_form = $_POST['cep'];

        $obj_cep = new Cep;

        //VERIFICAR SE JÁ EXISTE ESSE CEP NO BANCO 
        $result = $obj_cep->verificarCEP($cep_form);
        
        if($result){
            //CASO SIM, DEVE RETORNAR O CEP NO BANCO
            $informacaos_cep = $obj_cep->retornarCepBanco();

        }else{
            //CASO NÃO, DEVE CONSULTAR NA API, INSERIR NO BANCO e RETORNAR O CEP NO BANCO
            $dadosCEP = ViaCEP::consultarCEP($cep_form);

            if($dadosCEP){
                $obj_cep->inserirCEP($dadosCEP);
                $informacaos_cep = $obj_cep->retornarCepBanco();
                
            }else{
                echo "<script> 
                        alert('CEP inválido, digite novamente !!!'); 
                        window.location.href='index.php';
                    </script>";
            }
        }
    }

    //HEADER
    include __DIR__.'/includes/header.php'; 

    if(!isset($_POST['cep'])){
        //FORMULÁRIO
        include __DIR__.'/includes/formulario.php';    
    }

    if(isset($informacaos_cep)){
        //TABELA
        include __DIR__.'/includes/tabela.php'; 
    }
    //FOOTER
    include __DIR__.'/includes/footer.php'; 