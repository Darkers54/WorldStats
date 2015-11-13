<?php 

$strConnect = 'mysql:host=localhost;dbname=world;charset=utf8';
$pdo = new PDO($strConnect, 'root', 'Trieux54750');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>