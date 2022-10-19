<!DOCTYPE html>
<html lang="en">
<?php
    @ $db = new mysqli("localhost", "root", "", "javajam");

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

    $query = "SELECT coffeeid, coffeeprice FROM coffee";
    $result = $db->query($query);
    if(!$result) {
        echo "Unable to fetch table coffee";
    }
    $price = [];
    $quantity = [];
    $cat = [];
    $type = [];
    while ($row = $result->fetch_assoc()) {
        $price[] = $row["coffeeprice"];
    }

    $query = "SELECT * FROM quantity";
    $result = $db->query($query);
    if(!$result) {
        echo "Unable to fetch table quantity";
    }
    while ($row = $result->fetch_assoc()) {
        $quantity[] = $row["coffeeqty"];
        $cat[] = $row["coffeecat"];
        $type[] = $row["coffeetype"];
    }

    $count = [];
    $sales = [];
    $highest_qty = 0;
    
    // Total quantity sales (qty)

    $count[0] = $quantity[0];
    $count[1] = $quantity[1] + $quantity[2];
    $count[2] = $quantity[3] + $quantity[4];

    // Total dollar sales ($$)
    $sales[0] = $quantity[0] * $price[0]; // Java total sales
    $sales[1] = $quantity[1] * $price[1] + $quantity[2] * $price[2]; // Cafe total sales
    $sales[2] = $quantity[1] * $price[1]; // Single Cafe sales
    $sales[3] = $quantity[2] * $price[2]; // Double Cafe sales
    $sales[4] = $quantity[3] * $price[3] + $quantity[4] * $price[4]; // Capp total sales
    $sales[5] = $quantity[3] * $price[3]; // Single Capp sales
    $sales[6] = $quantity[4] * $price[4]; // Double Capp sales

    // echo $sales[0].",".$sales[1].",".$sales[4]."<br>";

    // get largest among the three
    if ($sales[0] > $sales[1] && $sales[0] > $sales[4]){
        $highest_qty = 0;
    }
    else if ($sales[1] > $sales[4] && $sales[1] > $sales[0]){
        $highest_qty = 1;
    }
    else{
        $highest_qty = 2;
    }

    // if two values are the same
    if ($sales[0]==$sales[1] || $sales[0]==$sales[4] || $sales[1]==$sales[4]){
        // echo "Two same total sales detected!";
        // check qty
        if ($count[0] > $count[1] && $count[0] > $count[2]){
            $highest_qty = 0;
        }
        else if ($count[1] > $count[2] && $count[1] > $count[0]){
            $highest_qty = 1;
        }
        else{
            $highest_qty = 2;
        }
    }

    // echo "Highest cat: ".$highest_qty;

    // If Java is the most popular
    if ($highest_qty == 0){
        $most_sold = $cat[0];
        $most_sales = $type[0];
    }
    if($highest_qty == 1){
        $most_sold = $cat[1];
        if ($quantity[1] > $quantity[2]){
            $most_sales = $type[1]; // Single Cafe
        }
        else{
            $most_sales = $type[2]; // Double Cafe
        }
    }
    if($highest_qty == 2){
        $most_sold = $cat[3];
        if ($quantity[3] > $quantity[4]){
            $most_sales = $type[3]; // Single Capp
        }
        else{
            $most_sales = $type[4]; // Double Capp
        }
    }
?>

<head>
    <title>Daily Sales Report</title>
    <script type = "text/javascript"  src = "javascript/report.js" ></script>
    <meta charset="utf-8">
    <style>
        a:link {
            color: #704515;
        }

        /* visited link */
        a:visited {
            /* color: #0000FF; */
            color: #704515;
        }

        body {
            font-family: Verdana, Arial, sans-serif;
            background-color: #e7e0ad;

        }

        header {
            text-align: center;
            background-color: #d1b38e;
            color: #704515;
            font-size: 150%;
            padding: 8px 10px 8px 0px;

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
            color: #7a503e;
        }

        .content {
            padding: 5px 20px 20px 20px;
			font-size: 13px;
        }
        .container {
            display: block;
            position: relative;
            padding-left: 50px;
            margin-bottom: 30px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 30px;
            width: 30px;
            background-color: #e2d1b2;
            border: solid #000000;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
        background-color: #dc8b2e;
        }

        table {
            width: auto;
            height: 250px
        }

        table strong {
            color: #342211;
        }
        
        td {
            padding: 15px;
        }

        /* #checkbox {
            background-color: #f5f5dd
        } */

        th {
            font-size: 20px;
            text-align: left;
            padding: 15px;
            color:#342211;
        }

        /* tr:nth-of-type(odd) {
            background-color: #d1b38e;
        } */

        th .larger {
            width : 20 px;
            height : 20 px;
        }

        h2 {
            color: #342211;
        }

        nav ul {
            color: #7c5b3f;
            list-style-type: none;
            text-align: left;
            padding-left: 40px;
        }

        nav a {
            text-decoration: none;
        }

        footer {
            text-align: center;
            background-color: #d1b38e;
            padding: 15px 5px 15px 0;
        }

        #email-link {
            color: #704515;
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
        <div id="rightcolumn">
            <div class="content">   
                <h2>Click to generate daily sales report:</h2>
                <table border="0">
                    <tr>
                        <td style="background-color: #f5f5dd"><a href="sales_by_product.php"><img src="images/button.png" width="40" height="40" alt="checkbox"></a></td>
                        <th>Total dollar and quantity sales by products</th>
                    </tr>
                    <tr>
                        <td style="background-color: #f5f5dd"><a href="sales_by_cat.php"><img src="images/button.png" width="40" height="40" alt="checkbox"></a></td>
                        <th>Total dollar and quantity sales by categories</th>
                    </tr>
                    <tr>
                        <th colspan="2">Popular option of best selling product: <?php echo $most_sales?> of <?php echo $most_sold?></th>
                    </tr>
                </table>
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