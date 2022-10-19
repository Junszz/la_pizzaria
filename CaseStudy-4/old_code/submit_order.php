<?php
    @ $db = new mysqli("localhost", "root", "", "javajam");

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
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

    echo("Qty from database: ".$javaqty.','.$cafeSqty.','.$cafeDqty.','.$cappSqty.','.$cappDqty."<br>");

    $_POST = array();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['javaqty'])){$newjava = $_POST['javaqty'];} else{$newjava = 0;}
        if(isset($_POST['cafeSqty'])){$newcafe_single = $_POST['cafeSqty'];} else{$newcafe_single = 0;}
        if(isset($_POST['cafeDqty'])){$newcafe_double = $_POST['cafeDqty'];} else{$newcafe_double = 0;}
        if(isset($_POST['cappSqty'])){$newcapp_single = $_POST['cappSqty'];}else{$newcapp_single = 0;}
        if(isset($_POST['cappDqty'])){$newcapp_double = $_POST['cappDqty'];}else{$newcapp_double = 0;}

        echo("Qty from form: ".$newjava.','.$newcafe_single.','.$newcafe_double.','.$newcapp_single.','.$newcapp_double."<br>");
        
        // perform addition here
        $totaljava = number_format((int)($newjava + $javaqty));
        $totalcafe_single = number_format((int)($newcafe_single + $cafeSqty));
        $totalcafe_double = number_format((int)($newcafe_double + $cafeDqty));
        $totalcapp_single = number_format((int)($newcapp_single + $cappSqty));
        $totalcapp_double = number_format((int)($newcapp_double + $cappDqty));

        echo("New Qty: ".$totaljava.','.$totalcafe_single.','.$totalcafe_double.','.$totalcapp_single.','.$totalcapp_double."<br>");

        try{
            // store in database
            // UPDATE MyGuests SET lastname='Doe' WHERE id=2
            // $query = "update quantity set coffeeqty = ".$totaljava."where coffeeid = 1;\n";
            // $query = 'update quantity set coffeeqty = '.$totaljava.' where coffeeid = 1; \n'
            //         'update quantity set coffeeqty = '.$totalcafe_single.' where coffeeid = 2;'
            //         'update quantity set coffeeqty = '.$totalcafe_double.' where coffeeid = 3;'
            //         'update quantity set coffeeqty = '.$totalcapp_single.' where coffeeid = 4;'
            //         'update quantity set coffeeqty = '.$totalcapp_double.' where coffeeid = 5;';
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
    }

    $_POST = array();
    $db->close();
?>

<!-- 
    1. Fetch table value
    2. Accum total
    3. Return to DB
 -->