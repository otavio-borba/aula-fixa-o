<?php

require_once 'config.php';

$id=$_GET['id'];

$stmt=$pdo->prepare(
"SELECT * FROM contatos WHERE id=?"
);

$stmt->execute([$id]);

$contato=$stmt->fetch();

if($_POST){

$stmt=$pdo->prepare(

"UPDATE contatos
SET nome=?,email=?,telefone=?
WHERE id=?"

);

$stmt->execute([

$_POST['nome'],
$_POST['email'],
$_POST['telefone'],
$id

]);

header("Location:index.php");

}

?>

<form method="POST">

<input name="nome"
value="<?= $contato['nome'] ?>">

<input name="email"
value="<?= $contato['email'] ?>">

<input name="telefone"
value="<?= $contato['telefone'] ?>">

<button>Salvar</button>

</form>