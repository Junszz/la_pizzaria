<!DOCTYPE html>
<html lang="en">
    
<?php
    session_start();
    if (!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    if (isset($_GET['empty'])) {
        unset($_SESSION['cart']);
        header('location: ' . $_SERVER['PHP_SELF']);
        exit();
    }

?>

<head>
    <title>La Pizzaria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>
    <div id="wrapper">
        <!-- Make 2 versions of wrapper: small & big screen -->
        <nav>
            <div id="left-nav">
                <a href="index.html"><img src="images/logo.png" width="80" height="50" alt="logo"></a>
            </div>
            <ul>
                <li class="dropdown">
                    <a href="menu.php" class="dropbtn">Menu<span style="padding-left: 10px;"><i class="arrow down"></i></span></a>
                    <div class="dropdown-content">
                        <a href="menu.php">Pizza</a>
                        <a href="menu.php">Pasta</a>
                        <a href="menu.php">Sides</a>
                        <a href="menu.php">Beverages</a>
                    </div>
                </li>
                <li><a href="hotDeals.html">Hot Deals</a></li>
                <li><a href="aboutUs.html">About Us</a></li>
                <li style="float:right;"><a class="active" href="cart.html"><img src="images/carts.png" width="30" height="30" alt="carts"></a></li>
                <li style="float:right;"><a href="login.html">Login</a></li>
            </ul>   
        </nav>

        <!-- Remove after finish debugging -->
        <p>For debug purpose </p>
        <?php
                for($i=0; $i < count($_SESSION['cart']);$i++){
                    echo $_SESSION['cart'][$i]."\n";
                }
            ?>

        <button>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a>
        </button>
        
        <br>
        
        <!-- Ordering cart implementation -->
        <div class="basket">
            <h2>Ordering Cart</h2>
            <div class="basket-labels">
                <!-- Table header -->
                <ul>
                    <li class="product">Item</li>
                    <li class="price">Price</li>
                    <li class="quantity">Quntity</li>
                    <li class="subtotal">Subtotal</li>
                </ul>
            </div>

            <div class="basket-product">
                <div class="item">
                    <div class="product-image">
                        <img src="images/chilicrab.jpg" alt="sample-img" width="100" height="100">
                    </div>
                    <div class="product-details">
                        <h1>Product Name</h1>
                        <!-- Add in additional information if necessary -->
                    </div>
                    <div class="price"><span class="price">single_price</span></div>
                    <!-- Echo price & quantity  -->
                    <div class="quantity"><span class="quantity">quantity</span></div>
                    <!-- Echo subtotal -->
                    <div class="subtotal"><span class="subtotal">subtotal</span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section -->
    <footer class="footer-padding">
        <div class="footer-container">
            <div class="row">
                <div class="col">
                    <div class="logo-content">
                        <a href="index.html"><img src="images/logo.png"  width=50px height=50px alt=""></a>
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
                        <h2>Contact Us</h2>
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
    </footer>
    <!-- End of footer section -->
</body>

</html>