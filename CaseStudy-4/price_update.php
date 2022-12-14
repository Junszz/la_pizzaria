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
    <script type = "text/javascript"  src = "javascript/price_update.js" ></script>
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
                            <th style="width:100px">
                                <input type="text" name="java" id = "java_new" maxlength="6" size="6" onchange = "java_latest()">
                            </th>
                        </tr>
                        <tr>
                            <th style="background-color: #f5f5dd"><input type="checkbox" name="updateCafe"></th>
                            <th>Cafe au Lait</th>
                            <td>House blended coffee infused into a smooth, steamed milk.<br>
                               <strong>
                                <input type = "radio"  id = 'cafechoice1' name = "cafechoice" value = 'single' />Single $ <?php echo $price[1]?>
                                <input type = "radio"  id = 'cafechoice2' name = "cafechoice" value = 'double' />Double $ <?php echo $price[2]?>
                                </strong>
                            </td>
                            <th>
                                <input type="text" name="cafe" id = "cafe_new" maxlength="6" size="6" onchange = "cafe_latest()">
                            </th>
                        </tr>
                        <tr>
                            <th style="background-color: #f5f5dd"><input type="checkbox" name="updateCapp"></th>
                            <th>Iced Cappuccino</th>
                            <td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>
                                <strong>
                                    <input type = "radio" id = 'cappchoice1' name = "cappchoice" value = 'single' />Single $ <?php echo $price[3]?>
                                    <input type = "radio" id = 'cappchoice2' name = "cappchoice" value = 'double' />Double $ <?php echo $price[4]?>
                                </strong>
                            </td>
                            <th>
                                <input type="text" name="capp" id = "capp_new" maxlength="6" size="6" onchange = "capp_latest()">
                            </th>
                        </tr>
                    </table>
                    <br>
                    <input type="reset" value="Clear">
                    <input type="submit" value="Update" onclick="update_success()">
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