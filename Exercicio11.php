<?php

  $conn = new PDO('mysql:host=localhost;dbname=livros', 'root', '');
			
	$result = $conn->query("SELECT * from autores");
	
	if($result)
		foreach($result as $row)
			echo "$row[codigo] - $row[nome] <br>"; 
	
	$conn = null;


?>