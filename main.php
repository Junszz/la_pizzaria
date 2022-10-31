<?php //menu.php
    set_include_path("C:\xampp\htdocs\la_pizzaria");

    // start the session here
    session_start();

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'lapizzaria';

    try {
    	$db = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }

    // echo "Connected to DB!"; 

    // on default show menu.php
    // if navigated to certain page, just the page

    $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'menu';
    // http://localhost:8000/la_pizzaria/index.php?page=pizza
    // http://localhost:8000/la_pizzaria/index.php?page=pasta
    // Include and show the requested page
    include $page . '.php';
?>