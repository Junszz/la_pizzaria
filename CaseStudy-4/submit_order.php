<?php
    @ $db = new mysqli("localhost", "root", "", "javajam");

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }
    
    // After user press update button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $query = "";
    }

?>