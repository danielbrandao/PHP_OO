<?php

  $conn = new PDO('mysql:host=localhost;dbname=livros', 'root', '');
			
  $conn -> exec("DELETE FROM autores WHERE codigo = 1");
		
  $conn = null;

?>