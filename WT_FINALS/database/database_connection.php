<?php
//database

//database credentials
require "database_credentials.php";

//connection
$conn = mysqli_connect($servername, $firstname, $password, $dbname);
//test the connection
if ($conn) {
    return;
} else {
    die("Could not connect to the database" . mysqli_connect_error());
}
