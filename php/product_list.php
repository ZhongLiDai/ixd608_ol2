<?php 

include_once "../notes/functions.php";
include_once "../notes/templates.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Product List</title>

	<?php include "../notes/meta.php"; ?>


</head>
<body>
	
	<?php include "navbar.php"; ?>

	<div class="container">
		
			<h2>Product List</h2>



			<?php

			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `example`
				ORDER BY `price`
				LIMIT 12
				"
			);

			echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate');"<div>";


			?>

		
	</div>
	</div>


	



</body>
</html>