<?php // register.php
    if (isset($_POST['submit'])) {
        if (empty($_POST['firstname']) || empty ($_POST['lastname']) || empty ($_POST['contact']) || empty ($_POST['email']) || empty ($_POST['password']) || empty ($_POST['address']) ) {
        echo "All records to be filled in";
        exit;
        }
        else{
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
        
            $password = md5($password);
            // echo $password;
        
            $sql = "INSERT INTO member VALUES 
                    ('null','$firstname','$lastname','$contact','$email','$password', '$address')";
            echo "<br>". $sql. "<br>";
            $result = $db->query($sql);
        
            if (!$result) {
                echo "Your query failed.";
            }
            else{
                echo "Welcome ". $firstname . ". You are now registered";
                // Prevent form submission
                // header('location: main.php?page=login');
                // exit;
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>La Pizzaria</title>
    <script type = "text/javascript"  src = "js/validator_signup.js" ></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 50px;
            width: 65%;
            /* border: 1px solid black; */
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
        }
        .details {
            margin:auto;
            display:flex;
        }
        .details a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            transition: 500ms;
            color: #fff;
            font-family: "Playfair Display", serif;
            font-size: 45px;
            font-weight: 600;
        }
        .details .login-active {
            color: #A9A9A9;
        }
        .details a:hover .white-text {
            animation: fade 500ms;
            color: #A9A9A9;
        }
        #firstname {
            margin: 0px 0px 15px 50px;
            display: block;
            width: 150px;
            height: 30px;
        }
        #lastname {
            margin: 0px 0px 15px 50px;
            display: block;
            width: 150px;
            height: 30px;
        }
        #email {
            margin: 0px 0px 15px 50px;
            display: block;
            width: 400px;
            height: 30px;
        }
        #password {
            margin: 0px 0px 15px 50px;
            display: block;
            width: 400px;
            height: 30px;
        }
        #delivery {
            margin: 0px 0px 15px 50px;
            display: block;
            width: 400px;
            height: 30px;
        }
        #contactno{
            margin: 0px 0px 15px 50px;
            display: block;
            width: 150px;
            height: 30px;
        }
        #cb{
            margin: 5px 10px 0px 0px;
        }
        /* #form-container .lastname{
            margin: 5px 0px 15px 100px;
            display: block;
            width: 200px;
            height: 30px;
        } */
        #choices{
            font-size: 20px;
            font-weight: 600;
            list-style-type: none;
            margin: 0;
            margin-left: 400px;
            padding: 10px 0px 5px 0px;
            overflow: hidden;
            display: block;
            color: #000000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            margin-bottom: 15px;
        }
        
        #terms{
            width: 15px;
            height: 15px;
        }
        #promo{
            width: 15px;
            height: 15px;
        }

        #button{
            text-align: center;
            width: 150px;
            margin-right: 70px;
            margin-bottom: 10px;
        }

        #join{
            text-align: center;
            font-size: 20px;
        }

        .check .cb{
            float: left; 
            margin-top: 5px; 
            padding-left: 0px;
        }
        #checkbox-container .button{
            float:center;
        }
        .nav-container {
            width:100%;
            display:flex;
            padding-top: 10px;
        }
        .login-container {
            width:100%;
            display:flex;
            padding-top: 10px;
        }
        .form-container {
            width:100%;
            display:flex;
            padding-top: 10px;
        }
        .checkbox-container {
            width:100%;
            display:flex;
            padding-top: 10px;
        }
        .form-container label{
            padding-left: 40px;
        }
        .checkbox-container .check2 {
            align-items: center;
        }
        #button{
           margin-left: 70px;
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
                        <a href="pizza.php" class="dropbtn">Pizza<span style="padding-left: 10px;"><i class="arrow down"></i></span></a>
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
                    <li style="float:right;"><a class="active" href="login.html">Login</a></li>
                </ul>
            </nav>
        </div>

        <div class="container">
            <div class="login-container">
                <div class="details">
                    <a href="main.php?page=login">Login</a>
                    <a class="login-active" href="main.php?page=signup">Signup</a>
                </div>
            </div>

            <div class="form-container">
                <form action="main.php?page=signup" method="post">
                    <label >*First Name</label>
                        <input type="text" id="firstname" name='firstname' required>
                    <label>*Last Name</label>
                        <input type="text" id="lastname" name='lastname' required>
                    <label>*Contact Number (+65)</label>
                        <input type="text" id="contactno" name='contact' required>
                    <label>*Email Address</label>
                        <input type="email" id="email" name='email' required>
                    <label>*Password</label>
                        <input type="password" id="password" name='password' required>
                    <label>*Delivery Address</label>
                        <input type="text" id="delivery" name='address' required>
                    <script type = "text/javascript"  src = "js/validator_signup_r.js" ></script>
            </div>
            <div class="checkbox-container">
                <div id="check2">
                    <input id="cb" type="checkbox" required>Agree to terms & conditions <br>
                    <input id="cb" type="checkbox">Receive marketing & promotion emails
                    <h3 id="join">Join us as member now and enjoy<br>exclusive perks!</h3><br>
                    <input type="submit" value="Login/Signup" id="button" name='submit'></form>
                </div>
            </div>
        </div>
        <div class="footer-padding"></div>
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