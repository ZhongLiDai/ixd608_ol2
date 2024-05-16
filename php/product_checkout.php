<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <?php include '../notes/meta.php'; ?>
    <?php include 'navbar.php'; ?>
    <?php include '../notes/templates.php'; ?>

    <div class="card soft">
        <h2>Item Review</h2>
        <div class="card-section">
            <?php 
            // Ensure $cart is an array
            if (!isset($cart) || !is_array($cart)) {
                $cart = [];
            }

            echo array_reduce($cart, function($r, $o) {
                $totalfixed = number_format($o->total, 2, '.', '');
                return $r . "<div class='display-flex'>
                <div class='flex-stretch'>$o->name</div>
                <div class='flex-none'>&dollar;$totalfixed</div>
                </div>";
            }, ""); 
            ?>
        </div>
        <?= cartTotals(); ?>
    </div>

    <div class="card soft">
        <h2>Address</h2>
        <form>
            <div class="form-control">
                <label class="form-label">Street</label>
                <input type="text" placeholder="Text" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label">City</label>
                <input type="text" placeholder="City" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label">State</label>
                <input type="text" placeholder="State" class="form-input">
            </div>
            <div class="form-control display-flex flex-align-center">
                <div class="flex-stretch" style="margin-right: 1em;">
                    <label class="form-label">Zip Code</label>
                    <input type="text" placeholder="Zip Code" class="form-input">
                </div>
                <div class="flex-stretch">
                    <label class="form-label">Country</label>
                    <input type="text" placeholder="Country" class="form-input">
                </div>
            </div>
        </form>

        <h2>Credit Card</h2>
        <form>
            <div class="form-control">
                <label class="form-label">Full name</label>
                <input type="text" placeholder="Full name" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label">Card number</label>
                <input type="text" placeholder="Card number" class="form-input">
            </div>
            <div class="form-control">
                <label class="form-label">Expiration</label>
                <input type="text" placeholder="Expiration" class="form-input">
            </div>
            <div class="form-control display-flex flex-align-center">
                <div class="flex-stretch" style="margin-right: 1em;">
                    <label class="form-label">CVV</label>
                    <input type="text" placeholder="CVV" class="form-input">
                </div>
                <div class="flex-stretch">
                    <label class="form-label">Zip Code</label>
                    <input type="text" placeholder="Zip Code" class="form-input">
                </div>
            </div>
            <div class="form-control">
                <a href="product_confirmation.php" class="form-button">Complete Checkout</a>
            </div>
        </form>
    </div>
</body>
</html>
