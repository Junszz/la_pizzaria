<!DOCTYPE html>
<html lang="en">

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
            <img src="images/header.png" width="300" height="70" alt="title">
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
                        <td style="background-color: #f5f5dd"><label class="container"><input type="checkbox" class="larger" id="productCheck" onclick="generateProduct()"><span class="checkmark"></span></label></td>
                        <th>Total dollar and quantity sales by products</th>
                    </tr>
                    <tr>
                        <td style="background-color: #f5f5dd"><label class="container"><input type="checkbox" class="larger" id="catCheck" onclick="generateCat()"><span class="checkmark"></span></label></td>
                        <th>Total dollar and quantity sales by categories</th>
                    </tr>
                    <tr>
                        <th colspan="2">Popular option of best selling product: </th>
                    </tr>
                </table>
            </div>
        </div>
        <footer><em>Copyright &copy; 2014 JavaJam Coffee House<br>
            <a href="mailto:JunZe@Siew.com" id="email-link">JunZe@Siew.com</a></em>
        </footer>
    </div>
</body>

</html>