<?php
include 'conexaobd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $valor = $_POST["valor"];

    $comando = "INSERT into produto(nome, valor) VALUES(?,?)";
    $s = $con->prepare($comando);
    $s->bindParam(1, $nome);
    $s->bindParam(2, $valor);

    $s->execute();    

    $comando2 = "INSERT INTO venda(valor_venda, ID_produto) values(?,?)";
    $id_produto = $con->lastInsertId();
    $r = $con->prepare($comando2);
    $r->bindParam(1, $valor);
    $r->bindParam(2, $id_produto);
    $r->execute();
}

?>