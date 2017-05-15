<?php

  $conn = new PDO('mysql:host=localhost;dbname=livros', 'root', '');
			
  $conn->exec("INSERT INTO autores (nome) VALUES ('Daniel Brandão')");
	
  //$conn = null;


?>