<!DOCTYPE html>
<html lang="en">
    
<?php
    // If the user clicked the add to cart button on the product page we can check for the form data
    if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
        // Set the post variables so we easily identify them, also make sure they are integer
        $product_id = (int)$_POST['product_id'];
        $quantity = (int)$_POST['quantity'];
        // Prepare the SQL statement, we basically are checking if the product exists in our databaser
        $stmt = $db->prepare('SELECT * FROM menu WHERE foodid = ?');
        $stmt->execute([$_POST['product_id']]);
        // Fetch the product from the database and return the result as an Array
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        // Check if the product exists (array is not empty)
        if ($product && $quantity > 0) {
            // Product exists in database, now we can create/update the session variable for the cart
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                if (array_key_exists($product_id, $_SESSION['cart'])) {
                    // Product exists in cart so just update the quanity
                    $_SESSION['cart'][$product_id] += $quantity;
                } else {
                    // Product is not in cart so add it
                    $_SESSION['cart'][$product_id] = $quantity;
                }
            } else {
                // There are no products in cart, this will add the first product to cart
                $_SESSION['cart'] = array($product_id => $quantity);
            }
        }
        // Prevent form resubmission...
        header('location: main.php?page=cart');
        exit;
    }

    // Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
    if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
        // Remove the product from the shopping cart
        unset($_SESSION['cart'][$_GET['remove']]);
    }

    // Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
    if (isset($_POST['update']) && isset($_SESSION['cart'])) {
        // Loop through the post data so we can update the quantities for every product in cart
        foreach ($_POST as $k => $v) {
            if (strpos($k, 'quantity') !== false && is_numeric($v)) {
                $id = str_replace('quantity-', '', $k);
                $quantity = (int)$v;
                // Always do checks and validation
                if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                    // Update new quantity
                    $_SESSION['cart'][$id] = $quantity;
                }
            }
        }
        // Prevent form resubmission...
        header('location: main.php?page=cart');
        exit;
    }

    // Send the user to the place order page if they click the Place Order button, also the cart should not be empty
    if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        header('Location: main.php?page=placeorder');
        exit;
    }

    // Check the session variable for products in cart
    $products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    $products = array();
    $subtotal = 0.00;
    // If there are products in cart
    if ($products_in_cart) {
        // There are products in the cart so we need to select those products from the database
        // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
        $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
        $stmt = $db->prepare('SELECT * FROM menu WHERE foodid IN (' . $array_to_question_marks . ')');
        // We only need the array keys, not the values, the keys are the id's of the products
        $stmt->execute(array_keys($products_in_cart));
        // Fetch the products from the database and return the result as an Array
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Calculate the subtotal
        foreach ($products as $product) {
            $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['foodid']];
        }
    }

    // Check login status
    $login_status = isset($_SESSION['user']) ? $_SESSION['user'] : array();
    if($login_status){
        $username = $_SESSION['user']['firstname'];
    }
    else{
        $username = 'Login';
    }
?>

<head>
    <title>La Pizzaria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="wrapper">
        <!-- Make 2 versions of wrapper: small & big screen -->
        <div class="nav-container">
                <nav>
                    <div id="left-nav">
                        <a href="index.html"><img src="images/logo_v2.png" width="85" height="60" alt="logo"></a>
                    </div>
                    <ul>
                        <li class="dropdown">
                            <a class="active" href="main.php?page=pizza" class="dropbtn">Pizza<span style="padding-left: 10px;"><i class="arrow down"></i></span></a>
                            <div class="dropdown-content">
                                <a href="main.php">Menu</a>
                                <a href="main.php?page=pasta">Pasta</a>
                                <a href="main.php?page=sides">Sides</a>
                                <a href="main.php?page=beverages">Beverages</a>
                            </div>
                        </li>
                        <li><a href="hotDeals.html">Hot Deals</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                        <li style="float:right;"><a href="main.php?page=cart"><img src="images/carts.png" width="30" height="30" alt="carts"></a></li>
                        <li class="login-bar">
                            <a class="login-btn" href="main.php?page=login"><?=$username?></a>
                            <div class="login-dropdown">
                                <form action='main.php?page=pizza' method='post'><input type="submit" value="Logout" name="logout"></form>
                            </div>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="cart content-wrapper">
            <div class='title'><h2>Shopping Cart</h2></div>
            <form action="main.php?page=cart" method="post">
                <table>
                    <thead>
                        <tr>
                            <td colspan="2">Product</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($products)): ?>
                        <tr>
                            <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                        </tr>
                        <?php else: ?>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td class="img">
                                <a href="main.php?page=product&id=<?=$product['foodid']?>">
                                    <img src="images/menu/<?=$product['foodid']?>.png" width="50" height="50" alt="<?=$product['foodname']?>">
                                </a>
                            </td>
                            <td>
                                <a href="main.php?page=product&id=<?=$product['foodid']?>"><?=$product['foodname']?></a>
                                <br>
                                <a href="main.php?page=cart&remove=<?=$product['foodid']?>" class="remove">Remove</a>
                            </td>
                            <td class="price">&dollar;<?=$product['price']?></td>
                            <td class="quantity">
                                <input type="number" name="quantity-<?=$product['foodid']?>" value="<?=$products_in_cart[$product['foodid']]?>" placeholder="Quantity" required>
                            </td>
                            <td class="price">&dollar;<?=$product['price'] * $products_in_cart[$product['foodid']]?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="subtotal">
                    <span class="text">Subtotal</span>
                    <span class="price">&dollar;<?=$subtotal?></span>
                </div>
                <div class="buttons">
                    <input type="submit" value="Update" name="update">
                    <input type="submit" value="Place Order" name="placeorder">
                </div>
            </form>
        </div>

            <!-- Footer Area -->
            <div class="footer-container">
                <div class="three-columns footer-padding">
                    <div class="row">
                        <div class="col">
                            <div class="logo-content">
                                <a href="index.html"><img src="images/logo_v2.png"  width=90px height=75px alt=""></a>
                            </div>
                            <div class="logo-content">
                                <p>Best pizza store in town.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col-content">
                                <h2>Contact Us</h2>
                            </div>
                            <div class="col-content">
                                <table>
                                    <tr>
                                        <td><img src="images/location.png" width="22px" height="22px"></td>
                                        <td>
                                            50 Nanyang Ave, Singapore 639798
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/contact.png" width="20px" height="20px"></td>
                                        <td>(+65) 89002643</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/email.png" width="22px" height="22px"></td>
                                        <td>
                                            order@lapizzaria.com
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col-content">
                                <h2>Opening Hours</h2>
                            </div>
                            <div class="col-content">
                                <table>
                                    <tr>
                                        <td>Monday.............Closed</td>
                                    </tr>
                                    <tr>
                                        <td>Tue-Fri.........10am - 12pm</td>
                                    </tr>
                                    <tr>
                                        <td>Sat-Sun..........8am - 11pm</td>
                                    </tr>
                                    <tr>
                                        <td>Holidays........10am - 12pm</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>