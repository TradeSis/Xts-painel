<?php
//Lucas 05042023 criado

include_once('./conexao.php');

function buscaAplicativos($idUsuario)
{

    $app = array();
    $apiEntrada = array(
        'idUsuario' => $idUsuario
    );
    $app = chamaAPI(null, '/sistema/aplicativo', json_encode($apiEntrada), 'GET');
    return $app;
}



	
