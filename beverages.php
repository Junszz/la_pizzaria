<?php
    $login_status = isset($_SESSION['user']) ? $_SESSION['user'] : array();
    if($login_status){
        $username = $_SESSION['user']['firstname'];
    }
    else{
        $username = 'Login';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>La Pizzaria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <style>
        .bev-banner {
            cursor: pointer;
            /* flex: 0 0 16%; */
            margin: 15px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            border-radius: 10px;
            height: 310px;
            width: 250px;
            background-color:white;
        }

        .bev-banner img, .hover-banner img {
            margin-top: 15px;
            width: 90%;
            border-radius: 10px;
            height: 150px;
        }

        .bev-banner .text {
            padding: 0 10%;
            text-align: center;
            height: 60%;
        }

        .bev-banner .text h2{
            color: #808080;
            font-size: 30px;
            padding: 10px 0 10px 0;
        }

        #single-line {
            padding-top: 25px;
        }

        .bev-banner .text p{
            font-size: 18px;
            color: black;
        }

        .bev-banner:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 5px 15px 0 rgba(0, 0, 0, 0.19);
        }

        .bev-banner:hover .addtocart {
            color: #131230;
            background: #ffb606;
            display: inline-block;
            animation: fade 500ms;
        }

        .single-line-bev {
            padding-top: 30px;
        }

        .double-line-bev {
            padding-top: 8px;
        }
    </style>
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
                        <a class="active" href="main.php?page=pasta" class="dropbtn">Pasta<span style="padding-left: 10px;"><i class="arrow down"></i></span></a>
                        <div class="dropdown-content">
                            <a href="main.php">Menu</a>
                            <a href="main.php?page=pizza">Pizza</a>
                            <a href="main.php?page=pasta">Pasta</a>
                            <a href="main.php?page=sides">Sides</a>
                        </div>
                    </li>
                    <li><a href="hotDeals.html">Hot Deals</a></li>
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li style="float:right;"><a href="main.php?page=cart"><img src="images/carts.png" width="30" height="30" alt="carts"></a></li>
                    <li class="login-bar">
                        <a class="login-btn" href="main.php?page=login"><?=$username?></a>
                        <div class="login-dropdown">
                            <a href="">Log Out</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <br>
        <!-- Create container here -->
        <div class="title">
            <h2>Beverages</h2>
        </div>
        <div class="container">
            <div class="bev-banner">
                <div>
                    <img src="images/menu/33.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2 id="single-line">Coca-Cola</h2>
                    </div>
                </div>
                <div class="price-container single-line-bev">
                    <div class="price">
                        <p class="float-left">$3.20</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=33?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
        
            <div class="bev-banner">
                <div>
                    <img src="images/menu/34.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Coca-Cola Zero Sugar</h2>
                    </div>
                </div>
                <div class="price-container">
                    <div class="price">
                        <p class="float-left">$3.20</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=34?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>

            <div class="bev-banner">
                <div>
                    <img src="images/menu/35.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2 id="single-line">Sprite</h2>
                    </div>
                </div>
                <div class="price-container single-line-bev">
                    <div class="price">
                        <p class="float-left">$3.20</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=35?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="bev-banner">
                <div>
                    <img src="images/menu/36.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>H&E Iced Lemon Tea</h2>
                    </div>
                </div>
                <div class="price-container">
                    <div class="price">
                        <p class="float-left">$3.40</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=36?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="bev-banner">
                <div>
                    <img src="images/menu/37.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>H&E Jasmine Green Tea</h2>
                    </div>
                </div>
                <div class="price-container">
                    <div class="price">
                        <p class="float-left">$3.40</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=37?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="bev-banner">
                <div>
                    <img src="images/menu/38.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2 id="single-line">Coca-Cola</h2>
                    </div>
                </div>
                <div class="price-container single-line-bev">
                    <div class="price">
                        <p class="float-left">$4.30</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=38?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="bev-banner">
                <div>
                    <img src="images/menu/39.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Coca-Cola Zero Sugar</h2>
                    </div>
                </div>
                <div class="price-container">
                    <div class="price">
                        <p class="float-left">$4.30</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=39?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="bev-banner">
                <div>
                    <img src="images/menu/40.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2 id="single-line">Sprite</h2>
                    </div>
                </div>
                <div class="price-container single-line-bev">
                    <div class="price">
                        <p class="float-left">$4.30</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=40?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="bev-banner">
                <div>
                    <img src="images/menu/41.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>H&E Iced Lemon Tea</h2>
                    </div>
                </div>
                <div class="price-container">
                    <div class="price">
                        <p class="float-left">$4.60</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=41?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="bev-banner">
                <div>
                    <img src="images/menu/42.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>H&E Jasmine Green Tea</h2>
                    </div>
                </div>
                <div class="price-container">
                    <div class="price">
                        <p class="float-left">$4.60</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=42?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="bev-banner">
                <div>
                    <img src="images/menu/43.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Mint Choco Chip Iced Frappe</h2>
                    </div>
                </div>
                <div class="price-container">
                    <div class="price">
                        <p class="float-left">$6.60</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=43?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="bev-banner">
                <div>
                    <img src="images/menu/44.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Rasperry Ripple Iced Cooler</h2>
                    </div>
                </div>
                <div class="price-container">
                    <div class="price">
                        <p class="float-left">$6.60</p>
                    </div>
                    <div class="button-col">
                        <a href="main.php?page=product&id=44?" class="addtocart">Add to cart</a>
                    </div>
                </div>
            </div>
            <script src="js/plus_n_minus.js"></script>
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