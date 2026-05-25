<?php

require_once 'config.php';

$id=$_GET['id'];

if($_POST){

$stmt=$pdo->prepare(
"DELETE FROM contatos WHERE id=?"
);

$stmt->execute([$id]);

header("Location:index.php");

}

?>

<form method="POST">

<p>Deseja excluir?</p>

<button>Excluir</button>

</form>