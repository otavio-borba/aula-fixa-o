<?php

function obterClientes(PDO $pdo){

$stmt=$pdo->query(

"SELECT * FROM clientes"

);

return $stmt->fetchAll();

}

function mostrarTabelaClientes($clientes){

echo "<table border='1'>";

echo "

<tr>

<th>Nome</th>
<th>CPF</th>
<th>Email</th>

</tr>

";

foreach($clientes as $c){

echo "

<tr>

<td>".$c['nome']."</td>

<td>".$c['cpf']."</td>

<td>".$c['email']."</td>

</tr>

";

}

echo "</table>";

}