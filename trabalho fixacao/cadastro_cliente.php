<?php

require_once 'config.php';

include 'cabecalho.php';

$erro='';

if($_POST){

$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$endereco=$_POST['endereco'];

if(strlen($cpf)!=14){

$erro='CPF inválido';

}else{

$stmt=$pdo->prepare(

"INSERT INTO clientes
(nome,cpf,email,telefone,endereco)

VALUES(?,?,?,?,?)"

);

$stmt->execute([

$nome,
$cpf,
$email,
$telefone,
$endereco

]);

header("Location:clientes.php");

}

}

?>

<form method="POST">

<input name="nome" placeholder="Nome">

<input
name="cpf"
placeholder="000.000.000-00">

<input
name="email"
placeholder="Email">

<input
name="telefone"
placeholder="Telefone">

<input
name="endereco"
placeholder="Endereco">

<button>Cadastrar</button>

</form>

<?= $erro ?>