<?php
// gabriel 150523 14:23

include_once('../conexao.php');

function buscaUsuarios($idUsuario)
{

	$usuario = array();	
	$apiEntrada = array(
		'idUsuario' => $idUsuario,
	);	
	$usuario = chamaAPI(null, '/sistema/usuario', json_encode($apiEntrada), 'GET');
	return $usuario;
}

if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

	if ($operacao == "ativar") {
		$apiEntrada = array(
			'idUsuario' => $_POST['idUsuario'],
			'secret_key' => $_POST['secret_key'] // no ativar, guarda a secret
		);
		$usuario = chamaAPI(null, '/sistema/usuario/ativar', json_encode($apiEntrada), 'POST');
	
		header('Location: ../login.php');
	}
	

}
