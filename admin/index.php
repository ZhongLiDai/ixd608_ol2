
    <?php include "../notes/meta.php"; ?>


<?php

include "../notes/functions.php";

$empty_product = (object) [
    "name"=>"stellaris",
    "price"=>"30.00",
    "rating"=>"9",
    "category"=>"act",
    "description"=>"Lies of P is a thrilling soulslike that takes the story of Pinocchio, turns it on its head, and sets it against the darkly elegant backdrop of the Belle Epoque era.",
    "thumbnail"=>"game_stellaris_thumb.jpg",
];


//logic
try {
	$conn = makePDOConn();
	switch ($_GET['action']) {
		case "create":
    // Retrieve form data
    $productName = $_POST['product-name'];
    $productPrice = $_POST['product-price'];
    $productRating = $_POST['product-rating'];
    $productCategory = $_POST['product-category'];
    $productDescription = $_POST['product-description'];
    $productThumbnail = $_POST['product-thumbnail']; // Assuming you're storing thumbnail image paths in the database

    // Prepare SQL query to insert new product details into the database
    $statement = $conn->prepare("INSERT INTO `example` (`name`, `price`, `rating`, `category`, `description`, `thumbnail`) VALUES (?, ?, ?, ?, ?, ?)");
    $statement->execute([$productName, $productPrice, $productRating, $productCategory, $productDescription, $productThumbnail]);

    // Redirect to the product list page after successful insertion
    header("location:{$_SERVER['PHP_SELF']}");
    break;
    
    case "update":
    // Retrieve form data
    $productId = $_GET['id']; // Get the product ID from the URL
    $productName = $_POST['product-name'];
    $productPrice = $_POST['product-price'];
    $productRating = $_POST['product-rating'];
    $productCategory = $_POST['product-category'];
    $productDescription = $_POST['product-description'];
    $productThumbnail = $_POST['product-thumbnail']; // Assuming you're storing thumbnail image paths in the database

    // Prepare SQL query to update the existing product details in the database
    $statement = $conn->prepare("UPDATE `example` SET `name`=?, `price`=?, `rating`=?, `category`=?, `description`=?, `thumbnail`=? WHERE `id`=?");
    $statement->execute([$productName, $productPrice, $productRating, $productCategory, $productDescription, $productThumbnail, $productId]);

    // Redirect to the product list page after successful update
    header("location:{$_SERVER['PHP_SELF']}");
    break;
		
    case "delete":
			$statement = $conn->prepare("DELETE FROM `example` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
} catch (PDOException $e) {
	die($e->getMessage());
}




//templates
function productListItem($r,$o) {
    return $r.<<<HTML
    <div class="card soft">
    <div class="display-flex">
        <div class="flex-none images-thumbs"><img src='../gameshop/image/$o->thumbnail'></div>
        <div class="flex-stretch" style="padding:1em">$o->name</div>
        <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
    </div>
    </div>
    HTML;
}

function showProductPage($o) {
      $id= $_GET['id'];
    $addoredit = $id == "new" ? "Add" : "Edit";
    $createorupdate = $id == "new" ? "create" : "update";
    $images = array_reduce(explode(",", $o->thumbnail),function($r,$o){return $r."<img src='img/$o'>";});

    // heredoc
    $display = <<<HTML
    <div>
        <h2>$o->name</h2>
        <div class="form-control">
            <label class="form-label">Price</label>
            <span>&dollar;$o->price</span>
        </div>
        <div class="form-control">
            <label class="form-label">Rating</label>
            <span>$o->rating</span>
        </div>
        <div class="form-control">
            <label class="form-label">Category</label>
            <span>$o->category</span>
        </div>
        <div class="form-control">
            <label class="form-label">Description</label>
            <span>$o->description</span>
        </div>
        <div class="form-control">
            <label class="form-label">Images</label>
            <span class="images-thumbs"><img src='../gameshop/image/$o->thumbnail'></span>
        </div>
    </div>
    HTML;

    $form = <<<HTML
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
        <h2>$addoredit Product</h2>
        <div class="form-control">
            <label class="form-label" for="product-name">Name</label>
            <input class="form-input" name="product-name" id="product-name" type="text" value="$o->name" placeholder="Product Name"><br>
        </div>
        <div class="form-control">
            <label class="form-label" for="product-price">Price</label>
            <input class="form-input" name="product-price" id="product-price" type="Number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Product Price"><br>
        </div>
        <div class="form-control">
            <label class="form-label" for="product-rating">Rating</label>
            <input class="form-input" name="product-rating" id="product-rating" type="Number" min="0" max="1000" step="1" value="$o->rating" placeholder="Product Rating"><br>
        </div>
        <div class="form-control">
            <label class="form-label" for="product-category">Category</label>
            <input class="form-input" name="product-category" id="product-category" type="text" value="$o->category" placeholder="Product Category"><br>
        </div>
        <div class="form-control">
            <label class="form-label" for="product-description">Description</label>
            <input class="form-input" name="product-description" id="product-description" type="text" value="$o->description" placeholder="Product description"><br>
        </div>
        <div class="form-control">
            <label class="form-label" for="product-thumbnail">Images</label>
            <input class="form-input" name="product-thumbnail" id="product-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter the Product Image">
        </div>
        <div class="form-control">
            <input type="submit" class="form-button" value="Save">
        </div>
    </form>
    HTML;

    $output = $id == "new" ? "<div class='card soft'>$form</div>" : 
        "<div class='grid gap'>
            <div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
            <div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
        </div>
        ";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<div class="card soft">
<nav class="display-flex">
    <div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
    <div class="flex-none">$delete</div>
</nav>
</div>
$output
HTML;

}
    


?>


<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <title>Product Admin Page</title>

    <?php include "../notes/meta.php"; ?>

   </head>
<body>
    
<header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
            <h1>Product Admin</h1>
        </div>
        <div class="flex-stretch"></div>
            <nav class="flex-none nav">
                <ul class="container display-flex">
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

    <div class="container">

        <?php

        if(isset($_GET['id'])) {
            showProductPage(
                $_GET['id']=="new" ?
                    $empty_product : 
                    makeQuery(makeConn(),"SELECT * FROM `example` WHERE `id`=".$_GET['id'])[0]
                );
        // showProductPage();
        }  else {

            ?>
            <h2>Product List</h2>
      
            
            <?php

            $result = makeQuery(makeConn(),"SELECT * FROM `example`");

            echo array_reduce($result,'productListItem');

            ?>


        <?php } ?>
        

    </div>

</body>


        
