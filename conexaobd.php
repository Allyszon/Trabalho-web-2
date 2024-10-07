<?php
try {
    // Conectar ao banco de dados
    $con = new PDO("mysql:host=localhost;dbname=vendas", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Exibir mensagem de erro, se a conexÃ£o falhar
    echo 'ERROR: ' . $e->getMessage();
}
?>