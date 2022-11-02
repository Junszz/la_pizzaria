<!DOCTYPE html>
<html lang="en">
<head>
    <title>La Pizzaria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <div id="wrapper">
        <!-- Make 2 versions of wrapper: small & big screen -->
        <div class="nav-container">
            <nav>
                <div id="left-nav">
                    <a href="index.html"><img src="images/logo_v2.png" width="80" height="50" alt="logo"></a>
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
                    <li style="float:right;"><a href="cart.php"><img src="images/carts.png" width="30" height="30" alt="carts"></a></li>
                    <li style="float:right;"><a href="login.html">Login</a></li>
                </ul>
            </nav>
        </div>
        <br>
        <div>
            <div class="size-container">
                <div id="pizzasize">
                    <div class="size">
                        <img src="images/pizza (3).png" width="100px" height="100px">
                        <div class="text"><strong>PERSONAL <br> 6 inch</strong></div>
                    </div>
                    <div class="size">
                        <img src="images/pizza (2).png" width="150px" height="150px">
                        <div class="text"><strong>REGULAR <br> 9 inch</strong></div>
                    </div>
                    <div class="size">
                        <img src="images/pizza (2).png" width="200px" height="200px">
                        <div class="text"><strong>LARGE <br> 12 inch</strong></div>
                    </div>
                </div>
            </div>

            <!-- Create container here -->
            <div class="title">
                <h2><span id="orange">Original</span></h2>
            </div>
            <div class="container">
                <div class="food-banner">
                    <div>
                        <img src="images/menu/1.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Meatzza</h2>
                            <p class="single-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p>
                        </div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
            
                <div class="food-banner">
                    <div>
                        <img src="images/menu/2.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Quattro Fiesta</h2>
                            <p class="single-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=2?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/3.png"  alt="d1">
                    <div>
                        <div class="text" id="pizzaname">
                            <h2>Extravaganza</h2>
                            <p class="single-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=3?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <div>
                        <img src="images/menu/4.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Chicken Temptation</h2>
                            <p class="double-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p>
                        </div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=4?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <div>
                        <img src="images/menu/5.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Chili Beef</h2>
                            <p class="single-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=5?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
            
                <div class="food-banner">
                    <div>
                        <img src="images/menu/6.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Parmagiana Chicken</h2>
                            <p class="double-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=6?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <div>
                        <img src="images/menu/7.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Smoky Meatilicious</h2>
                            <p class="double-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=7?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <div>
                        <img src="images/menu/8.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Diavola Beef</h2>
                            <p class="single-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=8?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title"> 
                <h2><span id="orange">Special</span></h2>
            </div>
            <div class="container">
                <div class="food-banner">
                    <div>
                        <img src="images/menu/9.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Haiwaiian Paradise</h2>
                            <p class="double-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=9?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
            
                <div class="food-banner">
                    <div>
                        <img src="images/menu/10.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Classified Chicken</h2>
                            <p class="double-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=10?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <div>
                        <img src="images/menu/11.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Classic Pepperoni</h2>
                            <p class="double-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=11?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <div>
                        <img src="images/menu/12.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Smoky Pepperoni & Mushroom</h2>
                            <p class="triple-line">Made with pork, beef, salt and natural spices such a</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=12?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <div>
                        <img src="images/menu/13.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Simply Cheese</h2>
                            <p class="single-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=13?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
            
                <div class="food-banner">
                    <div>
                        <img src="images/menu/14.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>The Big BBQ</h2>
                            <p class="single-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=14?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <div>
                        <img src="images/menu/15.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Very Veggie</h2>
                            <p class="single-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=15?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <div>
                        <img src="images/menu/16.png"  alt="d1">
                        <div class="text" id="pizzaname">
                            <h2>Classy Chic</h2>
                            <p class="single-line">Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    </div>
                    <div class="price-container">
                        <div class="price">
                            <p class="float-left">$12.00</p>
                        </div>
                        <div class="button-col">
                            <a href="main.php?page=product&id=16?" class="addtocart">Add to cart</a>
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