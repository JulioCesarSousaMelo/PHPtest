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
            $obj_cep->armazenarAtributos();
            $obj_cep->exibirCEP();
        }else{
            //CONSULTAR NA API, INSERIR NO BANCO E EXIBIR UM CEP
            $dadosCEP = ViaCEP::consultarCEP($cep_form);

            // echo "<pre>";
            // var_dump($dadosCEP);die;
            // echo "</pre>";

            if($dadosCEP){
                $obj_cep->inserirCEP($dadosCEP);
                $obj_cep->armazenarAtributos();
                $obj_cep->exibirCEP();
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

    //FORMULÁRIO
    include __DIR__.'/includes/formulario.php'; 

    //FOOTER
    include __DIR__.'/includes/footer.php'; 