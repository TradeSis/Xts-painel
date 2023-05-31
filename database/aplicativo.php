<?php
//Lucas 05042023 criado

include_once('./conexao.php');

function buscaAplicativos($idUsuario)
{

    $app = array();
    $apiEntrada = array(
        'idUsuario' => $idUsuario
    );
    $app = chamaAPI(null, '/services/aplicativo', json_encode($apiEntrada), 'GET');
    return $app;
}



	
