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
                    <li><a href="salesReport.html"><strong>Daily Sales Report</strong></a></li>
                </ul>
        </div>
        <div id="rightcolumn">
            <div class="content">
                <h2>Coffee at JavaJam</h2>
                <form method="post" action="" id="form">
                    <?php include('submit_order.php')?>
                    <table border="0">
                        <tr>
                            <th>Just Java</th>
                            <td>Regular house blend, decaffeinated coffee, or flavor of the day.
                                <br>Endless Cup $ <?php echo $price[0];?>
                            </td>
                            <!-- text box to enter number -->
                            <!-- update the subtotal once javaqty had been changed -->
                            <td align="center"><input type="text" id="javaqty" onchange="java_subtotal(<?php echo $price[0];?>)"
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
                                <input type="text" id="cappSqty" size="3" onchange="capp_subtotal(<?php echo $price[3];?>, <?php echo $price[4];?>)"
                                maxlength="3">
                                <input type="text" id="cappDqty" size="3" onchange="capp_subtotal(<?php echo $price[3];?>, <?php echo $price[4];?>)"
                                maxlength="3">
                            </td>
                            <!-- display the subtotal -->
                            <td id="output3">Subtotal:<br>$0</td>
                        </tr>
                        <tr>
                            <td colspan="4" id="total">Total:$0 </td>
                        </tr>
                    </table>
                    <input type="submit" value="Submit">
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