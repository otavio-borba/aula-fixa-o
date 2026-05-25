<?php

require_once 'config.php';

include 'cabecalho.php';

include_once 'funcoes.php';

$contatos=obterContatos($pdo);

?>

<a href="cadastro_contato.php">
Novo Contato
</a>

<?php

mostrarTabela($contatos);

?>

<a href="cadastro_contato.php">Novo contato</a>

<td>

<a href="editar_contato.php?id=<?= $c['id'] ?>">Editar</a>

<a href="excluir_contato.php?id=<?= $c['id'] ?>">Excluir</a>

</td>