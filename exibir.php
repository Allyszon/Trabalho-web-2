<?php
include 'conexaobd.php';

$comando = "Select * from produto";
$res = $con->query($comando, PDO::FETCH_ASSOC);
$registros = $res->fetchAll();

echo "<h2>Total de produtos cadastrados:<h2/> ".count($registros);
foreach ($registros as $r) {
    echo "<h2>Dados cadastrados:</h2>";
    echo "<p><strong>Nome</strong> " . htmlspecialchars($r['nome']) . "</p>";
    echo "<p><strong>valor:</strong> " . htmlspecialchars($r['valor']) . "</p>";
}
?>b