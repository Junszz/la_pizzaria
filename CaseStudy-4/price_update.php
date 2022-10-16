<!DOCTYPE html>
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
            margin: auto;
            width: auto;
            padding: 0px 30px 0px 15px;
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
            padding: 15px;
            color:#342211;
        }

        tr:nth-of-type(odd) {
            background-color: #d1b38e;
        }

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
            <img src="title.png" width="300" height="70" alt="title">
        </header>
        <div id="leftcolumn">
            <nav>
                <ul>
                    <!-- <li><a href="index.html"><strong>Home</strong></a></li> -->
                    <li><a href="price_update.php"><strong>Product<br> Price <br>Update</strong></a></li>
                    <br>
                    <li><a href="salesReport.html"><strong>Daily<br>Sales<br>Report<br></strong></a></li>
                    <!-- <li><a href="jobs.html"><strong>Jobs</strong></a></li> -->
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
                                <input type = "radio"  name = "cafechoice" value = 'single' />Single <?php echo $price[1]?>
                                <input type = "radio"  name = "cafechoice" value = 'double' />Double <?php echo $price[2]?>
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
                                    <input type = "radio"  name = "cappchoice" value = 'single' />Single <?php echo $price[3]?>
                                    <input type = "radio"  name = "cappchoice" value = 'double' />Double <?php echo $price[4]?>
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