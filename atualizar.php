<?php
include 'conexaobd.php';

// MODIFICAR DADOS NA TABELA
$comando = "UPDATE produto SET nome = 'macarrao' WHERE id = 3";
$s = $con->prepare($comando);
$s->execute();

