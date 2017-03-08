<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=cours', 'root', 'azerty123');
}
catch (PDOException $e){
	echo "Echec de connexion: " . $e->getMessage();
}
?>