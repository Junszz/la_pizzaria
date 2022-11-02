<!DOCTYPE html>
<html lang="en">
<head>
    <title>La Pizzaria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Container styling */
        .container {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: center;
            margin-bottom: 100px;
            max-width: 1200px;
        }

        .food-banner {
            cursor: pointer;
            /* flex: 0 0 16%; */
            margin: 15px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            border-radius: 10px;
            height: 380px;
            width: 250px;
            background-color:white;
        }

        .food-banner img, .hover-banner img {
            margin-top: 15px;
            width: 90%;
            border-radius: 10px;
            height: 150px;
        }
        
        .food-banner .text {
            padding: 0 10%;
            text-align: left;
            height: 60%;
        }

        .food-banner .text h2{
            color: #808080;
            font-size: 30px;
            padding-bottom: 5px;
        }

        .food-banner .text p{
            font-size: 18px;
            color: black;
        }

        /* Price text container */
        .price-container {
            width:100%;
            display:flex;
            padding-top: 10px;
        }

        .price {
            display:block;
            padding: 0 10%;
        }

        .price p{
            font-size: 23px;
            font-weight: 550;
            text-align: left;
            color: purple;
        }

        .button-col {
            padding: 0 5%;
            /* flex:1; */
        }

        .addtocart {
            background: none;
            color: white;
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid transparent;
            display: inline-block;
            padding: 5px 5px;
            text-decoration: none;
            border-radius: 5px;
            transition: 500ms;
        }

        .food-banner:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 5px 15px 0 rgba(0, 0, 0, 0.19);
        }

        .food-banner:hover .addtocart {
            color: #131230;
            background: #ffb606;
            display: inline-block;
            animation: fade 500ms;
        }

        footer {
			font-size: 11px;
            text-align: center;
            background-color: #d1b38e;
            color: #000000;
            padding: 20px 10px 20px 0px;
        }

        #pizzaname{
            font-size: 20px;
        }

        #pizzasize{
            margin: 0px 15px 5px 0px;
            padding: 0px 40px 50px 0px;
            min-width: 90px;
            min-height: 90px;
            display: flex;
            flex-wrap: wrap;
        }

        .size{
            padding: 0px 110px 0px 110px;
            text-align: center;
        }

        #sizepic{
            padding-bottom: 20px;
        }
        
        #sizepic2{
            padding-bottom: 10px;
        }

        #wrapper .title{
            font-size: 30px;
            text-align: center;
        }

        .single-line {
            padding-bottom: 35px;
        }

        .double-line {
            padding-bottom: 3px;
        }

        .triple-line {
            padding-bottom: 10px;
        }

    </style>
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
                        <a class="active" href="pizza.php" class="dropbtn">Pizza<span style="padding-left: 10px;"><i class="arrow down"></i></span></a>
                        <div class="dropdown-content">
                            <a href="menu.php">Menu</a>
                            <a href="pasta.php">Pasta</a>
                            <a href="sides.php">Sides</a>
                            <a href="beverages.php">Beverages</a>
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
            <h2 class="title">Pizza size</h2>
            <div id="pizzasize">
                <div class="size">
                    <img src="images/pizza (3).png" width="70px" height="70px" id="sizepic">
                    <div class="text"><strong>PERSONAL <br> 6 inch</strong></div>
                </div>
                <div class="size">
                    <img src="images/pizza (2).png" width="80px" height="80px" id="sizepic2">
                    <div class="text"><strong>REGULAR <br> 9 inch</strong></div>
                </div>
                <div class="size">
                    <img src="images/pizza (2).png" width="90px" height="90px">
                    <div class="text"><strong>LARGE <br> 12 inch</strong></div>
                </div>
            </div>

            <!-- Create container here -->
            <div class="title">
                <h2>Original Pizza</h2>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title"> 
                <h2>Special Pizza</h2>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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
                            <a href="main.php?page=product&id=1?" class="addtocart">Add to cart</a>
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