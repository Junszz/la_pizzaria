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
            width: 1050px;
            margin: 0 auto;
            display: flex;
            padding: 40px 0;
        }   
        .product-container h1 {
            font-size: 34px;
            font-weight: 600;
            margin: 0;
            padding: 20px 0 10px;
            color:black;
        }
        .product-container p {
            color: black;
            padding-bottom: 20px;
        }
        .product-container form {
            display: flex;
            flex-flow: column;
            margin: 25px 0 40px;
        }
        .product-container form input[type="number"]{
            width:400px;
            padding: 12px 10px;
            margin-bottom: 15px;
            color: #0066CC;
        }
        .product-container form label {
            padding-bottom: 10px;
        }
        .btn {
            text-decoration: none;
            background: #4b505c;
            border: 0;
            color: #fff;
            padding: 11px 16px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 4px;
            cursor: pointer;
        }

        .product-container .price {
            display: block;
            font-size: 22px;
            color: #999999;
        }
        .image-col {
            /* display:block; */
            padding: 20px 10px 0;
        }
        .product-images {
            height: 500px;
            width: 100%;
            align-items: center;
            justify-content: center;
            display:flex;
        }
        .product-description {
            height:500px;
            padding-left: 50px;
            flex: 1;
        }

        /*styling the counter box*/
        .counter{
            height: 30px;
            width: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(239, 145, 145);
            border-radius: 12px;
            /* box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); */
            /* margin: auto; */
        }

        .counter span{
            width: 30px;
            text-align: center;
            font-size: 20px;
            font-weight: 60;
            cursor: pointer;
        }

        .counter span num{
            font-size: 50px;
            border-right: 2px solid rgba(0,0,0,0.2);
            border-left: 2px solid rgba(0,0,0,0.2);
            pointer-events: none;
        }

        .counter1{
            height: 30px;
            width: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(234, 216, 216);
            border-radius: 12px;
            /*box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);*/
            margin: auto;
        }

        .counter1 span{
            width: 30px;
            text-align: center;
            font-size: 20px;
            font-weight: 60;
            cursor: pointer;
        }

        .counter1 span num{
            font-size: 50px;
            border-right: 2px solid rgba(0,0,0,0.2);
            border-left: 2px solid rgba(0,0,0,0.2);
            pointer-events: none;
        }

    </style>
</head>

<body>
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
                    <li style="float:right;"><a href="main.php?page=login">Login</a></li>
                </ul>   
            </nav>
        </div>

        <!-- Product Part goes here -->
        <div class="product-container">
            <div class="image-col">
                <div class="product-images">
                    <img src='images/menu/<?=$product['foodid']?>.png' width:'350' height='350'>
                </div>
            </div>

            <div class="product-description">
                <h1><?=$product['foodname']?></h1>
                <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p> 
                <span class="price">$ <?=$product['price']?></span>

                <form action="main.php?page=cart" method="post">
                    <label>Quantity</label>
                    <input type="number" name="quantity" value="1" placeholder="Quantity" required>
                    <input type="hidden" name="product_id" value="<?=$product['foodid']?>">
                    <input type="submit" value="Add To Cart" class='btn'>
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
</body>

</html>