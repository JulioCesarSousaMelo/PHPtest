<?php

//AUTO-LOAD
require __DIR__ .'/vendor/autoload.php';

//VALIDAÇÃO DO POST
if(isset($_POST['cep'])){
    die('cadastrar');
}

//HEADER
include __DIR__.'/includes/header.php'; 

//FORMULÁRIO
include __DIR__.'/includes/formulario.php'; 

//FOOTER
include __DIR__.'/includes/footer.php'; 