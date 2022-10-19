<!DOCTYPE html>
<html lang="en">

<!-- Fetch price once at start -->
<?php
    @ $db = new mysqli("localhost", "root", "", "javajam");

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

    $query = "SELECT coffeeid, coffeeprice FROM coffee";
    $result = $db->query($query);
    if(!$result) {
        echo "Unable to fetch data";
    }
    $price = [];
    while ($row = $result->fetch_assoc()) {
        $price[] = $row["coffeeprice"];
    }

    $query = "SELECT coffeeid, coffeeqty FROM quantity";
    $result = $db->query($query);
    if(!$result) {
        echo "Unable to fetch data";
    }
    $quantity = [];
    while ($row = $result->fetch_assoc()) {
        $quantity[] = $row["coffeeqty"];
    }

    // Accum value from database
    $javaqty = $quantity[0];
    $cafeSqty = $quantity[1];
    $cafeDqty = $quantity[2];
    $cappSqty = $quantity[3];
    $cappDqty = $quantity[4];

    // echo("Qty from database: ".$javaqty.','.$cafeSqty.','.$cafeDqty.','.$cappSqty.','.$cappDqty."<br>");

    if (isset($_POST['submit'])){
        if(isset($_POST['javaqty'])){$newjava = $_POST['javaqty'];} else{$newjava = 0;}
        if(isset($_POST['cafeSqty'])){$newcafe_single = $_POST['cafeSqty'];} else{$newcafe_single = 0;}
        if(isset($_POST['cafeDqty'])){$newcafe_double = $_POST['cafeDqty'];} else{$newcafe_double = 0;}
        if(isset($_POST['cappSqty'])){$newcapp_single = $_POST['cappSqty'];}else{$newcapp_single = 0;}
        if(isset($_POST['cappDqty'])){$newcapp_double = $_POST['cappDqty'];}else{$newcapp_double = 0;}

        // echo("Qty from form: ".$newjava.','.$newcafe_single.','.$newcafe_double.','.$newcapp_single.','.$newcapp_double."<br>");

        // perform addition here
        $totaljava = number_format((int)($newjava + $javaqty));
        $totalcafe_single = number_format((int)($newcafe_single + $cafeSqty));
        $totalcafe_double = number_format((int)($newcafe_double + $cafeDqty));
        $totalcapp_single = number_format((int)($newcapp_single + $cappSqty));
        $totalcapp_double = number_format((int)($newcapp_double + $cappDqty));

        // echo("New Qty: ".$totaljava.','.$totalcafe_single.','.$totalcafe_double.','.$totalcapp_single.','.$totalcapp_double."<br>");

        try{
        $result = $db->query("update quantity set coffeeqty = ".$totaljava." where coffeeid = 1;");
        $result = $db->query("update quantity set coffeeqty = ".$totalcafe_single." where coffeeid = 2;");
        $result = $db->query("update quantity set coffeeqty = ".$totalcafe_double." where coffeeid = 3;");
        $result = $db->query("update quantity set coffeeqty = ".$totalcapp_single." where coffeeid = 4;\n");
        $result = $db->query("update quantity set coffeeqty = ".$totalcapp_double." where coffeeid = 5;\n");
        }
        //catch exception
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

        if(!$result) {
            echo "Update results failed";
        }

        // Redirect to this page.
        header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
        exit();
    }

    $db->close();
?>

