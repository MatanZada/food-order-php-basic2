<?php

//create constants to store non repeating values
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($mysql)); //database connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($mysql)); //select database
