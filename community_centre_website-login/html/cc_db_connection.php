<?php

// Variables to hold access details of the database
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";

$mysql_db = "community_centre";

// Variable to run sql function with database host, user and password details
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

// Function to check if connection successful
if(!$conn)
{
    die("Database connection failed.".mysqli_connect_error());
}
else
{
    echo "Connected to ".$mysql_db;
}

?>