<head>
    <title>Case Study 4</title>
    <script type = "text/javascript"  src = "javascript/menu.js" >
    </script>
    <meta charset="utf-8">
    <style>
        a:link {
            color: #704515;
        }

        a:visited {
            color: #bea98e;
        }

        table {
            margin: auto;
            width: 500px;
            height: 250px;
        }

        td {
            padding: 5px;
            font-family: Arial, sans-serif;
            border-style: none;
            text-align: left;
        }

        td strong {
            color: #2d1929;
        }
        
        th {
            text-align: center;
            padding: 5px;
            font-family: Arial, sans-serif;
            border-style: none;
            color: #2d1929;
        }

        tr:nth-of-type(odd) {
            background-color: #d1b38e;
        }

        body {
            font-family: Verdana, Arial, sans-serif;
            background-color: #e7e0ad;
        }

        #wrapper {
            background-color: #e2d1b2;
            width: 80%;
            margin: auto;
            min-width: 800px;
        }

        #leftcolumn {
            float: left;
            width: 150px;
        }

        #leftcolumn li{
            padding-bottom: 7px;
        }

        #rightcolumn {
            margin-left: 155px;
            background-color: #f5f5dd;
            color: #704515;
        }

        header {
            text-align: center;
            background-color: #d1b38e;
            color: #704515;
            font-size: 150%;
            padding: 10px 10px 10px 0px;
        }

        h2 {
            color: #2d1929;
        }

        .content {
            padding: 5px 30px 50px 40px;
            font-size: 100%;
        }

        #total {
            text-align: right;
            padding: 25px 5px 0px 0px;
        }

        #floatright {
            margin: 0px 200px 40px 30px;
            float: left;
        }

        footer {
            text-align: center;
            background-color: #d1b38e;
            padding: 15px 5px 15px 0;
        }

        #explanation {
            list-style-image: url(smaller-coffee-cup.png);
        }

        #email-link {
            color: #704515;
        }

        ul {
            list-style-type: none;
        }

        nav a {
            text-decoration: none;
        }

        nav ul {
            color: #7c5b3f;
            list-style-type: none;
            text-align: left;
            padding-left: 40px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <header>
            <img src="images/header.png" width="450" height="80" id="floatupper" alt="Header">
        </header>
        <div id="leftcolumn">
            <nav>
                <ul>
                    <li><a href="index.html"><strong>Home</strong></a></li>
                    <li><a href="menu.php"><strong>Menu</strong></a></li>
                    <li><a href="music.html"><strong>Music</strong></a></li>
                    <li><a href="jobs.html"><strong>Jobs</strong></a></li>
                    <li><a href="price_update.php"><strong>Product Price Update</strong></a></li>
                    <li><a href="salesReport.php"><strong>Daily Sales Report</strong></a></li>
                </ul>
        </div>
        <div id="rightcolumn">
            <div class="content">
                <h2>Coffee at JavaJam</h2>
                <form method="post" action="menu.php" id="form">
                    <table border="0">
                        <tr>
                            <th>Just Java</th>
                            <td>Regular house blend, decaffeinated coffee, or flavor of the day.
                                <br>Endless Cup $ <?php echo $price[0];?>
                            </td>
                            <!-- text box to enter number -->
                            <!-- update the subtotal once javaqty had been changed -->
                            <td align="center"><input type="text" id="javaqty" name="javaqty" onchange="java_subtotal(<?php echo $price[0];?>)"
                                size="3" maxlength="3"></td>
                            <!-- print computed values -->
                            <td id="output1">Subtotal:<br>$0</td> 
                        </tr>
                        <tr>
                            <th>Cafe au Lait</th>
                            <td>House blended coffee infused into a smooth, steamed milk.
                                <br>Single $ <?php echo $price[1];?> Double $ <?php echo $price[2];?>
                            </td>
                            <!-- update the subtotal once cafeqty had been changed -->
                            <td align="center">
                                <input type="text" id="cafeSqty" name='cafeSqty' onchange="cafe_subtotal(<?php echo $price[1];?>, <?php echo $price[2];?>)" 
                                size="3" maxlength="3">
                                <input type="text" id="cafeDqty" name='cafeDqty' onchange="cafe_subtotal(<?php echo $price[1];?>, <?php echo $price[2];?>)" 
                                size="3" maxlength="3">
                            </td>
                            <td id="output2">Subtotal:<br>$0</td>
                        </tr>
                        <tr id="capp">
                            <th>Iced Cappuccino</th>
                            <td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.
                                <br>Single $ <?php echo $price[3];?> Double $ <?php echo $price[4];?>
                            </td>
                            <!-- update the subtotal once cappqty had been changed -->
                            <td align="center">
                                <input type="text" id="cappSqty" name='cappSqty' size="3" onchange="capp_subtotal(<?php echo $price[3];?>, <?php echo $price[4];?>)"
                                maxlength="3">
                                <input type="text" id="cappDqty" name='cappDqty' size="3" onchange="capp_subtotal(<?php echo $price[3];?>, <?php echo $price[4];?>)"
                                maxlength="3">
                            </td>
                            <!-- display the subtotal -->
                            <td id="output3">Subtotal:<br>$0</td>
                        </tr>
                        <tr>
                            <td colspan="4" id="total">Total:$0 </td>
                        </tr>
                    </table>
                    <input type="submit" name='submit' value="Submit">
                </form>
            </div>
        </div>
        <footer>
            <small><i>Copyright &copy; 2014 JavaJam Coffee House</i></small>
            <a href="MeiTong@Lew.com" id="email-link">
                <br> MeiTong@Lew.com
            </a>
        </footer>
    </div>
</body>

</html>