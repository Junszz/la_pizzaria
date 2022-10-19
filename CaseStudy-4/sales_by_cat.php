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
    $sales[4] = $quantity[3] * $price[3] + $quantity[4] * $price[4]; // Capp totall sales
    $sales[5] = $quantity[3] * $price[3]; // Single Capp sales
    $sales[6] = $quantity[4] * $price[4]; // Double Capp sales

    for ($x=0;$x<3;$x++){
        if($count[$x] >= $highest_qty){
            $highest_qty = $x;
        }
    }

    // If Java is the most popular
    if ($highest_qty == 0){
        $most_sold = $cat[0];
        $most_sales = $type[0];
    }
    if($highest_qty == 1){
        $most_sold = $cat[1];
        if ($sales[2] > $sales[3]){
            $most_sales = $type[1]; // Single Cafe
        }
        else{
            $most_sales = $type[2]; // Double Cafe
        }
    }
    if($highest_qty == 2){
        $most_sold = $cat[2];
        if ($sales[5] > $sales[6]){
            $most_sales = $type[3]; // Single Capp
        }
        else{
            $most_sales = $type[4]; // Double Capp
        }
    }

    // echo "Highest cat: ".$most_sold;
    // echo "Highest sales: ".$most_sales;
    function generate_by_product(){

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
            /* margin-left: 155px; */
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
            width: 450px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
        }
        /*
        table strong {
            color: #342211;
        }
        
        td {
            padding: 15px;
        }


        th {
            font-size: 20px;
            text-align: left;
            padding: 15px;
            color:#342211;
        }

        th .larger {
            width : 20 px;
            height : 20 px;
        } */

        button {
            margin-bottom: 40px;
            margin-left: 20px;
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
			font-size: 11px;
            text-align: center;
            background-color: #d1b38e;
            color: #000000;
            padding: 20px 10px 20px 0px;
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
        <div id="rightcolumn">
            <div class="content">   
                <h2>Total dollar and quantity sales by categories</h2>
                <table border="1">
                    <tr>
                        <th>Category</th>
                        <th>Total Dollar Sales</th>
                        <th>Quantity Sales</th>
                    </tr>
                    <tr>
                        <td><?php echo $type[0]; ?></td>
                        <th>$ <?php echo $sales[0]; ?></td>
                        <th><?php echo $quantity[0]; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $type[1]; ?></td>
                        <th>$ <?php echo ($sales[2]+$sales[5]); ?></td>
                        <th><?php echo ($quantity[1]+$quantity[3]); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $type[2]; ?></td>
                        <th>$ <?php echo ($sales[3]+$sales[6]); ?></td>
                        <th><?php echo ($quantity[2]+$quantity[4]); ?></td>
                    </tr>
                </table>
                <p><?php echo $cat[1]; ?> = <?php echo $quantity[1]; ?> <?php echo $type[1]; ?>  ( $ <?php echo $sales[2]; ?>), <?php echo $quantity[2]; ?> <?php echo $type[2]; ?> ( $ <?php echo $sales[3]; ?>)</p>
                <p><?php echo $cat[3]; ?> = <?php echo $quantity[3]; ?> <?php echo $type[3]; ?>  ( $ <?php echo $sales[5]; ?>), <?php echo $quantity[4]; ?> <?php echo $type[4]; ?> ( $ <?php echo $sales[6]; ?>)</p>
            </div>

            <form action="salesReport.php">
                <button>&larr; Back</button>
            </form>

        </div>
        <footer><em>Copyright &copy; 2014 JavaJam Coffee House<br>
            <a href="mailto:JunZe@Siew.com" id="email-link">JunZe@Siew.com</a></em>
        </footer>
    </div>
</body>

</html>