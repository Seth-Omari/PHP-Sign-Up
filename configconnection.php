<?php
$hostname = "localhost";
$username = "carbuzz";
$password = "carbuzz";
$dbname = "carbuzz_database";
//create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
//check connection
if(!$conn){
    die("connection failed: ". mysqli_connect_error());
}
echo "connected successfully";