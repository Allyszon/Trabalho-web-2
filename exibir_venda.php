<?php
include 'conexaobd.php';

$comando = "Select * from venda";
$res = $con->query($comando, PDO::FETCH_ASSOC);
$registros = $res->fetchAll();

echo "<h2>Total de vendas cadastrados:<h2/> ".count($registros);
foreach ($registros as $r) {
    echo "<h2>vendas:</h2>";
    echo "<p><strong>ID produto:</strong> " . htmlspecialchars($r['ID_produto']) . "</p>";
    echo "<p><strong>valor:</strong> " . htmlspecialchars($r['valor_venda']) . "</p>";
}
?>