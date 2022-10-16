<?php
    @ $db = new mysqli("localhost", "root", "", "javajam");

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

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

                if($new > 0){
                    $query = "update coffee set coffeeprice = ".$new."where coffeeid = 1;\n"; //query formulation
                    $result = $db->query($query); //query submission
                }
                else{
                    echo "Input error";
                }

            }
        }

        if(isset($_POST['updateCafe'])){
            // Checkbox is ticked
            if(!empty($_POST['cafechoice'])){
                if ($_POST['cafechoice'] == 'single'){
                    // update single price

                    $new = number_format((float)$_POST['cafe'], 2, '.', '');
                    if($new > 0){
                        $query = "update coffee set coffeeprice = ".$new."where coffeeid = 2;\n"; //query formulation
                        $result = $db->query($query); //query submission
                    }
                    else{
                        echo "Input error";
                    }
                }

                if ($_POST['cafechoice'] == 'double'){
                    // update single price

                    $new = number_format((float)$_POST['cafe'], 2, '.', '');
                    if($new > 0){
                        $query = "update coffee set coffeeprice = ".$new."where coffeeid = 3;\n"; //query formulation
                        $result = $db->query($query); //query submission
                    }
                    else{
                        echo "Input error";
                    }
                }
            }
        }

        if(isset($_POST['updateCapp'])){
            // Checkbox is ticked
            if(!empty($_POST['cappchoice'])){
                if ($_POST['cappchoice'] == 'single'){
                    // update single price

                    $new = number_format((float)$_POST['capp'], 2, '.', '');
                    if($new > 0){
                        $query = "update coffee set coffeeprice = ".$new."where coffeeid = 4;\n"; //query formulation
                        $result = $db->query($query); //query submission
                    }
                    else{
                        echo "Input error";
                    }
                }

                if ($_POST['cappchoice'] == 'double'){
                    // update single price

                    $new = number_format((float)$_POST['capp'], 2, '.', '');
                    if($new > 0){
                        $query = "update coffee set coffeeprice = ".$new."where coffeeid = 5;\n"; //query formulation
                        $result = $db->query($query); //query submission
                    }
                    else{
                        echo "Input error";
                    }
                }
            }
        }



    }
?>