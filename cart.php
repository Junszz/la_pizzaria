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

    // Fetch menu from database
    @ $db = new mysqli("localhost", "root", "", "lapizzaria");

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

    $query = "SELECT * FROM menu";
    $result = $db->query($query);
    if(!$result) {
        echo "Unable to fetch data";
    }

    // Store values in array
    $name = [];
    $type = [];
    $size = [];
    $qty = [];
    $price = [];
    while ($row = $result->fetch_assoc()) {
        $name[] = $row["foodname"];
        $type[] = $row["foodtype"];
        $size[] = $row["foodsize"];
        $qty[] = $row["qty"];
        $price[] = $row["price"];
    }

    $db->close();
?>

<head>
    <title>La Pizzaria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>
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
    <!-- $name = [];
    $type = [];
    $size = [];
    $qty = [];
    $price = []; -->
    
    <!-- Ordering cart implementation -->
    <h2>Ordering Cart</h2>
    <div class="main-container">
        <div class="basket-container">
            <table border="0">
                <tr>
                    <td>No</td>
                    <td>Item</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            <?php
                // Process cart data (Merge same product)
                $filtered = array_unique($_SESSION['cart']);

                // Split array keys and value
                $fooditm = array_keys($filtered);
                $foodcount = array_values($filtered);
            
                // Printing row by row
                $count = 1;
                for ($i=0; $i < count($fooditm); $i++){
                    echo "<tr>";
                    echo "<td>".$count."</td>";
                    echo "<td>".$name[$fooditm[$i]]."</td>";
                    echo "<td>".$price[$fooditm[$i]]."</td>";
                    echo "<td>".$foodcount[$i]."</td>";
                    echo "</tr>";
                    $count++;
                }
            ?>
            </table>
        </div>
        <div class="address-container">
            Coupon Container
        </div>
        <button>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a>
        </button>
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