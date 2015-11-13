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
 	<article>
 	<form action="#" method="get" accept-charset="utf-8" id="myform">
 		<select name="continent" id="conti" >
 			<option value="-1">Continent</option>
				<?php 
					$continent = getContinentByName($pdo);
					foreach($continent as $ct) : ?>
						<option value="<?php echo $ct['Continent']; ?>">
						<?php echo $ct['Continent']; ?>
						</option>
					<?php endforeach; ?>
 		</select>
 	</form>

 		<div>
 			<?php ?>

 		</div>
 	</article>
<!-- JQUERY -->
 	<script>
 		$('#conti').change(function(){
 			$('#myform').submit();
 		});
 	</script>
 </body>
 </html>