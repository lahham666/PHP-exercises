<?php

$server = "localhost";
$user = "root";
$pass = "root";
$dbName = "library";



$conn = new mysqli($server,$user,$pass,$dbName);


if ($conn -> connect_error){

    die("Connection failed :".$conn -> connect_error);
}

else
echo "Connection was established successfully";




?>