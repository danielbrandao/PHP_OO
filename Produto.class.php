<?php

    // Declarando a classe
    class Produto{
        // Atributos da classe
        var $codigo;
        var $preco;
        var $quantidade;
        var $valor;

        // Criando a função Imprime Tabela
        function imprimeTabela(){
            echo "Código: $this->codigo <br>";
            echo "Descrição: $this->descricao <br>";
            echo "Preço: $this->preco";
        }
    }

?>