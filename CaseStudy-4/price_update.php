<?php
    @ $db = new mysqli("localhost", "root", "", "javajam");

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

    // global var

    // After user press update button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $query = "";
        if(isset($_POST['updateJava'])){
            // Checkbox is ticked
            if(!empty($_POST['java'])){
                // set to correct format
                // echo $_POST['java'];

                $new = number_format((float)$_POST['java'], 2, '.', '');
                // echo $new;

                if($new < 0){
                    echo "Input error";
                }
                $query = "update coffee set coffeeprice = ".$new."where coffeeid = 1;\n"; //query formulation
                $result = $db->query($query); //query submission
            }
        }
        if(isset($_POST['updateCafe'])){
            // Checkbox is ticked
            if(!empty($_POST['Cafe'])){
                // set to correct format
                $new = number_format((float)$_POST['java'], 2, '.', '');
                if($new < 0){
                    echo "Input error";
                }

                $query = "update coffee set coffeeprice = ".$new."where coffeeid = 1;\n"; //query formulation
                $result = $db->query($query); //query submission
            }
        }
        if(isset($_POST['updateCapp'])){
            // Checkbox is ticked
            if(!empty($_POST['java'])){
                // set to correct format
                $new = number_format((float)$_POST['java'], 2, '.', '');
                if($new < 0){
                    echo "Input error";
                }

                $query = "update coffee set coffeeprice = ".$new."where coffeeid = 1;\n"; //query formulation
                $result = $db->query($query); //query submission
            }
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

    }

    // catch (mysqli_sql_exception $e) {
    //     var_dump($e);   
    //     exit;
    // }
?>