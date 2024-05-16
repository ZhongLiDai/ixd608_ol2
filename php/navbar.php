<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <?php include_once '../notes/meta.php'; ?>
    <?php include_once '../notes/functions.php'; ?>
    
</head>
<body>
    <input type="checkbox" id="menu" class="hidden">
    <header class="navbar">
    <div class="container display-flex">
        <div class="flex-stretch"></div>
        <div class="flex-none menu-button"></div>
        <label for="menu" class="label1">&equiv;</label>
        <nav class="nav nav-flex flex-none">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product_list.php">Game</a></li>
                <li><a href="product_cart.php"><span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span></a></li>
                <li><a href="aboutus.php">About us</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>