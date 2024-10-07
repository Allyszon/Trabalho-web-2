<?php
include 'conexaobd.php';

// DELETANDO DADOS DA TABELA
$comando = "DELETE FROM produto WHERE id =15";
$s = $con->prepare($comando);
$s->execute();
?>
