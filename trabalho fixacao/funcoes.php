<?php

function obterContatos(PDO $pdo){

$stmt=$pdo->query(

"SELECT * FROM contatos
ORDER BY nome"

);

return $stmt->fetchAll();

}

function mostrarTabela($contatos){

echo "<table border='1'>";

echo "

<tr>

<th>Nome</th>
<th>Email</th>
<th>Telefone</th>
<th>Ações</th>

</tr>

";

foreach($contatos as $c){

echo "

<tr>

<td>".$c['nome']."</td>

<td>".$c['email']."</td>

<td>".$c['telefone']."</td>

<td>

<a href='editar.php?id=".$c['id']."'>
Editar
</a>

|

<a href='excluir.php?id=".$c['id']."'>
Excluir
</a>

</td>

</tr>

";

}

echo "</table>";

}