<?php

require_once 'config.php';

include 'cabecalho.php';

include_once 'funcoes_clientes.php';

$clientes=obterClientes($pdo);

?>

<a href="cadastro_cliente.php">
Novo Cliente
</a>

<?php

mostrarTabelaClientes($clientes);

?>