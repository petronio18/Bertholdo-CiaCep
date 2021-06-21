<?php

function getAddress() {
    //deixa todos os campos limpos
    $address = (object)[
        'cep' => '',
        'logradouro' => '',
        'bairro' => '',
        'localidade' => '',
        'uf' => ''

];
    //pega e vericar o formulario
    if( isset ($_POST['cep'])){
        $cep = $_POST['cep'];
        //limpar meu cep
        $cep = preg_replace('/[^0-9]/','',$cep);
        //verificar ser e um cep valido 
        if( preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep)){
            $url = "https://viacep.com.br/ws{$cep}/json/";
            //pega informaçoes do via cep
            $address = json_decode(file_get_contents($url));
        }else{
            $address->cep ='cep invalido!';
        }
    }
    return $address;

    
}
?>









