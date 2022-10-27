<!DOCTYPE html>
<html lang="en">

<?php //menu.php
    session_start();
    $count = array(0,1,2,3,4,5,6,7,8,9);

    if (!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }   
    if (isset($_GET['buy'])) {
        $_SESSION['cart'][] = $_GET['buy'];
        header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
        exit();
    }
?>

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

        .banner {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            margin: 15px;
            padding: 0px 0px 5px 0px;
            border-radius: 5px;
            min-width: 450px;
        }
        footer {
			font-size: 11px;
            text-align: center;
            background-color: #d1b38e;
            color: #000000;
            padding: 20px 10px 20px 0px;
        }

    </style>
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
                    <a class="active" href="menu.php" class="dropbtn">Menu<span style="padding-left: 10px;"><i class="arrow down"></i></span></a>
                    <div class="dropdown-content">
                        <a href="menu.html">Pizza</a>
                        <a href="menu.html">Pasta</a>
                        <a href="menu.html">Sides</a>
                        <a href="menu.html">Beverages</a>
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
            <h2>Menu</h2>
            
            <!-- Debug -->
            <button>
                <?php
                    echo "<p><a href='" .$_SERVER['PHP_SELF']. '?buy=0'."'>Buy</a></p>";
                ?>
            </button>
            <button>
                <?php
                    echo "<p><a href='" .$_SERVER['PHP_SELF']. '?buy=1'."'>Buy</a></p>";
                ?>
            </button>
            <button>
                <?php
                    echo "<p><a href='" .$_SERVER['PHP_SELF']. '?buy=2'."'>Buy</a></p>";
                ?>
            </button>
            <button>
                <?php
                    echo "<p><a href='" .$_SERVER['PHP_SELF']. '?buy=3'."'>Buy</a></p>";
                ?>
            </button>
            <button>
                <?php
                    echo "<p><a href='" .$_SERVER['PHP_SELF']. '?buy=4'."'>Buy</a></p>";
                ?>
            </button>
            <button>
                <?php
                    echo "<p><a href='" .$_SERVER['PHP_SELF']. '?buy=5'."'>Buy</a></p>";
                ?>
            </button>
            <button>
                <?php
                    echo "<p><a href='" .$_SERVER['PHP_SELF']. '?buy=6'."'>Buy</a></p>";
                ?>
            </button>

            <!-- Create container here -->
            <div class="container">
                <div class="banner">
                    <img src="images/peperoni.jpg" width="300" height="180" alt="d1" style="width: 100%;">
                    <div class="text">57% Off 1 Regular Cheesy Pizza</div>
                </div>
                <div class="banner">
                    <img src="images/haiwaiian chicken.jpg" width="300" height="180" alt="d1" style="width: 100%;">
                    <div class="text">57% Off 1 Regular Cheesy Pizza</div>
                </div>
                <div class="banner">
                    <img src="images/cheezy 7.jpg" width="300" height="180" alt="d1" style="width: 100%;">
                    <div class="text">57% Off 1 Regular Cheesy Pizza</div>
                </div>
                <div class="banner">
                    <img src="images/chilicrab.jpg" width="300" height="180" alt="d1" style="width: 100%;">
                    <div class="text">57% Off 1 Regular Cheesy Pizza</div>
                </div>
        </div>
    </div>
    <footer>
        <small><i>Copyright &copy; 2022 Meitong & JunZe</i></small>
    </footer>
</body>

</html>