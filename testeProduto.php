<?php
// Arquivo testeProduto.php

// incluindo a classe Produto
include "Produto.class.php";

//Criando o objeto Produto
$produto = new Produto;

// Atribuindo valores ao objeto
$produto ->codigo = 001;
$produto ->descricao = "Macbook Air";
$produto ->preco = "4999,99";

$produto->imprimeTabela();

?>