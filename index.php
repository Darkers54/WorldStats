<?php 

require('connect.php');
require('Functions.php');

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="styles.css" type="text/css">
 </head>
 <body>
 	<main>
 		<div>
 			<div id = "world" >
 			
 			</div id = "wdir">
 			<div >
 			
 			</div>
 			<br>
 			<select name="continent" >
 				<option value="-1"> Continent </option>
 				
 			</select>
 			<select name="lands" >
 				<option> Pays </option>
 			<?php 
 				//on appelle la fonction et donc l'operation foreach 
 				getCountryByName($pdo);
 			?>		
 			</select><!--<?php //print_r($nompays); verif EN DEHORS DE SELECT ?>-->
 			<br>
 			<div id = "countcountry">
 				
 			</div >
 			<div id = "countcity">
 				
 			</div>
 			<br>


 		</div>
 		
 	</main>
 	
 </body>
 </html>