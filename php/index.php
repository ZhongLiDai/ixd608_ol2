<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Homepage
    </title>
    <link rel="stylesheet" href="../gameshop/css/home.css">
</head>

<body>
    <?php include '../notes/meta.php'; ?>
    <?php include 'navbar.php'; ?>
    <?php include '../notes/templates.php'; ?>
    <div class="banner"></div>
    <h1 class="best">Best selling games</h3>
<!-- game gallery -->
    <div class="display-flex container">
    <figure class="figure product">
                <div class="flex-stretch">
                    <img src="../gameshop/image/image2.jpg" alt="">
                    <p class="game-title">Granblue Fantasy: Relink</p>
                </div>
                </figure>
    <figure class="figure product">
                <div class="flex-stretch">
                    <img src="../gameshop/image/image4.jpg" alt="">
                    <p class="game-title">Sekiro Shadow die Twice</p>
                </div>
                </figure>
    <figure class="figure product">
                <div class="flex-stretch">
                    <img src="../gameshop/image/image5.jpg" alt="">
                    <p class="game-title">The Binding of Issac</p>
                </div>
                </figure>
    <figure class="figure product">
                <div class="flex-stretch">
                    <img src="../gameshop/image/image6.jpg" alt="">
                    <p class="game-title">Lies of P</p>
                </div>
                </figure>
    <figure class="figure product">
                <div class="flex-stretch">
                    <img src="../gameshop/image/image7.jpg" alt="">
                    <p class="game-title">Destiny 2</p>
                </div>
                </figure>
   
          </div>      
   
        
        <div class="signup">
            <h2>Sign up to choose your games</h2>
            <input type="email"><button>sign up</button>
        </div>
        

<div class="container popular_items">
		
			<h2>Latest act</h2>
<?php recommendedCategory("act");?>
			<h2>Latest rpg</h2>
<?php recommendedCategory("rpg");?>

        
</body>

</html>
<?php include "../notes/footer.php"; ?>