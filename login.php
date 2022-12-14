<?php
    if (isset($_POST['submit'])) {
        // echo "is true";
        if (isset($_POST['email']) && isset($_POST['password']))
        {
            // if the user has just tried to log in
            $email = $_POST['email'];
            $password = $_POST['password'];

            $password = md5($password);

            // echo $email;
            echo $password;

            $query = 'select * from member '
                    ."where email='$email' "
                    ." and pwd='$password'";
            // // echo "<br>" .$query. "<br>";
            $stmt = $db->query($query);
            $row = $stmt->fetch();
            if (!$row)
            {
                exit("User doesn't exist! Please proceed to sign up");
                echo "Failed";
            }
            else {
                // if they are in the database register the user id
                $_SESSION['user'] = $row;    
                echo "Login successful!";
            }
        // Prevent form submission
            header('location: main.php?page=login');
            exit;
        }
    }

    $login_status = isset($_SESSION['user']) ? $_SESSION['user'] : array();
    if($login_status){
        $username = $_SESSION['user']['firstname'];
    }
    else{
        $username = 'Login';
    }

    if (isset($_POST['logout']) && isset($_SESSION['cart'])) {
        // logged out and removed user data
        $_SESSION['user'] = array();
        
        // Prevent form submission
        header('location: main.php?page=login');
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>La Pizzaria</title>
    <script type = "text/javascript"  src = "js/validator.js" ></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            margin-bottom: 230px;
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
        #contactno{
            margin: 0px 0px 15px 50px;
            display: block;
            width: 150px;
            height: 30px;
        }
        #cb{
            margin: 5px 10px 0px 0px;
        }
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

        .button1{
            text-align: center;
            width: 150px;
            margin-right: 550px;
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
        .checkbox-container .others{
            align-items: center;
        }
        #others{
            font-size: 50px;
            text-align: center;
            margin-bottom: 15px;

        }
        #others h3{
            font-size: 20px;
            text-align: center;
            margin-bottom: 15px;
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
                        <a href="main.php" class="dropbtn">Menu<span style="padding-left: 10px;"><i class="arrow down"></i></span></a>
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
                    <li class="login-bar">
                        <a class="login-btn" href="main.php?page=login"><?=$username?></a>
                        <div class="login-dropdown">
                            <form action='main.php?page=login' method='post'><input type="submit" value="Logout" name="logout"></form>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="login-container">
                <div class="details">
                    <a class="login-active" href="main.php?page=login">Login</a>
                    <a href="main.php?page=signup">Signup</a>
                </div>
            </div>

            <div class="form-container">
                <form action="main.php?page=login" method="post">
                    <label for="email">*Email Address</label>
                        <input type="email" name="email" id="email" required>
                    <label for="password">*Password</label>
                        <input type="password" name='password' id="password" required>
                <script type = "text/javascript"  src = "js/validator_r.js" ></script>
            </div>

            <div class="checkbox-container">
                <div id="others">
                    <h3>Other login methods</h3>
                    <a href="www.gmail.com"><img src="images/google.png" width="40" height="40" alt="logo"></a>
                    <a href="www.facebook.com"><img src="images/facebook.png" width="40" height="40" alt="logo"></a>
                    <a href="www.icloud.com"><img src="images/apple.png" width="40" height="40" alt="logo"></a>
                </div>
            </div>

            <input type="submit" value="Login/Signup" name='submit' class="button1"></form>


            
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