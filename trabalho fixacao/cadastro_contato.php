<?php

require_once 'config.php';
include 'cabecalho.php';

$erro='';

if($_SERVER['REQUEST_METHOD']=='POST'){

$nome=trim($_POST['nome'] ?? '');
$email=trim($_POST['email'] ?? '');
$telefone=trim($_POST['telefone'] ?? '');

if(!$nome || !$email){

$erro='Nome e email obrigatórios';

}else{

$stmt=$pdo->prepare(
"INSERT INTO contatos(nome,email,telefone)
VALUES(?,?,?)"
);

$stmt->execute([
$nome,
$email,
$telefone
]);

header("Location:index.php");
exit;

}

}

?>

<form method="POST">

<input name="nome" placeholder="Nome">

<input name="email" placeholder="Email">

<input name="telefone" placeholder="Telefone">

<button>Cadastrar</button>

</form>

<p><?= $erro ?></p>