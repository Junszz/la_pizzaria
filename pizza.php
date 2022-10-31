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
            flex: 0 0 16%;
            margin: 15px;
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            border-radius: 10px;
            height:auto;
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
        }

        .food-banner .text h2{
            color: #808080;
            font-size: 20px;
        }

        .food-banner .text p{
            font-size: 18px;
        }

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
            /*box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);*/
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
            left: 26%;
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
            <h2>Menu</h2>
            <!-- <div class="counter">
                <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span>
            </div> -->
            <div class="container">
                <div class="food-banner">
                    <img src="images/peperoni.jpg"  alt="d1">
                    <div class="text" id="pizzaname">
                        <h2>Peperoni</h2>
                        <p>Made with pork, beef, salt and natural spices such as paprika, rosemary and cinnamon.</p>
                        <p class="price">$12.00<p>
                    </div>
                    
                    <div class="choice">
                         <a href="main.php?page=product&id=1?" class="product">Add to cart</a>
                         <a href="main.php?page=product&id=2?" class="product">Add to cart</a>
                         <a href="main.php?page=product&id=3?" class="product">Add to cart</a>
                         <a href="main.php?page=product&id=4?" class="product">Add to cart</a>
                        
                    </div>
                </div>
            
                <div class="food-banner">
                    <div class="text" id="pizzaname">Haiwaiian Chicken</div>
                    <img src="images/haiwaiian chicken.jpg" width="150" height="180" alt="d1">
                    <div class="counter">
                        <span class="minus2">-</span>
                        <span class="num2">01</span>
                        <span class="plus2">+</span>
                    </div>
                </div>
                <div class="food-banner">
                    <div class="text" id="pizzaname">Cheesy 7</div>
                    <img src="images/cheezy 7.jpg" width="150" height="180" alt="d1">
                    <div class="counter">
                        <span class="minus3">-</span>
                        <span class="num3">01</span>
                        <span class="plus3">+</span>
                    </div>
                </div>
                <div class="food-banner">
                    <div class="text" id="pizzaname">Chili Crab</div>
                    <img src="images/chilicrab.jpg" width="150" height="180" alt="d1" style="width: 100%;">
                    <div class="counter">
                        <span class="minus4">-</span>
                        <span class="num4">01</span>
                        <span class="plus4">+</span>
                    </div>
                </div>
                <script src="js/plus_n_minus.js"></script>
            </form>
            </div>
    </div>
    <footer>
        <small><i>Copyright &copy; 2022 Meitong & JunZe</i></small>
    </footer>
</body>

</html>