<?php 

$strConnect = 'mysql:host=localhost;dbname=world;charset=utf8';
$pdo = new PDO($strConnect, 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>