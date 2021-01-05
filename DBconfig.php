<?php
define("USER", "root");
define("PASSWORD", "");
try {
	$verbinding = new 
	PDO("mysql:host=localhost;dbname=webshop",USER,PASSWORD);
	$verbinding->setAttribute
(PDO::AFTER_ERRMODE,PDO::ERRMODE_EXCEPTION );
} catch (PDOException $e) {
	echo $e->getMessage();
	echo "Kon geen verbinding maken";	
}
?>