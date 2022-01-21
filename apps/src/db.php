<?php
try {
	
    $pdo = new PDO('mysql:host=localhost;dbname=renting;charset=utf8', 'root', '');
}
catch (PDOException $e){
	
    die('Erreur : ' . $e->getMessage());
}
?>