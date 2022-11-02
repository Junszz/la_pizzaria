<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>La Pizzaria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <style>
        #wrapper .title1{
            color: #fff;
            font-family: "Playfair Display", serif;
            font-size: 55px;
            font-weight: 450;
            font-style: italic;
            text-align: center;
            margin-bottom: 50px;
        }
        /* End of Animation */
        /* Container styling */
        .food-banner1 {
            cursor: pointer;
            /* flex: 0 0 16%; */
            margin: 15px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            border-radius: 10px;
            height: 230px;
            width: 200px;
            background-color:white;
            margin-bottom: 10px;
        }
        .food-banner1 img, .hover-banner img {
            margin-top: 15px;
            width: 90%;
            border-radius: 10px;
            height: 150px;
        }

        .food-banner1 .text {
            padding: 0 10%;
            text-align: left;
            height: 60%;
            margin-top: 25px;
        }

        .food-banner1 .text h2{
            color: #808080;
            font-size: 20px;
            padding-bottom: 5px;
            text-align: center;
        }

        .food-banner1 .text p{
            font-size: 18px;
            color: black;
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
            /*box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);*/
            margin: auto;
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

        .choice{
            position: relative;
        }

        .counter1{
            position: absolute;
            top: 70px;
            left: 90px;
        }
        

    </style>
</head>

<body>
    <div id="wrapper">
        <!-- Make 2 versions of wrapper: small & big screen -->
        <nav>
            <div id="left-nav">
                <a href="index.html"><img src="images/logo_v2.png" width="80" height="50" alt="logo"></a>
            </div>
            <ul>
                <li class="dropdown">
                    <a class="active" href="main.php" class="dropbtn">Menu<span style="padding-left: 10px;"><i class="arrow down"></i></span></a>
                    <div class="dropdown-content">
                        <a href="main.php?page=pizza">Pizza</a>
                        <a href="main.php?page=pasta">Pasta</a>
                        <a href="main.php?page=sides">Sides</a>
                        <a href="main.php?page=beverages">Beverages</a>
                    </div>
                </li>
                <li><a href="hotDeals.html">Hot Deals</a></li>
                <li><a href="aboutUs.html">About Us</a></li>
                <li style="float:right;"><a href="main.php?page=cart"><img src="images/carts.png" width="30" height="30" alt="carts"></a></li>
                <li style="float:right;"><a href="main.php?page=login">Login</a></li>
            </ul>
        </nav>
        <br>
        <div>
            <!-- Create container here -->
            <div class="title1">
                <h2>Menu</h2>
            </div> 
            <div class="container">
                <div class="food-banner1">
                    <div>
                        <a href="main.php?page=pizza"><img src="images/pizza (1).png"  alt="d1"></a>
                        <div class="text" id="pizzaname">
                            <h2>Pizza</h2>
                        </div>
                    </div>
                </div>
                <div class="food-banner1">
                    <div>
                        <a href="main.php?page=pasta"><img src="images/pasta.png"  alt="d1"></a>
                        <div class="text" id="pizzaname">
                            <h2>Pasta</h2>
                        </div>
                    </div>
                </div>
                <div class="food-banner1">
                    <div>
                        <a href="main.php?page=sides"><img src="images/fried-chicken.png"  alt="d1"></a>
                        <div class="text" id="pizzaname">
                            <h2>Sides</h2>
                        </div>
                    </div>
                </div>
                <div class="food-banner1">
                    <div>
                        <a href="main.php?page=beverages"><img src="images/drinks.png"  alt="d1"></a>
                        <div class="text" id="pizzaname">
                            <h2>Beverages</h2>
                        </div>
                    </div>
                </div>
                <!-- <div class="banner">
                    <div class="text" id="pizzaname">Peperoni</div>
                    <div class="choice">
                        <img src="images/peperoni.jpg" width="150" height="180" alt="d1" style="width: 100%;">
                        <div class="counter1" >
                            <span class="minus1">-</span>
                            <span class="num1">01</span>
                            <span class="plus1">+</span>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <div class="text" id="pizzaname">Haiwaiian Chicken</div>
                    <img src="images/haiwaiian chicken.jpg" width="150" height="180" alt="d1" style="width: 100%;">
                    <div class="counter">
                        <span class="minus2">-</span>
                        <span class="num2">01</span>
                        <span class="plus2">+</span>
                    </div>
                </div>
                <div class="banner">
                    <div class="text" id="pizzaname">Cheesy 7</div>
                    <img src="images/cheezy 7.jpg" width="150" height="180" alt="d1" style="width: 100%;">
                    <div class="counter">
                        <span class="minus3">-</span>
                        <span class="num3">01</span>
                        <span class="plus3">+</span>
                    </div>
                </div>
                <div class="banner">
                    <div class="text" id="pizzaname">Chili Crab</div>
                    <img src="images/chilicrab.jpg" width="150" height="180" alt="d1" style="width: 100%;">
                    <div class="counter">
                        <span class="minus4">-</span>
                        <span class="num4">01</span>
                        <span class="plus4">+</span>
                    </div>
                </div>
                <script src="js/plus_n_minus.js"></script> 
        </form>-->
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