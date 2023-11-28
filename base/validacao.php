<?php
// Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
if (!empty($_POST) and (empty($_POST['login']) or empty($_POST['senha']))) {
	header("Location: index.php"); exit;
}
// Tenta se conectar ao servidor MySQL e ao DB
$con = mysqli_connect('localhost', 'root', '', 'projeto') or trigger_error(mysqli_error($con));

$login = mysqli_real_escape_string($con, $_POST['login']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

// Valida��o do usu�rio/senha digitados
$sql  = "select cpf, nome, nivel from usuario where (login = '". $login ."') ";
$sql .= "and (senha = '".($senha) ."')";

$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) != 1) {
	// Mensagem de erro quando os dados s�o inv�lidos e/ou o usu�rio n�o foi encontrado
	header('Content-Type: text/html; charset=utf-8');
	echo "Login invalido!"; exit;
} else {
	// Salva os dados encontados na vari�vel $resultado
	$resultado = mysqli_fetch_assoc($query);
	
////// 4.0 - Salvando os dados na sess�o do PHP ////////

	// Se a sess�o n�o existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sess�o
	$_SESSION['UsuarioID'] = $resultado['id'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];
	$_SESSION['UsuarioNivel'] = $resultado['nivel'];

	// Redireciona o visitante
	switch($_SESSION['UsuarioNivel']){
		case 1: header("Location: ../templates/html/clientes.php"); exit;break;
		case 2: header("Location: ../templates/html/adm.php"); exit;break;
	}
}

?>