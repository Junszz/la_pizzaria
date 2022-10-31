<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $db->prepare('SELECT * FROM menu WHERE foodid = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>La Pizzaria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">

    <!-- Page specific styling -->
    <style>
        .product-container {
            margin-bottom: 350px;
            width: 80%;
            height: auto;
        }  
        .product-container h1 {
            padding-bottom: 35px;
            font-size: 50px;
            color: black;
        }
        .product-container p {
            color: black;
        }
        .product-container .price {
            display: block;
            font-size: 22px;
            color: #999999;
        }
        .form {
            display: flex;
            flex-flow: column;
            margin: 40px 0;
        }
        .product-container .form input[type='number']{
            width: 400px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            color: #555555;
            border-radius: 5px;
        }
        .product-container .left-column {
            float:left;
            width: 50%;
            /* border: 1px solid red; */
            padding-left: 40px;
            padding-top: 100px;
        }
        .product-container .right-column {
            margin-left: 50%;
            padding-right: 5%;
            padding-top: 50px;
            /* border: 1px solid black; */
        }    
    </style>
</head>

<body>
    <div id="wrapper">
        <div class="nav-container">
            <!-- Make 2 versions of wrapper: small & big screen -->
            <nav>
                <div id="left-nav">
                    <a href="index.html"><img src="images/logo_v2.png" width="80" height="50" alt="logo"></a>
                </div>
                <ul>
                    <li class="dropdown">
                        <a href="main.php" class="dropbtn">Menu<span style="padding-left: 10px;"><i class="arrow down"></i></span></a>
                        <div class="dropdown-content">
                            <a href="main.php?page=pizza">Pizza</a>
                            <a href="main.php?page=pasta">Pasta</a>
                            <a href="main.php?page=sides">Sides</a>
                            <a href="main.php?page=beverages">Beverages</a>
                        </div>
                    </li>
                    <li><a href="hotDeals.html">Hot Deals</a></li>
                    <li><a class="active" href="aboutUs.html">About Us</a></li>
                    <li style="float:right;"><a href="main.php?page=cart"><img src="images/carts.png" width="30" height="30" alt="carts"></a></li>
                    <li style="float:right;"><a href="login.html">Login</a></li>
                </ul>   
            </nav>
        </div>

        <!-- Product Part goes here -->
        <div class="product-container">
            <div class="left-column">
                <img src='images/peperoni.jpg' width:'350' height='350'>
            </div>

            <div class="right-column">
                <h1><?=$product['foodname']?></h1>
                <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p> 
                <span class="price">$ <?=$product['price']?></span>

                <form action="main.php?page=cart" method="post">
                    <input type="number" name="quantity" value="1" placeholder="Quantity" required>
                    <input type="hidden" name="product_id" value="<?=$product['foodid']?>">
                    <input type="submit" value="Add To Cart">
                </form>
            </div>
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