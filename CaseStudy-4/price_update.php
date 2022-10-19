<!DOCTYPE html>

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

<html lang="en">

<head>
    <title>Price Update</title>
    <script type = "text/javascript"  src = "menu.js" ></script>
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
            width: 600px;
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
            <img src="images/header.png" width="450" height="80" alt="title">
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
            </nav>
        </div>
        <!--
            1. Embed PHP script
            2. Add in text box, grey out the box when not selected
         -->
        <div id="rightcolumn">
            <div class="content">
                <h2>Coffee at JavaJam</h2>
                <form method="post" action="" id="form">
                    <?php include('update.php')?>
                    <table border="0">
                        <tr>
                            <th style="background-color: #f5f5dd"><input type="checkbox" name="updateJava"></th>
                            <th>Just Java</th>
                            <td>Regular house blend, decaffeinated coffee, or flavor of the day.<br>
                                <strong>Endless Cup $ <?php echo $price[0];?></strong>
                            </td>
                            <th>
                                <input type="text" name="java" maxlength="6" size="6">
                            </th>
                        </tr>
                        <tr>
                            <th style="background-color: #f5f5dd"><input type="checkbox" name="updateCafe"></th>
                            <th>Cafe au Lait</th>
                            <td>House blended coffee infused into a smooth, steamed milk.<br>
                               <strong>
                                <input type = "radio"  name = "cafechoice" value = 'single' />Single $ <?php echo $price[1]?>
                                <input type = "radio"  name = "cafechoice" value = 'double' />Double $ <?php echo $price[2]?>
                                </strong>
                            </td>
                            <th>
                                <input type="text" name="cafe" maxlength="6" size="6">
                            </th>
                        </tr>
                        <tr>
                            <th style="background-color: #f5f5dd"><input type="checkbox" name="updateCapp"></th>
                            <th>Iced Cappuccino</th>
                            <td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>
                                <strong>
                                    <input type = "radio"  name = "cappchoice" value = 'single' />Single $ <?php echo $price[3]?>
                                    <input type = "radio"  name = "cappchoice" value = 'double' />Double $ <?php echo $price[4]?>
                                </strong>
                            </td>
                            <th>
                                <input type="text" name="capp" maxlength="6" size="6">
                            </th>
                        </tr>
                    </table>
                    <br>
                    <input type="reset" value="Clear">
                    <input type="submit" value="Update">
                </form>
            </div>
        </div>
        <footer><em>Copyright &copy; 2014 JavaJam Coffee House<br>
            <a href="mailto:JunZe@Siew.com" id="email-link">JunZe@Siew.com</a></em>
        </footer>
    </div>
</body>

</html>