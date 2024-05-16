<?php 

include_once "../notes/functions.php";
include_once "../notes/templates.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta charset="UTF-8">

	<title>Product List</title>
	<script src="../js/functions.js"></script>
	<script src="../js/templates.js"></script>
	<script src="../js/product_list.js"></script>
	<?php include "../notes/meta.php"; ?>


</head>
<body>
	
	<?php include "navbar.php"; ?>

	<div class="container">
		
			<h2>Product List</h2>

<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Games">
			</form>
			<div class="form-control display-flex flex-wrap">
            <div class="flex-none">
                <button data-filter="category" data-value="" type="button" class="form-button">All</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="fps" type="button" class="form-button">FPS Game</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="act" type="button" class="form-button">ACT Game</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="rouge" type="button" class="form-button">Rougelike</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="rpg" type="button" class="form-button">RPG Game</button>
				 <div class="flex-none">
				<select class="js-sort">
						<option value="1">Most expensive</option> 
						<option value="2">Most Cheap</option> 
				</select>
				</div>
            </div>
		</div>
		 
		 

<div class='productlist grid gap'></div>
			

		
	</div>
	</div>


	



</body>
</html>