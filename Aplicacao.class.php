<?php

	class Aplicacao{
		static $quantidade;
        
        function __construct(){
            self::$quantidade++;
        }
	}

    new Aplicacao();
    echo Aplicacao::$quantidade;

?>