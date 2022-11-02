<!DOCTYPE html>
<html lang="en">
<head>
    <title>La Pizzaria</title>
    <meta charset="utf-8">
    <style>
        #wrapper {
            /* background-color: #FFFFFF; */
            width: 80%;
            margin: auto;
            min-width: 800px;
            background-image: url("images/bg-02.jpg");
        }

        /* Create arrow symbol */
        .arrow {
            border: solid #000000;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
        }

        .down {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }
        /* End of creating arrow symbol */

        /* Navbar styling */
        nav {
            margin: auto;
            max-width: 1300px;
            overflow: hidden;
            width: 100%;
            background-color: white;
        }

        /* make image float on the left-side */
        #left-nav {
            margin: 10px 30px 15px 10px;
            float: left;
        }

        #right-nav {
            margin: 10px 30px 15px 10px;
            float: right;
        }

        nav ul {
            font-size: 20px;
            font-weight: 600;
            list-style-type: none;
            margin: 0;
            padding: 10px 0px 5px 0px;
            overflow: hidden;
            /* background-color: #F5F5F5; */
        }

        nav li {
            float: left;
        }

        /* Display menu horizontally */
        nav li a {
            display: block;
            color: #000000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: 500ms;
        }

        .active {
            background-color: #04AA6D;
        }

        /* Dropdown bar */
        .dropdown {
            float: left;
        }

        .dropdown .dropbtn {
            cursor: pointer;
            font-size: inherit;
            border: none;
            outline: none;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0px;
        }

        .dropdown:hover .dropbtn i {
            animation: rotate-up 500ms;
            transform: rotate(225deg);
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #FFFFFF;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Change the link color to grey on hover */
        nav li a:hover, .dropdown:hover .dropbtn, .dropbtn:focus{
            background-color: #F5F5F5;
        }

        /* Add a grey background color to dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #F5F5F5;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            animation: drop-in 500ms;
            display: block;
        }

        /* End of Navbar styling */

        /* Animation */
        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes drop-in {
            from {
                transform: translateY(-30%);
                opacity: 0;
            }
            to {
                transform: translateY(0%);
                opacity: 1;
            }
        }

        @keyframes rotate-up {
            from {
                transform:rotate(45deg);
            }
            to {
                transform: rotate(225deg);
            }
        }
        /* End of Animation */
        /* Container styling */
        .container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-bottom: 100px;
        }

        .food-banner {
            cursor: pointer;
            /* flex: 0 0 16%; */
            margin: 15px;
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            border-radius: 10px;
            height:auto;
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
        }

        .food-banner .text p{
            font-size: 18px;
        }

        .food-banner .price {
            padding: 0 10%;
            width:80%;
            display:flex;
        }

        .food-banner .price .addtocart {
            background-color: lightgrey;
            width: 60%;
            height: 25%;
            text-align: center;
            font-size: 18px;
            border: 1px solid green;
            margin: 20px 0px 5px 35px;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .food-banner .price .addtocart a {
            text-decoration: none;
        }

        .food-banner .price p{
            font-size: 20px;
            text-align: left;
            padding-left: 10px;
        }

        /* .food-banner .price a{
            font-size: 15px;
            text-align: center;
            text-decoration: none;
            margin-left: 30%;
        } */

        .price {
            color: purple;
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
            padding: 0px 10px 5px 0px;
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

        .choice{
            /* position: relative; */
            /* align-content: center; */
            /* float:none;
            width:35%;
            margin: 0;
            transform: translateY(-150%);
            display: none;
            z-index: 1; */
            /* display: none; */
            position:absolute;
            left: 56%;
            /* transform: translateY(-150%); */
            z-index: 1;
        }

        .counter1{
            margin: 0px 0px 5px 0px;
        }

        .addcart{
            position: absolute;
            top: 70px;
            left: 160px;
        }

        .food-banner:hover .choice {
            display: block;
            animation: fade 500ms;
        }

        #wrapper .title{
            font-size: 30px;
            text-align: center;
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
        <br>
        <div>
            <h3>Pizza size</h3>
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
                    <img src="images/menu/1.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Meatzza</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=1?">Add to cart</a>
                        </div>
                    </div>
                </div>
            
                <div class="food-banner">
                    <img src="images/menu/2.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Quattro Fiesta</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=2?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/3.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Extravaganza</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=3?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/4.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Chicken Temptation</h2>
                        <p>Made with pork, beef, salt and natural spices such a</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=4?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/5.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Chili Beef</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=5?">Add to cart</a>
                        </div>
                    </div>
                </div>
            
                <div class="food-banner">
                    <img src="images/menu/6.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Parmagiana Chicken</h2>
                        <p>Made with pork, beef, salt and natural spices such as a</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=6?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/7.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Smoky Meatilicious</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=7?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/8.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Diavola Beef</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=8?">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title"> 
                <h2>Special Pizza</h2>
            </div>
            <div class="container">
                <div class="food-banner">
                    <img src="images/menu/9.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Haiwaiian Paradise</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=9?">Add to cart</a>
                        </div>
                    </div>
                </div>
            
                <div class="food-banner">
                    <img src="images/menu/10.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Classified Chicken</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=10?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/11.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Classic Pepperoni</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=11?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/12.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Smoky Pepperoni & Mushroom</h2>
                        <p>Made with pork, beef, salt and natural spices such a</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=12?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/13.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Simply Cheese</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=13?">Add to cart</a>
                        </div>
                    </div>
                </div>
            
                <div class="food-banner">
                    <img src="images/menu/14.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>The Big BBQ</h2>
                        <p>Made with pork, beef, salt and natural spices such as a</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=14?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/15.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Very Veggie</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=15?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="food-banner">
                    <img src="images/menu/16.png"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Classy Chic</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p></div>
                    <div class="price">
                        <p>$12.00</p>
                        <div class="addtocart">
                            <a href="main.php?page=product&id=16?">Add to cart</a>
                        </div>
                    </div>
                </div>
                <script src="js/plus_n_minus.js"></script>
            </div>
    </div>
    <footer>
        <small><i>Copyright &copy; 2022 Meitong & JunZe</i></small>
    </footer>
</body>

</html>